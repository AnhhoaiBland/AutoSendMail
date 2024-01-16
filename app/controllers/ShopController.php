<?php
class ShopController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('ClientMasterLayout', [
            'pages' => 'ShopClientPage'
        ]);
    }
}