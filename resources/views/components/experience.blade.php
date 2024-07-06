@foreach ($experience as $e)
   
    <h4>{{ $e->position }} at {{ $e->company }}</h4>
    <label>@formatDateFY($e->from) - @formatDateFY($e->to) | {{ $e->location }}</label>
    <p>{{ $e->description }}</p>
    <ul>
    @foreach ($e->experienceItems as $item)
        <li>{{ $item->item }}</li>
    @endforeach
    </ul>


@endforeach

