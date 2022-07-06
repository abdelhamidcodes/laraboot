@props(['items' => []])

{{-- "items" => [["class" => "", "header-class" => "", "button-class" => "", "heading-id" => "", "collapse-id" => "", "header" => "", "body" => "", "active" => false],] --}}


<div {{ $attributes->merge(['class' => 'accordion', 'id' => 'accordionExample']) }}>
    {{ $slot }}
</div>
