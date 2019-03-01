@extends('layout.index')
@section('titles','blog')
@section('content')
 <!--================Home Banner Area =================-->
   <!-- Start Sample Area -->
   <section class="sample-text-area">
    <div class="container">
        @if(session('thongbao'))
            <div class="alert alert-success">
             {{ session('thongbao') }}
            </div>
        @endif
        @if (Session::has('create-success'))
        <p class="text-success">
           <i class="fa fa-check" aria-hidden="true"></i>&nbsp;{{ Session::get('create-success') }}
        </p>
       @endif
        <h3 class="text-heading title_color">Text Sample</h3>
        <p class="sample-text">
            <a class="btn btn-primary" href="{{ route('blog.create') }}">Thêm mới</a>
        </p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Images</th>
                <th scope="col">Content</th>
                <th scope="col">Brif</th>
                <th scope="col">Created_at</th>
            </tr>
            </thead>
            <tbody>
                @if(count($blogs) == 0)
                <tr><td colspan="4">Không có dữ liệu</td></tr>
                @else
                      @foreach($blogs as $key => $page)
                      <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $page->titleBlog }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $page->image) }}" alt="" style="width: 150px">
                            </td>
                            <td>{{ $page->contentBlog }}</td>
                            <td>{{ $page->briefBlog }}</td>
                            <td>{{ $page->created_at }}</td>
                            <td><a href="{{ route('blog.edit', $page->id) }}">sửa</a></td>
                            <td><a href="{{ route('blog.destroy', $page->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                      </tr>
                      @endforeach
                @endif
                </tbody>
        </table>
    </div>
</section>


@endsection
