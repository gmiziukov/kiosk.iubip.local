<div class="grid grid-cols-3 gap-4 mt-20">
    <a href="{{ route('about.university') }}">
        <div class="h-72 flex flex-col space-y-4  absolute shadow-md rounded-xl shadow-emerald-400 p-6 relative"
            style="background-image: url('storage/ibib.jpeg'); background-size: 100% 100%; background-position: center;">
            <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85 "></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-book-open fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">Университет сегодня</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе представлена актуальная информация о текущей деятельности университета, его достижениях, новостях и мероприятиях
            </p>
        </div>
    </a>
    <a href="{{ route('SelectStudentOrTeacher') }}">
        <div class="h-72 flex flex-col space-y-4  absolute shadow-md rounded-xl shadow-emerald-400 p-6 relative"
            style="background-image: url('storage/20.png'); background-size: 100% 100%; background-position: center;">
            <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85"></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-book-open fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">Расписание занятий</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе представлено актуальное расписание занятий для обучающихся и преподавателей. Здесь вы найдете информацию о времени и месте проведения лекций, лабораторных работ и практических занятий
            </p>
        </div>
    </a>

    <a href="{{ route('student.document.order.requests') }}">
        <div class="h-72 flex flex-col space-y-4 bg-no-repeat absolute shadow-md rounded-xl shadow-emerald-400 p-6 relative"
            style="background-image: url('storage/15.png'); background-size: 100% 100%; background-position: center;">
            <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85"></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-file-circle-plus fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">Заказ документов</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе обучающиеся могут заказать необходимые справки об обучении, а также отслеживать их статус и проверять готовность документов
            </p>
        </div>
    </a>
    <a href="{{ route('retake.schedule') }}">
        <div class="h-72 flex flex-col space-y-4  absolute shadow-md rounded-xl shadow-emerald-400 p-6 relative"
            style="background-image: url('storage/9.png'); background-size: 100% 100%; background-position: bottom;">
            <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85"></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-rectangle-list fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">График пересдач</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе вы найдете информацию о графике пересдач, включая ФИО преподавателя, дату, время и аудиторию, в которой будет проходить прием академических задолженностей
            </p>
        </div>
    </a>
    <a href="{{ route('student.grades') }}">
        <div class="h-72 flex flex-col space-y-4 rounded-xl absolute shadow-md relative shadow-emerald-400 p-6 relative"
            style="background-image: url('storage/18.png'); background-size: 120% 125%; background-position: center;">
            <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85"></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-star fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">Успеваемость</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе вы можете отслеживать свои академические достижения, просматривать оценки по всем дисциплинам и контролировать прогресс в учебе. Обучающиеся могут формировать индивидуальные сводки, а руководители академий - групповые
            </p>
        </div>
    </a>
    <a href="{{ route('faq') }}">
        <div class="h-72 flex flex-col space-y-4 absolute rounded-xl shadow-md shadow-emerald-400 p-6 relative"
        style="background-image: url('storage/16.png'); background-size: 100% 100%; background-position: center;">
        <div class="absolute inset-0 z-0 rounded-xl bg-blue-950 opacity-85"></div>
            <div class="h-16 w-16 bg-blue-600 flex items-center justify-center rounded-full">
                <i class="fa-solid fa-headset fa-2xl z-10" style="color: #08cc22;"></i>
            </div>
            <h4 class="text-white text-2xl z-10">Часто задаваемые вопросы</h4>
            <p class="text-white text-base text-justify z-10">
                В этом разделе вы найдете ответы на наиболее распространенные вопросы, связанные с учебным процессом, административными процедурами и другими аспектами обучения
            </p>
        </div>
    </a>



{{-- ####################################################################################################################### --}}
{{-- https://www.meteonova.ru/informer/html.php?type=88_31_2 --}}
    <a style="display: block; position: relative; border: 0; padding: 0; margin: 0; text-decoration: none;" id="meteonova_inf_88_31_2_34731" href="//www.meteonova.ru/weather/34731-Rostov-Na-Donu.htm" alt="Погода в Ростове-на-Дону" title="Погода в Ростове-на-Дону"></a>
<script type="text/javascript">
(function() {
	var script = document.createElement("script");
	script.src = "//www.meteonova.ru/informer/html/js/install.min.js";
	script.charset = "UTF-8";
	script.defer = true;
	script.onload = function() {
		new MeteonovaInf({
			type: "88_31_2",
			cities: ["34731"],
			scheme: {"border_radius":"0","box_shadow":"none","border_color":"#e9ecef","background_color":"transparent","city_color":"#343a40","main_color":"#495057","params_color":"#868e96"}
		});
	};
	document.getElementsByTagName("head")[0].appendChild(script);
})();
</script>
{{-- ####################################################################################################################### --}}
</div>