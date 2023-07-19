<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List of items</title>
</head>
<body>
    <div class="container">
    {{ $items->links() }}
        <table class="table table-dark table-striped">
                     <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Created_at</th>
                    </thead>
                    <tbody>
                       @foreach($items as $item)
                           @if($item)
                        <tr class="table-info">
                            <td class="table-info">
                                <p>{{ $item->id }}</p>
                            </td>
                            <td class="table-info">
                                <p>{{ $item->title }}</p>
                            </td>
                            <td class="table-info">
                                <p>{{ $item->whatCategory?->title }}</p>
                            </td>
                            <td class="table-info">
                                @foreach($item->tagNames?->toArray() as $tags)
                                <p>{{ $tags['title'] }}</p>
                                @endforeach
                            </td>
                            <td class="table-info">
                                <p>{{ $item->created_at }}</p>
                            </td>
                        </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $items->links() }}
                <a href="{{ route('main') }}">Main page</a>
    </div>
</body>
</html>