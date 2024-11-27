@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Article</h2>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">PDF File</label>
            <input type="file" class="form-control" id="file" name="file" accept="application/pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
