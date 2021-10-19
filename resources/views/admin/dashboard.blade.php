<div>
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table with Dashboard
      </h4>

      <div>
        <section class="p-4 my-6 md:p-8 dark:bg-gray-800 dark:text-gray-100">
            <div class="container grid grid-cols-1 gap-6 m-4 mx-auto md:m-0 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <path d="M487.938,162.108l-224-128a16,16,0,0,0-15.876,0l-224,128a16,16,0,0,0,.382,28l224,120a16,16,0,0,0,15.112,0l224-120a16,16,0,0,0,.382-28ZM256,277.849,65.039,175.548,256,66.428l190.961,109.12Z"></path>
                            <path d="M263.711,394.02,480,275.061V238.539L256,361.74,32,238.539v36.522L248.289,394.02a16.005,16.005,0,0,0,15.422,0Z"></path>
                            <path d="M32,362.667,248.471,478.118a16,16,0,0,0,15.058,0L480,362.667V326.4L256,445.867,32,326.4Z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ $AllQuantity }}</p>
                        <p>All Quantity</p>
                    </div>
                </div>
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                    	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-9 w-9 dark:text-coolGray-800">
                            <polygon points="160 96.039 160 128.039 464 128.039 464 191.384 428.5 304.039 149.932 304.039 109.932 16 16 16 16 48 82.068 48 122.068 336.039 451.968 336.039 496 196.306 496 96.039 160 96.039"></polygon>
                            <path d="M176.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,176.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,176.984,464.344Z"></path>
                            <path d="M400.984,368.344a64.073,64.073,0,0,0-64,64h0a64,64,0,0,0,128,0h0A64.072,64.072,0,0,0,400.984,368.344Zm0,96a32,32,0,1,1,32-32A32.038,32.038,0,0,1,400.984,464.344Z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ number_format($AllMoney) }} USD</p>
                        <p>All Money</p>
                    </div>
                </div>
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                          </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ $uniqueCasiher }}</p>
                        <p>Cashier</p>
                    </div>
                </div>
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <path d="M256.25,16A240,240,0,0,0,88,84.977V16H56V144H184V112H106.287A208,208,0,0,1,256.25,48C370.8,48,464,141.2,464,255.75S370.8,463.5,256.25,463.5,48.5,370.3,48.5,255.75h-32A239.75,239.75,0,0,0,425.779,425.279,239.75,239.75,0,0,0,256.25,16Z"></path>
                            <polygon points="240 111.951 239.465 288 368 288 368 256 271.563 256 272 112.049 240 111.951"></polygon>
                        </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ number_format($AllMoneyToday*$AllQuantityToday) }} USD</p>
                        <p>All Money Today</p>
                    </div>
                </div>
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-6 h-6">
                            <path d="M415.313,358.7c36.453-36.452,55.906-85.231,54.779-137.353-1.112-51.375-21.964-99.908-58.715-136.66L388.75,107.314A166.816,166.816,0,0,1,438.1,222.039c.937,43.313-15.191,83.81-45.463,114.083l-48.617,49.051.044-89.165-32-.016L311.992,440H456.063V408H366.449Z"></path>
                            <path d="M47.937,112h89.614L88.687,161.3c-36.453,36.451-55.906,85.231-54.779,137.352a198.676,198.676,0,0,0,58.715,136.66l22.627-22.627A166.818,166.818,0,0,1,65.9,297.962c-.937-43.314,15.191-83.811,45.463-114.083l48.617-49.051-.044,89.165,32,.015L192.008,80H47.937Z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ $AllQuantityToday }}</p>
                        <p>All Quantity Toady</p>
                    </div>
                </div>
                <div class="flex overflow-hidden rounded-lg dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-center px-4 bg-purple-600 dark:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                    </div>
                    <div class="flex items-center justify-between flex-1 p-3">
                        <p class="text-2xl font-semibold">{{ $Expire_count }}</p>
                        <p>Expire Products</p>
                    </div>
                </div>
            </div>
        </section>
      </div>
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
                      <img class="object-cover w-full h-full rounded-full" src="{{ $sold->user->avatar }}" alt="" loading="lazy">
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
                 {{ $solds->links() }}
              </ul>
            </nav>
          </span>
        </div>
      </div>
</div>
