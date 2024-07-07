@foreach ($education as $e)
    <article>
        <h3>{{ $e->title }} at {{ $e->institution }}</h3>
        <label>@formatDateFY($e->from) - @formatDateFY($e->to) | {{ $e->location }}</label>
    </article>

@endforeach