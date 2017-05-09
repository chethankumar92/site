<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->load->setTitle("Mountain Trekkers | Home");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Home page"
        ));

        $this->load->model("EventImage", "event_image", TRUE);
        $this->load->template('home/home', array(
            "event_images" => $this->event_image->getLatest()
        ));
    }

}
