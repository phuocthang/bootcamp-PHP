<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;

class CusTomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // // return view('mngement');
        // $customers = [
        //     '0' => [
        //         'id'  => 1,
        //         'name'=> 'customer1',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer1@gmail.com'
        //     ],
      
        //     '1' => [
        //         'id'  => 2,
        //         'name'=> 'customer2',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer2@gmail.com'
        //     ],
      
        //     '2' => [
        //         'id'  => 3,
        //         'name'=> 'customer3',
        //         'bod' => '1998-09-01',
        //         'email' => 'customer3@gmail.com'
        //     ]
        // ];
        // return view('list',compact('customers'));
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
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
        $customer = new Customer();
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->save();
  
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
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
    public function edit($id)
    {
        //
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
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
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->save();
  
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
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
        $customer = Customer::findOrFail($id);
        $customer->delete();
  
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');
  
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }
}
