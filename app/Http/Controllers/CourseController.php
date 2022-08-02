<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    public function create()
    {
        return view('course.create');
    }

    public function submit(CourseRequest $request)
    {
        $input = $request->except(['_token', '_method', 'tags']);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $file_extension = $file->getClientOriginalName();
            $destination_path = public_path() . '/imgs/courses';
            $filename = $file_extension;
            $request->file('thumbnail')->move($destination_path, $filename);
            $input['thumbnail'] = $filename;
        }

        auth()->user()->courses()->create($input);

        return back()->withStatus(__('Course successfully submitted.'));
    }
}
