@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Update form</div>
                <div class="card-body">
                    <form action="{{ route('groups.update', $group->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Group Name</label>
                            <input class="form-control @error('group_name') is-invalid @enderror" type="text" name="group_name" value="{{ $group->group_name }}">
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
                                    <option value="{{$course->id}}" @selected($group->course_id==$course->id)> {{$group->course->course_name}} </option>
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
                            <input class="form-control @error('start') is-invalid @enderror" type="date" name="start" value="{{ $group->start }}">
                            @error('start')
                            @foreach( $errors->get('start') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Finish date</label>
                            <input class="form-control @error('finish') is-invalid @enderror" type="date" name="end" value="{{ $group->finish }}">
                            @error('finish')
                            @foreach( $errors->get('finish') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Teacher</label>
                            <select class="form-control @error('teacher_id') is-invalid @enderror" name="teacher_id" >
                                <option selected disabled>Choose</option>

                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}" @selected($group->teacher_id==$teacher->id)> {{$teacher->name}} </option>
                                @endforeach

                            </select>
                            @error('teacher_id')
                            @foreach( $errors->get('teacher_id') as $error)
                                <div class="alert alert-danger"> {{ $error }} </div>
                            @endforeach
                            @enderror
                        </div>

                        <button class="btn btn-primary">Update</button>
                        <a class="btn btn-success mx-3 float-end" href="{{ route('groups.index') }}">Go Back</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
