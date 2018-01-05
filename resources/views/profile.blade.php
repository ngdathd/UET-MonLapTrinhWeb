@extends("layouts.base")

@section("title")
    Spec IT | Profile
@endsection

@section("fa-profile")
    active
@endsection

@section("content-header")
    <section class="content-header">
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>
@endsection

@section("content-main")
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle"
                             src="{{ asset('/avatars/'.Auth::user()->avatar) }}"
                             alt="User profile picture">

                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                        <p class="text-muted text-center">{{ Auth::user()->job }}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Số điện thoại</b> <a class="pull-right">{{ Auth::user()->phone }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Ngày sinh</b> <a class="pull-right">{{ Auth::user()->birthday }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Giới tính</b> <a class="pull-right">{{ Auth::user()->gender }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Cơ quan</b> <a class="pull-right">{{ Auth::user()->address->address }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cá nhân</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Học tại</strong>

                        <p class="text-muted">
                            {{ Auth::user()->education }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</strong>

                        <p class="text-muted">
                            {{ Auth::user()->place }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Chú thích</strong>

                        <p class="text-muted">
                            {{ Auth::user()->note }}
                        </p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">

                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#personal" data-toggle="tab">Thông tin cá nhân</a></li>
                        <li><a href="#account" data-toggle="tab">Thông tin tài khoản</a></li>
                    </ul>

                    <div class="tab-content">

                        <div class="active tab-pane" id="personal">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                                  action="{{ route('profile.update', ['id' => Auth::user()->id]) }}">
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
                                    <label for="inputName" class="col-sm-2 control-label">Họ tên</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="name"
                                               value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-2 control-label">Số điện thoại</label>

                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="inputPhone" name="phone"
                                               value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="r1" class="col-sm-2 control-label">Giới tính</label>

                                    <div class="col-sm-10">
                                        <label>
                                            <input type="radio" name="gender" class="minimal" id="nam" value="Nam">
                                            Nam
                                        </label>
                                        <label>
                                            <input type="radio" name="gender" class="minimal" id="nu" value="Nữ">
                                            Nữ
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputBirthday" class="col-sm-2 control-label">Ngày sinh</label>

                                    <div class=" col-sm-10">
                                        <input type="text" class="form-control" id="inputBirthday" name="birthday"
                                               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask
                                               value="{{ Auth::user()->birthday }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Công việc</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="job"
                                               value="{{ Auth::user()->job }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Học tại</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="education"
                                                  id="inputExperience">{{ Auth::user()->education }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Địa chỉ</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="place" id="inputExperience">{{ Auth::user()->place }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Chú thích</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="note" id="inputExperience">{{ Auth::user()->note }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputFile" class="col-sm-2 control-label">Avatar</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" name="avatar">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="account">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('profile.update', ['id' => Auth::user()->id]) }}">
                                <input type="hidden" name="_method" value="PATCH">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" name="email"
                                               value="{{ Auth::user()->email }}">
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input id="password" name="password" type="password"
                                               class="form-control" placeholder="New Password">
                                        @if($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{$errors->first('password')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-sm-2 control-label">
                                        Password Confirm
                                    </label>
                                    <div class="col-sm-10">
                                        <input id="password-confirm" name="password_confirmation" type="password"
                                               class="form-control" placeholder="Retype password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
@endsection

@section("script")
    <!-- InputMask -->
    <script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
    <script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
    <script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'});
            //Money Euro
            $('[data-mask]').inputmask();
        });

            @if(Auth::user()->gender === "Nam"){
            $('#nam').prop('checked', true);
        }
            @else{
            $('#nu').prop('checked', true);
        }
        @endif

    </script>
@endsection
