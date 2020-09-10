
    @extends("layouts.app")
    @section("content")

    <table class="table" style="width:800px;margin-left:250px;">
    <caption>All Users</catption>
    <thead class="thead-dark">
       <tr>
          <td>Id</td>
          <td>UserName</td>
          <td>First Name</td>
          <td>last Name</td>
          <td>Email</td>
          <td>Money</td>
          <td>IsBan</td>
          <td>Ban_User</td>
          <td>Un_BanUser</td>
          <td>Delete User</td>
          <td>Update User</td>
       </tr>
    <thead class="thead-dark">
       @foreach ($users as $user)
       <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->fname }}</td>
          <td>{{ $user->lname }}</td>
          <td>{{ $user->email }}</td>
          <td>{{$user->money}}</td>
          <td>{{ $user->isBan }}</td>
          <td> <a class="btn btn-default btn-sm" href='/BanUser/{{ $user->id }}'>Ban</a></td>
          <td> <a class="btn btn-default btn-sm" href='/UnBanUser/{{ $user->id }}'>UnBan</a></td>
          <td> <a class="btn btn-default btn-sm"  href='/deleteUser/{{ $user->id }}'>Delete</a></td>
          <td> <a class="btn btn-default btn-sm"  href='/UpdateUser/{{ $user->id }}/edite'>Update</a></td>
       </tr>
       @endforeach
    </table>
@endsection