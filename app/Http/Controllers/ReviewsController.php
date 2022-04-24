<?php

namespace App\Http\Controllers;

use App\Models\ChildInvestmentPlan;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Manage Reviews";
        $mode = 'dark';
        $user = Auth::user();
        $reviews = Reviews::all();
        $plans = ChildInvestmentPlan::all();
        if($request->isMethod('post')){
            if(empty($request->id)){
                return $this->save($request);
            } elseif($request->action == 'delete'){
                return $this->delete($request);
            } else {
                return $this->update($request);
            }
        } else {
            return view('admin.reviews', compact('page_title', 'mode', 'user', 'reviews', 'plans'));
        }
    }
    public function save(Request $request){
        if(!isset($request->review)) {
            $request->review = 'An empty review';
        }
        $insert_review = Reviews::insert([
            'user' => $request->user,
            'occupation' => $request->occupation,
            'plan_id' => $request->plan,
            'active' => $request->active,
            'review' => $request->review,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($insert_review) {
            $request->session()->flash('success', 'Your review has been created');
            return back();
        }
        $request->session()->flash('error', 'Error creating review');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $update_review = Reviews::where('id', $request->id)->update([
            'user' => $request->user,
            'occupation' => $request->occupation,
            'plan_id' => $request->plan,
            'active' => $request->active,
            'review' => $request->review,
        ]);
        if($update_review) {
            $request->session()->flash('success', 'review has been updated');
            return back();
        }
        $request->session()->flash('error', 'Error updating your review');
        return back();
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Reviews $reviews) {
        $delete_review = Reviews::where('id', $request->id)->delete();

        if($delete_review) {
            return response()->json(
                [
                    'success' => ['message' => ['Your review has been trashed']]
                ], 201
            );
        }

        return response()->json(
            [
                'errors' => ['message' => ['Error deleting your review']]
            ], 401
        );
    }

    public function delete(Request $request) {
        $review = Reviews::onlyTrashed()->where('id', $request->id)->first();
        if($review) {
            $delete_permanently = Reviews::where('id', $request->id)->forceDelete();
            if($delete_permanently) {
                $request->session()->flash('success', 'Review permanently deleted');
                return back();
            }
            $request->session()->flash('error', 'Error deleting review');
            return back();
        }
        $request->session()->flash('error', 'Unknown review');
        return back();
    }

    public function recover(Request $request) {
        $review = Reviews::onlyTrashed()->where('id', $request->id)->first();

        if($review) {
            $recover_review = Reviews::where('id', $request->id)->restore();

            if($recover_review) {
                return response()->json(
                    [
                        'success' => ['message' => 'Review restored']
                    ], 201
                );
            }

            return response()->json(
                [
                    'success' => ['message' => 'Error restoring review']
                ], 401
            );
        }

        return response()->json(
            [
                'success' => ['message' => 'Unknown review']
            ], 201
        );
    }
}
