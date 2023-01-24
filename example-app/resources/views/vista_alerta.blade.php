<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css"  rel="stylesheet" />
    <title>Ejemplo Componentes</title>
</head>
@php
    $color="blue";
@endphp

<body>
    <x-alert :colorText="$color" colorFondo="yellow" class="text-purple-600">CUIDADOOO!!
        <x-slot name="msg">
            TEXTO DE LA ALERTA
        </x-slot>
    </x-alert>

    <x-alert colorText="blue" colorFondo="red" >CUIDADOOO!!
        <x-slot name="msg">
            TEXTO DE LA ALERTA
        </x-slot>
    </x-alert>

    <x-alert2 color="red">
        TITULO DE LA ALERTA
        <x-slot name="entrada1">
            ENTRADA 1
        </x-slot>
        <x-slot name="entrada2">
            ENTRADA 2
        </x-slot>
        <x-slot name="entrada3">
            ENTRADA 3
        </x-slot>
    </x-alert2>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
</body>
</html>
