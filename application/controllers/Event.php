<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

    public function index() {
        $this->load->setTitle("Mountain Trekkers | Upcoming Events");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Upcoming Events"
        ));
        $this->load->template('event/upcoming');
    }

    public function details() {
        $this->load->setTitle("Mountain Trekkers | Event Details");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Event Details"
        ));
        $this->load->template('event/details');
    }

}
