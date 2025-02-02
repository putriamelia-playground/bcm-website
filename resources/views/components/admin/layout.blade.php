<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ir3qtlgn7qdu743nu95uqhnmyw4ya9io5mflv2acjquactuy/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#article_desc', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code lists advlist'
            , toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });

    </script>
</head>
<body>
    <x-admin.navbar>

    </x-admin.navbar>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <main>
            {{ $slot }}
        </main>
    </div>


</body>
</html>
