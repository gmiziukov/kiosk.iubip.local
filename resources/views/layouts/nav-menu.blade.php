<div class="h-full w-full flex items-center">
    <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-4">
        <a href="{{ route('about.university') }}">
            <div class="menu-card" style="background-image: url('storage/about_university.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-info fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">Университет сегодня</h2>
                    <p class="menu-card-text">
                        В этом разделе представлена актуальная информация о текущей деятельности университета, его достижениях, новостях и мероприятиях
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('schedule') }}">
            <div class="menu-card" style="background-image: url('storage/schedule.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-calendar-days fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">Расписание занятий</h2>
                    <p class="menu-card-text">
                        В этом разделе представлено актуальное расписание занятий для обучающихся и преподавателей. Здесь вы найдете информацию о времени и месте проведения лекций, лабораторных работ и практических занятий
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('student.document.order.requests') }}">
            <div class="menu-card" style="background-image: url('storage/student_document_order.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-file-circle-plus fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">Заказ документов</h2>
                    <p class="menu-card-text">
                        В этом разделе обучающиеся могут заказать необходимые справки об обучении, а также отслеживать их статус и проверять готовность документов
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('academic.retake.schedule.list') }}">
            <div class="menu-card" style="background-image: url('storage/academic_retake.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-calendar-day fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">График пересдач</h2>
                    <p class="menu-card-text">
                        В этом разделе вы найдете информацию о графике пересдач, включая ФИО преподавателя, дату, время и аудиторию, в которой будет проходить прием академических задолженностей
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('student.grades') }}">
            <div class="menu-card" style="background-image: url('storage/student_grades.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-star fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">Успеваемость</h2>
                    <p class="menu-card-text">
                        В этом разделе вы можете отслеживать свои академические достижения, просматривать оценки по всем дисциплинам и контролировать прогресс в учебе
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('faqs') }}">
            <div class="menu-card" style="background-image: url('storage/faqs.png');">
                <div class="menu-card-content">
                    <div class="menu-card-icon">
                        <i class="fa-solid fa-headset fa-2xl" style="color: #08cc22;"></i>
                    </div>
                    <h2 class="menu-card-title">Часто задаваемые вопросы</h2>
                    <p class="menu-card-text">
                        В этом разделе вы найдете ответы на наиболее распространенные вопросы, связанные с учебным процессом, административными процедурами и другими аспектами обучения
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>