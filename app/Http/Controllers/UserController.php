<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
session_start();
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location=Location::orderby('id_location','desc')->get();
        return view('pages.form')->with(compact('location'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function check_login(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {  
            return redirect('dashboard')->with('sess','sai mat khau hoac tai khoan');
            Cookie::queue(Cookie::make(Auth::user()->id, Auth::user()->id, 1440*15));
        }
        else{
            return redirect('dang-nhap')->with('fail_login','sai mat khau hoac tai khoan');
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=User::get();
        foreach ($user as $key => $value) {
            if($value->email==$request->email){
                return back()->with('fail_user','gmail trung');
                return false;
            }       
        }
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->password_confirm=bcrypt($request->password_confirm);
        $user->save();
        return back()->with('sussces_user','Đăng kí tài khoản thành công');
        


       
            // return back()->with('fail_user','Gmail đã được đăng kí');

        
        
    }
    public function log_out()
    {
        Auth::logout();
        return redirect('dang-nhap');
    }
}
