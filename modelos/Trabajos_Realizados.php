<?php
class Trabajos_Realizados extends Conectar
{
    public function get_Trabajos_Realizados()
    {
        $trabajos = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM Trabajos_Realizados WHERE est=1";
        $sql = $trabajos->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function get_Trabajos_RealizadosXid($id)
    {
        $Trabajos = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM Trabajos_Realizados WHERE id=1";
        $sql = $Trabajos->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_Trabajos_Realizados($id)
    {
        $Trabajos = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE Trabajos_Realizados SET est = 0  WHERE id=?";
        $sql = $Trabajos->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_Trabajos_Realizados($fecha, $descripcion, $titulo)
    {
        $Trabajos = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO Trabajos_Realizados (fecha,descripcion,titulo) VALUES(NULL,?,?,?,1)";
        $sql = $Trabajos->prepare($sql);
        $sql->bindValue(1, $fecha);
        $sql->bindValue(1, $titulo);
        $sql->bindValue(1, $descripcion);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }



    public function update_Trabajos_Realizados($id, $fecha, $descripcion, $titulo)
    {
        $Trabajos = parent::Conexion();
        parent::set_names();
        $sql = "UDATE Trabajos_Realizados
                    SET
                        fecha = ?,
                        descripcion = ?,
                        titulo = ?,

                    WHERE
                        id = ?";
        $sql = $Trabajos->prepare($sql);
        $sql->bindValue(1, $fecha);
        $sql->bindValue(2, $descripcion);
        $sql->bindValue(2, $titulo);
        $sql->bindValue(3, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}
