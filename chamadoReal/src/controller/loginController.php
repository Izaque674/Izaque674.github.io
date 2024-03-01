<?php
    require_once "C:/xampp/htdocs/chamadoReal/src/models/User.php";

    class LoginController{
        private $user;
        public function __construct(){
            $this->user = [
                new User(1,'adm@teste.com.br', '1234', 1),
                new User(2,'user@test', '1234', 1),
                new User(3,'jose@teste.com.br', '1234',2),
              ];

    }
    public function auntenticar($email, $password){
        foreach ($this->user as $user){     
            if ($user->email === $email && $user->verificarSenha($password) == $password){

                $_SESSION ['auntenticar'] = 'SIM';
                $_SESSION['id'] = $user -> id;
                $_SESSION['profile_id'] = $user -> profile_id;
                header('Location: ../chamadoReal/view/home.php');
                exit;
            }
        }    
        $_SESSION ['auntenticar'] = 'NAO';
        header ('location: index.php?login =erro');
        exit;   
    }

}
?>
