<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobFind</title>
    @vite('resources/css/app.css')
</head>
<body>



  
 <header id="header" class="w-full shadow1 fixed z-20 flex bg-smoke md:bg-blue justify-between px-2 md:px-4 emd:px-8 py-4">
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
        <li class="mr-4 font-bold"><a href="">Home</a></li>
        <li class="mr-4"><a href=""></a>Job</li>
        <li class="mr-4"><a href=""></a>Profile</li>
        <li class="mr-4"><a href="">About</a></li>
        <li class="mr-4"><a href="">Contact</a></li>
      </ul>
    </div>
    <div class="flex gap-x-2">
      <form action=""></form>
          <input type="text" class="w-48 px-2 py-1">
        <button
          class="bg-cyan z-10 -ml-3 text-light pl-4 pr-2 py-1 font-bold text-base">
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
    <main class="absolute top-24 w-full">
  
        <div class="bg-cyan text-whitesmoke w-100 text-center py-16">
          @auth
          <h2 class="text-4xl font-bold text-whitesmoke">Hi {{$user['name']}}, </h2>
            @else
            {{''}}
            @endauth

            <h2 class="text-4xl font-bold">Get Employed <span class="text-blue">Today with  JobFind</span> </h2>
            <p class="w-3/4 m-auto text-xl mt-4">Empower your career journey with JobFind, where 
              opportunities meet ambition, seamlessy. <span class="text-darkgrey">Discover your next move effortlessly, with 
               JobFind's intuitive platform design to match talent with the perfect 
            job opportunities</span> </p>
            @auth
            <p class="mt-6 text-cyan font-semibold text-3xl"
            >Explore More... </p>

            @else
            <button onclick="window.open('/login','_self')" class=" mt-6 bg-cyan border-2 border-trans text-trans px-6 py-2 rounded font-bold text-lg"
            >Join Us </button>

            @endauth
                   </div>
        <section class=" my-12 px-2">
            <h2 class="text-center text-2xl mb-6">Recently Updated Job!</h2>
            <div class="grid grid-cols-3 gap-y-4">
            @foreach ($jobs as $job)
            <div class="w-72 bg-trans m-auto p-4" 
            onclick="window.open('/job/{{$job->id}}','_slf')"
            >
              <h2 class="text-2xl text-bold text-cyan">{{$job['title']}}</h2>
              <p class="text-darkgrey mt-2 text-lg">{{$job['company']}}</p>
              <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['salary']}} a month</mark></p>
              <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['category']}}</mark></p>
              <p class="mt-2 text-base mt-3">Posted <span class='text-sm'>{{$job['updated_at']}}</span></p>
          </div>  
            @endforeach
              
            </div>
        </section>    
    </main>
    <footer></footer>
</body>
</html>