@extends('admin.layouts.app')

@section('admin-content')


    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Danh sách người dùng</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ul>
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
                                        <th>Tên Người Dùng</th>
                                        <th>Email</th>
                                        <th>Thành viên từ</th>
                                        <th>Premium User</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="/profile/{{$user->id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/profiles/{{$user->profile->profileImage() ?? 'st.jpg'}}" alt="User Image"></a>
                                                <a href="/profile/{{$user->id}}">{{$user->name}}</a>
                                            </h2>
                                        </td>
                                        <td> {{$user->email}}</td>
                                        <td>

                                            {{date('d/m/Y', strtotime($user->created_at))}}

                                            <br><small>{{date('H:i', strtotime($user->created_at))}} </small></td>
                                        <td>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="status_{{$user->id}}" class="check"{{$user->isPremiumUser==1 ? 'checked' : '' }} >
                                                <label for="status_{{$user->id}}"
                                                       is_premium="{{$user->isPremiumUser}}"
                                                       data-user="{{$user->id}}" class="checktoggle">checkbox</label>
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

@section('js_admin')

    <script>


        $('.checktoggle').on('click',function(){
            var user_id = $(this).attr('data-user');
            var status = $(this).attr('is_premium');
            console.log(user_id);
                $.ajax({
                    url:"/admin/change_status_user",
                    method:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        user_id:user_id,
                        status:status
                    },
                    success:function(res){
                    }
                })
        });


    </script>
@endsection
