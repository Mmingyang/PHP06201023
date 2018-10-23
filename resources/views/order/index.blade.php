@extends("layouts.main")
@section("title","消费列表")
@section("content")

    <table class="table">
        <tr>
            <th>ID</th>
            <th>会员名称</th>
            <th>类型</th>
            <th>金额</th>

        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td><?php echo($order->is_on_sale==1?'充值':'消费');?></td>
            <td>{{$order->money}}</td>
        </tr>
        @endforeach

    </table>


@endsection

