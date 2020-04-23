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
            <form action="" method="post">
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
                                        <input name="title" value="{{ old('title') }}" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Lộ trình</label>
                                    <select id="collection" name="collection[]" class="form-control col-md-6 select select2-selection--multiple" multiple>
                                        <option value="">Lựa chọn...</option>
                                        @foreach($collections as $collection)
                                            <option value="{{$collection->id}}">{{ $collection->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('collection')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mô tả</label>
                                    <div class="col-md-10">
                                        <textarea name="overview" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('overview') }}</textarea>
                                        @error('overview')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Thời lượng khóa học</label>
                                    <div class="col-md-3">
                                        <input name="duration" value="{{old('duration')}}" type="text" class="form-control">
                                        @error('duration')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <label class="col-form-label col-md-2">Level</label>
                                    <select name="level_id" class="form-control col-md-3 select ">
                                        <option value="">Lựa chọn...</option>
                                        @foreach($levels as $level)
                                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                                            @endforeach
                                    </select>
                                    @error('level_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Loại khóa học</label>
                                    <div id="number-of-hour col-md-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="free" name="is_premium" value="0" checked="" required="">
                                            <label class="custom-control-label" for="free">Miễn phí</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="premium" name="is_premium" value="1" required="">
                                            <label class="custom-control-label" for="premium">Premium</label>
                                        </div>
                                    </div>
                                    @error('is_premium')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Link video giới thiệu</label>
                                    <div class="col-md-10">
                                        <input name="link_intro_video" value="{{ old('link_intro_video') }}" type="text" class="form-control">
                                        @error('link_intro_video')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
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
