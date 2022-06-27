<!DOCTYPE html>
<html>
<head>
	<title>carta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<img src="logo.jpg">
		
		
		<form method="post" action="carta2.php">	  
			<h1>Emissão de Carta de Membros</h1>
			<br>

			<span>ESCOLHA O TIPO DE CARTA :</span>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="tipoCarta" id="exampleRadios" value="MUDANÇA">
				<label class="form-check-label" for="exampleRadios">
					MUDANÇA
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="tipoCarta" id="exampleRadios2" value="RECOMENDAÇÃO">
				<label class="form-check-label" for="exampleRadios2">
					RECOMENDAÇÃO
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="tipoCarta" id="exampleRadios3" value="EM TRANSITO">
				<label class="form-check-label" for="exampleRadios3">
					EM TRANSITO
				</label>
			</div>

			<br>

			<div class="form-group">
			    <span>NOME DO MEMBRO</span>
				<input type="text" class="form-control" name="nome">
			</div>

			<div class="form-group">
				<span>FUNÇÃO DO MEMBRO</span>
				<input type="text" name="funcao" class="form-control">
			</div>

			<div class="form-group">
				<span>IGREJA DESTINO</span>	
			    <input type="text" name="igrejaDestino" class="form-control">
			</div>

			<br>

			<button type="submit" class="btn btn-primary">EMITIR CARTA</button>
		</form>
		
		
	</div>
	<div >
		
	</div>





	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

