<?php   
    for($i=0;$i<sizeof($soc);$i++):
?>

<?php
class social_media extends Conectar
{
    public function get_social_media()
    {
        $social = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM social_media WHERE est=1";
        $sql = $social->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
    public function get_social_mediaXid($socmed_id)
    {
        $social = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM social_media WHERE socmed_id=1";
        $sql = $social->prepare($sql);
        $sql->bindValue(1, $socmed_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_social_media($socmed_id)
    {
        $social = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE social_media SET est = 0  WHERE socmde_id=?";
        $sql = $social->prepare($sql);
        $sql->bindValue(1, $socmed_id);
        $sql->execute();
        return $social = $sql->fetchAll();
    }

    public function insert_social_media($socmed_icon, $socmed_url)
    {
        $social = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO social_media (socmed_id,socmed_url,socmed_icon,est) VALUES(NULL,?,?,1)";
        $sql = $social->prepare($sql);
        $sql->bindValue(1, $socmed_icon);
        $sql->bindValue(1, $socmed_url);
        $sql->execute();
        return $social = $sql->fetchAll();
    }



    public function update_social_media($socmed_id, $socmed_icono, $socmed_url)
    {
        $social = parent::Conexion();
        parent::set_names();
        $sql = "UDATE social_media
                    SET
                        socmed_icono = ?,
                        socmed_url = ?,
                    WHERE
                        socemed_id = ?";
        $sql = $social->prepare($sql);
        $sql->bindValue(1, $socmed_icono);
        $sql->bindValue(2, $socmed_url);
        $sql->bindValue(3, $socmed_id);
        $sql->execute();
        return $social = $sql->fetchAll();
    }
}

    endfor;
?>