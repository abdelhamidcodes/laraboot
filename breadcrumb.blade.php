@props(["pages" => []])
{{-- $pages = [["title" => "title", "url" => "/pageurl", "current" => false]] --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach($pages as $page)
            @if(isset($page["current"]) && $page["current"])
                <li class="breadcrumb-item active" aria-current="page">{{ $page["title"] }}</li>
            @else
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ $page["url"] }}">{{ $page["title"] }}</a></li>
            @endif
        @endforeach
    </ol>
</nav>
