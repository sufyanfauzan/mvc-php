<?php
class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $data['judul'] = 'Page';
    $data['gambar'] = 'gambar.jpeg';
    $data['nama'] = 'Sufyan';
    $data['pekerjaan'] = 'Pelajar';
    $this->view('templates/header', $data);
    $this->view('home/page', $data);
    $this->view('templates/footer');
  }
}
