<?php
//print_r($_POST);


$txtcodigo=(isset($_POST['txtcodigo']))?$_POST['txtcodigo']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtfoto=(isset($_FILES['txtfoto']["name"]))?$_FILES['txtfoto']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include("../Conexion/conexion.php");

switch($accion){
    case"btnAgregar":
        
        $sentencia=$pdo->prepare("INSERT INTO foto(nombre,foto)
        VALUES(:nombre,:foto)");

        $sentencia->bindParam(':nombre',$txtnombre);
     

        $Fecha=new DateTime();
        $nombreArchivo=($txtfoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtfoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtfoto"]["tmp_name"];
        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Imagenes/".$nombreArchivo);
        }

        $sentencia->bindParam(':foto',$nombreArchivo);
        $sentencia->execute();

        header('Location:index.php');
    break;
    case"btnModificar":


        $sentencia=$pdo->prepare("UPDATE foto SET 
        nombre=:nombre WHERE codigo=:codigo");

        $sentencia->bindParam(':nombre',$txtnombre);
       
       
        $sentencia->bindParam(':codigo',$txtcodigo);
        $sentencia->execute();


        $Fecha=new DateTime();
        $nombreArchivo=($txtfoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtfoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtfoto"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Imagenes/".$nombreArchivo);

            $sentencia=$pdo->prepare(" SELECT foto FROM foto WHERE codigo=:codigo");
            
            $sentencia->bindParam(':codigo',$txtcodigo);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            //print_r($empleado);
            if(isset($empleado["foto"])){
                if(file_exists("../Imagenes/".$empleado["foto"])){
                    if($item['foto']!="imagen.jpg"){

                   
                    unlink("../Imagenes".$empleado["foto"]);
                }
                }
        
            }


        $sentencia=$pdo->prepare("UPDATE foto SET  foto=:foto WHERE codigo=:codigo");
        $sentencia->bindParam(':foto',$nombreArchivo);
        $sentencia->bindParam(':codigo',$txtcodigo);
        $sentencia->execute();


    }
        header('Location:index.php');


    echo $txtID;
    echo "presionaste btnModificar";
    break;
    case"btnEliminar":
    $sentencia=$pdo->prepare(" SELECT foto FROM foto WHERE codigo=:codigo");
    $sentencia->bindParam(':codigo',$txtcodigo);
    $sentencia->execute();
    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($empleado);
    if(isset($empleado["foto"])&&($item['foto']!="imagen.jpg")){
        if(file_exists("../Imagenes/".$empleado["foto"])){
            unlink("../Imagenes".$empleado["foto"]);
        }

    }


    
    $sentencia=$pdo->prepare(" DELETE FROM foto WHERE codigo=:codigo");
    $sentencia->bindParam(':codigo',$txtcodigo);
    $sentencia->execute();
    header('Location:index.php');

    echo $txtID;
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

$sentencia=$pdo->prepare("SELECT * FROM `foto` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaEmpleados);

?>