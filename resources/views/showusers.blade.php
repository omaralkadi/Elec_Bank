
    @extends("layouts.app")
    @section("content")

    <table border = "1" style='margin-top:50px;margin-left:300px;text;width:800px'>
       <tr>
       <td>Id</td>
       <td>UserName</td>
       <td>First Name</td>
       <td>last Name</td>
       <td>Email</td>
       <td>Action</td>
       </tr>
       @foreach ($users as $user)
       <tr>
       <td>{{ $user->id }}</td>
       <td>{{ $user->username }}</td>
       <td>{{ $user->fname }}</td>
       <td>{{ $user->lname }}</td>
       <td>{{ $user->email }}</td>
       </tr>
       @endforeach
       </table>
@endsection