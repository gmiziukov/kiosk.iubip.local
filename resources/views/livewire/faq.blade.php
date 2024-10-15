<div>
    <div class="flex flex-col">
        @foreach($data as $data1)
        <div>
            <button wire:click='vie' wire:model="val" value="{{ $data1->id }}">
                {{ $data1->question }}
            </button>
        </div>
        @endforeach
    </div>
</div>