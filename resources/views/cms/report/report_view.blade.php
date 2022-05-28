@extends('cms.parent')

@section('title','All Report')

@section('page-name','All Report')
@section('main-page','HUMAN RESOURCES')
@section('sub-page','Reports')
@section('page-name-small','All Report')

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
            <form method="post" action="{{ route('search-by-date') }}">
                @csrf
                <div class="card-body">

                    <h3 class="text-dark font-weight-bold mb-10">Search By Date</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Date:</label>
                        <div class="col-3">
                            <input name="date" type="date" class="form-control" id="example-date-input" placeholder="Enter date" />
                            <span class="form-text text-muted">Please enter date</span>
                        </div>
                    </div>

                </div>
{{--                <div class="card-footer">--}}
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="submit" class="btn btn-primary mr-2">Search</button>
{{--                            <button type="reset" class="btn btn-secondary">Cancel</button>--}}
                        </div>
                    </div>
{{--                </div>--}}
            </form>
            <div class="separator separator-dashed my-10"></div>

            <form method="post" action="{{route('search-by-month')}}">
                @csrf
                <div class="card-body">

                    <h3 class="text-dark font-weight-bold mb-10">Search By Month</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Select Month:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7"  name="month" id="month"
                                        title="Choose one of the following..." tabindex="null" data-live-search="true">

                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="Jun">Jun</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>

                                </select>
                            </div>
                            <span class="form-text text-muted">Please Select Month</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Select Year:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7"  name="year_name" id="year_name"
                                        title="Choose one of the following..." tabindex="null" data-live-search="true">

                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>

                                </select>
                            </div>
                            <span class="form-text text-muted">Please Select Year</span>
                        </div>
                    </div>

                </div>
{{--                <div class="card-footer">--}}
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="submit"  class="btn btn-primary mr-2">Search</button>
                            {{--                            <button type="reset" class="btn btn-secondary">Cancel</button>--}}
                        </div>
                    </div>
{{--                </div>--}}
            </form>
            <div class="separator separator-dashed my-10"></div>
            <form method="post" action="{{ route('search-by-year') }}">
                @csrf
                <div class="card-body">

                    <h3 class="text-dark font-weight-bold mb-10">Search By Year</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Select Year:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7"  name="year" id="year"
                                        title="Choose one of the following..." tabindex="null" data-live-search="true">

                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>

                                </select>
                            </div>
                            <span class="form-text text-muted">Please Select Year</span>
                        </div>
                    </div>

                </div>
{{--                 <div class="card-footer">--}}
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-9">
                        <button type="submit" class="btn btn-primary mr-2">Search</button>
                        {{--                            <button type="reset" class="btn btn-secondary">Cancel</button>--}}
                    </div>
                </div>
                <br>
{{--               </div>--}}
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
