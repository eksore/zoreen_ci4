<?= $this->extend('layouts/main') ?>
<?= $this->section ('content') ?>

    <h1><?= $title ?> </h1>

<div class ="row">
<div class = "col-12 col-md-8 offset-md-2"> 
    <form method = "post" action ="/blog/new">
        <div class = "form-group">
        <label for ="">Title</label>
        <input id = "" class = "form-control" type = "text" name = "post_title"> </input>
    </div>
    <div class = "form-group">

    <label for ="">Text</label>
    <textarea id = "" class = "form-control" type = "text" name = "post_content" rows ="3"> </textarea>
    </div>
</br>

<div class = "form-group">
<button clas ="btn btn-success btn-sm">Create</button>

</diV>

    </form>
    </div>
    </div>
    <?= $this->endSection() ?>