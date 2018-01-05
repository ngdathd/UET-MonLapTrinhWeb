@extends("requests.request")

@section("fa-new")
    active
@endsection

@section("box-content")
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên công việc</th>
                <th>Mức độ ưu tiên</th>
                <th>Người yêu cầu</th>
                <th>Người thực hiện</th>
                <th>Ngày hết hạn</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>

            @if($requests)
                @foreach($requests as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->level->level }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->deadline }}</td>
                        <td>{{ $item->status->status }}</td>
                        <td>
                            <a href="{{url('request-it/'.$item->id.'/edit')}}"
                               class="btn btn-primary center-block"><span style="color: white">Mở rộng</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
@endsection
