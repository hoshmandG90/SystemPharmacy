<div>
    @section('title','Product')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Tables Sale Products
            </h2>
            <!-- CTA -->
            <a class="flex items-center justify-between p-2 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                href="">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span class="btn">The Page Sale Products</span>
    
    
                </div>
            </a>
            <div class="flex justify-between mb-3">
    
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Table with Sale
                </h4>
                <div>
                </div>
            </div>
    
            <div class="flex justify-between">
                  <div class="mb-5 ">
                    <div class="flex justify-center  ">
                        <div class="relative w-full mr-6 focus-within:text-purple-500">
                            <div class="absolute inset-y-0 flex items-center pl-2">
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input autofocus wire:keydown.escape="resetQuery" wire:model="query"
                            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                            type="text" placeholder="Type product name or code...." aria-label="Search" />
                        </div>
                    </div>
    
                    <div wire:loading wire:target="query">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 mt-3 border-2 border-dashed rounded-full animate-spin border-purple-400"></div>
                            <span class="mt-2 uppercase text-xs">Loading...</span>
                        </div>
                    </div>

                    @if(!empty($query))
                    <div wire:click="resetQuery"  ></div>
                    @if($search_results->isNotEmpty())
                        <div class="mt-5">
                            <div class=" shadow" class="footer bg-white relative pt-1 border-b-2 border-blue-700">
                                <ul class=" list-reset flex flex-col">
                                
                                  
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class=" mt-4 border-0" style="z-index: 1;left: 0;right: 0;">
                            <div class="card-body shadow">
                                <a href="" class="alert alert-warning text-red-400 mb-0 mt-4">
                                    No Product were Found....
                                </a>
                            </div>
                        </div>
                        
                    @endif
                @endif
              
                <div class=" mt-4 border-0 error" style="z-index: 1;left: 0;right: 0;">
                    <div class="card-body shadow">
                        <a href="" class="alert alert-warning uppercase text-red-400 mb-0 mt-4">
                          {{$check_error}}
                        </a>
                    </div>
                </div>  
            
      
                </div>
             
                <div class="flex flex-wrap space-x-2">
                    <a >
                        <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                         
                          <div class="flex space-x-1 items-center">
                              
                               <span>Receipt number </span> <span>{{ $Receipt_number->id }}</span>

                            </div>
                    </button>   
                  </a>
          
                  <a wire:click.prevent="ReceiptRenewal" wire:click.prevent="$refresh" >
                    <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                     
                      <div class="flex space-x-1 items-center">
                           <span>Receipt renewal </span> 

                        </div>
                </button>   
              </a>
      
                
                
                <a  onclick="printExternal('/invoice');"  target="_self">
                      <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                       
                        <div class="flex space-x-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                              </svg>
                              small invoice
                        </div>
                  </button>   
                </a>
             
                <a  onclick="BigInvoices('/Receipt')" target="_self"> 
                    <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                     
                      <div class="flex space-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
                          </svg>
                            Big receipt
                        </div>
                </button>   
              </a>
           

            </div>
        </div>
                            
                
              <livewire:product-table />
        </div>
    </main>
</div>

<script >
     function printExternal(url) {
    var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
    printWindow.addEventListener('load', function(){
        printWindow.print();
      
    });
}
</script>

<script >
    function BigInvoices(url) {
   var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
   printWindow.addEventListener('load', function(){
       printWindow.print();
     
   });
}
</script>


