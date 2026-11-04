<main class="auth">
<H2 class="auth__heading"><?php echo $titulo; ?></H2>
<p class="auth__texto">Inicia sesion en DevWebcamp</p>

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
    <div class="formulario__campo">
        <label for="email" class="formulario__label">Password</label>
        <input
             type="password"
             class="formulario__input"
             placeholder="Tu password"
             id="passwrd"
             name="passwrd"
             />
    </div>
    <input type="submit" class="formulario__submit" value="Iniciar Sesion">

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">Aun no tiene cuenta ? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu Password</a>
    </div>
</form>
</main>