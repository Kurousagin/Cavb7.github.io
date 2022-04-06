<?php
include('../bd/conection.php');
include('../login/validar.php');
include('../usuario/menu.php');
?>

<link rel="stylesheet" href="../css/exibicao.css">
<title>produtos.cavb7</title>


<div class="box">
	<section class="alig">


		<form method="post" action="cadastrar.php">
			<div>

				<input type="hidden" placeholder="idProduto" name="txIdProduto" value="<?php echo @$_GET['id']; ?>" />

			</div>


			<div>

				<input type="text" placeholder="Código" name="txCodigo" value="<?php echo @$_GET['codigo']; ?>" />

			</div>

			<div>

				<input type="text" placeholder="Produto" name="txProduto" value="<?php echo @$_GET['produto']; ?>" />
			</div>
			<div>
				<input type="number" placeholder="quantidade" name="txQnt" value="<?php echo @$_GET['quant']; ?>" />
			</div>

			<!-- Categorias -->
			<?php
			$stmtCat = $pdo->prepare("select * from tbCategoria");
			$stmtCat->execute();
			?>
			<div>
				<?php
				//variável para controlar qual item do select será exibido
				$idCat = @$_GET['cat'];
				?>

				<select name="txIdCategoria">
					<option value='0'> Escolha uma categoria </option>
					<?php
					while ($rowCat = $stmtCat->fetch(PDO::FETCH_BOTH)) {
						if ($idCat == $rowCat[0]) {
							$sel = "selected";
						} else {
							$sel = "";
						}
						echo "<option value='$rowCat[0]' $sel> $rowCat[1] </option>";
					}
					?>
				</select>

			</div>
			<!-- Fim Categorias -->







			<div>
				<input type="text" placeholder="Valor" name="txValor" value="<?php echo @$_GET['valor']; ?>" />
			</div>

			<div>
				<input type="submit" value="Salvar" />
			</div>
		</form>

	</section>


	<section>



		<table border="1" id="listar" class="table table-dark table-striped">
			<!--<th>Id</th> -->
			<div>
				<th>Código </th>
				<th>Produto</th>
				<th>quantidade</th>
				<th>Categoria</th>
				<th>Valor</th>

				<th> &nbsp; </th>
				<th> &nbsp; </th>

			</div>


			<tbody id="conteudo">
				<?php
				$stmt = $pdo->prepare("select p.idProduto,p.cod_prod,p.produto,p.quantidade,c.categoria,p.valor,p.idCategoria
					from tbproduto p
					inner join tbcategoria c
					on p.idCategoria = c.idCategoria");
				$stmt->execute();

				while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {

					echo "<tr>";
					//echo "<td> $row[0] </td>";
					echo "<td> $row[1] </td>";
					echo "<td> $row[2] </td>";
					echo "<td> $row[3] </td>";
					echo "<td> $row[4] </td>";
					echo "<td> $row[5] </td>";
					echo "<td>";
					echo "<a href='excluir.php?id=$row[0]'> Excluir </a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='?id=$row[0]&codigo=$row[1]&produto=$row[2]&quant=$row[3]&cat=$row[4]&valor=$row[5]'> Alterar </a>";
					echo "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>


	</section>
</div>

<?php

include('../foot.php');
?>