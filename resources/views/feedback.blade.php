@extends('layouts.app')
@section('content')
<table class="table" style="width:800px;margin-left:250px;">
<caption>FeedBacks</catption>
   <thead class="thead-dark">
   <tr>
   <td>Number</td>
   <td>comment</td>
   <td>user email</td>
   <td>comment date</td>
   <td>Remove</td>
   </tr>
   <thead class="thead-dark">
   @foreach ($feedback as $comment)
   <tr>
     <td>{{ $comment->id }}</td>
     <td>{{ $comment->comment }}</td>
     <td>{{ $comment->user_email }}</td>
     <td>{{ $comment->created_at }}</td> 
     <td> <a class="btn btn-default btn-sm"  href='/deleteFeedback/{{ $comment->id }}'>Delete</a></td>
   </tr>
   @endforeach
   </table>

@stop
