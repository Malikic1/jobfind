
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job</title>
    @vite('resources/css/app.css')
</head>
<body>
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

    <main class="mt-24 left-0 w-full bg-trans">
        <div class="flex w-100 px-2 justify-between">
            <div class="w-1/3">
                <img src="" alt="">
                <p class="mt-2 text-base mt-3">Posted 3days ago</p>
                <h2 class="text-4xl mt-4 text-bold">MERN Stack Developer</h2>
                <p class="text-darkgrey mt-1 text-xl">SKL Group.</p>
                <div class="flex justify-between mt-3 self-center">
                    <div class="text-bold">Salary</div>
                    <div class="self-center"><mark class="px-2 py-1 rounded bg-light text-darkgrey">$400 - $700 a month</mark></div>
                </div>
                
                <p class="mt-4 text-right"><mark class="px-2 py-1 rounded bg-light text-darkgrey">Remote</mark></p>
    
            </div>
            <div class="w-1/2">
                <h2 class="text-2xl">Requirements</h2>
                <p class="mt-4">Core Software skill must be Javascript, nodeJs, ExpressJs, Mongdb. 
                Developer must have basic knowlege of AngularJs, .Net and 
                must have at least 3years of working experience</p>
                
                <br>
                <h2 class="text-2xl">Description</h2>
                <p class="mt-4">Core Software skill must be Javascript, nodeJs, ExpressJs, Mongdb. 
                Developer must have basic knowlege of AngularJs, .Net and 
                must have at least 3years of working experience</p>
            </div>       
        </div> 
    </main>
    <footer class="bg-blue py-4 mt-12">
        <p class="text-center text-whitesmoke">
          © 2024 AzeezCode. All rights reserved.
        </p>
      </footer>
</body>
</html>