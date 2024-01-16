<?php
class UserMNMController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('AdminMasterLayout', [
            'pages' => 'UserMNMPage'
        ]);
    }
}