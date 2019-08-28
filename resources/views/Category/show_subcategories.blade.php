@foreach($subcategories as $subcategory)
        <ul>
            <li>{{$subcategory->name}}</li> 
	    @if(count($subcategory->subcategory))
            @include('Category/show_subcategories',['subcategories' => $subcategory->subcategory])
        @endif
        </ul> 
@endforeach