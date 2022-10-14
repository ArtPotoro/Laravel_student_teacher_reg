<?php

namespace App\Http\Controllers;


use App\Models\Lecture;
use App\Models\Student;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $groups=Group::with('teacher')->get();
        $users=User::all();
//        $lectures=Lecture::all();
//        $groups=Group::all();
        return view("groups.index",['groups'=>$groups, 'users'=>$users]);

//        $users=User::with('student')->get();
//        $groups=Group::all();
//        $students=Student::all();
//        return view("student.index",['users'=>$users, 'groups'=>$groups, 'students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }

    public function groupStudents($group_id,Request $request){

        $students=Student::where('group_id', $group_id)->get();
        $users=User::all();
        return view('groups.student', ['students'=>$students, 'users'=>$users]);
//        $request->post($name);
//        return $this->students();

    }
    public function groupLectures($group_id,Request $request){

        $lectures=Lecture::where('group_id', $group_id)->get();
        $groups=Group::all();
        return view('groups.lecture', ['lectures'=>$lectures, 'groups'=>$groups]);
//        $request->post($name);
//        return $this->students();

    }

}
