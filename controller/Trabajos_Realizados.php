<?php
require_once("../config/config.php");
require_once("../modelos/Trabajos_Realizados.php");
$Trabajos_Realizados = new Trabajos_Realizados();

switch ($_GET["op"]) {
    case "mostrar":
        $datos = $Trabajos_Realizados->get_Trabajos_RealizadosXid($_POST["id"]);
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
        $Trabajos_Realizados->update_Trabajos_Realizados(
            $_POST["id"],
            $_POST["titulo"],
            $_POST["descripcion"],
            $_POST["fecha"]

        );
        break;


    case "guardaryeditar":
        if (empty($_POST["id"])) {
            $Trabajos_Realizados->insert_Trabajos_Realizados($_POST["titulo"], $_POST["descripcion"], $_POST["fecha"]);
        } else {
            $Trabajos_Realizados->update_Trabajos_Realizados($_POST["id"], $_POST["titulo"], $_POST["descripcion"], $_POST["fecha"]);
        }
        break;
    case "eliminar":
        $Trabajos_Realizados->delete_Trabajos_Realizados($_POST["id"]);
        break;
    case "listar":
        $datos = $Trabajos_Realizados->get_Trabajos_Realizados();
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
