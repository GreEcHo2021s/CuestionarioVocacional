<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">FIUBA</a>
                <div class="d-flex input-group w-auto">
                    <a href="http:// " class="m-1 text-dark" style="text-decoration:none ;">
                        <h3>link1</h3>
                    </a>
                    <a href="http://" class="m-1 text-dark" style="text-decoration:none ;">
                        <h3>link2</h3>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <div class="container text-center mt-1" id="selector">

        <h1>Selección de Área</h1>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <button
                    style="background: url('https://i.pinimg.com/originals/10/ce/a8/10cea814db9d3768cca0cb86d9cb19d9.png'); object-fit: cover; width: 300px; height: 300px; background-repeat: no-repeat;"
                    class="btn  btn-outline-light btn-lg rounded-circle" value="1">INDUSTRIA</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center ">
                <button
                    style="background: url('https://blog.nuoplanet.com/hubfs/Blog/CCAA%20en%20la%20Industria.jpg'); object-fit: cover; width: 300px; height: 300px; background-repeat: no-repeat;"
                    class="btn  btn-outline-light btn-lg rounded-circle" value="2">INDUSTRIA</button>
                <button
                    style="background: url('https://blog.nuoplanet.com/hs-fs/hubfs/Blog/industrializacion.jpg?width=989&name=industrializacion.jpg'); object-fit: cover; width: 300px; height: 300px; background-repeat: no-repeat;"
                    class="btn  btn-outline-light btn-lg rounded-circle" value="3">INDUSTRIA</button>
            </div>
        </div>
    </div>

    <div class="container my-2"  style="display: none;" id="bancopreguntas">
        <div class="card text-center bg-light" style="border-radius: 20px;">
            <div class="card-header">Cuestionario Vocacional</div>
            <div class="card-body">
                <h5 class="card-title">Pregunta</h5>
                <p class="card-text" id="pregunta-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel doloribus eius impedit temporibus quisquam! Perferendis saepe asperiores neque, omnis nemo, consequatur repellat at accusantium ut modi eveniet possimus natus facilis!
                Explicabo eligendi, asperiores ad eveniet architecto id autem itaque quia tenetur nemo quasi! Sed in nesciunt libero dolor quia? Animi totam illo dolor dignissimos magni, exercitationem iste illum explicabo quibusdam?
                Eius ipsa, quis tempore quaerat quod neque ad consequatur eveniet. Vitae, repellendus ducimus quia porro beatae tempore dolorum omnis recusandae veniam excepturi voluptatibus hic iusto debitis sit nobis enim a?</p>

            </div>
            <div class="card-footer text-muted">

                <div class="row">
                    <div class="col-12">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                        <button class="btn btn-primary rounded-pill" value="1">En desacuerdo</button>
                        <button class="btn btn-primary rounded-pill" value="2">Indiferente</button>
                        <button class="btn btn-primary rounded-pill" value="3">De acuerdo</button>                        
                    </div>
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
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">

            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                    repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                    eum harum corrupti dicta, aliquam sequi voluptate quas.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    
</body>
<script>
  let preguntaIndex=0;
  // Función para mostrar la siguiente pregunta

  function mostrarPregunta() {
        let pregunta = Object.values(JSON.parse(localStorage.getItem('preguntas')))[0][preguntaIndex]['pregunta'];
        let contenido=document.getElementById('pregunta-container').innerHTML= pregunta ;
    }
   
  let elemento = document.getElementById('selector');
  elemento.addEventListener('click',function(e){
  // Aquí va el código que quieres ejecutar después de que se haya cargado el DOM
    e.preventDefault();
    let elemento2 = document.getElementById('selector');
    const pedido= fetch('/preguntas/' + e.target.value)
      .then(response => {
      if (!response.ok) {
        throw new Error('Error de red');
      }
        return response.json();
      })
      .then(data => {
        localStorage.setItem('preguntas', JSON.stringify(data));
        document.getElementById('bancopreguntas').style.display="block";
        mostrarPregunta();
        document.getElementById('selector').style.display="none";
      })
      .catch(error => {
        console.log(error);
      });
   });
    document.addEventListener('DOMContentLoaded',function(e){
     e.preventDefault();
     console.log({{$id}});
     localStorage.clear();
     elemento2=document.getElementsByClassName('btn-primary');
   for (let i=0; i< elemento2.length; i++) {
        //Añades un evento a cada elemento
        elemento2[i].addEventListener("click",function(e) {
   // Función para guardar la respuesta en localStorage
      // Verificar si existe respuestas en el localStorage, bueno aca medio que si no existe lo crea
        let respuestas = JSON.parse(localStorage.getItem('respuestas')) || {};
      // Aca se viene todo el tratamiento de datos para mandar con el formato que quiero la respuestas
      // La idea es que cuando se haga click en algunos de los botones se active el evento y realize esta
      // función, con lo cual debería tener el valor que respondio
        // Aca va estar la información de la carrera, area de la pregunta
        valorespregunta=Object.values(JSON.parse(localStorage.getItem('preguntas')))[0][preguntaIndex];
        let prepraracion={pregunta: valorespregunta['id'], carrera: valorespregunta['carrera'] , area: valorespregunta['area'] , respuesta: e.target.value }
        respuestas[preguntaIndex] = prepraracion;
        localStorage.setItem('respuestas', JSON.stringify(respuestas));
        preguntaIndex++;
        if(preguntaIndex>Object.values(JSON.parse(localStorage.getItem('preguntas')))[0].length-1){
        // Esto es medio la condición para ver si ya se terminarón de responder todas las preguntas
        // Se debería ejecutar el envio de información y que se muestren el análisis
        //Aca debería ir el idUsuario
        tratamiento_datos= {'respuesta': respuestas,'idUsuario': {{$id}}};
        valoresquesemandan=JSON.stringify(tratamiento_datos);
        // Obtener el token CSRF desde el meta-tag en el HTML
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        // Hacer la petición POST con el token CSRF en las cabeceras
        console.log(valoresquesemandan);
        fetch('/respuestas', {
          method: 'POST',
          body: valoresquesemandan,
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': token
          }
        })
        .then(response => {
          if (response.ok) {
            console.log('Respuesta recibida con éxito');
            window.location.href = '/conclusion';
          } else {
            console.error('Error en la petición');
          }
        })
        .catch(error => {
          console.error('Error en la petición:', error);
        });
        }
        else{
        // Esto sería que hay que seguir mostrando la siguiente pregunta
         mostrarPregunta();
        }
   })}

    });

    
    </script>

</html>