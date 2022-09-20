<html>
    <head>
        <title>
            Products page
    </title>
    </head>
    <body>
        @foreach($products as $product)
        <h4> {{ $product->name }} </h4>
        @endforeach
    </body>

</html>