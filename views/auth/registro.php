<main class="auth">
<H2 class="auth__heading"><?php echo $titulo; ?></H2>
<p class="auth__texto">Registrate en DevWebcamp</p>

<form action="" class="formulario">
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Email</label>
        <input
             type="text"
             class="formulario__input"
             placeholder="Tu nombre"
             id="nombre"
             name="nombre"
             />
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Email</label>
        <input
             type="text"
             class="formulario__input"
             placeholder="Tu apellido"
             id="apellido"
             name="apellido"
             />
    </div>

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
        <label for="passwrd" class="formulario__label">Password</label>
        <input
             type="password"
             class="formulario__input"
             placeholder="Tu password"
             id="passwrd"
             name="passwrd"
             />
    </div>

    <div class="formulario__campo">
        <label for="password2" class="formulario__label">Repetir Password</label>
        <input
             type="password"
             class="formulario__input"
             placeholder="Repetir  password"
             id="password2"
             name="password2"
             />
    </div>

    <input type="submit" class="formulario__submit" value="Iniciar Sesion">

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta ? Inicia Sesion</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu Password</a>
    </div>
</form>
</main>