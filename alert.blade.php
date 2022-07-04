@props(["dismissible" => false , "type" => "primary"])

$dismissible = $dismissible ? " alert-dismissible fade show" : "";

<div {{ $attributes->merge(["role" => "alert", "class" => "alert alert-".$type.$dismissible, ]) }}>
    {{ $slot }}
</div>
