<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_controller {

    public function index() {

        $this->load->model('post_model');

        $data['posts'] = $this->post_model->get_all_posts();

        $this->load->view('header');
        $this->load->view('content',$data);
        $this->load->view('footer');

    }
    public function __construct() {

        parent::__construct();
        $this->load->helper('url');

    }

}