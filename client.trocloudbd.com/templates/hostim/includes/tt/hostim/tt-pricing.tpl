<section class="ptb-100" id="pricingSection">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading m-4">
                    <h2 class="text-center">{$LANG.pricingheader}</h2>
                </div>
            </div>
        </div>

        {if $tt_selectedProductList}
        <div class="row justify-content-center">
            {foreach $tt_selectedProductList as $tt_selectedProduct}
            <div class="col-lg-3 col-md-6">
                <div class="tt-price-single tt-rounded text-center p-4 mt-4 bg-white">
                    {if $tt_selectedProduct.is_featured == '1'}
                        <div class="position-absolute tt-popular-badge"> <span class="badge color-1 color-1-bg">{$LANG.featuredProduct|upper}</span></div>
                    {/if}
                    <img src="{$WEB_ROOT}/templates/{$template}/{$tt_selectedProduct.tt_product_icon}" width="65" class="img-fluid" alt="support image">

                    <div class="tt-price-wrap my-4">
                        <h2 class="mb-4 h5">{$tt_selectedProduct.name}</h2>
                        <span class="text-muted">{$LANG.fromOnlyText}</span>
                        <h3 class="h4 font-weight-bold tt-price">
                            {$tt_selectedProduct.prefix}{$tt_selectedProduct.tt_product_product_price}
                        </h3>
                        <span class="text-muted">{$tt_selectedProduct.tt_product_billing_cycle}</span>
                    </div>
                    {if $tt_selectedProduct.short_description}
                        <p>{$tt_selectedProduct.short_description}</p>
                    {/if}
                    <a href="{$WEB_ROOT}/cart.php?a=add&pid={$tt_selectedProduct.id}" class="mt-4 btn btn-block {if $tt_selectedProduct.is_featured == '1'}btn-primary {else} btn-default {/if}">
                        {$LANG.ordernowbutton}
                    </a>
                </div>
            </div>
            {/foreach}
        </div>
        {/if}
        {if !empty($productGroups) || $registerdomainenabled || $transferdomainenabled}
            <div class="row">
                {if $registerdomainenabled}
                    <div class="col-lg-6">
                        <div class="bg-white p-4 d-flex align-items-center justify-content-between tt-rounded mt-4">
                            <div class="tt-rt-info mr-3">
                                <h5 class="card-title pricing-card-title">
                                    {lang key='orderregisterdomain'}
                                </h5>
                                <p>{lang key='secureYourDomain'}</p>
                                <a href="{$WEB_ROOT}/cart.php?a=add&domain=register" class="tt-read-more">
                                    {lang key='navdomainsearch'} <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                            <img src="{$WEB_ROOT}/templates/{$template}/img/icon-domain-1.svg" width="65" class="img-fluid" alt="support image">
                        </div>
                    </div>
                {/if}
                {if $transferdomainenabled}
                    <div class="col-lg-6">
                        <div class="bg-white p-4 d-flex align-items-center justify-content-between tt-rounded mt-4">
                            <div class="tt-rt-info mr-3">
                                <h5 class="card-title pricing-card-title">
                                    {lang key='transferYourDomain'}
                                </h5>
                                <p>{lang key='transferExtend'}</p>
                                <a href="{$WEB_ROOT}/cart.php?a=add&domain=transfer" class="tt-read-more">
                                    {lang key='transferYourDomain'} <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                            <img src="{$WEB_ROOT}/templates/{$template}/img/icon-domain-2.svg" width="65" class="img-fluid" alt="support image">
                        </div>
                    </div>
                {/if}
            </div>
        {/if}
    </div>
</section>
