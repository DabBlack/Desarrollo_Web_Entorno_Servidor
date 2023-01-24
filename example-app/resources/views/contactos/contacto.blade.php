@include('contactos.cabecera')

<h2>Hola soy {{$nombre}} y tengo {{$edad}} años</h2>

@include('contactos.cabecera', ['nombre'=>$nombre])
