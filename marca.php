<?php
include('conection.php');
include('validar.php');
include('menu.php');
?>
<a href="user.php">início</a>
<link rel="stylesheet" href="css/categoria.css">
<div class="box">

	<section class="alig">


		<form method="post" action="cad_marca.php">
			<div>
				<input type="hidden" placeholder="idMarca" name="txIdmarca" value="<?php echo @$_GET['id']; ?>" />
			</div>

			<div>
				<input type="text" placeholder="Marca" name="txMarca" value="<?php echo @$_GET['marca']; ?>" />
			</div>


		

			<div>
				<input type="submit" value="Salvar" />
			</div>
		</form>

	</section>

<section>

		<table border="1">
			<!--<th>Id</th> -->
			<div>
				<th>IdMarca</th>
				<th>Marca</th>
				
			

			</div>


			<tbody>
				<?php
				$stmt = $pdo->prepare("select idMarca,marca_prod
					from marca where 1 
					");
				$stmt->execute();

				while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

					echo "<tr>";
					//echo "<td> $row[0] </td>";
					echo "<td> $row[0] </td>";
					echo "<td> $row[1] </td>";
                    
					
					echo "<td>";
					echo "<a href='excluir_cat.php?id=$row[1]'> Excluir </a>";
					echo "</td>";
				
				
				}
				?>
			</tbody>
		</table>

	</section>
</div>