<h1>Formulario</h1>

<form action="{{route('primo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingrese el valor de b :
    <br>
    <input type="number" name="num1">
</label>
<br>
<label>
    ingrese el valor de a:
    <br>
    <input type="numbre" name="num2">
</label>
<br>
<label>
    ingrese el valor de c:
    <br>
    <input type="numbre" name="num3">
</label>


<button type="submit">Enviar Formulario:</button>
</form>