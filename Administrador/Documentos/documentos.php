<?php
//print_r($_POST);


$txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtdocumentos=(isset($_FILES['txtdocumentos']["name"]))?$_FILES['txtdocumentos']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include("../Conexion/conexion.php");

switch($accion){
    case"btnAgregar":

        $sentencia=$pdo->prepare("INSERT INTO documentos(nombre,documentos)
        VALUES(:nombre,:documentos)");

        $sentencia->bindParam(':nombre',$txtnombre);


        $Fecha=new DateTime();
        $nombreArchivo=($txtdocumentos!="")?$Fecha->getTimestamp()."_".$_FILES["txtdocumentos"]["name"]:"documento.pdf";

        $tmpFoto=$_FILES["txtdocumentos"]["tmp_name"];
        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Documento/".$nombreArchivo);
        }

        $sentencia->bindParam(':archivo',$nombreArchivo);
        $sentencia->execute();

        header('Location:index.php');
    break;
    case"btnModificar":


        $sentencia=$pdo->prepare("UPDATE documentos SET 
        nombre=:nombre WHERE id=:id");

        $sentencia->bindParam(':nombre',$txtnombre);
       
       
        $sentencia->bindParam(':id',$txtid);
        $sentencia->execute();


        $Fecha=new DateTime();
        $nombreArchivo=($txtdocumentos!="")?$Fecha->getTimestamp()."_".$_FILES["txtdocumentos"]["name"]:"documento.jpg";

        $tmpFoto=$_FILES["txtdocumentos"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Documento/".$nombreArchivo);

            $sentencia=$pdo->prepare(" SELECT documentos FROM documentos WHERE id=:id");
            $sentencia->bindParam(':id',$txtid);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            //print_r($empleado);
            if(isset($empleado["documentos"])){
                if(file_exists("../Documento/".$empleado["documentos"])){
                    if($item['documentos']!="documento.pdf"){

                   
                    unlink("../Documento".$empleado["documentos"]);
                }
                }
        
            }


        $sentencia=$pdo->prepare("UPDATE documentos SET  documentos=:foto WHERE id=:id");
        $sentencia->bindParam(':documentos',$nombreArchivo);
        $sentencia->bindParam(':id',$txtid);
        $sentencia->execute();


    }
        header('Location:index.php');


    echo $txtID;
    echo "presionaste btnModificar";
    break;
    case"btnEliminar":
    $sentencia=$pdo->prepare(" SELECT documentos FROM documentos WHERE id=:id");
    $sentencia->bindParam(':id',$txtid);
    $sentencia->execute();
    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($empleado);
    if(isset($empleado["documentos"])&&($item['documentos']!="documento.jpg")){
        if(file_exists("../Documento/".$empleado["documentos"])){
            unlink("../Documento".$empleado["documentos"]);
        }

    }


    
    $sentencia=$pdo->prepare(" DELETE FROM documentos WHERE id=:id");
    $sentencia->bindParam(':id',$txtid);
    $sentencia->execute();
    header('Location:index.php');

    echo $txtcodigo;
    echo "presionaste btnEliminar";
    break;
    case"btnCancelar":
    header('Location:index.php');
    break;



    case "Seleccionar":
    $accionAgregar="disabled";
    $accionModificar=$accionEliminar=$accionCancelar="";
    $mostrarModal=true;

    
    break;

}

$sentencia=$pdo->prepare("SELECT * FROM `documentos` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaEmpleados);

?>