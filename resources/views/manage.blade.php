@extends('layout')
@section('content')

<!-- Page Content -->
<div class="container">

    <div class="row">
        <center><h1>Trang Quản Lý</h1></center>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th width="150px">Video Clip</th>
                        <th>Tên Video</th>
                        <th width="200px">Người Đăng</th>
                        <th width="50px">Sửa</th>
                        <th width="50px">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr valign="middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <iframe width="150" height="100" src="{{ $item['link'] }}" frameborder="0" allowfullscreen></iframe>
                            </td>
                            <td>{{ $item['video'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td><a href="{{ route('edit',['id' => $item['id']]) }}">Sửa</a></td>
                            <td><a href="{{ route('destroy',['id' => $item['id']]) }}">Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection
