<?php
class UpdateprofileController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

        $this->view('ClientLayout', [
            'pages' => 'UpdateprofilePage'
        ]);
    }
}