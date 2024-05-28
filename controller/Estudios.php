<?php
require_once("../config/config.php");
require_once("../modelos/Estudios.php");
$Estudios = new Estudios();

switch ($_GET["op"]) {
    case "mostrar":
        $datos = $Estudios->get_EstudiosXid($_POST["id"]);
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["titulo"] = $row["titulo"];
                $output["descripcion"] = $row["descripcion"];
                $output["fecha"] = $row["fecha"];
            }
            echo json_encode($output);
        }

        break;


    case "modificar":
        $Estudios->update_Estudios(
            $_POST["id"],
            $_POST["titulo"],
            $_POST["descripcion"],
            $_POST["fecha"]

        );
        break;


    case "guardaryeditar":
        if (empty($_POST["id"])) {
            $Estudios->insert_Estudios($_POST["titulo"], $_POST["descripcion"], $_POST["fecha"]);
        } else {
            $Estudios->update_Estudios($_POST["id"], $_POST["titulo"], $_POST["descripcion"], $_POST["fecha"]);
        }
        break;
    case "eliminar":
        $Estudios->delete_Estudios($_POST["id"]);
        break;
    case "listar":
        $datos = $Estudios->get_Estudios();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["titulo"];
            $sub_array[] = $row["descripcion"];
            $sub_array[] = $row["fecha"];

            $sub_array[] = '<button type="button" onClick="editar(' . $row["id"] . ');" id="' . $row["id"] . '"
                class="btn btn-outline-warning btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar(' . $row["id"] . ');" id="' . $row["id"] . '"
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
