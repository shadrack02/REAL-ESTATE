<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create a product</h1>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label> name </label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label> description </label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <label> price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <input type="submit" value="save a new product"/>
        </div>
</body>
</html>