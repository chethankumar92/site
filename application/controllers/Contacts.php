<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MY_Controller {

    public function index() {
        $this->load->setTitle("Mountain Trekkers | Contact Us");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Contact Us"
        ));
        $this->load->template('contact/form', array(
            "action" => site_url(self::class . "/submit"),
            "method" => "post"
        ));
    }

    public function submit() {
        if (!$this->input->is_ajax_request()) {
            redirect('404');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", 'Name', 'required|min_length[3]|max_length[31]');
        $this->form_validation->set_rules("email", 'Email', 'valid_email');
        $this->form_validation->set_rules("mobile", 'Mobile', 'integer');
        $this->form_validation->set_rules('subject', 'Subject', 'required|min_length[4]|max_length[63]');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]|max_length[255]');
        if (!$this->form_validation->run()) {
            $this->output->set_output(json_encode(array(
                "success" => FALSE,
                "errors" => $this->form_validation->error_array(),
                "message" => "Invalid contact details!"
            )))->_display();
            exit;
        }

        if (!trim($this->input->post("email")) && !trim($this->input->post("mobile"))) {
            $this->output->set_output(json_encode(array(
                "success" => FALSE,
                "message" => "Your email or mobile number is needed to contact!"
            )))->_display();
            exit;
        }

        $this->load->model('Contacts', 'contact', TRUE);
        $this->contact->setName($this->input->post("name"));
        $this->contact->setEmail($this->input->post("email"));
        $this->contact->setMobile($this->input->post("mobile"));
        $this->contact->setSubject($this->input->post("subject"));
        $this->contact->setMessage($this->input->post("message"));
        if (!$this->contact->insert()) {
            $this->output->set_output(json_encode(array(
                "success" => FALSE,
                "message" => "Failed to save the contact details!"
            )))->_display();
            exit;
        }

        if (trim($this->input->post("email"))) {
            $this->load->library('email');
            $this->email->set_newline("\r\n");
            $this->email->from('mountaintrekkersblr@gmail.com', 'Mountain Trekkers');
            $this->email->to($this->input->post("email"));
            $this->email->subject("Acknowledgement: " . $this->input->post("subject"));
            $this->email->message($this->input->post("message"));
            $this->email->send();
        }

        $this->output->set_output(json_encode(array(
            "success" => TRUE,
            "url" => site_url("home"),
            "message" => "Contact details saved successfully!"
        )))->_display();
        exit;
    }

}
