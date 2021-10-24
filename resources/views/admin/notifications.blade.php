<div>
    <section class="text-gray-400 dark:bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-500 capitalize">List of notifications            </h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base capitalize">Here's a set of warnings that you need to be aware of as you manage.</p>
          </div>
          <div class="flex flex-wrap -m-2">
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">List All of Cashier</h2>
                  <p class="text-red-600">{{ $UniqueCasiher }}</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/84x84">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">List all expired goods</h2>
                  <p class="text-red-600">{{ $Expire_count }}</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/88x88">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">A list of all the items sold</h2>
                  <p class="text-red-600">{{ $items_sold }}</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">List all the items sold today</h2>
                  <p class="text-red-600">{{ $items_sold_today }}</p>
                </div>
              </div>
            </div>
        @php
            $sum=0;
            for($i=0;$i<count($solds);$i++){
              $Total_price=$solds[$i]['quantity']*$solds[$i]['price_at'];
              $sum += $Total_price;
            }
        @endphp
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/94x94">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">The sum of all the money that is in the store</h2>
                  <p class="text-gray-400">{{ number_format($sum,0,'.','.') }} IQD</p>
                </div>
              </div>
            </div>

            @php
            $total_amount =0;
            for($i=0;$i<count($sold_today);$i++){
              $Total=$sold_today[$i]['quantity']*$sold_today[$i]['price_at'];
              $total_amount += $Total;
            }
        @endphp
           
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">The sum of all the money that has been earned today</h2>
                  <p class="text-gray-400">{{ number_format($total_amount,0,'.','.') }} IQD</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/100x90">
                <div class="flex-grow">
                 
          

               
                  <h2 class="text-white title-font font-medium capitalize"> The name of the item that has expired from the store</h2>
                
                  <p class="text-gray-400">
                    @foreach ($quantity_amount as $item)
                    {{ $item->name }}
                @endforeach
                  </p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/104x94">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">List the items in the store that exist</h2>
                  <p class="text-red-600">{{ $stock_amount }}</p>
                </div>
              </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/108x98">
                <div class="flex-grow">
                  <h2 class="text-white title-font font-medium">Database Manage </h2>
                  <p class="text-gray-600">
                      @if (auth()->user()->rules == 1)
                          Administrator <span class="text-red-500 capitalize">{{ auth()->user()->name }}</span>
                      @endif
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
