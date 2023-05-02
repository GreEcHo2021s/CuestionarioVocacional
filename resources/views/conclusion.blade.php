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
    <div class="container text-center mt-1">
    <div class="container my-2" >
        <div class="card text-center bg-light" style="border-radius: 20px;">
            <div class="card-header">Cuestionario Vocacional</div>
            <div class="card-body">
                <h5 class="card-title">Resultado</h5>
                <p class="card-text" id="resultado-container"></p>

            </div>

        </div>
    </div>
    
    </div>
</body>
<script>
window.addEventListener('DOMContentLoaded', function(e){
    e.preventDefault();
    // Aca obtengo los datos en el localstorage y los paso al array
    let informacion = Object.values(JSON.parse(localStorage.getItem('respuestas')));
    const respuestasPorCarrera = informacion.reduce((acumulador, datos) => {
  const carrera = datos.carrera;
  let valor = parseInt(datos.respuesta);
  if (!acumulador[carrera]) {
    acumulador[carrera] = 0;
  }
  if (valor == 2) {
    acumulador[carrera] += (valor / 4);
  } else if (valor == 3) {
    acumulador[carrera] += (valor / 3);
  } else {
    acumulador[carrera] += 0;
  }
  return acumulador;
}, {});
    //Hasta aca anda bien, lo siguiente va a ser rápido para ver si lo puedo terminar.
    // document.getElementById('resultado-container').innerHTML=  JSON.stringify(respuestasPorCarrera); 
    // Obtenemos el valor máximo
const maxValor = Math.max(...Object.values(respuestasPorCarrera));

// Creamos una fila para las tarjetas
const cardsRow = document.createElement('div');
cardsRow.classList.add('row');

// Creamos una tarjeta para cada carrera
Object.entries(respuestasPorCarrera).forEach(([carrera, valor]) => {
  const color = valor === maxValor ? 'green' : 'red';
  const cardCol = document.createElement('div');
  cardCol.classList.add('col-sm-4', 'mb-4');

  const card = document.createElement('div');
  card.classList.add('card', 'border-0', 'rounded');

  const cardBody = document.createElement('div');
  cardBody.classList.add('card-body', 'text-center');
  cardBody.style.color = color;

  const cardTitle = document.createElement('h5');
  cardTitle.classList.add('card-title', 'mb-3');
  cardTitle.textContent = carrera;

  const cardText = document.createElement('p');
  cardText.classList.add('card-text');
  cardText.textContent = `Valor: ${valor}`;

  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardText);
  card.appendChild(cardBody);
  cardCol.appendChild(card);
  cardsRow.appendChild(cardCol);
});

// Añadimos la fila de tarjetas al contenedor
const resultadoContainer = document.getElementById('resultado-container');
resultadoContainer.appendChild(cardsRow);

});
</script>


</html>