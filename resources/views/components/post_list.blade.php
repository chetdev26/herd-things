@foreach ($posts as $item)
    <p>
        <a href="/posts/{{ $item -> id }}">
            Post - {{$item -> title }}
        </a>


    </p>
@endforeach
