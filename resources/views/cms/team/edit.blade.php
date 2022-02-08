@extends('cms.parent')

@section('page-name','Create Category')
@section('main-page','Content Management')
@section('sub-page','Categories')
@section('page-name-small','Create Category')

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
                 
                    <h3 class="text-dark font-weight-bold mb-10">Image</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Image</label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                             </p>
                        <img id="previewImg"  src="{{url(Storage::url($about->imgVid->url_image))}}" width="100px" height="100px" alt="Placeholder">
                        <p>
                          </div>      
                    </div>

                    <h3 class="text-dark font-weight-bold mb-10">Video</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Video:<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Video</label>
                            <input type="file" id="video" name="video" accept="video/*" /><br/>
                            <video id="vid" src="{{url(Storage::url($about->imgVid->url_video))}}" width="200" height="150" controls></video>

                    
                          </div>      
                    </div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                        <div class="col-6">
                            <input name="name[ar]" type="text" class="form-control" id="name" value="{{$about->getTranslation('name', 'ar')}}" placeholder="Please enter your name" />
                            <span class="form-text text-muted">Please enter arabic name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name (En):</label>
                        <div class="col-6">
                            <input name="name[en]" type="text" class="form-control" id="name_en" value="{{$about->getTranslation('name', 'en')}}" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div> 
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group">
                        <label>Details (Ar):</label>
                        <textarea class="form-control" name="details[ar]" id="details"  rows="3" placeholder="Enter ...">{{$about->getTranslation('details', 'ar')}}</textarea>
                    </div>
                    

                    <div class="form-group">
                        <label>Details (En):</label>
                        <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ...">{{$about->getTranslation('details', 'en')}}</textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    
                    <h3 class="text-dark font-weight-bold mb-10">Massage</h3>
                    <div class="form-group">
                        <label>Massage (Ar):</label>
                        <textarea class="form-control" name="massage[ar]" id="massage" rows="3" placeholder="Enter ...">{{$about->getTranslation('massage', 'ar')}}</textarea>
                    </div>
                    

                    <div class="form-group">
                        <label>Massage (En):</label>
                        <textarea class="form-control" name="massage[en]" id="massage_en" rows="3" placeholder="Enter ...">{{$about->getTranslation('massage', 'en')}}</textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <div class="separator separator-dashed my-10"></div>
                    
                    <h3 class="text-dark font-weight-bold mb-10">Objectives</h3>
                    <div class="form-group">
                        <label>Objectives (Ar):</label>
                        <textarea class="form-control" name="Objectives[ar]" id="Objectives" rows="3" placeholder="Enter ...">{{$about->getTranslation('Objectives', 'ar')}}</textarea>
                    </div>
                    

                    <div class="form-group">
                        <label>Objectives (En):</label>
                        <textarea class="form-control" name="Objectives[en]" id="Objectives_en" rows="3" placeholder="Enter ...">{{$about->getTranslation('Objectives', 'en')}}</textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <div class="separator separator-dashed my-10"></div>
                    
                    <h3 class="text-dark font-weight-bold mb-10">Team</h3>
                    <div class="form-group">
                        <label>Team (Ar):</label>
                        <textarea class="form-control" name="team[ar]" id="team" rows="3" placeholder="Enter ...">{{$about->getTranslation('team', 'ar')}}</textarea>
                    </div>
                    

                    <div class="form-group">
                        <label>Team (En):</label>
                        <textarea class="form-control" name="team[en]" id="team_en" rows="3" placeholder="Enter ...">{{$about->getTranslation('team', 'en')}}</textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="update('{{$about->id}}')" class="btn btn-primary mr-2">Submit</button>
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
        var file = $("input[type=file]").get(0).files[0];
 
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
     function update(id){
        let formData = new FormData($('#create-form')[0]);
         formData.append('_method','PUT');
        axios.post('/cms/admin/about/'+id, formData).then(function (response) {
            // handle success
            console.log(response);
            // document.getElementById('create-form').reset();
            toastr.success(response.data.message);
            window.location.href = '/cms/admin/about';
        }).catch(function (error) {
            // handle error
            console.log(error);
            toastr.error(error.response.data.message);
        });
    }    

    </script>
@endsection 