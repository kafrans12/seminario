<head>
	<meta charset="utf-8">
  <title>FORMULARIO PHP</title>
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

</head>
<body style="background-color: #fff8e1;">

<?php

	$file=fopen("archivo.txt", "a");
	fwrite($file,"***".PHP_EOL);
+	fwrite($file,"-Info Empleador".";".$_POST['sel_doc_emp'].";".$_POST['num_doc_emp'].";".$_POST['razon_social'].";".$_POST["nom_repre"].";".$_POST["num_doc_repre"].PHP_EOL);
	fwrite($file,"-Info Centro Trabajo".";".$_POST['depto'].";".$_POST['municipio'].";".$_POST['nom_sede'].";".$_POST["dir_sede"].";".$_POST["sel_actividad"].PHP_EOL);
	fwrite($file,"-Info Trabajador".";".$_POST['sel_vinculacion_t'].";".$_POST['sele_doc_t'].";".$_POST['num_doc_t'].";".$_POST["pri_apellido_t"].";".$_POST["seg_apellido_t"].";".$_POST["pri_nombre_t"].";".$_POST["seg_nombre_t"].";".$_POST["fecha_nac"].";".$_POST["nacionalidad_t"].";".$_POST["sel_sexo_t"].";".$_POST["sel_pension_t"].";".$_POST["sel_regimen_t"].";".$_POST["eps_t"].";".$_POST["dep_t"].";".$_POST["mun_t"].";".$_POST["dir_t"].";".$_POST["tel_t"].";".$_POST["email_t"].";".$_POST["sel_teletrabajo_t"].";".$_POST["ocupacion_t"].";".$_POST["num_salario"].";".PHP_EOL);
	fwrite($file,"***".PHP_EOL);

?>
 	<div class="container">
            <div class="row grey lighten-5">            
               <div class="row">
                    <h3 class="col s12 center header">Solicitud de afiliacion de trabajadores ARL</h3>
                    <h5 class="col s12 light center header">Usted ha registrado los siguientes datos</h5>
                </div>            
                <div class="col s12">
                	<br><br>
                	<h4 class="col s12 light center header">Información del Empleador</h4>
                    <table class="striped centered responsive-table">
                        <thead>
                          <tr>
                              <th >Dato Pedido</th>
                              <th >Dato Ingresado</th>                              
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Documento Empleador</td>
                            <td><?php echo $_POST['sel_doc_emp'];?></td>                            
                          </tr>
                          <tr>
                            <td>Número Doc</td>
                            <td><?php echo $_POST['num_doc_emp'];?></td>                            
                          </tr>
                          <tr>
                            <td>Razon Social</td>
                            <td><?php echo $_POST['razon_social'];?></td>                            
                          </tr>
                          <tr>
                            <td>Nombre Representante</td>
                            <td><?php echo $_POST['nom_repre'];?></td>                            
                          </tr>
                          <tr>
                            <td>Número de Documento</td>
                            <td><?php echo $_POST['num_doc_repre'];?></td>                            
                          </tr>
                        </tbody>
                      </table>
                      <br><br>
                </div>
                <div class="col s12">
                      <h4 class="col s12 light center header">Información del centro de Trabajo</h4>
                       <table class="striped centered responsive-table">
                        <thead>
                          <tr>
                              <th >Dato Pedido</th>
                              <th >Dato Ingresado</th>                              
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Departamento</td>
                            <td><?php echo $_POST['depto'];?></td>                            
                          </tr>
                          <tr>
                            <td>Municipio</td>
                            <td><?php echo $_POST['municipio'];?></td>                            
                          </tr>
                          <tr>
                            <td>Nombre Sede</td>
                            <td><?php echo $_POST['nom_sede'];?></td>                            
                          </tr>
                          <tr>
                            <td>Dirección Sede</td>
                            <td><?php echo $_POST['dir_sede'];?></td>                            
                          </tr>
                          <tr>
                            <td>Actividad de la Empresa</td>
                            <td><?php echo $_POST['sel_actividad'];?></td>                            
                          </tr>
                        </tbody>
                      </table>
                      <br><br>
                </div>
                <div class="col s12">
                      <h4 class="col s12 light center header">Información del Trabajador</h4>
                       <table class="striped centered responsive-table">
                        <thead>
                          <tr>
                              <th >Dato Pedido</th>
                              <th >Dato Ingresado</th>                              
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Vinculación</td>
                            <td><?php echo $_POST['sel_vinculacion_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Documento</td>
                            <td><?php echo $_POST['sel_doc_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Numero Doc</td>
                            <td><?php echo $_POST['num_doc_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Primer Apellido</td>
                            <td><?php echo $_POST['pri_apellido_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Segundo Apellido</td>
                            <td><?php echo $_POST['seg_apellido_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Primer Nombre</td>
                            <td><?php echo $_POST['pri_nombre_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Segundo Nombre</td>
                            <td><?php echo $_POST['seg_nombre_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Fecha Nacimiento</td>
                            <td><?php echo $_POST['fecha_nac'];?></td>                            
                          </tr>
                          <tr>
                            <td>Nacionalidad</td>
                            <td><?php echo $_POST['nacionalidad_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Sexo</td>
                            <td><?php echo $_POST['sel_sexo_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Pension</td>
                            <td><?php echo $_POST['sel_pension_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Segundo Apellido</td>
                            <td><?php echo $_POST['seg_apellido_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Régimen Subsidiado</td>
                            <td><?php echo $_POST['sel_regimen_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>EPS</td>
                            <td><?php echo $_POST['eps_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Departamento</td>
                            <td><?php echo $_POST['dep_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Municipio</td>
                            <td><?php echo $_POST['mun_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Dirección</td>
                            <td><?php echo $_POST['dir_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Telefono</td>
                            <td><?php echo $_POST['tel_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $_POST['email_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Teletrabajo</td>
                            <td><?php echo $_POST['sel_teletrabajo_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Ocupación</td>
                            <td><?php echo $_POST['ocupacion_t'];?></td>                            
                          </tr>
                          <tr>
                            <td>Salario</td>
                            <td><?php echo $_POST['num_salario'];?></td>                            
                          </tr>
                        </tbody>
                      </table>                     
                </div>
            </div>               
        </div>
    </body>    
</html>
<?php
	fclose($file);
?>