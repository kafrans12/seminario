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
        <div class="nav-wrapper orange darken-4">
          <a href="#!" class="brand-logo center">Compañia de Seguros</a>
        </div>
      </nav>
    </div>
    <div class="container">
        <div class="row grey lighten-3"> 
          <div class="row">
            <h4 class="col s12 center header">Solicitud afiliacion de trabajadores ARL</h4>
            <h5 class="col s12 light center header">FORMULARIO DEPENDIENTE</h5>
          </div>
        
          <form  class="col s12" method="post" action="procesa.php">
            <h5 class="col s12 left">Trámite</h5>
            <fieldset>
              <div class="row">
                <div class="input-field col s4">
                  <i class="material-icons prefix">assignment</i>
                  <select name="sel_afiliacion" id="sel_afiliacion">
                    <option value="" disabled selected>Seleccione tipo</option>
                    <option value="0">Afiliación</option>
                    <option value="1">Actualización</option>
                  </select>
                  <label for="sel_afiliacion">Trámite</label>
                </div>

                <div class="input-field col s4">
                  <i class="material-icons prefix">assignment_turned_in</i>
                  <select name="sel_actualizacion" id="sel_actualizacion">
                    <option value="" disabled selected>Seleccione Tipo</option>
                    <option value="DGEN">Datos Generales</option>
                    <option value="TNDO">Tipo y número de documento</option>
                  </select>
                  <label for="sel_actualizacion">Tipo Actualización</label>
                </div>
                <div class="input-field col s4">
                  <i class="material-icons prefix">date_range</i>
                  <input id="fecha_diligencia" name="fecha_diligencia" type="date" class="datepicker">
                  <label for="fecha_diligencia">Fecha de Diligenciamiento</label>
                </div>
              </div>
            </fieldset>
            <br>
            <h5 class="col s12 left">Información del Empleador</h5>
            <fieldset>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">credit_card</i>
                  <select name="sel_doc_emp" id="select_doc_emp">
                    <option value="" disabled selected>Seleccione su documento</option>
                    <option value="C">Cédula de Ciudadania</option>
                    <option value="E">Cédula de Extranjeria</option>
                    <option value="N">NIT</option>
                    <option value="P">Pasaporte</option>
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
                  <input id="razon_social" id="razon_social" type="number" class="validate">
                  <label for="num_doc">Razón social o Nombre</label>
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
                    <input name="num_doc_repre" id="num_doc_representante" type="number" class="validate">
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
                  <select name="sel_actividad" id="sel_actividad">
                    <option value="" disabled="" selected="">Seleccione Empresa</option>
                    <option value="1">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR EN ESTABLECIMIENTOS NO ESPECIALIZADOS CON SURTIDO COMPUESTO PRINCIPALMENTE POR PRODUCTOS DIFERENTES DE ALIMENTOS (VIVERES EN GENERAL), BEBIDAS Y TABACOS HACE REFERENCIA A EMPRESAS DEDICADAS A LA VENTA AL MENUDE</option>
                    <option value="2">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE FRUTAS Y VERDURAS, EN ESTABLECIMIENTOS ESPECIALIZADOS</option>
                    <option value="3">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE LECHE, PRODUCTOS LACTEOS Y HUEVOS EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE LA VENTA SIN AUTO TRANSPORTE DE LECHE</option>
                    <option value="4">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE CARNES, PRODUCTOS CARNICOS, PESCADOS Y PRODUCTOS DE MAR</option>
                    <option value="5">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE PRODUCTOS DE CONFITERIA EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE LA VENTA DE DULCES, CHOCOLATES Y SIMILARES</option>
                    <option value="6">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE BEBIDAS Y PRODUCTOS DEL TABACO EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE CIGARRERIAS</option>
                    <option value="7">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE OTROS PRODUCTOS ALIMENTICIOS NCP, EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE LA VENTA DE ACEITES Y MANTECAS EN GENERAL, VENTA DE PAN Y PASTELES</option>
                    <option value="8">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE PRODUCTOS FARMACEUTICOS, MEDICINALES, Y ODONTOLOGICOS; ARTICULOS DE PERFUMERIA, COSMETICOS Y DE TOCADOR EN ESTABLECIMIENTOS ESPECIALIZADOS HACE REFERENCIA A EMPRESAS DEDICADAS A LA VENTA EN FARMACIAS, DROGUE</option>
                    <option value="9">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE PRODUCTOS TEXTILES EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE PRODUCTOS TEXTILES ELABORADAS CON FIBRAS NATURALES, ARTIFICIALES Y SINTETICAS, LOS HILOS, LANAS ETC.</option>
                    <option value="10">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE PRENDAS DE VESTIR Y SUS ACCESORIOS</option>
                    <option value="11">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE TODO TIPO DE CALZADO, ARTICULOS DE CUERO Y SUCEDANEOS DEL CUERO, EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE LA VENTA DE ARTICULOS PARA ZAPATERIA</option> 
                    <option value="12">EMPRESAS DEDICADAS AL COMERCIO AL POR MENOR DE ELECTRODOMESTICOS EN ESTABLECIMIENTOS ESPECIALIZADOS INCLUYE ARTICULOS ELECTRICOS, MATERIALES, RECEPTORES DE RADIO Y/O TELEVISION, REFRIGERADORES, LAVADORAS, ESTUFAS Y SIMILARES</option>
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
                  <select name="sel_vinculacion_t" id="sel_vinculacion_t">
                    <option value="" disabled="" selected="">Seleccione su Vinculación</option>
                    <option value="01">EMPLEADA SERVICIO DOMESTICO,MAYORDOMO,AUXILIAR ENFERMERIA,CONDUCTOR DE FAMILIA</option>
                    <option value="02">TRABAJADORES DEPENDIENTES</option>
                    <option value="03">ASOCIADOS COOPERATIVAS DE TRABAJO ASOCIADO</option>
                    <option value="04">CONDUCTORES DE SERVICIO PÚBLICO</option>
                    <option value="05">MADRES O PADRES COMUNITARIOS</option>
                    <option value="06">ESTUDIANTE EN PRÁCTICA DECRETO 055 DE 2015</option>
                    <option value="07">APRENDIZ SENA</option>
                    <option value="08">PRACTICANTES DE POST-GRADOS EN SALUD</option>
                    <option value="09">TRABAJADORES AGREMIADOS</option>
                    <option value="010">TRABAJADORES DE LA COOPERATIVA MULTIACTIVA</option>
                    <option value="011">TAXISTA</option> 
                    <option value="012">CONDUCTOR DE CARGA</option>
                  </select>
                  <label for="sel_vinculacion_t">Tipo de Vinculación</label>
                </div>
              </div>    

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">credit_card</i>
                      <select name="sel_doc_t" id="sel_doc_t">
                        <option value="" disabled selected>Seleccione su documento</option>
                        <option value="1">Cédula de Ciudadania</option>
                        <option value="2">Tarjeta de Identidad</option>
                        <option value="3">Cédula de Extranjeria</option>
                        <option value="4">Pasaporte</option>
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
                      <input name="fecha_nac" id="fecha_nac" type="date" class="datepicker">
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
                      <select name="sel_sexo_t" id="sel_sexo_t">
                        <option value="" disabled selected>Seleccione tipo</option>
                        <option value="0">Hombre</option>
                        <option value="1">Mujer</option>
                        <option value="2">Otro</option>
                      </select>
                      <label for="sel_sexo_t">Sexo</label>
                    </div>

                    <div class="input-field col s6">
                      <i class="material-icons prefix">attach_money</i>
                      <select name="sel_afiliacion_t" id="sel_afiliacion_t">
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="S">SI</option>
                        <option value="N">NO</option>
                      </select>
                      <label for="sel_afiliacion_t">Pensionado</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">healing</i>
                      <select name="sel_regimen_t" id="sel_regimen_t">
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="S">SI</option>
                        <option value="N">NO</option>
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
                      <input name="ciu_t" id="ciu_t" type="text" class="validate">
                      <label for="ciu_t">Ciudad o Municipio</label>
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
                      <input id="email_res" type="email" class="validate">
                      <label for="email_res">Correo Personal</label>
                    </div>
                    <div class="input-field col s4">
                      <i class="material-icons prefix">tv</i>
                      <select name="sel_teletrabajo_t" id="sel_teletrabajo_t">
                        <option value="" disabled selected>Seleccione respuesta</option>
                        <option value="S">SI</option>
                        <option value="N">NO</option>
                      </select>
                      <label for="sel_teletrabajo_t">Teletrabajador</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">person</i>
                      <input name="ocupacion_t" id="ocupacion_t" type="text" class="validate">
                      <label for="ocupacion">Ocupación/Cargo Actual</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">attach_money</i>
                      <input id="num_doc" type="number" class="validate">
                      <label for="num_salario">Salario</label>
                    </div>
                  </div>
                </div>
            </fieldset>

            <div class="row center" >
              <div class="input-field col s5">
                <button class="btn waves-effect red darken-3 btn-large" style="width:100%" type="submit" name="action">Guardar Preafiliación<i class="material-icons right">send</i>
                </button>
              </div>  
              <div class="input-field col s5">
                  <button class="btn waves-effect red darken-3 btn-large" style="width:100%" type="reset" name="action">Limpiar Formulario<i class="material-icons right">clear_all</i>
                  </button>
              </div>
            </div>

          </form>
      </div>
    </div>
  </body>
</html>