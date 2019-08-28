<html>
    <head>
        <title>Categories</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h1>Categories</h1></div>
                        <div class="card-body">
                            @if(count($parentCategories))
                                @foreach($parentCategories as $category)
                                    <ul>
                                        <li>{{$category->name}}</li>
                                        @if(count($category->subcategory))
                                            @include('Category/show_subcategories',['subcategories' => $category->subcategory])
                                        @endif 
                                    </ul>
                                @endforeach

                            @else
                                <h3>Nothing to Show</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>