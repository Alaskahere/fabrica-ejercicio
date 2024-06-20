<h1>Agregar Platos</h1>
<form action="{{route('platos.store')}}" method="POST">

<div>
    <label >Nombre</label>
    <input type="text" name="name">
</div>
<div>
    <label >descripcion</label><br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
</div>
<div>
    <label >Precio</label>
    <input type="number" name="precio">
</div>
<div>
    <label >Categoria</label>
    <select name="categoria_id" id="">
        @foreach ($categorias as $categoria )
        <option value="{{$categoria->categoria_id}}">{{$categoria->name}}</option>
            
        @endforeach

    </select>
   
</div>
<button>Enviar</button>
</form>