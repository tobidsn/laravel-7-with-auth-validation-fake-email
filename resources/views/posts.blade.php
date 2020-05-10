<html>
    <body>
        <h1>List Posts</h1>

        @foreach($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </body>
</html>