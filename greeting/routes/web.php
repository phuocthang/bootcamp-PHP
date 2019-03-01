<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/greeting',function(){
//     echo "hello";
// });
// Route::get('/greeting/{name?}', function ($name = null) {

//     if ($name) {

//         echo 'Hello ' . $name . '!';

//     } else {

//         echo 'Hello World!';

//     }

// });
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if (
        $request->username == 'admin'
        && $request->password == 'admin'
    ) {
        return view('welcome_admin');
    }

    return view('login_error');
});
Route::get('/product', function () {
    return view('product_discount');
});
Route::post('/product', function (Illuminate\Http\Request $request) {
    $productDescription = $request->description;
    $price = $request->price;
    $discountPercent = $request->discount_percent / 100;

    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;
    return view('display_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
Route::get('/tudien', function () {
    return view('tudien');
});
Route::post('/tudien', function (Illuminate\Http\Request $request) {
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính"
    );
    $searchword = $request->search;
    $flag = false;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag == true;
            return view('tudien');
        }
    }
    if ($flag == false) {
        echo "k có từ bạn tra";
    }
    return view('tudien');
});
Route::get('/user/{name}', function ($name) {
    echo "<h2>User name is $name</h2>";
});
Route::get('/thang', 'thang\ThangController@index');


// Route::get('/{timezone?}', function ($timezone = null) {
//     // echo "thang";
//     if (!empty($timezone)) {

//         // Khởi tạo giá trị giờ theo múi giờ UTC
//         $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));

//         // Thay đổi về múi giờ được chọn
//         $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));

//         // Hiển thị giờ theo định dạng mong muốn
//         echo 'Múi giờ bạn chọn ' . $timezone . ' hiện tại đang là: ' . $time->format('d-m-Y H:i:s');
//     }
//     return view('timezone');    
// });

///

// // Tạo 1 nhóm route với tiền tố customer
// // Route::prefix('customer')->group(function () {
// //     Route::get('index', 'CustomerController@index');
// //     Route::get('/list','CustomerController@index')->name('customers.index');
// //     Route::get('create', 'CustomerController@create');
//     // Route::post('store', 'CustomerController@store');
//     // Route::get('{id}/show', 'CustomerController@show');
//     // Route::get('{id}/edit', 'CustomerController@edit');
//     // Route::patch('{id}/update', 'CustomerController@update');
//     // Route::delete('{id}', 'CustomerController@destroy');
// });
Route::resource('thangrs', 'thang\ThangController2');

Route::get('/email','IndexController@index');
Route::get('/maytinh','IndexController@maytinh');
Route::post('/maytinh','IndexController@tinh');
Route::get('/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/listtasks', 'TaskController@show')->name('tasks.list');
Route::get('/tasks/create', 'TaskController@create')->name('tasks.create'); 
Route::post('/tasks/store', 'TaskController@store')->name('tasks.store');
////

Route::group(['prefix' => 'customers'], function () {
    Route::get('/','CustomerController@index')->name('customers.index');
    Route::get('/create','CustomerController@create')->name('customers.create');
    Route::post('/create','CustomerController@store')->name('customers.store');
    Route::get('/{id}/edit','CustomerController@edit')->name('customers.edit');
    Route::post('/{id}/edit','CustomerController@update')->name('customers.update');
    Route::get('/{id}/destroy','CustomerController@destroy')->name('customers.destroy');
  });