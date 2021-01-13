@extends ('layout')

@section ('content')
    @foreach($parentCategories as $category)
        <ul>
            <li class="list-group"><a class="list-group-item list-group-item-action" href="/category/{{ $category->id }}">{{$category->name}}</a></li>
            @if(count($category->subCategories))
                @include('category.sub_category_list',['subCategories' => $category->subCategories])
            @endif
        </ul>
    @endforeach
@endsection