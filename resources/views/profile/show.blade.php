@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <h1>User Profile</h1>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-body">
                <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                            <img class="avatar" src="{{asset('/imgs/'. $user->pfp)}}" style="float:left;">
                            <h5 class="title">{{ $user->name }}</h5>
                        <p class="description">
                            {{ $user->occupation }}
                        </p>
                    </div>
                </p>
                <div class="card-description" style="text-align: center;">
                    {{$user->bio}}
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
            

            @if ($user->courses()->get()->isEmpty())
            <div class="row justify-content-center">
            <p class="alert alert-info">
                {{ __('This user does not have any courses!') }}
            </p>
            </div>
            @endif

            <div class="card-deck">
                @foreach ($user->courses()->get() as $course)
            
                    <div class="col-md-4">
                        <div class="card md-4" style="width: 18rem;">
                            <img src="{{asset('imgs/courses/'.$course->thumbnail)}}" class="card-img-top" alt="{{$course->name . "thumbnail"}}">
                            <div class="card-body">
                                <h5 class="card-title"><a href={{route('course.view', [$course->id, 'id'])}}>{{$course->title}}</a> • By <a href={{$user->username}}>{{$course->tutor}}</a></h5> 
                                <p class="card-text">{{$course->subtitle}}</p>
                                <a href="#" class="btn btn-primary mt-3">Enroll</a>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>

        </div>
    </div>
@endsection
