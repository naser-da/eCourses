@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <h1>Users</h1>
    
    <div class="card-deck">
    @foreach($users as $user)
        <div class="col-md-3 mb-4">
            <div class="card md-4 card-user">
            <div class="card-body">
                <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href={{"user/".$user->username}}>
                            <img class="avatar" src="{{asset('/imgs/'. $user->pfp)}}">
                            <h5 class="title">{{$user->name}}</h5>
                        </a>
                        <p class="description">
                            {{$user->occupation}}
                        </p>
                    </div>
                </p>
                <div class="card-description">
                    {{$user->bio}}
                </div>
            </div>
            <div class="card-footer">
                <div class="button-container">
                    <button class="btn btn-icon btn-round btn-facebook">
                        <a class="fab fa-facebook" href="https://www.facebook.com/{{$user->facebook}}" target=”_blank”></a>
                    </button>
                    <button class="btn btn-icon btn-round btn-twitter">
                        <a class="fab fa-twitter" href="https://www.twitter.com/{{$user->twitter}}" target=”_blank”></a>
                    </button>
                    <button class="btn btn-icon btn-round btn-linkedin">
                        <a class="fab fa-linkedin" href="https://www.linkedin.com/in/{{$user->linkedin}}" target=”_blank”></a>
                    </button>
                </div>
            </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
