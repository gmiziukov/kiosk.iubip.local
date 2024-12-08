<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function getQuestions($search)
    {
        return Faq::join('faq_categories', 'faqs.faq_category_id', '=', 'faq_categories.id')
            ->where('faqs.question', 'like', '%' . $search . '%')
            ->select('faqs.id', 'faqs.question', 'faq_categories.name as category_name')
            ->get();
    }

    public function getQuestionsFromCategory($categoryId)
    {
        return Faq::join('faq_categories', 'faqs.faq_category_id', '=', 'faq_categories.id')
            ->where('faqs.faq_category_id', '=', $categoryId)
            ->select('faqs.id', 'faqs.question', 'faq_categories.name as category_name')
            ->get();
    }

    public function getAnswerOnQuestion($id)
    {
        $faq = Faq::where('id', '=', $id)->select('answer')->first();

        return $faq->answer;
    }
}
