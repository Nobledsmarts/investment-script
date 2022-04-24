<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParentInvestmentPlan;
use App\Models\ChildInvestmentPlan;
use App\Models\ParentInvestmentPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ParentInvestmentPlanController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ParentInvestmentPlan $plan) {
        $page_title = env('SITE_NAME') . " Investment Website | Parent Plans";
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
            $plans = ParentInvestmentPlan::all();
            return view('admin.parent-plan', compact('page_title', 'mode', 'user', 'plans'));
        }
        
    }
    public function save($request){
        $request->validate([
            'name' => 'required|alpha|unique:parent_investment_plans,name,except,id'
        ]);
        $plan = new ParentInvestmentPlan();
        $plan->name = $request->name;
        $store_plan = $plan->save();
        if($store_plan) {
            $request->session()->flash('success', "Parent investment plan created successfully");
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentInvestmentPlan  $parentInvestmentPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $plan = new ParentInvestmentPlan();
        $plan->where('id', $request->id)->update(['name' => $request->name]);
        $request->session()->flash('success', "Parent investment plan updated successfully");
        return back();
    }

    public function getPlans(Request $request, ParentInvestmentPlan $parentPlans) {
        return $parentPlans->get();
    }

    public function showPlan(ParentInvestmentPlan $parentPlans, $id = null) {
        return $parentPlans->where('id', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentInvestmentPlan  $parentInvestmentPlan
     * @return \Illuminate\Http\Response
     */
    //  , ParentInvestmentPlan $parentInvestmentPlan
    public function delete(Request $request) {
        $plan = new ParentInvestmentPlan();
        $plan::where('id', $request->id)->forceDelete();
        $request->session()->flash('success', "Parent investment plan deleted successfully");
        return back();
    }
}
