<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHV Centrum Nederland</title>

    <!-- Tailwind CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script src="/js/alpine.js" defer></script>

</head>

<body class="bg-[#f4f4f4] font-sans min-h-screen">

    <!-- Header -->
    <header x-data="{ open: false }" class="fixed top-0 w-full bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="/index.php" class="flex items-center space-x-3">
                    <img src="/path-to-logo.png" alt="BHV Centrum Logo" class="h-10 w-10 object-contain">
                    <span class="text-2xl font-bold text-[#293a96] tracking-tight">BHV Centrum</span>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 font-semibold text-gray-700">
                    <a href="/index.php" class="hover:text-[#293a96] transition-colors duration-200">Home</a>
                    <a href="/opleidingen.php"
                        class="hover:text-[#293a96] transition-colors duration-200">Opleidingen</a>
                    <a href="/contact.php" class="hover:text-[#293a96] transition-colors duration-200">Contact</a>
                </nav>

                <!-- Mobile Hamburger -->
                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="focus:outline-none p-2 rounded hover:bg-gray-100 transition">
                        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" @click.outside="open = false" x-transition class="md:hidden bg-white shadow-lg rounded-b-lg">
            <nav class="px-4 py-4 space-y-2 font-semibold text-gray-700">
                <a href="/index.php" class="block px-4 py-2 rounded hover:bg-[#f4f4f4] transition">Home</a>
                <a href="/opleidingen.php" class="block px-4 py-2 rounded hover:bg-[#f4f4f4] transition">Opleidingen</a>
                <a href="/contact.php" class="block px-4 py-2 rounded hover:bg-[#f4f4f4] transition">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main content -->
    <main class="  min-h-screen bg-gradient-to-b from-white to-[#f4f6ff]">