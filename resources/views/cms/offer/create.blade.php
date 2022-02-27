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

                    <h3 class="text-dark font-weight-bold mb-10">Image Cover</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image Cover :<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Image Cover</label>
                            <input type="file" id="image" name="image" accept="image/*" onchange="previewFile(this);" /><br/>
                        </p>
                        <img id="previewImg" src={{asset('cms/assets/media/users/blank.png')}} width="100px" height="100px" alt="Placeholder">
                        <p>
                          </div>
                    </div>

                    <h3 class="text-dark font-weight-bold mb-10">Images</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Images :<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="title">Choose Images</label>
                            <input type="file" id="files" name="files[]" accept="image/*" multiple/><br/>
                            <div id="frames"></div>
                        </div>
                    </div>

                    <h3 class="text-dark font-weight-bold mb-10">Video</h3>
                    <div class="form-group row">
                     <label class="col-3 col-form-label">Video:<span class="text-danger">*</span></label>
                        <div class="form-group">
                          <label for="title">Choose Video</label>
                        <input type="file" name="video" id="file1"  accept="video/*" onchange="uploadFile()"><br>
                        <br>
                        <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>

                        <h3 id="status"></h3>
                        <p id="loaded_n_total"></p>
                        </div>
                        </div>

                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                    <div class="form-group row mt-4">
                        <label for="name" class="col-3 col-form-label">Name (Ar):</label>
                        <div class="col-6">
                            <input name="name[ar]" type="text" class="form-control" id="name" placeholder="Please enter your name" />

                            <span class="form-text text-muted">Please enter arabic name</span>
                        </div>

                        <div class="col-6">
                            <input name="type" type="hidden" class="form-control" id="type" value="create" placeholder="Please enter your name" />


                        </div>

                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name (En):</label>
                        <div class="col-6">
                            <input name="name[en]" type="text" class="form-control" id="name_en" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group">
                        <label>Details (Ar):</label>
                        <textarea class="form-control" name="details[ar]" id="details" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Details (En):</label>
                        <textarea class="form-control" name="details[en]" id="details_en" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Terms</h3>
                    <div class="form-group">
                        <label>Terms (Ar):</label>
                        <textarea class="form-control" name="terms[ar]" id="terms" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Terms (En):</label>
                        <textarea class="form-control" name="terms[en]" id="terms" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Subscription</h3>
                    <div class="form-group">
                        <label>Subscription (Ar):</label>
                        <textarea class="form-control" name="subscription[ar]" id="subscription" rows="3" placeholder="Enter ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label>Subscription (En):</label>
                        <textarea class="form-control" name="subscription[en]" id="subscription" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="separator separator-dashed my-10"></div>

                    <h3 class="text-dark font-weight-bold mb-10">Expiry Date</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Expiry Date:</label>
                        <div class="col-3">
                            <input name="expiry_date" type="date" class="form-control" id="example-date-input" placeholder="Enter expiry_date" />
                            <span class="form-text text-muted">Please enter expiry_date</span>
                        </div>
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

{{--Start_Image--}}

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

{{--End_Image--}}


{{--Start_Images--}}

<script>
    $(document).ready(function(){
        $('#files').change(function(){
            $("#frames").html('');
            for (var i = 0; i < $(this)[0].files.length; i++) {
                $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
            }
        });
    });
</script>

{{--End_Images--}}

{{--<script>--}}
{{--    const input = document.getElementById('video');--}}
{{--    const video = document.getElementById('vid');--}}
{{--    const videoSource = document.createElement('source');--}}

{{--    input.addEventListener('change', function() {--}}
{{--      const files = this.files || [];--}}

{{--      if (!files.length) return;--}}

{{--      const reader = new FileReader();--}}

{{--      reader.onload = function (e) {--}}
{{--        videoSource.setAttribute('src', e.target.result);--}}
{{--        video.appendChild(videoSource);--}}
{{--        video.load();--}}
{{--        video.play();--}}
{{--      };--}}

{{--      reader.onprogress = function (e) {--}}
{{--        console.log('progress: ', Math.round((e.loaded * 100) / e.total));--}}
{{--      };--}}

{{--      reader.readAsDataURL(files[0]);--}}
{{--    });--}}
{{--    </script>--}}

<script>
     function store() {
         let formData = new FormData($('#create-form')[0]);
             axios.post('/cms/admin/offers', formData, {
                 headers: {
                     'Content-Type': 'application/json',
                     'Accept': 'application/json',
                 }
             }).then(function (response) {
                 console.log(response);
                 toastr.success(response.data.message);
                 window.location.href = '/cms/admin/offers';
             }).catch(function (error) {
                 console.log(error);
                 toastr.error(error.response.data.message);
             });
         }
</script>

<script>
    function _(el) {
        return document.getElementById(el);
    }

    function uploadFile() {
        var file = _("file1").files[0];
        // alert(file.name+" | "+file.size+" | "+file.type);
        var formdata = new FormData();
        formdata.append("file1", file);
        var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "file_upload_parser.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
        //use file_upload_parser.php from above url
        ajax.send(formdata);
    }

    function progressHandler(event) {
        _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
    }

    function completeHandler(event) {
        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 0; //wil clear progress bar after successful upload
    }

    function errorHandler(event) {
        _("status").innerHTML = "Upload Failed";
    }

    function abortHandler(event) {
        _("status").innerHTML = "Upload Aborted";
    }

</script>

@endsection
