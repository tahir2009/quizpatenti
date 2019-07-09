<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Chapter;
use App\Feature;
use App\Language;
use App\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.feature.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('admin.feature.create')->with(['languages' => $languages, 'chapters' => $chapters, 'lessons' => $lessons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'language_id' => 'required|integer',
            'description' => 'required|string|unique:features|max:191',
            'for' => 'required|in:quiz,book,video',
            'start_chapter' => 'nullable',
            'end_chapter' => 'nullable',
            'start_lesson' => 'nullable',
            'end_lesson' => 'nullable'
        ]);

        if ($request->for === 'quiz' or $request->for === 'video') {
            if (!$request->start_chapter) {
                $alert['type'] = 'danger';
                $alert['message'] = 'start limit is required';

                return redirect()->back()->with('alert', $alert)->withInput();
            }
            if (!$request->end_chapter) {
                $alert['type'] = 'danger';
                $alert['message'] = 'end limit is required';

                return redirect()->back()->with('alert', $alert)->withInput();
            }
            if ($request->start_chapter > $request->end_chapter) {
                $alert['type'] = 'danger';
                $alert['message'] = 'end limit must be greater than start limit';

                return redirect()->back()->with('alert', $alert)->withInput();
            }

            $chapter_ids = [];
            for ($i = $request->start_chapter; $i <= $request->end_chapter; $i++) {
                $chapter = Chapter::find($i);
                if ($chapter) {
                    array_push($chapter_ids, $chapter->id);
                }
            }

            foreach ($chapter_ids as $chapter_id) {
                $request['chapter_id'] = $chapter_id;
                Feature::create($request->all());
            }
        }
        if ($request->for === 'book') {
            if (!$request->start_lesson) {
                $alert['type'] = 'danger';
                $alert['message'] = 'start limit is required';

                return redirect()->back()->with('alert', $alert)->withInput();
            }
            if (!$request->end_lesson) {
                $alert['type'] = 'danger';
                $alert['message'] = 'end limit is required';

                return redirect()->back()->with('alert', $alert)->withInput();
            }
            if ($request->start_lesson > $request->end_lesson) {
                $alert['type'] = 'danger';
                $alert['message'] = 'end limit must be greater than start limit';

                return redirect()->back()->with('alert', $alert)->withInput();
            }
            $lesson_ids = [];
            for ($i = $request->start_lesson; $i <= $request->end_lesson; $i++) {
                $lesson = Lesson::find($i);
                if ($lesson) {
                    array_push($lesson_ids, $lesson->id);
                }
            }

            foreach ($lesson_ids as $lesson_id) {
                $request['lesson_id'] = $lesson_id;
                Feature::create($request->all());
            }
        }

        $alert['type'] = 'success';
        $alert['message'] = 'feature created';

        return redirect()->route('feature.index')->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {

        $languages = Language::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('admin.feature.edit')->with(['feature' => $feature, 'languages' => $languages, 'chapters' => $chapters, 'lessons' => $lessons]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'language_id' => 'required|integer',
            'description' => 'required|string|max:191',
            'for' => 'required|in:quiz,book,video',
            'chapter_id' => 'required|integer',
            'lesson_id' => 'required|integer'
        ]);

        $feature->update($request->all());

        $alert['type'] = 'success';
        $alert['message'] = 'feature  updated';
        return redirect()->route('feature.index')->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        Feature::where('description', $feature->description)->delete();

        $alert['type'] = 'success';
        $alert['message'] = 'feature Deleted';
        return redirect()->route('feature.index')->with('alert', $alert);
    }
}
