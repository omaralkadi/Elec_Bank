@extends('layouts.app')
@section('content')

	<form method="POST" action = "userfeed">
				{{csrf_field()}}
				<label style="position: relative;left: 10px">Id</label>
                <input type="text" readonly required name="id" value="{{$user->id}}" style="position: relative;left: 72px"><br>
                <label style="position: relative;left: 10px"  style="position: relative;left: 70px">Email</label>
                <input type="email"  readonly required name="email" value="{{$user->email}}" style="position: relative;left: 48px"><br>
                <label style="position: relative;left: 10px">Comment</label>
                <input type="text" name="Comment" placeholder="please,enter your comment " style="position: relative;left: 20px;width: 500px;height:50px"><br>

                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">Submit</button>
	</form>
@stop
