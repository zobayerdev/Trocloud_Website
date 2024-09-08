<header id="header" class="header tt-header tt-double-header">
    <div class="overlay"></div>
    <div class="navbar navbar-light tt-top-header">
        <div class="container">

            {include file="$template/includes/tt/common/tt-logo.tpl"}

            {include file="$template/includes/tt/hostim/tt-custom-navbar.tpl"}

            <div class="d-flex align-items-center tt-toolbar-wrap">
                <ul class="navbar-nav toolbar">
                    <li class="nav-item dropdown d-none d-lg-none d-xl-block">
                        <a href="javascript:void(0)" id="dropdownMenuButton" class="position-relative" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fal fa-search fa-fw"></i>
                        </a>
                        <form method="post" action="{routePath('knowledgebase-search')}" class="position-absolute form-inline dropdown-menu dropdown-menu-right p-4 bg-gray-light border-0" aria-labelledby="dropdownMenuButton">
                            <div class="input-group search d-none d-xl-flex">
                                <div class="input-group-prepend">
                                    <button class="btn-default border-0" type="submit">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </div>
                                <input class="form-control appended-form-control font-weight-light" type="text" name="search" placeholder="{lang key="searchOurKnowledgebase"}...">
                            </div>
                        </form>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="btn nav-link cart-btn" href="{$WEB_ROOT}/cart.php?a=view">
                            <i class="fal fa-shopping-bag fa-fw"></i>
                            <span id="cartItemCount" class="tt-cart-badge rounded-circle">{$cartitemcount}</span>
                            <span class="sr-only">{lang key="carttitle"}</span>
                        </a>
                    </li>
                    <li class="nav-item ml-2 d-xl-none">
                        <button class="btn nav-link" type="button" data-toggle="offcanvas">
                            <span class="fas fa-bars fa-fw"></span>
                        </button>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-xl main-navbar-wrapper tt-main-header bg-gray-light">
        <div class="container">
            <div class="navbar-collapse offcanvas-collapse" id="mainNavbar">
                <form method="post" action="{routePath('knowledgebase-search')}" class="d-xl-none">
                    <div class="input-group search w-100 mb-2">
                        <div class="input-group-prepend">
                            <button class="btn btn-default" type="submit">
                                <i class="fal fa-search"></i>
                            </button>
                        </div>
                        <input class="form-control prepended-form-control" type="text" name="search" placeholder="{lang key="searchOurKnowledgebase"}...">
                    </div>
                </form>
                <ul id="nav" class="navbar-nav mr-auto">
                    {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                </ul>
                <ul class="navbar-nav ml-auto tt-secondary-list">
                    <!--currency dropdown start-->
                    {if !$loggedin && $multiCurrency && count($multiCurrency) > 1}
                        <li class="dropdown" id="currency-dropdown">
                            {foreach $multiCurrency as $currency}
                                {if $currency.id eq $selectedCurrency}
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <img alt="{$currency.code}" src="{$WEB_ROOT}/{$currency.flag}" class="tt-country-flag">
                                        <span>{$currency.prefix}</span> <b class="caret"></b>
                                    </a>
                                {/if}
                            {/foreach}
                            <ul class="dropdown-menu dropdown-menu-right">
                                {foreach $multiCurrency as $currency}
                                    {if $currency.id neq $selectedCurrency}
                                        {if $isQueryExist eq true}
                                            <li><a href="{$urlForCurrentcy}&currency={$currency.id}"><img alt="{$currency.code}" src="{$WEB_ROOT}/{$currency.flag}" class="tt-country-flag"><span>{$currency.prefix}</span></a></li>
                                        {else}
                                            <li><a href="{$urlForCurrentcy}?currency={$currency.id}"><img alt="{$currency.code}" src="{$WEB_ROOT}/{$currency.flag}" class="tt-country-flag"><span>{$currency.prefix}</span></a></li>
                                        {/if}
                                    {/if}
                                {/foreach}
                            </ul>
                        </li>
                    {/if}
                    <!--currency dropdown end-->
                    {if $loggedin}
                        <li class="tt-nav-item tt-notification">
                            <button type="button" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                                <i class="fal fa-bell"></i>
                                <span class="tt-circle"></span>
                            </button>
                            <div id="accountNotificationsContent" class="w-hidden">
                                <ul class="client-alerts">
                                    {foreach $clientAlerts as $alert}
                                        <li>
                                            <a href="{$alert->getLink()}">
                                                <i class="far fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}exclamation-triangle{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
                                                <div class="message">{$alert->getMessage()}</div>
                                            </a>
                                        </li>
                                        {foreachelse}
                                        <li class="none">
                                            {lang key='notificationsnone'}
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        </li>

                        <li class="tt-nav-item input-group align-items-center active-client" role="group">
                            <div class="btn-group">
                                <a href="{routePath('user-accounts')}" data-toggle="tooltip" data-placement="top" title="Switch Account">
                                    <i class="fal fa-random"></i>
                                </a>
                                {if $adminMasqueradingAsClient || $adminLoggedIn}
                                    <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="btn btn-return-to-admin" data-toggle="tooltip" data-placement="bottom" title="{if $adminMasqueradingAsClient}{lang key='adminmasqueradingasclient'} {lang key='logoutandreturntoadminarea'}{else}{lang key='adminloggedin'} {lang key='returntoadminarea'}{/if}">
                                        <i class="fal fa-redo-alt"></i>
                                        <span class="d-none d-md-inline-block">{lang key="admin.returnToAdmin"}</span>
                                    </a>
                                {/if}
                            </div>
                        </li>
                        {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar rightDrop=true}
                    {else}
                        {if $condlinks.allowClientRegistration}
                            <li class="nav-item">
                                <a href="{$WEB_ROOT}/register.php" class="btn-sm"><i class="fal fa-user mr-1"></i> {$LANG.register}</a>
                            </li>
                        {/if}
                        <li class="nav-item">
                            <a href="{$WEB_ROOT}/clientarea.php" class="btn-sm"><i class="fal fa-sign-in mr-1"></i> {$LANG.login}</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </div>
    </div>
</header>