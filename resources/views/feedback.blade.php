@extends('layouts.app')

@section('content')
<table border = "1" style='margin-top:50px;margin-left:300px;text;width:800px'>
   <tr>
   <td>Number</td>
   <td>comment</td>
   <td>user email</td>
   <td>comment date</td>
   </tr>
   @foreach ($feedback as $comment)
   <tr>
     <td>{{ $comment->id }}</td>
     <td>{{ $comment->comment }}</td>
     <td>{{ $comment->user_email }}</td>
     <td>{{ $comment->commented_at }}</td>
   </tr>
   @endforeach
   </table>

@stop
