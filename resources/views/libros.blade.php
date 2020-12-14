
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Libros</title>
</head>
<body>
<div>
        <form class="form-horizontal was-validated" method="POST" action="{{route('registro')}}">
            
                <hr>
            <label for="text">Nombre</label>
            <input type="text" name="Nombre" placeholder="Nombre">
            <hr>
            <label for="text">Autor</label>
            <input type="text" name="Autor" placeholder="Telefono">
            <hr>
            <button type="submit"  class="btn btn-submit">Guardar</button>
        </form>
    </div>


<section class="container">
<div class="content">
<h1>Lista de libros</h1>
<table border='5';>
<tr>
<th>Id</th>
<th>Autor</th>
<th>Nombre</th>

</tr>
@foreach($libros as $lib)
<tr>
<td>{{$lib->id}}</td>
<td>{{$lib->Autor}}</td>
<td>{{$lib->Nombre}}</td>

</tr>
@endforeach
</table>
</div>
</section>
</body>
</html>
