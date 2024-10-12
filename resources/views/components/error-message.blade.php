@if ($errors->any())
    <div class="text-red-700 pt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>* {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
