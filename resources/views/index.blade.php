@extends('layout')
@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    @foreach($data as $item)
        <!-- Blog Post -->
        <h2>
            <a href="#">{{ $item['video'] }}</a>
        </h2>
        <p class="lead">
            Đăng bởi : <a href="index.php">{{ $item['name'] }}</a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Đăng bài lúc : {{ $item['created_at'] }}</p>
        <hr>
        <div class="video-container">
            <iframe width="100%" height="400" src="{{ $item['link'] }}" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <p>{!! $item['content'] !!}</p>
        <a class="btn btn-primary" href="#">Xem Chi Tiết <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <!-- End Blog Post -->

        
    @endforeach

<!-- Pager -->
        <ul class="pager">
            <div><img src="images/progress.gif" alt="Loading" width="150px" /></div>
        </ul>
</div>

<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Liên hệ</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li>Điện Thoại : 0933.649.647
                    </li>
                    <li>Email : contact.quoctuan@gmail.com
                    </li>
                    <li>Skype : online.quoctuan
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Thông tin khóa học</h4>
        <p align="justify">Chào mừng các bạn đến với khóa học lập trình NodeJS tại QuocTuan.Info.Đây là một Project thực tế trong khóa học lập trình NodeJS tại QuocTuan.Info.Hy vọng các thể vận dụng được toàn bộ kiến thực để làm Project này.</p>
    </div>

</div>
@endsection