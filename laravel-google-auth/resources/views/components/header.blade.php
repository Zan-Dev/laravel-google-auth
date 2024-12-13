<header>
    <div class="inline-flex justify-between place-item-center w-full shadow-lg bg-gray-500 p-3">
        <div class="flex justify-center items-center">
            <h1 class="text-white font-m ">DASHBOARD</h1>
        </div>        
        <div class="flex justify-center items-center gap-2">   
            <h3 class="text-white">{{ auth('web')->user()->name }}</h3>            
            <div class="relative inline-block text-left">
                <!-- Tombol Dropdown -->
                <button id="dropdownButton">                  
                    @auth
                        <img class="w-9 h-auto rounded-full object-cover mr-3" src="{{ auth('web')->user()->profile_pict }}" alt="Avatar">
                    @else
                        <img class="w-9 h-auto rounded-full object-cover mr-3" src="{{ asset('assets/img/user.png') }}" alt="Avatar">
                    @endauth                      
                </button>
            
                <!-- Isi Dropdown -->
                <div id="dropdownMenu" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                    <ul class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                        <li>                                                        
                            <a href="{{ route('profile') }}" class="px-4 py-2 flex justify-center items-center text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>                                                        
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                <button class="block px-4 py-2 w-full text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Log out</button>
                            </form>                            
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>               
    </div>
</header>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });
</script>