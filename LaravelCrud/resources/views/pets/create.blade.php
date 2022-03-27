<h1>Nueva Mascota</h1>
<form action = "{{ url('pet') }}" method="post">

   @csrf
   @include('pets.form')
</form>