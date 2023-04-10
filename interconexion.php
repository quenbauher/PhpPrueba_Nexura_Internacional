<?php

include_once 'conexion.php';


class interConexion extends conexion {
        
        private $fila; 
	private $user ; 
	private $password;
	private $consulta ;
        private $consultar ;

	private $conexion;
	private $row, $roww, $pas1 , $pas2;
        private $penombre, $peapellido, $peusuario, $pepassword, $verificar ; 

	public function interConexion(){

	$conect = new conexion();//instancia de conexion mejor dicho un objeto
	$this->conexion = $conect -> conectar();
	$conect -> seleccion_db();  

	}
//aqui esta funcion publica resibe las dos variables, usuario y pasword
	/*public  function login($usuario, $pass){
		$this->user = $usuario;
		$this->password= $pass;
//se almacena en consultaun un query con las especificciones de que corresponda a los mismos campos de usuario y password que se encuentran registrados n la bse de datos               
		
         // $this->consultar= "SELECT usuario , password FROM registro_administrador where usuario = '".$this->user."' and  password = '".$this->password."'";
                $this->consulta=mysqli_query($this->conexion,"SELECT usuario , password FROM registro_administrador where usuario = '".$this->user."' and  password = '".$this->password."'"); 
  //    if (!$this->consulta) {
   // printf("Error: %s\n", mysqli_error($this->conexion));
    //exit();


// se almacena en row la cosulta              
                if($this->row = mysqli_fetch_array($this->consulta)){
                //    arranca la seccion
                    session_start();
                    $this->consulta = mysqli_query($this->conexion,"SELECT * FROM registro_administrador where usuario = '".$this->user."' ");  
                    $this->row = mysqli_fetch_array($this->consulta);
                    //Id
                    $this->id = $this->row['id'];
                    $_SESSION['id'] = $this->id;
                    $this->ini = 1;
                    //Nombre
                    $this->id = $this->row['nombre'];
                    $_SESSION['name'] = $this->id; 
                    //apellido
                    $this->id = $this->row['apellido'];
                    $_SESSION['apellido'] = $this->id; 
                    //si las claves coinciden te lleva al menu
                         header("Location: ../vistas/menu.php");      
                }else{
                        echo " usuario o password incorrecto ";

                        
                }
                return $this->consulta ;
	}
*/
        public function registrar($id,$nombre, $email, $sexo, $area_id, $boletin, $descripcion){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->sexo = $sexo;
            $this->area_id = $area_id;
            $this->boletin = $boletin;
            $this->descripcion = $descripcion;
            
            $this->verificar = mysqli_query($this->conexion,"SELECT nombre FROM empleado where nombre = '".$this->nombre."' "  );

            if($this->row = mysqli_fetch_array($this->verificar)){
                
                echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";  
                
            }else if(!$this->row = mysqli_fetch_array($this->verificar)){
            
                mysqli_query($this->conexion,"INSERT INTO empleado(id, nombre, email, sexo, area_id, boletin, descripcion) values('$this->id','$this->nombre', '$this->email', '$this->sexo' , '$this->area_id','$boletin->boletin','$this->descripcion')" );
                
              
                
               
                 
                         header("location: index.html");
          
            }
            
            
            
            
            
            
        }
        
        
        public function verificar($nombre){
            
            $this->fine = false;
            
            $this->nombre = $nombre;
           // $this->pas2 = $pass2;
            
            
            if($this->nombre){
                
                $this->fine = true ; 
                
                
            }
            
            
            return $this->fine ; 
        }
        
       
    /*    
public function registro_usuario($nombre, $email, $sexo, $area_id, $descripcion){
           
           
           $this->nombre = $nombre;                           
           $this->email = $email; 
           $this->sexo = $sexo;
           $this->area_id=$area_id;
           
            $this->descripcion = $descripcion;
           // $this->roles = $roles;
                    
                     
           
        
          
           
          // session_start();
           
 $this->veri = mysqli_query($this->conexion,"SELECT email FROM empleado where nombre ='".$this->nombre."' and  area_id = '".$_SESSION['id']."'");           

           
//si no existe lo crea
  if(mysqli_num_rows($this->veri)){
               
      mysqli_query($this->conexion,"INSERT INTO empleado(nombre, email, sexo, area_id, descripcion) values('$this->nombre' , '$this->email' , '$this->sexo', '$this->area_id', '$this->descripcion', '$_SESSION[area_id]')");
           
            header("Location: ../vistas/index.php");
          
                 
           
  }else{
               
            echo "YA EXISTE...EL USUARIO CON EL NUMERO DE IDENTIFICACION... YA EXISTE";
  }
     */      
     
            
          

           
        
          
           
   }
   
   


?>
