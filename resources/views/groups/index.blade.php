@extends('layouts.app')
@section('content')
    <h1>{{Auth::user()->name}}</h1>
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
                    <a class="btn btn-danger" href="{{ route('groups.edit', $group->id) }}">Redaguoti</a>
                </td>
                <td>
                    <form action="{{ route('groups.destroy', $group->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
