<h1>Main Page</h1>
{{-- <ul>
    @foreach ($names as $num => $values)
        <li>{{$num}} - {{$values}}</li>
    @endforeach
</ul> --}}

@forelse ($names as $num => $values)
    <p>{{$num}} - {{$values}}</p>
@empty
    <p>No Values Found</p>
@endforelse
