@extends('layouts.app')
@section('content')
<div class="container emp-profile">
    <!--
    <form method="post">
    -->
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <div class="row">
                    <img src="{{ Storage::url($user['profile_picture'])}}" class="card-img" width="400px" height="400px" />
                    <div class="file btn btn-lg btn-primary">
                        {{__('Change Photo')}}
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <div class="profile-head">
                        <h5>
                            {{ $user['name']." ".$user['lastname'] }}
                        </h5>
                        <h6>
                            {{__('Web Developer and Designer')}}
                        </h6>
                    <!--
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{__('About')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{__('Timeline')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <a href="{{ route('user.edit',$user['id']) }}" class="btn btn-success"> {{ __('Edit') }} </a>
            <a href="{{ route('user.index') }}" class="btn btn-danger"> {{ __('Back') }} </a>
        </div>
    </div>
    <div class="row">

                    <!--
    <div class="col-md-4">
        <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br/>
                    <a href="">Bootsnipp Profile</a><br/>
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br/>
                    <a href="">Web Developer</a><br/>
                    <a href="">WordPress</a><br/>
                    <a href="">WooCommerce</a><br/>
                    <a href="">PHP, .Net</a><br/>

            </div>
        </div>
    -->
    <div class="col-md-12">
        <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('Gender')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $user['gender'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('Email')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $user['email'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('Phone')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $user['phone_number'] }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('Profession')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>Web Developer and Designer</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('City')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $user['city'] }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>{{__('Country')}}</label>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $user['Country'] }}</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="row">
                    <div class="col-md-6">
                        <label>Experience</label>
                    </div>
                    <div class="col-md-6">
                        <p>Expert</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Hourly Rate</label>
                    </div>
                    <div class="col-md-6">
                        <p>10$/hr</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Total Projects</label>
                    </div>
                    <div class="col-md-6">
                        <p>230</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>English Level</label>
                    </div>
                    <div class="col-md-6">
                        <p>Expert</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Availability</label>
                    </div>
                    <div class="col-md-6">
                        <p>6 months</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>Your Bio</label><br/>
                        <p>Your detail description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--
    </form>
-->
</div>
</div>
</div>
@endsection