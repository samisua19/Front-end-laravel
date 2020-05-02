@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card text-right">
		<div class="card-header">
			<a class="btn btn-primary" href="{{ route('user.create') }}"> {{ __('Create User') }} </a>
		</div>
		<div class="card-body">
			@include('user.cards._user_card',[ 'users' => $users])
		</div>
	</div>
</div>
@endsection