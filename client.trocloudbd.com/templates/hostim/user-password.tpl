<h3 class="card-title">{lang key='sidebars.viewAccount.changePassword'}</h3>

{include file="$template/includes/flashmessage.tpl"}

<div class="card tt-custom-card bg-gray-light">
    <div class="card-body">
        <form class="using-password-strength" method="post" action="{routePath('user-password')}" role="form">
            <input type="hidden" name="submit" value="true" />
            <div class="form-group">
                <label for="inputExistingPassword" class="col-form-label">{lang key='existingpassword'}</label>
                <input type="password" class="form-control" name="existingpw" id="inputExistingPassword" autocomplete="off" />
            </div>
            <div id="newPassword1" class="form-group has-feedback row">
                <div class="col-lg-8">
                    <label for="inputNewPassword1" class="col-form-label">{lang key='newpassword'}</label>
                    <input type="password" class="form-control" name="newpw" id="inputNewPassword1" autocomplete="off" />
                </div>
                <div class="col-lg-4">
                    <label for="inputNewPassword1" class="col-form-label">{lang key='generatePassword.btnLabel'}</label>
                    <button type="button" class="btn btn-default btn-block generate-password" data-targetfields="inputNewPassword1,inputNewPassword2">
                        <i class="fad fa-lock text-primary mr-2"></i>{lang key='generatePassword.btnLabel'}
                    </button>
                </div>
                <div class="col-12">
                    {include file="$template/includes/pwstrength.tpl"}
                </div>
            </div>
            <div id="newPassword2" class="form-group has-feedback">
                <label for="inputNewPassword2" class="col-form-label">{lang key='confirmnewpassword'}</label>
                <input type="password" class="form-control" name="confirmpw" id="inputNewPassword2" autocomplete="off" />
                <div id="inputNewPassword2Msg"></div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" value="{lang key='clientareasavechanges'}" />
            <input class="btn btn-default" type="reset" value="{lang key='cancel'}" />
        </form>

    </div>
</div>
