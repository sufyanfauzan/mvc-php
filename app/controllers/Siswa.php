<?php
class Siswa extends Controller
{
  public function index($pengguna = 'Anda')
  {
    $data['judul'] = 'Daftar Siswa';
    $data['data'] = $this->model('Siswa_model')->getAllSiswa();
    $data['nama'] = $pengguna;
    $this->view('templates/header', $data);
    $this->view('siswa/index', $data);
    $this->view('templates/footer');
  }
}
