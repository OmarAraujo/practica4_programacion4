<html>
	<head>
		<body>

			<form>
				<table>
					<tr>
						<th>
						
						Practica de Arrays 
						<th>
						
						
						
					<tr>
					<?php
		 						  $productos = array(
									"id" => "1",
									"descripcion" =>"galletas",
									"precio" =>"8", 
									
									"id1" => "2",
									"descripcion1" =>"Helado",
									"precio1" =>"50",
									
									"id2" => "3",
									"descripcion2" =>"Gatorade",
									"precio2" =>"18",
							
									"id3" => "4",
									"descripcion3" =>"Tamales",
									"precio3" =>"10",
						
									
								);
					?>
					
                         <th> 
				<?php echo $productos ['id']; ?>  
			 </th>
                         <th>
				<?php echo $productos ['descripcion']; ?>
			 </th>
                         <th>
				<?php echo $productos ['precio']; ?>  
			 </th>
                         <th> 
				<a href="Editar.html">Editar</a>    
				<a href="Eliminar.html">Eliminar</a>
			 </th>                                 
                         </th>
                         </tr>
							
			 <tr>
					
					
                         <th> 
				<?php echo $productos ['id1']; ?> 
			 </th>
                         <th>
				<?php echo $productos ['descripcion1']; ?>
			 </th>
                         <th>
				<?php echo $productos ['precio1']; ?>  
			 </th>
			 <th> 
				<a href="Editar.html">Editar</a>    
				<a href="Eliminar.html">Eliminar</a>
			 </th> 
                         <th>                                  
                         </th>
	
                         </tr>
						
				
                         <th>
				<?php echo $productos ['id2']; ?>  
			</th>
                         <th>
				<?php echo $productos ['descripcion2']; ?>
			</th>
                         <th>
				<?php echo $productos ['precio2']; ?>  
			 </th>
			 <th> 
				<a href="Editar.html">Editar</a>    
				<a href="Eliminar.html">Eliminar</a>
			 </th> 
                         <th>                                  
                         </td>
                         </tr>
							
					
                         <th> 
				<?php echo $productos ['id3']; ?>  
			 </th>
                         <th>
				<?php echo $productos ['descripcion3']; ?>
			 </th>
                         <th>
				<?php echo $productos ['precio3']; ?>  
			 </th>
			 <th> 
				<a href="Editar.html">Editar</a>    
				<a href="Eliminar.html">Eliminar</a>
			 </th> 
                         <th>                                  
                         </th>
                         </tr>
						
					</tr>
				</table>
			</form>
		</body>
</html>