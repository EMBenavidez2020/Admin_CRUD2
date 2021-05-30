<?php
    class Producto extends Conectar{
            public function get_producto(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
            public function get_producto_x_id($id_prod){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE id_prod=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_prod);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
            public function delete_producto($id_prod){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_producto
            SET
                estado=0,
                fec_eli=now()
                WHERE 
                id_prod=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_prod);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
            public function insert_producto($nom_prod){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_producto (id_Prod, Nom_Prod, fec_crea, fec_mod, fec_eli, estado) VALUES (NULL, ?, now(), NULL, NULL, 1);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$nom_prod);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
            public function update_producto($id_prod,$nom_prod){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="UPDATE tm_producto
                SET
                nom_prod=?,
                fec_mod=now()
                WHERE 
                id_prod=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_prod);
            $sql->bindValue(2,$nom_prod);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>