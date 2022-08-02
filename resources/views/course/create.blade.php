@extends('layouts.app')

    @section('content')
    <h1>Submit a new course!</h1>

    <div class="row">
        <div class="col-sm-6">
            <form action="post">
                
                <div class="form-group">
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" placeholder="Course title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="subtitle">Subtitle*</label>
                    <input type="text" name="subtitle" id="subtitle" placeholder="Course subtitle" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="description">Description*</label>
                    <input type="text" name="description" id="description" placeholder="Course description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="tutor">Tutor*</label>
                    <input type="text" name="tutor" id="tutor" value="{{Auth::user()->name}}" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label for="n_weeks">Number of Weeks*</label>
                    <input type="number" name="n_weeks" id="n_weeks" placeholder="Number of weeks" class="form-control" required>
                </div>
            </div>

            <div class="col-sm-6">
                
                <div class="form-group">
                    <label for="thumbnail">Thumbnail*</label>
                    <br>
                    <img src="{{asset('imgs/placeholder.jpg')}}" alt="thumbnail_placeholder" height="220px">
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file" required>
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