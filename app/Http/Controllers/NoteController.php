<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::orderBy('created_at', 'desc')->get();

        return response()->json($notes);
    }

    public function show()
    {
        //
    }

    public function createNote()
    {
        //
    }
    
    public function updateNote()
    {
        //
    }
    
    public function deleteNote()
    {
        //
    }
}
