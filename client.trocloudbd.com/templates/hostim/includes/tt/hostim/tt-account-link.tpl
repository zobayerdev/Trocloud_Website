<section class="bg-gradient pt-60 mb-lg-5 mb-md-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tt-section-heading text-center mb-4">
                    <h2 class="text-white">{lang key='homepage.yourAccount'}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-4 col-lg">
                <a href="clientarea.php" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="{$WEB_ROOT}/templates/{$template}/img/icon-account-1.svg" alt="icon" class="mx-auto">
                    {lang key='homepage.yourAccount'}
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <a href="clientarea.php?action=services" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="{$WEB_ROOT}/templates/{$template}/img/icon-account-2.svg" alt="icon" class="mx-auto">
                    {lang key='homepage.manageServices'}
                </a>
            </div>
            {if $registerdomainenabled || $transferdomainenabled || $numberOfDomains}
                <div class="col-6 col-md-4 col-lg">
                    <a href="clientarea.php?action=domains" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/icon-account-3.svg" alt="icon" class="mx-auto">
                        {lang key='homepage.manageDomains'}
                    </a>
                </div>
            {/if}
            <div class="col-6 col-md-4 offset-md-2 offset-lg-0 col-lg">
                <a href="supporttickets.php" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="{$WEB_ROOT}/templates/{$template}/img/icon-account-4.svg" alt="icon" class="mx-auto">
                    {lang key='homepage.supportRequests'}
                </a>
            </div>
            <div class="col-6 offset-3 offset-md-0 col-md-4 col-lg">
                <a href="clientarea.php?action=masspay&all=true" class="card-accent-midnight-blue bg-white p-4 text-center tt-account tt-rounded">
                    <img src="{$WEB_ROOT}/templates/{$template}/img/icon-account-5.svg" alt="icon" class="mx-auto">
                    {lang key='homepage.makeAPayment'}
                </a>
            </div>
        </div>
    </div>
</section>
