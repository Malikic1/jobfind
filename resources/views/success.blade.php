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
    <main class="absolute top-24 w-full">
  
        <div class="bg-whitesmoke text-darkgrey w-100 text-center py-16">
          @auth
          <h2 class="text-4xl font-bold text-cyan">Application Successfull </h2>
            @else
            {{''}}
            @endauth
        </div>
    
      </section>     
    </main>
    <footer></footer>
</body>
</html>