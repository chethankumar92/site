<?php

/**
 * Loader to includes defaults
 * 
 * /application/core/Loader.php
 * 
 */
class MY_Loader extends CI_Loader {

    private $styles = array(
        "isotope",
        "bootstrap",
        "bootstrap-theme",
        "responsive-slider",
        "animate",
        "style",
        "font-awesome.min",
        "default"
    );
    private $scripts = array(
        "modernizr-2.6.2-respond-1.1.0.min",
        "bootstrap.min",
        "skrollr.min",
        "stellar",
        "responsive-slider",
        "grid",
        "main",
        "modules/main",
        "wow.min"
    );
    private $title = "Mountain Trekkers";
    private $description = "";
    private $meta = array(
        array(
            "charset" => "UTF-8"
        ),
        array(
            "name" => "viewport",
            "content" => "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        )
    );
    private $plugins = array(
        "js" => array(
            "jquery/jquery",
            "jquery/jquery.easing.1.3",
            "jquery/jquery.isotope.min",
            "jquery/jquery.nicescroll.min",
            "jquery/jquery.scrollTo-1.4.3.1-min",
            "jquery/jquery.localscroll-1.2.7-min",
            "jquery/jquery.appear",
            "fancybox/jquery.fancybox.pack",
            'parsley/parsley',
            'bootstrap-notify/bootstrap-notify.min'
        ),
        "css" => array(
            "fancybox/jquery.fancybox",
            'parsley/parsley'
        ),
        "scss" => array()
    );

    public function template($template, $vars = array(), $return = FALSE, $is_login = FALSE, $extra = array()) {
        $header = $this->view('header', array(
            "logout_action" => site_url("logout/log_out")
                ), TRUE);

        $body = $this->view($template, $vars, TRUE);

        $settings = $this->view('settings', array(), TRUE);
        $footer = $this->view('footer', array(), TRUE);

        return $this->view("main", array(
                    "styles" => $this->styles,
                    "scripts" => $this->scripts,
                    "plugins" => $this->plugins,
                    "title" => $this->title,
                    "meta" => $this->meta,
                    "is_login" => $is_login,
                    "header" => $header,
                    "body" => $body,
                    "settings" => $settings,
                    "footer" => $footer,
                    "extra" => $extra
                        ), $return);
    }

    function getStyles() {
        return $this->styles;
    }

    function getScripts() {
        return $this->scripts;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    /**
     * 
     * @return array
     */
    function getMeta() {
        return $this->meta;
    }

    function getPlugins() {
        return $this->plugins;
    }

    function addStyles($styles, $key = 0) {
        array_splice($this->styles, $key, 0, $styles);
    }

    function addScripts($scripts, $key = 0) {
        array_splice($this->scripts, $key, 0, $scripts);
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    /**
     * 
     * @param array $meta
     */
    function setMeta(array $meta) {
        $this->meta = $meta;
    }

    function addMeta(array $meta) {
        $this->meta[] = $meta;
    }

    function addPlugins($plugins, $type, $key = 0) {
        if (!isset($this->plugins[$type])) {
            $this->plugins[$type] = array();
        }
        array_splice($this->plugins[$type], $key, 0, $plugins);
    }

}
