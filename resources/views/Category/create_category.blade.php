<html>
    <head>
        <title>Category</title>
    </head>

    <body>
        {{-- <form action="">
            Category Name:<br>
            <input type="text" name="name"><br>
            @foreach ($categories as $category)
                <p>{{ $category->name }}</p>
            @endforeach

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parent Category
                </button>

                @foreach ($categories as $category)
                    <p>This is category {{ $category->name }}</p>
                @endforeach
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </form> --}}
        <h1>Create New Category</h1>
        <form class="form-inline" action="/category" method="post">
            @csrf
            <div class="form-group row">
                <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name" id="category_name">
                </div>
            </div>
            
            <div>
                <label class="my-1 mr-2" for="parent_category">Parent Category</label>
                <select class="custom-select my-1 mr-sm-2" id="parent_category" name="parent_category">
                    <option value="none">--------</option>
                    @if(count($categories))
                        @foreach ($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>    
            <input type="submit" name="submit" id="Submit" value="Create">
        </form>                
    </body>
</html>