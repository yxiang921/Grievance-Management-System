@extends('layouts.master')
@section('content')
    {{-- Search area --}}
    <div class="w-full pl-6 flex flex-col justify-center items-start">
        <input type="text" placeholder="Search by keywords" 
        class="primary-input w-1/3">
        <button class="primary-btn w-2/12">Search</button>
    </div>

@endsection
