<?php
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");
    $producto= new Producto();

    switch ($_GET ["op"]){
        case "listar":
            $datos=$producto->get_producto();
            $data=Array();
        foreach($datos as $row){
            $sub_array=array();
            $sub_array[]=$row["nom_prod"];
            $sub_array[] = '<button type="button" onClick="editar('.$row["id_prod"].');"  id="'.$row["id_prod"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar('.$row["id_prod"].');"  id="'.$row["id_prod"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';

            }
            $results=array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
                echo json_encode($results);

        break;
    }
?>