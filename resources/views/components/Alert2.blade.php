<div {{$attributes->merge(['class'=>'p-4 text-sm rounded-lg'. $class])}} role="alert">
    <span class="front-medium">{{$title ?? "No existe valor en el title"}}</span>{{$slot}}
   <h1>Estos son los valores de la variable attributes</h1> 
    {{$attributes}}
</div>

