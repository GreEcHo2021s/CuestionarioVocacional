<x-mail::message>
    <x-slot name="intro">
        <h2>Introduction</h2>
    </x-slot>
    @isset($respuesta)
    {{$respuesta}}

    @endisset
    @empty($respuesta)
    <li>Hay que revisar porque no lo pasa </li>
    @endempty
    
    <x-mail::button :url="'google.com'">
        Button Text
    </x-mail::button>

    <x-slot name="outro">
        <p>Thanks,</p>
        <p>{{ config('app.name') }}</p>
    </x-slot>
</x-mail::message>
