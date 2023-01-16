<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {

        $this->load->model('products_model', 'modelProducts');

        $dados['products'] = $this->modelProducts->products(0, 8);


        $this->load->view('templates/htmlHeader.php', $dados);
        $this->load->view('templates/topBar.php');
        $this->load->view('templates/navBar.php');
        $this->load->view('home.php');
        $this->load->view('templates/products.php');
        $this->load->view('templates/subscribe.php');
        $this->load->view('templates/products.php');
        $this->load->view('templates/vendor.php');
        $this->load->view('templates/footer.php');
        $this->load->view('templates/htmlFooter.php');
    }
}
