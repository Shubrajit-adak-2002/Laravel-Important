<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::with('contact')->get();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::create([

                'name' => 'baban',
                'email' => 'baban@gmail.com',
                'phone' => '9875416474'


        ]);

        $student->contact()->create([

                'address' => 'bangalore',
                'student_id' => '3',


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
