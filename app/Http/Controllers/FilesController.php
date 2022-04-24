<?php

namespace App\Http\Controllers;
use App\Models\Files;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $files = Files::all();

        return view('admin.files', compact('user', 'files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user_id = Auth::id();
        $user = User::find($user_id);

        if(!empty($request->file)) {

            $file = $request->file;
            // Get file name with extension

            $fileNameWithExt = $file->getClientOriginalName();

            // Get just file name

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just file extension
            $fileExt = $file->getClientOriginalExtension();

            // Get just file name to store
            $fileNameToStore = $fileName . '_' . time() . '_' . '.' . $fileExt;

            $files = new Files();
            $files->name = $request->name;
            $files->file_path = $fileNameToStore;
            $save = $files->save();

            $files = Files::all();

            if($save) {
                $file->move(public_path('galleries'), $fileNameToStore);

                return back()
                    ->with('message', 'Image uploaded successfully')
                    ->with('user', $user)
                    ->with('flies', $files);
            } else {
                $request->session()->flash('error', 'Image not uploaded');

                return back()
                    ->with('error', 'Image not uploaded')
                    ->with('user', $user)
                    ->with('flies', $files);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $file = Files::where('id', $request->id)->first();
        // delete image file
        Storage::delete('public/galleries/' . $file->file_path);

        // Delete data from database
        Files::where('id', $request->id)->delete();

        $files = Files::all();

        return response()->json(
            [
            'success' => ['message' => ['Image Deleted']]
            ], 201
        );
    }
}
