<div>
    @section('title','Supplier')
      <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Tables
            </h2>
               <!-- CTA -->
               <a class="flex items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('Supplier') }}">
                  <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <span>All Suppliers</span>
                  </div>
                 
                  <span class="border border-purple-200 px-2 py-2 rounded-lg" > Go Back &larr;</span>
                  
                </a>
  
                <div class="flex justify-between">
                      <!-- With avatar -->
                      <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                          Table with supplier
                      </h4>
                        <!-- With avatar -->
                        <span  class="bg-blue-400 mb-2 text-white p-2 rounded-lg  leading-5 flex items-center">
                          All suppliers <span class=" px-2 rounded  text-xs ml-2">{{ $AllSupplier }}</span>
                      </span>
                </div>
   
                <div class="flex justify-start mb-3">
                              <!-- Search input -->
             <div class="flex  flex-1 lg:mr-32">
              <div class="relative w-full max-w-sm mr-6 focus-within:text-purple-500">
                  <div class="absolute inset-y-0 flex items-center pl-2">
                      <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                      </svg>
                  </div>
                  <input wire:model="search"
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text" placeholder="Advanced Search for supplier" aria-label="Search" />
              </div>
          </div>
                </div>
                @if ($Suppliers->IsNotEmpty())
                    
            
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">company name</th>
                      <th class="px-4 py-3">supplier name</th>
                      <th class="px-4 py-3">address</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      @foreach ($Suppliers as $sup)
                          
                    
                   
  
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div class="relative  w-8 h-8 mr-3 rounded-full ">
                            <img class="object-cover w-full h-full rounded-full" src="{{ asset('assets/img/user.svg') }}" alt="" loading="lazy">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                          </div>
                          <div>
                            <p class="font-semibold dark:text-gray-300 capitalize">{{ $sup->supplier_name }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400 capitalize">
                              Co.{{ $sup->company_name }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                          {{ $sup->company_name }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                     
                          <span class="px-2 py-2 font-semibold leading-tight capitalize text-gray-700 bg-green-100 rounded-lg dark:text-gray-100 dark:bg-gray-700">
                              {{ $sup->address }}
                            </span>   
                          
                      </td>
                      <td class="px-4 py-3 text-sm">
                          {{  $sup->created_at->format('M  d,Y') }}
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                       
                          <button wire:click.prevent="delete('{{ $sup->id }}')" title="do you want to delete this {{ $sup->supplier_name }}" class="flex  items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
  
               
                  </tbody>
                </table>
              </div>
              <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <span class="flex items-center col-span-3">
                  Showing {{ $Suppliers->currentPage() }}-{{ $Suppliers->lastItem() }} of {{ $Suppliers->currentPage() }}
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                    
                     {{ $Suppliers->links() }}
                    </ul>
                  </nav>
                </span>
              </div>
            </div>
          
            @else
              <a href="#" class="capitalize flex justify-center mx-auto text-center items-center mt-3 mb-1">
                  <img src="{{ asset('assets/img/error.svg') }}" class="img-responsive shadow rounded-lg" width="200px" height="200px" alt="">
                  <br>
              </a>
              <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">no supplier were found</p>
  
            @endif
          </div>
        </main>
      </div>
  