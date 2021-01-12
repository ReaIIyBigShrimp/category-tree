@foreach($parentCategories as $category)
    <ul>
        <li><a href="/category/{{ $category->id }}">{{$category->name}}</a></li>
        @if(count($category->subcategory))
            @include('category.sub_category_list',['subCategories' => $category->subcategory])
        @endif
    </ul>
@endforeach