<div>
    <div class="h-screen w-full py-20">
        <div class="w-full fixed">
            <div class = "w-full flex flex-row ">
                <input wire:model = "name" type="text"
                    class = "w-1/3 ml-4 placeholder:italic placeholder:text-green-600 outline outline-offset-2 outline-emerald-400 rounded-md h-14 text-lg border border-green-600 text-blue-500 "
                    placeholder="Пожалуйста, введите логин от своего аккаунта moodle">

                <select class = "w-1/3 select-component" wire:model = "type_document">
                    <option class="text-blue-600" value=0>Не выбрано</option>
                    <option class="text-blue-600" value=1>Об обучении</option>
                    <option class="text-blue-600" value=2>На проезд</option>
                </select>

                <button
                    class = "outline outline-offset-2 w-24 h-[3.5rem] text-lg font-medium outline-emerald-400 border border-green-400 bg-white text-green-600 rounded-md"
                    wire:click="request() ">Заказать</button>
            </div>

        </div>


        <div class = "h-1/2 flex flex-col items-center justify-center">
            <div class="max-w-screen-2xl">
                <!-- Картинка главная -->
                <div class="grid md:grid-cols-5 gap-4 lg:gap-10">

                    <a href="https://laravel.com/docs" style="background-image: url({{ asset('img/economi1.png') }}); background-size: cover; "
                        class=" p-6 rounded-xl flex shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div class="flex items-center justify-center">
                            <h2 class="text-3xl font-sans text-center font-normal text-white">Академия экономики и управления</h2>
                        </div>
                    </a>

                    <a href="{{ route('student.grades') }}" style="background-image: url({{ asset('img/laywer.png') }}); background-size: cover;"
                        class="p-6 rounded-xl shadow-md flex shadow-emerald-400 hover:scale-[1.01]">
                        <div class="flex items-center justify-center">
                            <h2 class=" text-2xl font-sans text-center font-normal text-white">Академия права и государственной
                                службы</h2>
                        </div>
                    </a>

                    <a href="https://laracasts.com" style="background-image: url({{ asset('img/laywer.png') }}); background-size: cover;"
                        class="bg-gradient-to-bl h-60 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div class="flex items-center justify-center">
                            <h2 class="text-2xl font-sans text-center font-normal text-white">Академия гуманитарных технологий
                            </h2>
                        </div>
                    </a>

                    <a href="/class-schedule"
                        class="bg-gradient-to-tr h-60 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div class="flex items-center justify-center">
                            <h2 class="text-2xl font-sans text-center font-normal text-white">Академия цифрового развития</h2>
                        </div>
                    </a>

                    <a href="/class-schedule"
                        class="bg-gradient-to-tr h-60 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div class="flex items-center justify-center">
                            <h2 class="text-2xl font-sans font-normal text-center text-white">Академия туризма и индустрии
                                гостеприимства</h2>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
