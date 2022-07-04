@props(["dismissible" => false , "type" => "primary"])

@php
    $dismissibleClass = $dismissible ? " alert-dismissible fade show" : "";
@endphp

<div {{ $attributes->merge(["role" => "alert", "class" => "alert alert-".$type.$dismissibleClass, ]) }}>
    {{-- Content of the alert --}}
    {{ $slot }}
    
    {{-- Dismiss button --}}
    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
