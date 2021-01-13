@foreach($subCategories as $subcategory)
    <ul>
        <li class="list-group"><a class="list-group-item list-group-item-action" href="/category/{{ $subcategory->id }}">{{$subcategory->name}}</a></li>
        @if(count($subcategory->subCategories))
            @include('category.sub_category_list',['subCategories' => $subcategory->subCategories])
        @endif
    </ul>
@endforeach