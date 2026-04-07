<h1>Book Details</h1>

<p>ID: {{ $book['id'] }}</p>
<p>Title: {{ $book['title'] }}</p>
<p>Category: {{ $book['category'] }}</p>

<a href="{{ route('books.index') }}">Back</a>