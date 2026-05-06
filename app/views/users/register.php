<img src="/assets/logindesign1.png" alt="" class="w-200 absolute z-0 top-10 left-0 object-cover pointer-events-none">


<h1 class="text-3xl font-semibold mb-8 text-yellow-300">Create An Account</h1>


<div class="bg-[#4C128B] shadow-md rounded-xl p-15 w-120">

  <form class="space-y-6" method="POST" action="/register">
    <input type="text" placeholder="Username" name="name" id="name" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <input type="text" placeholder="Email" name="email" id="email" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <input type="password" placeholder="Password" name="password" id="password" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <input type="password" placeholder="Password Confirm" name="confirm" id="confirm" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <input type="date" placeholder="YYYY/MM/DD" name="birth_date" id="birth_date" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">

    <select name="gender" id="gender" required
      class="w-full border bg-white rounded-md px-3 py-5 focus:outline-none focus:ring-2 focus:ring-indigo-400">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>

    <p class="text-xs text-yellow-300">
      already have an account?
      <a href="/login" class="underline">Click Here</a>
    </p>

    <button type="submit"
      class="w-full bg-yellow-300 transition duration-150 py-5 ease-in-out hover:bg-yellow-100 hover:cursor-pointer text-indigo-600 font-bold text-xl rounded-md">
      Sign up
    </button>
  </form>

</div>


<img src="/assets/logindesign2.png" alt=""
  class="w-200 absolute -z-10 bottom-6 right-0 object-cover pointer-events-none">