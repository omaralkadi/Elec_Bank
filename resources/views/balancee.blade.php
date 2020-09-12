@extends("layouts.app")
@section("content")

	<h2>view balance</h2>
    <br>
	     <form method="POST" action = "balancee">
				{{ csrf_field() }}
                
        <input type="text" value="{{$user->id}}" readonly name="id" required id = "id" style="position: relative;left: 70px"><br>

        <button type="submit"  style="height: 30px;color: white;background-color: black;position: relative;top: 25px;width: 100px;left: 100px;">get</button>

    </form> 
@endsection

