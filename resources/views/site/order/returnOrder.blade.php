@extends('site.profile.profile')

@section('titel','الطلبات المرجعة')



@push('contact')


    <div class="col-lg-9">
        <div  id="filter-bar">
            <div class="nav-search">
                <div>
                    <span class="number-of-search-result" id="search_number">{{count($orders)}}</span>
                    <span> منتجات </span>
                    <span id="search-names"> </span>
                </div>
                <div>
                    <span class="word-search">{{trans('site/product.show_by')}}</span>
                    <select name="search_by" id="sort-select">
                        <option value="desc">{{trans('site/product.desc')}}</option>
                        <option value="asc">{{trans('site/product.asc')}}</option>
                    </select>
                </div>
            </div>
        </div>



        <!--begin::Table-->
        <div class="table">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                <thead>
                                        <tr class="text-uppercase">
                                            <th style="min-width: 50px">#</th>
                                            <th style="min-width: 100px">التاريخ</th>
                                            <th style="min-width: 100px">المجموع</th>
                                            <th style="min-width: 120px">وسيلة الدفع</th>
                                            <th style="min-width: 120px">الفاتورة</th>
                                            <th style="min-width: 120px">سبب الارجاع</th>
                                            <th style="min-width: 150px">حالة الطلب</th>
                                            <th class="pr-0 text-right" style="min-width: 60px">العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody id="updateDiv">
                                        @include('site.order.sort.returnOrders-sort')
                                    </table>
                                </div>
                                <!--end::Table-->
                                <div class="row">
                                    <div class="mx-auto mt-5" id="pagination-div">
                                        <nav class="custom-pagination">

                                        </nav>
                                    </div>
                                </div>
                            </div>



@endpush


@section('script')
    <script>
        $(document).on('click','#sort-select',function () {
            var sort = $('#sort-select').val();

            $.ajax({
                url: "{{ route('site.return.order.list') }}",
                type: "get",
                data: {
                    sort: sort
                },
                success: function (data) {
                    $('#updateDiv').html(data.view);
                    $('#sort-select').val(data.order);
                },

            });
        });

    </script>
@endsection


