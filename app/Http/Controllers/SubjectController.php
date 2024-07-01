<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index($studentId, Request $request)
    {
        // Implement filtering logic here
        $subjects = Subject::where('student_id', $studentId)->get();
        return response()->json(['subjects' => $subjects]);
    }

    public function store($studentId, Request $request)
    {
        $data = $request->all();
        $data['student_id'] = $studentId;
        $subject = Subject::create($data);
        return response()->json($subject, 201);
    }

    public function show($studentId, $subjectId)
    {
        $subject = Subject::where('student_id', $studentId)->find($subjectId);
        return response()->json($subject);
    }

    public function update($studentId, Request $request, $subjectId)
    {
        $subject = Subject::where('student_id', $studentId)->find($subjectId);
        $subject->update($request->all());
        return response()->json($subject);
    }
}
