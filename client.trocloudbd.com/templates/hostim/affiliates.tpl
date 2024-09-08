{if $inactive}

    {include file="$template/includes/alert.tpl" type="danger" msg="{lang key='affiliatesdisabled'}" textcenter=true}

{else}
    {include file="$template/includes/flashmessage.tpl"}
    {if $withdrawrequestsent}
        <div class="alert alert-success">
            <i class="fas fa-check fa-fw"></i>
            {lang key='affiliateswithdrawalrequestsuccessful'}
        </div>
    {/if}

    <div class="row">

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green bg-danger-light mb-2">
                <i class="fal fa-users"></i>
                <span>{$visitors}</span>
                <small>{lang key='affiliatesclicks'}</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green bg-primary-light mb-2">
                <i class="fal fa-sign-in-alt"></i>
                <span>{$signups}</span>
                <small>{lang key='affiliatessignups'}</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="affiliate-stat affiliate-stat-green bg-success-light mb-2">
                <i class="fal fa-chart-bar"></i>
                <span>{$conversionrate}%</span>
                <small>{lang key='affiliatesconversionrate'}</small>
            </div>
        </div>

    </div>

    <div class="card my-3">
        <div class="card-body">

            <h5 class="h6">{lang key='affiliatesreferallink'}</h5>
            <input type="text" class="form-control" readonly="readonly" value="{$referrallink}">

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-rounded">
                <tr>
                    <td class="text-right">{lang key='affiliatescommissionspending'}:</td>
                    <td><strong>{$pendingcommissions}</strong></td>
                </tr>
                <tr>
                    <td class="text-right">{lang key='affiliatescommissionsavailable'}:</td>
                    <td><strong>{$balance}</strong></td>
                </tr>
                <tr>
                    <td class="text-right">{lang key='affiliateswithdrawn'}:</td>
                    <td><strong>{$withdrawn}</strong></td>
                </tr>
            </table>
        </div>
    </div>

    {if !$withdrawrequestsent}
        <a href="{$smarty.server.PHP_SELF}?action=withdrawrequest" class="mb-3 btn btn-lg btn-danger{if !$withdrawlevel} disabled" disabled="disabled{/if}">
            <i class="far fa-money-check-alt"></i> {lang key='affiliatesrequestwithdrawal'}
        </a>
        {if !$withdrawlevel}
            <p class="text-muted">{lang key="affiliateWithdrawalSummary" amountForWithdrawal=$affiliatePayoutMinimum}</p>
        {/if}
    {/if}

    <h2 class="h5">{lang key='affiliatesreferals'}</h2>

    {include file="$template/includes/tablelist.tpl" tableName="AffiliatesList"}
    <script>
        jQuery(document).ready(function() {
            var table = jQuery('#tableAffiliatesList').show().DataTable();

            {if $orderby == 'regdate'}
                table.order(0, '{$sort}');
            {elseif $orderby == 'product'}
                table.order(1, '{$sort}');
            {elseif $orderby == 'amount'}
                table.order(2, '{$sort}');
            {elseif $orderby == 'status'}
                table.order(4, '{$sort}');
            {/if}
            table.draw();
            jQuery('#tableLoading').hide();
        });
    </script>
    <div class="table-container clearfix">
        <table id="tableAffiliatesList" class="table table-list w-hidden">
            <thead>
                <tr>
                    <th>{lang key='affiliatessignupdate'}</th>
                    <th>{lang key='orderproduct'}</th>
                    <th>{lang key='affiliatesamount'}</th>
                    <th>{lang key='affiliatescommission'}</th>
                    <th>{lang key='affiliatesstatus'}</th>
                </tr>
            </thead>
            <tbody>
            {foreach $referrals as $referral}
                <tr class="text-center">
                    <td><span class="w-hidden">{$referral.datets}</span>{$referral.date}</td>
                    <td>{$referral.service}</td>
                    <td data-order="{$referral.amountnum}">{$referral.amountdesc}</td>
                    <td data-order="{$referral.commissionnum}">{$referral.commission}</td>
                    <td><span class='label status status-{$referral.rawstatus|strtolower}'>{$referral.status}</span></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <div class="text-center" id="tableLoading">
            <p><i class="fas fa-spinner fa-spin"></i> {lang key='loading'}</p>
        </div>
    </div>

    {if $affiliatelinkscode}
        <h2 class="h5">{lang key='affiliateslinktous'}</h2>
        <div class="margin-bottom text-center">
            {$affiliatelinkscode}
        </div>
    {/if}

{/if}
