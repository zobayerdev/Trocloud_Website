<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card tt-custom-card bg-gray-light">
            <div class="card-body">

                <h3 class="card-title">{lang key='twofactorauth'}</h3>

                {include file="$template/includes/flashmessage.tpl" align="left"}

                {if $newbackupcode}
                    {include file="$template/includes/alert.tpl" type="success" msg="{lang key='twofabackupcodereset'}" textcenter=false}
                {elseif $incorrect}
                    {include file="$template/includes/alert.tpl" type="error" msg="{lang key='twofa2ndfactorincorrect'}" textcenter=false}
                {elseif $error}
                    {include file="$template/includes/alert.tpl" type="error" msg=$error textcenter=false}
                {else}
                    {include file="$template/includes/alert.tpl" type="warning" msg="{lang key='twofa2ndfactorreq'}" textcenter=false}
                {/if}

                <form method="post" action="{routePath('login-two-factor-challenge-verify')}" id="frmTwoFactorChallenge"{if $usingBackup} class="w-hidden"{/if}>
                    <div class="margin-bottom">
                        {$challenge}
                    </div>
                </form>

                <form method="post" action="{routePath('login-two-factor-challenge-backup-verify')}" id="frmTwoFactorBackup"{if !$usingBackup} class="w-hidden"{/if}>
                    <div class="margin-bottom">
                        <input type="text" name="twofabackupcode" class="form-control form-control-lg" placeholder="{lang key='twofabackupcodelogin'}">
                        <br/>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnLogin">
                            {lang key='loginbutton'}
                        </button>
                    </div>
                    <p class="text-center">
                        <a href="#" class="btn btn-default btn-block mt-2" id="backupCodeCancel">
                            {lang key='cancel'}
                        </a>
                    </p>
                </form>

            </div>
            <div class="card-footer px-md-5" id="frmTwoFactorChallengeFooter">
        <span>
            {lang key='twofacantaccess2ndfactor'}
            <a href="#" id="loginWithBackupCode">
                {lang key='twofaloginusingbackupcode'}
            </a>
        </span>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        jQuery('#loginWithBackupCode').click(function(e) {
            e.preventDefault();
            jQuery('#frmTwoFactorChallenge').hide();
            jQuery('#frmTwoFactorChallengeFooter').hide();
            jQuery('#frmTwoFactorBackup').show();
        });
        jQuery('#backupCodeCancel').click(function(e) {
            e.preventDefault();
            jQuery('#frmTwoFactorChallenge').show();
            jQuery('#frmTwoFactorChallengeFooter').show();
            jQuery('#frmTwoFactorBackup').hide();
        });
    });
</script>
