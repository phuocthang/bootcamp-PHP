<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\blog;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(blog $blog)
    // {
    //     $this->blogs = $blog;
    // }
    public function index()
    {
        //
        $blogs = blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }
    public function trangchu()
    {
        //
        $blog = blog::all();
        return view('index',['blog'=>$blog]);
    }
    public function chitiet($id){ 
        $blog = blog::find($id);
        return view('deteilpage',compact(['blog']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $blogs = new blog();
        $blogs->titleBlog = $request->input('TieuDe');
        $blogs->contentBlog = $request->input('NoiDung');
        $blogs->briefBlog = $request->input('TomTat');
        $blogs->created_at = $request->input('created_at');
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh'); // lay hinh
            //bat loi duoi hinh
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Bạn cần chọn Hình có đuôi jpg,png, jpeg');
            }
            //random ten hinh ,tranh repeat
            $name = $file->getClientOriginalName(); //lay ten hinh
            $Hinh = str_random(4) . "_" . $name;
            while (file_exists("storage/images/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $name;
            }
            $file->storeAs('public/images', $Hinh);

            $blogs->image = $Hinh; // save image      
        } else {
            $blogs->Hinh = '';
        }
        $blogs->save();
        $message = "Tạo blog ( $request->TieuDe ) thành công !";
        Session::flash('create-success', $message);
        return redirect()->route('blog.admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idBlog)
    {
        //
         $blogs =blog::findOrFail($idBlog);
        return view('blog.edit',compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $blogs = blog::findOrFail($id);
        $blogs->titleBlog  = $request->input('TieuDe');
        $blogs->contentBlog = $request->input('NoiDung');
        $blogs->briefBlog   = $request->input('TomTat');
        $blogs->created_at = $request->input('created_at'); 
        if ($request->hasFile('Hinh')) {
            $file = $request->file('Hinh'); // lay hinh
            //bat loi duoi hinh
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Bạn cần chọn Hình có đuôi jpg,png, jpeg');
            }
            //random ten hinh ,tranh repeat
            $name = $file->getClientOriginalName(); //lay ten hinh
            $Hinh = str_random(4) . "_" . $name;
            while (file_exists("storage/images/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $name;
            }
            $file->storeAs('public/images', $Hinh);
            $blogs->image = $Hinh;
        }else{
            $blogs->image =$request->input('Hinhvl');     
        }
        $blogs->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật  thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('blog.admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     $blogs =blog::findOrFail($id);
     $blogs ->delete();
      return redirect()->route('blog.admin')->with('thongbao',"Xóa thành công");
    }
}
