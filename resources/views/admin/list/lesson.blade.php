@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Bài học</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Bài học</li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="{{ route('createLesson')  }}"  class="btn btn-primary float-right mt-2">Add</a>
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
                                        <th>#</th>
                                        <th>Bài học</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lessons as $lesson)
                                        <tr>
                                            <td>#CL0{{$lesson->id}}</td>

                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm mr-2">
                                                        <img class="avatar-img" src="assets/img/specialities/specialities-01.png" alt="Speciality">
                                                    </a>
                                                    <a href="profile.html">{{$lesson->title}}</a>
                                                </h2>
                                            </td>

                                            <td class="text-right">
                                                <div class="actions">
                                                    <a class="btn btn-sm bg-success-light"  href="{{route('editLesson', $lesson)}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>
                                                    <a  href="/admin/lesson/delete/{{$lesson->id}}" class="btn btn-sm bg-danger-light">
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




@endsection
