@extends("layouts.main")

@section("title","套餐添加")
@section("content")
    <form class="form-horizontal" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <label for="inputEmail3" class="col-sm-2 control-label">套餐名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old("name")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">套餐金额</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="money" placeholder="" name="money" value="{{old("money")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">套餐描述</label>
            <div class="col-sm-10">
                {{--<input type="text" class="form-control" id="password" placeholder="" name="password" value="{{old("password")}}">--}}
                <textarea name="content" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection

