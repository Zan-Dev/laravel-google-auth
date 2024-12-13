<x-layout>
    @auth
        <x-header></x-header>
    @endauth

    <div class="flex flex-box justify-center items-center my-20">
        <div class=" card rounded bg-gray-300 shadow-lg p-4 border-4 ">        
            <h1 class="flex flex-box justify-center mb-3">Data User</h1>
            <div>
                @auth                                
                    <table>
                        <tr>
                            <td colspan="2">
                                <div class="flex justify-center items-center">
                                    <img class="rounded-full" src="{{ auth('web')->user()->profile_pict }}" alt="">
                                </div>                               
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2">Nama</td>
                            <td><label class="w-full block bg-white text-black px-2">{{ auth('web')->user()->name }}</label></td>
                        </tr>
                        <tr>
                            <td class="p-2">Email</td>
                            <td><label class="w-full block bg-white text-black px-2">{{ auth('web')->user()->email }}</label></td>                             
                        </tr>
                    </table>
                    <form class="flex justify-center items-center" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="rounded text-white bg-red-500 hover:bg-red-700 px-3 py-2 mt-4">Log out</button>
                    </form>    
                @else
                    <a href="{{ route('login') }}" class="rounded text-white bg-red-500 hover:bg-red-700 px-3 py-2 mt-4 ">Log in</a>
                @endauth
            </div>            
        </div>
    </div>
</x-layout>