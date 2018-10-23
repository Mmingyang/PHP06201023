<?php

namespace App\Http\Controllers;

use App\Models\Taoc;
use Illuminate\Http\Request;

class TaocController extends Controller
{
    //
    public function index()
    {
        $taocs=Taoc::all();


        return view("taoc/index",compact("taocs"));

    }


    public function add(Request $request)
    {
        if($request->isMethod("post")){

            $data=$request->post();

            if(Taoc::create($data)){

                return redirect()->route("taoc.index")->with("success","添加成功");

            }

        }

        return view("taoc.add");

    }


    public function edit(Request $request,$id)
    {

        $taoc=Taoc::find($id);

        if($request->isMethod("post")){

            $data=$request->post();

            if($taoc->update($data)){

                return redirect()->route("taoc.index")->with("success","编辑成功");

            }

        }

        return view("taoc.edit",compact("taoc"));

    }


    public function del($id)
    {

        $taoc=Taoc::find($id);

        if($taoc->delete()){

            return redirect()->route("taoc.index")->with("success","删除成功");

        }

    }







}
