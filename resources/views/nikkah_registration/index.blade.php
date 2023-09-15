
@extends('layouts.index')
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700"
    >
      Marriage Registration Details 
    </h2>
    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs"
      >
        <div
          class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600"
          >
            Total clients
          </p>
          <p
            class="text-lg font-semibold text-gray-700"
          >
            6389
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs"
      >
        <div
          class="p-3 mr-4 text-green-500 bg-green-100 rounded-full"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600"
          >
            Account balance
          </p>
          <p
            class="text-lg font-semibold text-gray-700"
          >
            $ 46,760.89
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs"
      >
        <div
          class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600"
          >
            New sales
          </p>
          <p
            class="text-lg font-semibold text-gray-700"
          >
            376
          </p>
        </div>
      </div>
      <!-- Card -->
      <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs"
      >
        <div
          class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <div>
          <p
            class="mb-2 text-sm font-medium text-gray-600"
          >
            Pending contacts
          </p>
          <p
            class="text-lg font-semibold text-gray-700"
          >
            35
          </p>
        </div>
      </div>
      </div>
<!-- search start -->
 <div class="flex justify-center flex-1 lg:mr-32">
        <div
          class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
        >
          <div class="absolute inset-y-0 flex items-center pl-2">
            <svg
              class="w-4 h-4"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20" style="margin-bottom: 20px;"
            >
              <path
                fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </div>
          <input
            class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" id="myInput"
            type="text"
            placeholder="Search for projects"
            aria-label="Search" style="margin-bottom: 20px;"
          />
        </div>
      </div>
<!-- search end -->
      
    

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"
            >
              <th class="px-4 py-3">Bride Name</th>
              <th class="px-4 py-3">Bride's Father Name</th>
              <th class="px-4 py-3">Bride Address</th>
              <th class="px-4 py-3">Bride Pincode</th>
              <th class="px-4 py-3">Bride Mahallu</th>
              <th class="px-4 py-3">Bride Panchayath</th>
              <th class="px-4 py-3">Groom Name</th>
              <th class="px-4 py-3">Groom's Father Name</th>
              <th class="px-4 py-3">Groom Address</th>
              <th class="px-4 py-3">Groom Pincode</th>
              <th class="px-4 py-3">Groom Mahallu</th>
              <th class="px-4 py-3">Groom Panchayath</th>
              <th class="px-4 py-3">Nikkah Date</th>
            </tr>
          </thead>
          <tbody id="myTable"
            class="bg-white divide-y">
            @foreach($nikkah as $key=>$nikkah)
            <tr class="text-gray-700">
<td class="px-4 py-3 text-sm">{{$nikkah->bride_name}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->bride_fathername}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->bride_adress}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->bride_pincode}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->bride_mahallu}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->bride_panchayath}}</td>
<td class="px-4 py-3 text-sm">{{$nikkah->groom_name}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->groom_fathername}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->groom_adress}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->groom_pincode}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->groom_mahallu}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->groom_panchayath}}</td>
  <td class="px-4 py-3 text-sm">{{$nikkah->marriage_date}}</td>
</tr>
@endforeach
          </tbody>
        </table>
      </div>
      <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9"
      >
        <span class="flex items-center col-span-3">
          Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
          <nav aria-label="Table navigation">
            <ul class="inline-flex items-center">
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Previous"
                >
                  <svg
                    aria-hidden="true"
                    class="w-4 h-4 fill-current"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  1
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  2
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  3
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  4
                </button>
              </li>
              <li>
                <span class="px-3 py-1">...</span>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  8
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                >
                  9
                </button>
              </li>
              <li>
                <button
                  class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                  aria-label="Next"
                >
                  <svg
                    class="w-4 h-4 fill-current"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                </button>
              </li>
            </ul>
          </nav>
        </span>
      </div>
    </div>
  </div>
</main>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection