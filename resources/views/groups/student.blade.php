@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>user_id</th>
            <th>group_id</th>
            <th>user name</th>
            <th>group_name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->user_id }} </td>
                <td>{{ $student->group_id }}</td>
{{--                <td>{{ $student->user->name }}</td>--}}
                    @foreach($users as $user)
                        @if($student->user_id == $user->id)
                            <td>{{$user->name}}</td>
                        @endif
                    @endforeach
{{--                @foreach($student->users as $user)--}}
{{--                    <td> {{ $user->name }} </td>--}}
{{--                @endforeach--}}
                @foreach($student->groups as $group)
                    <td> {{ $group->group_name }} </td>
                @endforeach

{{--                <td>{{ $student->student_id->group_name }}</td>--}}



            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
