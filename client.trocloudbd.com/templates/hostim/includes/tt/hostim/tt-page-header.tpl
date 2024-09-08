{if !in_array($templatefile, ['login', 'clientregister', 'password-reset-container', 'logout', 'store/ox/index', 'store/sitelockvpn/index', 'store/sitelock/index'])}
    <section class="tt-page-header py-5 bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tt-page-header-info">
                        <h1 class="text-white mb-0 h3">
                            {if $clientareaaction === '' && $clientareaaction !== NULL}
                                {lang key="myDashboard"}
                            {else}
                                {$displayTitle}
                            {/if}
                        </h1>
                        {if $tagline} <p>{$tagline}</p>{/if}

                        {if $breadcrumb}
                        <div class="tt-breadcrumb">
                            <span class="tt-triangle-right"></span>
                            {include file="$template/includes/breadcrumb.tpl"}
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </section>
{/if}