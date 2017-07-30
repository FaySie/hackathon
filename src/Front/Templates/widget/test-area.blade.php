{{-- Part of hackathon project. --}}

<img src="{{ $image }}" alt="">
<div class="test-link"
    style="position: absolute; top: {{ $link->top }}px; left: {{ $link->left }}px; width: {{ $link->width }}px; height: {{ $link->height }}px;"
    onclick="Test.nextStep({{ $link->link_id }});"
></div>
