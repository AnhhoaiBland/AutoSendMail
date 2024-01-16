<?php
class ProfileAdminController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('ClientLayout', [
            'pages' => 'ProfileAdminPage'
        ]);
    }
}