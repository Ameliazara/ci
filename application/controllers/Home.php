<?php
class Home extends CI_Controller {
    public function rumah()   
{
    echo 'Belajar WEB FRAMEWORK';
}
public function mahasiswa()
{
    return $this->view('v_mahasiswa');
}

}
