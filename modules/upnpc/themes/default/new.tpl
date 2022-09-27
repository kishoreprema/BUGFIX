<form method="POST" enctype="multipart/form-data" id="upnpc">
<input type="hidden" value="" name="send" id="send">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>&nbsp;</td>
            <h2>{php}echo _tr('Request UPnP port forward to a capable device');{/php}</h2>
            <td></td>
        </tr>
        <tr>            
            <td width="150px">{php}echo _tr('Local Port');{/php}:</td>
            <td width="200px"><input type="text" id="localport" name="localport" value='22' /></td>
            <td></td>
        </tr>
        <tr>            
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>
        <tr>            
            <td width="150px">{php}echo _tr('External Port');{/php}:</td>
            <td width="200px"><input type="text" id="externalport" name="externalport" value='2200' /></td>
            <td></td>
        </tr>       
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>
        <tr>            
        <tr>
            <td width="150px">{php}echo _tr('Protocol');{/php}:</td>
            <td width="200px"><select id="protocol" name="protocol" form="upnpc">
            <option value="--tcp">TCP</option>
            <option value="--udp">UDP</option>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td width="100px"><input type="submit" class="button" value="{php}echo _tr('Test');{/php}" onclick="document.getElementById('send').value='test';"></td>
            <td width="100px"><input type="submit" class="button" value="{php}echo _tr('Add');{/php}" onclick="document.getElementById('send').value='add';">
            <input type="submit" class="button" value="{php}echo _tr('Delete');{/php}" onclick="document.getElementById('send').value='del';"></td>
            <td></td>
            <td></td>
        </tr>
</table>
</form>
{if $frame_url neq ""}
<br><br>
<table class="tabForm" style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%">
        <tr><td align="left" colspan="2"><b>{php}echo _tr('Results');{/php}</b></td></tr>
        <tr><td align="left" colspan="2"><div class='hr-line'></div></td></tr>
    </table>
<pre style="font-family: monospace;">
<iframe name="ifm" id="ifm" frameborder=0 width="600px" height="500px" marginheight=0 marginwidth=0 scrolling=no src={$frame_url}></iframe>
</pre>
{/if}


