<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Listado de Mascotas</title>
</head>
<body class="bg-success p-2" style="--bs-bg-opacity: .4;">
<div id="body" class="bg-dark p-2" style="--bs-bg-opacity: .2;">
<div class="alert alert-danger" role="alert">
<h1>Listado de Mascotas.</h1>
</div>
<br>
<a class="btn btn-success"  href="/student/create" role="button"> + Registrar nueva mascota</a>
<br>
<br>
<table class="table table-success table-striped">

    <thread>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>edad</th>
            <th>color</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thread>
    <tbody>
        @foreach ($pets as $pet)
        <tr>
        <td>{{$pet->id}}</td>
        <td>{{$pet->name}}</td>
        <td>{{$pet->age}}</td>
        <td>{{$pet->color}}</td>
            

            <td>
                <a class="btn btn-outline-primary" href="pet/{{$pet ->id}}/edit" role="button">Editar</a>
            </td>
            
            <td>
                <form action="{{ url('/pet/' .$pet->id) }}" method="POST">
                    @csrf 
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-outline-danger" value="Eliminar"
                    onclick="return confirm('¿Realmente desea eliminar el registro?')"
                    >
                </form>
            </td>

</tr>
        @endforeach
</tbody>
</table>
@include('livewire.create')
</body>
</html>