@extends('cms.parent')

@section('page-name','All Comments')
@section('main-page','Content Management')
@section('sub-page','Comments')
@section('page-name-small','All Comments')

@section('styles')

@endsection

@section('content')
<!--begin::Advance Table Widget 5-->
<div class="card card-custom gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Comments</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Manage Comments</span>
        </h3>

{{--        <div class="card-toolbar">--}}
{{--            <a href="{{route('news.create')}}" class="btn btn-info font-weight-bolder font-size-sm">New--}}
{{--                Offer</a>--}}
{{--        </div>--}}


    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                <thead>
                    <tr class="text-uppercase">
                    <th style="min-width: 50px">#</th>
                    <th style="min-width: 100px">image</th>
                    <th style="min-width: 150px">Name</th>
                    <th style="min-width: 150px">Comment</th>
                    <th style="min-width: 150px">Status</th>
                    <th style="min-width: 150px">Created At</th>
                    <th style="min-width: 120px">Updated At</th>
                    {{-- <th style="min-width: 120px">Settings</th> --}}
                  <th class="pr-0 text-right" style="min-width: 160px">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($comments as $comment)
                    <tr>
                        <?php $i++; ?>
                        <td>{{ $i }}</td>
                        <td>
                            <img class="img-circle img-bordered-sm" width="65" height="65"
                                 src="{{url(Storage::url($comment->img->url_image ?? ''))}}"  alt="User Image">
                           </td>
                        <td>{{$comment->name ?? ''}}</td>
                        <td>{{$comment->comment ?? ''}}</td>
                        <td>
                             <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox"  data-id="{{$comment->id}}"
                                    @if($comment->status == 1) checked @endif id="status">
                                    <span></span>
                                </label>
                            </span>
                        </td>
                        <td>{{$comment->created_at->diffForHumans()}}</td>
                        <td>{{$comment->updated_at->diffForHumans()}}</td>

                        <td class="pr-0 text-right">

                            <a href="#" onclick="confirmDestroy('{{$comment->id}}',this)"
                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <path
                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                        </td>
                    @endforeach
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 5-->
@endsection

@section('scripts')

<script>
    function confirmDestroy(id, reference){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                destroy(id, reference);
            }
            });
    }

    function destroy(id, reference) {
        //JS - Axios
        axios.get('/cms/admin/delete-comment/'+id)
            .then(function (response) {
                // handle success
                console.log(response);
                reference.closest('tr').remove();
                showMessage(response.data);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
                showMessage(error.response.data);
            })

    }

    function showMessage(data) {
        Swal.fire({
            icon: data.icon,
            title: data.title,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>

<script>
    $(document).on('click','#status',function (){
        var id = $(this).data('id');
        var status = document.getElementById('status').checked;
        $.ajax({
            url: "{{ route('status-comment') }}",
            type: "get",
            data: {
                id : id,
                status :status
            },
            success: function (data) {
                // window.location.reload();

            },

        });
    })
</script>
@endsection
