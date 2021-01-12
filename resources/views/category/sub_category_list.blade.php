@foreach($subCategories as $subcategory)
    <ul>
        <li class="list-group"><a class="list-group-item list-group-item-action" href="/category/{{ $subcategory->id }}">{{$subcategory->name}}</a></li>
        @if(count($subcategory->subcategory))
            @include('category.sub_category_list',['subCategories' => $subcategory->subcategory])
        @endif
    </ul>
@endforeach