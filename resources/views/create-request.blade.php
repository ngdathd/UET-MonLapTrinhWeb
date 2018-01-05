@extends("layouts.it")

@section("title")
    Spec IT | Create
@endsection

@section("head")
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("bower_components/select2/dist/css/select2.min.css")}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
@endsection

@section("header-title")
    Create Request
@endsection

@section("fa-it")
    active
@endsection

@section("box-title")
    Thêm yêu cầu
@endsection

@section("box-content")
    <form role="form" method="POST" enctype="multipart/form-data"
          action="{{ route('request-it.store') }}">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Tên công việc</label>
                    <span style="color: red"><i class="fa fa-asterisk"></i></span>
                    <input type="text" class="form-control" placeholder="Tên công việc" name="name">
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Mức độ ưu tiên</label>
                    <select class="form-control select2" style="width: 100%;" name="level_id">
                        @if(isset($levels))
                            @foreach ($levels as $item)
                                <option value="{{$item->id}}">{{$item->level}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Bộ phận IT</label>
                    <span style="color: red"><i class="fa fa-asterisk"></i></span>
                    <select class="form-control select2" style="width: 100%;" name="address_id">
                        @if(isset($addresses))
                            @foreach ($addresses as $item)
                                <option value="{{$item->id}}">{{$item->address}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <!-- Date -->
                <div class="form-group">
                    <label>Ngày hết hạn</label>
                    <span style="color: red"><i class="fa fa-asterisk"></i></span>
                    <div class="input-group">
                        <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask
                               name="deadline">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Người liên quan</label>
                    <select class="form-control select2" multiple="multiple"
                            style="width: 100%;" name="relative_id">
                        @if(isset($relatives))
                            @foreach ($relatives as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-12">
                <label>Nội dung</label>
                <span style="color: red"><i class="fa fa-asterisk"></i></span>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                          name="content_req">
                </textarea>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile" name="file">
                </div>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Gửi yêu cầu</button>
            <button type="submit" class="btn"><i class="fa fa-ban"></i> Hủy bỏ</button>
        </div>
    </form>
@endsection

@section("script")
    <!-- Select2 -->
    <script src="{{asset("bower_components/select2/dist/js/select2.full.min.js")}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset("bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("bower_components/fastclick/lib/fastclick.js")}}"></script>
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