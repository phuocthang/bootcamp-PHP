<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\thang;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view("taks");
    }
    public function show()
    {
        //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
        $tasks = \App\thang::all();

        // Trả về view index và truyền biến tasks chứa danh sách các task
        return view('listtask', compact('tasks'));
    }
    public function create()
    {
        return view('addtask');
    }
    public function store(Request $request)
    {
        $task = new thang();
        $task->titel = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->created_at = $request->inputDueDate;
        $file = $request->inputFile;
        // Nếu file không tồn tại thì trường image gán bằng NULL
        if (!$request->hasFile('inputFile')) {
            $task->image = $file;
        } else {
            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;
            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";
            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);
            // Gán trường image của đối tượng task với tên mới
            $task->image = $newFileName;
        //      // cap nhat anh moi
        //   $image = $request->file('image');
        //   $path = $image->store('images', 'public');
        //   $task->image = $path;
        }
        $task->save();
        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('tasks.list');
    }
}