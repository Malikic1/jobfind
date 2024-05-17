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
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Kablammo&family=Kelly+Slab&display=swap");
      .logo {
        font-family: "Kablammo", cursives;
      }
      .logo2 {
        font-family: "Kelly Slab", cursives;
        color: rgb(152, 84, 216);
      }
      .flow::-webkit-scrollbar {
        overflow-x: scroll;
        height: 4px;
        background-color: rgb(13, 12, 12);
      }
      .flow::-webkit-scrollbar-thumb {
        background-color: #46394ea9;
        border-radius: 0px;
      }
    </style>
  </head>
  <body class="text-trans">
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
            <li class="mr-4 font-bold"><a href="">Home</a></li>
            <li class="mr-4"><a href=""></a></li>
            <li class="mr-4"><a href=""></a></li>
            <li class="mr-4"><a href="">About</a></li>
            <li class="mr-4"><a href="">Contact</a></li>
        </ul>
        </div>
        <div>
            <input type="text" class="px-2 py-1">
        <button
            class="bg-trans md:bg-whitesmoke text-bluesmoke px-2 py-1 rounded font-bold text-base">
        <i class="fa-solid fa-magnify"></i>Search
        </button>
        </div>
        <button
        id="menu_btn"
        class="block md:hidden absolute text-darkgrey px-2 py-1 rounded"
        >
        <i class="fa-solid fa-bars-staggered text-xl"></i>
        </button>
    </header>
    <main class="mt-32 px-2">
      <form
        action=""
        class="w-80 border-2 border-blue p-4 text-center ml-auto mr-auto rounded-xl"
      >
        <h1 class="font-semibold text-xl text-blue">Login</h1>
        <p>
          <span
            ><input
              type="email"
              class="bg-transparent border-b border-blue w-full py-2"
              placeholder="Email"
          /></span>
          <span class="absolute -ml-4 mt-3"
            ><i class="fa-solid fa-envelope text-blue"></i
          ></span>
        </p>
        <p class="mt-4">
          <span
            ><input
              type="password"
              class="bg-transparent border-b border-blue w-full py-2"
              placeholder="Password"
          /></span>
          <span class="absolute -ml-4 mt-3"
            ><i class="fa-solid fa-lock text-blue"></i>
          </span>
        </p>
        <p class="flex text-darkgrey justify-between text-sm mt-3">
          <span><input type="checkbox" /> Remember me</span>
          <span><a href="" class="text-blue">Forgot Password</a></span>
        </p>
        <button
          class="text-light bg-blue w-full rounded-2xl font-bold mt-3 py-1 text-md"
          type="submit"
        >
          Log in
        </button>
        <p class="text-base my-4">
          <span class="text-dark">Don't have an account.&nbsp; </span>
          <a href="register.html" class="text-blue" type="button"><u>Register</u></a>
        </p>
      </form>
    </main>
    <br /><br /><br />
  
    <script src="index.js"></script>
  </body>
</html>
