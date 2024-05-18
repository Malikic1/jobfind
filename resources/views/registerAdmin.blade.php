<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    @vite('resources/css/app.css')
    <title>crypto</title>
  </head>
  <body class="bg-trans">
    <header id="header" class="top-0 w-full fixed z-20 flex bg-smoke md:bg-blue justify-between px-2 md:px-4 emd:px-8 py-4">
        <div>
        <h2
            class="courier ml-10 text-blue md:text-darkgrey mt-1 md:ml-0 text-xl font-bold"
        >
            <i>JobFind</i>
        </h2>
        </div>
        <div
        id="nav"
        class="bg-trans hidden md:block md:bg-blue mt-12 md:mt-0 absolute md:relative left-6 md:left-0"
        >
        <ul
            class="flex flex-col gap-y-4 md:gap-y-0 md:flex-row pl-6 md:pl-0 text-base text-blue md:text-whitesmoke"
        >
            <li class="mr-4 font-bold"><a href="/">Home</a></li>
            <li class="mr-4"><a href="/about">About</a></li>
            <li class="mr-4"><a href="/contact">Contact</a></li>
        </ul>
        </div>
        <div>
        <p
            class="bg-whitesmoke text-blue px-3 py-1 rounded-full font-bold text-base">
            Welcome
        </p>
        </div>
        <button
        id="menu_btn"
        class="block md:hidden absolute text-darkgrey px-2 py-1 rounded"
        >
        <i class="fa-solid fa-bars-staggered text-xl"></i>
        </button>
    </header>
     <main class="mt-24 px-2">
      <form
      method="POST"
        action="/sign_up"
        class="px-4 w-80 px-4 border-blue border-2 text-center p-4 m-auto  rounded-xl"
      >
      @csrf
      <h1 class="font-semibold text-xl text-blue">Admin Register</h1>
      <p>
        <input
        name="name"
            type="text"
            class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
            placeholder="Full Name"
        />
        <span class="absolute -ml-4 mt-3"
          ><i class="fa-solid fa-user text-blue"></i
        ></span>
      </p>
      <p class="mt-3">
        <span
          ><input
          name="email"
            type="email"
            class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
            placeholder="Email"
        /></span>
        <span class="absolute -ml-4 mt-3"
          ><i class="fa-solid fa-envelope text-blue"></i
        ></span>
      </p>
      <p class="mt-3">
        <span
          ><input
          name="password"
            type="password"
            class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
            placeholder="Password"
        /></span>
        <span class="absolute -ml-4 mt-3"
          ><i class="fa-solid fa-lock text-blue"></i>
        </span>
      </p>
      <p class="mt-3">
        <span
          ><input
          name="c_password"
            type="password"
            class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
            placeholder="Confirm Password"
        /></span>
        <span class="absolute -ml-4 mt-3"
          ><i class="fa-solid fa-lock text-blue"></i>
        </span>
      </p>
      <button
        type="submit"
        class="text-light bg-blue w-full rounded-2xl font-bold mt-3 py-1 text-md"
      >
        Register
      </button>
      <p class="text-base text-dark my-4">
        <span>Already have an account.&nbsp; </span>
        <a href="./login" class="text-blue" type="button"><u>Login</u></a>
        
      </p>
      </form>
    </main>
    <br /><br /><br />

    <script src="index.js"></script>
  </body>
</html>
