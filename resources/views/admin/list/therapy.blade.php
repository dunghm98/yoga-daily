@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Trị liệu</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Trị liệu</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="{{ route('createTherapy')  }}"  class="btn btn-primary float-right mt-2">Thêm trị liệu</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                    <tr>
                                        <th>Mã TL</th>
                                        <th>Trị liệu</th>
                                        <th class="text-right">
                                            <!-- Actions -->
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($therapies as $therapy)
                                    <tr>
                                        <td>#CL0{{$therapy->id}}</td>

                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2">
                                                    <img class="avatar-img" src="assets/img/specialities/specialities-01.png" alt="Speciality">
                                                </a>
                                                <a href="profile.html">{{$therapy->title}}</a>
                                            </h2>
                                        </td>

                                        <td class="text-right">
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light" href="{{route('editTherapy', $therapy->id)}}">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a  href="/admin/therapy/delete/{{$therapy->id}}" class="btn btn-sm bg-danger-light">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->



    <!-- Delete Modal -->
{{--    <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document" >--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="form-content p-2">--}}
{{--                        <h4 class="modal-title">Delete</h4>--}}
{{--                        <p class="mb-4">Are you sure want to delete?</p>--}}
{{--                        <a href="/admin/collection/delete/{{$collection->id}}" class="btn btn-primary">Yes</a>--}}
{{--                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- /Delete Modal -->



    @endsection
