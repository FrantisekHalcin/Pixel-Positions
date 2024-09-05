@props(['width' => 42, 'employer'])

<div>
    <img src="{{ asset('storage/' .$employer->logo) }}" class="rounded" width="{{ $width }}"
         onerror="this.onerror=null;this.src='http://picsum.photos/seed/{{ rand(1, 10000) }}/{{ $width }}';">
</div>
