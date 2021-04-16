<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Create an entry for Journal ({{$journal->name}})
            </h2>
            
        </div>
      
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <main class="max-w-lg mx-auto pt-10 pb-12 px-4 lg:pb-16">
                <form method="POST" action="{{route('entry.store', $journal)}}">
                    @csrf
                  <div class="space-y-6">
                    <div>
                      <h1 class="text-lg leading-6 font-medium text-gray-900">
                        Entry Information
                      </h1>
                      <p class="mt-1 text-sm text-gray-500">
                        Let’s get started by filling in the information below to create your new entry for the journal.
                      </p>
                    </div>
            
            
                    <div>
                      <label for="content" class="block text-sm font-medium text-gray-700">
                        Content
                      </label>
                      <div class="mt-1">
                        <textarea id="content" name="content" rows="3" class="block w-full shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm border-gray-300 rounded-md"></textarea>
                      </div>
                    </div>
            
                  
                    <div class="flex justify-end">
                        <a href="{{route('journals.show', $journal)}}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                            Cancel
                          </a>
                      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-light-blue-500">
                        Create Entry
                      </button>
                    </div>
                  </div>
                </form>
              </main>

        </div>
    </div>
</x-app-layout>
