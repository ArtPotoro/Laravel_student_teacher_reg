@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
    <tr>
        <th>Group_id</th>
        <th>Date</th>
        <th>Lecture_name</th>
        <th>Info</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lectures as $lecture)
        <tr>
            <td>{{ $lecture->group_id }} </td>
            <td>{{ $lecture->date }}</td>
            <td>{{ $lecture->lecture_name }}</td>
            <td>{{ $lecture->info }}</td>
{{--            @foreach($student->users as $user)--}}
{{--                <td> {{ $user->name }} </td>--}}
{{--            @endforeach--}}
{{--            @foreach($student->groups as $group)--}}
{{--                <td> {{ $group->group_name }} </td>--}}
{{--            @endforeach--}}

            {{--                <td>{{ $student->student_id->group_name }}</td>--}}



        </tr>
    @endforeach
    </tbody>
</table>
@endsection
