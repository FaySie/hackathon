{{-- Part of hackathon project. --}}

<div id="test-area">
    <img src="{{ $image }}" alt="">

    @if($link->notNull())
        <div class="test-link"
            style="position: absolute; top: {{ $link->top }}px; left: {{ $link->left }}px; width: {{ $link->width }}px; height: {{ $link->height }}px;"
            onclick="Test.nextStep({{ $link->link_id }});"
        ></div>
    @endif

</div>

@if($link->isNull())
    <div>
        <h3>Wow, You finish the task!</h3>

        <a href="@route('result', ['id' => $task_id])" class="btn btn-default">Next</a>
    </div>
@endif
