@extends("layouts.app")
@section("content")

@if(count($errors)>0)
        @foreach($errors->all() as $error)

        <p class="alert alert-danger">{{$error}}</p>

        @endforeach

     @endif

     @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
      @endif

      @if (\Session::has('faild'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('faild') !!}</li>
        </ul>
    </div>
      @endif


	<h2>Transfer Money</h2>
    <br>
	<form method="POST" action = "transfer">
				{{ csrf_field() }}
				<label style="position: relative;left: 10px">transfer from :</label>
                <input type="text" value="{{$user->id}}" readonly required id = "id" name="id" style="position: relative;left: 70px"><br>

                <label style="position: relative;left: 10px">transfer to :</label>
                <input type="text"  placeholder= "enter id" required id = "id2" name="id2" style="position: relative;left: 85px"><br>


                <label style="position: relative;left: 10px">money amount</label>
                <input type="number"  placeholder="must be positive number" name="amount" style="position: relative;left: 62px"><br   >

                <button type="submit" style="height: 30px;color: white;background-color: black;position: relative;top: 10px;width: 300px;left: 10px;">transfer</button>
    </form>
@endsection
