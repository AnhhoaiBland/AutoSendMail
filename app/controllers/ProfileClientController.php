<?php
class ProfileClientController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('ClientLayout', [
            'pages' => 'ProfileClientPage'
        ]);
    }
}