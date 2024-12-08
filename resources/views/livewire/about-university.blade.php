<div class="w-full h-full flex flex-col space-y-4">
    <div class="w-full h-24 flex justify-between">
        <div class="w-52 flex items-center justify-center">
            <button wire:click="redirectBack" class="btn-back">
                <i class="fa-solid fa-chevron-left fa-xl"></i>
                <span class="text-xl">Назад</span>
            </button>
        </div>
        <div class="w-52 flex items-center justify-center">
            <button wire:click="redirectToHome" class="btn-home">
                <i class="fa-solid fa-home fa-xl"></i>
                <span class="text-xl">Главная</span>
            </button>
        </div>
    </div>

    <div class="flex flex-row space-x-10 px-5">
        <img src="{{asset('storage/img/iubip.png')}}" class=" w-[35rem] h-[40rem]" alt=""></img>

        <div class="w-full flex flex-col space-y-4">
            <div class="w-full">
                <h2 class="text-white text-4xl text-center font-semibold">Факты о Вузе</h2>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Новое начало</span>
                    </div>
                    <p>"ЮЖНЫЙ УНИВЕРСИТЕТ" был основан в 1991 году</p>
                </div>
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Студенческая жизнь</span>
                    </div>
                    <p>На сегодняшний день в Университете: около На сегодняшний день в Университете: около 5 000 студентов и работает более 500 преподавателей.</p>
                </div>
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Первопроходец</span>
                    </div>
                    <p>Является первым негосударственным вузом современной России.</p>
                </div>
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Успешный путь обучения</span>
                    </div>
                    <p>За время работы университетом подготовлено более 20 000 квалифицированных специалистов.</p>
                </div>
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Льготы для студентов</span>
                    </div>
                    <p>В соответствии с действующим законодательством предоставляется отсрочка от службы.</p>
                </div>
                <div class="flex flex-col py-10 text-white text-xl">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-caret-right" style="color: #101b32;"></i>
                        <span class="font-semibold">Главный приоритет: трудоустройство</span>
                    </div>
                    <p>Более 98% выпускников Университета успешно трудоустраиваются по специальностям обучения.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col space-y-4 px-5">
        <div class="w-full">
            <h2 class="text-white text-4xl text-center font-semibold">Наши преимущества</h2>
        </div>
        <div class="grid grid-cols-4 gap-4">
            <div class="flex flex-col bg-gradient-to-br from-blue-950 from-60% to-blue-500 rounded p-4 text-white">
                <h2 class="flex text-3xl font-bold">Топ-20</h2>
                <hr />
                <p>Университет входит в состав 17 элитных российских вузов</p>
            </div>
            <div class="flex flex-col bg-gradient-to-br from-blue-950 from-60% to-blue-500 rounded p-4 text-white">
                <h2 class="flex text-3xl font-bold">12 место</h2>
                <hr />
                <p>Входит в международный рейтинг Eduniversal среди российских участников</p>
            </div>
            <div class="flex flex-col bg-gradient-to-br from-blue-950 from-60% to-blue-500 rounded p-4 text-white">
                <h2 class="flex text-3xl font-bold">2 место</h2>
                <hr />
                <p>В 2013 году по итогам мониторинга эффективности высших учебных заведений занял второе место Ростовской области</p>
            </div>
            <div class="flex flex-col bg-gradient-to-br from-blue-950 from-60% to-blue-500 rounded p-4 text-white">
                <h2 class="flex text-3xl font-bold">Доверие от государства</h2>
                <hr />
                <p>Получение от Федеральной службы по надзору бессрочную лицензию на право образовательной деятельности</p>
            </div>
        </div>
    </div>

    <div class="group mt-5 flex max-md:flex-col justify-center gap-3 px-5">
        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover  md:h-[480px] md:w-auto" src="{{asset('storage/img/img_1.jpg')}}" alt="Image 01">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/img/img_2.jpg')}}" alt="Image 02">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/img/img_3.jpg')}}" alt="Image 03">
        </article>

        <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[60%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
            <img class="object-cover h-72 md:h-[480px] md:w-auto" src="{{asset('storage/img/img_4.jpg')}}" alt="Image 04">
        </article>
    </div>

    <div class="px-5 text-white text-xl">
        <p class="py-2">Начать обучение в Университете можно уже с Колледжа рационального обучения. Преимущества обучения заключается в том, что параллельно с общим образованием, студенты получают профессию, и становятся более конкурентоспособными на рынке труда. Тем кто хочет получить высшее профессиональное образование "ЮЖНЫЙ УНИВЕРСИТЕТ" (ИУБиП) предлагает программы бакалавриата. А для тех, кто не хочет останавливаться на достигнутом и стремится достичь подлинных высот действуют программы второго высшего образования, магистратуры, программы высшего управленческого мастерства (MBA и ЕМВА) и аспирантуры.</p>
        <p class="py-2">Начать обучение в Университете можно уже с Колледжа рационального обучения. Преимущества обучения заключается в том, что параллельно с общим образованием, студенты получают профессию, и становятся более конкурентоспособными на рынке труда. Тем кто хочет получить высшее профессиональное образование "ЮЖНЫЙ УНИВЕРСИТЕТ" (ИУБиП) предлагает программы бакалавриата. А для тех, кто не хочет останавливаться на достигнутом и стремится достичь подлинных высот действуют программы второго высшего образования, магистратуры, программы высшего управленческого мастерства (MBA и ЕМВА) и аспирантуры.</p>
        <p class="py-2">В ЮУ (ИУБиП) активно действуют программы международного образования предоставляющие конкурентные преимущества не только на российском, но и на мировом рынке труда. Обучение в Унверситете проходит по новейшим технологиям — именно поэтому учиться в ИУБиП престижно и интересно. Все выпускники ЮУ (ИУБиП) помимо дипломов государственного образца одними из первых в России стали получать дипломы европейского образца. Данный документ даёт возможность продолжить образование и начать карьеру во всем Европейском пространстве.</p>
        <p class="py-2">Сегодня, комфортные условия обучения – это одно из требований времени. Без современных технологий подготовить квалифицированного специалиста, востребованного на рынке труда, просто невозможно. Поэтому в университете уделяется повышенное внимание всем вопросам организации учебного процесса и жизнедеятельности студентов на территории вуза.</p>
        <p class="text-center">Мы будем рады видеть Вас в числе наших студентов, ведь каждый студент для нас отдельный бизнес-проект, а бизнес мы делаем совершенным!</p>
        <p class="text-center">Профессионалы выбирают "ЮЖНЫЙ УНИВЕРСИТЕТ (ИУБиП)"!</p>
        <p class="text-center">Не отставайте!</p>
    </div>
</div>