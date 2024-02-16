@props([
    "href",
    "label" => "See more..."
])
<a 
    href="{{$href}}" 
    class="btn btn-primary"
>
{{$label}}
</a>
