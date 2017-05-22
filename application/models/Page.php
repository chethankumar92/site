<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Model {

    private $pid;
    private $title;
    private $content;
    private $psid;
    private $created_auid;
    private $updated_auid;
    private $created_time;
    private $updated_time;

    /**
     * Constants
     */
    const TABLE = "page";

    /**
     * Class constructor
     *
     * @return	void
     */
    public function __construct($id = NULL) {
        parent::__construct();
        $this->load->database();
        if ($id) {
            $this->pid = $id;
            $this->loadById();
        }
    }

    function getId() {
        return $this->pid;
    }

    function getPid() {
        return $this->pid;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getPsid() {
        return $this->psid;
    }

    function getCreated_auid() {
        return $this->created_auid;
    }

    function getUpdated_auid() {
        return $this->updated_auid;
    }

    function getCreated_time() {
        return $this->created_time;
    }

    function getUpdated_time() {
        return $this->updated_time;
    }

    function setId($pid, $load = TRUE) {
        $this->pid = $pid;
        if ($load) {
            $this->loadById();
        }
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setPsid($psid) {
        $this->psid = $psid;
    }

    function setCreated_auid($created_auid) {
        $this->created_auid = $created_auid;
    }

    function setUpdated_auid($updated_auid) {
        $this->updated_auid = $updated_auid;
    }

    function setCreated_time($created_time) {
        $this->created_time = $created_time;
    }

    function setUpdated_time($updated_time) {
        $this->updated_time = $updated_time;
    }

    public function loadById() {
        $result = $this->db->query("SELECT * FROM " . self::TABLE . " WHERE pid = ?", array(
            $this->pid
        ));

        if (!$result || $result->num_rows() < 1) {
            return FALSE;
        }

        $row = $result->result()[0];
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
        return TRUE;
    }

    public function populate($row) {
        if (is_array($row) || is_object($row)) {
            foreach ($row as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function insert() {
        $result = $this->db->query("INSERT INTO " . self::TABLE . " (title, content, "
                . "psid, created_auid) VALUES(?, ?, ?, ?)", array(
            $this->title,
            $this->content,
            $this->psid,
            $this->created_auid
        ));

        if (!$result) {
            return FALSE;
        }
        $this->pid = $this->db->insert_id();
        return TRUE;
    }

    public function update() {
        $result = $this->db->query("UPDATE " . self::TABLE . " SET title = ?, "
                . "content = ?, psid = ?, updated_auid = ? WHERE pid = ?", array(
            $this->title,
            $this->content,
            $this->psid,
            $this->updated_auid,
            $this->pid
        ));

        if (!$result) {
            return FALSE;
        }
        return TRUE;
    }

    public static function getPages($psid = array(1, 2)) {
        $db = &get_instance()->db;

        $query = "SELECT * FROM " . self::TABLE . " WHERE FIND_IN_SET(psid, ?) > 0";
        $params = array(
            is_array($psid) ? implode(",", $psid) : $psid
        );

        $result = $db->query($query, $params);
        if (!$result || $result->num_rows() < 1) {
            return FALSE;
        }

        $array = array();
        $pages = $result->result();
        foreach ($pages as $page) {
            $_page = new self;
            $_page->populate($page);
            $array[] = $_page;
        }
        return $array;
    }

}
