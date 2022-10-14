
            <ul>
        <span>Listado de universos:</span>
        {foreach from=$universos item=$universo}
        <li><a href="universo/{$universo->id}">{$universo->universo}</a></li>
        {/foreach}
        </ul>

        <img src="images/pride.jpg" width= '100%'>
    </header>