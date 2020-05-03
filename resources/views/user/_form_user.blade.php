 @csrf
 <div class="form-group row" hidden="true" >
    <div class="col-md-6">
        <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id',$user['id']) }}"  autofocus >

    </div>
</div>
<div class="form-group row">
    <label for="identification_card" class="col-md-4 col-form-label text-md-right">{{ __('Identification card') }}</label>

    <div class="col-md-6">
        <input id="identification_card" type="text" class="form-control @error('identification_card') is-invalid @enderror" name="identification_card" value="{{ old('identification_card',$user['identification_card']) }}" required autocomplete="identification_card" autofocus>

        @error('identification_card')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Names') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control " name="name" value="{{ old('name',$user['name']) }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastnames') }}</label>

    <div class="col-md-6">
        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname',$user['lastname']) }}" required autocomplete="lastname" autofocus>

        @error('lastname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>

    <div class="col-md-6">
        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth',$user['date_of_birth']) }}" required autocomplete="date_of_birth">

        @error('date_of_birth')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

    <div class="col-md-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="gender">Options</label>
        </div>
        <select class="custom-select  @error('gender') is-invalid @enderror" id="gender" name="gender">
            <option selected value="{{ old('gender',$user['gender']) }}" id="gender">{{ old('gender',$user['gender']) }}</option>
            <option value="Male">{{ __('Male') }}</option>
            <option value="Female">{{ __('Female') }}</option>
            <option value="Other">{{ __('Other') }}</option>
        </select>
    </div>
    @error('gender')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

</div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user['email']) }}" required autocomplete="email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

    <div class="col-md-6">
        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number',$user['phone_number']) }}" required autocomplete="phone_number">

        @error('phone_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

    <div class="col-md-6">
        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address',$user['address']) }}" required autocomplete="address">

        @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

    <div class="col-md-6">
        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city',$user['city']) }}" required autocomplete="city">

        @error('city')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="Country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

    <div class="col-md-6">
        <input id="Country" type="text" class="form-control @error('Country') is-invalid @enderror" name="Country" value="{{ old('Country',$user['Country']) }}" required autocomplete="Country">

        @error('Country')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <a href="{{ route('user.index') }}" class="btn btn-success"> {{ __('Back') }} </a>
        <button type="submit" class="btn btn-primary">
            {{ __($btnText) }}
        </button>
    </div>
</div>