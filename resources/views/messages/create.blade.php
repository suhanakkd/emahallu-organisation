@extends('layouts.index')
@section('content')


<form class="form-sample"  action="{{url('custome-massage-post')}}" method="post" >
                          {{csrf_field()}}
                         
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 style="display: flex; justify-content:center;"
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              Message Submitting  Form
            </h2>
            <!-- CTA -->
          

            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600"
            >
              Fill The Field
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
            >

          

<label class="block mt-4 text-sm" style="margin-top:20px;>
                <span class="text-gray-700" style="margin-bottom:15px;">
                  Message type
                </span>
                <select class="form-select" aria-label="Default select example" name="type">
  <option selected>Select type</option>
  <option value="1">commity</option>
  <option value="2">All members</option>
</select>
              </label>
      <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="message"></textarea>
  <label for="floatingTextarea">Messages</label>
</div>
             
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


