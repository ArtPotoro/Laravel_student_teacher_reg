@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>course_id</th>
            <th>teacher_id</th>
            <th>group_name</th>
            <th>start</th>
            <th>finish</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }} </td>
                <td>{{ $group->course_id }}</td>
                <td>{{ $group->teacher_id }}</td>
                <td>{{ $group->group_name }}</td>
                <td>{{ $group->start }}</td>
                <td>{{ $group->finish }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('groups.edit', $group->id) }}">Paskaitos</a>
                    <a class="btn btn-success" href="{{ route('groups.edit', $group->id) }}">Studentai</a>
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
