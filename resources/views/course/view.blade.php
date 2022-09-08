@extends('layouts.app')

    @section('content')
    <h1>{{$course->title}}</h1>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-body">
                <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                            <h5 class="title">{{ $course->title }}</h5>
                        <p class="description">
                            {{ $course->subtitle }}
                        </p>
                    </div>
                </p>
                <div class="card-description" style="text-align: center;">
                    {{$course->description}}
                </div>
                <div class = "mt-5">
                    <h2>Week1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloribus excepturi 
                        quo doloremque itaque delectus, voluptates quaerat blanditiis commodi rerum quidem 
                        dolor architecto ea, nihil eius fugiat, fugit corporis provident?</p>
                </div>
                <div class = "mt-5">
                    <h2>Week2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloribus excepturi 
                        quo doloremque itaque delectus, voluptates quaerat blanditiis commodi rerum quidem 
                        dolor architecto ea, nihil eius fugiat, fugit corporis provident?</p>
                </div>
                <div class = "mt-5">
                    <h2>Week3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloribus excepturi 
                        quo doloremque itaque delectus, voluptates quaerat blanditiis commodi rerum quidem 
                        dolor architecto ea, nihil eius fugiat, fugit corporis provident?</p>
                </div>
                <div class="card-footer">
                    <button class = "btn btn-primary">Enroll</button>
                </div>
                {{-- <div class="card-footer">
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
                </div> --}}
            </div>
            

            {{-- @if ($user->courses()->get()->isEmpty())
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
                                <h5 class="card-title">{{$course->title}} • By <a href={{$user->username}}>{{$course->tutor}}</a></h5> 
                                <p class="card-text">{{$course->subtitle}}</p>
                                <a href="#" class="btn btn-primary mt-3">Details</a>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach --}}
                </div>

        </div>
    </div>
    @endsection