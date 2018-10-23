@extends("layouts.main")

@section("title","套餐编辑")
@section("content")
    <form class="form-horizontal" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <label for="inputEmail3" class="col-sm-2 control-label">套餐名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$taoc->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">套餐金额</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="money" placeholder="" name="money" value="{{$taoc->money}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">套餐描述</label>
            <div class="col-sm-10">
                {{--<input type="text" class="form-control" id="password" placeholder="" name="password" value="{{old("password")}}">--}}
                <textarea name="content" class="form-control">{{$taoc->content}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">编辑</button>
            </div>
        </div>
    </form>
@endsection

