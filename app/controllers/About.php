<?php

class About {
    public function index($nama = 'Samuel Arta Manik', $pekerjaan = 'Mahasiswa', $umur = 32)
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}