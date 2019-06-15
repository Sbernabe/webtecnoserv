<?php
//print_r($_POST);


$txtcodigo=(isset($_POST['txtcodigo']))?$_POST['txtcodigo']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtvideo=(isset($_FILES['txtvideo']["name"]))?$_FILES['txtvideo']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include("../Conexion/conexion.php");

switch($accion){
    case"btnAgregar":

        $sentencia=$pdo->prepare("INSERT INTO video(nombre,video)
        VALUES(:nombre,:video)");

        $sentencia->bindParam(':nombre',$txtnombre);


        $Fecha=new DateTime();
        $nombreArchivo=($txtvideo!="")?$Fecha->getTimestamp()."_".$_FILES["txtvideo"]["name"]:"video.mp4";

        $tmpFoto=$_FILES["txtvideo"]["tmp_name"];
        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Video/".$nombreArchivo);
        }

        $sentencia->bindParam(':video',$nombreArchivo);
        $sentencia->execute();

        header('Location:index.php');
    break;
    case"btnModificar":


        $sentencia=$pdo->prepare("UPDATE video SET 
        nombre=:nombre WHERE codigo=:codigo");

        $sentencia->bindParam(':nombre',$txtnombre);
       
       
        $sentencia->bindParam(':codigo',$txtcodigo);
        $sentencia->execute();


        $Fecha=new DateTime();
        $nombreArchivo=($txtvideo!="")?$Fecha->getTimestamp()."_".$_FILES["txtvideo"]["name"]:"video.mp4";

        $tmpFoto=$_FILES["txtvideo"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Video/".$nombreArchivo);

            $sentencia=$pdo->prepare(" SELECT video FROM video WHERE codigo=:codigo");
            $sentencia->bindParam(':codigo',$txtcodigo);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            //print_r($empleado);
            if(isset($empleado["video"])){
                if(file_exists("../Video/".$empleado["video"])){
                    if($item['video']!="imagen.mp4"){

                   
                    unlink("../Video".$empleado["video"]);
                }
                }
        
            }


        $sentencia=$pdo->prepare("UPDATE video SET  video=:video WHERE codigo=:codigo");
        $sentencia->bindParam(':video',$nombreArchivo);
        $sentencia->bindParam(':codigo',$txtcodigo);
        $sentencia->execute();


    }
        header('Location:index.php');


    echo $txtID;
    echo "presionaste btnModificar";
    break;
    case"btnEliminar":
    $sentencia=$pdo->prepare(" SELECT video FROM video WHERE codigo=:codigo");
    $sentencia->bindParam(':codigo',$txtcodigo);
    $sentencia->execute();
    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($empleado);
    if(isset($empleado["video"])&&($item['video']!="video.mp4")){
        if(file_exists("../Video/".$empleado["video"])){
            unlink("../Video".$empleado["video"]);
        }

    }


    
    $sentencia=$pdo->prepare(" DELETE FROM video WHERE codigo=:codigo");
    $sentencia->bindParam(':codigo',$txtcodigo);
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

$sentencia=$pdo->prepare("SELECT * FROM `video` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaEmpleados);

?>