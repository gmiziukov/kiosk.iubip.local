<div>

    <input wire:model = "name" type="text" placeholder="назовись воин">
    <select wire:model = "type_document">
        <option value=0>не выбрано</option>
        <option value=1>об обучении</option>
        <option value=2>на проезд</option>
    </select>
    <button wire:click="request()">просить</button>



    <p>
        молитесь, и бдует вам справка!
    </p>

</div>
