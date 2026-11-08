<main class="auth">
<H2 class="auth__heading"><?php echo $titulo; ?></H2>
<p class="auth__texto">Recupera tu acceso a DevWebcamp</p>

<form action="" class="formulario">
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Email</label>
        <input
             type="email"
             class="formulario__input"
             placeholder="Tu email"
             id="email"
             name="email"
             />
    </div>
   
    <input type="submit" class="formulario__submit" value="Enviar Instrucciones">

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Inicia sesion</a>
        <a href="/registro" class="acciones__enlace">Aun no tiene cuenta ? Obtener una</a>
        </div>
</form>
</main>