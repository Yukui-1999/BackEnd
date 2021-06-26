<?php


namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Teacher;

class ChangerTeaInformController extends BaseController
{
    public function store(Request $request)
    {
        $input=$request;
        $ID=$input['id'];
        $commu=$input['commu'];
        Teacher::where('id', '=', $ID)->update(['commu' => $commu]);
        return $this->create([$input['id']],'hfhg',200);
    }
}
