@extends('cms.parent')

@section('page-name','Create About')
@section('main-page','Content Management')
@section('sub-page','About')
@section('page-name-small','Create About')

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
                    <h3 class="text-dark font-weight-bold mb-10">Manager</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image Manager:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Image Manager</label>
                            <input type="file" id="image_manager" name="image_manager" accept="image/*" onchange="preview_manager(this);" /><br/>
                            </p>
                            <img id="preview" src={{asset('cms/assets/media/users/blank.png')}} width="100px" height="100px" alt="Placeholder">
                            <p>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name Manager (Ar):</label>
                        <div class="col-6">
                            <input name="name_manager[ar]" type="text" class="form-control" id="name_manager" placeholder="Please enter your name" />

                            <span class="form-text text-muted">Please enter arabic name </span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name Manager (En):</label>
                        <div class="col-6">
                            <input name="name_manager[en]" type="text" class="form-control" id="name_manager" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Details Manager (Ar):</label>
                        <textarea class="form-control" name="details_manager[ar]" id="details_manager" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Details Manager (En):</label>
                        <textarea class="form-control" name="details_manager[en]" id="details_manager" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">About</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image About:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Image About</label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                        </p>
                        <img id="previewImg" src={{asset('cms/assets/media/users/blank.png')}} width="100px" height="100px" alt="Placeholder">
                        <p>
                          </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-3 col-form-label">Video About:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Video About</label>
                            <input type="file" id="video" name="video" accept="video/*" /><br/>
                            <video id="vid" width="200" height="150" controls></video>

                          </div>
                    </div>


                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name About (Ar):</label>
                        <div class="col-6">
                            <input name="name[ar]" type="text" class="form-control" id="name" placeholder="Please enter your name" />

                            <span class="form-text text-muted">Please enter arabic name</span>
                        </div>

                        <div class="col-6">
                            <input name="type" type="hidden" class="form-control" id="type" value="create" placeholder="Please enter your name" />


                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name About (En):</label>
                        <div class="col-6">
                            <input name="name[en]" type="text" class="form-control" id="name_en" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <div class="form-group">
                        <label>Details About (Ar):</label>
                        <textarea class="form-control" name="details[ar]" id="details" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Details About (En):</label>
                        <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>


                    <div class="form-group">
                        <label>Massage About (Ar):</label>
                        <textarea class="form-control" name="massage[ar]" id="massage" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Massage About (En):</label>
                        <textarea class="form-control" name="massage[en]" id="massage_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>


                    <div class="form-group">
                        <label>Objectives About (Ar):</label>
                        <textarea class="form-control" name="Objectives[ar]" id="Objectives" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Objectives About (En):</label>
                        <textarea class="form-control" name="Objectives[en]" id="Objectives_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>


                    <div class="form-group">
                        <label>Contribution About (Ar):</label>
                        <textarea class="form-control" name="contribution[ar]" id="Objectives" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Contribution About (En):</label>
                        <textarea class="form-control" name="contribution[en]" id="Objectives_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>


                    <div class="form-group">
                        <label>Team About (Ar):</label>
                        <textarea class="form-control" name="team[ar]" id="team" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Team About (En):</label>
                        <textarea class="form-control" name="team[en]" id="team_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="store()" class="btn btn-primary mr-2">Submit</button>
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
<script src="{{asset('cms/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function previewFile(input){
        var file = $("#image").get(0).files[0];

        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

<script>
    function preview_manager(input){
        var file =  $("#image_manager").get(0).files[0];

        if(file){
            var reader = new FileReader();
            reader.onload = function(){
                $("#preview").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>

<script>
    const input = document.getElementById('video');
    const video = document.getElementById('vid');
    const videoSource = document.createElement('source');

    input.addEventListener('change', function() {
      const files = this.files || [];

      if (!files.length) return;

      const reader = new FileReader();

      reader.onload = function (e) {
        videoSource.setAttribute('src', e.target.result);
        video.appendChild(videoSource);
        video.load();
        video.play();
      };

      reader.onprogress = function (e) {
        console.log('progress: ', Math.round((e.loaded * 100) / e.total));
      };

      reader.readAsDataURL(files[0]);
    });
    </script>

    <script>
     function store(){
        let formData = new FormData($('#create-form')[0]);
        axios.post('/cms/admin/about', formData, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            }
        }).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/about';
        }).catch(function (error) {
            console.log( error.response.data.message);
            let messages = '';
            for (const [key, value] of Object.entries(error.response.data.message)) {
                messages+='-'+value+'</br>';
            }
            toastr.error(messages);
        });
     }

    </script>
@endsection
