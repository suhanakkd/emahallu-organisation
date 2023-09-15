@extends('layouts.index')
@section('content')
<form class="form-sample"  action="{{url('payment/save')}}" method="post" >
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
              MONTHLY PAYMENT
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >
            </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  House-id
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="house_id" id="house"
                >
                <option selected></option>
                          @foreach($house as $hse)
         <option value="{{$hse->id}}">{{$hse->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
                <label class="block text-sm">
                <span class="text-gray-700">No of members</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  name="members"  id="member" required
                />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700">Year</span>
                <input type="year"
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  name="year"  required
                />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700">
                  Month
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="month_id" 
                >
                <option selected></option>
                          @foreach($month as $mon)
         <option value="{{$mon->id}}">{{$mon->name}}</option>
         @endforeach
         </select>
                  
         <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Date</span>
                <input type="date"
                  class="block w-full mt-1 mb-1
                  text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="date"  required
                />
              <label class="block text-sm">
                <span class="text-gray-700">Amount for one member</span>
                <input
                  class="block w-full mt-2 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  name="amount"  required
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function(){

$('#house').on('change', function () {
    var id=$(this).val();
console.log('o');
    $.ajax({
        url: "{{url('get_members')}}?id="+id,
        type: "get",
        success: function (result) {
          // console.log(result);
          
          $("#member").val(result.total_members);
        }
    });
});
 });

</script>
        @endsection
       
