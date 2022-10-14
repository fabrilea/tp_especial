


    {foreach from=$personajes item=$personaje}
    <form method="POST" action="editar/{$personaje->id}">
        <input type="text" name="personaje" placeholder="personaje" value="{$personaje->personaje}" required>
        <input type="text" name="raza" placeholder="raza" value="{$personaje->raza}" required>
        <input type="text" name="afiliacion" placeholder="afiliación/equipo" value="{$personaje->afiliacion}">
        <label>Representación LGBTQ+</label>
        <select name="lgbt">
            <option value="1">si</option>
            <option value="0">no</option>
        </select>
        <label>Representación Feminista</label>
        <select name="fem">
            <option value="1">si</option>
            <option value="0">no</option>
        </select>
    {/foreach}