<?php

class AuthController extends Controller
{
    private $loginModel;

    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->loginModel = $this->loadModel("LoginModel");
    }

    public function viewLogin()
    {
        $this->renderView("/auth/login");
    }
    public function loginAuthentication()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));

            $result = $this->loginModel->login($email, $password);

            if (isset($result['success']) && $result['success']) {
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['user_type'] = $result['user_type'];

                echo json_encode(['success' => true, 'user_type' => $result['user_type']]);
                exit;
            } else {

                echo json_encode($result);
                exit;
            }
        } else {
            require '../app/views/authentications/login.php';
        }
    }
}
