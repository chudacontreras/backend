@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')

	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
				{!!link_to('password/email', $title = 'Olvidaste tu contraseña?', $attributes = null, $secure = null)!!}
				
      </form>

    </div> <!-- /container -->


	@endsection	