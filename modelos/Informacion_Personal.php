<?php
    class Informacion_Personal extends Conectar{
        public function get_Informacion_Personal(){
            $Informacion =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Informacion_Personal WHERE est=1";
            $sql=$Informacion->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_Informacion_Personal_con_parametro($id){
            $Informacion =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Informacion_Personal WHERE id=?";
            $sql=$Informacion->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_Informacion_Personal($id){
            $Informacion =parent::Conexion();
            parent::set_names();
            $sql="UPDATE Informacion_Personal SET est = 0  WHERE id=?";
            $sql=$Informacion->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            
        }

        public function insert_Informacion_Personal($nombre,$apellido,$direccion,$telefono,$email){
            $Informacion =parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO Informacion_Personal (id,nombre,apellido,direccion,telefono,email) VALUES(NULL,?,?,?,?,?,1)";
            $sql=$Informacion->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(1,$apellido);
            $sql->bindValue(1,$direccion);
            $sql->bindValue(1,$telefono);
            $sql->bindValue(1,$email);
            $sql->execute();
            return $resultado=$sql->fetchAll();

        }

        

        public function update_Informacion_Personal($id,$nombre,$apellido,$direccion,$telefono,$email){
            $Informacion =parent::Conexion();
            parent::set_names();
            $sql="UDATE Informacion_Personal
                    SET
                        nombre = ?,
                        apellido = ?,
                        direccion = ?,
                        telefono = ?,
                        email = ?
                    WHERE
                        id = ?" ;
            $sql=$Informacion->prepare($sql);
            $sql->bindValue(1,$nombre);
            $sql->bindValue(2,$apellido);
            $sql->bindValue(3,$direccion);
            $sql->bindValue(4,$telefono);
            $sql->bindValue(5,$email);
            $sql->bindValue(6,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }

