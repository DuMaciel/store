<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model', 'modelCategories');
        $this->categories = $this->modelCategories->listCategories();
    }
    public function index()
    {
        $dados['categories'] = $this->categories;
        $dados['page'] = 'contact';

        $this->load->view('templates/htmlHeader.php', $dados);
        $this->load->view('templates/topBar.php');
        $this->load->view('templates/navBar.php');
        $this->load->view('templates/header.php');
        $this->load->view('contact.php');
        $this->load->view('templates/footer.php');
        $this->load->view('templates/htmlFooter.php');
    }
}
