<?php
class Home extends CI_Controller {
    public function rumah()   
{
    echo 'Belajar WEB FRAMEWORK';
}
public function tampil()
{
    return $this->view('v_Tampil');
}
}
