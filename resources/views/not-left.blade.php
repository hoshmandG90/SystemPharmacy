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
                         <span>All NotLeft Stocks</span>
                       </div>
                      
                                          
                     </a>
       
                     <div class="flex justify-between mb-3">
                           <!-- With avatar -->
                           <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                               Table with NotLeft Stocks
                               
                           </h4>
               
                     </div>
        
           
                         
                 
                     
                         
               
                     @if ($stocks->isNotEmpty())
                         
                   
                     
                 <div class="w-full overflow-hidden rounded-lg shadow--hover">
                   <div class="w-full overflow-x-auto">
                     <table class="w-full whitespace-no-wrap">
                       <thead>
                         <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                           <th class="px-4 py-3">supplier name</th>
                           <th class="px-4 py-3">Barcode</th>

                           <th class="px-4 py-3">stock name</th>
                           <th class="px-4 py-3">Types</th>
                           <th class="px-4 py-3">count</th>
                           <th class="px-4 py-3">price</th>
                           <th class="px-4 py-3">expire date</th>
                           <th class="px-4 py-3">is_debt</th>
                           <th class="px-4 py-3 text-right">created at</th>


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
                              {!! DNS1D::getBarcodeSVG("$stock->id", 'EAN13',1,43,'#BDC9C9', true) !!}
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
                             
                             <td class="px-4 py-3 text-sm">
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
                                <td class="px-4 py-3 text-sm text-right">
                                  {{$stock->created_at->format('m/d/Y') }}
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
                    <img src="{{ asset('assets/img/notleft.svg') }}" class="img-responsive shadow rounded-lg" width="200px" height="200px" alt="">
                    <br>
               </a>
               <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">no Left Stocks were found</p>
               
               
               @endif
       
               </div>
             </main>
           </div>
       
</div>
