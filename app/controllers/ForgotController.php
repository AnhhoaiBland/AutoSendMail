<?php
class ForgotController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('LoginMasterLayout', [
            'pages' => 'ForgotPage'
        ]);
    }
}