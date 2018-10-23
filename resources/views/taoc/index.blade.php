@extends("layouts.main")
@section("title","套餐列表")
@section("content")

    <a href="/taoc/add" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>套餐名称</th>
            <th>套餐金额</th>
            <th>套餐描述</th>
            <th>操作</th>
        </tr>
        @foreach($taocs as $taoc)
        <tr>
            <td>{{$taoc->id}}</td>
            <td>{{$taoc->name}}</td>
            <td>{{$taoc->money}}</td>
            <td>{{$taoc->content}}</td>
            <td>
                <a href="edit/{{$taoc->id}}" class="btn btn-info">编辑</a>
                <a href="del/{{$taoc->id}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach

    </table>


@endsection

