@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
              <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$user['name']}}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ route('user.index') }}" class="btn btn-success"> {{ __('Back') }} </a>
            </div>
            <div class="card-footer text-muted">
                {{ $user['created_at'] }}
            </div>
        </div>
    </div>
</div>
</div>
@endsection