@extends('layouts.app')

@section('content')

@auth()
{{-- auth user homepage (courses/add new course) --}}
    <a href="{{route('course.add')}}" class="btn btn-primary">Add a Course</a>
    
@else
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Welcome to eCourses') }}
                        </p>
                    </div>
                </div>
            </div>
        
            
        </div>
        </div>
        
        
        @endauth()

        <div class="card mt-5" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    @endsection
    