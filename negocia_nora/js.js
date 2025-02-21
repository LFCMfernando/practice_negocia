show// funcion abrir modad 

      //ABRIR MODAL
      $(function () {
        //$('#fcclientes-modal').modal('show');
        //fcRegistro_obtener_data_ws(0) ;

        
      });










      function fcRegistro_Empresa_Persona(clienteTipo, ) {
        // Muestra el fcRegistro_CA_formulario correspondiente
        document.getElementById('fcRegistro_formContainer').style.display = 'block';

        // Agrega la clase scrollable al modal-body
        document.querySelector('.modal-body').classList.add('scrollable');

          // Obtén referencias a ambos botones
  const btnPersona = document.getElementById( 'fcRegistro_btn_persona');
  const btnEmpresa = document.getElementById('fcRegistro_btn_empresa');

   // Limpia estilos en ambos botones (para que no quede el color anterior)
   btnPersona.style.background = '';
   btnPersona.style.color = '';
   btnEmpresa.style.background = '';
   btnEmpresa.style.color = '';

        // Oculta los campos de persona o empresa según el tipo
        if (clienteTipo =='1') {
          // Activa el estilo naranja/blanco en el botón Persona
          btnPersona.style.background = 'orange';
          btnPersona.style.color = 'white';
      
          // Muestra campos de Persona, oculta los de Empresa
          document.getElementById('fcRegistro_personaFields').style.display = 'block';
          document.getElementById('fcRegistro_empresaFields').style.display = 'none';
      
          // Cambia el tipo de documento a "DNI"
          document.getElementById('fcRegistro_tipo_doc').value = "1";
          fcc_actualizarcampo_empresa_persona('persona');
      
        } else if (clienteTipo =='6') {
          // Activa el estilo naranja/blanco en el botón Empresa
          btnEmpresa.style.background = 'orange';
          btnEmpresa.style.color = 'white';
      
          // Muestra campos de Empresa, oculta los de Persona
          document.getElementById('fcRegistro_empresaFields').style.display = 'block';
          document.getElementById('fcRegistro_personaFields').style.display = 'none';
      
          // Cambia el tipo de documento a "RUC"
          document.getElementById('fcRegistro_tipo_doc').value = "6";
          // Actualiza las opciones del select
          fcc_actualizarcampo_empresa_persona(clienteTipo === '6' ? 'empresa' : 'persona');
        }
      }

      function fcc_actualizarcampo_empresa_persona(type) {
        const select = document.getElementById('fcRegistro_tipo_doc');
        select.innerHTML = ''; // Limpiar opciones

        if (type === 'persona') {
          select.innerHTML += '<option value="">Seleccione</option>';
          select.innerHTML += '<option value="1" selected="selected">DNI</option>';
          select.innerHTML += '<option value="4">Carnet De Extranjería</option>';
          select.innerHTML += '<option value="7">Pasaporte</option>';
          select.innerHTML += '<option value="100">Ninguno</option>';
        } else if (type === 'empresa') {
          select.innerHTML += '<option value="">Seleccione</option>';
          select.innerHTML += '<option value="6" selected="selected">RUC</option>';
        }
      }

      // function hideForm() {
      //   document.getElementById('fcRegistro_formContainer').style.display = 'none';
      //   document.querySelector('.modal-body').classList.remove('scrollable');

      //   // Resetear el fcRegistro_CA_formulario
      //   document.getElementById('fcc_dynamicForm').reset();
      //   fcc_actualizarcampo_empresa_persona('persona'); // Por defecto, mostrar opciones de persona
      //   document.getElementById('fcRegistro_personaFields').style.display = 'none';
      //   document.getElementById('fcRegistro_empresaFields').style.display = 'none';
      // }
function fcclientes_btn_mas_opciones(){
  document.getElementById('fcRegistro_btn-mas-opciones').classList.add('d-none');
  



  fcc_acordiones();


  // Seleccionamos el contenedor footer y el botón Guardar
  const footer = document.querySelector('.modal-footer.footer_sticky');
  const btnGuardar = document.getElementById('fcRegistro_guardar_datos_cliente_proveedor');
  
  if (footer && btnGuardar) {
    // Hacemos que el footer sea flex
    footer.style.display = 'flex';
    footer.style.alignItems = 'center';

    // Movemos el botón "Guardar" a la derecha
    btnGuardar.style.marginLeft = 'auto';
    // Agrega margen a la derecha
  btnGuardar.style.marginRight = '20px';
    
  }
   
        // Modificar fcRegistro_container
        const container = document.querySelector('.fcRegistro_container');
        if (container) {
          container.style.display = 'grid';
          container.style.gridTemplateColumns = '0.5fr 1fr';
        }

         

        // Modificar fcRegistro_container
        const content = document.querySelector('.fcRegistro_contents');
        if (content) {
          content.classList.remove('fcRegistro_hidden');
          content.scrollIntoView({ behavior: "smooth", block: "start" });
        }
}
      



// function de los acordiones 
function fcc_acordiones() {

                      // Selecciona todos los fcRegistro_CA_botones de toggle dentro del acordeón
                      const toggleButtons = document.querySelectorAll(".fcRegistro_desplegable-header");

                      toggleButtons.forEach(header => {
                        header.addEventListener("click", () => {
                          const content = header.nextElementSibling; // Encuentra el contenido asociado
                          const icon = header.querySelector(".icon i"); // Encuentra el ícono dentro del header

                          // Alternar el estado del acordeón actual
                          if (content.style.display === "block") {
                            content.style.display = "none";
                            icon.classList.remove("bx-chevron-down");
                            icon.classList.add("bx-chevron-right");
                            header.style.borderLeft = "none"; // Eliminar borde del header
                            content.style.borderLeft = "none"; // Eliminar el borde cuando se oculta
                          } else {
                            content.style.display = "block";
                            icon.classList.remove("bx-chevron-right");
                            icon.classList.add("bx-chevron-down");
                            header.style.borderLeft = "4px solid #ff9c00"; // Agregar borde al header
                            content.style.borderLeft = "4px solid #ff9c00"; // Agregar el borde izquierdo
                          }
                        });
                      });







                        // Array para almacenar los campos adicionales
  let camposAdicionales = [];

  // Referencias a los elementos del DOM
  const container =  document.getElementById('fcRegistro_CA_campos_adicionales');
  const agregarCampoBtn      = document.getElementById('fcRegistro_CA_agregarCampo');
  const formularioNuevoCampo = document.getElementById('fcRegistro_CA_formulario-nuevo-campo');
  const btnCancelar          = document.getElementById('fcRegistro_CA_btn_cancelar');
  const btnGuardar           = document.getElementById('fcRegistro_CA_btn_guardar');

  const inputNombreCampo      = document.getElementById('fcRegistro_CA_nombre_campo');
  const inputDescripcionCampo = document.getElementById('fcRegistro_CA_descripcion_campo');

  const fcRegistro_CA_camposAdicionalesContainer = document.getElementById('fcRegistro_CA_camposAdicionalesContainer');

  agregarCampoBtn.addEventListener('click', () => {
  // Muestra el formulario
  formularioNuevoCampo.classList.remove('hidden');
  
  // Oculta otros elementos
  
  container.classList.add('d-none');
  agregarCampoBtn.classList.add('d-none');
  fcRegistro_CA_camposAdicionalesContainer.classList.add('d-none'); // Ocultar el contenedor de campos adicionales
});


  // Ocultar formulario al presionar "Cancelar"
  btnCancelar.addEventListener('click', () => {
  // Limpia los campos
  limpiarFormulario();

  // Oculta el formulario
  formularioNuevoCampo.classList.add('hidden');

  // Muestra el contenedor de campos adicionales y el botón de agregar
  fcRegistro_CA_camposAdicionalesContainer.classList.remove('d-none');
  agregarCampoBtn.classList.remove('d-none');
  container.classList.remove('d-none');
});


  // 2) Al guardar, tomar los datos e insertarlos en el array, luego mostrar en el contenedor
  // Variable para almacenar el índice del campo que se está editando (-1 si es un nuevo campo)
let indiceEdicion = -1;

btnGuardar.addEventListener("click", () => {
  const nombre = inputNombreCampo.value.trim();
  const descripcion = inputDescripcionCampo.value.trim();

  if (!nombre) {
    alert("Por favor, ingresa el nombre del campo.");
    return;
  }

  if (indiceEdicion === -1) {
    // Modo: Agregar nuevo campo
    camposAdicionales.push({ nombre, descripcion });
  } else {
    // Modo: Editar campo existente
    camposAdicionales[indiceEdicion].nombre = nombre;
    camposAdicionales[indiceEdicion].descripcion = descripcion;

    // Restablecemos la variable a -1 para que futuras ediciones sean nuevas adiciones
    indiceEdicion = -1;
  }

  renderCamposAdicionales();
  limpiarFormulario();
  container.classList.remove('d-none');

  formularioNuevoCampo.classList.add('hidden');
  fcRegistro_CA_camposAdicionalesContainer.classList.remove('d-none');
  agregarCampoBtn.classList.remove('d-none');
  // Mostrar en la consola lo que almacena el array
  console.log(" Datos almacenados en el array:", camposAdicionales);
});

// Función para editar campo por índice
function editarCampo(index) {
  const campoAEditar = camposAdicionales[index];

  // Mostramos el formulario y rellenamos los inputs
  agregarCampoBtn.classList.add('d-none');
  container.classList.add('d-none');
  fcRegistro_CA_camposAdicionalesContainer.classList.add('d-none'); // Ocultar el contenedor de campos adicionales
  formularioNuevoCampo.classList.remove("hidden");
  inputNombreCampo.value = campoAEditar.nombre;
  inputDescripcionCampo.value = campoAEditar.descripcion;

  // Establecemos el índice actual en edición
  indiceEdicion = index;
}

  // Función para limpiar formulario
  function limpiarFormulario() {
    inputNombreCampo.value = '';
    inputDescripcionCampo.value = '';
  }

  // Función para mostrar los campos en el contenedor
  function renderCamposAdicionales() {
    // 1) Limpias el contenedor
    fcRegistro_CA_camposAdicionalesContainer.innerHTML = '';
  
    // 2) Recorres cada elemento del array
    camposAdicionales.forEach((campo, index) => {
      // A) Crea el <div> con la clase "campo-adicional-item"
      const campoItem = document.createElement('div');
      campoItem.classList.add('campo-adicional-item');
  
      // B) Primer bloque: Nombre
      const nombreWrapper = document.createElement('div');
      nombreWrapper.classList.add('campo-wrapper');
      
      const labelNombre = document.createElement('label');
      labelNombre.textContent = 'Composición Química';
      nombreWrapper.appendChild(labelNombre);
      
      const inputNombre = document.createElement('input');
      inputNombre.type = 'text';
      inputNombre.value = campo.nombre;
      inputNombre.readOnly = true;
      nombreWrapper.appendChild(inputNombre);
  
      // C) Segundo bloque: Descripción
      const descripcionWrapper = document.createElement('div');
      descripcionWrapper.classList.add('campo-wrapper');
  
      const labelDesc = document.createElement('label');
      labelDesc.textContent = 'Placa';
      descripcionWrapper.appendChild(labelDesc);
  
      const inputDescripcion = document.createElement('input');
      inputDescripcion.value = campo.descripcion;
      inputDescripcion.readOnly = true;
      descripcionWrapper.appendChild(inputDescripcion);
  
      // D) Agrega ambos .campo-wrapper al .campo-adicional-item
      campoItem.appendChild(nombreWrapper);
      campoItem.appendChild(descripcionWrapper);
  
      // E) Inserta el .campo-adicional-item en #fcRegistro_CA_camposAdicionalesContainer
      fcRegistro_CA_camposAdicionalesContainer.appendChild(campoItem);
  
      // F) Ahora, crea un contenedor aparte para los botones
      const acciones = document.createElement('div');
      acciones.classList.add('boton-acciones');

  const botones = document.createElement('div');
      acciones.classList.add('boton-acciones');
      const btnEditar = document.createElement('button');
      btnEditar.textContent = 'Editar';
      btnEditar.id = 'btnEditar'; // Asignamos un id
      btnEditar.addEventListener('click', () => editarCampo(index));
      
      const btnEliminar = document.createElement('button');
      btnEliminar.textContent = 'Eliminar';
      btnEliminar.id = 'btnEliminar'; // Asignamos un id
      btnEliminar.addEventListener('click', () => eliminarCampo(index));
      
      acciones.appendChild(btnEditar);
      acciones.appendChild(btnEliminar);
  
      // G) Agrega .boton-acciones fuera de .campo-adicional-item 
      //    pero aún dentro de #fcRegistro_CA_camposAdicionalesContainer
      fcRegistro_CA_camposAdicionalesContainer.appendChild(acciones);
    });
  }
  
  
  
  // Función para eliminar campo por índice
  function eliminarCampo(index) {
    alert("seguro que desea eliminar el campo ");
    // Elimina el elemento del array
    camposAdicionales.splice(index, 1);
    // Vuelve a renderizar
    renderCamposAdicionales();
    // Mostrar contenedores y botón de agregar
  container.classList.remove('d-none');
  fcRegistro_CA_camposAdicionalesContainer.classList.remove('d-none');
  agregarCampoBtn.classList.remove('d-none');
  }

 
  // Función para restaurar el evento guardar original
  function restaurarEventoGuardar() {
    btnGuardar.onclick = () => {
      const nombre     = inputNombreCampo.value.trim();
      const descripcion = inputDescripcionCampo.value.trim();

      if (!nombre) {
        alert('Por favor, ingresa el nombre del campo.');
        return;
      }

      const nuevoCampo = {
        nombre,
        descripcion
      };

      camposAdicionales.push(nuevoCampo);
      renderCamposAdicionales();
      limpiarFormulario();
      formularioNuevoCampo.classList.add('hidden');
    };
  }






                    };


                    function fcRegistro_abrirModalPersona() {
                      const modalElement = document.getElementById('fcclientes-modal');
                      
                      const myModal = new bootstrap.Modal(modalElement);
                  
                     
                     fcRegistro_obtener_data_ws(0, 1); 
                  
                      
                      myModal.show();
                  }
                  
                  function fcRegistro_abrirModalEmpresa() {
                      const modalElement = document.getElementById('fcclientes-modal');
                      const myModal = new bootstrap.Modal(modalElement);
                  
                      fcRegistro_obtener_data_ws(0, 6); // Limpiamos el formulario con datos vacíos
                  
                     
                  
                      myModal.show();
                  }

                            

  

                    function fcRegistro_obtener_data_ws(id_cliente, tShowForm = 0) {
                      // Mostrar el spinner de carga
                      document.getElementById('fcRegistro_loadingSpinner').classList.remove('d-none');
                      document.getElementById('fcRegistro_formulario').classList.add('d-none');
                  
                      const myHeaders = new Headers();
                      myHeaders.append("Content-Type", "application/json");
                  
                      const raw = JSON.stringify({
                          "operacionCliente": 1,
                          "id_cliente": id_cliente
                      });
                  
                      const requestOptions = {
                          method: "POST",
                          headers: myHeaders,
                          body: raw,
                          redirect: "follow"
                      };
                  
                      fetch("./crud_data_cliente.php", requestOptions)
                      .then((response) => response.text())  // Convertir la respuesta a texto (HTML)
                      .then((html) => {
                          // Ocultar el spinner de carga
                          document.getElementById('fcRegistro_loadingSpinner').classList.add('d-none');
                  
                          // Mostrar el formulario y llenarlo con el HTML obtenido
                          const formularioDiv = document.getElementById('fcRegistro_formulario');
                          formularioDiv.innerHTML = html;  // Insertar el HTML en el div
                          formularioDiv.classList.remove('d-none');  // Mostrar el div
                  
                          // Extraer y ejecutar el código JavaScript del HTML
                          const scripts = formularioDiv.getElementsByTagName('script');
                          for (let i = 0; i < scripts.length; i++) {
                              const scriptContent = scripts[i].innerHTML;
                              if (scriptContent) {
                                  // Ejecutar el código JavaScript usando eval (ten cuidado con eval por razones de seguridad)
                                  eval(scriptContent);
                              }
                          }

                          
                          $(document).ready(function() {

                          // Mostrar el formulario adecuado
                          if(tShowForm){
                            fcRegistro_Empresa_Persona(tShowForm);
                          }

                        });

                          
                      })
                      .catch((error) => {
                          console.error(error);  // Manejar errores
                          document.getElementById('fcRegistro_loadingSpinner').classList.add('d-none');  // Ocultar el spinner en caso de error
                      });
                  }

                    
                  


