@extends('layouts.index')

<style>
  .disable_section {
    pointer-events: none;
    opacity: 0.4;
  }
</style>
@section('content')
<!-- alert message start -->
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success text-center">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<p>{{ Session::get('success') }}</p>
</div>
@endif
<!-- alert message end -->

<form class="form-sample"  action="{{url('nikkahsave')}}" method="post" >
                          {{csrf_field()}}
                         
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 style="display: flex; justify-content:center;"
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Nikkah Registration Form
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
<!-- bride details start -->
            <!-- check box start -->
            <div class="flex mt-6 text-sm">
                <label class="flex items-center">
                  <input type="checkbox" id="bride" name="bride" onclick="enableCreatebride()"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                  />
                  <span class="ml-2" style="font-weight:bold">
                   Is the Bride 
                    <span class="underline">in this Mahallu?</span>
                  </span>
                </label>
              </div>
<!-- check box end -->
<div id="bride_register" style="margin-top:20px;>
             
             <label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  House_id
                </span>
                <select 
                  class="form-control block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="bride_house_id" id="house"
                >
                <option selected></option>
                          @foreach($house as $hou)
         <option value="{{$hou->id}}">{{$hou->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>  
             
             

           

    

      <label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  Members
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="bride_member_id" id="member"
                >
                <option value="">select member name</option>
         </select>
                  
                </select>
              </label>

      
             
</div>
<div id="outside_bride">
<label class="block text-sm "style="margin-bottom:15px;">
                <span class="text-gray-700">Bride Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="bride_name"  id="bride_name"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Bride's Mahallu Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="bride_mahallu" id="bride_mahallu"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Bride's Father's Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="bride_father" id="bride_father"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Bride's Panchayath</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="Bride_panchayath"  id="bride_panchayath"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Bride's Pincode</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="Bride_pincode" id="bride_pincode"
                />
              </label>
            
              <label class="block mt-4 text-sm">
                <span class="text-gray-700"> Bride's Address</span>
                <textarea name="bride_address" id="bride_address"
                  class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                  rows="3"
                  placeholder="Enter some long form content."
                ></textarea>
              </label>
</div>
<!-- bride details end -->
              

<!-- groom details start -->
<!-- check box start -->
<div class="flex mt-6 text-sm">
                <label class="flex items-center">
                  <input type="checkbox" id="groom" name="groom" onclick="enableCreategroom()"
                    class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                  />
                  <span class="ml-2" style="font-weight:bold">
                   Is the Groom 
                    <span class="underline">in this Mahallu?</span>
                  </span>
                </label>
              </div>
<!-- check box end -->
<div id="groom_register" style="margin-top:20px;>
              <label class="block mt-4 text-sm" style="margin-top:20px;">
                <span class="text-gray-700" style="margin-bottom:15px;">
                  House id
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="groom_house_id" id="groom_house"
                >
                <option selected></option>
                          @foreach($house as $hou)
         <option value="{{$hou->id}}">{{$hou->house_id}}</option>
         @endforeach
         </select>
                  
                </select>
              </label>

      <label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  Members
                </span>
                <select
                  class="block w-full mt-1 text-sm 
                  form-select 
                  focus:border-purple-400 focus:outline-none 
                  focus:shadow-outline-purple" name="groom_member_id" id="groom_member"
                >
                <option value="">select member</option>
         </select>
                  
                </select>
              </label>
</div>
<div id="outside_groom" style="margin-top:20px;>
<label class="block text-sm style="margin-bottom:15px;">
                <span class="text-gray-700">Groom Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="committee-name" name="groom_name" id="groom_name" 
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Groom's Mahallu Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="groom_mahallu" id="groom_mahallu"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Groom's Father's Name</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="committee-name" name="groom_father" id="groom_father"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Groom's Panchayath</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="groom_panchayath" id="groom_panchayath"
                />
              </label>
              <label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">Groom's Pincode</span>
                <input
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="groom_pincode" id="groom_pincode"
                />
              </label>
            
              <label class="block mt-4 text-sm">
                <span class="text-gray-700"> Groom's Address</span>
                <textarea name="groom_address" id="groom_address"
                  class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                  rows="3"
                  placeholder="Enter some long form content."
                ></textarea>
              </label>
</div>
<!-- groom details end -->

<label class="block text-sm"style="margin-bottom:15px;">
                <span class="text-gray-700">nikkah_date</span>
                <input type="date"
                  class="block w-full mt-1 text-sm 
                  focus:border-purple-400 focus:outline-none focus:shadow-outline-purple 
                  form-input"
                  placeholder="" name="nikkah_date"  required
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

        <script type="text/javascript">
// bride script

window.onload = (event) => {
  document.getElementById("bride_register").classList.add('disable_section')
  document.getElementById("groom_register").classList.add('disable_section')
  // console.log("page is fully loaded");
};
  function enableCreatebride() {
    // alert('ok');
  if (document.getElementById("bride").checked) {
    document.getElementById("bride_register").classList.remove('disable_section')
    document.getElementById("outside_bride").classList.add('disable_section')

  } else {
    document.getElementById("bride_register").classList.add('disable_section')
    document.getElementById("outside_bride").classList.remove('disable_section')

  }
}

// groom script

  function enableCreategroom() {
    // alert('ok');
  if (document.getElementById("groom").checked) {
    document.getElementById("groom_register").classList.remove('disable_section')
    document.getElementById("outside_groom").classList.add('disable_section')

  } else {
    document.getElementById("groom_register").classList.add('disable_section')
    document.getElementById("outside_groom").classList.remove('disable_section')

  }
}
 </script>
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

<script type="text/javascript">

    $(document).ready(function(){

        $('#groom_house').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_member')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                    $("#groom_member").empty();
                    $.each(result, function (key, value) {
                        $("#groom_member").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });


</script>


</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#groom_member').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_groom')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                  $("#groom_name").val(result.name);
                }
            });
        });
    });


</script>
<script type="text/javascript">

    $(document).ready(function(){

        $('#groom_house').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_groom_details')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                  $("#groom_address").val(result.address);
                  $("#groom_panchayath").val(result.panchayat);
                  $("#groom_pincode").val(result.pincode);
                  $("#groom_father").val(result.house_holder_name);
                  $("#groom_mahallu").val(result.panchayat);
                }
            });
        });
    });


</script>


<script type="text/javascript">

    $(document).ready(function(){

        $('#member').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_bride')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                  $("#bride_name").val(result.name);
                }
            });
        });
    });


</script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#house').on('change', function () {
            var id=$(this).val();

            $.ajax({
                url: "{{url('get_bride_details')}}?id="+id,
                type: "get",
                success: function (result) {
                  // console.log(result);
                  $("#bride_address").val(result.address);
                  $("#bride_panchayath").val(result.panchayat);
                  $("#bride_pincode").val(result.pincode);
                  $("#bride_father").val(result.house_holder_name);
                  $("#bride_mahallu").val(result.panchayat);
                }
            });
        });
    });


</script>

     

<script type="text/javascript">

    var path = "{{ route('autocomplete') }}";

  

    $('#house').select2({

        placeholder: 'Select an user',

        ajax: {

          url: path,

          dataType: 'json',

          delay: 250,

          processResults: function (data) {

            return {

              results:  $.map(data, function (item) {

                    return {

                        text: item.name,

                        id: item.id

                    }

                })

            };

          },

          cache: true

        }

      });

  

</script>

@endsection

