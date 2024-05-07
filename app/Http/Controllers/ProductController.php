<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $params = "GET";

        // Produk
        $produk = getApiData('produk-semua', $params);
        $data['produk'] = $produk ? $produk->data : null;
        
        // ddd($data['produk']);
        return view('pages.products.product', $data);
    }

    public function show($slug)
    {
        $params = "GET";
        $url    = "produk/" . $slug;

        $produk = getApiData($url, $params);
        $data['produk'] = $produk ? $produk->data : null;

        // ddd($data);
        return view('pages.products.product-detail', $data);
    }
}
