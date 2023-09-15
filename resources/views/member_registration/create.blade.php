@extends('layouts.index')
@section('content')

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Member Registartion
            </h2>
            <h4
              class="mb-4 text-lg font-semibold text-gray-600"
            >
              Fill The Form
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
            <form action="{{url('member/store')}}" method="post">
              {{csrf_field()}}
             
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                House Name
                </span>
                <select
                  class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple" name="house_id"
                >
                @foreach ($house as $hs )
                  <option  value="{{$hs->id}}">{{$hs->house_id}}</option>
                  @endforeach
                </select>
              </label>
             
              

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Name</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="name"
                  {{-- placeholder="" --}}
                />
              </label>

              <!-- select start -->
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                 Relationship
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="designation"
                >
                <option selected ></option>         
         <option value="Father">Father</option>
         <option value="Mother">Mother</option>
         <option value="Grand Father">Grand Father</option>
         <option value="Grand Mother">Grand Mother</option>
         <option value="Brother">Brother</option>
         <option value="Sister">Sister</option>
         <option value="duaghter">duaghter</option>
         <option value="son">son</option>
         </select>
                  
                </select>
              </label>
              <!-- select end -->

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Age</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="age"
              
                />
              </label>
              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Gender</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="gender"
                 
                />
              </label>
            </label>  <label class="block text-sm" style="margin-bottom: 15px">
              <span class="text-gray-700">Phone Number</span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="phone_number"
                
              />
            </label>

            <label class="block text-sm" style="margin-bottom: 15px">
              <span class="text-gray-700">Photo</span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="photo"
               
              />

              <label   class="block mt-4 text-sm">
              <span class="text-gray-700">
                  Blood Group
              </span>

              <select
              class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"name="blood_group" id="blood_group"
            >
            @foreach ($blood as $bd )
            <option  value="{{$bd->id}}">{{$bd->group_name}}</option>
            @endforeach
            </select>
              </label>
            
          </label>  <label class="block text-sm" style="margin-bottom: 15px">
            <span class="text-gray-700">Diseases</span>
            <input
              class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="diseases"
             
            />
          </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Eductaion</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="education"
                
                />
              </label>

          </label>  <label class="block text-sm" style="margin-bottom: 15px">
            <span class="text-gray-700">Job</span>
            <input
              class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="job"
            
            />
          </label>
        </label>  <label class="block text-sm" style="margin-bottom: 15px">
          <span class="text-gray-700">Married Status</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="married_status"
         
          />
        </label>
              <div style="display: flex; justify-content: end; ">
                <button style="margin-top: 10px"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  sumbit
                </button>
              </form>
              </div>
            </div>
          </div>
        </main>
        @endsection
