<main class="auth">
<H2 class="auth__heading"><?php echo $titulo; ?></H2>
<p class="auth__texto">Coloca tu nuevo Password</p>

<?php require_once __DIR__ . '/../templates/alertas.php' ?>

<?php 
if($token_valido){
?>

<form   method="POST" class="formulario">
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Nuevo Password</label>
        <input
             type="password"
             class="formulario__input"
             placeholder="Tu password"
             id="password"
             name="password"
             />
    </div>
   
    <input type="submit" class="formulario__submit" value="Guardar Password">

<?php } ?>
    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Inicia sesion</a>
        <a href="/registro" class="acciones__enlace">Aun no tiene cuenta ? Obtener una</a>
        </div>
</form>
</main>