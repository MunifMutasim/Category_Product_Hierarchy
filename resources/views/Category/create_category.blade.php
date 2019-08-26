<html>
    <head>
        <title>Category</title>
    </head>

    <body>
        <form action="/action_page.php">
            Category Name:<br>
            <input type="text" name="name"><br>
            @foreach ($categories as $category)
                <p>{{ $category->name }}</p>
            @endforeach

            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Parent Category
                </button>

                @foreach ($categories as $category)
                    <p>This is category {{ category->name }}</p>
                @endforeach
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div> --}}
            
        </form>
    </body>
</html>