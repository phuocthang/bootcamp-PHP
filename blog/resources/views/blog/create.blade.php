@extends('layout.index')
@section('titles','blog')
@section('content')
<section class="sample-text-area">
        <div class="container">
            <h2>Thêm mới blog</h2>
            @if(session('thongbao'))
            <div class="alert alert-success">
             {{ session('thongbao') }}
            </div>
             @endif
         
        
<div class="col-lg-7" style="padding-bottom:120px">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input class="form-control" name="TieuDe" placeholder="Tiêu Đề" />
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <textarea class="form-control ckeditor" rows="3" name="TomTat" id="demo"></textarea>
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control ckeditor" rows="3" name="NoiDung" id="demo"></textarea>
            </div>
            <div class="form-group">
                <label>up image</label>
                <input type="file" name="Hinh">
            </div>
            <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control " rows="3" name="created_at"  />
            </div>
            <button type="submit" class="btn btn-default">Thêm </button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
</div>
</section>    
@endsection
