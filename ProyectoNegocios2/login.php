<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Login">
	<meta name="description"
		content="Puedes iniciar sesion desde esta pagina, para poder ser parte de nuestros usuarios y poder disfrutar de nuestra pagina, obtener descuentos, regalos y muchas sorpresas mas.">
	<meta name="keywords" content="iniciar,sesion,MisLindasChacharas">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style-login.css">
	<link rel="icon" href="img/Logo.ico" type="image/png" />


	<title>PUFFULIZ || login</title>
</head>

<body>
	<header
		class="p-3 d-flex flex-column flex-md-row justify-content-between align-items-center border-bottom category mb-30"
		style="background-color: black;">
		<a href="index.php" title="index">
			<h5 class="mt-1 title text-white">PUFFULIZ</h5>
		</a>
	</header>
	<br><br><br>
	<section class="section">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-lg-12 col-xl-11">
					<div class="card text-black" style="border-radius: 25px;">
						<div class="card-body p-md-5">
							<div class="row justify-content-center">
								<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

									<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

									<form id="loginForm" action="loginb.php" method="post">
										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<input name="correo" id="correo" class="campos" placeholder="Correo">
											</div>
										</div>

										<div class="d-flex flex-row align-items-center mb-4">
											<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
											<div class="form-outline flex-fill mb-0">
												<input type="password" name="password" id="password" class="campos"
													placeholder="Contraseña">
											</div>
										</div>

										<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
											<button type="submit" value="Login"
												class="btn-login btn btn-primary btn-lg">Entrar</button>
										</div>
									</form>
									
									

								</div>
								<div class="col-md-8 col-lg-7 col-xl-6">
									<img src="img/Logo2.jpeg" class="img-fluid" alt="MisLindasChacharas" title="mlc">
								</div>
							</div>
						</div>
						<div class="text-center">
							<p>No tienes una cuenta? <a href="Registro.html" title="registro"
									title="registro">Registrar</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-------------------------------------------FOOTER------------------------------------------------------->
		<footer class="container-fluid py-5 my-5 border-top" style="background-color: black;">
    <div class="row justify-content-center">
      <div class="col-12 col-md-3 order-2 order-md-1 text-center">
        <small class="d-block text-light">© 2022-2024 PUFFULIZ</small>
      </div>
      <div class="col-6 col-md-3 order-1 order-md-2 text-center">
        <h5 class="text-light">Características</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted-light" style="color: white;">Buenos </a></li>
          <li><a class="text-muted-light" style="color: white;">Bonitos</a></li>
          <li><a class="text-muted-light" style="color: white;">Baratos</a></li>
          <li><a class="text-muted-light" style="color: white;">Disponibles</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 order-1 order-md-2 text-center">
        <h5 class="text-light">Contactanos</h5>
        <ul class="list-unstyled text-small">
          <li><a href="https://www.facebook.com/PuffuLiz?mibextid=ZbWKwL" class="text-light"
              title="facebook">Facebook</a></li>
        </ul>
      </div>
    </div>
  </footer>

	</section>
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>