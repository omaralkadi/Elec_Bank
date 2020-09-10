@extends("layouts.app")
@section("content")

<form action="Site" method="POST">
    {{csrf_field()}}
    <input class="form-control form-control-lg" type="text" name="Trusted_Site"placeholder="New Trusted Site" style="width:600px;margin-left:290px;display:inline">
    <input type="submit" class="btn btn-primary" style="padding:10px;margin-bottom:5px;margin-left:10px;width:120px;" value="Add" />
</form>
<br>
<div class="d-flex justify-content-center">
<h1 class="display-6">Sites:</h1>
</div>

<ul class="list-group" style="width:1200px;margin-left:30px;">
@foreach($sites as $s)
    <li class="list-group-item" >{{$s->Site}} <a href="Site/{{$s->id}}/remove" style="float:right">Remove</a> 
     <a href="Site/{{$s->id}}/edite" style="float:right">edite</a></li>  

  @endforeach
  </ul>

@endsection