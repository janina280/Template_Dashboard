<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                              <span class="font-medium">
                                {{session('status')}}
                              </span>
                            </div>
                        </div>
                @endif
                <div class="card mt-3 ml-10">
                    <div class="card-header">
                        <div class="text-4xl text-gray-900 dark:text-white"> Permissions
                            <a href="{{url('permissions/create')}}" class="btn float-end text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Permission</a>
                        </div>
                    </div>
                    <br>
                    <div class="card-body center">
                        <table class="table-auto border-collapse border-2 border-violet-500 custom-table shadow-xl">
                            <thead>
                              <tr>
                                <th class="px-4 py-2">Id</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                              <tr>
                                <td  class="border px-4 py-2">{{$permission->id}}</td>
                                <td  class="border px-4 py-2">{{$permission->name}}</td>
                                <td  class="border px-4 py-2"><a href="{{url('permissions/'.$permission->id.'/edit') }} " class="btn text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>
                                                              <a href="{{url('permissions/'.$permission->id.'/delete') }} " class="btn text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
