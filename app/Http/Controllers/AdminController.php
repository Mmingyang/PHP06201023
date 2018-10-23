<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {

        $admins=Admin::all();

        return view("admin.index",compact("admins"));

    }


    public function add(Request $request)
    {
        if($request->isMethod("post")){

            $this->validate($request,[
                'name'=>"required|unique:admins",
                'password'=>"required",
            ]);

            $data=$request->post();

            $data["password"]=bcrypt($data['password']);

            if(Admin::create($data)){

                return redirect()->route("admin.index")->with("success","添加成功");
            }

        }

        return view("admin/add");

    }

    public function edit(Request $request,$id)
    {

        $admin=Admin::find($id);


        $this->authorize('update',$admin);

        if($request->isMethod("post")){


            $data=$request->post();

            if($admin->update($data)){

                return redirect()->route("admin.index")->with("success","编辑成功");

            }else{

                return redirect()->back();

            }

        }

        return view("admin/edit",compact("admin"));

    }

    public function del($id)
    {

        $admin=Admin::find($id);

        if($admin->delete()){

            return redirect()->route("admin.index")->with("success","删除成功");

        }

    }


    public function login(Request $request)
    {

        if($request->isMethod("post")){

            $data=$this->validate($request,[
                "name"=>"required",
                "password"=>"required"
            ]);

            if(Auth::guard("admin")->attempt($data,$request->has("remember"))){

                return redirect()->intended(route("admin.index"))->with("success","登录成功");

            }else{

                return redirect()->back()->withInput()->with("danger","账号密码错误");

            }

        }

        return view("admin/login");

    }


    public function logout()
    {

        Auth::logout();

        return redirect()->route("admin.login");

    }












}
