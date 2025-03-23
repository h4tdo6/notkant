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
    <style>
        body {
            overflow: hidden;
        }
        .chat-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        .message-list {
            flex: 1;
            overflow-y: auto;
            padding: 1rem;
        }
        
        /* Instagram-style scrollbar styling */
        .instagram-scroll::-webkit-scrollbar {
            width: 8px;
        }

        .instagram-scroll::-webkit-scrollbar-track {
            background: transparent;
        }

        .instagram-scroll::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
        }

        .instagram-scroll::-webkit-scrollbar-thumb:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        /* For Firefox */
        .instagram-scroll {
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 255, 255, 0.3) transparent;
        }
    </style>
</head>

<body class="bg-black text-white flex min-h-screen">
    <!-- Sidebar -->
    <div class="w-56 border-r border-gray-800 p-6 fixed h-full flex flex-col">
        @include('layout.navigation')
    </div>

    <!-- Main Content Wrapper -->
    <div class="ml-56 flex flex-col flex-1 min-h-screen">
        <!-- Main Content -->
        <div class="flex-1">
            @yield('content')
        </div>
        @yield('footer')
    </div>

</body>

</html>
