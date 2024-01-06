<?php
class DashboardController extends Controller
{

    public function __construct()
    {
      
    }

    public function index()
    {

        $this->view('ClientMasterLayout', [
            'pages' => 'HomeClientPage'
        ]);
    }
}
