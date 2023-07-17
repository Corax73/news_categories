<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>List of categories</title>
</head>
<body>
    <div class="container">
        <table class="table table-dark table-striped">
                     <thead>
                        <th>Title</th>
                        <th>Parent</th>
                    </thead>
                    <tbody>
                       @foreach($categories as $category)
                           @if($category)
                        <tr class="table-info">
                            <td class="table-info">
                                <p>{{ $category->title }}</p>
                            </td>
                            <td class="table-info">
                                <p>{{ $category->whoParent?->parent_id }}</p>
                            </td>
                        </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
    </div>
</body>
</html>