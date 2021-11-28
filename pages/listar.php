<?php 

include 'conection.php';

            $consulta=" SELECT * FROM users LIMIT 0";
			$termino= "";
			if(isset($_POST['usuarios']))
			{
				$termino=$conection->real_escape_string($_POST['usuarios']);
				$consulta="SELECT * FROM users WHERE
				name LIKE '%".$termino."%' OR
				lastname LIKE '%".$termino."%' OR
                phone LIKE '%".$termino."%' OR
				email LIKE '%".$termino."%'";
			}
			$consultaBD=$conection->query($consulta);
			if($consultaBD->num_rows>=1){
				echo "				
				<table class='responsive-table table table-hover table-bordered' style='font-size:12px'>
					<thead class='table-light'>
						<tr>							
							<th class='bg-info' scope='col'>Nombre</th>
							<th class='bg-info' scope='col'>Apellidos</th>
							<th class='bg-info' scope='col'>Email</th>
							<th class='bg-info' scope='col'>Telefono</th>
							<th class='bg-info' scope='col'>Edad</th>							
							<th class='bg-info' scope='col'>Acciones</th>
						</tr>
					</thead>
				<tbody>";
				while($fila=$consultaBD->fetch_array(MYSQLI_ASSOC)){
							echo "<tr>
								<td>".$fila['name']."</td>
								<td>".$fila['lastname']."</td>
								<td>".$fila['email']."</td>
								<td>".$fila['phone']."</td>
                                <td>".$fila['age']."</td>
								<td><a class='btn btn-success btn-xs' href='userView.php?id=".$fila['idusers']."'><i class='fas fa-eye'></i></a> 
								<a class='btn btn-warning btn-xs' href='userEdit.php?id=".$fila['idusers']."'><i class='fas fa-pencil-alt'></i></a>
								<a class='btn btn-danger btn-xs' id='btnElim' href='sql_Eliminaruser.php?id=".$fila['idusers']."'><i class='fas fa-trash-alt'></i></a>
								</td>					
							</tr>";
				}
				echo "</tbody>
				</table>";
			}else{
				echo "<center><h4>No hemos encotrado ningun resultado con: "."<strong class='text-uppercase'>".$termino."</strong><h4><center>";				
			}
?>