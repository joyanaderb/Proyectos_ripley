 <?php if (isset($usuario->id_usuario)): ?>
    <input type="hidden" name="idUsuario" value="<?php echo $usuario->id_usuario; ?>">
<?php endif;?>
<div class="col-md-6">
    <div class="form-group <?php echo form_error('nombres') == true ? 'has-error' : '' ?>">
        <label for="nombres">Nombres</label>
        <?php if (isset($usuario->nombres)): ?>
            <?php $valor = form_error('nombres') == true ? set_value('nombres') : $usuario->nombres;?>;
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo $valor; ?>" required>
        <?php else: ?>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="<?php echo set_value('nombres'); ?>" required>
        <?php endif;?>
        <?php echo form_error('nombres'); ?>
    </div>
    <div class="form-group <?php echo form_error('apellidos') == true ? 'has-error' : '' ?>">
        <label for="apellidos">Apellidos</label>
        <?php if (isset($usuario->apellidos)): ?>
            <?php $valor = form_error('apellidos') == true ? set_value('apellidos') : $usuario->apellidos;?>;
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo $valor; ?>" required>
        <?php else: ?>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo set_value('apellidos'); ?>" required>
        <?php endif;?>
        <?php echo form_error('apellidos'); ?>
    </div>
    
        <div class="form-group <?php echo form_error('username') == true ? 'has-error' : '' ?>">
        <label for="apellidos">Nombre de usuarioss</label>
        <?php if (isset($usuario->username)): ?>
            <?php $valor = form_error('username') == true ? set_value('username') : $usuario->username;?>;
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" value="<?php echo $valor; ?>" required>
        <?php else: ?>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" value="<?php echo set_value('apellidos'); ?>" required>
        <?php endif;?>
        <?php echo form_error('username'); ?>
    </div>
    
    <div class="form-group <?php echo form_error('email') == true ? 'has-error' : '' ?>">
        <label for="email">Email</label>
        <?php if (isset($usuario->email)): ?>
            <?php $valor = form_error('email') == true ? set_value('email') : $usuario->email;?>;
            <input type="text" class="form-control" id="email" name="email" placeholder="Introduzca el Email del Usuario" value="<?php echo $valor; ?>" required>
        <?php else: ?>
            <input type="text" class="form-control" id="email" name="email" placeholder="Introduzca el Email del Usuario" value="<?php echo set_value('email'); ?>" required>
        <?php endif;?>
        <?php echo form_error('email'); ?>
    </div>
    <?php if (!isset($usuario->pass_usuario)): ?>
        <div class="form-group <?php echo form_error('password') == true ? 'has-error' : '' ?>">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nombre" value="<?php echo set_value('password'); ?>">
            <?php echo form_error('password'); ?>
        </div>
    <?php endif?>
    
</div>
<div class="col-md-6">
    <div class="form-group <?php echo form_error('dni') == true ? 'has-error' : '' ?>">
        <label for="dni">DNI</label>
        <?php if (isset($usuario->dni)): ?>
            <?php $valor = form_error('dni') == true ? set_value('dni') : $usuario->dni;?>;
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="<?php echo $valor; ?>" required>
        <?php else: ?>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="<?php echo set_value('dni'); ?>" required>
        <?php endif;?>
        <?php echo form_error('dni'); ?>
    </div>
    
    <div class="form-group <?php echo form_error('idrol') == true ? 'has-error' : '' ?>">
        <label for="idrol" class="control-label">Tipo de Usuario</label>
        <select name="idrol" id="idtipousuario" class="form-control" required>
            <option value="">Seleccione...</option>
            <?php foreach ($roles as $rol): ?>
                <?php if (isset($usuario->idrol) && $rol->id == $usuario->idrol): ?>
                    <option value="<?php echo $rol->id; ?>" selected="selected"><?php echo $rol->nombre; ?></option>
                <?php else: ?>
                    <option value="<?php echo $rol->id; ?>"><?php echo $rol->nombre; ?></option>
                <?php endif;?>
            <?php endforeach;?>
        </select>
        <?php echo form_error('idrol'); ?>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <?php if (isset($usuario->telefono)): ?>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $usuario->telefono; ?>">
        <?php else: ?>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
        <?php endif;?>
    </div>
</div>
