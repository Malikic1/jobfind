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
        <li class="mr-4 font-bold"><a href="">Home</a></li>
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
    <main class="absolute top-24 w-full">
  
        <div class="bg-bluesmoke px-4 rounded w-3/4 m-auto pb-4">
          <h2 class="text-light text-3xl py-4">Application</h2>
          <form method='post' action='/apply_job'  enctype="multipart/form-data">
            @csrf
            <p><label for="" class="text-whitesmoke text-lg font-semibold">Full Name</label><br>
                <input type="text" name="name" value="{{$user['name']}}" class="w-full mt-1 bg-light px-2 py-2">
             </p>
             <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Email</label><br>
              <input type="text" name="email" value="{{$user['email']}}" class="w-full mt-1 bg-light px-2 py-2">
            </p>
            <input type="hidden" name="user_id" value="{{$user['id']}}" class="w-full mt-1 bg-light px-2 py-2">
              </p>
              <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Upload CV</label><br>
                <input type="file" name="cv_file" class="w-full mt-1 bg-light px-2 py-2">
            </p>
            <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Cover Letter</label><br>
                <textarea type="text" name="letter" class="w-full mt-1 bg-light px-2 py-2"></textarea>
            </p>
             <p class="mt-2"><label for="" class="text-whitesmoke text-lg font-semibold">Why should we hire you?</label><br>
              <textarea type="text" name="reason" class="w-full mt-1 bg-light px-2 py-2"></textarea>
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