<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrollTest</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Stylesheet -->
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js">
    </script>
</head>

<body class="antialiased space-y-6 sm:flex-col sm:justify-center sm:items-center bg-gray-100">
    <header class="bg-white">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6">
            <nav class="flex justify-between">
                <a href="/" class="">
                    <img src="images/logo.png" alt="Analytics Logo" class="h-10" />
                </a>
                <a href="/demo" class="inline-block font-semibold text-white bg-[#82498C] px-6 py-2 rounded-full">
                    Book a Demo
                </a>
            </nav>
        </div>
    </header>
    <main class="">
        {!!$slot!!}
    </main>
    <footer class="max-w-7xl">

    </footer>
</body>

</html>