<?php
namespace App\Controllers;

use Codeigniter\Controller;
class Page extends BaseController
{
    // public function about()
    // {

    // return view('about', [
    //     'title' => 'Halaman Abot',
    //     'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
    //     halaman ini.'
    //     ]);
    // }

    public function contact()
    {
    echo "Ini halaman Contact";
    }
    public function faqs()
    {
    echo "Ini halaman FAQ";
    }
    public function tos()
    {
    echo "ini halaman TOS";
    }
}
