<div class="providerLinkingFeedback"></div>

<div class="tt-form-wrap">
    <form method="post" action="{routePath('login-validate')}" class="login-form" role="form">
        <div class="tt-form-container">
            <div class="tt-form-content">
                <div class="mb-4">

                    <h3 class="h4 mt-4">{lang key='loginbutton'}</h3>
                    <p class="text-muted mb-0">{lang key='userLogin.signInToContinue'}</p>
                </div>
                {include file="$template/includes/flashmessage.tpl"}
                <div class="form-group">
                    <label for="inputEmail" class="form-control-label">{lang key='clientareaemail'}</label>
                    <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fad fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="username" id="inputEmail" placeholder="name@example.com" autofocus>
                    </div>
                </div>
                <div class="form-group mb-4 focused">
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="inputPassword" class="form-control-label">{lang key='clientareapassword'}</label>
                        <div class="mb-2">
                            <a href="{routePath('password-reset-begin')}" class="small text-muted" tabindex="-1">{lang key='forgotpw'}</a>
                        </div>
                    </div>
                    <div class="input-group input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fad fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control pw-input" name="password" id="inputPassword" placeholder="{lang key='clientareapassword'}" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn-reveal-pw" type="button" tabindex="-1">
                                <i class="fad fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {if $captcha->isEnabled()}
                    {include file="$template/includes/tt/hostim/tt-captcha.tpl"}
                {/if}
                <div class="d-flex align-items-center justify-content-between">
                    <button id="login" type="submit" class="btn btn-primary{$captcha->getButtonClass($captchaForm)}">
                        {lang key='loginbutton'}
                    </button>
                    <label class="mb-0">
                        <input type="checkbox" class="form-check-input" name="rememberme" />
                        {lang key='loginrememberme'}
                    </label>
                </div>

                {if $linkableProviders}
                    <div class="tt-or-text tt-login-or mt-4">
                        {$LANG.orText}
                    </div>
                {/if}

                {include file="$template/includes/linkedaccounts.tpl" linkContext="login" customFeedback=true}

                <div class="mt-3 d-flex align-items-center justify-content-between">
                    <p class="mb-0">{lang key='userLogin.notRegistered'} <a href="{$WEB_ROOT}/register.php">{lang key='userLogin.createAccount'}</a></p>
                    <ul class="list-inline mb-0">
                        {if $languagechangeenabled && count($locales) > 1 || $currencies}
                            <li class="list-inline-item">
                                <button type="button" class="btn p-0" data-toggle="modal" data-target="#modalChooseLanguage">
                                    <div class="d-inline-block align-middle">
                                        <div class="iti-flag {if $activeLocale.countryCode === 'GB'}us{else}{$activeLocale.countryCode|lower}{/if}"></div>
                                    </div>
                                    {$activeLocale.localisedName}
                                    /
                                    {$activeCurrency.prefix}
                                    {$activeCurrency.code}
                                </button>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
            <div class="tt-login-registration-testimonial" style="background: url('{$WEB_ROOT}/templates/{$template}/img/tt-login-testimonial-bg.jpg')no-repeat center bottom / cover">
                <div class="tt-testimonial-slider">
                    {include file="$template/includes/tt/hostim/tt-login-register-testimonial.tpl"}
                </div>
            </div>
        </div>
    </form>
</div>


