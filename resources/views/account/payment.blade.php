@extends('layouts.index')
@section('content')
<form  action="{{url('store/payment')}}" method="post" id="myForm">
  {{csrf_field()}}
<div class=" border-2 m-5 p-3">
    <div class="row ">
        <div class="column-6">
<label class="block text-sm">
  <span class="text-gray-700 dark:text-gray-400">Date</span>
  <input
    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"id="date" type="date"name="date"
    placeholder="" 
  />
</label>
</div>
<div class="column-6">
<label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">No</span>
    <input
      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"name="number"
      placeholder="Jane Doe"
    />
  </label>
</div>
</div>

  <label class="block text-sm">
    <span class="text-gray-700 dark:text-gray-400">Amount</span>
    <input
      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"id="typeNumber" type="number"name="amount"
      placeholder="Jane Doe"
    />
  </label>
  
 
  <label class="block mt-4 text-sm">
    <span class="text-gray-700 dark:text-gray-400">
    Mode
    </span>
    <select
      class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"name="mode"
    >
      <option>BANK</option>
      <option>CASH</option>
      
    </select>

  <label class="block text-sm ">
    <span class="text-gray-700 dark:text-gray-400">paid to</span>
    <input
      class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"name="paid_to"
      placeholder=""
    />
  </label>
</label>
<label class="block mt-4 text-sm">
  <span class="text-gray-700 dark:text-gray-400">Description</span>
  <textarea
    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"name="description"
    rows="2"
    placeholder=""
  ></textarea>
</label>
<div class="mt-3">
    <div class="column">
    <button
      class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    >
      Submit
    </button>
    <input type="button"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    onclick="myFunction()" value="Reset form">
</input>
  </div>
</div>
</form>
  @endsection
  @section('script')
  <script>
function myFunction() {
  document.getElementById("myForm").reset();
}
</script>
@endsection