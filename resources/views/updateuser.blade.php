@extends("layouts.app")
@section("content")

	<h2>Update User's Data</h2>
	<form method="POST" action = "updatebut">
				{{ csrf_field() }}
				<label style="position: relative;left: 10px">Id</label>
                <input type="text" required id = "id" name="id" style="position: relative;left: 70px"><br>
                <label style="position: relative;left: 10px">First Name</label>
                <input type="text" required name="fname" style="position: relative;left: 12px"><br>
                <label style="position: relative;left: 10px">Last Name</label>
                <input type="text" required name="lname" style="position: relative;left: 12px"><br>
                <label style="position: relative;left: 10px">User Name</label>
                <input type="text" required name="uname" style="position: relative;left: 10px"><br>
                <label style="position: relative;left: 10px">password</label>
                <input type="password" required name="pass" style="position: relative;left: 18px"><br>
                <label style="position: relative;left: 10px" style="position: relative;left: 70px">Email</label>
                <input type="email" required name="email" style="position: relative;left: 45px"><br>
                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">Update</button>	       
    </form>
@endsection
