<?php
include_once '../../php/ClassEmpresa.php';
session_start();

    $id_company = $_GET['id_company'];

    $unhabiliteEmp = new Empresa();
    $unhabiliteEmp->unhabiliteEmp($id_company);
