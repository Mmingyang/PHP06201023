<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Taoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function index()
    {
        $members=Member::all();

        return view("member.index",compact("members"));

    }

    public function add(Request $request)
    {
        if($request->isMethod("post")){

            $data=$request->post();

            if(Member::create($data)){

                return redirect()->route("member.index")->with("success","添加成功");

            }

        }

        return view("member.add");

    }

    public function edit(Request $request,$id)
    {

        $member=Member::find($id);


        if($request->isMethod("post")){

            $data=$request->post();

            if($member->update($data)){

                return redirect()->route("member.index")->with("success","编辑成功");

            }

        }

        return view("member.edit",compact("member"));

    }


    public function del($id)
    {
        $member=Member::find($id);

        if($member->delete()){

            return redirect()->route("member.index")->with("success","删除成功");

        }

    }


    public function cz(Request $request,$id)
    {

        $member=Member::find($id);

        if($request->isMethod("post")){

            $data=$request->post();

            $m=$member["name"];

            $mi=$data["money"];


            $mm['money']=$member["money"]+$data["money"];
//            dd($mm);

            if($member->update($mm)){

//                DB::insert('insert into users (id, name, email, password) values (?, ?, ? , ? )',[1, 'Laravel','laravel@test.com','123']);

                DB::insert('insert into orders (id, name, is_on_sale, money) values (?, ?, ?, ?)',[null, "$m", 1, "$mi"]);

                return redirect()->route("member.index")->with("success","充值成功");

            }

        }

        return view("member.cz",compact("member"));

    }


    public function xf(Request $request,$id)
    {

        $member=Member::find($id);

        $tcs=Taoc::all();

        if($request->isMethod("post")){

            $data=$request->post();
//            dd($data);

            $m=$member["name"];

            $mi=$data["money"];

            $my["money"]=$member["money"]-$data["money"];

//            dd($data["money"]);
            if($member["money"]<$data["money"]){

                return redirect()->route("member.index")->with("danger","账号余额不足请充值");

            }


            if($member->update($my)){

                DB::insert('insert into orders (id, name, is_on_sale, money) values (?, ?, ?, ?)',[null, "$m", 0, "$mi"]);

                return redirect()->route("member.index")->with("success","消费成功");

            }


        }

        return view("member.xf",compact("member","tcs"));

    }










}
