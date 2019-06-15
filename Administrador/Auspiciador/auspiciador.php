<?php
//print_r($_POST);


$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtdescripcion=(isset($_POST['txtdescripcion']))?$_POST['txtdescripcion']:"";
$txtFoto=(isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include("../Conexion/conexion.php");

switch($accion){
    case"btnAgregar":

        $sentencia=$pdo->prepare("INSERT INTO auspiciador(Nombre,descripcion,Foto)
        VALUES(:Nombre,:descripcion,:Foto)");

        $sentencia->bindParam(':Nombre',$txtNombre);
        $sentencia->bindParam(':descripcion',$txtdescripcion);
        

        $Fecha=new DateTime();
        $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtFoto"]["tmp_name"];
        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Auspiciado/".$nombreArchivo);
        }

        $sentencia->bindParam(':Foto',$nombreArchivo);
        $sentencia->execute();

        header('Location:index.php');
    break;
    case"btnModificar":


        $sentencia=$pdo->prepare("UPDATE auspiciador SET 
        Nombre=:Nombre,
        descripcion=:descripcion WHERE id=:id");

        $sentencia->bindParam(':Nombre',$txtNombre);
        $sentencia->bindParam(':descripcion',$txtdescripcion);
       
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();


        $Fecha=new DateTime();
        $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtFoto"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Auspiciado/".$nombreArchivo);

            $sentencia=$pdo->prepare(" SELECT Foto FROM auspiciador WHERE id=:id");
            $sentencia->bindParam(':id',$txtID);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            //print_r($empleado);
            if(isset($empleado["Foto"])){
                if(file_exists("../Imagenes/".$empleado["Foto"])){
                    if($item['Foto']!="imagen.jpg"){

                   
                    unlink("../Auspiciado".$empleado["Foto"]);
                }
                }
        
            }


        $sentencia=$pdo->prepare("UPDATE auspiciador SET  Foto=:Foto WHERE id=:id");
        $sentencia->bindParam(':Foto',$nombreArchivo);
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();


    }
        header('Location:index.php');


    echo $txtID;
    echo "presionaste btnModificar";
    break;
    case"btnEliminar":
    $sentencia=$pdo->prepare(" SELECT Foto FROM auspiciador WHERE id=:id");
    $sentencia->bindParam(':id',$txtID);
    $sentencia->execute();
    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($empleado);
    if(isset($empleado["Foto"])&&($item['Foto']!="imagen.jpg")){
        if(file_exists("../Auspiciado/".$empleado["Foto"])){
            unlink("../Auspiciado".$empleado["Foto"]);
        }

    }


    
    $sentencia=$pdo->prepare(" DELETE FROM auspiciador WHERE id=:id");
    $sentencia->bindParam(':id',$txtID);
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

$sentencia=$pdo->prepare("SELECT * FROM `auspiciador` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaEmpleados);

?>