@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <!-- <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Lộ trình</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Lộ trình</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- /Page Header -->
            <form action="{{ route('course.saveProgram') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chương trình luyện tập</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" value="{{ $program->id }}" name="id">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Tiêu đề</label>
                                    <div class="col-md-10">
                                        <input value="{{ old('title', $program->title) }}" name="title" type="text" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                            <div class="d-none">
                                {{$checkId[] = '' }}
                                @foreach($program->postures as $posture_program)
                                    {{$checkId[] = $posture_program->id}}
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <label for="collection" class="col-form-label col-md-2">Chọn tư thế</label>
                                <div class="col-md-10">
                                    <select id="posture" name="posture[]" multiple class="form-control col-md-5 select select2-selection-multiple" multiplestyle="margin-left: 2% !important;">
                                        <option value="">Lựa chọn...</option>
                                        @foreach($postures as $posture)
                                            <option {{ in_array($posture->id, $checkId) ? 'selected' : '' }} value="{{ $posture->id }}">{{ $posture->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div class="form-group row" style="margin-left: 0% !important;">
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
