<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ComReviewers;
use App\Http\Requests;

class CrudComReviewersController extends Controller
{
    private $reviewer;
    
    public function __construct() {
        $this->reviewer = new ComReviewers();
    }

    public function reada() {
        $reviewers = $this->reviewer->read();
        return view('com-reviewers', ['reviewers' => $reviewers]);
    }

    public function deleteData($id) {
        $this->reviewer->deleteData($id);
        return redirect('com-reviewers');
    }

    public function getEdit($id) {
        $reviewer = $this->reviewer->getDataById($id);
        return view('com-reviewers-edit', ['reviewer' => $reviewer]);
    }

    public function postEdit(Request $request, $reviewer_id) {
        $this->reviewer->user_id = $request->user_id;
        $this->reviewer->name = $request->name;
        $this->reviewer->status = $request->status;
        $this->reviewer->action = $request->action;
        $this->reviewer->editData($request->user_id, $request->name, $request->status, $request->action, $reviewer_id);
        return redirect('com-reviewers');
    }
}
