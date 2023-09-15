@extends('layouts.index')
@section('content')


<form class="form-sample"  action="{{url('pravasisave')}}" method="post" >
                          {{csrf_field()}}
                         
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 style="display: flex; justify-content:center;"
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Pravasi Registration Form
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
                          @foreach($house as $house)
         <option value="{{$house->id}}">{{$house->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>            
</div>
<label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  Members
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="member_id" id="member"
                >
                <option value="">select member name</option>
         </select>
                  
                </select>
              </label>
<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Country</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="country" id="country"
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
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $('#house').on('change', function () {
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

