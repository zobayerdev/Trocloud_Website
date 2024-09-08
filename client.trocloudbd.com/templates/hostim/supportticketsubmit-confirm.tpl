<h3 class="card-title">{lang key="createNewSupportRequest"}</h3>
<div class="card tt-custom-card bg-success-light">
    <div class="card-body p-5">
        <div class="text-center">
            <p><i class="fad fa-check-circle text-success h2"></i></p>
            <strong>
                {lang key='supportticketsticketcreated'}
                <a id="ticket-number" href="viewticket.php?tid={$tid}&amp;c={$c}" class="alert-link">#{$tid}</a>
            </strong>
            <p>{lang key='supportticketsticketcreateddesc'}</p>

            <a href="viewticket.php?tid={$tid}&amp;c={$c}" class="btn btn-primary">
                {lang key='continue'}
                <i class="fad fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
