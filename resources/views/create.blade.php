@extends('welcome')

@section('content')
	<div class="container ">
      <div class="row justify-content-center" >
        <div class="col-sm-8 ">
          <h3 class="text-center mb-4">Agregar </h3>
           @if($errors->any())
	           <ul>
	           	@foreach( $errors->all() as $error )
					<li>{{$error}}</li>  
				@endforeach  
	           </ul>   
           @endif
          <form action="{{route('user.store')}}" method="POST">
             @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" id="name" >
                </div>
   				<div class="form-group">
                    <label for="name">email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" >
                </div>
                <div class="form-group">
                    <label for="name">password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>
                <select class="form-control mb-4" id="profession_id" name="profession_id" >
                	@foreach( $professions as $item )
						      <option value="{{$item->id}}">{{$item->title}}</option>    
					@endforeach  
				</select>
                 <button type="submit" class="btn btn-primary btn-block">Crear</button>
          </form>
        </div>
      </div>
    </div>       
@endsection