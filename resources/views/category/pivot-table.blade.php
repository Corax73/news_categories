<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pivot table</title>
</head>
<body>
    <div class="container">
    {{ $categories->links() }}
        <table class="table table-dark table-striped">
                     <thead>
                        <th>Category</th>
                        <th>Items</th>
                        <th>Tags</th>
                    </thead>
                    <tbody>
                       @foreach($categories as $category)
                           @if($category)
                        <tr class="table-info">
                            <td class="table-info">
                                <p>{{ $category->title }}</p>
                            </td>
                            <td class="table-info">
                                @foreach($category->whatItems as $item)
                                <p>{{ $item->title }}</p>
                                @endforeach
                            </td>
                            <td class="table-info">
                                @foreach($category->whatItems as $item)
                                @foreach($item->tagNames as $tag)
                                <p>{{ $tag->title }}</p>
                                @endforeach
                                @endforeach
                            </td>
                        </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
                <a href="{{ route('main') }}">Main page</a>
    </div>
</body>
</html>