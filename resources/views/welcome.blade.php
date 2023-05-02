<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
<hr style="border: 2px solid #0095db;">
<header>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://cms.fi.uba.ar/uploads/logo_FIUBA_color_2_eb5b4d0124.png" alt="FIUBA Logo" width="auto" height="40">
        </a>

            <div class="d-flex input-group w-auto">
                <a href="https://campusgrado.fi.uba.ar/course/view.php?id=2 " class="m-1 text-muted small" style="text-decoration:none ;">
                    <h3>SOVE</h3>
                </a>
                
                <a href="https://fi.uba.ar" class="m-1 text-muted" style="text-decoration:none ;">
                    <h3>FIUBA</h3>
                </a>
                
                <a href="https://campusgrado.fi.uba.ar/course/view.php?id=1076" class="m-1 text-muted" style="text-decoration:none ;">
                    <h3>OTROS</h3>
                </a>
                
                <a href="https://www.fi.uba.ar/institucional/secretarias/secretaria-de-inclusion-genero-bienestar-y-articulacion-social" class="m-1 text-muted" style="text-decoration:none ;">
                    <h3>SIGBAS</h3>
                </a>
            </div>
        </div>
    </nav>
</header>




    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-2 mt-1">
                

                    <h2 class="mt-2 text-center">Formulario</h2>
                    <hr style="border: 1px solid #0095db;">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/FIUBA_gris_transparente.png"
                            class="card-img-top" alt="FIUBA logo" />
                        <div class="card-body">
                            <form method="POST" action="{{ route('usuario.store') }}">
                            @csrf
                                <div class="form-group m-1">
                                    <div class="form-outline">
                                        <input type="text" id="nombre" name="nombre" class="form-control" required />
                                        <label class="form-label" for="nombre">Nombre</label>
                                    </div>
                                </div>
                                <div class="form-group m-2">
                                    <div class="form-outline">
                                        <input type="text" id="apellido" name="apellido" class="form-control"
                                            required />
                                        <label class="form-label" for="apellido">Apellido</label>
                                    </div>
                                </div>
                                <div class="form-group m-2">
                                    <div class="form-outline">
                                        <input type="number" id="dni" name="dni" class="form-control" required />
                                        <label class="form-label" for="dni">Dni</label>
                                    </div>
                                </div>
                                <div class="form-group m-2">
                                    <div class="form-outline">
                                        <input type="email" id="email" name="email" class="form-control" required />
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>
                                <div class="form-group m-2">
                                    <div class="form-outline">
                                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                                            class="form-control" required />
                                        <label class="form-label" for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    </div>
                                </div>


                                <div class="form-group p-2">
                                    <select class="form-control" id="educacion_alcanzada" name="educacion_alcanzada"
                                        required>
                                        <option selected="true" disabled="disabled">Educación alcanzada</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                        <option value="Universidad">Universidad</option>
                                    </select>
                                </div>
                                <div class="form-group m-2">
                                    <div class="form-outline">
                                        <input type="number" min=18 id="edad" name="edad" class="form-control"
                                            required />
                                        <label class="form-label" for="edad">Edad</label>
                                    </div>
                                    <span id="edad-error" class="text-danger"></span>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 mt-2 mb-2">
                    <div class="row col-12 mt-5">
                        <h2>Información sobre el formulario</h2>
                        <p style="display: flex;justify-content: center;align-items: center;height: 300px; ">
                            El formulario consiste en diversas preguntas sobre las competencias de las diferentes carreras que se dictan en la Universidad
                            de Buenos Aires donde se permite calificar las mismas según las respuesta se da una posible tendencia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">

      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
        Facultad de Ingeniería de la Universidad de Buenos Aires<br>
        Av. Paseo Colón 850 - C1063ACV - Buenos Aires - Argentina<br>
        Tel.: +54 (11) 528-50402 / 50604<br>
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->

    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://fi.uba.ar/">FIUBA</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script> 
    const fechaNacimiento = document.getElementById('fecha_nacimiento');
const edad = document.getElementById('edad');
const edadError = document.getElementById('edad-error');

// Función para calcular la edad a partir de una fecha de nacimiento
function calcularEdad(fechaNacimiento) {
    const diff = Date.now() - fechaNacimiento.getTime();
    const ageDate = new Date(diff);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

// Función para validar la edad
function validarEdad() {
    const fechaNacimientoValue = fechaNacimiento.value;
    const edadValue = edad.value;

    if (fechaNacimientoValue && edadValue) {
        const fechaNacimientoDate = new Date(fechaNacimientoValue);
        const edadCalculada = calcularEdad(fechaNacimientoDate);

        if (edadCalculada != edadValue) {
            edadError.textContent = 'La edad no corresponde a la fecha de nacimiento';
        } else {
            edadError.textContent = '';
        }
    } else {
        edadError.textContent = '';
    }
}

// Evento que se dispara cuando se escribe en el campo de edad
edad.addEventListener('input', validarEdad);

    </script>
</body>

</html>