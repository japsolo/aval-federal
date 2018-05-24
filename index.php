<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="assets/images/favicon/site.webmanifest">
		<link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="assets/images/favicon/favicon.ico">
		<meta name="msapplication-TileColor" content="#ebebeb">
		<meta name="msapplication-config" content="assets/images/favicon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">

		<title>Aval Federal</title>

		<link href="assets/css/ionicons.min.css" rel="stylesheet">
		<link href="assets/css/aval-federal.css?v=1" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="main-header">
			<div class="container flex">
				<figure class="logo">
					<img src="assets/images/logo-aval_federal.png" alt="Logo Aval Federal">
				</figure>

				<span class="toggle-nav"><i class="icon ion-md-menu"></i></span>

				<nav class="main-nav">
					<ul class="first-level-nav">
						<li><a href="#">Productos</a></li>
						<li><a href="#">Servicios</a></li>
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Reportes</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
					<a href="#" class="account-btn">Mi cuenta</a>
				</nav>

			</div>
		</header>

		<!-- Form to process the data [don't delete] -->
		<form method="post" id="full-data"></form>
		<!-- /Form to process the data -->

		<div class="container main-container">
			<div class="row">
				<!-- 1st-section -->
				<div class="col-xs-12 col-md-12" id="first-sect">
					<div class="sect-main-data">
						<header class="first-section-header">
							<div class="step-marker">
								<span>Paso nro. 01</span>
								<ul>
									<li class="actual"></li>
									<li></li>
									<li></li>
								</ul>
							</div>
							<h2>Simule online su límite crediticio <span>(*)</span></h2>
						</header>
						<p>Le ayudamos a encontrar la mejor solución<br> financiera para su empresa.</p>
						<div class="row">
							<div class="col-md-1">
								<img src="assets/images/icon-person_01.svg" alt="icon person" style="max-width: 30px;">
							</div>
							<div class="col-md-3">
								<div class="form-control">
									<label>Ingresa tu nombre</label>
									<input form="full-data" type="text" name="userName" autocomplete="username">
								</div>
								<div class="form-control">
									<label>Ingresa tu CUIT *</label>
									<input form="full-data" type="text" name="userCuit" autocomplete="userCuit">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-control">
									<label>Ingresa tu email</label>
									<input form="full-data" type="email" name="userEmail" autocomplete="userEmail">
								</div>
								<button type="button" class="submit-btn" id="first-sect-btn">
									<span>Continuar</span>
									<b><i class="icon ion-ios-arrow-round-forward"></i></b>
								</button>
							</div>
						</div>
						<span class="disclaimer">(*) EL MONTO DE LA LINEA AQUI INFORMADA NO CONSTITUYE UNA OFERTA. EL EFECTIVO OTORGAMIENTO DE LA MISMA SE ENCUENTRA SUJETA A EVALUACIÓN CREDITICIA, A LAS CONDICIONES PARTICULARES DE LAS OPERACIONES A SER GARANTIZADAS POR AVAL FEDERAL S.G.R., A LA PRESENTACIÓN DE LA DOCUMENTACIÓN NECESARIA Y AL CUMPLIMIENTO DE LA NORMATIVA VIGENTE. AVAL FEDERAL S.G.R. PODRÁ LIMITAR EL MONTO DE LA LÍNEA A GARANTIZAR O RECHAZARLA LUEGO DEL ANÁLISIS MENCIONADO.</span>
					</div>

					<div class="sect-resume-data">
						<section>
							<header class="resume-data-header">
								<h2>Paso 01<img src="assets/images/icon-person_01.svg" alt="icon person" style="max-width: 15px;"></h2>
							</header>
							<div class="resume-data-info">
								<div>
									<span><i class="icon ion-md-person"></i>NOMBRE</span>
									<p data-id="userName">Hernán Fernandez</p>
								</div>

								<div>
									<span><i class="icon ion-md-checkbox"></i>CUIT</span>
									<p data-id="userCuit">30 - 21451256 - 5</p>
								</div>

								<div>
									<span><i class="icon ion-md-mail"></i>EMAIL</span>
									<p data-id="userEmail">santiagofernandez@gmail.com</p>
								</div>
							</div>
							<a href="#" class="sect-resume-data-edit" id="btn-edit-data-1st-sect">Editar información</a>
						</section>
					</div>
				</div>
				<!-- /1st-section -->

				<!-- 2nd-section -->
				<div class="col-xs-12 col-md-10" id="second-sect">
					<div class="sect-main-data">
						<header class="second-section-header">
							<div class="step-marker">
								<span>Paso nro. 02</span>
								<ul>
									<li></li>
									<li class="actual"></li>
									<li></li>
								</ul>
							</div>
							<h2><img src="assets/images/icon-bulb_01.svg" alt="icon bulb"><span>Le ayudamos a encontrar la mejor solución financiera para su empresa.</span></h2>
						</header>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Activo total</span></label>
									<input form="full-data" type="text" name="totalActive" autocomplete="totalActive">
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Pasivo total</span></label>
									<input form="full-data" type="text" name="totalPasive" autocomplete="totalPasive">
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Facturación bruta anual</span></label>
									<input form="full-data" type="text" name="totalAnualBilling" autocomplete="totalAnualBilling">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Impuesto de ganancias pagado</span></label>
									<input form="full-data" type="text" name="incomeTaxPaid" autocomplete="incomeTaxPaid">
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Resultado del ultimo ejercicio</span></label>
									<input form="full-data" type="text" name="lastExerciseResult" autocomplete="lastExerciseResult">
								</div>
								<button type="button" class="submit-btn" id="second-sect-btn">
									<span>Continuar</span>
									<b><i class="icon ion-ios-arrow-round-forward"></i></b>
								</button>
							</div>
						</div>
						<span class="disclaimer">(*) EL MONTO DE LA LINEA AQUI INFORMADA NO CONSTITUYE UNA OFERTA. EL EFECTIVO OTORGAMIENTO DE LA MISMA SE ENCUENTRA SUJETA A EVALUACIÓN CREDITICIA, A LAS CONDICIONES PARTICULARES DE LAS OPERACIONES A SER GARANTIZADAS POR AVAL FEDERAL S.G.R., A LA PRESENTACIÓN DE LA DOCUMENTACIÓN NECESARIA Y AL CUMPLIMIENTO DE LA NORMATIVA VIGENTE. AVAL FEDERAL S.G.R. PODRÁ LIMITAR EL MONTO DE LA LÍNEA A GARANTIZAR O RECHAZARLA LUEGO DEL ANÁLISIS MENCIONADO.</span>
					</div>

					<div class="sect-resume-data">
						<section>
							<header class="resume-data-header">
								<h2>Paso 02<img src="assets/images/icon-bulb_01.svg" alt="icon bulb" style="max-width: 15px;"></h2>
							</header>
							<div class="resume-data-info">
								<div>
									<span>ACTIVO TOTAL</span>
									<p data-id="totalActive">$ 12.204.325</p>
								</div>

								<div>
									<span>PASIVO TOTAL</span>
									<p data-id="totalPasive">$ 3.523.00</p>
								</div>

								<div>
									<span>FACTURACIÓN BRUTA ANUAL</span>
									<p data-id="totalAnualBilling">$ 350.000</p>
								</div>

								<div>
									<span>IMPUESTO DE GANANCIAS PAGADO</span>
									<p data-id="incomeTaxPaid">$ 12.041</p>
								</div>

								<div>
									<span>RESULTADO DEL ULTIMO EJERCICIO</span>
									<p data-id="lastExerciseResult">$ 70.000</p>
								</div>
							</div>
							<a href="#" class="sect-resume-data-edit" id="btn-edit-data-2nd-sect">Editar información</a>
						</section>
					</div>
				</div>
				<!-- /2nd-section -->

				<!-- 3rd-section -->
				<div class="col-xs-12 col-md-8" id="third-sect">
					<div class="sect-main-data">
						<header class="third-section-header">
							<div class="step-marker">
								<span>Paso nro. 03</span>
								<ul>
									<li></li>
									<li></li>
									<li class="actual"></li>
								</ul>
							</div>
							<h2><img src="assets/images/icon-arrow-up.svg" alt="icon arrow"><span>Acceda a una asistencia máxima de ( * ): <b>$ 29.000</b></span></h2>
						</header>
						<div class="row">
							<div class="col-md-7">
								<div class="aval-box">
									<p>Aval para financiaciones bancarias, on simple avalada, descuento de cheques propios, pagaré bursátil, contratos comerciales.</p>
									<h3>$ 33.500 </h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="aval-box">
									<p>Aval para descuentos de cheques de terceros en mercado de valores y/o entidades financieras.</p>
									<h3>$ 40.000 </h3>
								</div>
							</div>
							<div class="col-md-5">
								<p class="call-to-action">Si está interesado en alguno de estos productos: <b>Dejanos tu contacto!</b></p>
								<button form="full-data" type="submit" class="submit-btn" id="third-sect-btn">
									<span>Ponerse en contacto</span>
									<b><i class="icon ion-md-call"></i></b>
								</button>
							</div>
						</div>
						<span class="disclaimer">(*) EL MONTO DE LA LINEA AQUI INFORMADA NO CONSTITUYE UNA OFERTA. EL EFECTIVO OTORGAMIENTO DE LA MISMA SE ENCUENTRA SUJETA A EVALUACIÓN CREDITICIA, A LAS CONDICIONES PARTICULARES DE LAS OPERACIONES A SER GARANTIZADAS POR AVAL FEDERAL S.G.R., A LA PRESENTACIÓN DE LA DOCUMENTACIÓN NECESARIA Y AL CUMPLIMIENTO DE LA NORMATIVA VIGENTE. AVAL FEDERAL S.G.R. PODRÁ LIMITAR EL MONTO DE LA LÍNEA A GARANTIZAR O RECHAZARLA LUEGO DEL ANÁLISIS MENCIONADO.</span>
					</div>
				</div>
				<!-- /3rd-section -->
			</div>
		</div>

		<!--Modernizer-->
		<script src="assets/js/modernizr.js"></script>

		<!-- Main-Scripts -->
		<script src="assets/js/jquery.3.2.1.min.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>
