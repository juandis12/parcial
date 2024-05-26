<?php
    class Estudios extends Conectar{
        public function get_Estudios(){
            $Estudios =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Estudios WHERE est=1";
            $sql=$Estudios->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_Estudios_con_parametro($id){
            $Estudios =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Estudios WHERE id=?";
            $sql=$Estudios->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_Estudios($id){
            $Estudios =parent::Conexion();
            parent::set_names();
            $sql="UPDATE Estudios SET est = 0  WHERE id=?";
            $sql=$Estudios->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            
        }

        public function insert_social_media($titulo,$descripcion,$fecha){
            $Estudios =parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO Estudios (socmed_url,socmed_icon,est) VALUES(NULL,?,?,1)";
            $sql=$Estudios->prepare($sql);
            $sql->bindValue(1,$titulo);
            $sql->bindValue(1,$descripcion);
            $sql->bindValue(1,$fecha);
            $sql->execute();
            return $resultado=$sql->fetchAll();

        }

        

        public function update_social_media($id,$titulo,$descripcion,$fecha){
            $Estudios =parent::Conexion();
            parent::set_names();
            $sql="UDATE Estudios
                    SET
                        titulo = ?,
                        descripcion = ?,
                        fecha = ?,
                    WHERE
                        id = ?" ;
            $sql=$Estudios->prepare($sql);
            $sql->bindValue(1,$titulo);
            $sql->bindValue(2,$descripcion);
            $sql->bindValue(2,$fecha);
            $sql->bindValue(4,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }
