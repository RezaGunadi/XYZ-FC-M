<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form action="">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          
               <div>
                   <h1 class="font-bold mb-3">Create Data</h1>
               </div>
               <div>
                   <div class="mb-2">
                    <label for="tittle">Name</label>
                        <input wire:model="Name" type="text" name="Name" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                    </div>
                    <div class="mb-2">
                     <label for="tittle">Image</label>
                         <input wire:model="image" type="text" name="image" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                     </div>
                     <div class="mb-2">
                      <label for="tittle">Height</label>
                          <input wire:model="Tinggi" type="text" name="Tinggi" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                      </div>
                      <div class="mb-2">
                       <label for="tittle">Weight</label>
                           <input wire:model="Berat" type="text" name="Berat" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                       </div>
                       <div class="mb-2">
                        <label for="tittle">Potition</label>
                            <input wire:model="Posisi" type="text" name="Posisi" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                        </div>
                        <div class="mb-2">
                         <label for="tittle">Number</label>
                             <input wire:model="No" type="text" name="No" class="shadow appearance-none border rounded w-full text-black placeholder-green-600::placeholder" placeholder="Input Post">
                         </div>
               </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
            Sumbit
          </button>
          <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
          </button>
        </form>
        </div>
      </div>
    </div>
  </div>