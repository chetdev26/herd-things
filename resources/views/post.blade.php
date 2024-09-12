<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <x-header>

    </x-header>


    <h1>
        {{ $post -> title }}
    </h1>
    <p>
        this is the content : {{ $post -> description }}
    </p>

    <x-post_list :posts="$posts">

    </x-post_list>


</body>

</html>
