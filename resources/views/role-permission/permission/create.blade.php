<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3 ml-5">
                    <div class="card-header">
                        <div class="text-3xl text-gray-900 dark:text-white">Create Permission
                            <a href="{{url('permissions')}}" class="btn float-end text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('permissions')}}" method="POST">
                           @csrf
                            <div class="mb-5">
                                <label for="" class="text-xl text-gray-900 dark:text-white ">
                                    Permission Name
                                </label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
