<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = "GET";

        $agenda  = getApiData('agenda-semua', $params);
        $data['agenda'] = $agenda ? $agenda->data : null;

        // ddd($data['media']);
        return view('pages.agenda.agenda', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $params = "GET";
        $url    = "agenda/" . $slug;

        $agenda = getApiData($url, $params);
        $data['agenda'] = $agenda ? $agenda->data : null;


        // $kategori_media = getApiData($url, $params);
        // $data['kategori'] = $kategori_media ? $kategori_media->data->kategori_media : null;

        // $media_baru =  getApiData($url, $params);
        // $data['media_baru'] = $media_baru ? $media_baru->data->media_baru : null;

        // dd($data);
        return view('pages.agenda.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
