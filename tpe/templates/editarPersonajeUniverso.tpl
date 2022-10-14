
<select name="universo">

{foreach from=$universos item=$universo}

    <option value="{$universo->id}">{$universo->universo}</option>
    {/foreach}
</select>
<input type="submit">  
    </form>



