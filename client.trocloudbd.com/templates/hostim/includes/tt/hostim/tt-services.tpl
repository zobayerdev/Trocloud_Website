<section class="bg-white ptb-100 tt-services-two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading text-center mb-4">
                    <h2>{lang key='clientHomePanels.productsAndServices'}</h2>
                </div>
            </div>
        </div>
        <div class="row row-equal-height justify-content-center">
            {if !empty($productGroups) || $registerdomainenabled || $transferdomainenabled}
                {foreach $productGroups as $productGroup}
                    <div class="col-lg-4 col-md-6">
                        <div class="tt-service-single mb-4">
                            <div class="tt-service-info">
                                <h3 class="h5 mb-3">
                                    {$productGroup->name}
                                </h3>
                                <p>{$productGroup->tagline}</p>
                                <a href="{$productGroup->getRoutePath()}" class="tt-read-more">
                                    {lang key='browseProducts'} <i class="fad fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
</section>
