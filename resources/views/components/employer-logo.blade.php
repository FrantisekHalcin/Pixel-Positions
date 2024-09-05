@props(['width' => 42, 'employer'])

<div>
    @if($employer->real)
        <img
            src="{{ asset('storage/' .$employer->logo) }}"
            class="rounded" width="{{ $width }}"
            alt="{{ $employer->logo }}"
        >
    @else
        <img src="{{ $employer->logo }}/{{ $width  }}" class="rounded" alt="{{ $employer->logo }}">
    @endif
</div>
