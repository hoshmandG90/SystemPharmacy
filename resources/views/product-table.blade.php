<div >
    @if($cart_items->isNotEmpty())

    <div  class="w-full overflow-hidden rounded-lg shadow--hover">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs  font-semibold  text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3 text-left">Cashier</th>
                        <th class="px-4 py-3">Barcode</th>
                        <th class="px-4 py-3">stock name</th>
                        <th class="px-4 py-3">Plus</th>

                        <th class="px-4 py-3">Quantity</th>
                        <th class="px-4 py-3 ">Minus</th>


                        <th class="px-4 py-3 ">price</th>
                        <th class="px-4 py-3">expire date</th>
                        <th class="px-4 py-3">created at</th>
                        <th class="px-4 py-3 text-right">Actions</th>


                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($cart_items as $cart_item)

                    <tr
                        class="text-gray-700 text-center dark:text-gray-400 transition duration-500 ease-in-out  transform">
                        <td class="px-4 py-2">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->

                                <div>
                                    <p class=" text-gray-600 dark:text-gray-400 capitalize">
                                        {{ $cart_item->user->name }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm ">
                            {!! DNS1D::getBarcodeSVG("$cart_item->stock_id", 'EAN13',1,33,'#BDC9C9', true) !!}
                        </td>
                        <td class="px-4 py-3 text-sm">
                          {{$cart_item->stock->name}}
                        </td>

                        <td wire:click.prevent="Plus('{{ $cart_item->id }}')" class="px-4 py-3 text-sm text-center cursor-pointer sound">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                              </svg>                           
                        </td>
                        <td class="px-4 py-3 text-sm">
                           {{ $cart_item->quantity }}
                          </td>
                          <td wire:click.prevent="Minus('{{ $cart_item->id }}')" class="px-4 py-3 text-sm text-center cursor-pointer sound ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                              </svg>                         
                          </td>
  
                       
                        <td class="px-4 py-3 text-sm">
                            {{ number_format($cart_item->stock->price,0,'.','.') }} USD
                        </td>
                        <td class="px-4 py-3 text-sm">
                           {{$cart_item->stock->expire_date->format('m-d-Y')}}
                        </td>
                      
                        <td class="px-4 py-3 text-sm">
                            {{ $cart_item->created_at->format('m-d-Y') }}

                        </td>
                        <td wire:click="$refresh" wire:click.prevent="delete('{{ $cart_item->id }}')"  class="px-4 py-3 sound float-right">
                            <div class=" text-right  text-sm">
                                <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                      </svg>
                                </a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                 
                </tbody>
            </table>
        </div>
     
    </div>
    @else
    <a href="#" class="capitalize flex justify-center mx-auto text-center items-center mt-5 mb-1">
        <img src="https://cdn.dribbble.com/users/1418633/screenshots/5106121/media/9cbab4cd379f1c05ce0ce956887a001a.gif" class="img-responsive shadow rounded-lg" width="400px" height="350px" alt="">
        <br>
   </a>
   <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">No bills have been sold yet</p>
    @endif
</div>
