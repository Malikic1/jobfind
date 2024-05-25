@auth
<script>
  window.open("/", "_self")
</script>
@else
@endauth


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
       
        
    <main class="mt-12 px-2">
      <h2 class="courier ml-10 text-cyan mt-1 text-center md:ml-0 text-2xl font-bold">
         JobFind
      </h2>
      <form
        method="post"
        action="/signin"
        class="w-80 mt-12 border-2 border-blue p-4 text-center ml-auto mr-auto rounded-xl"
      >
      @csrf
        <h1 class="font-semibold text-xl text-blue">Login</h1>
        <p>
          <span
            ><input
            name="loginemail"
              type="email"
              class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
              placeholder="Email"
          /></span>
          <span class="absolute -ml-4 mt-3"
            ><i class="fa-solid fa-envelope text-blue"></i
          ></span>
        </p>
        <p class="mt-4">
          <span
            ><input
            name="loginpassword"
              type="password"
              class="bg-transparent border-b border-blue w-full py-2 text-darkgrey pl-2 pr-8"
              placeholder="Password"
          /></span>
          <span class="absolute -ml-4 mt-3"
            ><i class="fa-solid fa-lock text-blue"></i>
          </span>
        </p>
        <p class="flex text-darkgrey justify-between text-sm mt-3">
          <span><input type="checkbox" /> Remember me</span>
          <span><a href="" class="text-cyan">Forgot Password</a></span>
        </p>
        <button
          class="text-light bg-cyan w-full rounded-2xl font-bold mt-3 py-1 text-md"
          type="submit"
        >
          Log in
        </button>
        <p class="text-base my-4">
          <span class="text-dark">Don't have an account.&nbsp; </span>
          <a href="/register" class="text-blue" type="button"><u>Register</u></a>
        </p>
      </form>
    </main>
    <br /><br /><br />
  
    <script src="index.js"></script>
  </body>
</html>
