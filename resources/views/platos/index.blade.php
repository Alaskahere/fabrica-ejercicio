<h1>Platos disponibles</h1>

<ul>
    @foreach ($platos as $plato)

   <li> {{$plato->name}}</li>
        
    @endforeach
</ul>