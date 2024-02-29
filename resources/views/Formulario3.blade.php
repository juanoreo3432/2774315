<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1>Formulario</h1>


<form action="{{route('Table3.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    edad:
    <br>
    <input type="number" name="edad">
</label>
<br>
<label>
    fecha de nacimiento:
    <br>
    <input type="text" name="fecha de nacimiento">
</label>
<br>
<label>
    Numero de telefono :
    <br>
    <input type="text" name="telefono">
</label>



<button type="submit">Enviar Formulario:</button>
</form>




































