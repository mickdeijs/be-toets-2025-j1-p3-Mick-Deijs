<?php
 
class Ufc extends BaseController
{
    private $UfcModel;
 
    public function __construct()
    {
        $this->UfcModel = $this->model('UfcModel');
    }
 
 
    public function index()
    {
        $result = $this->UfcModel->getAllUfc();
       
        $data = [
            'title' => 'Overzicht UFC Mens-Pound-For-Pound Rankings',
            'Ufc' => $result
        ];
 
        $this->view('ufc/index', $data);
    }
}