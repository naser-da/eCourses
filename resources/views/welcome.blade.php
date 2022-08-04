@extends('layouts.app')

@section('content')

{{-- @auth
<a href="{{route('course.add')}}" class="btn btn-primary">Add a Course</a>
@endauth --}}
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Welcome to eCourses') }}
                            <br>
                            {{"Your IP is: ".$country}}
                        </p>
                    </div>
                </div>
            </div>
        
            
        </div>
        </div>
        
        
    <div class="card-deck">
    @foreach ($courses as $course)

        <div class="col-md-4">
            <div class="card md-4" style="width: 18rem;">
                <img src="{{asset('imgs/courses/'.$course->thumbnail)}}" class="card-img-top" alt="{{$course->name . "thumbnail"}}">
                <div class="card-body">
                    <h5 class="card-title">{{$course->title}} • By {{$course->tutor}}</h5> 
                    <p class="card-text">{{$course->subtitle}}</p>
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>

    @endsection
    