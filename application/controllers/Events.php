<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

    public function index() {
        $this->load->setTitle("Mountain Trekkers | Upcoming Events");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Upcoming Events"
        ));

        $this->load->addPlugins("font-awesome-animation/font-awesome-animation", "css", 10);

        $this->load->model("Event", "event", TRUE);
        $this->load->template('event/upcoming', array(
            "events" => Event::getEvents(1, date("Y-m-d")),
            "section" => TRUE
        ));
    }

    public function details($id) {
        if (!is_numeric($id)) {
            redirect(self::class);
        }

        $this->load->model('Event', 'event', TRUE);
        $this->event->setId($id);
        if (!$this->event->getEsid()) {
            redirect(self::class);
        }

        $this->load->setTitle("Mountain Trekkers | Event Details");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Event Details"
        ));

        $this->load->template('event/details', array(
            "event" => $this->event
        ));
    }

}
