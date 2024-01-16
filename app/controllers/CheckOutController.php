<?php
class CheckOutController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('ClientMasterLayout', [
            'pages' => 'CheckOutPage'
        ]);
    }
}