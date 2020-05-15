@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', $user['id']) }}" enctype="multipart/form-data">
                    	@method('PUT')
                                @include('user._form_user',[
                                    'btnText' => 'Update'
                                    ])
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection