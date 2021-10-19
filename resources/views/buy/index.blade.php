<div>
     <div>
          @section('title','Supplier')
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                  <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Tables Stocks
                  </h2>
                     <!-- CTA -->
                     <a class="flex items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="">
                        <div class="flex items-center">
                          <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                          </svg>
                          <span>All Suppliers</span>
                        </div>
                       
                                           
                      </a>
        
                      <div class="flex justify-between mb-3">
                            <!-- With avatar -->
                            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                                Table with Stocks
                                
                            </h4>
                            <!-- component -->
<!-- This is an example component -->
           <!-- With avatar -->
                              <div>
                            <span  class="bg-blue-400 mb-2 text-white p-2 rounded-lg  leading-5 flex items-center">
                                All suppliers <span class=" px-2 rounded  text-xs ml-2">0</span>
                            </span>  
                            
                            <a href="{{ route('BuyStocks') }}" class="flex  transition duration-500 ease-in-out transform  hover:scale-95 items-center justify-between px-8 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                              <span style="margin-left:-23px" class="font-semibold  capitalize ">add new Stocks</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-0 " viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                        
                  
                            </a> 
                    
                              <select wire:change="FilterCategory($event.target.value)"  class="   px-11 mt-2  py-2 text-sm font-medium  text-white transition-colors duration-150 bg-gray-400 dark:bg-gray-900 border border-transparent rounded-lg active:bg-purple-400 hover:bg-purple-400 focus:outline-none focus:shadow-outline-purple">
                                <option selected >Filter Types</option>
                                <option value="1">Even</option>
                                <option value="0">Odd</option>       
                              </select>
                          
                                            
                       </div>
                            
                      </div>
         
                   
                      <div class="flex flex-wrap mb-3">
                              <!-- Search input -->
                                   <div class="flex  ">
                                   <div class="relative w-full max-w-sm mr-4 focus-within:text-purple-500">
                                        <div class="absolute inset-y-0 flex items-center pl-2">
                                             <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                  <path fill-rule="evenodd"
                                                       d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                       clip-rule="evenodd"></path>
                                             </svg>
                                        </div>
                                        <input wire:model="search"
                                        class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                        type="text" placeholder="Search for Stocks" aria-label="Search" />
                                             </div>
                                             </div>

                    <div class="flex">
                         <div class="relative w-full max-w-sm mr-6 focus-within:text-purple-500">
                              <div class="absolute inset-y-0 flex items-center pl-2">
                                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                      </svg>
                              </div>
                              <input wire:model="searchForDate"
                              class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                              type="date" placeholder="Advanced Search for Stocks" aria-label="Search" />
                         </div>
                         </div>
               
                      </div>
                          
                  
                      @if ($stocks->IsNotEmpty())
                          
                
                  <div class="w-full overflow-hidden rounded-lg shadow--hover">
                    <div class="w-full overflow-x-auto">
                      <table class="w-full whitespace-no-wrap">
                        <thead>
                          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">supplier name</th>
                            <th class="px-4 py-3">stock name</th>
                            <th class="px-4 py-3">Barcode</th>
                            <th class="px-4 py-3">Types</th>
                            <th class="px-4 py-3">count</th>
                            <th class="px-4 py-3">price</th>
                            <th class="px-4 py-3">expire date</th>
                            <th class="px-4 py-3">is_debt</th>
                            <th class="px-4 py-3">created at</th>
                            <th class="px-4 py-3 text-right">Actions</th>


                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                
                          
                         @foreach ($stocks as $stock)
                             
                     
                         <tr class="text-gray-700 dark:text-gray-400 transition duration-500 ease-in-out  transform">
                              <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                  <!-- Avatar with inset shadow -->
                                
                                  <div>
                                    <p class="font-semibold dark:text-gray-300">{{ $stock->supplier->supplier_name }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                      Co. {{ $stock->supplier->company_name}}
                                    </p>
                                  </div>
                                </div>
                              </td>
                              <td class="px-4 py-3 text-sm text-center">
                                {{ $stock->id }}
                              </td>
                              <td class="px-4 py-3 text-sm">
                                {{ $stock->name }}
                              </td>
                             
                              <td class="px-4 py-3 text-xs">
                                   @if ($stock->types == 1)
                                   <span class="px-4 py-2 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-lg dark:text-gray-100 dark:bg-gray-700">
                                        Even
                                      </span> 
                                   @else
                                   <span class="px-4 py-2 font-semibold leading-tight text-red-700 bg-red-100 rounded-lg dark:text-gray-100 dark:bg-red-700">
                                        Odd
                                      </span>
                                       
                                   @endif
                             
                              </td>
                              <td class="px-4 py-3 text-sm text-center">
                                {{ $stock->count }}
                              </td>
                              <td class="px-4 py-3 text-sm">
                                   {{number_format($stock->price) }} USD
                                 </td>
                                 <td class="px-4 py-3 text-sm">
                                  {{$stock->expire_date->format('m/d/Y') }}
                                 </td>
                                 <td class="px-4 py-3 text-sm">
                                   @if ($stock->is_debt == 1)
                                   <span class=" text-red-400 dark:text-red-400 ">Debt</span>
                                       
                                   @else
                                   <span class="text-gray-600 dark:text-gray-600">No Debt</span>

                                       
                                   @endif
                                 </td>
                                 <td class="px-4 py-3 text-sm">
                                   {{$stock->created_at->format('m/d/Y') }}
                              </td>
                              <td class="px-4 py-3 float-right">
                                <div class="flex text-right  text-sm">
                                  <a href="{{ route('EditStocks',$stock->name) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                    </svg>
                                  </a>
                                  <button wire:click.prevent="delete('{{ $stock->id }}')" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
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
                         Showing {{ $stocks->currentPage() }}-{{ $stocks->lastItem() }} of {{ $stocks->currentPage() }}
                    </span>
                      <span class="col-span-2"></span>
                      <!-- Pagination -->
                      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                          <ul class="inline-flex items-center">
                            {{ $stocks->links() }}
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
                         <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">no Stocks were found</p>
                  @endif


               
        
                </div>
              </main>
            </div>
        
</div>
