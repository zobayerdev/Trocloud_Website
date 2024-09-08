{include file="$template/includes/network-issues-notifications.tpl"}

<!--for single navbar include this "tt-single-navbar.tpl" file
and for double navbar then include this "tt-double-navbar.tpl" file-->
{include file="$template/includes/tt/hostim/tt-single-navbar.tpl"}


{* light dark mode switcher *}
{include file="$template/includes/tt/hostim/tt-light-dark-switcher.tpl"}

{if $templatefile != 'homepage'}
    {include file="$template/includes/tt/hostim/tt-page-header.tpl"}
{/if}

{include file="$template/includes/validateuser.tpl"}
{include file="$template/includes/verifyemail.tpl"}

{if $templatefile == 'homepage'}
    {include file="$template/includes/tt/hostim/tt-hero.tpl"}
{/if}

{if $templatefile == 'homepage'}
    {include file="$template/includes/tt/hostim/tt-pricing.tpl"}
    {if $registerdomainenabled || $transferdomainenabled}
        {include file="$template/includes/tt/hostim/tt-domain-search.tpl"}
    {/if}
{/if}


{if $templatefile == 'homepage'}
    {include file="$template/includes/tt/hostim/tt-services.tpl"}
    {include file="$template/includes/tt/hostim/tt-testimonial.tpl"}
    {include file="$template/includes/tt/hostim/tt-account-link.tpl"}
{/if}
