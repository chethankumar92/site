<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $this->load->setTitle("Mountain Trekkers | Home");
        $this->load->addMeta(array(
            "name" => "description",
            "content" => "Home page"
        ));

        $this->load->addPlugins("font-awesome-animation/font-awesome-animation", "css", 10);

        $this->load->model("Event", "event", TRUE);
        $this->load->model("Testimonial", "testimonial", TRUE);
        $upcoming_events = $this->load->view('event/upcoming', array(
            "events" => Event::getEvents(1, date("Y-m-d"))
                ), TRUE);
        

        $this->load->model("EventImage", "event_image", TRUE);
        $this->load->template('home/home', array(
            "event_images" => $this->event_image->getLatest(),
            "upcoming_events" => $upcoming_events,
            "testimonials" => Testimonial::getTestimonials()
        ));
    }

}
