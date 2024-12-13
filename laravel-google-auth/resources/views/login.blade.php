<x-layout>
    <div class=" flex items-center min-w-full min-h-full justify-center ">
        <div class=" bg-gray-300 p-5 rounded-xl border border-blue-500">
            <div class="flex flex-col mb-3">                
                <h1 class="w-full max-w-sm text-center text-white  text-2xl font-medium ">Login Page</h1>
            </div>
            <div>
                <form class="flex flex-col space-y-4 w-full max-w-sm" action="">
                    <input
                      type="text"
                      placeholder="Username"                      
                      class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <input
                      type="password"
                      placeholder="Password"
                      class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                    <button
                      type="submit"
                      class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                      Login
                    </button>
                  </form>
            </div>
            <div class="flex flex-col gap-3 my-2 ">                     
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700  focus:outline-none focus:ring-4 focus:ring-blue-300">Sign in</button>
                <button onclick="window.location.href='{{ route('redirect') }}'" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700  focus:ring-4 focus:outline-none focus:ring-red-300">Login With Google</button>          
            </div>
        </div>
    </div>
</x-layout>