<div>
    <div class="flex flex-col">
        @foreach($data as $data1)
<<<<<<< HEAD
        <div>
            <button wire:click='vie' wire:model="val" value="{{ $data1->id }}">
                {{ $data1->question }}
            </button>
        </div>
=======
            <div>
                <button wire:click='vie' value="{{ $data1->id }}"  wire:model="val">
                    {{ $data1->question }} 
                </button>
                 

            </div>

>>>>>>> d409f5dc848f392865b86d21aed23da5f79330aa
        @endforeach
    </div>
</div>