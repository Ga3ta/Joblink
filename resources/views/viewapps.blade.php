<ul>
    @foreach($applicants as $a)
    <li>Nombre: {{$a->nombre}}<br>Trabajo aplicado: {{$a->empresa}} - {{$a->descripcion}}
    <br>Teléfono: {{$a->phone}}<br>Email: {{$a->mail}}
    </li>
    @endforeach
</ul>