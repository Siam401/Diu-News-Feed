<?php


function getCommentStatusList(){
    $list=[
        'Approved'=> 'Approved',
        'Unapproved'=>'Unapproved',
        'Moderate'=>'Moderator'
    ];
    return $list;
}

function getCommentRoleList(){
    $list=[
        'Reporter'=> 'Reporter',
        'Editor'=>'Editor',
        'Viewer'=>'Viewer'
    ];
    return $list;
}


function isAdmin(){
    if(\Illuminate\Support\Facades\Auth::check()){
        $user=\Illuminate\Support\Facades\Auth::user();
        if($user->role=='admin'){
            return true;
        }else{
            return false;
        }
    }
    return false;

}

function isReporter(){
    $user=Auth::user();
    if($user->role=='reporter'){
        return true;
    }else{
        return false;
    }

}
?>