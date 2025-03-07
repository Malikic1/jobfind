
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
    <header id="header" class="w-full top-0 shadow1 fixed z-20 flex bg-smoke md:bg-blue justify-between px-2 md:px-4 emd:px-8 py-4">
        <div>
          <h2
            class="courier ml-10 text-whitesmoke mt-1 md:ml-0 text-xl font-bold"
          >
            JobFind
          </h2>
        </div>
        <div
          id="nav"
          class="bg-trans hidden md:block md:bg-blue mt-12 md:mt-0 absolute md:relative left-6 md:left-0"
        >
          <ul
            class="flex flex-col gap-y-4 md:gap-y-0 md:flex-row pl-6 md:pl-0 text-base text-cyan"
          >
            <li class="mr-4 font-bold"><a href="/">Home</a></li>
            <li class="mr-4"><a href=""></a>Job</li>
            <li class="mr-4"><a href=""></a>Profile</li>
            <li class="mr-4"><a href="">About</a></li>
            <li class="mr-4"><a href="">Contact</a></li>
          </ul>
        </div>
        <div class="flex gap-x-2">
          <form action=""></form>
              <input type="text" class=" w-48 px-2 py-1">
            <button
              class="bg-trans z-10 -ml-3 text-cyan pl-4 pr-2 py-1 rounded font-bold text-base">
            <i class="fa-solid fa-magnify"></i>Search
            </button>
          </form>
          
        @auth
          <form action="/logout" method="post">
            @csrf
              <button
                  class="bg-cyan text-light px-4 py-1 rounded font-semibold text-base">
                <i class="fa-solid fa-magnify"></i>Logout
              </button>
            </form>     
        @else
    
        @endauth 
        
         
        </div>
        <button
          id="menu_btn"
          class="block md:hidden absolute text-darkgrey px-2 py-1 rounded"
        >
          <i class="fa-solid fa-bars-staggered text-xl"></i>
        </button>
      </header>
    <main class="mt-24 left-0 w-full bg-trans py-12">
        <div class="flex w-100 px-2 justify-between">
            <div class="w-1/3">
                <img src="" alt="">
                <p class="mt-2 text-base mt-3">Posted <span class="text-cyan">{{$job['updated_at']}}</span> </p>
                <h2 class="text-4xl mt-4 text-bold">{{$job['title']}}</h2>
                <p class="text-darkgrey mt-1 text-xl">{{$job['company']}}</p>
                <div class="flex justify-between mt-3 self-center">
                    <div class="text-bold text-cyan text-xl">Salary</div>
                    <div class="self-center"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['salary']}} a month</mark></div>
                </div>
                
                <p class="mt-4 text-right"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['category']}}</mark></p>
    
            </div>
            <div class="w-1/2">
                <h2 class="text-2xl text-cyan">Requirements</h2>
                <p class="mt-4">{{$job['requirement']}}</p>
                
                <br>
                <h2 class="text-2xl text-cyan">Description</h2>
                <p class="mt-4">{{$job['description']}}</p>
                @auth
                <button onclick="window.open('/application/{{$job->id}}','_self')" class=" mt-6 bg-trans border-2 border-blue text-blue px-6 py-2 rounded font-semibold text-lg"
                >Apply Now </button>
                @else
                <button onclick="window.open('/login','_self')" class=" mt-6 bg-trans border-2 border-blue text-blue px-6 py-2 rounded font-semibold text-lg"
                >Sign In </button>
                @endauth
                
            </div>       
        </div> 
    </main>
    <footer class="bg-cyan py-4 mt-12">
        <p class="text-center text-whitesmoke">
          © 2024 AzeezCode. All rights reserved.
        </p>
      </footer>
</body>
</html>