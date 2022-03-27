<h2>Editar Regsitro de Mascotas </h2>
<form action="{{ url ('/pet/' .$pet->id) }}" method="POST">
    @csrf
    {{method_field('PUT') }}
    @include('pets.form')

</form>