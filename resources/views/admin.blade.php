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
        class="courier ml-10 text-cyan mt-1 md:ml-0 text-xl font-bold"
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
          <li class="mr-4"><a href="./new">New</a></li>
          <li class="mr-4"><a href="./category">Category</a></li>
          <li class="mr-4"><a href="./user">Users</a></li>
      </ul>
    </div>
    @auth
      <form action="/logout" method="post">
        @csrf
          <button
              class="bg-trans md:bg-whitesmoke text-bluesmoke px-2 py-1 rounded font-bold text-base">
            <i class="fa-solid fa-magnify"></i>Logout
          </button>
        </form>     
    @else
    <div>
        <button
        class="border-light border-2 text-light px-4 py-1 rounded font-semibold text-base">
        <i class="fa-solid fa-magnify"></i>Login
    </button>
    <button
        class="bg-light text-blue border-light border-2 px-3 py-1 rounded font-semibold text-base">
    <i class="fa-solid fa-magnify"></i>Register
    </button>
    </div>
       
    @endauth 
    <button
      id="menu_btn"
      class="block md:hidden absolute text-darkgrey px-2 py-1 rounded"
    >
      <i class="fa-solid fa-bars-staggered text-xl"></i>
    </button>
  </header>
    <main class="absolute top-24 w-full">
  
        <div class="bg-whitesmoke text-darkgrey w-100 text-center py-16">
          @auth
          <h2 class="text-4xl font-bold text-cyan">Hi Malik, </h2>
            @else
            {{''}}
            @endauth

            <h2 class="text-4xl font-bold text-darkgrey">Get Employed <span class="text-cyan">Today with  JobFind</span> </h2>
            <p class="w-3/4 m-auto text-xl mt-4">Empower your career journey with JobFind, where opportunities meet ambition, seamlessy. Discover your next move effortlessly, with JobFind's intuitive platform design to match talent with the perfect 
            job opportunities </p>
            <h2 class="text-2xl mt-6 text-center text-cyan">Strictly Administrative Portal</h2>
            @auth
              {{''}}
            @else
            <button onclick="window.open('./login','_self')" class=" mt-6 bg-trans border-2 border-blue text-blue px-6 py-2 rounded font-bold text-lg"
            >Sign In </button>
            @endauth
            
        </div>    
        <section class=" my-12 px-2">
          <h2 class="text-2xl mb-6 text-center">Currently Available Jobs</h2>
          <div class="grid grid-cols-3 gap-y-4">
          @foreach ($jobs as $job)
          <div class="w-72 bg-trans m-auto p-4">
            <h2 class="text-2xl text-bold text-cyan">{{$job['title']}}</h2>
            <p class="text-darkgrey mt-2 text-lg">{{$job['company']}}</p>
            <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['salary']}} a month</mark></p>
            <p class="mt-2"><mark class="px-2 py-1 rounded bg-light text-darkgrey">{{$job['category']}}</mark></p>
            <p class="mt-2 text-base mt-3">Posted <span class='text-sm'>{{$job['updated_at']}}</span></p>
            <div class="flex justify-between mt-4">
              <section>
                <button
                    onclick="window.open('./edit/{{$job->id}}','_self')"
                    class="border-cyan border-2 text-cyan px-4 py-1 rounded font-semibold text-sm">
                    <i class="fa-solid fa-magnify"></i>Edit
                </button>
              </section>
              <section>
                <form action="./delete/{{$job->id}}" method="post">
                  @csrf
                  <button
                      class="bg-cyan text-light border-cyan border-2 px-4 py-1 rounded font-semibold text-sm">
                  <i class="fa-solid fa-trash"></i>Delete
                  </button>
                  </form>
              </section>
              
            </div>
        </div>  
          @endforeach
            
          </div>
      </section>     
    </main>
    <footer></footer>
</body>
</html>