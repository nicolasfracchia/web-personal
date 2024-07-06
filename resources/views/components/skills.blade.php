@foreach ($skills as $s)
   
    <h4>{{ $s->name }}</h4>
    <label>{{ $s->years }}</label>
    <p>{{ $s->level }}</p>

@endforeach