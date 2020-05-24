@extends('layouts.app')
@section('content')
<form action="Check_sites" method="POST">
    {{csrf_field()}}
    <input class="form-control form-control-lg" type="text" name="check_web_site"placeholder="Enter site for search" style="width:600px;margin-left:290px;display:inline">
    <input type="submit" class="btn btn-primary" style="padding:10px;margin-bottom:5px;margin-left:10px;width:120px;" value="Search" />
</form>
<br>
<div class="d-flex justify-content-center">
</div>

<ul class="list-group" style="width:1200px;margin-left:30px;">
@foreach($sites as $s)
    <li class="list-group-item" >{{$s->Site}} </li>
    this web sit trusted
  @endforeach
  </ul>

@endsection
