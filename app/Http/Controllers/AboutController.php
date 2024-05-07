<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $params = "GET";

        // Profil
        $profil = getApiData('profil', $params);
        $data['profil'] = $profil ? $profil : null;

        // Mentor
        $mentor = getApiData('mentor-limit', $params);
        $data['mentor'] = $mentor ? $mentor->data : null;

        // Instansi
        $instansi = getApiData('instansi', $params);
        $data['instansi'] = $instansi ? $instansi->data : null;
        $data['total_instansi'] = isset($data['instansi']) ? count($data['instansi']) : 0;

        // ddd($data);
        return view('pages.about.about', $data);
    }
}
