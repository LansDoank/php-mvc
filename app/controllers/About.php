<?php
class About extends Controller
{

    public function index($nama = "Maulana", $pekerjaan = "Programmer", $umur = 16)
    {
        // echo "about/index";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = "About";
        
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    public function page()
    {
        echo "about/index";
        $this->view('about/page');
    }
}