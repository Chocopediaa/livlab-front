<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();

        $mentor = getApiData('mentor', $params);
        $data['mentor'] = $mentor ? $mentor->data : null;

        return view('pages.mentor.mentor', $data);
    }
}
