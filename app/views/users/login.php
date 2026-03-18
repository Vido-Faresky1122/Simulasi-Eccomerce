<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="/css/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

 <header class="bg-indigo-600 shadow-sm z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">

        <div class="shrink-0">
          <a href="/" class="text-2xl font-bold text-white">Sudi Mart</a>
        </div>
        
        <div class="flex items-center space-x-4">
          <a href="#" class="hover:underline text-m text-white">About us</a>
        </div>
      </div>
    </div>
  </header>

  <main class="grow flex flex-col items-center justify-center">

  <img src="/assets/logindesign1.png" alt="" class="w-200 absolute z-0 top-10 left-0 object-cover pointer-events-none">

    <h1 class="text-3xl font-semibold mb-8">Sign In</h1>

    <div class="shadow-md rounded-xl bg-indigo-600 p-20 w-120">

      <form class="space-y-6">
        <input 
          type="text" 
          placeholder="Email/Username"
          class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >

        <input 
          type="password" 
          placeholder="Password"
          class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        >

        <p class="text-xs text-white">
          don't have an account?
          <a href="/users/register" class="underline">Click Here</a>
        </p>

        <button 
          type="submit"
          class="w-full bg-white transition delay-150 ease-in-out hover:bg-indigo-100 hover:cursor-pointer text-indigo-600 py-5 rounded-md">
          Sign in
        </button>
      </form>

    </div>

  </main>

  <img src="/assets/logindesign2.png" alt="" class="w-200 absolute z-0 bottom-6 right-0 object-cover pointer-events-none">

  <footer class="mt-16 bg-indigo-700 text-white py-10 px-10 z-10">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10">

      <div>
        <h2 class="text-lg font-semibold mb-3">About US</h2>
        <p class="text-sm text-indigo-100">
          Sudi Mart adalah mitra andalan kebutuhan warga sekolah,
          menyediakan berbagai alat tulis, keperluan belajar,
          serta layanan pendukung sekolah yang cepat dan berkualitas.
        </p>
      </div>

      <div>
        <h2 class="text-lg font-semibold mb-3">Contact Us</h2>
        <p class="text-sm text-indigo-100">
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