@extends('layouts.index')
@section('content')
<form class="form-sample"  action="{{url('members/save')}}" method="post" >
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
              COMMITTEE MEMBERS
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
            <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Committee-name
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="commity_id"
                >
                <option selected></option>
                          @foreach($creation as $creat)
         <option value="{{$creat->id}}">{{$creat->name}}</option>
         @endforeach
         </select><label class="block mt-4 text-sm">
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
                  focus:shadow-outline-purple" name="house_id" id="house_id"
                >
                <option selected></option>
                          @foreach($house as $hse)
         <option value="{{$hse->id}}">{{$hse->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Member-name
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="member_id" id="member"
                >
                <option selected></option>
                          @foreach($member as $mbr)
         <option value="{{$hse->id}}">{{$mbr->name}}</option>
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
                >
                <option selected></option>
                          @foreach($position as $pos)
         <option value="{{$pos->id}}">{{$pos->name}}</option>
         @endforeach
         </select>
                  
                </select>
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
<script type="text/javascript">

  $(document).ready(function(){

      $('#house_id').on('change', function () {
          var id=$(this).val();

          $.ajax({
              url: "{{url('get_member')}}?id="+id,
              type: "get",
              success: function (result) {
                // console.log(result);
                  $("#member").empty();
                  $.each(result, function (key, value) {
                      $("#member").append('<option value="' + value
                          .id + '">' + value.name + '</option>');
                  });
              }
          });
      });
  });


</script>
        @endsection
       
