    {if !in_array($templatefile, ['login', 'clientregister', 'password-reset-container', 'logout'])}
    </div>

                        </div>
                        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                            <div class="d-lg-none sidebar sidebar-secondary">
                                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                            </div>
                        {/if}
                    <div class="clearfix"></div>
                </div>
            </div>
    {else}
        </div>
    </div>
    {/if}
    </section>

    {if $templatefile == 'homepage'}
        {include file="$template/includes/tt/hostim/tt-cta.tpl"}
    {/if}


    <footer id="footer" class="footer py-0 bg-dark tt-footer">
        <div class="tt-footer-top ptb-60">
            <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-6">
                       <div class="tt-footer-widget">
                           </div>
               </div>
            </div>
        </div>
        <div class="tt-footer-bottom py-3">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7">
                        <p class="copyright text-left mb-0 mt-0">
                            {lang key="copyrightFooterNotice" year=$date_year company=$companyname}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-inline mb-0 float-lg-right">
                            {if $languagechangeenabled && count($locales) > 1 || $currencies}
                                <li class="list-inline-item">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#modalChooseLanguage">
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
            </div>
        </div>
    </footer>

    <div id="fullpage-overlay" class="w-hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="{$WEB_ROOT}/assets/img/overlay-spinner.svg" alt="">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>

    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">{lang key='close'}</span>
                    </button>
                </div>
                <div class="modal-body">
                    {lang key='loading'}
                </div>
                <div class="modal-footer">
                    <div class="float-left loader">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        {lang key='loading'}
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        {lang key='close'}
                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        {lang key='submit'}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <form method="get" action="{$currentpagelinkback}">
        <div class="modal modal-localisation" id="modalChooseLanguage" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="d-flex align-items-center justify-content-between pb-3">
                            <h5>{lang key='chooselanguage'}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                            </button>
                        </div>

                        {if $languagechangeenabled && count($locales) > 1}

                            <div class="row item-selector">
                                <input type="hidden" name="language" data-current="{$language}" value="{$language}" />
                                {foreach $locales as $locale}
                                    <div class="col-6 col-lg-3">
                                        <a href="#" class="item{if $language == $locale.language} active{/if}" data-value="{$locale.language}">
                                            {$locale.localisedName}
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        {/if}
                        {if !$loggedin && $currencies}
                            <h5 class="h5 mt-4 text-dark">{lang key='choosecurrency'}</h5>
                            <div class="row item-selector">
                                <input type="hidden" name="currency" data-current="{$activeCurrency.id}" value="">
                                {foreach $currencies as $selectCurrency}
                                    <div class="col-6 col-lg-3">
                                        <a href="#" class="item{if $activeCurrency.id == $selectCurrency.id} active{/if}" data-value="{$selectCurrency.id}">
                                            {$selectCurrency.prefix} {$selectCurrency.code}
                                        </a>
                                    </div>
                                {/foreach}
                            </div>
                        {/if}

                        <button type="submit" class="btn btn-primary mt-4">{lang key='Apply Now'}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {if !$loggedin && $adminLoggedIn}
        <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-return-to-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{lang key='adminmasqueradingasclient'} {lang key='logoutandreturntoadminarea'}{else}{lang key='adminloggedin'} {lang key='returntoadminarea'}{/if}">
            <i class="fas fa-redo-alt"></i>
            <span class="d-none d-md-inline-block">{lang key="admin.returnToAdmin"}</span>
        </a>
    {/if}

    {include file="$template/includes/generate-password.tpl"}

    {$footeroutput}

    <script src="{$WEB_ROOT}/templates/{$template}/js/swiper-bundle.min.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/jquery.easing.min.js"></script>
    <script src="{$WEB_ROOT}/templates/{$template}/js/custom.js?v={$versionHash}"></script>
</body>
</htm


