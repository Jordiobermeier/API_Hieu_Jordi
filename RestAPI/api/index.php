<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style>
    body{
      border: 0, 10px, 0, 10px solid black;
    }
    </style>
</head>
<body>
<div class="container">


  <h1>API Documentation</h1>
<hr />

<h1>Inleiding</h1>

  <p>Dit is de documentatie voor de API die wij gemaakt hebben tijdens de webdevelopment/java lessen. Hiermee is de bedoeling dat de gebruiker <br />
  de documentatie leest en de API in gebruik kan nemen.</p>

<hr />

<div id="accordion">

  <!-- Sectie een -->
  <div class="card">
    <div class="card-header">
    <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">
      <h1>Get project</h1>
    </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        <a id="headingA"><h2 id="heading"></h2></a>
        <b>Optional parameters : </b>
        <p>
          <b>id</b> - Searches based on project id <br /><hr />
          <b>name</b> - Searches based on project name <br /><hr />
          <b>description</b> - Searches based on project description <br /><hr />
          <b>file</b> - Searches based on project file url <br /><hr />
          <b>category_id</b> - Searches based on category id, name and description <br /><hr />
          <b>created</b> - Searches based on project creation <br /><hr />
          <b>modified</b> - Searches based on project modification <br /><hr />
        </p>
      </div>
    </div>
  </div>

  <!-- Sectie twee -->
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
      <h1>Create project</h1>
    </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <p>For creating a project <br />
        <b>/projects/create.php/project_id/{id}/project_title/{name}/project_description/{description}/project_file/{file}/category_id/{category_id}</b></p>
      </div>
    </div>
  </div>

  <!-- Sectie drie -->
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
      <h1>Search project</h1>
    </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <p>The same counts for the update method but this just adds a id in the front for it to know what project to update<br />
        <b>/projects/search.php/{?s=result}</b></p>
      </div>
    </div>
  </div>

  <!-- Sectie vier -->
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
      <h1>Update project</h1>
    </a>
    </div>
    <div id="collapseFour" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <p>The same counts for the update method but this just adds a id in the front for it to know what project to update<br />
        <b>/projects/update.php/project_id/{id}/project_title/{name}/project_description/{description}/project_file/{file}/category_id/{category_id}</b></p>
      </div>
    </div>
  </div>

  <!-- Sectie vijf -->
  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
      <h1>Destroy project</h1>
    </a>
    </div>
    <div id="collapseFive" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <p>When deleting a project, just go to <b>/projects/delete.php/{id}</b></p>
      </div>
    </div>
  </div>

</div>

<!-- Footer -->
<footer>
  <div class="container">
    <!-- Copyright -->
    <div class="footer-copyright py-3">
      <b>© 2018 Copyright: <a href="https://google.com"> Rambutan | Jordi & Hieu</b></a>
    </div>
  </div>
</footer>

</div>
</body>
</html>
