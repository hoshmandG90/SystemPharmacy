<div>
    <div>

        @section('title','Supplier')
    
        <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Forms Stocks
            </h2>
            <!-- CTA -->
            <a class="flex items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                href="{{ route('Buy') }}">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span>The Stocks page</span>
                </div>
    
                <span class="border border-purple-200 px-2 py-2 rounded-lg"> Go Back &larr;</span>
    
            </a>
            <form wire:submit.prevent="store">
                @csrf
          
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
              <label class="block text-sm  mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Stock name</span>
                <input type="text" wire:model.defer="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="stock name">
                @error('name')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </label>
    
              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Types
                </span>
                <div class=" mt-3 mb-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input wire:model.defer="types" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="1">
                    <span class="ml-2">Even</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input  wire:model.defer="types" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="0">
                    <span class="ml-2">Odd</span>
                  </label>
                 
                  
                </div>
    
                @error('types')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </div>
    
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Supplier name
                </span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option selected> selected  supplier</option>
                    @foreach ($supplier as $sup)
                    <option value="{{ $sup->id }}" >{{ $sup->supplier_name }}</option>
                    @endforeach
                  
                </select>
              </label>
              <div class="flex  space-x-4">
                <label class=" text-sm mt-3 mb-2">
                    <span class="text-gray-700 dark:text-gray-400">count</span>
                    <input type="number"  wire:model.defer="count" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="0">
                    @error('count')
                    <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                    @enderror
                  </label>
    
                  <label class=" text-sm mt-3 mb-2">
                    <div>
                        <span class="text-gray-700 dark:text-gray-400">price</span>
                        <div class="mt-1 relative rounded-md shadow-sm">
                          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">
                              $
                            </span>
                          </div>
                          <input type="number"  id="price" class="block pl-8 w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="0.00">
                        
                        </div>
                      </div>
                    @error('price')
                    <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                    @enderror
                  </label>
              </div>
           
           
    
    
              <label class="block text-sm  mt-3 mb-2">
                <span class="text-gray-700 dark:text-gray-400">Expire Date</span>
                <!-- focus-within sets the color for the icon when input is focused -->
                <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                  <input  wire:model.defer="expire_date" type="date" class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input" placeholder="Email address">
                  <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                  </div>
                </div>
                @error('expire_date')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </label>
        
              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Is_debt?
                </span>
                <div class=" mt-3 mb-2">
                  <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input wire:model.defer="types" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="1">
                    <span class="ml-2">Yes</span>
                  </label>
                  <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input  wire:model.defer="types" type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="0">
                    <span class="ml-2">No</span>
                  </label>
                 
                  
                </div>
    
                @error('types')
                <span class="text-red-500 text-xs mt-1 mb-2">{{ $message }}</span>
                @enderror
              </div>
    
     
    
            <div class="flex justify-center">
                <button type="sub,it" style="width:300px"
                    class="flex justify-center  mt-3 mb-2 text-center items-center justify-between px-4 py-2   text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <span class="capitalize truncate">Create new stock</span>

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>
    
</div>
