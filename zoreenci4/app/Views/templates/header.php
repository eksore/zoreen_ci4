<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title><?= (isset($meta_title)? $meta_title : 'CodeIgniter Blog' ) ?></title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class = "container"> 
  <a class="navbar-brand" href="/">Ci4 tut</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog/post">Post</a>
      </li>
</ul>
</div>
  </div>
</nav>
<div class="container">