<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    }
    public function products($pular = null, $total = null)
    {
        $this->db->from('products');
        // $this->db->order_by('postagens.data', 'DESC');
        if ($pular > -1 && $total) {
            $this->db->limit($total, $pular);
        }
        return $this->db->get()->result();
    }
}
