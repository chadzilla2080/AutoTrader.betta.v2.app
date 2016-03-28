<?php

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('inc/header.inc.php');
        $this->load->view('home/home.view.php');
        $this->load->view('inc/footer.inc.php');
    }

    public function dealers()
    {
        $this->db->select('dealer_name, dealer_address, dealer_city, dealer_state, dealer_zip, dealer_phone, dealer_website');
        $this->db->order_by('dealer_name DESC');

        $query = $this->db->get('dealers');
        print_r($query->result());
    }
}