<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ComReviewers extends Model
{
    protected $table = 'com_reviewers';
    protected $primaryKey = 'reviewer_id';
    
    public function __construct() {
        DB::Connection();
    }

    public function read() {
        $com_reviewers = DB::table('com_reviewers')->paginate(10);
        return $com_reviewers;
    }

    public function deleteData($id) {
        $com_reviewer = ComReviewers::find($id);
        // $com_reviewer = DB::table('com_reviewers')->where($id);
        $com_reviewer -> delete();
    }

    public function getDataById($id) { 
        $com_reviewer = ComReviewers::find($id);
        return $com_reviewer;
    }
    public function editData($user_id, $name, $status, $action, $reviewer_id) {
        DB::table('com_reviewers') -> where('reviewer_id', $reviewer_id) -> update(['user_id'=>$this->user_id, 'name'=> $this->name, 'status' => $this->status, 'action' => $this->action]);
    }
}
