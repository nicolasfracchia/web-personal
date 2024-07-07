@foreach ($skills as $s)

    <div class="skills-container">
        <h3>{{ $s->name }}</h3>
        <div class="bar-container">
            <div class="bar" style="width:{{ $s->level }}%"></div>
        </div>
        
        <label>{{ $s->formatted_years }}</label>
    </div>

@endforeach