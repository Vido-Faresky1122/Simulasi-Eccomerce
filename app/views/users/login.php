<img src="/assets/logindesign1.png" alt="" class="w-200 absolute z-0 top-10 left-0 object-cover pointer-events-none">

<h1 class="text-3xl font-semibold mb-8 text-yellow-300">Sign In</h1>

<div class="shadow-md rounded-xl bg-[#4C128B] p-15 w-120">

  <form class="space-y-6" method="POST" action="/login">
    <input type="text" placeholder="Email/Username" name="email" id="email" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <input type="password" placeholder="Password" name="password" id="email" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">



    <p class="text-xs text-yellow-300">
      don't have an account?
      <a href="/register" class="underline">Click Here</a>
    </p>

    <button type="submit"
      class="w-full bg-yellow-300 transition duration-150 py-5 ease-in-out hover:bg-yellow-100 hover:cursor-pointer text-indigo-600 font-bold text-xl rounded-md">
      Sign in
    </button>
  </form>

</div>

<img src="/assets/logindesign2.png" alt=""
  class="w-200 absolute -z-10 bottom-6 right-0 object-cover pointer-events-none">