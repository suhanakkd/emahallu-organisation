@extends('layouts.index')
@section('content')
<form class="form-sample"  action="{{url('creation/save')}}" method="post" >
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
              COMMITTEE CREATION
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Period
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="period_id"
                >
                <option selected></option>
                          @foreach($period as $perd)
         <option value="{{$perd->id}}">{{$perd->period_time}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>
              <label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="name"  required
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Total members</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="members"  required
                />
              </label>
             
                      <!-- <label for="exampleInputEmail1" class="form-label text-black fw-bold fs-4">
                        Required Knowledge, Skills, and Abilities
                      </label>
                        <textarea class="form-control" name="description"  id="summernote1" ></textarea> 
                     -->
                     <label class="block mt-4 text-sm">
                <span class="text-gray-700">Description</span>
                <textarea
                  class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                  rows="3"
                  placeholder="Enter some long form content." name="description"  required
                ></textarea>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
$(document).ready(function() {
   
     $('#summernote1').summernote();
    
 });
  </script>
        @endsection
       
