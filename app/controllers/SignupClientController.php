<?php
class SignupClientController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('LoginMasterLayout', [
            'pages' => 'SignupClientPage'
        ]);
    }
}