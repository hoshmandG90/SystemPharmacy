<div>
    <form wire:submit.prevent="EditUser('{{ $user->id }}')" class="text-gray-400 dark:bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white capitalize">{{ $user->username }}</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Profile Update Form, found within the Members Only page, allows members to update much of the information on their Profile.</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="relative mb-2 mt-2">
                <label for="name" class="leading-7 text-sm text-gray-400">username</label>
                <input type="text" wire:model="username" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
               @error('username')
               <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
 
               @enderror
            </div>
            <div class="flex flex-wrap -m-2">
                
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                  <input type="text" wire:model="name" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
               @error('name')
               <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
               @enderror
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                  <input type="email" wire:model="email" id="email" name="email" class="w-full  bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  @error('email')
                  <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="p-2 w-full mt-2 mb-2">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-400">Password</label>
                  <input wire:model="password" type="password"  id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  @error('password')
                  <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="p-2 w-full mt-2 mb-2">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-400">Password Confirmation</label>
                  <input wire:model="passwordConfirmation" type="password"  id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                </div>
              </div>
              <div  class="w-full bg-gray-800 bg-opacity-40 py-4 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                    Photo</label>
                <div class='flex items-center justify-center w-full mb-5'>
                    <label
                        class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                        <div class='flex flex-col items-center justify-center pt-7'>
                            <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p
                                class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                Select a photo</p>
                            <input type="file" wire:model="NewAvatar" class="hidden">

                        </div>
                    
                        
                    </label>

             

                </div>
                @error('NewAvatar')
                <p class="text-red-400 mt-2 mb-3 text-xs font-semibold">{{ $message }}</p>
                @enderror

              
                @if ($NewAvatar)
                <span class="text-gray-500 capitalize mb-2">image preview</span>
                <img src="{{$NewAvatar->temporaryUrl() }}"  class=" rounded rounded-full w-20 h-20  object-cover" alt="">
                    
                @else
                <span class="text-gray-500 capitalize mb-2">Profile picture</span>
                <img src="{{ auth()->user()->avatar }}"  class=" rounded rounded-full w-20 h-20  object-cover" alt=""> 
                @endif




            </div>

              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">update account</button>
              </div>
           
            </div>
          </div>
        </div>
      </form>

</div>
