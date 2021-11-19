@props([
    'alpName' => false
])

<div x-show="{{$alpName}}"
     @keydown.esc.window="{{ $alpName}} = false"
     x-transition.enter.duration.300ms
     x-transition.out.opacity.0.duration.300ms
    {{ $attributes->merge(['class' => 'fixed h-screen items-center transition
            justify-center top-0 left-0 right-0 bottom-0 z-50 w-screen bg-white ']) }}>

    {{ $slot }}

</div>
