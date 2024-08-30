@props(['width' => 42])

<div>
    <img src="http://picsum.photos/seed/{{ rand(1, 10000) }}/{{ $width }}" class="rounded" alt="">
</div>
