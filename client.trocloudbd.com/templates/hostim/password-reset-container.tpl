<div class="row justify-content-center">
    <div class="col-lg-7 col-12">
        <div class="card tt-custom-radius">
            <div class="card-body p-4 p-lg-5">
                {if $loggedin && $innerTemplate}
                    {include file="$template/includes/alert.tpl" type="error" msg="{lang key='noPasswordResetWhenLoggedIn'}" textcenter=true}
                {else}
                    {if $successMessage}
                        {include file="$template/includes/alert.tpl" type="success" msg=$successTitle textcenter=true}
                        <p>{$successMessage}</p>
                    {else}
                        {if $innerTemplate}
                            {include file="$template/password-reset-$innerTemplate.tpl"}
                        {/if}
                    {/if}
                {/if}

                <div class="auth-footer mt-20"> {$LANG.notAccount} <a href="{$WEB_ROOT}/register.php">{$LANG.register}</a> </div>
            </div>
        </div>
    </div>
</div>
