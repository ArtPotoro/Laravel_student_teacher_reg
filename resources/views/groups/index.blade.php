@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}</div>
                <div class="card-body">
                    @if (Auth::user()->type=='teacher')
                        <a class="btn btn-warning float-end" href="{{ route('create.groups') }}">New group creation</a>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>course_id</th>
                            <th>teacher_id</th>
                            <th>group_name</th>
                            <th>start</th>
                            <th>finish</th>
                            <th>student count</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                            <tr>
                                <td>{{ $group->id }} </td>
                                <td>{{ $group->course_id }}</td>
                                <td>{{ $group->teacher_id}}</td>
                                <td>{{ $group->group_name }}</td>
                                <td>{{ $group->start }}</td>
                                <td>{{ $group->finish }}</td>
                                <td>
                                    {{ $group->student->count() }}
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('lectures.groups', $group->id) }}">Paskaitos</a>
                                    <a class="btn btn-success" href="{{ route('students.groups', $group->id) }}">Studentai</a>
                                    @if (Auth::user()->type=='teacher')
                                    <a class="btn btn-danger" href="{{ route('groups.edit', $group->id) }}">Redaguoti</a>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::user()->type=='teacher')
                                    <form action="{{ route('groups.destroy', $group->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
