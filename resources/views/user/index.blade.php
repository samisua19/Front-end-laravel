@extends('layouts.app')

@section('content')
<div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">{{ __('identification card') }}</th>
				<th scope="col">{{ __('Name') }}</th>
				<th scope="col">{{ __('Lastname') }}</th>
				<th scope="col">{{ __('Address') }}</th>
				<th scope="col">{{ __('Phone number') }}</th>
				<th scope="col">{{ __('City') }}</th>
				<th scope="col">{{ __('Country') }}</th>
				<th scope="col">{{ __('Email') }}</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $user)
			<tr>
				<th scope="row">{{ $user->id }}</th>
				<td>{{ $user->identification_card }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->lastname }}</td>
				<td>{{ $user->address }}</td>
				<td>{{ $user->phone_number }}</td>
				<td>{{ $user->city }}</td>
				<td>{{ $user->Country }}</td>
				<td>{{ $user->email }}</td>
				</form></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection