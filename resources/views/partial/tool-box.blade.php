<a href="{{url('request-it/create')}}" class="btn btn-block btn-danger btn-lg margin-bottom">
    <i class="glyphicon glyphicon-plus">&nbsp;</i><strong>THÊM YÊU CẦU</strong>
</a>

<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Việc tôi yêu cầu</h3>

        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <li class="@yield("fa-all")">
                <a href="{{url('request/all')}}">
                    <i class="fa fa-inbox"></i> All
                    <span class="label label-primary pull-right">12</span>
                </a>
            </li>
            <li class="@yield("fa-new")">
                <a href="{{url('request/new')}}">
                    <i class="fa fa-envelope-o"></i> New
                </a>
            </li>
            <li class="@yield("fa-inprocess")">
                <a href="{{url('request/inprocess')}}">
                    <i class="glyphicon glyphicon-import"></i> Inprocess
                </a>
            </li>
            <li class="@yield("fa-resolved")">
                <a href="{{url('request/resolved')}}">
                    <i class="fa fa-registered"></i> Resolved
                    <span class="label label-warning pull-right">65</span>
                </a>
            </li>
            <li class="@yield("fa-out")">
                <a href="{{url('request/out')}}">
                    <i class="fa fa-calendar-times-o"></i> Out Of Date
                </a>
            </li>
        </ul>
    </div>

    <!-- /.box-body -->
</div>
<!-- /. box -->
<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Công việc liên quan</h3>

        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><i class="fa fa-inbox"></i> All
                    <span class="label label-primary pull-right">12</span></a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> New</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-import"></i> Inprocess</a></li>
            <li><a href="#"><i class="fa fa-registered"></i> Resolved<span
                            class="label label-warning pull-right">65</span></a>
            </li>
            <li><a href="#"><i class="fa fa-calendar-times-o"></i> Out Of Date</a></li>
        </ul>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@if(Auth::user()->position_id > 1)
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Việc tôi được giao</h3>

            <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> All
                        <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> New</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-import"></i> Inprocess</a></li>
                <li><a href="#"><i class="fa fa-mail-reply-all"></i> FeedBack<span
                                class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-calendar-times-o"></i> Out Of Date</a></li>
            </ul>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endif
@if(Auth::user()->position_id > 2)
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Công việc của team</h3>

            <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> All
                        <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> New</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-import"></i> Inprocess</a></li>
                <li><a href="#"><i class="fa fa-mail-reply-all"></i> FeedBack<span
                                class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-calendar-times-o"></i> Out Of Date</a></li>
                <li><a href="#"><i class="fa fa-minus-circle"></i> Closed</a></li>
            </ul>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endif
@if(Auth::user()->position_id > 3)
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Công việc của bộ phận IT</h3>

            <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> All
                        <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> New</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-import"></i> Inprocess</a></li>
                <li><a href="#"><i class="fa fa-mail-reply-all"></i> FeedBack<span
                                class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-calendar-times-o"></i> Out Of Date</a></li>
                <li><a href="#"><i class="fa fa-minus-circle"></i> Closed</a></li>
            </ul>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endif