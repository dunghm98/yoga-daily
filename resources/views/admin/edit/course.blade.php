@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <!-- <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Khoá học</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Khoá học</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- /Page Header -->
            <form action="{{route('course.saveCourse')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Khóa học</h4>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tiêu đề</label>
                                    <div class="col-md-10">
                                        <input name="title" value="{{ old('title', $course->title) }}" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-none">
                                    {{$checkId[] = '' }}
                                    @foreach($course->collections as $course_collection)
                                        {{$checkId[] = $course_collection->id}}
                                    @endforeach
                                </div>
                                <div class="form-group row">
                                    <label for="collection" class="col-form-label col-md-2">Lộ trình</label>
                                    <div class="col-md-10">
                                        <select id="collection" name="collection[]" class="form-control col-md-5 select select2-selection--multiple" multiplestyle="margin-left: 2% !important;">
                                            <option value="">Lựa chọn...</option>
                                                @foreach($collections as $collection)
                                                    <option {{ in_array($collection->id, $checkId) ? 'selected' : '' }} value="{{ $collection->id }}">{{ $collection->title }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mô tả</label>
                                    <div class="col-md-10">
                                        <textarea name="overview" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('overview', $course->overview) }}</textarea>
                                        @error('overview')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Thời lượng khóa học</label>
                                    <div class="col-md-3">
                                        <input name="duration" value="{{ old('duration',$course->duration) }}" type="text" class="form-control">
                                        @error('duration')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <label class="col-form-label col-md-2">Level</label>
                                        <select name="level_id" class="form-control col-md-3 select ">
                                            <option value="">Lựa chọn...</option>
                                            @foreach($levels as $level)
                                                <option {{$level->id == $course->level_id ? 'selected' : ''}} value="{{ $level->id }}">{{ $level->name }}</option>
                                                @endforeach
                                        </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Loại khóa học</label>
                                    <div class="col-md-10"> 
                                        <div id="number-of-hour col-md-8">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="free" name="is_premium" value="0" {{ $course->is_premium == 0 ? 'checked' : '' }} required="">
                                                <label class="custom-control-label" for="free">Miễn phí</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="premium" name="is_premium" value="1" {{ $course->is_premium == 1 ? 'checked' : '' }} required="">
                                                <label class="custom-control-label" for="premium">Premium</label>
                                            </div>
                                            <input type="hidden" name="id" value="{{ $course->id }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Link video giới thiệu</label>
                                    <div class="col-md-10">
                                        <input name="link_intro_video" value="{{ old('link_intro_video',$course->link_intro_video) }}" type="text" class="form-control">
                                        @error('link_intro_video')
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
