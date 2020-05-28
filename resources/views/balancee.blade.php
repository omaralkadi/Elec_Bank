@extends("layouts.app")
@section("content")

	<h2>view balance</h2>
    <br>
	     <form method="POST" action = "balancee">
				{{ csrf_field() }}
				<label style="position: relative;left: 10px">enter id :</label>
        <input type="text"  placeholder= "enter id" required id = "id" name="id" style="position: relative;left: 70px"><br>

        <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 25px;width: 100px;left: 100px;">get</button>
       

    </form> 
@endsection

