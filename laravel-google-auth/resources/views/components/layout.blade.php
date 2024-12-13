<!doctype html>
<html lang="eng">
    <head>
        @vite('resources/css/app.css')
    </head>    
    <body>                     
        <main class=" min-w-80 max-w-full h-screen">
            {{ $slot }}
        </main>        
    </body>    
</html>