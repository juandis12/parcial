<?php
class Menu extends Conectar
{
    public function get_Menu()
    {
        $Menu = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM Menu WHERE est=1";
        $sql = $Menu->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function get_MenuXid($id)
    {
        $Menu = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM Menu WHERE id=1";
        $sql = $Menu->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_Menu($id)
    {
        $Menu = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE Menu SET est = 0  WHERE id=?";
        $sql = $Menu->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_Menu($opcion, $link)
    {
        $Menu = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO Estudios (socmed_url,socmed_icon,est) VALUES(NULL,?,?,1)";
        $sql = $Menu->prepare($sql);
        $sql->bindValue(1, $opcion);
        $sql->bindValue(1, $link);
        $sql->execute();
        return $Menu = $sql->fetchAll();
    }



    public function update_Menu($id, $opcion, $link)
    {
        $Menu = parent::Conexion();
        parent::set_names();
        $sql = "UDATE Estudios
                    SET
                        opcion = ?,
                        link = ?,

                    WHERE
                        id = ?";
        $sql = $Menu->prepare($sql);
        $sql->bindValue(1, $opcion);
        $sql->bindValue(2, $link);
        $sql->bindValue(3, $id);
        $sql->execute();
        return $Menu = $sql->fetchAll();
    }
}
