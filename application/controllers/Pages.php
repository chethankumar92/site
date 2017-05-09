<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

    public function index() {
        redirect("page/about_us");
    }

    public function about_us() {
        $this->load->setTitle("Mountain Trekkers | About Us");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "About Us"
        ));

        $this->load->model('Page', 'page', TRUE);
        $this->page->setId(2);
        if (!$this->page->getPsid()) {
            redirect(self::class);
        }

        $this->load->template('page/page', array(
            "page" => $this->page
        ));
    }

    public function terms_and_conditions() {
        $this->load->setTitle("Mountain Trekkers | Terms And Conditions");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Terms And Conditions"
        ));

        $this->load->model('Page', 'page', TRUE);
        $this->page->setId(1);
        if (!$this->page->getPsid()) {
            redirect(self::class);
        }

        $this->load->template('page/page', array(
            "page" => $this->page
        ));
    }

}
