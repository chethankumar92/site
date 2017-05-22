<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {

    public function index() {
        redirect(self::class . "/1/about_us");
    }

    public function lookup($id) {
        $this->load->model('Page', 'page', TRUE);
        $this->page->setId($id);
        if (!$this->page->getPsid()) {
            redirect(self::class);
        }

        $this->load->setTitle("Mountain Trekkers | " . $this->page->getTitle());
        $this->load->addMeta(array(
            "name" => "description",
            "content" => $this->page->getTitle()
        ));

        $this->load->template('page/page', array(
            "page" => $this->page
        ));
    }

}
