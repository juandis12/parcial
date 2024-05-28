<?php
require_once("../config/config.php");
require_once("../modelos/informacion_Personal.php");
$informacion_Personal = new informacion_Personal();

switch ($_GET["op"]) {
    case "mostrar":
        $datos = $informacion_Personal->get_informacion_PersonalXid($_POST["id"]);
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["nombre"] = $row["nombre"];
                $output["apellido"] = $row["apellido"];
                $output["direccion"] = $row["direccion"];
                $output["telefono"] = $row["telefono"];
                $output["email"] = $row["email"];
            }
            echo json_encode($output);
        }

        break;


    case "modificar":
        $informacion_Personal->update_informacion_Personal(
            $_POST["id"],
            $_POST["nombre"],
            $_POST["apellido"],
            $_POST["direccion"],
            $_POST["telefono"],
            $_POST["email"],


        );
        break;


    case "guardaryeditar":
        if (empty($_POST["id"])) {
            $informacion_Personal->insert_informacion_Personal($_POST["nombre"], $_POST["apellido"], $_POST["direccion"], $_POST["telefono"], $_POST["email"]);
        } else {
            $informacion_Personal->update_informacion_Personal($_POST["id"], $_POST["nombre"], $_POST["apellido"], $_POST["direccion"], $_POST["telefono"], $_POST["email"]);
        }
        break;
    case "eliminar":
        $informacion_Personal->delete_informacion_Personal($_POST["id"]);
        break;
    case "listar":
        $datos = $informacion_Personal->get_informacion_Personal();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["apellido"];
            $sub_array[] = $row["direccion"];
            $sub_array[] = $row["telefono"];
            $sub_array[] = $row["email"];

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
