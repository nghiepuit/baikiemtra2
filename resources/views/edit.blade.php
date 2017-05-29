@extends('layout')
@section('content')
@if(count($errors) > 0)
    <div class="error_msg">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
    <form role="form" method="POST" action="">
        {{ csrf_field() }}
        <h2>Đăng Bài</h2>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-xs-12 col-sm-1 col-md-12">
                <div class="form-group">
                    <input type="text" name="txtName" id="txtFullName" class="form-control input-lg" placeholder="Vui lòng nhập họ tên đầy đủ hoặc nickname" tabindex="1" value="{{ old('txtName',$data['name']) }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="txtVideo" id="txtVideoName" class="form-control input-lg" placeholder="Vui lòng nhập tên Video" tabindex="2" value="{{ old('txtVideo',$data['video']) }}">
        </div>
        <div class="form-group">
            <input type="text" name="txtLink" id="txtLink" class="form-control input-lg" placeholder="Vui lòng nhập link Youtube" tabindex="2" value="{{ old('txtLink',$data['link']) }}">
        </div>
        <div class="form-group">
            <input type="email" name="txtEmail" id="email" class="form-control input-lg" placeholder="Vui lòng nhập địa chỉ Email" tabindex="3" value="{{ old('txtEmail',$data['email']) }}">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea name="txtContent" class="form-control input-lg tinymce" rows="4" tabindex="4">
                        {{ old('txtContent',$data['content']) }}
                    </textarea>
                </div>
            </div>
        </div>
        
        <hr class="colorgraph">
        <div class="row">
            <div class="col-xs-12 col-md-12"><input type="submit" value="Thêm" class="btn btn-primary btn-block btn-lg"></div>
        </div>
    </form>
</div>
@endsection