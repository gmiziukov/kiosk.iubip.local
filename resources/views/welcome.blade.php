<x-main-layout>
    <x-slot name="head">
    </x-slot>
    <x-slot name="logotip">
        <img src="https://www.iubip.ru/local/templates/univer/img/logo.svg">
        <img src="https://www.centrinvest.ru/_ipx/_/logo.svg">
    </x-slot>
    <div
        class = "bg-gradient-to-br from-sky-900 via-blue-600 to-cyan-700 h-screen w-full flex flex-col items-center justify-center">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto"> </svg>
            </div>
            <!-- Картинка главная -->
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8 ">

                    <a href="https://laravel.com/docs"
                        class="bg-gradient-to-br h-64  from-blue-800 from-60%  to-blue-700 p-6 rounded-xl flex shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <!-- <img class="inline size-8" src="{{ asset('img/icons8-64.png') }}" alt="..."> -->
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-regular fa-calendar-days fa-2xl" style="color: #08cc22;"></i>
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">График пересдач</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Найдите время и кабинет, где преподаватели будут рады принять и закрыть ваши долги
                            </p>
                        </div>
                    </a>

                    <a href="{{ route('student.grades') }}"
                        class="bg-gradient-to-b h-64 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-user-clock fa-xl" style="color: #08cc22;"></i>
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">Успеваемость</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Ознакомьтесь с результатами вашей учебной деятельности - текущими оценками, результатами
                                промежуточной аттестации и итоговыми оценками.
                            </p>
                        </div>
                    </a>

                    <a href="https://laracasts.com"
                        class="bg-gradient-to-bl h-64 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-people-pulling fa-2xl" style="color: #08cc22;"></i>
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">Посещаемость</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Отслеживайте свою посещаемость занятий - убедитесь, что вы не пропускаете важные лекции
                                и семинары.
                            </p>
                        </div>
                    </a>

                    <a href="/class-schedule"
                        class="bg-gradient-to-tr h-64 from-blue-800 from-60%  to-blue-700  p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-book-open fa-2xl" style="color: #08cc22;"></i>
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">Расписание занятий</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Получите доступ к актуальному расписанию учебных занятий, чтобы своевременно посещать
                                лекции.
                            </p>
                        </div>
                    </a>

                    <a href="https://laravel-news.com"
                        class="bg-gradient-to-t h-64 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-regular fa-id-card fa-2xl" style="color: #08cc22;"></i>
                                <!-- <i class="fa-solid fa-person-praying fa-2xl" style="color: #08cc22;"></i> -->
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">Заказ Справки</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Узнайте о процедуре заказа справок и других необходимых документов.
                            </p>
                        </div>
                    </a>

                    <a href="https://laravel-news.com"
                        class="bg-gradient-to-tl h-64 from-blue-800 from-60%  to-blue-700 p-6 rounded-xl shadow-md shadow-emerald-400 hover:scale-[1.01]">
                        <div>
                            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-headset fa-2xl" style="color: #08cc22;"></i>
                            </div>
                            <h2 class="mt-6 text-2xl font-sans font-normal text-white">Часто задаваемые вопросы</h2>
                            <p class="mt-4 text-slate-300 text-sm leading-relaxed">
                                Найдите и задавайте? вопросы о студенческой жизни.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
