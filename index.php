<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Formulario Registro Estudiantil</title>
    
    <!--SCRIPT-->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper orange darken-1">
          <a href="#!" class="brand-logo center">Compañia de Seguros</a>
        </div>
      </nav>
    </div>
    <div class="container">
        <div class="row grey lighten-5"> 
          <div class="row">
            <h4 class="col s12 center header">Solicitud afiliacion de trabajadores ARL</h4>
            <h5 class="col s12 light center header">FORMULARIO DEPENDIENTE</h5>
          </div>
        
          <form  class="col s12" method="post" action="procesa.php">
            <br>
            <h5 class="col s12 left">Información del Empleador</h5>
            <fieldset>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">credit_card</i>
                  <select name="sel_doc_emp" id="select_doc_emp" required>
                    <option value="" disabled selected>Seleccione su documento</option>
                    <option value="C.CIUDADANIA">Cédula de Ciudadania</option>
                    <option value="C.EXTRANJERIA">Cédula de Extranjeria</option>
                    <option value="NIT">NIT</option>
                    <option value="PASAPORTE">Pasaporte</option>
                  </select>
                  <label for="sel_doc_emp">Tipo de Documento Empresa</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">confirmation_number</i>
                  <input name="num_doc_emp" id="num_doc_emp" type="number" class="validate">
                  <label for="num_doc_emp">Número de Documento</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s10">
                  <i class="material-icons prefix">account_balance</i>
                  <input name="razon_social" id="razon_social" type="text" class="validate">
                  <label for="razon_social">Razón social o Nombre</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_box</i>
                    <input name="nom_repre" id="nom_repre" type="text" class="validate">
                    <label for="nom_repre">Nombre Representante Legal</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">card_membership</i>
                    <input name="num_doc_repre" id="num_doc_repre" type="number" class="validate">
                    <label for="num_doc_repre">Número de Documento</label>
                </div>
              </div>
            </fieldset>
            <br>
            <h5 class="col s12 left">Información centro de trabajo</h5>
            <fieldset>
              <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">spa</i>
                    <input name="depto" id="depto" type="text" class="validate">
                    <label for="nombre">Departamento</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">mms</i>
                    <input name="municipio" id="municipio" type="text" class="validate">
                    <label for="municipio">Municipio</label>
                </div>

              </div>

              <div class="row">

                <div class="input-field col s6">
                  <i class="material-icons prefix">work</i>
                  <input name="nom_sede" id="nom_sede" type="text" class="validate">
                  <label for="nom_sede">Nombre de la sede</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">store</i>
                  <input name="dir_sede" id="dir_sede" type="text" class="validate">
                  <label for="dir_sede">Dirección de la sede</label>
                </div>

              </div>
              <div class="row">        
                <div class="input-field col s10">
                  <i class="material-icons prefix">business</i>
                  <select name="sel_actividad" id="sel_actividad" required>
                    <option value="" disabled="" selected="">Seleccione Empresa</option>
                    <option value="IND. ALIMENTARIAS">INDUSTRIAS ALIMENTARIAS</option>
                    <option value="EMP. INTERNET">EMPRESAS DE SERVICIOS DE INTERNET </option>
                    <option value="EMP. ENSAMBLAJE">EMPRESAS ENSAMBLAJE </option>
                    <option value="HOSPITAL">HOSPITALES</option>
                    <option value="EMP. TRANSPORTES">EMPRESAS DE TRANSPORTES</option>
                    <option value="JUGUETERIA">JUGUETERIA</option>
                    <option value="SUPERMERCADO">SUPERMERCADO</option>
                    <option value="EMP. ELECTRODOMESTICOS">EMPRESA DE ELECTRODOMESTICOS</option>
                    <option value="LIBRERIA">LIBRERIAS</option>
                    <option value="CONCESIONARIO">CONCESIONARIOS</option>
                    <option value="FAB. ROPA Y CALZADO">FABRICAS DE ROPA Y CALZADO</option> 
                    <option value="CONSTRUCTORA">CONSTRUCTORAS</option>
                  </select>
                  <label for="sel_actividad">Descripción de la actividad economica</label>
                </div>
              </div>
            </fieldset>
            <br><br><br>
            <h5 class="col s12 left">Información del trabajador</h5>
            <fieldset>
              <div class="row">
                <div class="input-field col s9">
                  <i class="material-icons prefix">group_work</i>
                  <select name="sel_vinculacion_t" id="sel_vinculacion_t" required>
                    <option value="" disabled="" selected="">Seleccione su Vinculación</option>
                    <option value="SERVICIO DOMESTICO">EMPLEADA SERVICIO DOMESTICO</option>
                    <option value="MAYORDOMO">MAYORDOMO</option>
                    <option value="AUX. ENFERMERIA">AUXILIAR ENFERMERIA</option>
                    <option value="DEPENDIENTE">TRABAJADORES DEPENDIENTES</option>
                    <option value="ASOCIADOS COOPERATIVAS">ASOCIADOS COOPERATIVAS DE TRABAJO ASOCIADO</option>
                    <option value="CONDUCTORES SERVICIO PUBLICO">CONDUCTORES DE SERVICIO PÚBLICO</option>
                    <option value="MADRE O PADRE COMUNITARIO">MADRES O PADRES COMUNITARIOS</option>
                    <option value="ESTUDIANTE PRACTICA">ESTUDIANTE EN PRÁCTICA</option>
                    <option value="APRENDIZ SENA">APRENDIZ SENA</option>
                    <option value="PRACTICANTE POSTGRADO">PRACTICANTES DE POST-GRADOS </option>
                    <option value="AGREMIADOS">TRABAJADORES AGREMIADOS</option>
                    <option value="COOPERATICVA MULTIACTIVA">TRABAJADORES DE LA COOPERATIVA MULTIACTIVA</option>
                    <option value="TAXISTA">TAXISTA</option> 
                    <option value="CODUCTOR CARGA">CONDUCTOR DE CARGA</option>
                  </select>
                  <label for="sel_vinculacion_t">Tipo de Vinculación</label>
                </div>
              </div>    

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">credit_card</i>
                      <select name="sel_doc_t" id="sel_doc_t" required>
                        <option value="" disabled selected>Seleccione su documento</option>
                        <option value="C.CIUDADANIA">Cédula de Ciudadania</option>
                        <option value="T. IDENTIDAD">Tarjeta de Identidad</option>
                        <option value="C.EXTRANJERIA">Cédula de Extranjeria</option>
                        <option value="PASAPORTE">Pasaporte</option>
                      </select>
                      <label for="sel_doc_t">Tipo de Documento</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">confirmation_number</i>
                      <input name="num_doc_t" id="num_doc_t" type="number" class="validate">
                      <label for="num_doc_t">Número Documento</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="pri_apellido_t" id="pri_apellido_t" type="text" class="validate">
                        <label for="pri_apellido_t">Primer Apellido</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="seg_apellido_t" id="seg_apellido_t" type="text" class="validate">
                        <label for="seg_apellido_t">Segundo Apellido</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_box</i>
                        <input name="pri_nombre_t" id="pri_nombre_t" type="text" class="validate">
                        <label for="pri_nombre_t">Primer Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="seg_nombre_t" id="seg_nombre_t" type="text" class="validate">
                        <label for="seg_nombre_t">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">date_range</i>
                      <input name="fecha_nac" id="fecha_nac" type="date" class="datepicker" required>
                      <label for="fecha_nac">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">public</i>
                      <input name="nacionalidad_t" id="nacionalidad_t" type="text" class="validate">
                      <label for="nacionalidad_t">Nacionalidad</label>
                    </div>
                    
                  </div> 

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">people</i>
                      <select name="sel_sexo_t" id="sel_sexo_t" required>
                        <option value="" disabled selected>Seleccione tipo</option>
                        <option value="HOMBRE">Hombre</option>
                        <option value="MUJER">Mujer</option>
                        <option value="OTRO">Otro</option>
                      </select>
                      <label for="sel_sexo_t">Sexo</label>
                    </div>

                    <div class="input-field col s6">
                      <i class="material-icons prefix">attach_money</i>
                      <select name="sel_pension_t" id="sel_pension_t" required>
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                      <label for="sel_pension_t">Pensionado</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">healing</i>
                      <select name="sel_regimen_t" id="sel_regimen_t" required>
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                      <label for="sel_regimen_t">EPS Régimen Subsidiado</label>
                    </div>

                    <div class="input-field col s6">
                      <i class="material-icons prefix">local_hospital</i>
                      <input name="eps_t" id="eps_t" type="text" class="validate">
                      <label for="eps_t">EPS Actual</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">spa</i>
                      <input name="dep_t" id="dep_t" type="text" class="validate">
                      <label for="dep_t">Departamento</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">mms</i>
                      <input name="mun_t" id="mun_t" type="text" class="validate">
                      <label for="mun_t">Ciudad o Municipio</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">home</i>
                      <input name="dir_t" id="dir_t" type="text" class="validate">
                      <label for="dir_t">Dirección</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">phone</i>
                      <input name="tel_t" id="tel_t" type="text" class="validate">
                      <label for="tel_t">Teléfono</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input name="email_t" id="email_t" type="email" class="validate">
                      <label for="email_t">Correo Personal</label>
                    </div>
                    <div class="input-field col s4">
                      <i class="material-icons prefix">tv</i>
                      <select name="sel_teletrabajo_t" id="sel_teletrabajo_t" required>
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>
                      </select>
                      <label for="sel_teletrabajo_t">Teletrabajador</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">person</i>
                      <input name="ocupacion_t" id="ocupacion_t" type="text" class="validate">
                      <label for="ocupacion_t">Ocupación/Cargo Actual</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">attach_money</i>
                      <input name="num_salario" id="num_salario" type="number" class="validate">
                      <label for="num_salario">Salario</label>
                    </div>
                  </div>
                </div>
            </fieldset>

            <div class="row" >
              <div class="input-field col s6">
                <button class="btn waves-effect orange darken-1 btn-large" style="width:100%" type="submit" name="action">Guardar Preafiliación<i class="material-icons right">send</i>
                </button>
              </div>  
              <div class="input-field col s6 ">
                  <button class="btn waves-effect orange darken-1 btn-large" style="width:100%" type="reset" name="action">Limpiar Formulario<i class="material-icons right">clear_all</i>
                  </button>
              </div>
            </div>

          </form>
      </div>
    </div>
  </body>
</html>