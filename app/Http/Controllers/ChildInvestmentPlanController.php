<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildInvestmentPlanRequest;
use App\Models\ChildInvestmentPlan;
use App\Models\ParentInvestmentPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildInvestmentPlanController extends Controller {
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Child Plans";
        $mode = 'dark';
        $user = Auth::user();

        if($request->isMethod('post')){
            if(empty($request->id)){
                return $this->save($request);
            } elseif($request->action == 'delete'){
                return $this->delete($request);
            } else {
                return $this->update($request);
            }
        } else {
            $parent_plans = ParentInvestmentPlan::all();
            $child_plans = ChildInvestmentPlan::all();
            return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
        }
    }
    public function save($request){
        $validated = $request->validate([
            'name' => 'required|unique:child_investment_plans,name,except,id',
            'minimum_amount' => 'required|lt:maximum_amount',
            'maximum_amount' => 'required|gt:minimum_amount',
            'interest_rate' => 'required|numeric',
            'referral_bonus' => 'required|numeric',
            'duration' => 'required|numeric'
        ]);
        $page_title = env('SITE_NAME') . " Investment Website | Child Plans";
        $mode = 'dark';
        $user = Auth::user();
        $plan = new ChildInvestmentPlan();
        $plan->name = $request->name;
        $plan->minimum_amount = $request->minimum_amount;
        $plan->maximum_amount = $request->maximum_amount;
        $plan->interest_rate = $request->interest_rate;
        $plan->duration = $request->duration;
        $plan->referral_bonus = $request->referral_bonus;
        $plan->parent_investment_plan_id = $request->parent_id;
        $store_plan = $plan->save();
        $last_id = ChildInvestmentPlan::latest()->first();
        if($store_plan) {
            $parent_plans = ParentInvestmentPlan::all();
            $child_plans = ChildInvestmentPlan::all();
            $request->session()->flash('success', 'Child investment plan created successfully');
            return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
        }
        $parent_plans = ParentInvestmentPlan::all();
        $child_plans = ChildInvestmentPlan::all();
        $request->session()->flash('error', 'Unable to create Child Investment Plan');
        return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentInvestmentPlan  $parentInvestmentPlan
     * @return \Illuminate\Http\Response
     */
    public function update($request) {
        $validated = $request->validate([
            'name' => 'required|unique:child_investment_plans,name,except,id',
            'minimum_amount' => 'required|lt:maximum_amount',
            'maximum_amount' => 'required|gt:minimum_amount',
            'interest_rate' => 'required|numeric',
            'referral_bonus' => 'required|numeric',
            'duration' => 'required|numeric'
        ]);
        $page_title = env('SITE_NAME') . " Investment Website | Child Plans";
        $mode = 'dark';
        $user = Auth::user();

        $plan = new ChildInvestmentPlan();
        $update = $plan->where('id', $request->id)
        ->update([
            'name' => $request->name,
            'minimum_amount' => $request->minimum_amount,
            'maximum_amount' => $request->maximum_amount,
            'interest_rate' => $request->interest_rate,
            'duration' => $request->duration,
            'referral_bonus' => $request->referral_bonus
        ]);
        if($update){
            $parent_plans = ParentInvestmentPlan::all();
            $child_plans = ChildInvestmentPlan::all();
            $request->session()->flash('success', 'Child investment plan updated successfully');
            return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
        }
        $request->session()->flash('error', 'Unable to update Child investment plan');
        return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
        
    }

    public function getPlans(Request $request, ParentInvestmentPlan $parentPlans, ChildInvestmentPlan $childPlans, $parent = null) {
        $parent = $parentPlans->where('name', $parent)->first();

        if($parent) {
            return $childPlans->where('parent_plan_id', $parent->id)->get();
        }
        return [];
    }

    public function showPlan(ChildInvestmentPlan $childPlans, $id = null) {
        return $childPlans->where('id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentInvestmentPlan  $parentInvestmentPlan
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Child Plans";
        $mode = 'dark';
        $user = Auth::user();

        $childInvestmentPlan = new ChildInvestmentPlan();
        $childInvestmentPlan->where('id', $request->id)->forceDelete();

        $parent_plans = ParentInvestmentPlan::all();
        $child_plans = ChildInvestmentPlan::all();
        $request->session()->flash('error', 'Child investment plan deleted successfully');
        return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
    }
}
