@extends ('layout')

@section ('content')
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <p>[List of {{$category->name }} products here]</p>
    </div>
@endsection