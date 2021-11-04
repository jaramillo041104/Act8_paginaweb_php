<body>
	<?php include("headerr.php");?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos al Registro Civil</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="formpost.php" method="post">
						Nombre del empleado : <input type="text" name="nombre"><br><br>
						Fecha de nacimiento : <input type="text" name="email"><br><br>
						Direccion : <input type="text" name="email"><br><br>
						<input type="submit" value="Enviar">
					</form>
					
				</article>
			</div>

			<?php include("asidee.php"); ?>
						
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<?php include("footerr.php");?>
</body>
</html>