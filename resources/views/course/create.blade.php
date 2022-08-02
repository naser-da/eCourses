@extends('layouts.app')

    @section('content')
    <h1>Submit a new course!</h1>

    <div class="row">
        <div class="col-sm-6">
            <form method="post" action="{{route('course.submit')}}" autocomplete="off" enctype="multipart/form-data">
                
                @csrf
                @method('PUT')
                @include('alerts.success')

                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" placeholder="Course title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" required>
                </div>

                <div class="form-group{{ $errors->has('subtitle') ? ' has-danger' : '' }}">
                    <label for="subtitle">Subtitle*</label>
                    <input type="text" name="subtitle" id="subtitle" placeholder="Course subtitle" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" required>
                </div>
                
                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <label for="description">Description*</label>
                    <textarea name="description" id="description" cols="30" rows="10" class = "form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required>Tell your students about the course</textarea>
                </div>

                <div class="form-group{{ $errors->has('tutor') ? ' has-danger' : '' }}">
                    <label for="tutor">Tutor*</label>
                    <input type="text" name="tutor" id="tutor" value="{{Auth::user()->name}}" class="form-control{{ $errors->has('tutor') ? ' is-invalid' : '' }}" readonly>
                </div>

                <div class="form-group{{ $errors->has('n_weeks') ? ' has-danger' : '' }}">
                    <label for="n_weeks">Number of Weeks*</label>
                    <input type="number" name="n_weeks" id="n_weeks" placeholder="Number of weeks" class="form-control{{ $errors->has('n_weeks') ? ' is-invalid' : '' }}" required>
                </div>
            </div>

            <div class="col-sm-6">
                
                <div class="form-group{{ $errors->has('thumbnail') ? ' has-danger' : '' }}">
                    <label for="thumbnail">Thumbnail*</label>
                    <br>
                    <img src="{{asset('imgs/placeholder.jpg')}}" alt="thumbnail_placeholder" height="260px">
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file{{ $errors->has('thumbnail') ? ' is-invalid' : '' }}" required>
                </div>

                {{-- ! TODO --}}
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="dropdown" name="tags" id="tags" class="form-control">
                </div>

                <button class="form-control">
                    Submit
                </button>
            </div>
            </form>
    </div>

    @endsection