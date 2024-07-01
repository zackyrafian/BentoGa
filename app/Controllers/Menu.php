<?php
namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        $title = 'Daftar Menu';
        $model = new MenuModel();
        $menu = $model->findAll();
         // Mengecek apakah ada data yang dikembalikan
        if (empty($menu)) {
            echo "Tidak ada data yang dikembalikan dari database.";
            exit; // Hentikan eksekusi script agar view tidak dimuat
        }

        // Jika ada data, lanjutkan untuk menampilkan view
        return view('menu/menu', compact('menu'));
    }
}