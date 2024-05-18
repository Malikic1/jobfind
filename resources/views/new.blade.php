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
        
      <li class="mr-4 font-bold"><a href="./home">Home</a></li>
      <li class="mr-4"><a href="./new">New</a></li>
      <li class="mr-4"><a href="./edit">Edit</a></li>
      <li class="mr-4"><a href="">Category</a></li>
      <li class="mr-4"><a href="./users">Users</a></li>
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
  
        <div class="bg-bluesmoke px-4 rounded w-3/4 m-auto pb-4">
          <h2 class="text-light text-3xl py-4">Add New Gig</h2>
          <form method='post' action='/new_gig'>
            @csrf
            <p><label for="" class="text-whitesmoke text-lg font-semibold">Job Title</label><br>
                <input type="text" name="title" class="w-full mt-1 bg-light px-2 py-2">
             </p>
             <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Company</label><br>
              <input type="text" name="company" class="w-full mt-1 bg-light px-2 py-2">
            </p>
            <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Category</label><br>
              <select name="category" class="w-full mt-1 bg-light px-2 py-2">
                <option value="remote" class="text-darkgrey">Remote</option>
                <option value="full-time" class="text-darkgrey">Full-time</option>
                <option value="part-time" class="text-darkgrey">Part-time</option>
              </select>
            </p>
              <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Salary</label><br>
                <input type="text" name="salary" class="w-full mt-1 bg-light px-2 py-2">
            </p>
            <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Requirement</label><br>
                <textarea type="text" name="requirement" class="w-full mt-1 bg-light px-2 py-2"></textarea>
            </p>
             <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Description</label><br>
              <textarea type="text" name="description" class="w-full mt-1 bg-light px-2 py-2"></textarea>
           </p>
            <p>
              <button class="mt-4 bg-whitesmoke px-8 py-2 text-lg text-semibold">Submit</button>
            </p>
          </form>
        </div>    
        
    </main>
    <footer></footer>
</body>
</html>