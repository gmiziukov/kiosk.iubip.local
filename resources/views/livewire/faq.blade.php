<div>

    <div class = "flex flex-col">
        @foreach($data as $data1)
            <div>
                <button wire:click='vie' value="{{ $data1->id }}"  wire:model="val">
                    {{ $data1->question }} 
                </button>
                 

            </div>

        @endforeach
    </div>
</div>
