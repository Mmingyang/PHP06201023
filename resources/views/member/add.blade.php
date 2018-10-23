@extends("layouts.main")

@section("title","会员添加")
@section("content")
    <form class="form-horizontal" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <label for="inputEmail3" class="col-sm-2 control-label">会员名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old("name")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">会员年龄</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="age" placeholder="" name="age" value="{{old("age")}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">会员余额</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mooney" placeholder="" name="money" value="{{old("money")}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection

