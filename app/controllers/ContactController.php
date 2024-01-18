<?php
class ContactController extends Controller
{
    private $ContactModel;


        public function __construct()
    {
        $this->ContactModel = $this->model('ContactModel');
    }


    public function index()
    {
        $this->ContactModel->Contact();
        $this->view('ClientMasterLayout', [
            'pages' => 'ContactClientPage'
        ]);
    }
}