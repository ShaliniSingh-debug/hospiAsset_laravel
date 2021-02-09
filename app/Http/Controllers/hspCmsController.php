<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hsp_tbl_cms;

class hspCmsController extends Controller
{
    //
  public function cmsAdd(Request $req){

        $validated = $request->validate([
            'ORG_ID' => 'required|unique:posts|max:255',
            'RAISED_BY' => 'required|max:255',
            'DEVICE_ID' => 'required|max:255',
            'CALL_TYPE' => 'required|max:255',
            'BRANCH_ID' => 'required|max:255',
            'STATUS' => 'required|max:255',
            'CREATED_DATE'=>'required|max:255',
         
        ]);
        if ($validated->fails()) {
            return ["results"=>"failed"];
        }else{
        $call= new hsp_tbl_cms;
        $call->ORG_ID=$req->orgId;
        $call->BRANCH_ID=$req->branchId;
        $call->RAISED_BY=$req->raisedBy;
        $call->DEVICE_ID=$req->deviceId;
        $call->CALL_TYPE=$req->callType;
        $call->STATUS=$req->status;
        $call->CREATED_DATE=$req->createdDate;
        
       $result=$call->save();
       if($result){
           return ["Results"=>"data have been saved successfully"];
       }else{
        return ["Results"=>"failed"];
       }
    }
}
}
