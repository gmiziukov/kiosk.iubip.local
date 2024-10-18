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

        <img src="{{asset('storage/iubip.jpg')}}" class="rounded-l-xl w-[35rem] h-[40rem]" alt=""></img>

        <div class="flex flex-col h-[40rem]">

            <div class="w-[15rem] ">
                <p class="pl-4 pt-2 py-4 indent-4">Факты о Вузе</p>
            </div>

            <div class="grid grid-cols-1 list-disc">
                <div class="w-[30rem]">
                    <li class=" text-xl indent-4 text-white pt-6">
                        На сегодняшний день в Университете:
                    </li>
                    <li class="list-none text-xl indent-10 text-white px-4"> Обучается около <span class="font-sans italic underline font-bold decoration-sky-500 text-xl text-white">5 000</span> студентов.</li>
                    <li class="list-none text-xl indent-10 text-white pb-[1.06rem] px-4"> Работает более <span class="font-sans italic underline font-bold decoration-sky-500 text-xl text-white">500</span> преподавателей.</li>
                </div>
                <div>
                    <li class="text-xl indent-4 py-8 text-white">
                        "ЮЖНЫЙ УНИВЕРСИТЕТ" был основан в <span class="italic underline font-bold decoration-sky-500">1991 году</span>
                    </li>
                </div>

                <div>
                    <li class="text-xl indent-4 py-8 text-white">
                        Является первым негосударственным вузом современной России.
                    </li>
                </div>

                <div>
                    <li class="text-xl indent-4 py-6 text-white">
                        За время работы университетом подготовлено более <span class="font-sans italic underline font-bold decoration-sky-500 text-lg text-white">20 000</span> квалифицированных специалистов.
                    </li>
                </div>

                <div class="w-[70rem]">
                    <li class="text-xl list-outside indent-4 py-10 text-white">
                        В соответствии с действующим законодательством предоставляется отсрочка от службы.
                    </li>
                </div>

                <div>
                    <li class="text-xl indent-4 pt-6 text-lg text-white">
                        Более 98% выпускников Унверситета успешно трудоустраиваются по специальностям обучения.
                    </li>
                    <li class="text-xl list-none indent-8 pl-2 text-lg text-white">
                        Именно этот показатель традиционно считается в Университете важнейшим.
                    </li>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 font-mono text-white text-3xl">
        <p>
            Наши достижения
        </p>
    </div>

    <div class="grid grid-cols-6 justify-between pt-2 w-full gap-8">
        <div class="bg-purple-400/60 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold flex justify-start indent-4 w-[15rem]">Топ-20</p>
            <div class="flex justify-center w-[15rem] border-t pb-12 items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Университет входит в состав 17 элитных российских вузов
                </p>
            </div>
        </div>
        <div class="bg-zinc-400/60 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold flex justify-start indent-4 w-[15rem]">12 место</p>
            <div class="flex justify-center w-[15rem] pb-6 border-t items-center">
                <p class="font-mono text-white text-left flex justify-center items-center mt-4">
                    Входит в международный рейтинг Eduniversal среди российских участников
                </p>
            </div>
        </div>
        <div class="bg-indigo-400/50 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-3xl font-bold border-b flex justify-start pt-6 indent-4 w-[15rem]">2 место</p>
            <div class="flex justify-center items-center">
                <p class="font-mono px-6 text-white text-left flex justify-center items-center mt-4">
                    В 2013 году по итогам мониторинга эффективности высших учебных заведений занял второе место Ростовской области
                </p>
            </div>
        </div>
        <div class="bg-amber-200/50 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold flex justify-start border-b pl-2 w-[15rem]">Доверие от государства</p>
            <div class="flex justify-center items-center">
                <p class="font-mono px-6 text-white text-left flex justify-center items-center mt-4">
                    Получение от Федеральной службы по надзору бессрочную лицензию на право образовательной деятельности
                </p>

            </div>
        </div>
        <div class="bg-fuchsia-300/50 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold border-b flex pl-2 justify-start w-[15rem]">Новые кадры: отклик от бизнеса</p>
            <div class="flex justify-center items-center">
                <p class="font-mono px-6 text-white text-left flex justify-center items-center mt-4">
                    Проведение защиты дипломных работ с полной открытостью процесса, которой пользуются представители ростовских работодателей
                </p>
            </div>
        </div>
        <div class="bg-cyan-200/50 rounded-lg w-[18rem] h-[14rem] flex justify-center items-center text-white flex-col">
            <p class="font-mono text-2xl font-bold border-b pl-2 flex justify-start w-[15rem]">Обучение под потребности рынка</p>
            <div class="flex justify-center items-center">
                <p class="font-mono px-6 text-white text-left flex justify-center items-center mt-4">
                    Использование закона, позволяющего вести целевую подготовку студентов для конкретных работодателей с учетом их деятельности
                </p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 justify-between items-center flex justify-center pt-10 w-full gap-3">
        <img src="{{asset('storage/2photo.jpg')}}" class="rounded-xl " alt=""></img>
        <img src="{{asset('storage/3photo.jpg')}}" class="rounded-xl" alt=""></img>
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