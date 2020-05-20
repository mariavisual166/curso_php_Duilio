@extends('welcome')

@section('content')
	@foreach( $users as $item )
		<li>{{$item->name}}
			<a href="{{route('user.show',$item->id)}}">Ver detalles</a>
			<a href="{{route('user.edit',$item->id)}}">Editar</a>
			<form action="{{route('user.destroy',$item->id)}}" method="POST">
             @method('DELETE') 
             @csrf
                 <button type="submit" >Eliminar</button>
          </form>
		</li>        
	@endforeach 
@endsection