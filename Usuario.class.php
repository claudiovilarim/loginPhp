<?php

class Usuario {

    public function login($email, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM tb_usuarios WHERE email = :email AND senha = :senha";
        
        // echo "login efetuado! <hr>";
        // echo $sql;  
        // echo "pdo:" . $pdo;  

        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch(); // fetch cria um array que recebe todos os dados dessa tabela tb_usuarios
            echo $dados['id'];

            $_SESSION['id_usuario'] = $dados['id'];

            return true;
        }else{
            return false;
        }
        
    }

}

