<div>
    <div class="flex flex-col">
        @foreach($data as $val)
            <div>
                {{ $val->question }} 
            </div>
            <div>
                {{ $val->answer }} 
                
            </div>            
        @endforeach
    </div>
</div>