<?php

//OBTENER JSON
$input_data = file_get_contents('php://input');
$json = json_decode($input_data, true);

//contenido modal cliente

if (!empty($json['operacionCliente']) && $json['operacionCliente'] == 1) {

  sleep(2);
  $id_cliente = (int) $json['id_cliente'];


  $ClienteTipoDoc = "";
  $ClienteDni = "";

  $ClienteNombre = "";
  $ClienteNomComercial = "";
  $razonsocial = "";
  $ClienteDireccion = "";
  $ClienteDepartamento = "";
  $ClienteProvincia = "";
  $ClienteDistrito = "";
  $ClienteTelefono = "";
  $ClienteFechaNac = "";
  $ClienteEmail = "";
  $ClienteCodigo = "";
  $ClienteIdTipoContacto = "";
  $ClienteNotas = "";





  // Lógica para redirigir al botón correspondiente

  if (!empty($id_cliente)) {

    $id_empresa = 2;

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.negocia.pe/webservice/app_erp/clientes/ws_clientes.php',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => '{
        "entry": [
            {
                "id_empresa": ' . $id_empresa . ',
                "limit": 25, 
                "id_cliente": ' . $id_cliente . '
            }
        ],
        "hub_verify_token": "neg-tkverify-app"
    }',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer hub-verify-token-app'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);


    // Decodificar el JSON recibido
    $data = json_decode($response, true);

    // Verificar si la decodificación fue exitosa
    if (json_last_error() === JSON_ERROR_NONE) {
      // Acceder a los datos del JSON
      $cliente = $data['data'][0]; // Acceder al primer elemento del array "data"
      $ClienteNombre = $cliente['ClienteNombre'];
      $ClienteDni = $cliente['ClienteDni'];
      $ClienteTipoDoc = $cliente['ClienteTipoDoc'];
      $ClienteNomComercial = $cliente['ClienteNomComercial'];
      $razonsocial = $cliente['ClienteNombre'];
      $ClienteDireccion = $cliente['ClienteDireccion'];
      $ClienteDepartamento = $cliente['ClienteDepartamento'];
      $ClienteProvincia = $cliente['ClienteProvincia'];
      $ClienteDistrito = $cliente['ClienteDistrito'];
      $ClienteTelefono = $cliente['ClienteTelefono'];
      $ClienteFechaNac = $cliente['ClienteFechaNac'];
      $ClienteEmail = $cliente['ClienteEmail'];
      $ClienteCodigo = $cliente['ClienteCodigo'];
      $ClienteIdTipoContacto = $cliente['ClienteIdTipoContacto'];
      $ClienteNotas = $cliente['ClienteNotas'];




      // Acceder a las etiquetas
      $etiquetas = $cliente['ArrayEtiquetas'];
      foreach ($etiquetas as $etiqueta) {
        $EtqId = $etiqueta['EtqId'];
        $EtqColor = $etiqueta['EtqColor'];
        $EtqNombre = $etiqueta['EtqNombre'];


        // Aquí puedes hacer lo que necesites con las etiquetas
      }




      // Imprimir los valores del JSON
      // echo "ClienteId: " . $cliente['ClienteId'] . "<br>";
      // echo "ClienteDni: " . $cliente['ClienteDni'] . "<br>";
      // echo "ClienteNombre: " . $cliente['ClienteNombre'] . "<br>";
      // echo "ClienteTelefono: " . $cliente['ClienteTelefono'] . "<br>";
      // echo "ClienteEmail: " . $cliente['ClienteEmail'] . "<br>";
      // echo "ClienteDireccion: " . $cliente['ClienteDireccion'] . "<br>";
      // echo "ClienteFechaNac: " . $cliente['ClienteFechaNac'] . "<br>";
      // echo "ClienteNotas: " . $cliente['ClienteNotas'] . "<br>";

      // // Imprimir las etiquetas (ArrayEtiquetas)
      // echo "<h3>Etiquetas:</h3>";
      // foreach ($cliente['ArrayEtiquetas'] as $etiqueta) {
      //     echo "EtqId: " . $etiqueta['EtqId'] . "<br>";
      //     echo "EtqColor: " . $etiqueta['EtqColor'] . "<br>";
      //     echo "EtqNombre: " . $etiqueta['EtqNombre'] . "<br><br>";
      // }
    } else {
      // Manejar errores de decodificación JSON
      echo "Error al decodificar el JSON: " . json_last_error_msg();
    }

  }


  ?>


  <div class="fcRegistro_container ">



    <div class="fcRegistro_steps ">





      <div class="fcclientes-eempresa-persona">
        <div class="btn ">
          <button type="button" id="fcc_btn_persona" class="fcclientes-button-next-btn" onclick="fcc_Empresa_Persona('1')">
          <img src="iconos\Icono ContactopersonaSVG.svg" alt="Icono">
           Persona
          </button>
        </div>
        <div class="btn">
          <button type="button" id="fcc_btn_empresa" class="fcclientes-button-next-btn" onclick="fcc_Empresa_Persona('6')">
          <img src="iconos\Icono ContactoEmpresaSVG.svg" alt="Icono">Empresa
          </button>
        </div>
      </div>

      <!-- fcc_CA_formulario -->

      <!-- Single form with dynamic fields -->
      <div id="fcc_formContainer" class="fcclientes-form" style="display:none;">
        <form id="fcc_formContainer" class="fromulario">


          <div class="row" style="--bs-gutter-x: 10px;">
            <div class="col-4">
              <label for="fcc_tipo_doc">Tipo de Doc.</label>
              <select name="fcc_tipo_doc" id="fcc_tipo_doc">
                <option value="">Seleccione</option>
                <option value="1" <?php echo ($ClienteTipoDoc == 1) ? 'selected="selected"' : ''; ?>>DNI</option>
                <option value="6" <?php echo ($ClienteTipoDoc == 6) ? 'selected="selected"' : ''; ?>>Ruc</option>
                <option value="4" <?php echo ($ClienteTipoDoc == 4) ? 'selected="selected"' : ''; ?>>Carnet De Extranjeria
                </option>
                <option value="7" <?php echo ($ClienteTipoDoc == 7) ? 'selected="selected"' : ''; ?>>Pasaporte</option>
                <option value="100" <?php echo ($ClienteTipoDoc == 100) ? 'selected="selected"' : ''; ?>>Ninguno</option>
              </select>
            </div>
            <div class="col-4">
              <label for="fcc_dni">N° Documento</label>
              <input type="text" id="fcc_dni" name="fcc_dni" value=" <?php echo $ClienteDni ?> ">
            </div>
            <div class="col-4">
              <button id="fcclientes_btn_cliente_proveedor_consult" type="button"
                style="margin-top: 23px; ">Consultar</button>
            </div>
          </div>

          <div id="fcclientes_personaFields" class="form-fields">
            <label for="fcc_name">Nombre:</label>
            <input type="text" id="fcc_name" name="fcc_name" value="<?php echo $ClienteNombre; ?>">

          </div>


          <!-- Campos para Empresa -->
          <div id="fcclientes_empresaFields" class="form-fields" style="display:none;">
            <div class="fcclientescampos">
              <label for="fcc_nombre_comercial">Nombre Comercial:</label>
              <input type="text" id="fcc_nombre_comercial" name="fcc_nombre_comercial"
                value=" <?php echo $ClienteNomComercial ?>">
            </div>
            <div class="fcclientescampos">
              <label for="fcc_razon">Razón Social:</label>
              <input type="text" id="fcc_razon" name="fcc_razon" value="<?php echo $razonsocial; ?>">
            </div>
          </div>








          <!--DIRECCION 1-->
          <div class="col-12 ">
            <div style="display: flex;justify-content: space-between;">
              <label>Dirección</label> <!--CLICK MORTRAR - DIRECCION (2)-->
              <!--MULTIPLE-->
              <div type="button" onclick="agregar_direccion();">
                <!-- <i class="fcclientes-direccion fa fa-plus-circle"> </i> -->
                <a class="fcclientes-direccion">
                  + Agregar otra dirección</a>
              </div>
              <div id="fcclientes_agregar_cliente_proveedor_direccion_1" style="display: none;">
                <!-- <i class="fcclientes-direccion fa fa-plus-circle" type="button"></i> -->
                <a class="fcclientes-direccion" href="javascript:void(0)" id="fcclientes_cliente_nueva_direccion_1"> Agregar otra dirección</a>
              </div>
            </div>
            <textarea class=" fcclientes-imput form-control autosize" rows="1" id="fcclientes_direccion_cliente_proveedor"
              name="fcclientes_direccion_cliente_proveedor"><?php echo $ClienteDireccion ?></textarea>

          </div>

          <!-- ubigeo -->

          <div class="fccubigeo" id="fcclientes_bloque_ubigeo">
            <select id="fcclientes_ubigeo_contacto_1" disabled>
              <option value=" <?php echo $ClienteDepartamento ?>" hidden>Buscar Ubigeo</option>
            </select>
          </div>

          <!-- Departamento, Provincia, Distrito -->
          <div class="col-12 fccdepartamentos">

            <div style="flex: 1;">
              <label>Departamento</label>
              <select name="fccubigeo_departamento_1" id="fccubigeo_departamento_1" class="fccinput-sm">
                <option value="0">Departamento</option> <!-- Eliminado el atributo "hidden" -->
                <option value="01" <?php echo ($ClienteDepartamento == '01') ? 'selected="selected"' : ''; ?>>Amazonas
                </option>
                <option value="02" <?php echo ($ClienteDepartamento == '02') ? 'selected="selected"' : ''; ?>>Áncash
                </option>
                <option value="03" <?php echo ($ClienteDepartamento == '03') ? 'selected="selected"' : ''; ?>>Apurímac
                </option>
                <option value="04" <?php echo ($ClienteDepartamento == '04') ? 'selected="selected"' : ''; ?>>Arequipa
                </option>
                <option value="05" <?php echo ($ClienteDepartamento == '05') ? 'selected="selected"' : ''; ?>>Ayacucho
                </option>
                <option value="06" <?php echo ($ClienteDepartamento == '06') ? 'selected="selected"' : ''; ?>>Cajamarca
                </option>
                <option value="08" <?php echo ($ClienteDepartamento == '08') ? 'selected="selected"' : ''; ?>>Cusco</option>
                <option value="09" <?php echo ($ClienteDepartamento == '09') ? 'selected="selected"' : ''; ?>>Huancavelica
                </option>
                <option value="10" <?php echo ($ClienteDepartamento == '10') ? 'selected="selected"' : ''; ?>>Huánuco
                </option>
                <option value="11" <?php echo ($ClienteDepartamento == '11') ? 'selected="selected"' : ''; ?>>Ica</option>
                <option value="12" <?php echo ($ClienteDepartamento == '12') ? 'selected="selected"' : ''; ?>>Junín</option>
                <option value="13" <?php echo ($ClienteDepartamento == '13') ? 'selected="selected"' : ''; ?>>La Libertad
                </option>
                <option value="14" <?php echo ($ClienteDepartamento == '14') ? 'selected="selected"' : ''; ?>>Lambayeque
                </option>
                <option value="15" <?php echo ($ClienteDepartamento == '15') ? 'selected="selected"' : ''; ?>>Lima</option>
                <option value="16" <?php echo ($ClienteDepartamento == '16') ? 'selected="selected"' : ''; ?>>Loreto
                </option>
                <option value="17" <?php echo ($ClienteDepartamento == '17') ? 'selected="selected"' : ''; ?>>Madre de Dios
                </option>
                <option value="18" <?php echo ($ClienteDepartamento == '18') ? 'selected="selected"' : ''; ?>>Moquegua
                </option>
                <option value="19" <?php echo ($ClienteDepartamento == '19') ? 'selected="selected"' : ''; ?>>Pasco</option>
                <option value="20" <?php echo ($ClienteDepartamento == '20') ? 'selected="selected"' : ''; ?>>Piura</option>
                <option value="07" <?php echo ($ClienteDepartamento == '07') ? 'selected="selected"' : ''; ?>>Prov. Const.
                  del Callao</option>
                <option value="21" <?php echo ($ClienteDepartamento == '21') ? 'selected="selected"' : ''; ?>>Puno</option>
                <option value="22" <?php echo ($ClienteDepartamento == '22') ? 'selected="selected"' : ''; ?>>San Martín
                </option>
                <option value="23" <?php echo ($ClienteDepartamento == '23') ? 'selected="selected"' : ''; ?>>Tacna</option>
                <option value="24" <?php echo ($ClienteDepartamento == '24') ? 'selected="selected"' : ''; ?>>Tumbes
                </option>
                <option value="25" <?php echo ($ClienteDepartamento == '25') ? 'selected="selected"' : ''; ?>>Ucayali
                </option>
              </select>
            </div>

            <div style="flex: 1;">
              <label>Provincia</label>
              <select name="fcclientes_ubigeo_provincia_1" id="fcclientes_ubigeo_provincia_1"
                class="form-control fccinput-sm">
                <option hidden value="<?php echo $ClienteProvincia ?>">Provincia</option>
                <!-- Aquí se pueden agregar las provincias dependiendo del departamento seleccionado -->
              </select>
            </div>

            <div style="flex: 1;">
              <label>Distrito</label>
              <select name="ubigeo_distrito_1" id="ubigeo_distrito_1" class="form-control fccinput-sm">
                <option hidden value="<?php echo $ClienteDistrito ?>">Distrito</option>
                <!-- Aquí se pueden agregar los distritos dependiendo de la provincia seleccionada -->
              </select>
            </div>

          </div>

          <!--CELULAR-->

          <div class="row ">
            <!-- Celular -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
              <label>Celular
              </label><br>
              <div class="iti iti--allow-dropdown">
                <div class="iti iti--allow-dropdown">
                  <div class="iti__flag-container">
                    <div class="iti__selected-flag" role="combobox" aria-controls="iti-2__country-listbox"
                      aria-owns="iti-2__country-listbox" aria-expanded="false" tabindex="0" title="Peru (Perú): +51"
                      aria-activedescendant="iti-2__item-pe-preferred">
                      <div class="iti__flag iti__pe"></div>
                      <div class="iti__arrow"></div>
                    </div>

                  </div>
                  <input autocomplete="off" type="cel" class="form-control"
                    id="fcclientes-imput fc_telefono_cliente_proveedor" name="fc_telefono" data-intl-tel-input-id="2"
                    placeholder="912 345 678" value="<?php echo $ClienteTelefono ?>">

                </div>
              </div>
            </div>


            <!-- Fecha de Cumpleaños -->
            <div class="col-6">
              <label for="cumpleanos">Fecha de Cumpleaños</label>
              <input type="date" id="fcc_cumpleanos" class="form-control" value="<?php echo $ClienteFechaNac ?>" />
            </div>
          </div>

          <div id="fcclientes_personaFields" class="form-fields">
            <label for="fcc_email">Correo Eléctronico:</label>
            <input type="email" id="fcc_email" name="fcc_email" value="<?php echo $ClienteEmail ?>">

          </div>

          <!-- codigo cliente -->
          <div class="col-12 ">
            <label class="fcclientes-codigo">Codigo</label>
            <input type="text" class="fcclientes-imput form-control fccinput-sm" id="fc_cod_cliente_proveedor"
              name="fc_cod_cliente_proveedor" value=" <?php echo $ClienteCodigo ?>">

            <!-- <div class="result_codigo_auto">
              <div id="spinner_page19d6fcp" hidden="" style="text-align:center;"><img
                  src="https://wuandos3-img-recursos.s3.amazonaws.com/operaciones_img_ajax-loader.gif"><span
                  style="font-size:9pt;">Cargando...</span></div>
              <script>
                $('#fc_cod_cliente_proveedor').val(`1020615`);
              </script>
            </div> -->
          </div>

          <!-- TAMBIEN ES - NEGOCIA.PE-->
          <div class="col-12 ">
            <label class="container-checkbox">¿También es un
              proveedor?<input type="checkbox" name="fc_tambien_es" id="fc_tambien_es"><span
                class="checkmark-box"></span></label>
          </div>
          <div class="col-12 f">
            <label>Tipo Contacto</label>
            <select aria-label="Tipo Del contacto" id="fcc_tipo" name="fcc_tipo">
              <option value="0">Seleccione</option>
              <option value="1" <?php echo ($ClienteIdTipoContacto == 1) ? 'selected="selected"' : ''; ?>>Cliente</option>
              <option value="2" <?php echo ($ClienteIdTipoContacto == 2) ? 'selected="selected"' : ''; ?>>Potencial Cliente
              </option>
              <option value="3" <?php echo ($ClienteIdTipoContacto == 3) ? 'selected="selected"' : ''; ?>>Proveedor</option>
              <option value="4" <?php echo ($ClienteIdTipoContacto == 4) ? 'selected="selected"' : ''; ?>>Potencial
                Proveedor</option>
              <option value="5" <?php echo ($ClienteIdTipoContacto == 5) ? 'selected="selected"' : ''; ?>>Partner</option>
            </select>
          </div>


          <div class="col-12  " style=" padding-bottom: 0px;"><label>Notas</label>
            <textarea class=" fcclientes-imput form-control autosize" rows="" id="fcc_notas" name="fcc_notas"
              placeholder="Notas"><?php echo $ClienteNotas ?></textarea>
          </div>



          <div class="modal-footer footer_sticky">
            <button type="submit" class="btn" id="fc_guardar_datos_cliente_proveedor"
              onclick="guardar_datos_cliente_proveedor();">
              Guardar
            </button>
            <button id="fcclientes-btn-mas-opciones" type="button" class="btn" onclick="fcclientes_btn_mas_opciones();">
              Más opciones
            </button>
          </div>



        </form>
      </div>


    </div>

    <div class="fcclientes-contents fcclientes-hidden">


      <div class="fccliente-desplegable">
        <div class="fccliente-desplegable-item">
          <div class="fccliente-desplegable-header">
            <img src="iconos\Ícono Contacto asociado.svg" alt="Icono">
            <div class="fcc-AC textos">
              <span>Contactos Asociados</span>
              <p>Agrega información de otros contactos relacionados a este contacto</p>
            </div>
            <div class="fcc-CA icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg></div>
          </div>
          <div class="fccliente-desplegable-content">
            <p id="fcc_CA_mensajeVacio">No cuenta con etiquetas asociadas. <a href="#" id="fcc_CA_mostrarFormulario">Click
                para Asociar</a></p>
            <div class="fcc_CA_formulario" id="fcc_CA_formulario">
              <label for="fcc_CA_nombre">Nombre de la Etiqueta</label>
              <input type="text" id="fcc_CA_nombre" placeholder="Nombre de la etiqueta" />

              <!-- <label for="fcc_CA_color">Color de la Etiqueta</label>
        <input type="color" id="fcc_CA_color" value="#ff0000" /> -->

              <div class="row">
                <!-- Correo -->
                <div class="col-6">
                  <label for="fcc_CA_correo">E-mail</label>
                  <input type="email" id="fcc_CA_correo" class="form-control" placeholder="Correo" />
                </div>

                <!-- Celular -->
                <div class="col-6">
                  <label for="fcc_CA_celular">Celular</label>
                  <div class="iti iti--allow-dropdown w-100">
                    <!-- Asegura que el contenedor sea del mismo ancho -->
                    <div class="iti__flag-container">
                      <div class="iti__selected-flag" role="combobox" aria-controls="iti-2__country-listbox"
                        aria-owns="iti-2__country-listbox" aria-expanded="false" tabindex="0" title="Peru (Perú): +51"
                        aria-activedescendant="iti-2__item-pe-preferred">
                        <div class="iti__flag iti__pe"></div>
                        <div class="iti__arrow"></div>
                      </div>
                    </div>
                    <input autocomplete="off" type="text" id="fcc_CA_celular" name="fc_telefono" class="form-control w-80"
                      placeholder="912 345 678"> <!-- Aplica la clase w-100 -->
                  </div>
                </div>
              </div>


              <div class="row ">
                <!-- Celular -->
                <div class="col-lg-6 ">
                  <label for="fcc_CA_campo">Cargo</label>
                  <input type="text" id="fcc_CA_campo" class="form-control" placeholder="Cargo" />
                </div>


                <!-- Fecha de Cumpleaños -->
                <div class="col-6">
                  <label for="fcc_CA_fecha">Fecha de Cumpleaños</label>
                  <input type="date" id="fcc_CA_fecha" class="form-control" />
                </div>
              </div>


              <div class="fcc_CA_botones">
                <button class="fcc_CA_boton-cancelar" id="cancelar">Cancelar</button>
                <button class="fcc_CA_boton-guardar" id="guardar">Guardar</button>
              </div>
            </div>

            <div class="column">
              <div class="row fcc_CA_etiquetas" id="fcc_CA_etiquetas" style="max-width: 500px; display: flex;"></div>
            </div>

            <p class="fcc_CA_agregarcontacto" id="fcc_CA_agregarcontacto">+ Agregar otra etiqueta</p>
          </div>
        </div>

        <div class="fccliente-desplegable-item">
          <div class="fccliente-desplegable-header">
            <img src="iconos\Ícono Datos Distribución SVG.svg" alt="Icono">

            <div class="fcc-DD textos">
              <span>Datos Distribución</span>
              <p>Define datos importantes para el trabajo de tus productos hacia este cliente</p>
            </div>

            <div class="fcc_DD icon ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fccliente-desplegable-content">

            <div class="fcc_form-container">
              <div class="fcc_form-group">
                <label for="fcc_DD_ruta">Ruta</label>
                <select id="fcc_DD_ruta" name="fcc_DD_ruta">
                  <option value="">- Seleccionar -</option>
                  <option value="ruta1">Ruta 1</option>
                  <option value="ruta2">Ruta 2</option>
                </select>
              </div>
              <div class="fcc_form-group">
                <label for="fcc_DD_zona">Zona</label>
                <select id="fcc_DD_zona" name="fcc_DD_zona">
                  <option value="">- Seleccionar -</option>
                  <option value="zona1">Zona 1</option>
                  <option value="zona2">Zona 2</option>
                </select>
              </div>
            </div>
            <div class="fcc_form-group">
              <label for="fcc_DD_vendedor">Vendedor asignado</label>
              <input type="text" id="fcc_DD_vendedor" name="fcc_DD_vendedor" placeholder="Buscar">
            </div>
            <div class="fcc_form-group">
              <label for="fcc_DD_coordenadas">Coordenadas Maps</label>
              <input type="text" id="fcc_DD_coordenadas" name="fcc_DD_coordenadas" placeholder="Introduce una ubicación">
            </div>
            <div class="fcc_DD_map" id="fcc_DD_map">
              <!-- Mapa embebido -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15605.824455555005!2d-77.0427939!3d-12.0463731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDAyJzQ4LjkiUyA3N8KwMDInMzguMiJX!5e0!3m2!1ses!2spe!4v1615560382034!5m2!1ses!2spe"
                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>
        </div>

        <div class="fccliente-desplegable-item">
          <div class="fccliente-desplegable-header">
            <img src="iconos\Ícono campos adicionales SVG.svg" alt="Icono">
            <div class="fcc-CA textos">
              <span>Campos Adicionales</span>
              <p>Agrega información adicional para este contacto de manera personalizada</p>
            </div>
            <div class="fcc_CA icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fccliente-desplegable-content">
            <div class="fcc_form-container" id="fcc_campos_adicionales">
              <div class="fcc_form-group">
                <label for="fcc_CA_Composicion">Composición Química</label>
                <input type="text" id="fcc_CA_Composicion" name="fcc_CA_Composicion" placeholder="Buscar composición">
              </div>
              <div class="fcc_form-group">
                <label for="fcc_CA_placa">Placa</label>
                <input type="text" id="fcc_CA_placa" name="fcc_CA_placa" placeholder="Buscar Placa">
              </div>
            </div>


            <!-- Formulario nuevo campo (inicialmente oculto con clase .hidden) -->
            <div id="formulario-nuevo-campo" class="hidden">
              <div class="fcc_form-group">
                <label for="nombre_campo">Composición Química</label>
                <input type="text" id="nombre_campo" placeholder="">
              </div>
              <div class="fcc_form-group">
                <label for="fcc_descripcion_campo">Placa</label>
                <!-- <textarea id="fcc_descripcion_campo" placeholder="Descripción del campo"></textarea> -->
                <textarea class=" fcclientes-imput form-control autosize" rows="" id="fcc_descripcion_campo"
                  name="fcc_descripcion_campo" placeholder=""></textarea>
              </div>
              <div class="btn-container">
                <button class="btn fcc_btn_cancelar" id="fcc_btn_cancelar">Cancelar</button>
                <button class="btn fcc_btn_guardar" id="fcc_btn_guardar">Guardar</button>
              </div>
            </div>

            <!-- Contenedor donde mostraremos los campos adicionales almacenados -->
            <div id="camposAdicionalesContainer"></div>

            <div class="fcc-CA-agregar-ca">
              <p id="fcc_agregarCampo">+ Agregar campo adicional</p>
            </div>
          </div>
        </div>

        <div class="fccliente-desplegable-item">
          <div class="fccliente-desplegable-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                color="currentColor">
                <path
                  d="M6.986 3.7c2.797 3.095 7.41-3.584 10.14-1.16c1.57 1.394 1.073 4.474-.965 6.48m-2.371 4.964c.018-.335.111-.947-.397-1.412m0 0a1.9 1.9 0 0 0-.666-.377c-1.048-.37-2.336.867-1.425 2c.49.608.867.795.832 1.486c-.025.486-.503.994-1.132 1.188c-.547.168-1.15-.055-1.531-.481c-.466-.52-.42-1.011-.423-1.225m4.345-2.59l.574-.575m-4.455 4.455l-.545.545">
                </path>
                <path
                  d="M18.273 6.633c.925.178 1.133.762 1.409 2.384c.249 1.46.319 3.213.319 3.96a1.32 1.32 0 0 1-.319.74c-1.935 2.028-5.776 5.858-7.714 7.76c-.76.68-1.908.695-2.716.071c-1.653-1.487-3.241-3.168-4.797-4.686c-.625-.805-.61-1.95.07-2.708c2.051-2.127 5.762-5.768 7.856-7.78c.21-.18.468-.292.743-.317c.47 0 1.276.063 2.062.108">
                </path>
              </g>
            </svg>
            <div class="fcc-LP textos">
              <span>Lista de Precios</span>
              <p>Establece una lista de precios de productos preestablecida para est cliente</p>
            </div>
            <div class="fcc_LP icon ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fccliente-desplegable-content">


            <div class="fcc_LP_content">

              <select id="fcc_LP_elijep" name="fcc_LP_elijep">
                <option value="">Elije una lista de precios</option>
                <option value="precio1">Precio 1</option>
                <option value="precio2">Precio 2</option>
              </select>
            </div>



          </div>



        </div>
      </div>



    </div>

  </div>

  <script>


    // Array para almacenar las etiquetas
    let etiquetas = [];

    // Elementos del DOM
    const formulario = document.getElementById('fcc_CA_formulario');
    const mensajeVacio = document.getElementById('fcc_CA_mensajeVacio');
    const listaEtiquetas = document.getElementById('fcc_CA_etiquetas');
    const botonAgregarEtiqueta = document.getElementById('fcc_CA_agregarcontacto');
    const botonGuardar = document.getElementById('guardar');
    const botonCancelar = document.getElementById('cancelar');

    // Función unificada para manejar etiquetas
    function manejarEtiquetas(etiquetasIniciales = []) {
      etiquetas = etiquetasIniciales; // Inicializar el array de etiquetas con los datos de la API
      actualizarListaEtiquetas(); // Mostrar etiquetas iniciales

      // Mostrar/ocultar formulario
      document.getElementById('fcc_CA_mostrarFormulario').addEventListener('click', function (e) {
        e.preventDefault();
        formulario.style.display = 'block';
        mensajeVacio.style.display = 'none';
      });

      // Cancelar formulario
      botonCancelar.addEventListener('click', function (e) {
        e.preventDefault();
        // Mostrar el botón de agregar etiqueta nuevamente
        document.getElementById('fcc_CA_agregarcontacto').classList.remove('d-none');
        formulario.style.display = 'none'; // Ocultar el formulario
        limpiarFormulario(); // Limpiar los campos del formulario
        mostrarListaEtiquetas(); // Mostrar la lista de etiquetas
      });

      // Guardar etiqueta
      botonGuardar.addEventListener('click', function (e) {
        e.preventDefault();
        const nombre = document.getElementById('fcc_CA_nombre').value;
        //const color = document.getElementById('fcc_CA_color').value;
        const email = document.getElementById('fcc_CA_correo').value;
        const celular = document.getElementById('fcc_CA_celular').value;
        const cargo = document.getElementById('fcc_CA_campo').value;
        const fecha = document.getElementById('fcc_CA_fecha').value;

        if (nombre && email && celular && cargo && fecha) {
          const etiqueta = {
            EtqId: Date.now(), // Usamos un timestamp como ID único
            EtqNombre: nombre,
            //EtqColor: color,
            email: email,
            celular: celular,
            cargo: cargo,
            fecha: fecha,
          };

          // Verificar si estamos editando una etiqueta existente
          const indiceEdicion = formulario.getAttribute('data-indice');
          if (indiceEdicion !== null) {
            etiquetas[indiceEdicion] = etiqueta; // Editar etiqueta
            formulario.removeAttribute('data-indice');
          } else {
            etiquetas.push(etiqueta); // Agregar nueva etiqueta
          }

          actualizarListaEtiquetas(); // Actualizar la lista de etiquetas
          limpiarFormulario(); // Limpiar el formulario
          formulario.style.display = 'none'; // Ocultar el formulario
          // Mostrar el botón de agregar etiqueta nuevamente
          document.getElementById('fcc_CA_agregarcontacto').classList.remove('d-none');
        } else {
          alert('Por favor, completa todos los campos.');
        }
      });

      // Agregar otra etiqueta
      botonAgregarEtiqueta.addEventListener('click', function (e) {
        e.preventDefault();
        // Mostrar el botón de agregar etiqueta nuevamente
        document.getElementById('fcc_CA_agregarcontacto').classList.add('d-none');
        formulario.style.display = 'block'; // Mostrar el formulario
        listaEtiquetas.style.display = 'none'; // Ocultar la lista de etiquetas
        limpiarFormulario(); // Limpiar el formulario
      });

      // Función para actualizar la lista de etiquetas
      function actualizarListaEtiquetas() {
        listaEtiquetas.innerHTML = ''; // Limpiar la lista
        if (etiquetas.length > 0) {
          etiquetas.forEach((etiqueta, indice) => {
            const col6 = document.createElement('div');
            col6.className = 'col-6 col-xs-12 mb-3';
            const etiquetaElemento = document.createElement('div');
            etiquetaElemento.className = 'fcc_CA_etiqueta p-3';
            etiquetaElemento.innerHTML = `
                    <p class="mb-1"><strong>Nombre:</strong> ${etiqueta.EtqNombre}</p>
                    
                    <p class="mb-1"><strong>E-mail:</strong> ${etiqueta.email}</p>
                    <p class="mb-1"><strong>Celular:</strong> ${etiqueta.celular}</p>
                    <p class="mb-1"><strong>Cargo:</strong> ${etiqueta.cargo}</p>
                    <p class="mb-1"><strong>Cumpleaños:</strong> ${etiqueta.fecha}</p>
                    <div class="btncontactos d-flex justify-content-end gap-2">
                        <button class="editar btn" data-indice="${indice}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="skyblue" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>

                        </button>
                        <button class="eliminar btn" data-indice="${indice}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>

                        </button>
                    </div>
                `;

            // <div class="badge" style="background-color: ${etiqueta.EtqColor}; color: white;">Color</div>
            col6.appendChild(etiquetaElemento);
            listaEtiquetas.appendChild(col6);
          });

          // Agregar eventos a los botones de editar y eliminar
          document.querySelectorAll('.editar').forEach(boton => {
            boton.addEventListener('click', function () {
              const indice = this.getAttribute('data-indice');
              cargarFormularioParaEdicion(indice);


              // Ocultar la lista de etiquetas y el botón de agregar
              document.getElementById('fcc_CA_etiquetas').style.display = 'none';
              document.getElementById('fcc_CA_agregarcontacto').classList.add('d-none');

            });
          });

          document.querySelectorAll('.eliminar').forEach(boton => {
            boton.addEventListener('click', function () {
              // Se muestra el cuadro de confirmación con "Aceptar" y "Cancelar"
              if (confirm("¿Estás seguro de que deseas eliminar esta etiqueta?")) {
                // Si el usuario hace clic en "Aceptar", se obtiene el índice de la etiqueta
                const indice = this.getAttribute('data-indice');
                // Se elimina la etiqueta del array
                etiquetas.splice(indice, 1);
                // Se actualiza la lista de etiquetas en la interfaz
                actualizarListaEtiquetas();
                // Se oculta el botón de agregar etiqueta
                botonAgregarEtiqueta.style.display = "none";
              }
            });
          });


          mostrarListaEtiquetas(); // Mostrar la lista de etiquetas
        } else {
          mensajeVacio.style.display = "block"; // Mostrar mensaje de "No hay etiquetas"
        }
      }

      // Función para mostrar la lista de etiquetas
      function mostrarListaEtiquetas() {
        if (etiquetas.length === 0) {
          mensajeVacio.style.display = "block"; // Mostrar mensaje de "No hay etiquetas"
          listaEtiquetas.style.display = "none"; // Ocultar lista
          botonAgregarEtiqueta.style.display = "none"; // Ocultar botón de agregar
        } else {
          mensajeVacio.style.display = "none"; // Ocultar mensaje
          listaEtiquetas.style.display = "flex"; // Mostrar lista
          botonAgregarEtiqueta.style.display = "block"; // Mostrar botón de agregar
        }
      }

      // Función para cargar el formulario con los datos de una etiqueta para editar
      function cargarFormularioParaEdicion(indice) {
        const etiqueta = etiquetas[indice];
        document.getElementById('fcc_CA_nombre').value = etiqueta.EtqNombre;
        //document.getElementById('fcc_CA_color').value = etiqueta.EtqColor;
        document.getElementById('fcc_CA_correo').value = etiqueta.email;
        document.getElementById('fcc_CA_celular').value = etiqueta.celular;
        document.getElementById('fcc_CA_campo').value = etiqueta.cargo;
        document.getElementById('fcc_CA_fecha').value = etiqueta.fecha;

        formulario.setAttribute('data-indice', indice);
        formulario.style.display = 'block'; // Mostrar formulario
      }

      // Función para limpiar el formulario
      function limpiarFormulario() {
        document.getElementById('fcc_CA_nombre').value = '';
        //document.getElementById('fcc_CA_color').value = '#ff0000'; // Color por defecto
        document.getElementById('fcc_CA_correo').value = '';
        document.getElementById('fcc_CA_celular').value = '';
        document.getElementById('fcc_CA_campo').value = '';
        document.getElementById('fcc_CA_fecha').value = '';
        formulario.removeAttribute('data-indice'); // Limpiar índice de edición
      }
    }


    // Inicializar la función con datos de la API si existen
    $(document).ready(function () {
      <?php
      if (!empty($id_cliente)) {
        // Obtener el tipo de cliente desde PHP
        $clienteTipo = !empty($ClienteTipoDoc) ? $ClienteTipoDoc : '';
        ?>
        var clienteTipo = "<?php echo $clienteTipo; ?>";
        if (clienteTipo) {
          fcc_Empresa_Persona(clienteTipo); // Si hay datos, mostrar el formulario
        }

        <?php
        // Manejo de etiquetas
        if (!empty($cliente['ArrayEtiquetas']) && is_array($cliente['ArrayEtiquetas'])) {
          $etiquetas_json = json_encode($cliente['ArrayEtiquetas']);
          if ($etiquetas_json !== false) {
            ?>
            manejarEtiquetas(<?php echo $etiquetas_json; ?>); // Inicializar con etiquetas del cliente
            <?php
          } else {
            ?>
            console.error("Error al convertir las etiquetas a JSON.");
            <?php
          }
        } else {
          ?>
          manejarEtiquetas([]); // Inicializar como array vacío
          <?php
        }
      } else {
        ?>
        console.warn("No se proporcionó un ID de cliente válido.");
        $("#fcc_formContainer").hide(); // Mantener el formulario oculto
        manejarEtiquetas([]); // Inicializar como array vacío
        <?php
      }
      ?>
    });

    // Función para abrir el formulario manualmente desde el menú
    // function abrirModalPersona() {
    //     fcc_Empresa_Persona('1'); // Llama a la función para mostrar el formulario de persona
    // }

    // function abrirModalEmpresa() {
    //     fcc_Empresa_Persona('6'); // Llama a la función para mostrar el formulario de empresa
    // }


  </script>








  <?php
  exit();
}



