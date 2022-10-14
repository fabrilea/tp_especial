{if isset($smarty.session.USER_ID)}
    <div class="separar">
        <form method="POST" action="agregar">
            <input type="text" name="personaje" placeholder="personaje" required>
            <input type="text" name="raza" placeholder="raza" required>
            <input type="text" name="afiliacion" placeholder="afiliación/equipo">
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
            <label>Universo Origen</label>
            <select name="universo">
            {foreach  from=$universos item=$universo}
                <option value="{$universo->id}">{$universo->universo}</option>
            {/foreach}
            </select>
    
            <input type="submit">      
        </form>
    </div>
    {/if}