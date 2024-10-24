<div class="h-full w-full flex flex-col space-y-4">
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

	<div class="pt-8">
		<x-alert type="info" title="Информация" message="Пожалуйста, выберите вашу роль: обучающийся или преподаватель, чтобы отобразить соответствующую информацию." />
	</div>

	<div class="grow flex flex-row space-x-10 items-center justify-center">
		<div class="flex items-center space-x-10 justify-center">
			<button class="w-[40rem] h-72 flex items-center justify-center text-white text-4xl bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded-md shadow-md shadow-emerald-400 p-6"
				wire:click="student()">Студент</button>
		</div>
		<div class="flex items-center space-x-10 justify-center">
			<button class="w-[40rem] h-72 flex items-center justify-center text-white text-4xl bg-gradient-to-br from-blue-800 from-60% to-blue-700 rounded-md shadow-md shadow-emerald-400 p-6"
				wire:click="teacher()">Преподаватель</button>
		</div>
	</div>
</div>