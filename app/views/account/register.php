<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="/" class="text-2xl font-bold text-indigo-600">Sudi Mart</a>
        </div>
        

        <!-- Auth Buttons -->
        <div class="flex items-center space-x-4">
          <a href="/login" class="text-indigo-600 hover:text-indigo-800 px-3 py-2 rounded-md text-sm font-medium">Login</a>
          <a href="/register" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium">Register</a>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-grow flex flex-col items-center justify-center">

    <h1 class="text-3xl font-semibold mb-8">Sign In</h1>

    <!-- Card -->
    <div class="bg-white shadow-md rounded-xl p-20 w-120">

      <form class="space-y-6">
        <input 
          type="text" 
          placeholder="Username"
          class="w-full border rounded-md px-3 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >
        <input 
          type="text" 
          placeholder="Email"
          class="w-full border rounded-md px-3 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >

        <input 
          type="password" 
          placeholder="Password"
          class="w-full border rounded-md px-3 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >

        <input 
          type="password" 
          placeholder="Password Confirm"
          class="w-full border rounded-md px-3 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >

        <input 
          type="date" 
          placeholder="YYYY/MM/DD"
          class="w-full border rounded-md px-3 py-4 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >


        <p class="text-xs text-gray-500">
          already have an account?
          <a href="#" class="underline">Click Here</a>
        </p>

        <button 
          type="submit"
          class="w-full bg-indigo-500 hover:bg-indigo-600 text-white py-2 rounded-md">
          Sign in
        </button>
      </form>

    </div>

  </main>

  <!-- Footer -->
  <footer class="border-t border-indigo-200 bg-white py-8 px-10">
    <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

      <!-- About -->
      <div>
        <h2 class="text-lg font-semibold mb-2">About US</h2>
        <p class="text-gray-600 text-sm">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco
        </p>
      </div>

      <!-- Contact -->
      <div>
        <h2 class="text-lg font-semibold mb-2">Contact Us</h2>
        <p class="text-gray-600 text-sm">
          IG : @sudi_martt <br>
          TT : sm.mart <br>
          X : sudi-M <br>
          WA : +62 812 5609 8744
        </p>
      </div>

    </div>
  </footer>

</body>
</html>