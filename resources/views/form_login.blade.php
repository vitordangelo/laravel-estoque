@extends('layout.principal')

@section('conteudo')
	
	@if($errors->all())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/login" method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" class="form-control" name="password">
		</div>
		<button class="btn btn-primary" type="submit">Logar</button>
	</form>
@stop