<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar usuarios</title>
        <link rel="stylesheet" type ="text/css" href="css/add_wish.css">
    </head>
    <body>
    <center>
       <!-- <a href ="menu.php" class = "uno">Volver a menu...</a> -->      
    <div class ="maik">   
        <table border="5"  class="alexander">
            <form action ="agregar_usuario.php" method ="POST">
       
            <h1 class = "title">Crear o modificar Usuario</h1>
            
            <tr><td> <p><h1>Nombre Completo*</h1></p><input title = "se necesita llenar" type = "text" name = "nombre" placeholder = "Nombre Completo" required> 
                          </td><td>
                              
            <tr><td> <p><h1>Correo Electronico*</h1></p><input title = "se necesita llenar" type = "text" name = "email" placeholder = "Correo Electronico" required> 
                                 
                              
                                                     <p><h1>Sexo*</h1>                                
                                                                                   
                          <input type="radio" id="masculino" name="sexo" value="MASCULINO">
                          <label>Masculino</label><br>   
                        <input type="radio" id="femenino" name="sexo" value="FEMENINO">
                        <label>Femenino</label><br>     
                        
                        
                        
                        <p><h1>Area*</h1></p><select type = "integer" name="area_id">

                                              <option value="1">Administrativa y Financiera</option>
                                              <option value="2">Ingenieria</option>
                                              <option value="5">Desarrollo de Negocios</option>
                                              <option value="6">Proyectos</option>
                                              <option value="7">Servicios</option>
                                              <option value="8">Calidad</option>
                                                                                   </select >
                                                                                   
                                                                                   
                                                                                   <h3>Deseo recibir boletin informativo</h3>
                 <input type="checkbox" id="informacion" name="boletin" value="cuatro">
                  <label> Marque si desea</label><br>
                                               
                        
                                                                                   <p><h1><label>Descripcion*</label></h1></p>
                <textarea id="comentario" name="descripcion" rows="4" cols="50">Descripsion de la experiencia del empleado</textarea>                             
               
                
                
          <!--      
                <h1>Roles</h1>
                
  <input type="checkbox" id="rol1" name="rol1" value="uno">
  <label for="vehicle1"> Profesional de proyectos - Desarrollador</label><br>
  <input type="checkbox" id="rol2" name="rol2" value="dos">
  <label for="vehicle2"> Gerente estrategico</label><br>
  <input type="checkbox" id="rol3" name="rol3" value="tres">
  <label for="vehicle3"> Auxiliar administrativo</label><br><br>
  
     -->           
                
                
                
      </td><td>      
      </td></tr><tr><td>

             
                   <input type="reset" value="Limpiar" class ="uno">
                                             
<input type ="submit" value =" registrar"  id ="res"/>
<div class = "contenedor" id = "dos"> 
    <a href = "Lista_Empleados.php">
                           
			<p class = "parrafo">Actualiza Elimine...Empleados</p>
		</a>
		</div>
        <!--<input class="dos" type="submit" onclick = "this.form.action = 'agregar_usuario.php'" value="Agregar Usuario" />
                <!--   <input class="dos" type="submit" onclick = "this.form.action = '../controlador/consulta_usuario.php'" name="buscar" value="Buscar Usuario" />
               -->

   </td></tr><tr><td></table>              
        
    </div>                               

    </center>
    
    
   
		
               
    
    
    
    </body>
</html>