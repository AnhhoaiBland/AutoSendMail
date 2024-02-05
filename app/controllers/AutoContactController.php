<?php

class AutoContactController extends Controller
{

    private $AutoSendModel;

    public function __construct()
    {
        $this->AutoSendModel = $this->model('AutoSendModel');
    }

    public function index()
    {
        $this->AutoSendModel->SelectAllEmail();
    }
}
