<?php

class Siswa_model
{
  private $sw = [
    [
      "nama" => "Sufyan Fauzan",
      "rombel" => "PPLG X-2",
      "rayon" => "Cicurug 1"
    ],
    [
      "nama" => "Angger",
      "rombel" => "PPLG X-2",
      "rayon" => "Cicurug 5",
    ],
  ];

  public function getAllSiswa()
  {
    return $this->sw;
  }
}
