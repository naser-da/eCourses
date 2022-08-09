@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')
                            
                            <div class="form-group{{ $errors->has('pfp') ? ' has-danger' : '' }}">
                                <label>{{ __('Profile Picture') }}</label>
                                <input type="file" name="pfp" class="form-control-file{{ $errors->has('pfp') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'pfp'])
                                <br>
                                <img width="100px" height="100px" src="{{asset('/imgs/'. auth()->user()->pfp)}}" alt="{{auth()->user()->name . "'s profile picture"}}">
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                <label>{{ __('Username') }}</label>
                                <input type="text" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{auth()->user()->username}}" value="{{ old('username', auth()->user()->username) }}" disabled>
                                @include('alerts.feedback', ['field' => 'username'])
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Email address') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('occupation') ? ' has-danger' : '' }}">
                                <label>{{ __('Occupation') }}</label>
                                <input type="text" name="occupation" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" placeholder="{{ __('What do you do for a living?') }}" value="{{ old('occupation', auth()->user()->occupation) }}">
                                @include('alerts.feedback', ['field' => 'occupation'])
                            </div>

                            <div class="form-group{{ $errors->has('bio') ? ' has-danger' : '' }}">
                                <label>{{ __('Bio') }}</label>
                                <textarea type="text" name="bio" class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" placeholder="{{ __('Tell us about yourself!') }}">{{ auth()->user()->bio }}</textarea>
                                @include('alerts.feedback', ['field' => 'bio'])
                            </div>

                            <div class="form-group{{ $errors->has('facebook') ? ' has-danger' : '' }}">
                                <label>{{ __('Facebook') }}</label>
                                <input type="text" name="facebook" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" placeholder="{{ __('Your facebook account ID here') }}" value="{{ old('facebook', auth()->user()->facebook) }}">
                                @include('alerts.feedback', ['field' => 'facebook'])
                            </div>

                            <div class="form-group{{ $errors->has('twitter') ? ' has-danger' : '' }}">
                                <label>{{ __('Twitter') }}</label>
                                <input type="text" name="twitter" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" placeholder="{{ __('Your twitter account ID here') }}" value="{{ old('twitter', auth()->user()->twitter) }}">
                                @include('alerts.feedback', ['field' => 'twitter'])
                            </div>

                            <div class="form-group{{ $errors->has('linkedin') ? ' has-danger' : '' }}">
                                <label>{{ __('LinkedIn') }}</label>
                                <input type="text" name="linkedin" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" placeholder="{{ __('Your linkedin account ID here') }}" value="{{ old('linkedin', auth()->user()->linkedin) }}">
                                @include('alerts.feedback', ['field' => 'linkedin'])
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Password') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Change password') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{asset('/imgs/'. auth()->user()->pfp)}}" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            <p class="description">
                                {{ auth()->user()->occupation }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{auth()->user()->bio}}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <a class="fab fa-facebook" href="https://www.facebook.com/{{auth()->user()->facebook}}" target=”_blank”></a>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <a class="fab fa-twitter" href="https://www.twitter.com/{{auth()->user()->twitter}}" target=”_blank”></a>
                        </button>
                        <button class="btn btn-icon btn-round btn-linkedin">
                            <a class="fab fa-linkedin" href="https://www.linkedin.com/in/{{auth()->user()->linkedin}}" target=”_blank”></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
