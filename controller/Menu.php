<?php
require_once("../config/config.php");
require_once("../modelos/Menu.php");
$Menu = new Menu();

switch ($_GET["op"]) {
    case "mostrar":
        $datos = $Menu->get_MenuXid($_POST["id"]);
        if (is_array($datos) == true and count($datos) <> 0) {
            foreach ($datos as $row) {
                $output["opcion"] = $row["opcion"];
                $output["link"] = $row["link"];
            }
            echo json_encode($output);
        }

        break;


    case "modificar":
        $Menu->update_Menu(
            $_POST["id"],
            $_POST["opcion"],
            $_POST["link"],


        );
        break;


    case "guardaryeditar":
        if (empty($_POST["id"])) {
            $Menu->insert_Menu($_POST["opcion"], $_POST["link"]);
        } else {
            $Menu->update_Menu($_POST["id"], $_POST["opcion"], $_POST["link"]);
        }
        break;
    case "eliminar":
        $Menu->delete_Menu($_POST["id"]);
        break;
    case "listar":
        $datos = $Menu->get_Menu();
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["opcion"];
            $sub_array[] = $row["link"];

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
