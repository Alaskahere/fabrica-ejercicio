<h1>Mesas</h1>

<ul>
    @foreach ($mesas as $mesa)

   <li> {{$mesa->name}} - cantidad de personas: {{$mesa->personas}}</li>
        
    @endforeach
</ul>