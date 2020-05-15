@extends('layouts.app')

@section('content')
<table class="table" style="width:800px;margin-left:250px;">
    <caption>All Transactions</catption>
    <thead class="thead-dark">
        <tr>
            <th>From User</th>
            <th>To User</th>
            <th>Amount</th>
            <th>At</th>
            <th>state</th>
            <th>operation</th>
        </tr>
    <thead class="thead-dark">
    @foreach($transactions as $t)
    <tr>
        <td>{{$t->FromUserId}}</td>
        <td>{{$t->ToUserId}}</td>
        <td>{{$t->Amount}}</td>
        <td>{{$t->created_at}}</td>
        <td>Sucess</td>
        <td>     
        <a  class="btn btn-default btn-sm" href="listTransactions/{{$t->id}}/Delete">
          <span class="glyphicon glyphicon-remove-circle"></span> Remove
        </a>
        </td>
    </tr>
    @endforeach
    <tr></tr>
</table>
@endsection