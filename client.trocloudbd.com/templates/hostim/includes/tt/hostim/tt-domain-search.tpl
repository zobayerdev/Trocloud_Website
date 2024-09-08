<form method="post" action="domainchecker.php" id="frmDomainHomepage">
    <div class="home-domain-search bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-lg-5 p-md-5 p-4 tt-domain-search-wrap">
                        <h2 class="text-center text-white mb-4">{lang key="secureYourDomainShort"}</h2>
                        <input type="hidden" name="transfer" />
                        <div class="input-group-wrapper">
                            <div class="input-group">
                                <input type="text" class="form-control" name="domain" placeholder="{lang key="exampledomain"}" autocapitalize="none">
                                <span class="input-group-append d-none d-sm-block">
                            {if $registerdomainenabled}
                                <button type="submit" class="btn btn-primary{$captcha->getButtonClass($captchaForm)}" id="btnDomainSearch">
                                    {lang key="search"}
                                </button>
                            {/if}
                                    {if $transferdomainenabled}
                                        <button type="submit" id="btnTransfer" data-domain-action="transfer" class="btn btn-success{$captcha->getButtonClass($captchaForm)}">
                                    {lang key="domainstransfer"}
                                </button>
                                    {/if}
                        </span>
                            </div>
                        </div>
                        <div class="row d-sm-none">
                            {if $registerdomainenabled}
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary{$captcha->getButtonClass($captchaForm)} btn-block" id="btnDomainSearch2">
                                        {lang key="search"}
                                    </button>
                                </div>
                            {/if}
                            {if $transferdomainenabled}
                                <div class="col-6">
                                    <button type="submit" id="btnTransfer2" data-domain-action="transfer" class="btn btn-success{$captcha->getButtonClass($captchaForm)} btn-block">
                                        {lang key="domainstransfer"}
                                    </button>
                                </div>
                            {/if}
                        </div>
                        {include file="$template/includes/captcha.tpl"}

                        <div class="d-flex justify-content-between align-items-center">
                            {if $featuredTlds}
                                <ul class="tld-logos list-inline tt-domain-list text-white mb-0 d-none d-lg-block d-xl-block">
                                    {foreach $featuredTlds as $num => $tldinfo}
                                        {if $num < 3}
                                            <li class="list-inline-item">
                                                <img src="{$BASE_PATH_IMG}/tld_logos/{$tldinfo.tldNoDots}.png">
                                                <span>
                                                    {if is_object($tldinfo.register)}
                                                        {$tldinfo.register->toFull()}
                                                    {else}
                                                        {lang key="domainregnotavailable"}
                                                    {/if}
                                                </span>
                                            </li>
                                        {/if}
                                    {/foreach}
                                </ul>
                            {else}
                                {if $pricetable && count($pricetable) gt 0}
                                    <ul class="list-inline tt-domain-list text-white mb-0 d-none d-lg-block d-xl-block">
                                        {foreach $pricetable as $price}
                                            {if $price.extension == '.com'}
                                                <li class="list-inline-item"><img src="templates/{$template}/img/com.png" alt="com" width="65" class="img-fluid"> <span>{$price.prefix}{$price.msetupfee}</span></li>
                                            {elseif $price.extension == '.net'}
                                                <li class="list-inline-item"><img src="templates/{$template}/img/net.png" alt="net" width="65" class="img-fluid"> <span>{$price.prefix}{$price.msetupfee}</span></li>
                                            {elseif $price.extension == '.org'}
                                                <li class="list-inline-item"><img src="templates/{$template}/img/org.png" alt="org" width="65" class="img-fluid"> <span>{$price.prefix}{$price.msetupfee}</span></li>
                                            {elseif $price.extension == '.store'}
                                                <li class="list-inline-item"><img src="templates/{$template}/img/store.png" alt="store" width="65" class="img-fluid"> <span>{$price.prefix}{$price.msetupfee}</span></li>
                                            {elseif $price.extension == '.online'}
                                                <li class="list-inline-item"><img src="templates/{$template}/img/online.png" alt="online" width="65" class="img-fluid"> <span>{$price.prefix}{$price.msetupfee}</span></li>
                                            {/if}
                                        {/foreach}
                                    </ul>
                                {/if}
                            {/if}
                            <a href="{routePath('domain-pricing')}" class="tt-read-more float-right">{lang key='viewAllPricing'} <i class="fad fa-arrow-right"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</form>