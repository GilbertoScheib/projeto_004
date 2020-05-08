<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
		function chama(){
			var email = $("#email").val();
			var senha = $("#senha").val();
			data={email : email,senha: senha,}
			$.ajax({
				url : "fazerLogin.php",
				type : 'post',
				data :data,
					beforeSend : function(){
						
					},
				}).done(function(msg){
				console.log(msg)
				if(msg=="válido"){
						alert("logado");
					}else{
						alert("negado")
					}
				})
			); 
		}
	</script>
	</head>
	<body>
		<div class='container'>
		
			<div class='painel-esquerda centro-tela'>
				<img src="img/icon.png">
			</div>


			<div class='painel-direita centro-tela'>
				<div class='img-mobile centro-tela'>
					<img src="img/colabora.png">
				</div>
				<div class='container-login centro-tela'>
					<h2>Faça seu <span style="color:#FFBE24!important"> login</span></h2>
					<div class="container-dados">
						<div id='campo-email' class=''>
							
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Email" class="input" id="email" >
						</div>
						<div id='campo-senha' class=''>
							<i class="fas fa-lock"></i><input type="password"  placeholder='Senha'class="input" id="senha" >
							
						</div>
						<input type="button" class="btn" value="Login" id="enviar" onclick="chama()">
					</div>
				</div>
				<div class='img-mobile centro-tela'>
					<img  src="img/artigo.png">
				</div> 
		</div>
	</body>
</html>
