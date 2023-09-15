@extends('layouts.index')
@section('content')

        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700"
            >
              House Registartion
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
            <form  action="{{url('store/house')}}" method="post">
              {{csrf_field()}}
              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">House id</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="house_id"
                  placeholder=""
                />
              </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Family Name</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" name="family_name"
                  placeholder=""
                />
              </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">House Holder Name</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="holder_name"
              
                />
              </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Address</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="address"
                
                />
              </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">House Number</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="house_number"
                 
                />
              </label>

              <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Ward</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="ward"
                 
                />

              </label>  <label class="block text-sm" style="margin-bottom: 15px">
                <span class="text-gray-700">Panchayath</span>
                <input
                  class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="panchayat"
                 
                />
              </label>

              </label>  <label class="block text-sm" style="margin-bottom: 15px">
            <span class="text-gray-700">Pincode</span>
            <input
              class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="pincode"
             
            />
          </label>

            </label>  <label class="block text-sm" style="margin-bottom: 15px">
              <span class="text-gray-700">Tottal Members</span>
              <input
                class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="tottal_memmbers"
               
              />
            </label>

        </label>  <label class="block text-sm" style="margin-bottom: 15px">
          <span class="text-gray-700">Annual income</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="annual_income"
           
          />
        </label>
          </label>  <label class="block text-sm" style="margin-bottom: 15px">
          <span class="text-gray-700">Monthly Payment</span>
          <input
            class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"name="monthly_payment"
           
          />
        </label>


              <div style="display: flex; justify-content: end; ">
                <button style="margin-top: 10px"
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit"
                >
                  sumbit
                </button>
              </form>
              </div>
            </div>
          

            <!-- Inputs with buttons -->
          </div>
        </main>
        @endsection
