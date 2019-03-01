@extends('layout.index')
@section('titles','blog')
@push('script')
 
@endpush
@section('content')
<section class="sample-text-area">
        <div class="container">
            <h2>Thêm mới blog</h2>
            @if(!empty($thongbao))
            <div class="alert alert-success">
             {{ $thongbao }}
            </div>
             @endif
         
        
<div class="col-lg-7" style="padding-bottom:120px">
        <form action="{{ route('blog.edit',$blogs->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input class="form-control" name="TieuDe"  value="{{ $blogs->titleBlog }}"/>
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <textarea class="form-control ckeditor" rows="3" name="TomTat" id="demo">{{ $blogs->briefBlog }}</textarea>
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <textarea class="form-control ckeditor" rows="3" name="NoiDung" id="demo">{{ $blogs->contentBlog }}</textarea>
            </div>
            
            <div class="form-group">
                <label>up image</label>
                <p>
                    <img src="{{ asset('storage/images/' . $blogs->image) }}" alt="" style="width: 150px">
                </p>
                <input type="text" name="Hinhvl" value="{{ $blogs->image }}">
                
                <input type="file" name="Hinh" onchange="myfunction()" id="txthinh">
            </div>
            <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control " rows="3" name="created_at" value="{{ $blogs->created_at }}" />
            </div>
            <button type="submit" class="btn btn-default">Thêm </button>
            <button type="reset" class="btn btn-default">Reset</button>
        <form>
    </div>
</div>
</section>    
@endsection
