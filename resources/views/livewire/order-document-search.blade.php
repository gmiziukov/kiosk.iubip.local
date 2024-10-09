<div>
    <div class="h-screen w-full py-20">
        <div class="w-full fixed">
            <div class="w-full flex flex-row ">

                <input wire:model="name" type="text"
                    class="w-2/5 ml-4 placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md h-14 text-lg border border-green-600 text-blue-500 "
                    placeholder="Пожалуйста, введите логин от своего аккаунта moodle">

                <select class="w-2/5 select-component" wire:model="type_document">
                    <option class="text-blue-600" value=0>Выбор справки</option>
                    <option class="text-blue-600" value=1>Об обучении</option>
                    <option class="text-blue-600" value=2>На проезд</option>
                </select>

                <button
                    class="outline outline-offset-2 w-24 h-[3.5rem] text-lg font-medium outline-emerald-400 border border-green-400 bg-white text-green-600 rounded-md"
                    wire:click="request() ">Заказать</button>
            </div>
            <div class="flex items-center justify-center py-10">
                <div class="flex items-center justify-center bg-clip-text text-transparent font-semibold h-16 w-3/5 bg-gradient-to-b from-red-800 from-1% via-red-600 via-60% to-red-800 to-2% border-dashed border-2 text-3xl">
                    <p>
                        Пожалуйста, введите логин, либо выберите академию
                    </p>
                </div>
            </div>
        </div>

      
        </div>
    </div>
</div>