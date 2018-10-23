@extends("layouts.main")

@section("title","会员消费")
@section("content")
    <form class="form-horizontal" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">会员名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$member->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">套餐名称</label>
            <div class="col-sm-10">
                <select name="money" id="">
                    <option>请选择套餐</option>
                    @foreach($tcs as $tc)
                        <option value="{{$tc->money}}" > {{$tc->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">消费</button>
            </div>
        </div>
    </form>
@endsection

