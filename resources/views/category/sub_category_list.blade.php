@foreach($subCategories as $subcategory)
    <ul>
        <li><a href="/category/{{ $category->id }}">{{$subcategory->name}}</a></li>
        @if(count($subcategory->subcategory))
            {{ $subcategory->name }}
            @include('category.sub_category_list',['subCategories' => $subcategory->subcategory])
        @endif
    </ul>
@endforeach