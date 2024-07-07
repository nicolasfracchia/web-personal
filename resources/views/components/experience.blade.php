@foreach ($experience as $e)
   
    <h3>{{ $e->position }} at {{ $e->company }}</h3>
    <label>@formatDateFY($e->from) - @formatDateFY($e->to) | {{ $e->location }}</label>
    <p>{{ $e->description }}</p>
    <ul>
    @foreach ($e->experienceItems as $item)
        <li>{{ $item->item }}</li>
    @endforeach
    </ul>


@endforeach

