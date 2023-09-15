@extends('layouts.index')
@section('content')

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Committee 
            </h2>
            <!-- CTA -->
          

            <!-- General elements -->
           
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
            <form  action="{{url('period/update')}}" method="post">
              {{csrf_field()}}
              <input
                  class="block w-full mt-1 text-sm
                   focus:border-purple-400 focus:outline-none 
                   focus:shadow-outline-purple 
                   form-input" type="hidden" name="id"value="{{$editdata->id}}"
                  placeholder=""
                /> 
             

         <label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="name"  value="{{$editdata->period_time}}" required
                />
              </label>

              

             

             

              
        </label>
              <div style="display: flex; justify-content: end; ">
                <button style="margin-top: 10px"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit"
                >
                  submit
                </button>
              </form>
              </div>
            </div>
          

            <!-- Inputs with buttons -->
          </div>
        </main>
        @endsection