<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header id="header" class="w-full shadow1 fixed z-20 flex bg-smoke md:bg-blue justify-between px-2 md:px-4 emd:px-8 py-4">
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
    <main class="absolute top-24 w-full">
        <div class="bg-blue text-light w-100 text-center py-24">
            <h2 class="text-4xl font-bold text-cyan">Get Employed Today <span class="text-whitesmoke">with  JobFind</span> </h2>
            <p class="w-3/4 m-auto text-xl mt-4">Empower your career journey with JobFind, where opportunities meet ambition, seamlessy. Discover your next move effortlessly, with JobFind's intuitive platform design to match talent with the perfect 
            job opportunities </p>
            <button class=" mt-6 bg-trans md:bg-whitesmoke text-bluesmoke px-6 py-2 rounded font-bold text-lg"
            >Join Us </button>
        </div>
        <section class=" my-12 px-2">
            <h2 class="text-2xl mb-6">Find Job!</h2>
            <div class="grid">
                <div class="w-72 bg-trans p-3">
                    <img src="" alt="" class="h-24">
                    <h2 class="text-2xl text-bold">MERN Stack Developer</h2>
                    <p class="text-darkgrey mt-2 text-lg">SKL Group.</p>
                    <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">$400 - $700 a month</mark></p>
                    <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">Remote</mark></p>
                    <p class="mt-2 text-base mt-3">Posted 3days ago</p>
                </div>
            </div>
        </section>    
    </main>
    <footer></footer>
</body>
</html>