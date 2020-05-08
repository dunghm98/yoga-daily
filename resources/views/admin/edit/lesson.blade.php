@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <!-- <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Basic Inputs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Basic Inputs</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- /Page Header -->
            <form action="{{ route('course.saveLesson') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Video bài học</h4>
                        </div>
                        <input type="hidden" name="id" value="{{ $lesson->id }}">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tiêu đề</label>
                                    <div class="col-md-10">
                                        <input name="title" value="{{ old('title',$lesson->title) }}" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Khóa học</label>
                                    <div class="col-md-10">
                                        <select name="course_id" class="form-control col-md-5 select">
                                            <option>Lựa chọn...</option>
                                            @foreach($courses as $course)
                                                <option {{ $course->id == $lesson->course_id ? 'selected' : '' }} value="{{ $course->id }}">{{ $course->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Link videos</label>
                                    <div class="col-md-10">
                                        <input name="link" value="{{ old('link', $lesson->link) }}" type="text" class="form-control" placeholder="Link video">
                                        @error('link')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mô tả</label>
                                    <div class="col-md-10">
                                        <textarea name="description" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('description',$lesson->description) }}</textarea>
                                        @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Thứ tự ngày</label>
                                    <div class="col-md-3">
                                        <input name="order" value="{{old('order', $lesson->order)}}" type="number" class="form-control">
                                        @error('order')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Năng lượng tiêu thụ (kcal)</label>
                                    <div class="col-md-3">
                                        <input name="energy" value="{{ old('energy', $lesson->energy) }}" type="number" class="form-control">
                                        @error('energy')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row" style="margin-left: 0% !important;">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /Main Wrapper -->



    @endsection
