<!DOCTYPE html>
<html>
<head>
	<title>User Update</title>
	<link rel='stylesheet' href='/css/update.css'>
</head>
<body>
	<h2>Update User's Data</h2>
	<form method="POST" action="submit">
				{{ csrf_field() }}
				<label>Id</label>
                <input type="text" required id = "id" name="id">
                <label>First Name</label>
                <input type="text" required name="fname">
                <label>Last Name</label>
                <input type="text" required name="lname">
                <label>User Name</label>
                <input type="email" required name="uname">
                <label>password</label>
                <input type="password" required name="pass">
                <label>Email</label>
                <input type="email" required name="email"><br>
                <button type="submit" style="height: 30px;color: white;background-color: black;">Update</button>	       
    </form>
</body>
</html>
