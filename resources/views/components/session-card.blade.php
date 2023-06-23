@if (session()->has('mysession')){
    <style>
        .p{
            position: relative;
            top: 0px;
            color: black;
        }
        </style>
        <div class="p">
            <p>
                {{session('mysession')}}
            </p>
        </div>
    
    
    
}
    
@endif
