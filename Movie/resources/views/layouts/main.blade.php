<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center" > 
                <li style="display: inline;padding:0px 10px 0px 10px;">
                    <a href="#">Movie PlayBack 2R2R</a>
                </li>
                <li style="display: inline; padding:0px 10px 0px 10px;">
                    <a href="#">Movies</a>
                </li>
                <li style="display: inline;padding:0px 10px 0px 10px;">
                    <a href="#">TV Shows</a>
                </li>
                <li style="display: inline;padding:0px 10px 0px 10px;">
                    <a href="#">Actors</a>
                </li>
            </ul>
            <div class="flex itemes-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" placeholder="Search" style="display:inline;">
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>