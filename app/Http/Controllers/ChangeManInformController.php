<?php


namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Manager;

class ChangeManInformController extends BaseController
{
    public function store(Request $request)
    {
        $input=$request;
        $id=$input['id'];
        $name=$input['name'];
        $sex=$input['sex'];
        $idcardnum=$input['idcardnum'];
        $commu=$input['commu'];
        Manager::where('id', '=', $id)->update(['name' => $name]);
        Manager::where('id', '=', $id)->update(['sex' => $sex]);
        Manager::where('id', '=', $id)->update(['idcardnum' => $idcardnum]);
        Manager::where('id', '=', $id)->update(['commu' => $commu]);
        return $this->create([$id],'hfhg',200);

    }
}

