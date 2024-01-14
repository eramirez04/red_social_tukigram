@props(['type' => 'info'])

@php

switch ($type){
    case 'info':
        $clases = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400 bg-blue-50";
        break;

    case 'danger':
         $clases = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400 bg-red-5";
         break;

    default :
        $clases = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400 bg-blue-40";
        break;
}
@endphp

<div class="p-4 mb-4 text-sm  rounded-lg {{$clases}} " role="alert">
    <h2>
        {{ $title }}
    </h2>
    <span class="font-medium">
        {{$slot }}
    </span>
</div>
