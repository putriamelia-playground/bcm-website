<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body,
        p,
        h1,
        h2 {
            font-family: "Segoe UI", Arial, sans-serif;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }

    </style>
</head>
<body>
    <h2 style="text-align:center; font-weight: bold;">
        {{ $article_title }}
    </h2>

    <center>
        <img src="data:image/png;base64,<?php echo base64_encode(file_get_contents(base_path('public/storage/'.$article_image))); ?>" style="height: 300px" class="center" />
    </center>
    <p>
        {!! $article_desc !!}
    </p>

</body>
</html>
