<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

       $data=array('title'=>'futbol','titulo1'=>'hola','titulo'=>'ESTA ES UNA PRUEBA');             

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/contenido', $data);
        $this->load->view('templates/sitios', $data);
        $this->load->view('templates/footer', $data);
}
}