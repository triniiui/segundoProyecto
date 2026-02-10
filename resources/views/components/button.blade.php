<div>
    <?php //se recibe 2 atributos los cuales son $type y el $slot, este ultimo es el texto que va dentro el boton
    //con merge defino los valores determinados y lo concateno con los atributos que se reciben ?>
    <button type="button" {{$attributes->merge(['class'=>'mb-3 btn btn-'.$type])}}>{{$slot}}
    </button>

    {{$attributes}}
    {{$type}}
</div>