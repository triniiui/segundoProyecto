@props(['type'=>'Info'])
@php
    switch($type){
        case 'Info':
            $title = $title ?? 'Info alert!';
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";
            break;
        case 'Danger':
            $title = $title ?? 'Danger alert!';
            $class="text-red-800 bg-red-50 dark:text-red-300";
            break;
        case 'Warning':
            $title = $title ?? 'Warning alert!';
            $class="text-yellow-800 bg-yellow-50 dark:text-yellow-300";
            break;
        case 'Success':
            $title = $title ?? 'Success alert!';
            $class="text-green-800 bg-green-50 dark:text-green-300";
            break;
        default:
            $title = $title ?? 'Info alert!';
            $class="text-blue-800 bg-blue-50 dark:text-blue-300";
            break;
        }
   @endphp
   <div{{$attributes->merge(['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
    <span class="front-medium">{{$title}}</span>{{$slot}} 
    <!-- Podemos imprimir los atrubutos que se le pasan y mediante merge unimos-->
    <p>
        {{$attributes}}
    </p>
   </div>



    