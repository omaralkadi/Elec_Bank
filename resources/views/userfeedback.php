@extends("layouts.app")
@section("content")


	<form method="POST" action = "userfeed">
				{{csrf_field()}}
				<label style="position: relative;left: 10px">Id</label>
                <input type="text"  required name="id" style="position: relative;left: 70px"><br>
                <label style="position: relative;left: 10px">Comment</label>
                <input type="text" name="Comment" style="position: relative;left: 20px"><br>
                <label style="position: relative;left: 10px" style="position: relative;left: 70px">Email</label>
                <input type="email" required name="email" style="position: relative;left: 45px"><br>
                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">Submit</button>
	</form>

