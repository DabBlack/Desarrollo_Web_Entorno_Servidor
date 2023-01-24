<div>
    <div class="p-4 mb-4 text-sm text-{{$colorText}}-700 bg-{{$colorFondo}}-100 rounded-lg dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">{{$slot}}</span> {{$msg}}.
        <p {{$attributes}}>TEXTO DEL PARRAFO</p>
        {{$peligro()}}
    </div>
</div>
