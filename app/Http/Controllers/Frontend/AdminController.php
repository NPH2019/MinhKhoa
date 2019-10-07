<?php

namespace App\Http\Controllers\Frontend;

use App\About;
use App\Customer;
use App\Information;
use App\ProductType;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Slide;
use App\Product;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getadmin()
    {
        $cus = Customer::all();
        $service = Service::all();
        $all_product = Product::all();
        return view('Admin.dashboard.admin', compact('all_product', 'service', 'cus'));
    }

    public function getUser()
    {
        $user = User::all();
        return view('Admin.user.User', compact('user'));
    }

    public function getEdit_user($id)
    {
        $edit = User::find($id);
        return view('Admin.user.Edit_user', compact('edit'));
    }

    public function postEdit_user(Request $request, $id)
    {
        $this->validate($request,
            [
                'full_name' => 'required',
                'address' => 'required',
                'email' => 'required',
            ],
            [
                'full_name.required' => 'Bạn chưa nhập tên',
                'phone.required' => 'Bạn chưa nhập số điện thoại ',
                'email.required' => 'Bạn chưa nhập email ',
            ]);

        $updata_user = User::find($id);
        $updata_user->full_name = $request->full_name;
        $updata_user->address = $request->address;
        $updata_user->email = $request->email;
        $updata_user->phone = $request->phone;
        $updata_user->save();
        return redirect()->back()->with('thanhcong', 'Thông tin tài khoản đã được thay đổi');

    }

    public function getabout()
    {
        $name = Information::all();
        return view('Admin.manager.about.about', compact('name'));
    }

    public function getUpdataAbout($id)
    {
        $edit = Information::find($id);
        return view('Admin.manager.about.UpdataAbout', compact('edit'));
    }

    public function postUpdataAbout(Request $req, $id)
    {
        $updata = Information::find($id);
        $updata->name_store = $req->name_store;
        $updata->introduce_store = $req->introduce_store;
        $updata->address = $req->address;
        $updata->phone = $req->phone;
        $updata->email = $req->email;
        $updata->address = $req->address;
        $updata->save();
        return redirect()->back()->with('thanhcong', 'Cập nhật thành công');

    }

    /*
     * end about
     */
    public function getindex_about()
    {
        $about = About::all();
        return view('Admin.manager.info.index_about', compact('about'));
    }

    public function getedit_index_about($id)
    {
        $news = About::find($id);
        return view('Admin.manager.info.Edit_index_about', compact('news'));
    }

    public function postedit_index_about(Request $req, $id)
    {
        $updata = About::find($id);
        $updata->title = $req->title;
        $updata->content = $req->txtcontent;
        $updata->save();
        return redirect()->back()->with('thanhcong', 'Cập nhật thành công');
    }

    /*
     * end about
     */
    public function getResetpw($id)
    {
        $user = User::find($id);
        return view('Admin.Resetpw', compact('user'));
    }
    public function postResetpw(Request $request, $id)
    {
        $this->validate($request,
            [
                'password' => 'required',
                'repassword' => 'required|same:password',
            ],
            [
                'password.required' => 'Bạn chưa nhâp mật khẩu mới',
                'repassword.required' => 'Bạn chưa nhâp mật khẩu xác nhận',
                'repassword.same' => 'Mật khẩu xác nhận không đúng',
            ]);
            $user = User::find($id);
            $user -> password = bcrypt($request -> password);
            $user -> save();
            return redirect()->back()->with('thanhcong', 'Đổi mật khẩu thành công');
    }
    public function getproduct()
    {
        $product = Product::latest()->get();
        return view('Admin.manager.product.product', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getadd_product()
    {
        $product_type = ProductType::all();
        return view('Admin.manager.product.add_product', compact('product_type'));
    }

    public function postadd_product(Request $req)
    {
        $this->validate($req,
            [
                'txtname' => 'unique:products,name',
                'txtcode' => 'unique:products,code',

            ],
            [
                'txtname.unique' => 'Tên sản phẩm đã tồn tại',
                'txtcode.unique' => 'Chùng mã sản phẩm',
            ]
        );
        $all_product = new Product;
        $all_product->name = $req->txtname;
        $all_product->code = $req->txtcode;
        $all_product->id_type = $req->id_type;
        $all_product->description = $req->description;
        $all_product->unit_price = $req->unit_price;
        $image = $req->file('image');
        $format_file = ['jpg', 'JPG', 'png', 'PNG'];
        $file_name = $image->getClientOriginalName();
        $file_extension = $image->getClientOriginalExtension();
        if (!in_array($file_extension, $format_file)) {
            return redirect()->back()->withErrors('Định dạng file không hợp lệ ');
        }
        $file_path = 'sources/dashboard/image/product';
        $image->move($file_path, $file_name);
        $data[] = $file_name;
        $all_product->image = $file_name;
        $all_product->save();
        return redirect()->back()->with('thanhcong', 'Thêm sản phẩm thành công');
    }

    public function getEdit($id)
    {
        $product_type = ProductType::all();
        $data = Product::find($id);
        return view('Admin.manager.product.Edit', compact('data', 'product_type'));
    }

    public function postEdit(Request $req, $id)
    {
        $this->validate($req,
            [
                'unit_price' => 'integer',

            ],
            [
                'unit_price.integer' => 'Giá phải là số và không có dấu chấm phẩy'
            ]
        );
        $all_product = Product::find($id);
        $all_product->name = $req->txtname;
        $all_product->code = $req->txtcode;
        $all_product->description = $req->description;
        $all_product->unit_price = $req->unit_price;
        $image = $req->file('image');
        $format_file = ['jpg', 'JPG', 'png', 'PNG'];
        $file_name = $image->getClientOriginalName();
        $file_extension = $image->getClientOriginalExtension();
        if (!in_array($file_extension, $format_file)) {
            return redirect()->back()->withErrors('Định dạng file không hợp lệ ');
        }
        $file_path = 'sources/dashboard/image/product';
        $image->move($file_path, $file_name);
        $data[] = $file_name;
        $all_product->image = $file_name;
        $all_product->save();
        return redirect()->back()->with('thanhcong', 'Thông tin sản phẩm đã được sửa');
    }

    public function getDelete($id)
    {
        $product_del = Product::find($id);
        $product_del->delete();
        return redirect()->back()->with('succeed', 'Xóa sản phẩm thành công');
    }

    /*
     * end_product
     */
    public function getadd_type()
    {
        $product_type = ProductType::all();
        return view('Admin.manager.product.add_type', compact('product_type'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function postadd_type(Request $request)
    {
        $this->validate($request,
            [
                'name_type' => 'unique:type_products,name_type',
            ],
            [
                'name_type.unique' => 'Tên dịch vụ đã tồn tại',
            ]
        );
        $add_type = new ProductType;
        $add_type->name_type = $request->txtname;
        $add_type->save();
        return redirect()->back()->with('thanhcong', 'Thêm loại sản phẩm thành công');
    }

    public function getDeleteType($id)
    {
        $product_del = ProductType::find($id);
        $product_del->delete();
        return redirect()->back()->with('succeed', 'Xóa loại sản phẩm thành công');
    }

    /*
     * end_add_type
     */
    public function getcustomer()
    {
        $customer = Customer::latest()->get();
        return view('Admin.manager.customer.customer', compact('customer'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getView($id)
    {
        $customer = Customer::find($id);
        return view('Admin.manager.customer.View', compact('customer'));
    }

    public function getDeletecCus($id)
    {
        $Customer_del = Customer::find($id);
        $Customer_del->delete();
        return redirect()->back()->with('succeed', 'Xóa tin thành công');
    }

    /*
     * end_customer
     */
    public function getservice()
    {
        $list_service = Service::latest()->get();
        return view('Admin.manager.service.service', compact('list_service'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getadd_service()
    {
        return view('Admin.manager.service.add_service');
    }

    public function postadd_service(Request $request)
    {
        $this->validate($request,
            [
                'service_name' => 'unique:service,service_name',
            ],
            [
                'service_name.unique' => 'Tên dịch vụ đã tồn tại',
            ]
        );
        $add_service = new Service;
        $add_service->service_name = $request->service_name;
        $add_service->service_code = $request->service_code;
        $add_service->service_description = $request->service_description;
        $image = $request->file('image');
        $format_file = ['jpg', 'JPG', 'png', 'PNG'];
        $file_name = $image->getClientOriginalName();
        $file_extension = $image->getClientOriginalExtension();
        if (!in_array($file_extension, $format_file)) {
            return redirect()->back()->withErrors('Định dạng file không hợp lệ ');
        }
        $file_path = 'sources/dashboard/image/service';
        $image->move($file_path, $file_name);
        $data[] = $file_name;
        $add_service->image = $file_name;
        $add_service->save();
        return redirect()->back()->with('thanhcong', 'Thêm dịch vụ thành công');
    }

    public function getEdit_service($id)
    {
        $service = Service::all();
        $data_service = Service::find($id);
        return view('Admin.manager.service.Edit_service', compact('data_service', 'service'));
    }

    public function postEdit_service(Request $request, $id)
    {
        $edit_service = Service::find($id);
        $edit_service->service_name = $request->service_name;
        $edit_service->service_description = $request->service_description;
        $image = $request->file('image');
        $format_file = ['jpg', 'JPG', 'png', 'PNG'];
        $file_name = $image->getClientOriginalName();
        $file_extension = $image->getClientOriginalExtension();
        if (!in_array($file_extension, $format_file)) {
            return redirect()->back()->withErrors('Định dạng file không hợp lệ ');
        }
        $file_path = 'sources/dashboard/image/service/';
        $image->move($file_path, $file_name);
        $data[] = $file_name;
        $edit_service->image = $file_name;
        $edit_service->save();
        return redirect()->back()->with('thanhcong', 'Sửa dịch vụ thành công');
    }

    public function getDelete_service($id)
    {
        $Service_del = Service::find($id);
        $Service_del->delete();
        return redirect()->back()->with('succeed', 'Xóa dịch vụ thành công');
    }

    /*
     * end_service
     */
    public function getmanager()
    {
        return view('Admin.manager.manager');
    }

    /*
     * end_manager
     */
    public function getbanner()
    {
        $list_banner = Slide::latest()->get();
        return view('Admin.manager.banner.list_banner', compact('list_banner'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getadd_banner()
    {
        return view('Admin.manager.banner.add_banner');
    }

    public function postadd_banner(Request $request)
    {
        $add_banner = new Slide;
        $image = $request->file('image');
        $format_file = ['jpg', 'JPG', 'png', 'PNG'];
        $file_name = $image->getClientOriginalName();
        $file_extension = $image->getClientOriginalExtension();
        if (!in_array($file_extension, $format_file)) {
            return redirect()->back()->withErrors('Định dạng file không hợp lệ ');
        }
        $file_path = 'sources/image/slide/';
        $image->move($file_path, $file_name);
        $data[] = $file_name;
        $add_banner->image = $file_name;
        $add_banner->save();
        return redirect()->back()->with('succeed', 'Banner đã được thêm  ');
    }

    public function getDeleteBanner($id)
    {
        $banner_del = Slide::find($id);
        $banner_del->delete();
        return redirect()->back()->with('succeed', 'Xóa ảnh thành công');
    }

    /*
     * end_banner
     */
    public function getstatistics()
    {
        return view('Admin.statistics.statistics');
    }
    /*
     * end_statistics
     */


}
