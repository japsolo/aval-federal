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
								<h2>
									<span>Paso 01</span>
									<svg version="1.1" id="icon-person" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/999/xlink" x="0px" y="0px" width="20px" height="25px" viewBox="0 0 20 25" enable-background="new 0 0 20 25" xml:space="preserve">
										<path id="Page-1" fill="#FFFFFF" d="M17.018,16.275H3.684V15.29c0-2.19,4.445-3.396,6.667-3.396c2.222,0,6.666,1.205,6.666,3.396 V16.275z M9.602,4.683c1.957-0.367,3.643,1.295,3.271,3.224c-0.207,1.071-1.095,1.947-2.182,2.15 c-1.956,0.367-3.643-1.295-3.27-3.224C7.626,5.762,8.516,4.886,9.602,4.683z M17.777,1H2.222C0.989,1,0,1.986,0,3.19v15.333 c0,1.209,0.996,2.191,2.222,2.191h4.444L10,24l3.334-3.285h4.443C19,20.715,20,19.729,20,18.523V3.19C20,1.986,19,1,17.777,1z"/>
									</svg>
									<i class="icon ion-md-arrow-dropdown"></i>
								</h2>
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
				<div class="col-xs-12" id="second-sect">
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
									<span class="tooltip">Ver este dato en Estado de Situación Patrimonial del último ejercicio. Ingrese el Activo Total (Suma del Activo Corriente y No Corriente).</span>
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Pasivo total</span></label>
									<input form="full-data" type="text" name="totalPasive" autocomplete="totalPasive">
									<span class="tooltip">Ver este dato en Estado de Situación Patrimonial del último ejercicio. Ingrese el Pasivo Total (Suma del Pasivo Corriente y No Corriente).</span>
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Facturación bruta anual</span></label>
									<input form="full-data" type="text" name="totalAnualBilling" autocomplete="totalAnualBilling">
									<span class="tooltip">Ver este dato en Estado de resultado del último ejercicio rubro ventas. Si no cuenta con este dato, ponga cero (0).</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Impuesto de ganancias pagado</span></label>
									<input form="full-data" type="text" name="incomeTaxPaid" autocomplete="incomeTaxPaid">
									<span class="tooltip">Ingrese monto que se abona por dicho impuesto. Dicha información puede ser extraída del Estado de Resultado del último ejercicio, Estado de Evolución del Patrimonio Neto o bien de la Declaración Jurada de Impuesto a las Ganancias (último periodo fiscal).</span>
								</div>
								<div class="form-control">
									<label><i class="icon ion-md-help-circle"></i><span>Resultado del ultimo ejercicio</span></label>
									<input form="full-data" type="text" name="lastExerciseResult" autocomplete="lastExerciseResult">
									<span class="tooltip">Ver Resultado neto/final en Estado de Resultados del último ejercicio.</span>
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
							<header class="resume-data-header second-step">
								<h2>
									<span>Paso 02</span>
									<svg version="1.1" id="icon-bulb" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-7.5 -8 35 35" enable-background="new -7.5 -8 35 35" xml:space="preserve">
										<g>
											<g transform="translate(-177.000000, -89.000000)">
												<path fill="#ffffff" d="M195.289,108.746l3.091,3.109l2.436-2.436l-3.11-3.092L195.289,108.746z M199.895,99.881 h4.605v-3.683h-4.605V99.881z M192.296,89.214V81.46h-9.671v7.753c-2.886,1.676-4.835,4.787-4.835,8.365 c0,5.333,4.335,9.671,9.671,9.671c5.333,0,9.671-4.338,9.671-9.671C197.132,94,195.182,90.89,192.296,89.214z M169.5,99.881h4.605 v-3.683H169.5V99.881z M186.079,115.539h2.763v-4.605h-2.763V115.539z M173.184,109.426l2.435,2.43l3.091-3.098l-2.435-2.43 L173.184,109.426z"/>
											</g>
										</g>
									</svg>
									<i class="icon ion-md-arrow-dropdown"></i>
								</h2>
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
				<div class="col-xs-12" id="third-sect">
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
								<button form="full-data" type="button" class="submit-btn no-float" id="third-sect-btn">
									<span>Ponerse en contacto</span>
									<b><i class="icon ion-md-call"></i></b>
								</button>
							</div>
						</div>
						<span class="disclaimer">(*) EL MONTO DE LA LINEA AQUI INFORMADA NO CONSTITUYE UNA OFERTA. EL EFECTIVO OTORGAMIENTO DE LA MISMA SE ENCUENTRA SUJETA A EVALUACIÓN CREDITICIA, A LAS CONDICIONES PARTICULARES DE LAS OPERACIONES A SER GARANTIZADAS POR AVAL FEDERAL S.G.R., A LA PRESENTACIÓN DE LA DOCUMENTACIÓN NECESARIA Y AL CUMPLIMIENTO DE LA NORMATIVA VIGENTE. AVAL FEDERAL S.G.R. PODRÁ LIMITAR EL MONTO DE LA LÍNEA A GARANTIZAR O RECHAZARLA LUEGO DEL ANÁLISIS MENCIONADO.</span>
					</div>
				</div>
				<!-- /3rd-section -->

				<!-- 4th-section -->
				<div class="col-xs-12" id="fourth-sect">
					<p>Para ser contactado por nuestros oficiales de <br>cuenta, por favor verifique su información de contacto.</p>
					<div class="row">
						<div class="col-md-3">
							<div class="form-control up">
								<label class="up">Razón social Ingresada</label>
								<input form="full-data" type="text" name="finalDataRS" autocomplete="finalDataRS" value="Pedro" disabled>
							</div>
							<div class="form-control up">
								<label class="up">Email Ingresado</label>
								<input form="full-data" type="text" name="finalDataEmail" autocomplete="finalDataEmail" value="peter@email.com" disabled>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-control up">
								<label class="up">CUIT Ingresada</label>
								<input form="full-data" type="text" name="finalDataCuit" autocomplete="finalDataCuit" value="20-987034593-2" disabled>
							</div>
							<div class="form-control up">
								<label>Nombre de Contacto</label>
								<input form="full-data" type="text" name="finalDataName" autocomplete="finalDataContactName">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-control up">
								<label>Número de teléfono (opcional)</label>
								<input form="full-data" type="text" name="finalDataPhone" autocomplete="finalDataPhone">
							</div>
							<button form="full-data" type="button" class="submit-btn" id="fourth-sect-btn">
								<span>Verificar</span>
								<b><i class="icon ion-ios-arrow-round-forward"></i></b>
							</button>
						</div>
					</div>
					<span class="disclaimer">(*) EL MONTO DE LA LINEA AQUI INFORMADA NO CONSTITUYE UNA OFERTA. EL EFECTIVO OTORGAMIENTO DE LA MISMA SE ENCUENTRA SUJETA A EVALUACIÓN CREDITICIA, A LAS CONDICIONES PARTICULARES DE LAS OPERACIONES A SER GARANTIZADAS POR AVAL FEDERAL S.G.R., A LA PRESENTACIÓN DE LA DOCUMENTACIÓN NECESARIA Y AL CUMPLIMIENTO DE LA NORMATIVA VIGENTE. AVAL FEDERAL S.G.R. PODRÁ LIMITAR EL MONTO DE LA LÍNEA A GARANTIZAR O RECHAZARLA LUEGO DEL ANÁLISIS MENCIONADO.</span>
				</div>
				<!-- /4th-section -->

				<!-- 5th-section -->
				<div class="col-xs-12" id="fifth-sect">
					<section class="thanks-wrap">
						<figure><img src="assets/images/thanks.png" alt="Thanks for write"></figure>
						<p><b>Su mensaje ha sido enviado.</b> En breve un oficial de cuenta de Aval Federal SGR se pondrá en contacto con usted.</p>
					</section>
				</div>
				<!-- /5th-section -->
			</div>
		</div>

		<!--Modernizer-->
		<script src="assets/js/modernizr.js"></script>

		<!-- Main-Scripts -->
		<script src="assets/js/jquery.3.2.1.min.js"></script>
		<script src="assets/js/scripts.js"></script>
	</body>
</html>
