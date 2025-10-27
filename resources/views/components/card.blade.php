@props(['highlights' => false])

<div @class(['highlights' => $highlights, 'card'])>
    {{$slot}}
    <a href="{{$attributes}}" class="btn">View details</a>
</div>