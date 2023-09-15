@extends('layouts.index')
@section('content')

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Add Account
            </h2>
            <!-- CTA -->
          

            <!-- General elements -->
           
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <form  action="{{url('store/ledger')}}" method="post" id="myForm">
              {{csrf_field()}}
          
              <label   class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  subgroup
                </span>

                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"name="sub_group_id" id="houseid"
                >
                @foreach ($subgroup as $sub )
                <option  value="{{$sub->id}}">{{$sub->name}}</option>
                @endforeach
                </select>
              </label>
              

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="name"
                  placeholder=""
                />
              </label>
              
           
              
              <div style="display: flex; justify-content: end; ">
                <button style="margin-top: 10px"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit"
                  >
                  submit
                </button>
                </div>
              </form>
              </div>
            </div>
          

            <!-- Inputs with buttons -->
          </div>
        </main>
        @endsection
        @section('script')
            <script type="text/javascript">

var path = "{{ route('autocomplete') }}";

$( "#search" ).autocomplete({
  consol,log('hi');

    source: function( request, response ) {

      $.ajax({

        url: path,

        type: 'GET',

        dataType: "json",

        data: {

           search: request.term

        },

        success: function( data ) {
           response( data );

        }

      });

    },

    select: function (event, ui) {

       $('#search').val(ui.item.label);

       console.log(ui.item); 

       return false;

    }

  });
</script>
      @endsection
