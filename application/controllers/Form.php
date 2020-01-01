<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper(['form','url']);
    }
    public function index() 
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('post','Message','required');

        if($this->form_validation->run() == false) {
            $this->load->view('header');
            $this->load->view('form_add');
            $this->load->view('footer');
        } else {
                         // Load post_model.php
            $this->load->model('post_model');

            // Check sticky option
            $submit_data['sticky'] = $this->input->post('sticky', TRUE) ? 1 : 0;

            // Get the other data
            $submit_data['status'] = $this->input->post('status', TRUE);
            $submit_data['post'] = $this->input->post('post', TRUE);

            // Set user_id to 1 (for temporary)
            $submit_data['user_id'] = 1;

            if ($this->post_model->insert_data($submit_data)) {
                $this->session->set_flashdata('notify_message', 'Add new post successfully.');
            } else {
                $this->session->set_flashdata('notify_message', 'Oh! There is a problem.');
            }
            // Load view
            $this->load->view('header');
            $this->load->view('notify');
            $this->load->view('footer');
        }

        public function update($post_id)
        {
            // Load post_model.php
            $this->load->model('post_model');
      
            // Load form validation library and set rules
            $this->load->library('form_validation');
            $this->form_validation->set_rules('post', 'Message', 'required');
      
            if ($this->form_validation->run() == FALSE) {
      
                $data = $this->post_model->get_post($post_id);
      
                $this->load->view('header');
                $this->load->view('form_update_view', $data);
                $this->load->view('footer');
            }
            else
            {
                // Check sticky option
                $submit_data['sticky'] = $this->input->post('sticky', TRUE) ? 1 : 0 ;
      
                // Get other data from form
                $submit_data['status'] = $this->input->post('status', TRUE);
                $submit_data['post'] = $this->input->post('post', TRUE);
      
                // Set user_id to 1 (for temporary)
                $submit_data['user_id'] = 1;
      
                if ($this->post_model->update_post($post_id,$submit_data))
                {
                    $_SESSION['notify_message'] = 'Update post successfully.';
                    $this->session->mark_as_flash('notify_message');
                }
                else
                {
                    $_SESSION['notify_message'] = 'oh! There is a problem.';
                    $this->session->mark_as_flash('notify_message');
                }
      
                // Load view
                $this->load->view('header');
                $this->load->view('notify');
                $this->load->view('footer');
            }
        }

    }

}