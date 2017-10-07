		<div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label("Correo: ")!!}
			{!!Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Ingresa el email'])!!}
		</div>
		<div class="form-group">
			{!!Form::label("Password: ")!!}
			{!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña'])!!}
		</div>