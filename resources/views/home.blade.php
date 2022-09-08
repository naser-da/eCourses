@extends('layouts.app')

@section('content')

{{-- This page shows for registered user as a homepage --}}
    <a href="{{route('course.add')}}" class="btn btn-primary">Add a Course</a>
    
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Your courses') }}</h1>
                    </div>
                </div>
            </div>
        
            
        </div>
        </div>
        
        
        {{-- @endauth() --}}
        <div class="card-deck">
            @foreach (auth()->user()->courses()->get() as $course)
        
                <div class="col-md-4">
                    <div class="card md-4" style="width: 18rem;">
                        <img src="{{asset('imgs/courses/'.$course->thumbnail)}}" class="card-img-top" alt="{{$course->name . "thumbnail"}}">
                        <div class="card-body">
                            <h5 class="card-title"><a href={{"course/".$course->id}}>{{$course->title}}</a> • By <a href = {{"user/".$course->user->username}}>{{$course->user->username}}</a></h5> 
                            <p class="card-text">{{$course->subtitle}}</p>
                            <a href="#" class="btn btn-primary mt-3">Enroll</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>

            @if (auth()->user()->courses()->get()->isEmpty())
            <div class="row justify-content-center">
            <p class="text-lead text-light">
                {{ __('You don\'t have any courses!') }}
            </p>
            </div>
            
            @endif

            {{-- <div class="col-md-4 mt-5">
                {{ $courses->links("pagination::bootstrap-4") }}
            </div> --}}

    @endsection
    