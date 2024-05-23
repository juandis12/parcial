<?php
    class Usuario extends Conectar{
        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                var_dump($_POST["enviar"]);
                $correo = $_POST["email"];
                $password = $_POST["contrasena"];
                if(empty($correo) and empty($password)){
                    header("location:".Conectar::ruta()."login.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE email =? and contrasena =? and estado=1";
                    $stmt = $conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2,$password);
                    $stmt->execute();
                    $resultado = $stmt->fetch();

                    if(is_array($resultado) and count($resultado)>0){
                        $_SESSION["id"]=$resultado["id"];
                        $_SESSION["nombre"]=$resultado["nombre"];
                        $_SESSION["email"]=$resultado["email"];
                        header("Location:".Conectar::ruta()."view/inicio.php");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."login.php?m=1");
                        exit(); 
                    }
                }
            }
        }
    }