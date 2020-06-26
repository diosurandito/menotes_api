<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

class NoteController extends Controller
{
	public function index()
	{
		$notes = Note::all();
		foreach ($notes as $note) {
			$note->view_note = [
				'href' => 'api/v1/note/'.$note->id,
				'method' => 'GET'
			];
		}

		$response = [
			'msg' => 'List of all Notes',
			'data' => $notes
		];
		return response()->json($response, 200);
	}

	// public function store(Request $request)
	// {
	// 	$this->validate($request, [
	// 		'id_user' => 'required',
	// 		'id_category' => 'required',
	// 		'title' => 'required',
	// 		'description' => 'required',
	// 		'date' => 'required'
	// 	]);

	// 	$
	// }
}
