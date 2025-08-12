<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-gray-800 shadow-2xl z-50 relative">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 ">
      <div class="flex h-16 items-center justify-between">

        <!-- Left section: Logo + Menu -->
        <div class="flex items-center space-x-10">
          <!-- Logo -->
          <a href="/">
            <img class="h-8 w-auto" src="{{ asset('images/F1Logo.png') }}" alt="Logo">
          </a>

          <!-- Menu -->
            <div class=" md:flex space-x-6">
                <x-nav-link type="a" href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link type="a" href="/grids" :active="request()->is('about')">Grids</x-nav-link>
                <x-nav-link type="a" href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            </div>
        </div>

        <div class="flex items-center space-x-4">
          <!-- Notification Button -->
          <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
              <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>

            <button class="flex items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ asset('images/lewisHamiltonRed.png') }}" alt="User">
            </button>

        </div>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-white shadow-md">
    <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight">{{$headings}}</h1>
    </div>
  </header>

  <!-- Divider -->
  <hr>

  <!-- Main Content -->
  <main>
    <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
      {{$slot}}
    </div>
  </main>

</body>
</html>
