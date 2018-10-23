@extends("layouts.main")

@section("title","会员充值")
@section("content")
    <form class="form-horizontal" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">充值余额</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mooney" placeholder="" name="money">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">充值</button>
            </div>
        </div>
    </form>
@endsection

