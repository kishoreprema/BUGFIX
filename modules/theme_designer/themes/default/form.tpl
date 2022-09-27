<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        {if $action eq 'input'}
        <td align="left">
            <input class="button" type="submit" name="save_new" value="{$SAVE}">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="{$CANCEL}">
        </td>
        {elseif $action eq 'view'}
        <td align="left">
            <input class="button" type="submit" name="cancel" value="{$CANCEL}">
        </td>
        {elseif $action eq 'edit'}
        <td align="left">
            <input class="button" type="submit" name="save_edit" value="{$EDIT}">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="{$CANCEL}">
        </td>
        {/if}
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> {$REQUIRED_FIELD}</span></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td align="left"><b>{$theme_name.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$theme_name.INPUT}<input type="hidden" name="original_name" value='{$tname}'></td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$login_logo.LABEL}: </b></td>
        <td align="left">{$login_logo.INPUT}</td>
        <td>{$LOGIN_LOGO}</td>
       
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$login_color_1.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$login_color_1.INPUT}</td>
        <td align="left" width="155">{$loginc1.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$login_color_2.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$login_color_2.INPUT}</td>
        <td align="left" width="155">{$loginc2.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$menu_logo.LABEL}: </b></td>
        <td align="left">{$menu_logo.INPUT}</td>
        <td>{$MENU_LOGO}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$menu_color_1.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$menu_color_1.INPUT}</td>
        <td align="left" width="155">{$menuc1.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$menu_color_2.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$menu_color_2.INPUT}</td>
        <td align="left" width="155">{$menuc2.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$menu_lines_color.LABEL}: <span  class="required">*</span></b></td>
        <td align="left">{$menu_lines_color.INPUT}</td>
        <td align="left" width="155">{$linesc1.INPUT}</td>
    </tr>

</table>
<input class="button" type="hidden" name="id" value="{$ID}" />

<script>


$( document ).ready(function() {
    $('#loginc1').val($('#login_color_1').val());
    $('#loginc2').val($('#login_color_2').val());
    $('#menuc1').val($('#menu_color_1').val());
    $('#menuc2').val($('#menu_color_2').val());
    $('#linesc1').val($('#menu_lines_color').val());
    $('#menulogobg').css('backgroundColor',$('#menu_color_1').val());
    $('#loginlogobg').css('backgroundColor',$('#login_color_1').val());
});


function setColor(a, b) {
    var x = document.getElementById(arguments[0]).value;
    document.getElementById(arguments[1]).value = document.getElementById(arguments[0]).value;
    $('#menulogobg').css('backgroundColor',$('#menu_color_1').val());
    $('#loginlogobg').css('backgroundColor',$('#login_color_1').val());
    document.getElementById('loginFrame').contentWindow.changeColor();
    document.getElementById('menuFrame').contentWindow.changeColor();
}

function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
    if (k == 47) return false;
    if (k == 42) return false;
    if (k == 92) return false;
    if (k == 47) return false;
    if (k == 61) return false;
    if (k == 43) return false;
    if (k == 64) return false;
    if (k == 35) return false;
    if (k == 38) return false;
    if (k == 94) return false;
    if (k == 40) return false;
    if (k == 41) return false;
    if (k == 91) return false;
    if (k == 93) return false;
    if (k == 123) return false;
    if (k == 125) return false;
    if (k == 60) return false;
    if (k == 62) return false;
    if (k == 63) return false;
    if (k == 33) return false;
    if (k == 58) return false;
    if (k == 59) return false;
    if (k == 39) return false;
    if (k == 124) return false;
    if (k == 36) return false;
    if (k == 37) return false;
}
</script>

<style>
div.monitor {
    width: 100%;
    height: 100%;
    max-width: 1034px;
    max-height: 543px;
    margin: 0 auto;
}

div.monitor div {
 position: relative;
    padding-top: 25px;
    padding-bottom: 67.5%;
    height: 0;
}

div.monitor div iframe {
box-sizing: border-box;
    background: url(/modules/theme_designer/images/mac.png) center center no-repeat;
    background-size: contain;
    padding: 13.2% 16% 16%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>
