
<!---->
<?php

include ("interconexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email']; 

$sexo = $_POST['sexo']; 

$area_id = $_POST['area_id']; 
$boletin = $_POST['boletin']; 
$descripcion = $_POST['descripcion'];





$interConexion = new interConexion(); 
$igual= $interConexion->verificar($id,$nombre, $email, $sexo, $area_id, $boletin, $descripcion); 

if($igual==0){
    
   
$interConexion->registrar($id,$nombre, $email, $sexo, $area_id, $boletin, $descripcion); 


}else if ($igual == false){
    
    echo "<h1> error</h1>";
    
}

/*$interConexion->registro_usuario($nombre, $email, $sexo, $area_id, $descripcion);

 * ?>
 */
?>




