<?php
    include "../includes/cargar_clases.php";

    $crudproducto = new CRUDProducto();

    if (isset($_POST["valor"])) {
        $valor = $_POST["valor"];

       echo $crudproducto->FiltrarProducto($valor);
    }