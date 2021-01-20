<!DOCTYPE html>
<html>
<head>
	<title>carteirinha</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<img src="logo.jpg">
		<form method="post" action="carteirinha2.php">	  
			<h1>IEADM Santo Antônio do Fontoura - MT</h1>
			<h6>Pr. Presidente: Alcides Martins Leal</h6>
			<br>
			<br>
			<br>
			<h1>Emissão de Carteiras de Membros</h1>
			<br>
			<br>
			<br>
			<div class="form-row">
			    <div class="col-12">
			    	<span>NOME</span>
					<input type="text" class="form-control" name="nome">
				 </div>
				 <div class="col-3">
					<span>FUNÇÃO</span>
					<input type="text" name="funcao" class="form-control">
				</div>
				<div class="col-3">
					<span>ESTADO CIVIL</span>	
				    <input type="text" name="estadocivil" class="form-control">
				</div>
				<div class="col-3">
					<span>GENERO</span>
					<input type="text" name="sexo" class="form-control">
				</div>
				<div class="col-3">
					<span>DATA DE NASCIMENTO</span>
					<input type="text" name="nascimento" class="form-control">
				</div>
				<div class="col-3">
					<span>NATURALIDADE</span>
					<input type="text" name="naturalidade" class="form-control">
				</div>
				<div class="col-3">
					<span>NACIONALIDADE</span>
					<input type="text" name="nacionalidade" class="form-control">
				</div>
				<div class="col-3">
					<span>ESTADO</span>
					<input type="text" name="estado" class="form-control">
				</div>	
				<div class="col-3">
					<span>DATA DO BATISMO</span>
					<input type="text" name="batismo" class="form-control">
				</div> 
				<div class="col-12">
					<span>NOME DO PAI</span>
					<input type="text" class="form-control" name="pai">
				</div> 
				<div class="col-12">
					<span>NOME DA MÃE</span>
					<input type="text" class="form-control" name="mae">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary">EMITIR CARTEIRINHA</button>
		</form>
		
	</div>
	<div >
		
	</div>





	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

