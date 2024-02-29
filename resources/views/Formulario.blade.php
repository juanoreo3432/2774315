<h1>Formulario</h1>

<form action="{{route('Table1.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del Telefono:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Nombre del prosecador:
    <br>
    <input type="number" name="procesador">
</label>
<br>


<button type="submit">Enviar Formulario:</button>
</form>