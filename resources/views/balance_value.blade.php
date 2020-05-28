@extends("layouts.app")
@section("content")

	<h2></h2>
    <br>

	     <form method="POST" action = "balancee">
				{{ csrf_field() }}

               <h2  style='color:black;margin-left:50px;margin-top:50px'>Your Balance Is :  {{$m}}  '_' </h2>
                
        </form> 

@endsection

