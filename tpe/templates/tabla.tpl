<h1>{$titulo}</h1>

    <table class="tabla">
        <thead>
            <tr>
                <th></th>
                <th>Personaje</th>
                <th>Raza</th>
                <th>Afiliación</th>
                <th>Representación LGBTQ+</th>
                <th>Representación Feminista</th>
                <th>Universo Origen</th>
            </tr>
        </thead>
        <tbody>
                {foreach from=$personajes item=$personaje}
                    <tr>
                        <td><img src="{$personaje->imagen}" width= '100'></td>
                        <td>{$personaje->personaje}</td>
                        <td>{$personaje->raza}</td>
                        <td>{$personaje->afiliacion}</td>
                        <td>{if $personaje->lgbt==1}si{/if}
                        {if $personaje->lgbt==0}no{/if}</td>
                        <td>{if $personaje->fem==1}si{/if}
                        {if $personaje->fem==0}no{/if}</td>
                        <td>{$personaje->universo}</td>
                        {if isset($smarty.session.USER_ID)}
                        <td><a href="personaje/{$personaje->id}">Ver</a></td>
                        <td><a href='showEdit/{$personaje->id}'>editar</a></td>
                        <td><a href='eliminar/{$personaje->id}'>borrar</a></td>
                        {/if}
                    </tr>
                {/foreach}
        </tbody>
    </table>




