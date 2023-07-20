<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Main page</title>
</head>
<body>
    <div class="container">
        <p><a href="{{ route('category-list') }}">List of categories</a></p>
        <p><a href="{{ route('items-list') }}">List of items</a></p>
        <p><a href="{{ route('pivot-table') }}">Pivot table</a></p>
    </div>
</body>
</html>