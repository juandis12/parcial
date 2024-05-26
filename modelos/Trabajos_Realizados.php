<?php
    class Trabajo_Realizados extends Conectar{
        public function get_Trabajo_Realizados(){
            $trabajos =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Trabajo_Realizados WHERE est=1";
            $sql=$trabajos->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        public function get_Trabajo_Realizados_con_parametro($id){
            $Trabajos =parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM Trabajo_Realizados WHERE id=?";
            $sql=$Trabajos->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_Trabajo_Realizados($id){
            $Trabajos =parent::Conexion();
            parent::set_names();
            $sql="UPDATE Trabajo_Realizados SET est = 0  WHERE id=?";
            $sql=$Trabajos->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            
        }

        public function insert_Trabajo_Realizados($fecha,$descripcion,$titulo){
            $Trabajos =parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO Trabajo_Realizados (fecha,descripcion,titulo) VALUES(NULL,?,?,?,1)";
            $sql=$Trabajos->prepare($sql);
            $sql->bindValue(1,$fecha);
            $sql->bindValue(1,$titulo);
            $sql->bindValue(1,$descripcion);
            $sql->execute();
            return $resultado=$sql->fetchAll();

        }

        

        public function update_Trabajo_Realizados($id,$fecha,$descripcion,$titulo){
            $Trabajos =parent::Conexion();
            parent::set_names();
            $sql="UDATE Trabajo_Realizados
                    SET
                        fecha = ?,
                        descripcion = ?,
                        titulo = ?,

                    WHERE
                        id = ?" ;
            $sql=$Trabajos->prepare($sql);
            $sql->bindValue(1,$fecha);
            $sql->bindValue(2,$descripcion);
            $sql->bindValue(2,$titulo);
            $sql->bindValue(3,$id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
        
    }
