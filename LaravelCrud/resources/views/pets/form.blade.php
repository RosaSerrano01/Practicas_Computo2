<label for="name">Nombre:</label>
<input type="text" name="name" id="" value="{{ isset($pet->name )?$pet->name:'' }}">
<label for= "age"></label>
<input type="text" name="age" id="" value="{{ isset($pet->age )?$pet->age:'' }}" >
<button type="submit">Guardar</button>