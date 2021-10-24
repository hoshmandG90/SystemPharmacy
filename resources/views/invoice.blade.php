<div>
    @if ($result->isNotEmpty())
        

    <div style="width:350px" class="border border-gray-200 mb-3">
        <div  class="text-left w-full text-sm p-6 overflow-auto">
          <div class="text-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Tailwind POS" class="mb-3 w-8 h-8 inline-block">
            <h2 class="text-xl font-semibold">Invoice POS</h2>
            <p>Hoshmand Kamal</p>
          </div>
          <div class="flex mt-4 text-xs">
            <div class="flex-grow">Receipt_number: <span >{{ $Receipt_number->id }}</span></div>
            <div >{{ $Receipt_number->created_at->format('m/d/Y') }}  {{ $Receipt_number->created_at->format('H:s A') }}</div>
          </div>
          <hr class="my-2">
          <div>
            <table class="w-full text-xs">
              <thead>
                <tr>
                  <th class="py-1  text-center">#</th>
                  <th class="py-1 px-2">Item</th>
                  <th class="py-1  ">Quantity</th>

                  <th class="py-1 text-right ">Each/Qty</th>
                  <th class="py-1 text-right ">Total Price</th>


                </tr>
              </thead>
              <tbody>
                  @foreach ($result as $index=>$item)
                  <tr class="border-t">
                    <td class="py-2 text-center">{{ $index+1 }}</td>
                    <td class="py-2 px-2">{{ $item->stock->name }}</td>
                    <td class="py-2 text-center">{{ $item->quantity }}</td>

                    <td class="py-2 text-right">{{number_format($item->stock->price,0,'.','.') }}</td>
                    <td class="py-2 text-right">{{number_format($item->price_at * $item->quantity,0,'.','.') }}</td>

                  </tr>
                 
                  @endforeach
               
              
             
                </tbody>
            </table>
          </div>
          <hr class="my-2">
          @php
              $sum=0;
              for($i=0;$i<count($result);$i++){
                $Total_price=$result[$i]['quantity']*$result[$i]['price_at'];
                $sum += $Total_price;
              }
          @endphp
          <div>
            <div class="flex font-semibold">
              <div class="flex-grow">TOTAL</div>
              <div >Rp. {{ number_format($sum,0,'.','.') }} USD</div>
            </div>
          
           
          </div>
        </div>
        <div class="px-2 py-4 text-center">
          <q class="w-full ">Wishing you better health dear</q>
      </div>
      </div>
      @else
      <a href="#" class="capitalize flex justify-center mx-auto text-center items-center mt-3 mb-1">
         <img src="{{ asset('assets/img/notleft.svg') }}" class="img-responsive shadow rounded-lg" width="200px" height="200px" alt="">
         <br>
    </a>
    <p class="text-xs text-center capitalize text-red-400 mt-2 mb-1">no Invoice  were found</p>
      @endif
</div>
