<form method="post">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="4" cellspacing="0" border="0">
                    <tr>
                        <td>
                            {if $SERVICE_STARING}
                                <input class="button" name="in_finalizar"           value="{$SERVICE_STOP}"         type="submit" />
                            {else}
                                <input class="button" name="in_iniciar"             value="{$SERVICE_START}"        type="submit" />&nbsp;&nbsp;
                            {/if}
                        </td>
                        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> {$REQUIRED_FIELD}</span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr> 
                        <td width="26%"><b>{$STATUS}:</b></td>
                        <td><b>{$DYN_STATUS}</b></td>
                    <tr>
                        <td width="26%"><b>{$IPADDR}:</b></td>
                        <td><b>{$DYN_IPADDR}</b></td>
                    <tr>
                        <td width="26%"><b>{$DOMAIN}:</b></td>
                        <td><b>{$DYN_DOMAIN}</b></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
