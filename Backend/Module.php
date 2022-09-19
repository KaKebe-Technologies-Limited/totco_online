<?php

include_once "./db.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req']=="subscribe")
subscribe($conn);

if($_SERVER['REQUEST_METHOD'] == "GET")
logout($conn);

if($_SERVER['REQUEST_METHOD'] == "PATCH")
update($conn);

if($_SERVER['REQUEST_METHOD'] == "DELETE")
unSubsribe($conn);

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req']=="login")
login($conn);


function subscribe($conn){}
function login($conn){}
function update($conn){}
function unSubsribe($conn){}