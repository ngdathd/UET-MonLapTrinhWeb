@extends("layouts.base")

@section("title")
    Edit Request
@endsection

@section("head")
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("bower_components/select2/dist/css/select2.min.css")}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
@endsection

@section("fa-it")
    active
@endsection

@section("content-header")
    <section class="content-header">
        <h1>
            Edit Request
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">IT</li>
            <li class="active">Request IT</li>
            <li class="active">Edit Request</li>
        </ol>
    </section>
@endsection

@section("content-main")
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-globe"></i> {{$req->name}}</h3>
                        <button type="button" class="btn pull-right" data-toggle="modal"
                                data-target="#modal-assign">
                            <span style="color: orange"><i class="fa fa-hand-o-right"></i></span> Assign
                        </button>
                        <button type="button" class="btn pull-right" style="margin-right: 5px;" data-toggle="modal"
                                data-target="#modal-relative">
                            <span style="color: orange"><i class="fa fa-user"></i></span> Thay đổi người liên quan
                        </button>
                        <button type="button" class="btn pull-right" style="margin-right: 5px;" data-toggle="modal"
                                data-target="#modal-deadline">
                            <span style="color: orange"><i class="fa fa-calendar"></i></span> Thay đổi deadline
                        </button>
                        <button type="button" class="btn pull-right" style="margin-right: 5px;" data-toggle="modal"
                                data-target="#modal-danger">
                            <span style="color: orange"><i class="fa fa-edit"></i></span> Thay đổi mức độ ưu tiên
                        </button>
                        <button type="button" class="btn pull-right" style="margin-right: 5px;" data-toggle="modal"
                                data-target="#modal-it">
                            <span style="color: orange"><i class="fa fa-users"></i></span> Thay đổi bộ phận IT
                        </button>
                        <button type="button" class="btn pull-right" style="margin-right: 5px;" data-toggle="modal"
                                data-target="#modal-status">
                            <span style="color: orange"><i class="fa fa-exchange"></i></span> Thay đổi trạng thái
                        </button>
                    </div>
                    <!-- /.box-header -->
                    <div class="modal fade" id="modal-status">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" role="form" method="POST"
                                      enctype="multipart/form-data"
                                      action="{{ route('request-it.update', ['id' => $req->id]) }}">
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Thay đổi trạng thái</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- radio -->
                                        <div class="form-group">
                                            @foreach ($statuses as $item)
                                                <label>
                                                    <input type="radio" name="status_id"
                                                           class="minimal" value="{{$item->id}}"> {{$item->status}}
                                                </label>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-status -->
                    <div class="modal fade" id="modal-it">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" role="form" method="POST"
                                      enctype="multipart/form-data"
                                      action="{{ route('request-it.update', ['id' => $req->id]) }}">
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Thay đổi bộ phận IT</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- radio -->
                                        <div class="form-group">
                                            @foreach ($addresses as $item)
                                                <label>
                                                    <input type="radio" name="address_id"
                                                           class="minimal" value="{{$item->id}}"> {{$item->address}}
                                                </label>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-it -->
                    <div class="modal fade" id="modal-danger">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" role="form" method="POST"
                                      enctype="multipart/form-data"
                                      action="{{ route('request-it.update', ['id' => $req->id]) }}">
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Thay đổi mức độ ưu tiên</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- radio -->
                                        <div class="form-group">
                                            @foreach ($levels as $item)
                                                <label>
                                                    <input type="radio" name="level_id"
                                                           class="minimal" value="{{$item->id}}"> {{$item->level}}
                                                </label>
                                                <br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-danger -->
                    <div class="modal fade" id="modal-deadline">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form class="form" role="form" method="POST"
                                      enctype="multipart/form-data"
                                      action="{{ route('request-it.update', ['id' => $req->id]) }}">
                                    <input type="hidden" name="_method" value="PATCH">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Thay đổi deadline</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Date -->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control"
                                                       data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="deadline">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-deadline -->
                    <div class="modal fade" id="modal-relative">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Thay đổi người liên quan</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <select class="form-control select2" multiple="multiple"
                                                style="width: 100%;">
                                            @if(isset($relatives))
                                                @foreach ($relatives as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-relative -->
                    <div class="modal fade" id="modal-assign">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Thay đổi Assign</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <select class="form-control select2" multiple="multiple"
                                                style="width: 100%;">
                                            <option>Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal-assign -->
                    <div class="box-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><strong>Ngày tạo:</strong></td>
                                <td>{{$req->create}}</td>
                                <td><strong>Ngày hết hạn:</strong></td>
                                <td>{{$req->deadline}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Người yêu cầu:</strong></td>
                                <td>{{$req->user_create_id}}</td>
                                <td><strong>Người thực hiện:</strong></td>
                                <td>{{$req->user_solved_id}}</td>
                                <td><strong>Bộ phận IT:</strong></td>
                                <td>{{$req->address->address}}</td>
                            </tr>
                            <tr>
                                <td><strong>Mức độ ưu tiên:</strong></td>
                                <td>{{$req->level->level}}</td>
                                <td><strong>Trạng thái:</strong></td>
                                <td>{{$req->status->status}}</td>
                                <td><strong>Người liên quan:</strong></td>
                                <td>{{$req->relative_id}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user"></i> Nội dung</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="user-block">
                            <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">21/7/2017</span>
                        </div>
                        <p>Hom nay la ngay 20/11/2017</p>
                        <hr>
                        <div class="user-block">
                            <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                            <span class="description">21/7/2017</span>
                        </div>
                        <p>Hom nay la ngay 20/11/2017</p>
                        <hr>

                        <h4>Bình luận</h4>
                        <textarea class="textarea" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        </textarea>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-comments-o"></i> Gửi bình luận
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section("script")
    <!-- Select2 -->
    <script src="{{asset("bower_components/select2/dist/js/select2.full.min.js")}}"></script>
    <!-- InputMask -->
    <script src="{{asset("plugins/input-mask/jquery.inputmask.js")}}"></script>
    <script src="{{asset("plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
    <script src="{{asset("plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
    <!-- CK Editor -->
    <script src="{{asset("bower_components/ckeditor/ckeditor.js")}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'});
            //Money Euro
            $('[data-mask]').inputmask();

            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5();
        })
    </script>
@endsection