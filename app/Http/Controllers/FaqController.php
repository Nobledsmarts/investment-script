<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Faqs";
        $mode = 'dark';
        $user = Auth::user();
        $faqs = Faq::all();
        if($request->isMethod('post')){
            if(empty($request->id)){
                return $this->save($request);
            } elseif($request->action == 'delete'){
                return $this->delete($request);
            } else {
                return $this->update($request);
            }
        } else {
            return view('admin.faqs', compact('page_title', 'mode', 'user', 'faqs'));
        }
    }
    public function save(Request $request){
        $insert_faqs = Faq::insert([
            'question' => $request->question,
            'answer' => $request->answer,
            'priority' => $request->priority
        ]);
        if($insert_faqs) {
            $request->session()->flash('success', "Frequently asked question created");
            return back();
        }
        $request->session()->flash('error', "error creating requently asked question");
        return back();
    }

    public function update(Request $request) {
        $update_faqs = Faq::where('id', $request->id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'priority' => $request->priority
        ]);

        if($update_faqs) {
            $request->session()->flash('success', "Frequently asked question updated");
            return back();
        }
        $request->session()->flash('error', "error updating requently asked question");
        return back();
    }
    public function delete(Request $request){
        $delete_faqs = Faq::where('id', $request->id)->forceDelete();
        if($delete_faqs){
            $request->session()->flash('success', "Frequently asked question deleted");
            return back();
        }
        $request->session()->flash('error', "Error deleting frequently asked question");
        return back();
    }

}
