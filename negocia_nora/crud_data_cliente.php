<?php

//OBTENER JSON
$input_data = file_get_contents('php://input');
$json = json_decode($input_data, true);


//CREAR Y EDITAR
if (!empty($json['opcrud']) && ($json['opcrud'] == 1 || $json['opcrud'] == 2)) {

  //sleep(2);
  $id_registro = (int) $json['id_registro'];


  $RegistroTipoDoc = "";
  $RegistroDni = "";

  $RegistroNombre = "";
  $RegistroNomComercial = "";
  $razonsocial = "";
  $RegistroDireccion = "";
  $RegistroDepartamento = "";
  $RegistroProvincia = "";
  $RegistroDistrito = "";
  $RegistroTelefono = "";
  $RegistroFechaNac = "";
  $RegistroEmail = "";
  $RegistroCodigo = "";
  $RegistroIdTipoContacto = "";
  $RegistroNotas = "";





  //EDITAR
  if (!empty($id_registro) && $json['opcrud'] == 2) {

    $id_empresa = 2;

    if ($json['opRegistro'] == 1) {
      $api_url = 'https://api.negocia.pe/webservice/app_erp/clientes/ws_clientes.php';
    } else if ($json['opRegistro'] == 2) { // Tipo 2 (por ejemplo, proveedores o data diferente)
      $api_url = 'https://api.negocia.pe/webservice/app_erp/clientes/ws_clientes.php';
    }








    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $api_url,
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
                "id_cliente": ' . $id_registro . '
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


      if ($json['opRegistro'] == 1) {
        // Asignamos los datos para clientes
        $Registro_arr_cliente = $data['data'][0];
        $RegistroNombre = $Registro_arr_cliente['ClienteNombre'];
        $RegistroDni = $Registro_arr_cliente['ClienteDni'];
        $RegistroTipoDoc = $Registro_arr_cliente['ClienteTipoDoc'];
        $RegistroNomComercial = $Registro_arr_cliente['ClienteNomComercial'];
        $razonsocial = $Registro_arr_cliente['ClienteNombre'];
        $RegistroDireccion = $Registro_arr_cliente['ClienteDireccion'];
        $RegistroDepartamento = $Registro_arr_cliente['ClienteDepartamento'];
        $RegistroProvincia = $Registro_arr_cliente['ClienteProvincia'];
        $RegistroDistrito = $Registro_arr_cliente['ClienteDistrito'];
        $RegistroTelefono = $Registro_arr_cliente['ClienteTelefono'];
        $RegistroFechaNac = $Registro_arr_cliente['ClienteFechaNac'];
        $RegistroEmail = $Registro_arr_cliente['ClienteEmail'];
        $RegistroCodigo = $Registro_arr_cliente['ClienteCodigo'];
        $RegistroIdTipoContacto = $Registro_arr_cliente['ClienteIdTipoContacto'];
        $RegistroNotas = $Registro_arr_cliente['ClienteNotas'];

        // Extraer etiquetas para clientes
        $etiquetas = $Registro_arr_cliente['ArrayEtiquetas'];
      } else if ($json['opRegistro'] == 2) {
        // Tipo 2: Para proveedores, usamos un array diferente
        $Registro_arr_proveedores = $data['data'][0];
        // Asignamos las variables comunes (si la estructura es similar)
        $RegistroNombre = $Registro_arr_proveedores['ClienteNombre'] ?? "";
        $RegistroDni = $Registro_arr_proveedores['ClienteDni'] ?? "";
        $RegistroTipoDoc = $Registro_arr_proveedores['ClienteTipoDoc'] ?? "";
        $RegistroNomComercial = $Registro_arr_proveedores['ClienteNomComercial'] ?? "";
        $razonsocial = $Registro_arr_proveedores['ClienteNombre'] ?? "";
        $RegistroDireccion = $Registro_arr_proveedores['ClienteDireccion'] ?? "";
        $RegistroDepartamento = $Registro_arr_proveedores['ClienteDepartamento'] ?? "";
        $RegistroProvincia = $Registro_arr_proveedores['ClienteProvincia'] ?? "";
        $RegistroDistrito = $Registro_arr_proveedores['ClienteDistrito'] ?? "";
        $RegistroTelefono = $Registro_arr_proveedores['ClienteTelefono'] ?? "";
        $RegistroFechaNac = $Registro_arr_proveedores['ClienteFechaNac'] ?? "";
        $RegistroEmail = $Registro_arr_proveedores['ClienteEmail'] ?? "";
        $RegistroCodigo = $Registro_arr_proveedores['ClienteCodigo'] ?? "";
        $RegistroIdTipoContacto = $Registro_arr_proveedores['ClienteIdTipoContacto'] ?? "";
        $RegistroNotas = $Registro_arr_proveedores['ClienteNotas'] ?? "";

        // Variables específicas para proveedores:
        $ProveedorCampo1 = $Registro_arr_proveedores['ProveedorCampo1'] ?? "";
        $ProveedorCampo2 = $Registro_arr_proveedores['ProveedorCampo2'] ?? "";

        // Extraer etiquetas para proveedores (si existen)
        $etiquetas = $Registro_arr_proveedores['ArrayEtiquetas'] ?? [];
      }


      // Procesar etiquetas (común para ambos casos)
      if (!empty($etiquetas)) {
        foreach ($etiquetas as $etiqueta) {
          $EtqId = $etiqueta['EtqId'];
          $EtqColor = $etiqueta['EtqColor'];
          $EtqNombre = $etiqueta['EtqNombre'];
          // Aquí puedes procesar o imprimir las etiquetas según necesites
        }
      }

    } else {
      echo "Error al decodificar el JSON: " . json_last_error_msg();
    }

  }

  ?>

  <div class="fcRegistro_container pb-4 ">



    <div class="fcRegistro_steps ">



    <div class="fcRegistro_eempresa-persona">

<?php if ($json['opRegistro'] == 1): ?>

    <div class="btn">
        <button 
            type="button" 
            id="fcRegistro_btn_persona" 
            class="fcRegistro_button-next-btn"
            onclick="fcRegistro_Empresa_Persona('1')"
        ><svg id="fcRegistro_icono_persona" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
            class="bi bi-person" viewBox="0 0 16 16">
            <path
              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
          </svg>
            <!-- Ícono Persona -->
            Persona
        </button>
    </div>

    <div class="btn">
        <button 
            type="button" 
            id="fcRegistro_btn_empresa" 
            class="fcRegistro_button-next-btn"
            onclick="fcRegistro_Empresa_Persona('6')"
        ><svg id="fcRegistro_icono_empresa" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
            class="bi bi-buildings-fill" viewBox="0 0 16 16">
            <path
              d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1H8zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
          </svg>
            <!-- Ícono Empresa -->
            Empresa
        </button>
    </div>

<?php elseif ($json['opRegistro'] == 2): ?>

    <div class="btn">
        <button
            type="button"
            id="fcRegistro_btn_empresa"
            class="fcRegistro_button-next-btn"
            onclick="fcRegistro_Empresa_Persona('6')"
        ><svg id="fcRegistro_icono_empresa" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
            class="bi bi-buildings-fill" viewBox="0 0 16 16">
            <path
              d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1H8zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
          </svg>
            <!-- Ícono Empresa -->
            Empresa
        </button>
    </div>

<?php endif; ?>

</div>






      <!-- <div class="fcRegistro_eempresa-persona">
        <div class="btn ">
          <button type="button" id="fcRegistro_btn_persona" class="fcRegistro_button-next-btn"
            onclick="fcRegistro_Empresa_Persona('1')">
            <svg id="fcRegistro_icono_persona" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
              class="bi bi-person" viewBox="0 0 16 16">
              <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
            </svg>

            Persona
          </button>
        </div>
        <div class="btn">
          <button type="button" id="fcRegistro_btn_empresa" class="fcRegistro_button-next-btn"
            onclick="fcRegistro_Empresa_Persona('6')">
            <svg id="fcRegistro_icono_empresa" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange"
              class="bi bi-buildings-fill" viewBox="0 0 16 16">
              <path
                d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
            </svg>

            Empresa
          </button>
        </div>
      </div> -->

      <!-- fcRegistro_CA_formulario -->

      <!-- Single form with dynamic fields -->
      <div id="fcRegistro_formContainer" class="fcRegistro_form" style="display:none;">
        <form id="fcRegistro_formContainer" class="fcRegistro_fromulario">


          <div class="row" style="--bs-gutter-x: 10px;">
            <div class="col-4">
              <label for="fcRegistro_tipo_doc">Tipo de Doc.</label>
              <select name="fcRegistro_tipo_doc" id="fcRegistro_tipo_doc">
                <option value="">Seleccione</option>
                <option value="1" <?php echo ($RegistroTipoDoc == 1) ? 'selected="selected"' : ''; ?>>DNI</option>
                <option value="6" <?php echo ($RegistroTipoDoc == 6) ? 'selected="selected"' : ''; ?>>Ruc</option>
                <option value="4" <?php echo ($RegistroTipoDoc == 4) ? 'selected="selected"' : ''; ?>>Carnet De Extranjeria
                </option>
                <option value="7" <?php echo ($RegistroTipoDoc == 7) ? 'selected="selected"' : ''; ?>>Pasaporte</option>
                <option value="100" <?php echo ($RegistroTipoDoc == 100) ? 'selected="selected"' : ''; ?>>Ninguno</option>
              </select>
            </div>
            <div class="col-4">
              <label for="fcRegistro_dni">N° Documento</label>
              <input type="text" id="fcRegistro_dni" name="fcRegistro_dni" value=" <?php echo $RegistroDni ?> ">
            </div>
            <div class="col-4">
              <button id="fcRegistro_btn_cliente_proveedor_consult" type="button"
                style="margin-top: 23px; ">Consultar</button>
            </div>
          </div>

          <div id="fcRegistro_personaFields" class="form-fields">
            <label for="fcRegistro_name">Nombre:</label>
            <input type="text" id="fcRegistro_name" name="fcRegistro_name" value="<?php echo $RegistroNombre; ?>">

          </div>


          <!-- Campos para Empresa -->
          <div id="fcRegistro_empresaFields" class="form-fields" style="display:none;">
            <div class="fcRegistro_campos">
              <label for="fcRegistro_nombre_comercial">Nombre Comercial:</label>
              <input type="text" id="fcRegistro_nombre_comercial" name="fcRegistro_nombre_comercial"
                value=" <?php echo $RegistroNomComercial ?>">
            </div>
            <div class="fcRegistro_campos">
              <label for="fcRegistro_razon">Razón Social:</label>
              <input type="text" id="fcRegistro_razon" name="fcRegistro_razon" value="<?php echo $razonsocial; ?>">
            </div>
          </div>








          <!--DIRECCION 1-->
          <div class="col-12 ">
            <div style="display: flex;justify-content: space-between;">
              <label>Dirección</label> <!--CLICK MORTRAR - DIRECCION (2)-->
              <!--MULTIPLE-->
              <div type="button" onclick="agregar_direccion();">
                <!-- <i class="fcRegistro_direccion fa fa-plus-circle"> </i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-plus"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
                <a class="fcRegistro_direccion">
                  Agregar otra dirección</a>
              </div>
              <div id="fcRegistro_agregar_cliente_proveedor_direccion_1" style="display: none;">
                <!-- <i class="fcRegistro_direccion fa fa-plus-circle" type="button"></i> -->
                <a class="fcRegistro_direccion" href="javascript:void(0)" id="fcRegistro_cliente_nueva_direccion_1">
                  Agregar otra dirección</a>
              </div>
            </div>
            <textarea class=" fcRegistro_imput form-control autosize" rows="1" id="fcRegistro_direccion_cliente_proveedor"
              name="fcRegistro_direccion_cliente_proveedor"><?php echo $RegistroDireccion ?></textarea>

          </div>

          <!-- ubigeo -->

          <div class="fcRegistro_ubigeo" id="fcclientes_bloque_ubigeo">
            <select id="fcclientes_ubigeo_contacto_1" disabled>
              <option value=" <?php echo $RegistroDepartamento ?>" hidden>Buscar Ubigeo</option>
            </select>
          </div>

          <!-- Departamento, Provincia, Distrito -->
          <div class="col-12 fccdepartamentos">

            <div style="flex: 1;">
              <label>Departamento</label>
              <select name="fcRegistro_ubigeo_departamento_1" id="fcRegistro_ubigeo_departamento_1" class="fccinput-sm">
                <option value="0">Departamento</option> <!-- Eliminado el atributo "hidden" -->
                <option value="01" <?php echo ($RegistroDepartamento == '01') ? 'selected="selected"' : ''; ?>>Amazonas
                </option>
                <option value="02" <?php echo ($RegistroDepartamento == '02') ? 'selected="selected"' : ''; ?>>Áncash
                </option>
                <option value="03" <?php echo ($RegistroDepartamento == '03') ? 'selected="selected"' : ''; ?>>Apurímac
                </option>
                <option value="04" <?php echo ($RegistroDepartamento == '04') ? 'selected="selected"' : ''; ?>>Arequipa
                </option>
                <option value="05" <?php echo ($RegistroDepartamento == '05') ? 'selected="selected"' : ''; ?>>Ayacucho
                </option>
                <option value="06" <?php echo ($RegistroDepartamento == '06') ? 'selected="selected"' : ''; ?>>Cajamarca
                </option>
                <option value="08" <?php echo ($RegistroDepartamento == '08') ? 'selected="selected"' : ''; ?>>Cusco
                </option>
                <option value="09" <?php echo ($RegistroDepartamento == '09') ? 'selected="selected"' : ''; ?>>Huancavelica
                </option>
                <option value="10" <?php echo ($RegistroDepartamento == '10') ? 'selected="selected"' : ''; ?>>Huánuco
                </option>
                <option value="11" <?php echo ($RegistroDepartamento == '11') ? 'selected="selected"' : ''; ?>>Ica</option>
                <option value="12" <?php echo ($RegistroDepartamento == '12') ? 'selected="selected"' : ''; ?>>Junín
                </option>
                <option value="13" <?php echo ($RegistroDepartamento == '13') ? 'selected="selected"' : ''; ?>>La Libertad
                </option>
                <option value="14" <?php echo ($RegistroDepartamento == '14') ? 'selected="selected"' : ''; ?>>Lambayeque
                </option>
                <option value="15" <?php echo ($RegistroDepartamento == '15') ? 'selected="selected"' : ''; ?>>Lima</option>
                <option value="16" <?php echo ($RegistroDepartamento == '16') ? 'selected="selected"' : ''; ?>>Loreto
                </option>
                <option value="17" <?php echo ($RegistroDepartamento == '17') ? 'selected="selected"' : ''; ?>>Madre de Dios
                </option>
                <option value="18" <?php echo ($RegistroDepartamento == '18') ? 'selected="selected"' : ''; ?>>Moquegua
                </option>
                <option value="19" <?php echo ($RegistroDepartamento == '19') ? 'selected="selected"' : ''; ?>>Pasco
                </option>
                <option value="20" <?php echo ($RegistroDepartamento == '20') ? 'selected="selected"' : ''; ?>>Piura
                </option>
                <option value="07" <?php echo ($RegistroDepartamento == '07') ? 'selected="selected"' : ''; ?>>Prov. Const.
                  del Callao</option>
                <option value="21" <?php echo ($RegistroDepartamento == '21') ? 'selected="selected"' : ''; ?>>Puno</option>
                <option value="22" <?php echo ($RegistroDepartamento == '22') ? 'selected="selected"' : ''; ?>>San Martín
                </option>
                <option value="23" <?php echo ($RegistroDepartamento == '23') ? 'selected="selected"' : ''; ?>>Tacna
                </option>
                <option value="24" <?php echo ($RegistroDepartamento == '24') ? 'selected="selected"' : ''; ?>>Tumbes
                </option>
                <option value="25" <?php echo ($RegistroDepartamento == '25') ? 'selected="selected"' : ''; ?>>Ucayali
                </option>
              </select>
            </div>

            <div style="flex: 1;">
              <label>Provincia</label>
              <select name="fcRegistro_ubigeo_provincia_1" id="fcRegistro_ubigeo_provincia_1"
                class="form-control fccinput-sm">
                <option hidden value="<?php echo $RegistroProvincia ?>">Provincia</option>
                <!-- Aquí se pueden agregar las provincias dependiendo del departamento seleccionado -->
              </select>
            </div>

            <div style="flex: 1;">
              <label>Distrito</label>
              <select name="fcRegistro_ubigeo_distrito_1" id="fcRegistro_ubigeo_distrito_1"
                class="form-control fccinput-sm">
                <option hidden value="<?php echo $RegistroDistrito ?>">Distrito</option>
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
                    id="fcRegistro_imput fc_telefono_cliente_proveedor" name="fcRegistro_telefono"
                    data-intl-tel-input-id="2" placeholder="912 345 678" value="<?php echo $RegistroTelefono ?>">

                </div>
              </div>
            </div>


            <!-- Fecha de Cumpleaños -->
            <div class="col-6">
              <label for="fcRegistro_cumpleanos">Fecha de Cumpleaños</label>
              <input type="date" id="fcRegistro_cumpleanos" class="form-control"
                value="<?php echo $RegistroFechaNac ?>" />
            </div>
          </div>

          <div id="fcRegistro_personaFields" class="form-fields">
            <label for="fcRegistro_email">Correo Eléctronico:</label>
            <input type="email" id="fcRegistro_email" name="fcRegistro_email" value="<?php echo $RegistroEmail ?>">

          </div>

          <!-- codigo Registro_arr_cliente  -->
          <div class="col-12 ">
            <label class="fcRegistro_codigo">Codigo</label>
            <input type="text" class="fcRegistro_imput form-control fccinput-sm" id="fcRegistro_cod_cliente"
              name="fcRegistro_cod_cliente" value=" <?php echo $RegistroCodigo ?>">

            <!-- <div class="result_codigo_auto">
              <div id="spinner_page19d6fcp" hidden="" style="text-align:center;"><img
                  src="https://wuandos3-img-recursos.s3.amazonaws.com/operaciones_img_ajax-loader.gif"><span
                  style="font-size:9pt;">Cargando...</span></div>
              <script>
                $('#fcRegistro_cod_cliente').val(`1020615`);
              </script>
            </div> -->
          </div>

          <!-- TAMBIEN ES - NEGOCIA.PE-->
          <div class="col-12 ">
            <label class="container-checkbox">¿También es un
              proveedor?<input type="checkbox" name="fcRegistro_tambien_es" id="fcRegistro_tambien_es"><span
                class="checkmark-box"></span></label>
          </div>
          <div class="col-12 f">
            <label>Tipo Contacto</label>
            <select aria-label="Tipo Del contacto" id="fcRegistro_tipo" name="fcRegistro_tipo">
              <option value="0">Seleccione</option>
              <option value="1" <?php echo ($RegistroIdTipoContacto == 1) ? 'selected="selected"' : ''; ?>>Cliente</option>
              <option value="2" <?php echo ($RegistroIdTipoContacto == 2) ? 'selected="selected"' : ''; ?>>Potencial Cliente
              </option>
              <option value="3" <?php echo ($RegistroIdTipoContacto == 3) ? 'selected="selected"' : ''; ?>>Proveedor
              </option>
              <option value="4" <?php echo ($RegistroIdTipoContacto == 4) ? 'selected="selected"' : ''; ?>>Potencial
                Proveedor</option>
              <option value="5" <?php echo ($RegistroIdTipoContacto == 5) ? 'selected="selected"' : ''; ?>>Partner</option>
            </select>
          </div>

          <div class="col-12  " style=" padding-bottom: 0px;"><label>Notas</label>
            <textarea class=" fcRegistro_imput form-control autosize" rows="" id="fcRegistro_notas"
              name="fcRegistro_notas" placeholder="Notas"><?php echo $RegistroNotas ?></textarea>
          </div>

          

        </form>
      </div>

    </div>

    <div class="fcRegistro_contents fcRegistro_hidden">


      <div class="fcRegistro_desplegable">
        <div class="fcRegistro_desplegable-item">
          <div class="fcRegistro_desplegable-header">
            <img src="iconos\Ícono Contacto asociado.svg" alt="Icono">
            <div class="fcRegistro_AC textos">
              <span>Contactos Asociados</span>
              <p>Agrega información de otros contactos relacionados a este contacto</p>
            </div>
            <div class="fcRegistro_AC icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg></div>
          </div>
          <div class="fcRegistro_desplegable-content">
            <p id="fcRegistro_CA_mensajeVacio">No cuenta con etiquetas asociadas. <a href="#"
                id="fcRegistro_CA_mostrarFormulario">Click
                para Asociar</a></p>
            <div class="fcRegistro_CA_formulario" id="fcRegistro_CA_formulario">
              <label for="fcRegistro_CA_nombre">Nombre de la Etiqueta</label>
              <input type="text" id="fcRegistro_CA_nombre" placeholder="Nombre de la etiqueta" />

              <!-- <label for="fcc_CA_color">Color de la Etiqueta</label>
        <input type="color" id="fcc_CA_color" value="#ff0000" /> -->

              <div class="row">
                <!-- Correo -->
                <div class="col-6">
                  <label for="fcRegistro_CA_correo">E-mail</label>
                  <input type="email" id="fcRegistro_CA_correo" class="form-control" placeholder="Correo" />
                </div>

                <!-- Celular -->
                <div class="col-6">
                  <label for="fcRegistro_CA_celular">Celular</label>
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
                    <input autocomplete="off" type="text" id="fcRegistro_CA_celular" name="fcRegistro_telefono"
                      class="form-control w-80" placeholder="912 345 678"> <!-- Aplica la clase w-100 -->
                  </div>
                </div>
              </div>


              <div class="row ">
                <!-- Celular -->
                <div class="col-lg-6 ">
                  <label for="fcRegistro_CA_campo">Cargo</label>
                  <input type="text" id="fcRegistro_CA_campo" class="form-control" placeholder="Cargo" />
                </div>


                <!-- Fecha de Cumpleaños -->
                <div class="col-6">
                  <label for="fcRegistro_CA_fecha">Fecha de Cumpleaños</label>
                  <input type="date" id="fcRegistro_CA_fecha" class="form-control" />
                </div>
              </div>


              <div class="fcRegistro_CA_botones">
                <button class="fcRegistro_CA_boton_cancelar" id="fcRegistro_CA_boton_cancelar">Cancelar</button>
                <button class="fcRegistro_CA_boton_guardar" id="fcRegistro_CA_boton_guardar">Guardar</button>
              </div>
            </div>

            <div class="column">
              <div class="row fcRegistro_CA_etiquetas" id="fcRegistro_CA_etiquetas"
                style="max-width: 500px; display: flex;"></div>
            </div>

            <p class="fcRegistro_CA_agregarcontacto" id="fcRegistro_CA_agregarcontacto">+ Agregar otra etiqueta</p>
          </div>
        </div>

        <div class="fcRegistro_desplegable-item">
          <div class="fcRegistro_desplegable-header">
            <img src="iconos\Ícono Datos Distribución SVG.svg" alt="Icono">

            <div class="fcRegistro_DD textos">
              <span>Datos Distribución</span>
              <p>Define datos importantes para el trabajo de tus productos hacia este Registro_arr_cliente </p>
            </div>

            <div class="fcRegistro_DD icon ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fcRegistro_desplegable-content">

            <div class="fcRegistro_DD_form-container">
              <div class="fcRegistro_DD_form-group">
                <label for="fcRegistro_DD_ruta">Ruta</label>
                <select id="fcRegistro_DD_ruta" name="fcRegistro_DD_ruta">
                  <option value="">- Seleccionar -</option>
                  <option value="ruta1">Ruta 1</option>
                  <option value="ruta2">Ruta 2</option>
                </select>
              </div>
              <div class="fcRegistro_DD_form-group">
                <label for="fcRegistro_DD_zona">Zona</label>
                <select id="fcRegistro_DD_zona" name="fcRegistro_DD_zona">
                  <option value="">- Seleccionar -</option>
                  <option value="zona1">Zona 1</option>
                  <option value="zona2">Zona 2</option>
                </select>
              </div>
            </div>
            <div class="fcRegistro_DD_form-group">
              <label for="fcRegistro_DD_vendedor">Vendedor asignado</label>
              <input type="text" id="fcRegistro_DD_vendedor" name="fcRegistro_DD_vendedor" placeholder="Buscar">
            </div>
            <div class="fcRegistro_DD_form-group">
              <label for="fcRegistro_DD_coordenadas">Coordenadas Maps</label>
              <input type="text" id="fcRegistro_DD_coordenadas" name="fcRegistro_DD_coordenadas"
                placeholder="Introduce una ubicación">
            </div>
            <div class="fcRegistro_DD_map" id="fcRegistro_DD_map">
              <!-- Mapa embebido -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15605.824455555005!2d-77.0427939!3d-12.0463731!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDAyJzQ4LjkiUyA3N8KwMDInMzguMiJX!5e0!3m2!1ses!2spe!4v1615560382034!5m2!1ses!2spe"
                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>
        </div>

        <div class="fcRegistro_desplegable-item">
          <div class="fcRegistro_desplegable-header">
            <img src="iconos\Ícono campos adicionales SVG.svg" alt="Icono">
            <div class="fcRegistro_AC textos">
              <span>Campos Adicionales</span>
              <p>Agrega información adicional para este contacto de manera personalizada</p>
            </div>
            <div class="fcRegistro_CA icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fcRegistro_desplegable-content">
            <div class="fcRegistro_CA_form-container" id="fcRegistro_CA_campos_adicionales">
              <div class="fcRegistro_CA_form-group">
                <label for="fcRegistro_CA_Composicion">Composición Química</label>
                <input type="text" id="fcRegistro_CA_Composicion" name="fcRegistro_CA_Composicion"
                  placeholder="Buscar composición">
              </div>
              <div class="fcRegistro_CA_form-group">
                <label for="fcRegistro_CA_placa">Placa</label>
                <input type="text" id="fcRegistro_CA_placa" name="fcRegistro_CA_placa" placeholder="Buscar Placa">
              </div>
            </div>


            <!-- Formulario nuevo campo (inicialmente oculto con clase .hidden) -->
            <div id="fcRegistro_CA_formulario_nuevo_campo" class="hidden">
              <div class="fcRegistro_CA_form-group">
                <label for="fcRegistro_CA_nombre_campo">Composición Química</label>
                <input type="text" id="fcRegistro_CA_nombre_campo" placeholder="">
              </div>
              <div class="fcRegistro_CA_form-group">
                <label for="fcRegistro_CA_descripcion_campo">Placa</label>
                <!-- <textarea id="fcRegistro_CA_descripcion_campo" placeholder="Descripción del campo"></textarea> -->
                <textarea class=" fcRegistro_imput form-control autosize" rows="" id="fcRegistro_CA_descripcion_campo"
                  name="fcRegistro_CA_descripcion_campo" placeholder=""></textarea>
              </div>
              <div class="fcRegistro_CA_btn-container">
                <button class="btn fcRegistro_CA_btn_cancelar" id="fcRegistro_CA_btn_cancelar">Cancelar</button>
                <button class="btn fcRegistro_CA_btn_guardar" id="fcRegistro_CA_btn_guardar">Guardar</button>
              </div>
            </div>

            <!-- Contenedor donde mostraremos los campos adicionales almacenados -->
            <div id="fcRegistro_CA_camposAdicionalesContainer"></div>

            <div class="fcRegistro_AC-agregar-ca">
              <p id="fcRegistro_CA_agregarCampo">+ Agregar campo adicional</p>
            </div>
          </div>
        </div>

        <div class="fcRegistro_desplegable-item">
          <div class="fcRegistro_desplegable-header">
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
            <div class="fcRegistro_LP textos">
              <span>Lista de Precios</span>
              <p>Establece una lista de precios de productos preestablecida para est Registro_arr_cliente </p>
            </div>
            <div class="fcRegistro_LP icon ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </div>
          </div>
          <div class="fcRegistro_desplegable-content">


            <div class="fcRegistro_LP_content">

              <select id="fcRegistro_LP_elije" name="fcRegistro_LP_elije">
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


  <div class="modal-footer footer_sticky">
            <button type="submit" class="btn" id="fcRegistro_guardar_datos_cliente_proveedor"
              onclick="guardar_datos_cliente_proveedor();">
              Guardar
            </button>
            <button id="fcRegistro_btn-mas-opciones" type="button" class="btn" onclick="fcclientes_btn_mas_opciones();">
              Más opciones
            </button>
          </div>

  <script>


    // Array para almacenar las etiquetas
    let fcRegistro_CA_ARR_etiquetas = [];

    // Elementos del DOM
    const fcRegistro_CA_formulario = document.getElementById('fcRegistro_CA_formulario');
    const fcRegistro_CA_mensajeVacio = document.getElementById('fcRegistro_CA_mensajeVacio');
    const fcRegistro_CA_etiquetas = document.getElementById('fcRegistro_CA_etiquetas');
    const fcRegistro_CA_agregarcontacto = document.getElementById('fcRegistro_CA_agregarcontacto');
    const fcRegistro_CA_boton_guardar = document.getElementById('fcRegistro_CA_boton_guardar');
    const fcRegistro_CA_boton_cancelar = document.getElementById('fcRegistro_CA_boton_cancelar');

    // Función unificada para manejar etiquetas
    function fcRegistro_CA_manejarEtiquetas(etiquetasIniciales = []) {
      fcRegistro_CA_ARR_etiquetas = etiquetasIniciales; // Inicializar el array de etiquetas con los datos de la API
      fcRegistro_CA_actualizarListaEtiquetas(); // Mostrar etiquetas iniciales

      // Mostrar/ocultar fcRegistro_CA_formulario
      document.getElementById('fcRegistro_CA_mostrarFormulario').addEventListener('click', function (e) {
        e.preventDefault();
        fcRegistro_CA_formulario.style.display = 'block';
        fcRegistro_CA_mensajeVacio.style.display = 'none';
      });

      // Cancelar fcRegistro_CA_formulario
      fcRegistro_CA_boton_cancelar.addEventListener('click', function (e) {
        e.preventDefault();
        // Mostrar el botón de agregar etiqueta nuevamente
        document.getElementById('fcRegistro_CA_agregarcontacto').classList.remove('d-none');
        fcRegistro_CA_formulario.style.display = 'none'; // Ocultar el fcRegistro_CA_formulario
        fcRegistro_CA_limpiarFormulario(); // Limpiar los campos del fcRegistro_CA_formulario
        fcRegistro_CA_mostrarListaEtiquetas(); // Mostrar la lista de etiquetas
      });

      // Guardar etiqueta
      fcRegistro_CA_boton_guardar.addEventListener('click', function (e) {
        e.preventDefault();
        const fcRegistro_CA_nombre = document.getElementById('fcRegistro_CA_nombre').value;
        //const color = document.getElementById('fcc_CA_color').value;
        const fcRegistro_CA_correo = document.getElementById('fcRegistro_CA_correo').value;
        const fcRegistro_CA_celular = document.getElementById('fcRegistro_CA_celular').value;
        const fcRegistro_CA_campo = document.getElementById('fcRegistro_CA_campo').value;
        const fcRegistro_CA_fecha = document.getElementById('fcRegistro_CA_fecha').value;

        if (fcRegistro_CA_nombre && fcRegistro_CA_correo && fcRegistro_CA_celular && fcRegistro_CA_campo && fcRegistro_CA_fecha) {
          const etiqueta = {
            EtqId: Date.now(), // Usamos un timestamp como ID único
            EtqNombre: fcRegistro_CA_nombre,
            //EtqColor: color,
            email: fcRegistro_CA_correo,
            celular: fcRegistro_CA_celular,
            cargo: fcRegistro_CA_campo,
            fecha: fcRegistro_CA_fecha,
          };

          // Verificar si estamos editando una etiqueta existente
          const indiceEdicion = fcRegistro_CA_formulario.getAttribute('data-indice');
          if (indiceEdicion !== null) {
            fcRegistro_CA_ARR_etiquetas[indiceEdicion] = etiqueta; // Editar etiqueta
            fcRegistro_CA_formulario.removeAttribute('data-indice');
          } else {
            fcRegistro_CA_ARR_etiquetas.push(etiqueta); // Agregar nueva etiqueta
          }

          fcRegistro_CA_actualizarListaEtiquetas(); // Actualizar la lista de etiquetas
          fcRegistro_CA_limpiarFormulario(); // Limpiar el fcRegistro_CA_formulario
          fcRegistro_CA_formulario.style.display = 'none'; // Ocultar el fcRegistro_CA_formulario
          // Mostrar el botón de agregar etiqueta nuevamente
          document.getElementById('fcRegistro_CA_agregarcontacto').classList.remove('d-none');
        } else {
          alert('Por favor, completa todos los campos.');
        }
      });

      // Agregar otra etiqueta
      fcRegistro_CA_agregarcontacto.addEventListener('click', function (e) {
        e.preventDefault();
        // Mostrar el botón de agregar etiqueta nuevamente
        document.getElementById('fcRegistro_CA_agregarcontacto').classList.add('d-none');
        fcRegistro_CA_formulario.style.display = 'block'; // Mostrar el fcRegistro_CA_formulario
        fcRegistro_CA_etiquetas.style.display = 'none'; // Ocultar la lista de etiquetas
        fcRegistro_CA_limpiarFormulario(); // Limpiar el fcRegistro_CA_formulario
      });

      // Función para actualizar la lista de etiquetas
      function fcRegistro_CA_actualizarListaEtiquetas() {
        fcRegistro_CA_etiquetas.innerHTML = ''; // Limpiar la lista
        if (fcRegistro_CA_ARR_etiquetas.length > 0) {
          fcRegistro_CA_ARR_etiquetas.forEach((etiqueta, indice) => {
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
                        
                            <svg class="fcRegistro_CA_editar " data-indice="${indice}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="skyblue" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>

                       
                        
                            <svg class="fcRegistro_CA_eliminar " data-indice="${indice}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg>

                        
                    </div>
                `;

            // <div class="badge" style="background-color: ${etiqueta.EtqColor}; color: white;">Color</div>
            col6.appendChild(etiquetaElemento);
            fcRegistro_CA_etiquetas.appendChild(col6);
          });

          // Agregar eventos a los botones de editar y eliminar
          document.querySelectorAll('.fcRegistro_CA_editar').forEach(boton => {
            boton.addEventListener('click', function () {
              const indice = this.getAttribute('data-indice');
              cargarFormularioParaEdicion(indice);


              // Ocultar la lista de etiquetas y el botón de agregar
              document.getElementById('fcRegistro_CA_etiquetas').style.display = 'none';
              document.getElementById('fcRegistro_CA_agregarcontacto').classList.add('d-none');

            });
          });

          document.querySelectorAll('.fcRegistro_CA_eliminar ').forEach(boton => {
            boton.addEventListener('click', function () {
              // Se muestra el cuadro de confirmación con "Aceptar" y "Cancelar"
              if (confirm("¿Estás seguro de que deseas eliminar esta etiqueta?")) {
                // Si el usuario hace clic en "Aceptar", se obtiene el índice de la etiqueta
                const indice = this.getAttribute('data-indice');
                // Se elimina la etiqueta del array
                fcRegistro_CA_ARR_etiquetas.splice(indice, 1);
                // Se actualiza la lista de etiquetas en la interfaz
                fcRegistro_CA_actualizarListaEtiquetas();
                // Se oculta el botón de agregar etiqueta
                fcRegistro_CA_agregarcontacto.style.display = "none";
              }
            });
          });


          fcRegistro_CA_mostrarListaEtiquetas(); // Mostrar la lista de etiquetas
        } else {
          fcRegistro_CA_mensajeVacio.style.display = "block"; // Mostrar mensaje de "No hay etiquetas"
        }
      }

      // Función para mostrar la lista de etiquetas
      function fcRegistro_CA_mostrarListaEtiquetas() {
        if (fcRegistro_CA_ARR_etiquetas.length === 0) {
          fcRegistro_CA_mensajeVacio.style.display = "block"; // Mostrar mensaje de "No hay etiquetas"
          fcRegistro_CA_etiquetasfcRegistro_CA_etiquetas.style.display = "none"; // Ocultar lista
          fcRegistro_CA_agregarcontacto.style.display = "none"; // Ocultar botón de agregar
        } else {
          fcRegistro_CA_mensajeVacio.style.display = "none"; // Ocultar mensaje
          fcRegistro_CA_etiquetas.style.display = "flex"; // Mostrar lista
          fcRegistro_CA_agregarcontacto.style.display = "block"; // Mostrar botón de agregar
        }
      }

      // Función para cargar el fcRegistro_CA_formulario con los datos de una etiqueta para editar
      function cargarFormularioParaEdicion(indice) {
        const etiqueta = fcRegistro_CA_ARR_etiquetas[indice];
        document.getElementById('fcRegistro_CA_nombre').value = etiqueta.EtqNombre;
        //document.getElementById('fcc_CA_color').value = etiqueta.EtqColor;
        document.getElementById('fcRegistro_CA_correo').value = etiqueta.email;
        document.getElementById('fcRegistro_CA_celular').value = etiqueta.celular;
        document.getElementById('fcRegistro_CA_campo').value = etiqueta.cargo;
        document.getElementById('fcRegistro_CA_fecha').value = etiqueta.fecha;

        fcRegistro_CA_formulario.setAttribute('data-indice', indice);
        fcRegistro_CA_formulario.style.display = 'block'; // Mostrar fcRegistro_CA_formulario
      }

      // Función para limpiar el fcRegistro_CA_formulario
      function fcRegistro_CA_limpiarFormulario() {
        document.getElementById('fcRegistro_CA_nombre').value = '';
        //document.getElementById('fcc_CA_color').value = '#ff0000'; // Color por defecto
        document.getElementById('fcRegistro_CA_correo').value = '';
        document.getElementById('fcRegistro_CA_celular').value = '';
        document.getElementById('fcRegistro_CA_campo').value = '';
        document.getElementById('fcRegistro_CA_fecha').value = '';
        fcRegistro_CA_formulario.removeAttribute('data-indice'); // Limpiar índice de edición
      }
    }


    // Inicializar la función con datos de la API si existen
    $(document).ready(function () {
      <?php
      if (!empty($id_registro)) {
        // Obtener el tipo de Registro_arr_cliente  desde PHP
        $RegistroTipo = !empty($RegistroTipoDoc) ? $RegistroTipoDoc : '';
        ?>
        var clienteTipo = "<?php echo $RegistroTipo; ?>";
        if (clienteTipo) {
          fcRegistro_Empresa_Persona(clienteTipo); // Si hay datos, mostrar el fcRegistro_CA_formulario
        }

        <?php
        // Manejo de etiquetas
        if (!empty($Registro_arr_cliente['ArrayEtiquetas']) && is_array($Registro_arr_cliente['ArrayEtiquetas'])) {
          $etiquetas_json = json_encode($Registro_arr_cliente['ArrayEtiquetas']);
          if ($etiquetas_json !== false) {
            ?>
            fcRegistro_CA_manejarEtiquetas(<?php echo $etiquetas_json; ?>); // Inicializar con etiquetas del Registro_arr_cliente 
            <?php
          } else {
            ?>
            console.error("Error al convertir las etiquetas a JSON.");
            <?php
          }
        } else {
          ?>
          fcRegistro_CA_manejarEtiquetas([]); // Inicializar como array vacío
          <?php
        }
      } else {
        ?>
        console.warn("No se proporcionó un ID de Registro_arr_cliente  válido.");
        $("#fcRegistro_formContainer").hide(); // Mantener el fcRegistro_CA_formulario oculto
        fcRegistro_CA_manejarEtiquetas([]); // Inicializar como array vacío
        <?php
      }


      if ($json['opcrud'] == 1 && !empty($json['opRegistro'] == 2)) {
        ?>
        fcRegistro_Empresa_Persona(6); 
        <?php
      }
      ?>
    });









  </script>

  <?php
  exit();
}

//ELIMINAR
if (!empty($json['opcrud']) && ($json['opcrud'] == 3)) {

}
