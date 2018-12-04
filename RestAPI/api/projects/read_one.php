<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/projects.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$project = new Project($db);

// set ID property of record to read
$project->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of product to be edited
$project->readOne();

if($project->name!=null){
    // create array
    $projects_arr = array(
        "id" =>  $project->id,
        "name" => $project->name,
        "description" => $project->description,
        "file" => $project->file,
        "category_id" => $project->category_id,
        "category_name" => $project->category_name

    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($projects_arr);
}

else{
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user product does not exist
    echo json_encode(array("message" => "Product does not exist."));
}
?>
