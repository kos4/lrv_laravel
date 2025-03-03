<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groups.index', [
            'pageTitle' => 'Список групп',
            'groups' => Group::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create', [
            'pageTitle' => 'Создание новой группы',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $start_from = new \DateTimeImmutable($request->input('start_from'));
        $is_active = (bool) $request->input('is_active');

        $group = Group::create([
            'title' => $title,
            'start_from' => $start_from,
            'is_active' => $is_active,
        ]);

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        $students = $group->students;

        return view('groups.card', [
            'pageTitle' => 'Информация о группе ' . $group->title,
            'group' => $group,
            'students' => $students,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
