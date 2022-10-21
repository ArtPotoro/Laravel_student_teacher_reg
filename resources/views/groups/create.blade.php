@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Create form</div>
                <div class="card-body">
                    <form action="{{ route('groups.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Groups Name</label>
                            <input class="form-control @error('group_name') is-invalid @enderror" type="text" name="group_name" value="{{old('group_name')}}">
                            @error('group_name')
                            @foreach( $errors->get('group_name') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Course</label>
                            <select class="form-control @error('course_id') is-invalid @enderror" name="course_id" >
                                <option selected disabled>Choose</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}" @selected(old('course_id')==$course->id)> {{$course->course_name}} </option>
                                @endforeach
                            </select>
                            @error('course_id')
                            @foreach( $errors->get('course_id') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start date</label>
                            <input class="form-control @error('start') is-invalid @enderror" type="date" name="start" value="{{old('start')}}">
                            @error('start')
                            @foreach( $errors->get('start') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Finish date</label>
                            <input class="form-control @error('finish') is-invalid @enderror" type="date" name="end" value="{{old('finish')}}">
                            @error('finish')
                            @foreach( $errors->get('finish') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Teacher</label>
                            <select class="form-control @error('teacher') is-invalid @enderror" name="teacher" >
                                <option selected disabled>Choose</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}" @selected(old('teacher')==$teacher->id)> {{$teacher->name}} </option>
                                @endforeach
                            </select>
                            @error('teacher')
                            @foreach( $errors->get('teacher') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <button class="btn btn-primary">Add</button>
                        <a class="btn btn-success mx-3 float-end" href="{{ route('groups.index') }}">Go Back</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
