<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Journal') }}
            </h2>
            
        </div>
      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
                <form method="POST" action="{{route('journals.store')}}">
                    @csrf
                  <div class="space-y-6">
                    <div>
                      <h1 class="text-lg leading-6 font-medium text-gray-900">
                        Journal Information
                      </h1>
                      <p class="mt-1 text-sm text-gray-500">
                        Let’s get started by filling in the information below to create your new journal.
                      </p>
                    </div>
            
                    <div>
                      <label for="project_name" class="block text-sm font-medium text-gray-700">
                        Journal Name
                      </label>
                      <div class="mt-1">
                        <input type="text" name="name" id="name" class="block w-full shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm border-gray-300 rounded-md">
                      </div>
                    </div>
            
                    <div>
                      <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                      </label>
                      <div class="mt-1">
                        <textarea id="description" name="description" rows="3" class="block w-full shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm border-gray-300 rounded-md"></textarea>
                      </div>
                    </div>
            
                  
                    <div class="flex justify-end">
                        <a href="{{route('journals.index')}}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                            Cancel
                          </a>
                      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                        Create Journal
                      </button>
                    </div>
                  </div>
                </form>
              </main>

        </div>
    </div>
</x-app-layout>
