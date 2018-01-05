@extends("layouts.base")

@section("content-header")
    <section class="content-header">
        <h1>
            Request IT
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">IT</li>
            <li class="active">Request IT</li>
            <li class="active">@yield("header-title")</li>
        </ol>
    </section>
@endsection

@section("content-main")
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                @include("partial.tool-box")
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@yield("box-title")</h3>
                    </div>
                    <!-- /.box-header -->
                    @yield("box-content")
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection