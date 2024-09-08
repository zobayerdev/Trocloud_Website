<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="{$charset}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
    {include file="$template/includes/head.tpl"}
    {$headoutput}
</head>
<body class="tt-body-wrapper {if $templatefile == 'homepage'}primary-bg-color bg-gray-light{/if}">

{$headeroutput}

{include file="$template/includes/tt/hostim/tt-homepage.tpl"}

<section id="main-body" class="{if $templatefile == 'homepage'}ptb-100 {/if} {if in_array($templatefile, ['login', 'clientregister', 'password-reset-container', 'logout'])}tt-auth-wrap{/if}">
    <div class="{if !$skipMainBodyContainer}container{/if}">
        {if !in_array($templatefile, ['login', 'clientregister', 'password-reset-container', 'logout'])}
        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="sidebar">
                    {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
                </div>
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div class="d-none d-lg-block sidebar">
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
            </div>
            {/if}
            <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-lg-8 col-xl-9{/if} primary-content">
                {else}
                <div class="row justify-content-center">
                    <div class="col-lg-10 primary-content">
{/if}