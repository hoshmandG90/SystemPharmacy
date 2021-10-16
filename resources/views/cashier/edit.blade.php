<div>
  @section('title','Edit')
    <div>
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Edit Cashier 
            </h2>
            <!-- CTA -->
            <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('Cashier') }}">
                <div class="flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                  </svg>
                  <span class="capitalize">The Cashier page {{ $user->name }}</span>
                </div>
               
                <span class="border border-purple-200 px-2 py-2 rounded-lg" > Go Back &larr;</span>
                
              </a>
            <form wire:submit.prevent="EditUser('{{ $user->id }}')">
                @csrf
          
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <label class="block text-sm  mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input type="text" wire:model.defer="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Full Name">
                @error('name')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </label>
    
              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Rules Type
                </span>
                <div class=" mt-3 mb-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input wire:model.defer="rules" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="0">
                    <span class="ml-2">Personal</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input  wire:model.defer="rules" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="1">
                    <span class="ml-2">Administrator</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input  wire:model.defer="rules" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="2">
                    <span class="ml-2">Cashier</span>
                  </label>
                  
                </div>
    
                @error('rules')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </div>
    
              <label class="block text-sm mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Username</span>
                <input type="text"  wire:model.defer="username" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="username">
                @error('username')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </label>
    
    
              <label class="block text-sm  mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Email Address</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                  <input  wire:model.defer="email" type="email" class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Email address">
                  <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                  </div>
                </div>
                @error('email')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </label>
        
    
              <label class="block text-sm mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input  wire:model.defer="password" type="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Enter your Password">
                @error('password')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror  
            </label>
        
    
              <label class="block text-sm mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Confirm Password</span>
                <input  wire:model.defer="passwordConfirmation" type="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Confirm Password">
                @error('passwordConfirmation')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
            </label>
        
              <div class="grid grid-cols-1 mt-5 mx-7">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                    Photo</label>
                <div class='flex items-center justify-center w-full'>
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
                            <input type="file" wire:model.defer="NewAvatar"  class="hidden">
    
                        </div>
                
                    </label>
               
                      
    
                </div>
                           
                @if ($NewAvatar)
                Image Preview:
                <img src="{{ $NewAvatar->temporaryUrl() }}" class="shadow rounded-lg mt-2 mb-3" width="200" height="200" alt="">    
                @error('NewAvatar')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
                @else
                Image Preview:
                <img src="{{ $user->avatar }}" class="shadow rounded-lg mt-2 mb-3" width="200" height="200" alt="">    
               
                @endif
               
              
    
            </div>
    
    
            <div class="flex justify-center">
            <button type="sub,it" style="width:200px" class="flex justify-center  mt-3 mb-2 text-center items-center justify-between px-4 py-2   text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span>update user</span>
                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
                  <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            </div>
        </form>
          </div>
    </div>
</div>
