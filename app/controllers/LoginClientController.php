<?php
class LoginClientController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('LoginMasterLayout', [
            'pages' => 'LoginClientPage'
        ]);
    }
}