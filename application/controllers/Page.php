<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Page extends MY_Controller
    {

        public function index()
        {
            redirect("page/about_us");
        }

        public function about_us()
        {
            $this->load->setTitle("Mountain Trekkers | About Us");
            $this->load->addMeta(array(
                "name" => "description",
                "content" => "About Us"
            ));
            $this->load->template('page/about_us');
        }
        
        public function terms_and_conditions(){
            $this->load->setTitle("Mountain Trekkers | Terms And Conditions");
            $this->load->addMeta(array(
                "name" => "description",
                "content" => "Terms And Conditions"
            ));
            $this->load->template('page/terms_and_conditions');
        }
    }
    