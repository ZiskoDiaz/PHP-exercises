<!DOCTYPE html>
<html lang="ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form name="tabla" action="ingreso.php" method="POST">
				<table class="tabla1" width="55%" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td class="boton">INGRESO A LOCAL</td>
					</tr>
					<tr>
						<td class="tdTitulo"> VALIDACION</td>
					</tr>
					<tr>
						<td><table class="tabla2" width="100%"  cellspacing="0" cellpadding="0">
					<tr>
						<td width="38%">Ingrese su edad</td>
						<td width="80%"><label>
						  <input type="text" name="edad" id="edad" size="20"/>
						</label></td>

					</tr>
					<tr>
						<td class="boton" colspan="2">

						<input type="submit" name="registro" id="registro" value="CALCULAR" />
					</td>
					</tr>
				</table>
			</form>

      <?php
      error_reporting(0);

      $i=1;
      $edad=$_POST ['edad'];

      if ($edad>=18)
      {

        echo "<script> alert ('Puede Ingresar')</script>";
      }

      else{

        echo "<script> alert ('ALERTA: NO Puede Ingresar')</script>";
      }

      ?>

  </body>
</html>
