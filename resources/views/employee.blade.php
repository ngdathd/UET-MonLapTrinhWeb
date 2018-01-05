@extends("layouts.base")

@section("title")
    Spec IT | Employee
@endsection

@section("head")
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css")}}">
@endsection

@section("fa-employee")
    active
@endsection

@section("content-header")
    <section class="content-header">
        <h1>
            Employee
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Employee</li>
        </ol>
    </section>
@endsection

@section("content-main")
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danh sách nhân viên</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Avatar</th>
                                <th>Bộ phận</th>
                                <th>Người chỉ đạo</th>
                                <th>Chức vụ</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Active Window</td>
                                <td>Bình thường</td>
                                <td>PTA</td>
                                <td>PTA</td>
                                <td>20/11/21017</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Active Window</td>
                                <td>Bình thường</td>
                                <td>PTA</td>
                                <td>PTA</td>
                                <td>20/11/21017</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Active Window</td>
                                <td>Bình thường</td>
                                <td>PTA</td>
                                <td>PTA</td>
                                <td>20/11/21017</td>
                                <td>New</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section("script")
    <!-- DataTables -->
    <script src="{{asset("bower_components/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $('#example1').DataTable();
        })
    </script>
@endsection