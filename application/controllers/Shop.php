<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model', 'modelCategories');
        $this->categories = $this->modelCategories->listCategories();
    }
    public function index()
    {

        $this->load->model('products_model', 'modelProducts');

        $dados['products'] = $this->modelProducts->listProducts(0, 9);
        $dados['categories'] = $this->categories;
        $dados['page'] = 'shop';


        $this->load->view('templates/htmlHeader.php', $dados);
        $this->load->view('templates/topBar.php');
        $this->load->view('templates/navBar.php');
        $this->load->view('templates/header.php');
        $this->load->view('shop.php');
        $this->load->view('templates/footer.php');
        $this->load->view('templates/htmlFooter.php');
    }
    public function detail()
    {
        $this->load->model('products_model', 'modelProducts');

        $id = 1;
        $dados['product'] = $this->modelProducts->product($id);
        $dados['categories'] = $this->categories;
        $dados['page'] = 'shop detail';


        $this->load->view('templates/htmlHeader.php', $dados);
        $this->load->view('templates/topBar.php');
        $this->load->view('templates/navBar.php');
        $this->load->view('templates/header.php');
        $this->load->view('detail.php');
        $this->load->view('templates/footer.php');
        $this->load->view('templates/htmlFooter.php');

    }
}
