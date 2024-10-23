<div>
    <div class="flex justify-between">
        <button wire:click="redirectBack()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-chevron-left fa-xl"></i>
            <span class="text-xl">Назад</span>
        </button>
        <button wire:click="redirectToHome()" class="w-40 flex space-x-2 items-center justify-center bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded shadow-md shadow-emerald-400 p-4 text-white">
            <i class="fa-solid fa-home fa-xl"></i>
            <span class="text-xl">Главная</span>
        </button>
    </div>

    <div class="mt-10 font-mono text-white flex flex-row text-3xl">

        <img src="{{asset('storage/iubip1.png')}}" class=" w-[35rem] h-[40rem]" alt=""></img>

        <div class="flex flex-col flex items-center justify-center">
            <div class="w-[20rem] h-full flex">
                <p class="font-mono font-semibold text-4xl">Факты о Вузе</p>
            </div>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-2 h-full w-full px-6">


                    <div class="py-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono">Новое начало</span>
                        <p class="text-xl  py-2 w-[35rem] text-slate-400">
                            "ЮЖНЫЙ УНИВЕРСИТЕТ" был основан в <span class="font-bold ">1991 году</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono">Студенческая жизнь</span>
                        <p class="text-xl w-[35rem] text-justify text-slate-400"> На сегодняшний день в Университете: около <span class="font-sans font-bold  text-xl text-white">5 000</span> студентов и работает более <span class="font-sans font-bold  text-xl text-white">500</span> преподавателей.</p>
                    </div>

                    <div class="py-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono">Первопроходец</span>
                        <p class="text-xl w-[35rem] py-2 text-slate-400">
                            Является первым негосударственным вузом современной России.
                        </p>
                    </div>

                    <div class="py-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono ">Успешный путь обучения</span>
                        <p class="text-xl w-[35rem] text-justify py-2 text-slate-400">
                            За время работы университетом подготовлено более <span class="font-sans font-bold  text-lg text-white">20 000</span> квалифицированных специалистов.
                        </p>
                    </div>

                    <div class="py-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono">Льготы для студентов</span>
                        <p class="text-xl w-[35rem] py-2 text-slate-400">
                            В соответствии с действующим законодательством предоставляется отсрочка от службы.
                        </p>
                    </div>

                    <div class="py-10 pb-10">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-mono">Главный приоритет: трудоустройство</span>
                        <p class="text-xl pb-10 py-2 w-[35rem] text-justify text-lg text-slate-400">
                            Более 98% выпускников Университета успешно трудоустраиваются по специальностям обучения.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 flex items-center justify-center font-mono text-white text-3xl">
        <p>
            Наши достижения
        </p>
    </div>

    <div class="grid grid-cols-6 justify-between pt-4 w-full gap-8">

        <div class="relative h-full bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold flex justify-start indent-4 w-[15rem]">Топ-20</p>

            <div class="w-[60%] h-[60%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>

            <div class="flex justify-center w-[15rem] border-t pb-12 items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Университет входит в состав 17 элитных российских вузов
                </p>
            </div>
        </div>
        <div class="relative h-full bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold flex justify-start indent-4 w-[15rem]">12 место</p>
            <div class="w-[50%] h-[50%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>
            <div class="flex justify-center w-[15rem] pb-6 border-t items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Входит в международный рейтинг Eduniversal среди российских участников
                </p>
            </div>
        </div>
        <div class="relative bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold border-b flex justify-start pt-6 indent-4 w-[15rem]">2 место</p>
            <div class="w-[50%] h-[50%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>
            <div class="flex justify-center items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    В 2013 году по итогам мониторинга эффективности высших учебных заведений занял второе место Ростовской области
                </p>
            </div>
        </div>
        <div class="relative bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold flex justify-start border-b pl-2 w-[15rem]">Доверие от государства</p>
            <div class="w-[50%] h-[50%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>
            <div class="flex justify-center items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Получение от Федеральной службы по надзору бессрочную лицензию на право образовательной деятельности
                </p>

            </div>
        </div>
        <div class="relative bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold border-b flex pl-2 justify-start w-[15rem]">Новые кадры: отклик от бизнеса</p>
            <div class="w-[50%] h-[50%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>
            <div class="flex justify-center items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Проведение защиты дипломных работ с полной открытостью процесса, которой пользуются представители ростовских работодателей
                </p>
            </div>
        </div>
        <div class="relative bg-slate-900 p-6 pb-8 rounded-3xl z-20 overflow-hidden w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold border-b pl-2 flex justify-start w-[15rem]">Обучение под потребности рынка</p>
            <div class="w-[50%] h-[50%] absolute -translate-x-[10%] -translate-y-[10%] blur-3xl -z-10 rounded-full bg-blue-500"></div>
            <div class="flex justify-center items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Использование закона, позволяющего вести целевую подготовку студентов для конкретных работодателей с учетом их деятельности
                </p>
            </div>
        </div>
    </div>
    <div class="group mt-5 flex max-md:flex-col justify-center gap-3">
        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover  md:h-[480px] md:w-auto" src="{{asset('storage/4.jpeg')}}" alt="Image 01">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/3photo.jpg')}}" alt="Image 01">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[80%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/5.jpg')}}" alt="Image 01">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/6.jpg')}}" alt="Image 03">
        </article>
    </div>


    <p class="text-center font-sans text-2xl font-bold text-white mt-6">Направления обучения Университета</p>

    <p class="font-sans text-lg text-white mt-4">
        Начать обучение в Университете можно уже с Колледжа рационального обучения.
        Преимущества обучения заключается в том, что параллельно с общим образованием, студенты получают профессию,
        и становятся более конкурентоспособными на рынке труда.
        Тем кто хочет получить высшее профессиональное образование "ЮЖНЫЙ УНИВЕРСИТЕТ" (ИУБиП) предлагает программы бакалавриата.
        А для тех, кто не хочет останавливаться на достигнутом и стремится достичь подлинных высот действуют программы второго высшего образования, магистратуры,
        программы высшего управленческого мастерства (MBA и ЕМВА) и аспирантуры.
    </p>

    <p class="font-sans text-lg text-white mt-4">
        Для практикующих специалистов разработаны различные программы Международной школе бизнеса, в которой в короткие сроки вы можете получить весь спектр практических навыков,
        необходимых для решения профессиональных задач.
        Для тех кто не может отвлекаться от работы или проживает в другом городе в нашем вузе активно развиваются технологии дистанционного обучения.

    </p>

    <p class="font-sans text-lg text-white mt-4">
        В ЮУ (ИУБиП) активно действуют программы международного образования предоставляющие конкурентные преимущества не только на российском, но и на мировом рынке труда.
        Обучение в Унверситете проходит по новейшим технологиям — именно поэтому учиться в ИУБиП престижно и интересно.
        Все выпускники ЮУ (ИУБиП) помимо дипломов государственного образца одними из первых в России стали получать дипломы европейского образца.
        Данный документ даёт возможность продолжить образование и начать карьеру во всем Европейском пространстве.
    </p>

    <p class="font-sans text-lg text-white mt-4">
        Сегодня, комфортные условия обучения – это одно из требований времени.
        Без современных технологий подготовить квалифицированного специалиста, востребованного на рынке труда, просто невозможно.
        Поэтому в университете уделяется повышенное внимание всем вопросам организации учебного процесса и жизнедеятельности студентов на территории вуза.
    </p>

    <ul class="font-sans text-center list-none text-lg text-white mt-6">
        <li>Мы будем рады видеть Вас в числе наших студентов, ведь каждый студент для нас отдельный бизнес-проект, а бизнес мы делаем совершенным!</li>
        <li>Профессионалы выбирают "ЮЖНЫЙ УНИВЕРСИТЕТ (ИУБиП)"!</li>
        <li>Не отставайте!</li>
    </ul>
</div>