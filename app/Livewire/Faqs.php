<?php

namespace App\Livewire;

use App\Http\Controllers\FaqController;
use App\Models\Faq;
use App\Models\FaqCategory;
use Livewire\Component;

class Faqs extends Component
{
    public bool $isAnswerModalVisible = false;
    public string $search = '';
    public string $answer = '';
    public $data = [];

    protected bool $isCategory = false;

    public function render()
    {
        $listOfCategories = FaqCategory::get();

        if ($this->search == '' && !$this->isCategory) {
            $this->data = Faq::join('faq_categories', 'faqs.faq_category_id', '=', 'faq_categories.id')
                ->select('faqs.id', 'faqs.question', 'faq_categories.name as category_name')
                ->get();
        }

        return view('livewire.faqs', [
            'listOfCategories' => $listOfCategories
        ]);
    }

    public function redirectBack()
    {
        redirect()->route('index');
    }

    public function redirectToHome()
    {
        redirect()->route('index');
    }

    public function showAnswer($id)
    {
        $faqController = new FaqController();
        $this->answer = $faqController->getAnswerOnQuestion($id);

        $this->isAnswerModalVisible = !$this->isAnswerModalVisible;
    }

    public function getQuestions()
    {
        if (!empty($this->search)) {
            $faqController = new FaqController();
            $this->data = $faqController->getQuestions($this->search);

            if (is_null($this->data) || count($this->data) == 0) {
                session()->flash('info', 'Для введенного вами вопроса результаты отсутствует.');
            }
        } else {
            session()->flash('error', 'Поле для поиска должно быть заполнено!');
        }
    }

    public function getQuestionsFromCategory($categoryId = 0)
    {
        if ($categoryId == 0) {
            $this->search = '';
            $this->isCategory = false;
        } else {
            $this->isCategory = !$this->isCategory;

            $faqController = new FaqController();
            $this->data = $faqController->getQuestionsFromCategory($categoryId);

            if (is_null($this->data) || count($this->data) == 0) {
                session()->flash('info', 'Для выбранной вами категории результаты отсутствует.');
            }
        }
    }
}
