<div>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table with Dashboard
      </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-xs text-center items-center font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3 text-left">Cashier</th>
                <th class="px-4 py-3">barcode</th>
                <th class="px-4 py-3">stock name</th>
                <th class="px-4 py-3">price</th>
                <th class="px-4 py-3">price at</th>
                <th class="px-4 py-3">expire date</th>
                <th class="px-4 py-3">created at</th>
                <th class="px-4 py-3">sold at</th>
                <th class="px-4 py-3">quantity</th>
                <th class="px-4 py-3 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($solds as $sold)
                    
            
              <tr class="text-gray-700 dark:text-gray-400 text-center items-center">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <!-- Avatar with inset shadow -->
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold capitalize">{{ $sold->user->name }}</p>
                      <p class="text-xs text-left text-gray-600 capitalize dark:text-gray-400">
                        {{ $sold->user->username }}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                    {{ $sold->stock->id }}
                  </td>
                  <td class="px-4 py-3 text-sm">
                    {{ $sold->stock->name }}
                  </td>
                  <td class="px-4 py-3 text-sm">
                    {{ number_format( $sold->stock->price)}} USD
                  </td>

                  <td class="px-4 py-3 text-sm">
                    {{ number_format( $sold->price_at)}} USD
                  </td>
                 
                 
                  <td class="px-4 py-3 text-sm text-red-400">
                   {{$sold->stock->expire_date->format('M d Y')}}
                  </td>
               
                <td class="px-4 py-3 text-sm">
                    {{ $sold->stock->created_at->format('M d Y') }}

                </td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                    {{ $sold->created_at->format('M d Y') }}

                  </span>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $sold->quantity }}
                </td>
                <td class="px-4 py-3 ">
                  <div class="flex float-right space-x-4 text-sm">
                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                      </svg>
                    </button>
                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
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
            Showing {{ $solds->currentPage() }}-{{ $solds->lastItem() }} of {{ $solds->currentPage() }}
        </span>
          <span class="col-span-2"></span>
          <!-- Pagination -->
          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
              <ul class="inline-flex items-center">
                 Pagination
              </ul>
            </nav>
          </span>
        </div>
      </div>
</div>
