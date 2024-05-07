<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $params = "GET";

        // Instansi
        $instansi = getApiData('instansi', $params);
        $data['instansi'] = $instansi ? $instansi->data : null;
        $data['total_instansi'] = isset($data['instansi']) ? count($data['instansi']) : 0;

        return view('pages.partner.instansi', $data);
    }
}
