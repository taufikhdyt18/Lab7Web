<?php
namespace App\Cells;

use CodeIgniter\View\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini extends Cell
{
    public function render($kategori = null)
    {
        $model = new ArtikelModel();
        
        // Ambil artikel berdasarkan kategori jika diberikan
        if ($kategori) {
            $artikel = $model->where('kategori', $kategori)
                             ->orderBy('created_at', 'DESC')
                             ->limit(5)
                             ->findAll();
        } else {
            $artikel = $model->orderBy('created_at', 'DESC')
                             ->limit(5)
                             ->findAll();
        }

        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
