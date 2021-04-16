<x-app-layout>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            

            <div class="min-h-0 flex-1 overflow-y-auto">
                <div class="pt-5 pb-6">
                  <div class="px-4 sm:flex sm:justify-between sm:items-baseline sm:px-6 lg:px-8">
    
                        <div class="sm:w-0 sm:flex-1">
                            <h1 class="text-lg font-semibold text-blue-600">
                             {{$journal->name}}
                            </h1>
                            <p class="mt-1 text-sm text-gray-500 truncate">
                              {{$journal->description}}
                            </p>
                          </div>
      
                       
                          <a  href="{{route('entry.create', $journal)}}" class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                            <svg class="ml-0.5 mr-2 h-4 w-" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                           Add Entry
                        </a>
                       
                    
                  </div>
                  
                </div>
                <!-- Thread section-->
                <ul class="py-4 space-y-2 sm:px-6 sm:space-y-4 lg:px-8">

                    @forelse ($journal->entries as $entry)
                    <li class="bg-white px-4 py-6 shadow sm:rounded-lg sm:px-6">
                        <div class="sm:flex sm:justify-between sm:items-baseline">
                          <h3 class="text-base font-medium">
                            <span class="text-gray-900">{{$entry->content}}</span>
                            <!-- space -->
                            <span class="text-gray-600"></span>
                          </h3>
                          <p class="mt-1 text-sm text-gray-600 whitespace-nowrap sm:mt-0 sm:ml-3">
                            <time>{{$entry->created_at->diffForHumans()}}</time>
                          </p>
                        </div>
                       
                      </li>

                      @empty
                      <p class="text-gray-500">📔 No journal entries.</p>
                    @endforelse
                  
                  
                  
                
                </ul>
              </div>

        </div>
    </div>
</x-app-layout>
