
<div class="row row-cols-1 row-cols-md-4">
	@foreach($users as $user)
 <div class="col mb-4">
  <div class="card">
   <a href="{{ route('user.show',$user['id']) }}"><img src="https://img.icons8.com/officel/2x/user.png" class="card-img-top" alt="..."></a>
   <div class="card-body">
    <h5 class="card-title">{{ $user['name'] }}</h5>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
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
@endforeach
</div>
