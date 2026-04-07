<h1>Books</h1>

@foreach ($books as $book)
    <p>
        <a href="{{ route('books.show', $book['id']) }}">
            {{ $book['title'] }}
        </a>
    </p>
@endforeach