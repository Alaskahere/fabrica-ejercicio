<h1>Bienvenido al menu</h1>
<h2>Registro de Comidas por Categoria</h2>
<ul>
    @foreach ($categorias as $categoria)
       <a href="{{route('categorias.show', $categoria)}}"><li> {{$categoria->name}} </a>  </li></a>
    @endforeach
</ul>