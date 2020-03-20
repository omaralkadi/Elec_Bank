@extends("layouts.app")
@section("content")
	<h2>Update User's Data</h2>
	<form method="POST" action="submit">
				{{ csrf_field() }}
				<label>Id</label>
                <input type="text" required id = "id" name="id"><br>
                <label>First Name</label>
                <input type="text" required name="fname"><br>
                <label>Last Name</label>
                <input type="text" required name="lname"><br>
                <label>User Name</label>
                <input type="email" required name="uname"><br>
                <label>password</label>
                <input type="password" required name="pass"><br>
                <label>Email</label>
                <input type="email" required name="email"><br>
                <button type="submit" style="height: 30px;color: white;background-color: black;">Update</button>	       
    </form>
@endsection
