<div>
<h1>LogIn</h1>
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Entrar</button>
    </form>
    
    <h1>Register</h1>
    <form method="POST" action="registrar">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>
        <button type="submit">Registrar</button>
    </form>
</div>




