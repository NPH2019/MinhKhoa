<?php

namespace App\Http\Controllers;
use App\About;
use App\Customer;
use App\Information;
use App\Service;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use DB;
use Session;

class PageController extends Controller
{

    public function getindex()
    {
        $data = DB::table('type_products')
            ->join('products', 'products.id_type', '=', 'type_products.id')
            ->select('type_products.id', 'type_products.name_type', 'products.id_type', 'products.id', 'products.name', 'products.image', 'products.unit_price')
            ->paginate(8);
        $slide = Slide::all();
        $product_type = ProductType::all();
        $service = Service::all();
        $info = Information::all();
        return view('page.Index', compact('slide', 'service','info','data','product_type'));
    }
    public function getProduct_type($type)
    {
        $info = Information::all();
        $product = Product::where('id_type', $type)->get();
        $other_products = Product::where('id_type', '<>',$type)->paginate(3);
        $menu = ProductType::all();
        return view('page.Product_type', compact('product','other_products', 'menu','info'));
    }
    public function getProduct_details($type)
    {
        $info = Information::all();
        $product = Product::where('id', $type)->first();
        $related_products = Product::where('id_type', $product->id_type)->paginate(3);
        return view('page.Product_details', compact('product', 'related_products','info'));
    }
    public function getProduct()
    {
        $info = Information::all();
        $name_product = ProductType::all();
        $all_product = Product::all();
        return view('page.Product', compact('name_product', 'all_product','info'));
    }
    public function getContact()
    {
        $info = Information::all();
        return view('page.Contact', compact('info'));
    }
    public function postContact(Request $request)
    {
        $cus = new Customer;
        $cus -> name            = $request -> txtname;
        $cus -> email           = $request -> txtemail;
        $cus -> address         = $request -> txtaddress;
        $cus -> phone_number    = $request -> txtphone_number;
        $cus -> note            = $request -> txtnote;
        $cus ->save();
        return redirect()->back()->with('succeed','Thông tin đã được gửi');
    }

    public function getAbout()
    {
        $info = Information::all();
        $about = About::all();
        return view('page.about',compact('info','about'));
    }
    public function getService()
    {
        $service = Service::all();
        $info = Information::all();
        return view('page.Service',compact('info','service'));
    }
    public function getService_details($type)
    {
        $service_details = Service::where('id',$type)->get();
        $service = Service::all();
        $info = Information::all();
        return view('page.Service_details',compact('info','service_details','service'));
    }
    public function getregister()
    {
        return view('Admin.register');
    }
    public function postregister(Request $request)
    {
        $new_user = new User;
        $new_user->full_name = $request->full_name;
        $new_user->email = $request->email;
        $new_user->phone = $request->phone;
        $new_user->address = $request->address;
        $new_user->password = bcrypt($request['password']);
        $new_user->save();
    }



}
