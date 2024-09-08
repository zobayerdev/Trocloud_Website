{if $smarty.server.HTTP_HOST == 'whmcs.themetags.com' && $hide != false}
<div class="allert-message-wrap">
    <div class="alert alert-warning alert-dismissible mb-0" role="alert">
        <div class="container text-center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            We are updating to <strong>WHMCS's</strong> version to <strong> 8.6.1</strong> You may experience with problems on some pages. It will be fixed after completing the version upgradation.
        </div>
    </div>
</div>
<style>
    /* alert message css */
    .allert-message-wrap .alert-warning{
        color: #32302c;
        background: #FFC107;
        border-color: #FFC107;
        position: fixed;
        width: 100%;
        z-index: 99;
        bottom: 0;
    }
</style>
{/if}