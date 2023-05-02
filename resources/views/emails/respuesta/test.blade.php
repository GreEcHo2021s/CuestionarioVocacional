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

@php
    $respuestasPorCarrera = collect($respuesta)->reduce(function ($acumulador, $datos) {
        $carrera = $datos['carrera'];
        $valor = (int) $datos['respuesta'];
        if (!isset($acumulador[$carrera])) {
            $acumulador[$carrera] = 0;
        }
        if ($valor == 2) {
            $acumulador[$carrera] += ($valor / 4);
        } else if ($valor == 3) {
            $acumulador[$carrera] += ($valor / 3);
        } else {
            $acumulador[$carrera] += 0;
        }
        return $acumulador;
    }, []);
@endphp

<p>Estos son los resultados por carrera:</p>
<ul>
    @foreach ($respuestasPorCarrera as $carrera => $valor)
        <li>{{ $carrera }}: {{ $valor }}</li>
    @endforeach
</ul>

</body>

</html>