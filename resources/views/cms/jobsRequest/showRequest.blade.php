@extends('cms.parent')

@section('page-name','All Request-Jobs')
@section('main-page','Content Management')
@section('sub-page','Request-Jobs')
@section('page-name-small','All Request-Jobs')

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

                        <div class="form-row">
                            <div class="col-6">
                                <label for="name" >Name:</label>
                                <input name="name" type="text" class="form-control" value="{{$jobsRequest->name}}" disabled/>

                            </div>

                            <div class="col-6">
                                <label for="name" >Gender:</label>
                                <input name="gender" type="text" class="form-control" value="{{$jobsRequest->gender}}" disabled/>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name" >Email:</label>
                                <input name="email" type="text" class="form-control" value="{{$jobsRequest->email}}" disabled/>

                            </div>

                            <div class="col-6">
                                <label for="name" >Address:</label>
                                <input name="address" type="text" class="form-control" value="{{$jobsRequest->address}}" disabled/>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name" >Phone:</label>
                                <input name="phone" type="text" class="form-control" value="{{$jobsRequest->phone}}" disabled/>

                            </div>

                            <div class="col-6">
                                <label for="name" >DOB:</label>
                                <input name="dob" type="text" class="form-control" value="{{$jobsRequest->dob}}" disabled/>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name" >Status:</label>
                                <input name="status" type="text" class="form-control" value="{{$jobsRequest->status}}"disabled />

                            </div>

                            <div class="col-6">
                                <label for="name" >Study:</label>
                                <input name="study" type="text" class="form-control" value="{{$jobsRequest->study}}" disabled/>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name" >CV:</label><br>
{{--                                <input name="cv" type="text" class="form-control" disabled />--}}
                                <a href={{url(Storage::url($jobsRequest->cv ?? ''))}} download  >Download CV</a>
                            </div>

                            <div class="col-6">
                                <label for="name" >University:</label><br>
{{--                                <input name="university" type="text" class="form-control"    />--}}
                                @foreach($jobsRequest->images as $image)
                                    @if($image->url_images  != null)
                                <a href={{url(Storage::url($image->url_images ?? ''))}} download  >Download Image</a><br>
                                @endif
                                @endforeach
                            </div>
                        </div>




                    </div>
{{--                    <div class="card-footer">--}}
{{--                        <div class="row">--}}
{{--                        <div class="col-9">--}}
{{--                            <button type="button"  class="btn btn-primary mr-2">Submit</button>--}}
{{--                            <button type="reset" class="btn btn-secondary">Cancel</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
<!--end::Container-->
@endsection
@section('scripts')

@endsection
