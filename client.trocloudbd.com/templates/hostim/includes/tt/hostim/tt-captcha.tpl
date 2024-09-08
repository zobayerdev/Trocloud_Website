{if $captcha->isEnabled() && $captcha->isEnabledForForm($captchaForm)}
    <div class="tt-captcha-wrapper">
        {if $templatefile == 'homepage'}
            <div class="domainchecker-homepage-captcha">
        {/if}

        {if $captcha == "recaptcha"}
            <div id="google-recaptcha-domainchecker" class="form-group recaptcha-container mx-auto"></div>
        {elseif !in_array($captcha, ['invisible', 'recaptcha'])}
            <div class="tt-captcha-info">
                <div id="default-captcha-domainchecker" class="{if $filename == 'domainchecker'}input-group input-group-box {/if}pb-3">
                    <p>{lang key="captchaverify"}</p>

                    <div class="d-flex align-items-center">
                        <img id="inputCaptchaImage" data-src="{$systemurl}includes/verifyimage.php" src="{$systemurl}includes/verifyimage.php" align="left" />
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="ml-2 form-control {if $filename == 'register'}float-left{/if}"
                               data-toggle="tooltip" data-placement="right" data-trigger="manual" title="{lang key='orderForm.required'}"/>
                    </div>
                </div>
            </div>
        {/if}

        {if $templatefile == 'homepage'}
            </div>
        {/if}
    </div>
{/if}
