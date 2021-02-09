<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hsp_tbl_cms;
use App\Models\hsp_tbl_cmslog;

class hspCmsController extends Controller
{   
    
    
    function cmsAdd(Request $req){
$call= new hsp_tbl_cms;
$call->ORG_ID=$req->orgId;
$call->BRANCH_ID=$req->branchId;
$call->RAISED_BY=$req->raisedBy;
$call->DEVICE_ID=$req->deviceId;
$call->CALL_TYPE=$req->callType;
$call->STATUS=$req->status;
$call->CREATED_DATE=$req->createdDate;
$result=$call->save();
$cms_id=$call->id;

$log= new hsp_tbl_cmslog;
$log->TO_ADVERSE=$req->advrs;
$log->CALLER_DEPT=$req->callerDept;
$log->CALLER_NAME=$req->callerName;
$log->CALLER_MOBILE=$req->mobNo;
$log->CEMP_ID=$req->companyId;
$log->NATURE_OF_COMP=$req->noc;
$log->EID=$req->eid;
$log->RESPONDED_BY=$req->respondBy;
$log->RESPONDED_DATE=$req->respondedDate;
$log->ATTENDED_BY=$req->attendedBy;
$log->ATTENDED_DATE=$req->attendedDate;
$log->ATTENDED_TIME=$req->attendedTime;
$log->REASON=$req->reason;
$log->PO_NUMBER=$req->poNumber;

$log->PO_DATE=$req->poDate;

$log->COST=$req->cost;
$log->CMS_ID=$cms_id;
$result=$log->save();



if($result){
   return ["Results"=>"data have been saved successfully"];
}else{
return ["Results"=>"failed"];
}
}
}

