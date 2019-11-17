<?php

include 'dbcont.php';

// SELECT Functions ---->

// Select Count of one .
function selectCountID($table_name ,$condition , $condition_value){
    global $cont;
    $select_count = $cont->prepare("SELECT COUNT(id) FROM $table_name WHERE $condition=? LIMIT 1");
    $select_count->execute(array($condition_value));
    $count = $select_count->fetchColumn();
    return $count;
}

// Select element .
function selectItems($item , $table_name , $condition , $condition_value){
    global $cont;
    $select_item = $cont->prepare("SELECT $item FROM $table_name WHERE $condition=?");
    $select_item->execute(array($condition_value));
    return $select_item;
}


// INSERT Functions ---->

// Insert elements Withtout Condition.

function Isertdata($data , $table_name , $data_val){
    global $cont;
    $assign_values = "";
    $data_string = "";
    $status = 0;

    for($i=1 ; $i<= count($data) ; $i++){
        if($assign_values == ""){
        $assign_values = "?";
        $data_string = $data[$i-1];
        }else{
        $assign_values .= ",?";
        $data_string .= ",".$data[$i-1];
        }
    } // End For Loop

    $insert = $cont->prepare("INSERT INTO $table_name($data_string) VALUES($assign_values)");
    if($insert->execute($data_val)){
        $status = 1;
        return $status;
    }else{
        return $status . " " . $data_string;
    }

} // End Insert Function


// UPDATE Functions ---->

function updateOne($table_name , $column , $data , $condition , $condition_value){
    global $cont;
    $update = $cont->prepare("UPDATE $table_name SET $column=? WHERE $condition=?");
    $update->execute(array($data , $condition_value));
}



?>