 <?php if (isset($libro->id_libro)): ?>
    <input type="hidden" name="idLibro" value="<?php echo $libro->id_libro; ?>">
<?php endif;?>
<div class="col-md-6">
    <div class="form-group <?php echo form_error('codigo') == true ? 'has-error' : '' ?>">
        <label for="codigo">Numeración</label>
        <?php if (isset($libro->codigo_libro)): ?>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" value="<?php echo $libro->codigo_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" value="<?php echo set_value('codigo'); ?>">
        <?php endif;?>
        <?php echo form_error('codigo'); ?>
    </div>
    <div class="form-group">
        <label for="isbn">Número de Serie</label>
        <?php if (isset($libro->isbn_libro)): ?>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="<?php echo $libro->isbn_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder=N°Serie >
        <?php endif;?>

    </div>
    <div class="form-group <?php echo form_error('titulo') == true ? 'has-error' : '' ?>">
        <label for="titulo">Marca</label>
        <?php if (isset($libro->titulo_libro)): ?>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Marca" value="<?php echo $libro->titulo_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Marca" value="<?php echo set_value('titulo'); ?>">
        <?php endif;?>
        <?php echo form_error('titulo'); ?>
    </div>
    <div class="form-group">
        <label for="subtitulo">Disco Duro</label>
        <?php if (isset($libro->subtitulo_libro)): ?>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo" value="<?php echo $libro->subtitulo_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Disco Duro">
        <?php endif;?>
    </div>
    <div class="form-group <?php echo form_error('autor') == true ? 'has-error' : '' ?>">
        <label for="autor">Modelo</label>
        <?php if (isset($libro->autor_libro)): ?>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="<?php echo $libro->autor_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Modelo" value="<?php echo set_value('autor'); ?>">
        <?php endif;?>
        <?php echo form_error('autor'); ?>
    </div>
    <div class="form-group">
        <label for="publicacion">Año de Fabricación</label>
        <?php if (isset($libro->publicacion_libro)): ?>
            <input type="text" id="datepicker" class="form-control" id="publicacion" name="publicacion" placeholder="Año de Publicacion" value="<?php echo $libro->publicacion_libro; ?>">
        <?php else: ?>
            <input type="text" id="datepicker"class="form-control" id="publicacion" name="publicacion" placeholder="Año de Fabricación">
        <?php endif;?>
    </div>

</div>
<div class="col-md-6">

    <div class="form-group">
        <label for="editorial">Ram</label>
        <?php if (isset($libro->editorial_libro)): ?>
            <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ram" value="<?php echo $libro->editorial_libro; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ram">
        <?php endif;?>
    </div>


    
    <div class="form-group <?php echo form_error('ejemplares') == true ? 'has-error' : '' ?>">
        <label for="ejemplares" class="control-label">¿Disponible?</label>
        <select name="ejemplares" id="ejemplares" class="form-control">
            <option value="">Seleccione...</option>
         
            <option value="1" selected='1'>DISPONIBLE </option>
            <option value="0">NO DISPONIBLE</option>
          
        </select>
        <?php echo form_error('ejemplares'); ?>
    </div>
    
    <div class="form-group <?php echo form_error('idfacultad') == true ? 'has-error' : '' ?>">
        <label for="idfacultad" class="control-label">Descripción Estado</label>
        <select name="idfacultad" id="idfacultad" class="form-control">
            <option value="">Seleccione...</option>
            <?php foreach ($facultades as $facultad): ?>
                <?php if (isset($libro->id_facultad) && $facultad->id == $libro->id_facultad): ?>
                    <option value="<?php echo $facultad->id; ?>" selected="selected"><?php echo $facultad->nombre; ?></option>
                <?php else: ?>
                    <option value="<?php echo $facultad->id; ?>"><?php echo $facultad->nombre; ?></option>
                <?php endif;?>
            <?php endforeach;?>
        </select>
        <?php echo form_error('idfacultad'); ?>
    </div>

    <?php if (!isset($libro->imagen_libro)): ?>
        
    <?php endif?>

</div>
