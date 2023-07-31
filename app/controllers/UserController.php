<?php
class UserController {
    public function index(){
        //Lấy dữ liệu từ Model

        //Đổ ra View
        echo "index function of UserController";
    }

    public function home(){
        echo "home function of UserController";
    }

    public function add(){
        echo "add function of UserController";
    }
    // Here we'll have an instance of the User model
//    private $model;
//
//    // We'll inject the model instance through the constructor
//    public function __construct($model) {
//        $this->model = $model;
//    }

//    // Register a new user
//    public function register() {
//        // Here we'll get the user input, validate it, and pass it to the model
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            // Sanitize input data and assign it to model
//            $this->model->first_name = htmlspecialchars(strip_tags($_POST['first_name']));
//            $this->model->last_name = htmlspecialchars(strip_tags($_POST['last_name']));
//            $this->model->email = htmlspecialchars(strip_tags($_POST['email']));
//            $this->model->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
//
//            // Call the model's register method
//            if ($this->model->register()) {
//                // Redirect to the login page, or wherever you want
//                header('Location: /login');
//            } else {
//                // Handle the error
//                echo "Something went wrong.";
//            }
//        }
//    }

    // Other controller methods like login, logout, profile go here...
}
