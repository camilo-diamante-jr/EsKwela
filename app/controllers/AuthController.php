<?php


class AuthController extends Controller
{

    private $authModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);

        $this->authModel = $this->loadModel("AuthModel");
    }

    public function viewLogin()
    {
        $this->renderView("/auth/login");
    }
    public function loginAuthentication() {}
}
