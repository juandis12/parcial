<?php
require_once("../config/config.php");
require_once("../modelos/social_media.php");
$social_media = new social_media();

switch ($_GET["op"]) {
    case "mostrar":
        $datos = $social_media->get_social_mediaXid($_POST["socmed_id"]);
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["socmed_icono"] = $row["socmed_icono"];
                $output["socmed_url"] = $row["socmed_url"];
            }
            echo json_encode($output);
        }

        break;


    case "modificar":
        $social_media->update_social_media(
            $_POST["socmed_id"],
            $_POST["socmed_icono"],
            $_POST["socmed_url"]
        );
        break;


    case "guardaryeditar":
        if (empty($_POST["socmed_id"])) {
            $social_media->insert_social_media($_POST["socmed_icono"], $_POST["socmed_url"]);
        } else {
            $social_media->update_social_media($_POST["socmed_id"], $_POST["socmed_icono"], $_POST["socmed_url"]);
        }
        break;
    case "eliminar":
        $social_media->delete_social_media($_POST["socmed_id"]);
        break;
    case "listar":
        $datos = $social_media->get_social_media();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["socmed_icono"];
            $sub_array[] = $row["socmed_url"];

            $sub_array[] = '<button type="button" onClick="editar(' . $row["socmed_id"] . ');" id="' . $row["socmed_id"] . '"
                class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar(' . $row["socmed_id"] . ');" id="' . $row["socmed_id"] . '"
                class="btn btn-outline-danger btn-icon"><div><i class="fa fa-close"></i></div></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);

        break;
}
