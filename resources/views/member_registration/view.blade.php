@extends('layouts.index')
@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700"
    >
      Member Details
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

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50"
            >
              <th class="px-4 py-3">House No</th>
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Age</th>
              <th class="px-4 py-3">Gender</th>
              <th class="px-4 py-3">Image</th>
              <th class="px-4 py-3">Blood Group</th>
              <th class="px-4 py-3">Contact Number</th>
              <th class="px-4 py-3">Eduction</th>
              <th class="px-4 py-3">Job</th>
              <th class="px-4 py-3">Desease</th>
              <th class="px-4 py-3">Marriage Status</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Action</th>
            </tr>
          </thead>
          <tbody
            class="bg-white divide-y">
            @foreach($details as $key=>$dt)
            <tr class="text-gray-700">
              
  <td class="px-4 py-3 text-sm">{{$dt->house_id}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->name}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->age}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->gender}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->image}}</td>
  @foreach($dt->blood as $bd ) 
  <td class="px-4 py-3 text-sm">{{$bd->group_name}}</td>
  @endforeach
  <td class="px-4 py-3 text-sm">{{$dt->contact_number}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->educational_details}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->job}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->desease}}</td>
  <td class="px-4 py-3 text-sm">{{$dt->marital_status}}</td>
  <td class="px-4 py-3 text-sm">

  @if($dt->status==1)
  <span
    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"
  >
    Active
  </span>
  @endif

  @if($dt->status==0)
  <span
  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"
>
  Deactive
</span>
@endif

@if($dt->status==2)
<span
  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"
>
  Death
</span>
@endif

  </td>
  <td class="px-4 py-3 text-sm">
    <div class="flex items-center space-x-4 text-sm">
      {{-- <a href="{{URL('house/edit/'.$dt->id)}}"> --}}
        <button
        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
        aria-label="Edit"
      >
     
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
          ></path>
        </svg>
      </button>
    </a>
    {{-- <a href="{{URL('house/delete/'.$dt->id)}}"> --}}
      <button
        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
        aria-label="Delete"
      >
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            fill-rule="evenodd"
            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
    </a>
    </div>
  </td>
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