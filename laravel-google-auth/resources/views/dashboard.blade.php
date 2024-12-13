<x-layout>  
    @auth
        <x-header></x-header>
    @endauth
    
    <div class="w-full my-40">
        <div class="flex flex-col justify-center items-center">
            @auth
                <h1>Berhasil Login Menggunakan Google Account</h1>
            @endauth        
            <button onclick="window.location.href='/profile'" class="bg-green-400 rounded py-2 px-3 hover:bg-green-600 text-white mt-2">Profile >></button>
        </div>        
    </div>
</x-layout>