{if $tt_debug_mode}
    <a href="{$WEB_ROOT}/index.php" class="navbar-brand mr-3">
        <img src="{$WEB_ROOT}/templates/{$template}/includes/tt/hostim/img/logo-color.png" class="logo-img" alt="{$companyname}">
    </a>
{else}   
    <a class="navbar-brand mr-3" href="{$WEB_ROOT}/index.php">
        {if $assetLogoPath}
            <img src="{$assetLogoPath}" alt="{$companyname}" class="logo-img">
        {else}
            {$companyname}
        {/if}
    </a>
{/if}
