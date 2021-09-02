<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderByDesc('created_at') -> paginate(20);
        // dd($teachers);

        return view('teachers.index', [
            'teachers' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request -> all());
        $data = $request -> validate([
            'T_Lastname' => 'bail|required|min:3',
            'T_Firstname' => 'required|min:3'
        ]);

        //dd($data);

        Teacher::create($data);
//        $teacher = new Teacher;
//        $teacher -> T_Lastname = $data['T_Lastname'];
//        $teacher -> T_Firstname = $data['T_Firstname'];
//        $teacher -> save();

        return redirect() -> route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Teacher::findOrfail($id);

        return view('teachers.show', [
            'teacher' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Teacher::findOrfail($id);

        return view('teachers.edit', [
            'teacher' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Teacher::findOrfail($id);

        $data = $request -> validate([
            'T_Lastname' => 'bail|required|min:3',
            'T_Firstname' => 'required|min:3'
        ]);

        $id -> update($data);

        return redirect() -> route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}