@auth
@else
<script>
  window.open("/", "_self")
</script>
@endauth



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply JobFind</title>
    @vite('resources/css/app.css')
</head>
<body>  
  <header id="header" class="w-full top-0 shadow1 fixed z-20 flex bg-blue justify-between px-2 md:px-4 emd:px-8 py-2">
    <button onclick="window.open('/job/{{$job->id}}','_self')" class="text-darkgrey text-lg">Cancel</button>
  </header>
    <main class="absolute top-24 w-full">
        <div class="bg-bluesmoke px-4 rounded w-3/4 m-auto pb-4">
          <h2 class="text-light text-3xl py-4">Application ---> <span class="text-cyan text-2xl">{{$job['title']}}</span></h2>
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