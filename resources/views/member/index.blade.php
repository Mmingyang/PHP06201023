@extends("layouts.main")
@section("title","会员列表")
@section("content")

    <a href="/member/add" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>会员名称</th>
            <th>会员年龄</th>
            <th>会员余额</th>
            <th>操作</th>
        </tr>
        @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->money}}</td>
            <td>
                <a href="cz/{{$member->id}}" class="btn btn-info">充值</a>
                <a href="xf/{{$member->id}}" class="btn btn-info">消费</a>
                <a href="edit/{{$member->id}}" class="btn btn-info">编辑</a>
                <a href="del/{{$member->id}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach

    </table>


@endsection

