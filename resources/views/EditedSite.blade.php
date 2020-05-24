@extends("layouts.app")
@section("content")


<form action="edite" method="POST">
    {{csrf_field()}}
    <input class="form-control form-control-lg" type="text" name="NewT" value="{{$sites[0]->Site}}" style="width:600px;margin-left:290px;display:inline">
    <input type="submit" class="btn btn-primary" style="padding:10px;margin-bottom:5px;margin-left:10px;width:120px;" value="Edite" />
</form>

@endsection