<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spec IT | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("plugins/iCheck/square/blue.css")}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset("plugins/iCheck/all.css")}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("bower_components/select2/dist/css/select2.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/AdminLTE.min.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">

<div class="register-box">
    <div class="register-logo">
        <b>Spec</b>IT
    </div>
    <!-- /.register-logo -->
    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{{route('register')}}" method="post" onsubmit="return checkCheckBoxes(this);">
            {{csrf_field()}}
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                <input id="name" value="{{old('name')}}" name="name" type="text" class="form-control"
                       placeholder="Full name">
                @if($errors->has('name'))
                    <span class="help-block">
                        <strong>{{$errors->first('name')}}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input id="email" value="{{old('email')}}" name="email" type="email" class="form-control"
                       placeholder="Email">
                @if($errors->has('email'))
                    <span class="help-block">
                        <strong>{{$errors->first('email')}}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input id="password" value="{{old('password')}}" name="password" type="password" class="form-control"
                       placeholder="Password">
                @if($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input id="password-confirm" name="password_confirmation" type="password" class="form-control"
                       placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="form-group {{ $errors->has('address_id') ? ' has-error' : '' }} has-feedback">
                <select class="form-control select2" style="width: 100%;" name="address_id">
                    @foreach ($address as $item)
                        <option value="{{$item->id}}">{{$item->address}}</option>
                    @endforeach
                </select>
                @if ($errors->has('address_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address_id') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="checkbox"> I agree to the terms
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{route('login')}}" class="text-center">I already have a membership</a>

    </div>
    <!-- /.register-box-body -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{asset("bower_components/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset("bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- iCheck -->
<script src="{{asset("plugins/iCheck/icheck.min.js")}}"></script>
<!-- Select2 -->
<script src="{{asset("bower_components/select2/dist/js/select2.full.min.js")}}"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();
    })
</script>

<script>
    function checkCheckBoxes(theForm) {
        if (
            theForm.checkbox.checked === false
        ) {
            alert('You need agree to the terms!');
            return false;
        } else {
            return true;
        }
    }
</script>

</body>

</html>