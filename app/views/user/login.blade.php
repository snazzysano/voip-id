@extends('template.skeleton')

@section('title')
@parent
@stop

@section('content')
<div class="container">
	<h1>{{ _('Login') }}</h1>

	@include('template.messages')

	{{ Form::open(array('url' => 'user/login', 'method' => 'post')) }}

	<div class="form-group">
		{{ Form::label('username', _('Username')) }}
		{{ Form::text('username', '', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('password', _('Password')) }}
		{{ Form::password('password', array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::checkbox('remember', '1'); }}
		{{ Form::label('remember', _('Remember me')) }}
	</div>

	{{ Form::submit(_('Submit'), array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}
	
</div>	
@stop
