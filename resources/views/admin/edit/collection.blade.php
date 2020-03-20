@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Basic Inputs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Basic Inputs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <form action="{{ route('course.saveCollection') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lộ trình yoga</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value="{{ $collection->id }}" name="id">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tiêu đề</label>
                                    <div class="col-md-10">
                                        <input value="{{ old('title', $collection->title) }}" name="title" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Overview</label>
                                    <div class="col-md-10">
                                        <textarea name="overview" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('overview', $collection->overview) }}</textarea>
                                        @error('overview')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
    <!-- /Main Wrapper -->



    @endsection
