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
            <form action="{{route('course.storePosture')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tư thế</h4>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tên tư thế</label>
                                    <div class="col-md-10">
                                        <input name="title" value="{{ old('title') }}" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Trị liệu</label>
                                    <div class="col-md-10">
                                        <select id="therapy" name="therapy[]" multiple class="form-control col-md-5 select select2-selection--multiple" multiplestyle="margin-left: 2% !important;">
                                            <option value="">Lựa chọn...</option>
                                            @foreach($therapies as $therapy)
                                                <option value="{{$therapy->id}}">{{ $therapy->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('therapy')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mô tả</label>
                                    <div class="col-md-10">
                                        <textarea name="description" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('description') }}</textarea>
                                        @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Hiệu quả</label>
                                    <div class="col-md-10">
                                        <textarea name="effective" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('effective') }}</textarea>
                                        @error('effective')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Link video</label>
                                    <div class="col-md-10">
                                        <input name="video" value="{{ old('video') }}" type="text" class="form-control">
                                        @error('video')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Chú ý</label>
                                    <div class="col-md-10">
                                        <textarea name="note" rows="5" cols="5" class="form-control" placeholder="Enter text here">{{ old('note') }}</textarea>
                                        @error('note')
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
