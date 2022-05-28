@extends('cms.parent')

@section('page-name','Edit SEO')
@section('main-page','Content Management')
@section('sub-page','SEO')
@section('page-name-small','Edit SEO')

@section('styles')

@endsection

@section('content')
    <!--begin::Container-->
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form Layout</h3>
                </div>
                <!--begin::Form-->
                <form id="create-form">
                    @csrf
                    <div class="card-body">

                        <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Meta Title</label>
                            <div class="col-6">
                                <input name="meta_title" type="text" class="form-control" id="meta_title" value="{{$seo->meta_title}}" placeholder="Please enter meta title" />
                                <span class="form-text text-muted">Please enter meta title</span>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Meta Author:</label>
                            <div class="col-6">
                                <input name="meta_author" type="text" class="form-control" id="meta_author" value="{{$seo->meta_author}}" placeholder="Please enter meta_author" />
                                <span class="form-text text-muted">Please enter meta_author</span>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <label for="name" class="col-3 col-form-label">Meta Keyword:</label>
                            <div class="col-6">
                                <input name="meta_keyword" type="text" class="form-control" id="meta_keyword" value="{{$seo->meta_keyword}}" placeholder="Please enter meta keyword" />
                                <span class="form-text text-muted">Please enter meta keyword</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Meta Description:</label>
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="3" placeholder="Enter ...">{{$seo->meta_description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Google Analytics:</label>
                            <textarea class="form-control" name="google_analytics" id="google_analytics" rows="3" placeholder="Enter ...">{{$seo->google_analytics}}</textarea>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-9">
                                <button type="button" onclick="update('{{$seo->id}}')" class="btn btn-primary mr-2">Update</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Container-->
@endsection

@section('scripts')

    <script>
        function update(id){
            let formData = new FormData($('#create-form')[0]);
            formData.append('_method','PUT');
            axios.post('/cms/admin/seo/'+id, formData).then(function (response) {
                // handle success
                console.log(response);
                // document.getElementById('create-form').reset();
                toastr.success(response.data.message);
                window.location.href = '/cms/admin/seo';
            }).catch(function (error) {
                let messages = '';
                if(typeof  error.response.data.message == 'string'){
                    toastr.error(error.response.data.message);
                }else{
                    for (const [key, value] of Object.entries(error.response.data.message)) {
                        messages+='-'+value+'</br>';
                    }
                    toastr.error(messages);
                }

            });
        }
    </script>
@endsection
