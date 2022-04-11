<?php
include 'application/debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);

class Controller {
    public $load;
    public $model;

    function __construct($pageURI = null) {
        $this->load = new Load();
        $this->model = new Model();
        $this->$pageURI();
    }

    function home() {
        $data = $this->model->model3D_info();
        $this->load->view('viewIndex', $data);
    }

    function apiCreateTable() {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData() {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    function apiGetData() {
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }

    function apiGetJson() {
        $this->load->view('viewJson');
    }

    function apiLoadImage() {
        $data = $this->model->dbGetBrand();
        $this->load->view('viewDrinks', $data);
    }
}
?>
