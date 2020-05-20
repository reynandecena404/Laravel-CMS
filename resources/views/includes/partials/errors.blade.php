@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        <ul>
            <li>
                {{session()->get('error')}}
            </li>
        </ul>
        
    </div>
@endif