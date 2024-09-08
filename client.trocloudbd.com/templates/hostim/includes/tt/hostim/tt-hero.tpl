<section class="bg-gradient">
    <div class="pt-60 tt-hero-two">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="tt-hero text-white">
                        <div class="tt-review-icon">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/star-review-5.svg" alt="review">
                        </div>
                        <h1 class="text-white font-weight-bold">{$LANG.homebeginTwo}</h1>
                        <p class="lead mt-3">{$LANG.homebegininfo}</p>

                        <div class="tt-hero-btns">
                            <a href="#frmDomainHomepage" class="btn btn-primary mr-3 page-scroll">Get start now</a>
                            <a href="#pricingSection" class="btn btn-outline-light page-scroll">View Pricing</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tt-hero-img-wrap position-relative">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/hero-image.svg" class="hero-img" alt="support image">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/tt-wp-logo.svg" class="tt-animation-icon-img" alt="wp logo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg">
                    <a href="{routePath('announcement-index')}" class="card-accent-teal d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-bullhorn"></i>
                        </figure>
                        {lang key='announcementstitle'}
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="serverstatus.php" class="card-accent-pomegranate d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-server"></i>
                        </figure>
                        {lang key='networkstatustitle'}
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <a href="{routePath('knowledgebase-index')}" class="card-accent-sun-flower d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-book"></i>
                        </figure>
                        {lang key='knowledgebasetitle'}
                    </a>
                </div>
                <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
                    <a href="{routePath('download-index')}" class="card-accent-asbestos d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-download"></i>
                        </figure>
                        {lang key='downloadstitle'}
                    </a>
                </div>
                <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
                    <a href="submitticket.php" class="card-accent-green d-block text-center p-4 bg-white tt-promo tt-rounded">
                        <figure class="ico-container">
                            <i class="fad fa-life-ring"></i>
                        </figure>
                        {lang key='homepage.submitTicket'}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
