<?php
//print_r($_POST);


$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtSede=(isset($_POST['txtSede']))?$_POST['txtSede']:"";
$txtDireccion=(isset($_POST['txtDireccion']))?$_POST['txtDireccion']:"";
$txtFoto=(isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include("../Conexion/conexion.php");

switch($accion){
    case"btnAgregar":

        $sentencia=$pdo->prepare("INSERT INTO disciplinas(Nombre,Sede,Direccion,Foto)
        VALUES(:Nombre,:Sede,:Direccion,:Foto)");

        $sentencia->bindParam(':Nombre',$txtNombre);
        $sentencia->bindParam(':Sede',$txtSede);
        $sentencia->bindParam(':Direccion',$txtDireccion);

        $Fecha=new DateTime();
        $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtFoto"]["tmp_name"];
        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Imagenes/".$nombreArchivo);
        }

        $sentencia->bindParam(':Foto',$nombreArchivo);
        $sentencia->execute();

        header('Location:index.php');
    break;
    case"btnModificar":


        $sentencia=$pdo->prepare("UPDATE disciplinas SET 
        Nombre=:Nombre,
        Sede=:Sede,
        Direccion=:Direccion WHERE id=:id");

        $sentencia->bindParam(':Nombre',$txtNombre);
        $sentencia->bindParam(':Sede',$txtSede);
        $sentencia->bindParam(':Direccion',$txtDireccion);
       
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();


        $Fecha=new DateTime();
        $nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

        $tmpFoto=$_FILES["txtFoto"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../Imagenes/".$nombreArchivo);

            $sentencia=$pdo->prepare(" SELECT Foto FROM disciplinas WHERE id=:id");
            $sentencia->bindParam(':id',$txtID);
            $sentencia->execute();
            $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
            //print_r($empleado);
            if(isset($empleado["Foto"])){
                if(file_exists("../Imagenes/".$empleado["Foto"])){
                    if($item['Foto']!="imagen.jpg"){

                   
                    unlink("../Imagenes".$empleado["Foto"]);
                }
                }
        
            }


        $sentencia=$pdo->prepare("UPDATE disciplinas SET  Foto=:Foto WHERE id=:id");
        $sentencia->bindParam(':Foto',$nombreArchivo);
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();


    }
        header('Location:index.php');


    echo $txtID;
    echo "presionaste btnModificar";
    break;
    case"btnEliminar":
    $sentencia=$pdo->prepare(" SELECT Foto FROM disciplinas WHERE id=:id");
    $sentencia->bindParam(':id',$txtID);
    $sentencia->execute();
    $empleado=$sentencia->fetch(PDO::FETCH_LAZY);
    print_r($empleado);
    if(isset($empleado["Foto"])&&($item['Foto']!="imagen.jpg")){
        if(file_exists("../Imagenes/".$empleado["Foto"])){
            unlink("../Imagenes".$empleado["Foto"]);
        }

    }


    
    $sentencia=$pdo->prepare(" DELETE FROM disciplinas WHERE id=:id");
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

$sentencia=$pdo->prepare("SELECT * FROM `disciplinas` WHERE 1");
$sentencia->execute();
$listaEmpleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaEmpleados);

?>