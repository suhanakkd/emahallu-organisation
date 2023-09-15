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
            <form  action="{{url('members/update')}}" method="post">
              {{csrf_field()}}
              <label class="block text-sm" style="margin-bottom: 15px">
                <input
                  class="block w-full mt-1 text-sm
                   focus:border-purple-400 focus:outline-none 
                   focus:shadow-outline-purple 
                   form-input" type="hidden" name="id"value="{{$editdata->id}}"
                  placeholder=""
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Committee-name
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="commity_id"
                  value="{{$editdata->commity_id}}"
                >
                <option selected></option>
                          @foreach($creation as $creat)
                          @if($editdata->commity_id==$creat->id)
         <option value="{{$creat->id}}" selected>{{$creat->name}}</option>
         @else
  <option value="{{$creat->id}}">{{$creat->name}}</option>
  @endif
         @endforeach
         </select>
                  
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Period
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="period_id"
                  value="{{$editdata->period_id}}"
                >
                <option selected></option>
                          @foreach($period as $prd)
                          @if($editdata->peroid_id==$prd->id)
         <option value="{{$prd->id}}" selected>{{$prd->period_time}}</option>
         @else
  <option value="{{$prd->id}}">{{$prd->period_time}}</option>
  @endif
         @endforeach
         </select>
                  
                </select>
              </label>
         

              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  House-id
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="house_id"
                  value="{{$editdata->house_id}}"
                >
                <option selected></option>
                          @foreach($house as $hse)
                          @if($editdata->house_id==$hse->id)
         <option value="{{$hse->id}}" selected>{{$hse->house_id}}</option>
         @else
  <option value="{{$hse->id}}">{{$hse->house_id}}</option>
  @endif
         @endforeach
         </select>
                  
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Member
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="member_id"
                  value="{{$editdata->member_id}}"
                >
                <option selected></option>
                          @foreach($member as $mbr)
                          @if($editdata->member_id==$mbr->id)
         <option value="{{$mbr->id}}" selected>{{$mbr->name}}</option>
         @else
  <option value="{{$mbr->id}}">{{$mbr->name}}</option>
  @endif
         @endforeach
         </select>
                  
                </select>
              </label>
 <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Position
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="position_id"
                  value="{{$editdata->position_id}}"
                >
                <option selected></option>
                          @foreach($position as $pos)
                          @if($editdata->postion_id==$pos->id)
         <option value="{{$pos->id}}" selected>{{$pos->name}}</option>
         @else
  <option value="{{$pos->id}}">{{$pos->name}}</option>
  @endif
         @endforeach
         </select>
                  
                </select>
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