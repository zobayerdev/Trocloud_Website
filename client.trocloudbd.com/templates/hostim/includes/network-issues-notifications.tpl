{if $openNetworkIssueCounts.open > 0}
    <div class="alert alert-warning alert-dismissible network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-exclamation-triangle fa-fw"></i>
            {lang key='networkIssuesAware'}
            <a href="{$WEB_ROOT}/serverstatus.php" class="alert-link float-lg-right">
                {lang key='learnmore'}
                <i class="far fa-arrow-right"></i>
            </a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
        </div>
    </div>
{elseif $openNetworkIssueCounts.scheduled > 0}
    <div class="alert alert-info alert-dismissible network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-info-circle fa-fw"></i>
            {lang key='networkIssuesScheduled'}
            <a href="{$WEB_ROOT}/serverstatus.php" class="alert-link float-lg-right">
                {lang key='learnmore'}
                <i class="far fa-arrow-right"></i>
            </a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span></button>
        </div>
    </div>
{/if}
