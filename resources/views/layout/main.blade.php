<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Instagram - _notkant')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Grand+Hotel&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'instagram': ['"Grand Hotel"', 'cursive'],
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-black text-white flex min-h-screen">

    <!-- Sidebar -->
    <div class="w-56 border-r border-gray-800 p-6 fixed h-full flex flex-col">
        @include('layout.navigation')
    </div>

    <!-- Main Content -->
    <div class="ml-56 flex-1 p-6">
        @yield('content')
        @include('layout.footer')
    </div>

</body>

</html>
