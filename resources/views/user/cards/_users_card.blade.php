<div class="row row-cols-1 row-cols-md-4">
	@forelse($users['data'] as $user)
 <div class="col mb-4">
  <div class="card" >
   <a href="{{ route('user.show',$user['id']) }}">
    <img src="{{ Storage::url($user['profile_picture'])}}" class="card-img-top" style=" height: 200px; " />
  </a>
  <div class="card-body">
    <h5 class="card-title text-center">{{ $user['name'] }}</h5>
    <!--
    <ul class="list-group list-group-flush">
      <li class="list-group-item text-left">{{ __('Gender: ').$user['gender'] }}</li>
      <li class="list-group-item text-left">{{ __('Country: ').$user['Country'] }}</li>
    </ul>
  -->
</div>
<div class="card-footer text-center">
  <form method="POST" action="{{ route('user.destroy',$user['id']) }}">
   @csrf
   @method('DELETE')
   <a href="{{ route('user.edit',$user['id']) }}" class="btn btn-success"> {{ __('Edit') }} </a>
   <button class=" btn btn-danger">
    {{ __('Delete') }}
  </button>
</form>

</div>
</div>
</div>

@empty
<h5>No hay usuarios registrados</h5>
@endforelse
</div>