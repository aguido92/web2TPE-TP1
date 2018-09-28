{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <div class="container">
      <ul class="list-group">
            {foreach from=$Catedras item=catedra}

                <li class="list-group-item">{$catedra['nombre']} ----- {$catedra['link']} ----- {$catedra['id_carrera']}<a href="eliminarCatedra/{$catedra['id']}">BORRAR</a> | <a href="editarCatedra/{$catedra['id']}">EDITAR</a></li>

            {/foreach}
      </ul>
    </div>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregarCatedra">
        <div class="form-group">
          <label for="nombreForm">nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" >
        </div>
        <div class="form-group">
          <label for="linkForm">link</label>
          <input type="text" class="form-control" id="linkForm" name="linkForm" >
        </div>

        <div class="form-group">
          <label for="idCarreraForm">idCarrera</label>
          <input type="text" class="form-control" id="idCarreraForm" name="idCarreraForm" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Catedra</button>
      </form>
    </div> 

    <div>
      <h2>Formulario</h2>
        <form method="post" action="">
          <button class="btn btn-primary">home</button>
        </form>
    </div>

{include file="footer.tpl"}
