<div class="separar">
{foreach from=$universos item=$universo}
    <form method="POST" action="editarUniverso/{$universo->id}">
        <label>Universo Origen</label>
            <input type="text" name="universo" placeholder="universo" value="{$universo->universo}" required> 
               <input type="submit">
    </form>
{/foreach}
</div>