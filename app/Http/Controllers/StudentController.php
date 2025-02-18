<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', compact('group'), [
            'pageTitle' => 'Создание нового студента в группе ' . $group->title,
            'group' => $group,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Group $group, Request $request)
    {
        $student = $group->students()->create($request->all());

        return redirect()->route('groups.show', ['group' => $group]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
        return view('students.card', compact('student'), [
            'pageTitle' => 'Информация о студенте',
            'student' => $student,
            'group' => $group,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
