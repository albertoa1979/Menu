<div class="container">
    <?php
    if(session()->user === $post['id_user']){
        ?>
        <h2>Actualizar publicacion</h2>
        <form action="Post/edit" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$post['id']?>">
                <textarea class="form-control" name="content" rows="3" placeholder="Escribe algo"><?=$post['content']?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
         </form>
         <br>
    <?php
    } else {

        ?>
        <div class="alert alert-danger" role="alert">
            No tienes permiso.
    </div>
    <?php
    }     
    ?>
    </div>

    
    