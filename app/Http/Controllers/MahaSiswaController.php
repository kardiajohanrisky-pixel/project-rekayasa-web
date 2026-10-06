<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Risky Kardia Johan',
            'nim' => '251011700863',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'foto' => 'foto.png',
        ];
        return view('page.profile', $data);
    }
}