@if ($aboutMe)
  <p>{{ $aboutMe->paragraphs }}</p>
@else
  <p>No about me information found.</p>
@endif