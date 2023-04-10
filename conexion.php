<?php

class conexion {
    
    
    private $db;
    private $usuario;
    private $servidor ;
    private $password ; 
    private $conect;
    private $conect2;
 
    public function conexion (){//metodo constructor

    $this->db = "prueba_tecnica_dev";
    $this->usuario = "root";
    $this->servidor = "localhost";
    $this->password = "31851873"; 
    
        
    


    }
    
    
    public  function conectar(){//metodo geter- cuando se llame esta
                                 // funcion o metodo lo que se esta
                                //llamando es el conectar con la base de datos
                            //es decir queda listo con esta funcion para conectar
                          //si llamo a esta funcion me devuleve la conexion
           //ademas esta es la manera de aceder a esta variable privada conect
        //desde otro lugar.
        
        $this->conect = new mysqli($this->servidor, $this->usuario, $this->password,$this->db) or die ("problemas con tratar de conectar con el servidor");
        
        mysqli_set_charset($this->conect, "Utf8");
        return $this->conect; 
       
    }
    
    public function seleccion_db(){
    //estoy aqui en este lugar    
        
        
   if(mysqli_select_db($this->conect, $this->db)){
      echo ("CONECTADO");
     
   }  else {
        echo ("problemas al tratar de conectar con la base de datos");
   }
        
    }
    
  
}

?>
