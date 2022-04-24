<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteSettingsController extends Controller {
    public function storeSocialHandles(Request $request) {
        $settings = SiteSettings::first();

        if(!$settings) {
            SiteSettings::insert([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
                'telegram' => $request->telegram,
                'medium' => $request->medium
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Social handles inserted']]
                ], 201
            );
        } else {
            SiteSettings::where('id', 1)->update([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
                'telegram' => $request->telegram,
                'medium' => $request->medium
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Social handles updated']]
                ], 201
            );
        }
    }

    public function aboutUs(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | About";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('site_about_us');
        $site_about_us = $settings->count() ? $settings[0] : '';

        if($request->isMethod('post')){
            $settings = SiteSettings::first();
            if(!$settings) {
                SiteSettings::insert([
                    'site_about_us' => $request->about_us,
                ]);

                $request->session()->flash('success', "About us inserted");
                return back();
            } else {
                SiteSettings::where('id', 1)->update([
                    'site_about_us' => $request->about_us,
                ]);
                $request->session()->flash('success', "About us updated");
                return back();
            }
        } else {
            return view('admin.about', compact('page_title', 'mode', 'user', 'site_about_us'));
        }
    }

    public function termsAndConditions(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Terms";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('terms_and_conditions');
        $terms_and_conditions = $settings->count() ? $settings[0] : '';
        $settings = SiteSettings::first();
        if($request->isMethod('post')){
            if(!$settings) {
                SiteSettings::insert([
                    'terms_and_conditions' => $request->terms_and_conditions,
                ]);
                $request->session()->flash('success', "Terms and conditions inserted");
                return back();
            } else {
                SiteSettings::where('id', 1)->update([
                    'terms_and_conditions' => $request->terms_and_conditions,
                ]);
                $request->session()->flash('success', "Terms and conditions updated");
                return back();
            }
        } else {
            return view('admin.terms', compact('page_title', 'mode', 'user', 'terms_and_conditions'));
        }
    }

    public function privacyAndPolicy(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('privacy_and_policy');
        $privacy_and_policy = $settings->count() ? $settings[0] : '';
        if($request->isMethod('post')){
            $settings = SiteSettings::first();

            if(!$settings) {
                SiteSettings::insert([
                    'privacy_and_policy' => $request->privacy_and_policy,
                ]);
                $request->session()->flash('success', "Privacy and policy inserted");
                return back();
            } else {
                SiteSettings::where('id', 1)->update([
                    'privacy_and_policy' => $request->privacy_and_policy,
                ]);
                $request->session()->flash('success', "Privacy and policy updated");
                return back();
            }
        } else {
            return view('admin.privacy-policy', compact('page_title', 'mode', 'user', 'privacy_and_policy'));
        }
    }

    public function HowItWorks(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('how_it_works');
        $how_it_works = $settings->count() ? $settings[0] : '';
        if($request->isMethod('post')){
            $settings = SiteSettings::first();

            if(!$settings) {
                SiteSettings::insert([
                    'how_it_works' => $request->how_it_works,
                ]);
                $request->session()->flash('success', "How it works inserted");
                return back();
            } else {
                SiteSettings::where('id', 1)->update([
                    'how_it_works' => $request->how_it_works,
                ]);
                $request->session()->flash('success', "How it works updated");
                return back();
            }
        } else {
            return view('admin.how-it-works', compact('page_title', 'mode', 'user', 'how_it_works'));
        }
    }

    public function meetOurTraders(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('meet_our_traders');
        $meet_our_traders = $settings->count() ? $settings[0] : '';

        if($request->isMethod('post')){

            $settings = SiteSettings::first();

            if(!$settings) {
                SiteSettings::insert([
                    'meet_our_traders' => $request->meet_our_traders,
                ]);
                $request->session()->flash('success', "Meet our traders inserted");
                return back();
            } else {
                SiteSettings::where('id', 1)->update([
                    'meet_our_traders' => $request->meet_our_traders,
                ]);
                $request->session()->flash('success', "Meet our traders updated");
                return back();
            }
        } else {
            return view('admin.meet-our-traders', compact('page_title', 'mode', 'user', 'meet_our_traders'));
        }
    }

    public function storeDetails(Request $request) {
        $settings = SiteSettings::first();

        if(!$settings) {
            SiteSettings::insert([
                'whatsapp_number' => $request->whatsapp_number,
                'site_address' => $request->site_address,
                'site_name' => $request->site_name,
                'site_logo_url' => $request->site_logo_url,
                'site_email' => $request->site_email,
                // 'site_logo_url' => $request->site_logo_url,
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Site details inserted']]
                ], 201
            );
        } else {
            SiteSettings::where('id', 1)->update([
                'whatsapp_number' => $request->whatsapp_number,
                'site_address' => $request->site_address,
                'site_name' => $request->site_name,
                'site_logo_url' => $request->site_logo_url,
                'site_email' => $request->site_email,
                // 'site_logo_url' => $request->site_logo_url,
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Site details updated']]
                ], 201
            );
        }
    }

    public function enableSocialHandles(Request $request) {
        $settings = SiteSettings::first();

        if(!$settings) {
            SiteSettings::insert([
                'social_handles_active' => $request->social_handles_active,
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Social handle status updated']]
                ], 201
            );
        } else {
            SiteSettings::where('id', 1)->update([
                'social_handles_active' => $request->social_handles_active,
            ]);

            return response()->json(
                [
                    'success' => ['message' => ['Social handle status updated']]
                ], 201
            );
        }
    }
}
