<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Vendas</title>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		
	</head>

	<body>

		<div class="container">
			
			<form>

				<div class="form-group">
					
					<label>Selecione o mês</label>
					<select class="form-control">
						
						<option>Jan</option>
						<option>Fev</option>
						<option>Mar</option>
						<option>Abr</option>
						<option>Mai</option>
						<option>Jun</option>
						<option>Jul</option>
						<option>Ago</option>
						<option>Set</option>
						<option>Out</option>
						<option>Nov</option>
						<option>Dez</option>

					</select><!-- form-control -->

				</div><!-- form-group --><br>

				<div class="form-group">
					<label>Digite a quantidade</label>
					<input type="number" name="quantidade" class="form-control" min="0" value="0">
				</div><!-- form-group --><br>

				<div class="form-group">
					<label>Digite o valor</label>
					<input type="number" name="valor" class="form-control" min="0" value="0">
				</div><!-- form-group --><br>

				<div style="text-align: right;">
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>
				
			</form>

		</div><!-- container -->




		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
</html>