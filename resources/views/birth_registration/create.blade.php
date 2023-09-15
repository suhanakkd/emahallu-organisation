@extends('layouts.index')
@section('content')


<form class="form-sample"  action="{{url('birthsave')}}" method="post" >
                          {{csrf_field()}}
                         
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 style="display: flex; justify-content:center;"
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Birth Registration Form
            </h2>
            <!-- CTA -->
          

            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600"
            >
              Fill The Form
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >

          
<div  style="margin-top:20px;>
             
             <label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  House_id
                </span>
                <select 
                  class="form-control block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="house_id" id="house"
                >
                <option selected></option>
                          @foreach($house as $hou)
         <option value="{{$hou->id}}">{{$hou->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>  
             

      
             
</div>

<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Baby name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="baby_name" 
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Date Of Birth</span>
                <input type="date"
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="dob" 
                />
              </label> 
              <label class="block text-sm"style="margin-bottom:15px;">
              <span class="text-gray-700">Gender</span>

              <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="male">
  <label class="form-check-label" for="flexRadioDefault1" style="padding-right:40px">
   Male
  </label>


  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="female">
  <label class="form-check-label" for="flexRadioDefault2">
   Female
  </label>
</div>
</label> 
<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Blood Groop</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="blood" 
                />
              </label>
              <label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Desease</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="desease" 
                />
              </label>
<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Place of Birth</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="place_of_birth" 
                />
              </label>
<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Father name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="father_name" 
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Mother Name</span>
                <input 
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="mother_name" 
                />
              </label>


              <div style="display: flex; justify-content:center;width:100%;">
                <button style="margin-top: 10px;width:50%;font-size:25px" type="submit"
                  class="px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
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
      




