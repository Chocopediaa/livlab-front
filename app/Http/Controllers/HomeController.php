<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function index()
    {
        $params = $_GET;

        //header
        $header = getApiData('header', $params);
        $data['header'] = $header ? $header->data : null;

        // Instansi
        $instansi = getApiData('instansi', $params);
        $data['instansi'] = $instansi ? $instansi->data : null;
        $data['total_instansi'] = isset($data['instansi']) ? count($data['instansi']) : 0;

        // Profil
        $profil = getApiData('profil', $params);
        $data['profil'] = $profil ? $profil : null;
        
        // Produk
        $produk = getApiData('produk', $params);
        $data['produk'] = $produk ? $produk->data : null;

        $produk_semua = getApiData('produk-semua', $params);
        $data['produk_semua'] = $produk_semua ? $produk_semua->data->data : null;

        // ddd($data['produk_semua']);

        $data['total_produk'] = isset($data['produk_semua']) ? count($data['produk_semua']) : 0;

        $produk_gtg = getApiData('produk/gtg', $params);
        $data['produk_gtg'] = $produk_gtg ? $produk_gtg->data : null;

        $produk_gtb = getApiData('produk/gtb', $params);
        $data['produk_gtb'] = $produk_gtb ? $produk_gtb->data : null;

        $produk_gtc = getApiData('produk/gtc', $params);
        $data['produk_gtc'] = $produk_gtc ? $produk_gtc->data : null;

        $produk_gte = getApiData('produk/gte', $params);
        $data['produk_gte'] = $produk_gte ? $produk_gte->data : null;

        // Testimoni
        $testimoni = getApiData('testimoni', $params);
        $data['testimoni'] = $testimoni ? $testimoni->data : null;
        $data['total_testimoni'] = isset($data['testimoni']) ? count($data['testimoni']) : 0;

        // faq
        $faq = getApiData('faq', $params);
        $data['faq'] = $faq ? $faq->data : null;

        // Mentor
        $mentor = getApiData('mentor', $params);
        $data['mentor'] = $mentor ? $mentor->data : null;
        $data['total_mentor'] = isset($data['mentor']) ? count($data['mentor']) : 0;


        // dd($data);

        return view('pages.home.home', $data);
    }
}
