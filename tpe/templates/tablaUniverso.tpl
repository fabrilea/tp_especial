<h1>{$titulo}</h1>

    <table class="tabla">
        <thead>
            <tr>
                <th>Universo</th>
            </tr>
        </thead>
        <tbody>
                {foreach from=$universos item=$universo}
                    <tr>
                        <td>{$universo->universo}</td>
                        <td><a href="universo/{$universo->id}">Ver</a></td>
                        <td><a href='showEditUniverso/{$universo->id}'>editar</a></td>
                        <td><a href='eliminarUniverso/{$universo->id}'>borrar</a></td>
                    </tr>
                {/foreach}
        </tbody>
    </table>


<div class="separar">
    <form method="POST" action="agregarUniverso">
        <label>Universo Origen</label>
            <input type="text" name="universo" placeholder="universo" required>

        <input type="submit">      
    </form>
</div>
