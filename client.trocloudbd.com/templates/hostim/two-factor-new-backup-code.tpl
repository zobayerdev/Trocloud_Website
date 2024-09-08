<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card tt-custom-card bg-gray-light">
            <div class="card-body">

                <h3 class="card-title">{lang key='twofactorauth'}</h3>

                {include file="$template/includes/alert.tpl" type="success" msg="{lang key='twofabackupcodereset'}" textcenter=false}

                <h6>{lang key='twofanewbackupcodeis'}</h6>

                <div class="alert alert-warning h6">
                    {$newBackupCode}
                </div>

                <p>{lang key='twofabackupcodeexpl'}</p>

                <a href="{routePath('clientarea-home')}" class="btn btn-primary">
                    {lang key='continue'} <i class="fad fa-angle-right ml-2"></i>
                </a>

            </div>
        </div>
    </div>
</div>