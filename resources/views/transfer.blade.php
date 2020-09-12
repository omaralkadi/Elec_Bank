@extends("layouts.app")
@section("content")

	<h2>Transfer Money</h2>
    <br>
	<form method="POST" action = "transfer">
				{{ csrf_field() }}
				<label style="position: relative;left: 10px">transfer from :</label>
                <input type="text" value="{{$user->id}}" readonly required id = "id" name="id" style="position: relative;left: 70px"><br>

                <label style="position: relative;left: 10px">transfer to :</label>
                <input type="text"  placeholder= "enter id" required id = "id2" name="id2" style="position: relative;left: 85px"><br>


                <label style="position: relative;left: 10px">money amount</label>
                <input type="number" min="0.00001" step="0.01" required amount="amount" placeholder="must be positive number" name="amount" style="position: relative;left: 62px"><br   >

                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">transfer</button>
    </form>
@endsection
