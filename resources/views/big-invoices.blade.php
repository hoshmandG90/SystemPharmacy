<div>
    @if ($solds->IsNotEmpty())

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-3/5 bg-white shadow-lg">
            <div class="flex justify-between p-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Tailwind POS" class="mb-3 w-8 h-8 inline-block">
                    <h2 class="text-xl font-semibold">Invoice POS</h2>
                    <p>Hoshmand Kamal</p>
                  </div>
            </div>
            <div class="w-full h-0.5 bg-indigo-500"></div>
            <div class="flex justify-between p-4">
                <div>
                    <h6 class="font-bold">Order Date : <span class="text-sm font-medium">{{ $Receipt_number->created_at->format('M d Y') }}</span></h6>
                    <h6 class="font-bold">Order time : <span class="text-sm font-medium">{{ $Receipt_number->created_at->format('H:i:s A') }}</span></h6>
                </div>
                <div class="">
                    <address class="text-sm">
                        <span class="font-bold capitalize"> Cashier To : </span>
                       {{ auth()->user()->name }}
                    </address>
                </div>
                <div class="w-40">
                    <address class="text-sm">
                        <span class="font-bold">Receipt number :</span>
                          {{ $Receipt_number->id }}
                    </address>
                </div>
                <div></div>
            </div>
            <div class="flex justify-center p-4">
                <div class="border-b border-gray-200 shadow">
                    <table class="">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    #
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Product Name
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Quantity
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Rate
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    Subtotal
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($solds as $index=>$item)
                                
                         
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                  {{$index+1}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                       {{ $item->stock->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">{{ $item->quantity }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                  {{$item->price_at}} USD
                                </td>
                                <td class="px-6 py-4">
                                   {{number_format($item->price_at*$item->quantity,0,'.','.')}} USD
                                </td>
                            </tr>
                            @endforeach
                          
                            @php
                            $sum=0;
                            for($i=0;$i<count($solds);$i++){
                              $Total_price=$solds[$i]['quantity']*$solds[$i]['price_at'];
                              $sum += $Total_price;
                            }
                        @endphp
                            <!--end tr-->
                            <tr class="text-white bg-gray-800 text-right ">
                                <th colspan="3" class="py-4"></th>
                                <td class="text-xs "><b>Total amount</b></td>
                                <td class="text-xs "><b>{{ number_format($sum,0,'.','.') }} USD</b></td>
                            </tr>
                            <!--end tr-->

                        </tbody>
                    </table>
                </div>
            </div>
        
            <div class="w-full h-0.5 bg-indigo-500"></div>

            <div class="p-4">
                <div class="flex items-center justify-center">
                    Thank you so much for wishing you better health.
            </div>
             
            </div>

        </div>
    </div>
           
    @else
    <a href="#" class="capitalize flex justify-center mx-auto text-center items-center mt-3 mb-1">
        <img src="{{ asset('assets/img/error.svg') }}" class="img-responsive shadow rounded-lg" width="200px" height="200px" alt="">
        <br>
   </a>
   <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">no Invoice  were found</p>
        
    @endif
</div>