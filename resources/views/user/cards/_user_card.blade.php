
<div class="row row-cols-1 row-cols-md-3">
	@foreach($users as $user)
	  <div class="col mb-4">
    <div class="card">
    	<a href="{{ route('user.show',$user['id']) }}"><img src="https://img.icons8.com/officel/2x/user.png" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <h5 class="card-title">{{ $user['name']." ".$user['lastname'] }}</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
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