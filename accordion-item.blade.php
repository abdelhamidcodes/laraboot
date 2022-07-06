@props(['header_class' => '', 'body_id' => "", "heading_id" => "", "button_class" => "", "active" => false, "header" => "", "body" => ""])

@php
    $heading_id_gen = "gen_".\Str::random(4);
    $body_id_gen = "gen_".\Str::random(4);
@endphp

<div {{ $attributes->merge(['class' => 'accordion-item']) }}>
    <h2 class="accordion-header {{ $header_class }}" id="{{ $heading_id != "" ? $heading_id : $heading_id_gen }}">
        <button class="accordion-button  {{ $button_class }}" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{ $body_id != "" ? $body_id : $body_id_gen }}" aria-expanded="true"
            aria-controls="{{ $body_id != "" ? $body_id : $body_id_gen }}">
            {{ $header }}
        </button>
    </h2>
    <div id="{{ $body_id != "" ? $body_id : $body_id_gen }}"
        class="accordion-collapse collapse {{ $active ? 'show' : '' }}"
        aria-labelledby="{{ $heading_id != "" ? $heading_id : $heading_id_gen }}">
        <div class="accordion-body">
            {{ $body}}
        </div>
    </div>
</div>
