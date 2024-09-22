@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Edit Department</h1>
        <form class="mt-4" action="">
            <div class="grid lg:grid-cols-4 items-center">
                <label for="departmentName" class="col-span-1">Department Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name" name="departmentName" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentCategory" class="col-span-1">Categry</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Category" name="departmentCategory">
            </div>
            <div class="mt-8">
                <button class="cancel-btn">Cancel</button>
                <button class="primary-btn" type="submit">Submit</button>
            </div>

        </form>
    </div>


    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
