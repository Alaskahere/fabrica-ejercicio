<h1>crear Categorias </h1>
<form action="{{route('categorias.store')}}" method="POST">
    @csrf

<div>
    <label for=>Nombre de Categoria
        <input type="text" name="name" >

    </label>
</div>
<div>
    <label for=>Color:
        <input type="text" name="color" >

    </label>
</div>
<button>Enviar</button>
</form>