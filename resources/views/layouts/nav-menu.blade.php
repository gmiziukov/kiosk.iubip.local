<div class="grid grid-cols-3 gap-4">
    <a href="{{ route('about.university') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-book-open fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">Университет сегодня</h4>
            <p class="text-white text-base text-justify">
                В этом разделе представлена актуальная информация о текущей деятельности университета, его достижениях, новостях и мероприятиях
            </p>
        </div>
    </a>
    <a href="{{ route('SelectStudentOrTeacher') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-calendar-days fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">Расписание занятий</h4>
            <p class="text-white text-base text-justify">
                В этом разделе представлено актуальное расписание занятий для обучающихся и преподавателей. Здесь вы найдете информацию о времени и месте проведения лекций, лабораторных работ и практических занятий
            </p>
        </div>
    </a>
    <a href="{{ route('student.document.order.requests') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-file-circle-plus fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">Заказ документов</h4>
            <p class="text-white text-base text-justify">
                В этом разделе обучающиеся могут заказать необходимые справки об обучении, а также отслеживать их статус и проверять готовность документов
            </p>
        </div>
    </a>
    <a href="{{ route('retake.schedule') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-rectangle-list fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">График пересдач</h4>
            <p class="text-white text-base text-justify">
                В этом разделе вы найдете информацию о графике пересдач, включая ФИО преподавателя, дату, время и аудиторию, в которой будет проходить прием академических задолженностей
            </p>
        </div>
    </a>
    <a href="{{ route('student.grades') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-star fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">Успеваемость</h4>
            <p class="text-white text-base text-justify">
                В этом разделе вы можете отслеживать свои академические достижения, просматривать оценки по всем дисциплинам и контролировать прогресс в учебе. Обучающиеся могут формировать индивидуальные сводки, а руководители академий - групповые
            </p>
        </div>
    </a>
    <a href="{{ route('faq') }}">
        <div class="h-72 flex flex-col space-y-4 bg-gradient-to-br from-blue-800 from-60%  to-blue-700 rounded shadow-md shadow-emerald-400 p-6">
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-headset fa-2xl" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl">Часто задаваемые вопросы</h4>
            <p class="text-white text-base text-justify">
                В этом разделе вы найдете ответы на наиболее распространенные вопросы, связанные с учебным процессом, административными процедурами и другими аспектами обучения
            </p>
        </div>
    </a>
</div>