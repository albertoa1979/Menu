<?php setlocale(LC_TIME, "esp");  ?>
<div class="container">
<?php if(isset(session()->user)) { ?>
    <form action="Post/add" method="post">
<div class= "form-group"> 
    
    <textarea class="form-control" name="content" rows="3" placeholder="Escribe algo"></textarea>
  </div>
<button type="submit" class="btn btn-primary">Publicar</button>
</form>

<br>

<?php } ?>






