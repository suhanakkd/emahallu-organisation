@extends('layouts.index')
@section('content')
<form class="form-sample"  action="{{url('event/save')}}" method="post" >
                          {{csrf_field()}}
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
             
            </h2>
            <!-- CTA -->
          

            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600"
            >
              COMMITTEE EVENTS
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
           
              <label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Venue</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="venue"  required
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Date</span>
                <input type="date"
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="date"  required
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Time</span>
                <input type="time"
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="time"  required
                />
              </label>
              
           
             
               
                     
              
              <div style="display: flex; justify-content: end; ">
                <button style="margin-top: 10px"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  submit
                </button>
              </div>
            </div>
          

            <!-- Inputs with buttons -->
          </div>
        </main>
</form>

        @endsection
       
