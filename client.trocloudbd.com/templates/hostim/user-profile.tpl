{include file="$template/includes/flashmessage.tpl"}

<h3 class="card-title">{lang key='userProfile.profile'}</h3>
<div class="card tt-custom-card bg-gray-light mb-4">
    <div class="card-body">
        <form method="post" action="{routePath('user-profile-save')}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputFirstName" class="col-form-label">
                            {lang key='clientareafirstname'}
                        </label>
                        <input
                            type="text"
                            name="firstname"
                            id="inputFirstName"
                            value="{$user->firstName}"
                            class="form-control"
                            {if in_array('firstname', $uneditableFields)}disabled="disabled"{/if}
                        >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputLastName" class="col-form-label">
                            {lang key='clientarealastname'}
                        </label>
                        <input
                            type="text"
                            name="lastname"
                            id="inputLastName"
                            value="{$user->lastName}"
                            class="form-control"
                            {if in_array('lastname', $uneditableFields)}disabled="disabled"{/if}
                        >
                    </div>
                </div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" name="save" value="{lang key='clientareasavechanges'}" />
            <input class="btn btn-default" type="reset" value="{lang key='cancel'}" />
        </form>

    </div>
</div>

<h3 class="card-title">{lang key='userProfile.changeEmail'}</h3>
<div class="card tt-custom-card bg-gray-light">
    <div class="card-body">
        <span>
            {if $user->needsToCompleteEmailVerification()}
                <span class="label label-default">{lang key='userProfile.notVerified'}</span>
            {elseif $user->emailVerified()}
                <span class="label label-success">{lang key='userProfile.verified'}</span>
            {/if}
        </span>

        <form method="post" action="{routePath('user-profile-email-save')}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail" class="col-form-label">
                            {lang key='clientareaemail'}
                        </label>
                        <input
                            type="email"
                            name="email"
                            id="inputEmail"
                            value="{$user->email}"
                            class="form-control"
                            {if in_array('email', $uneditableFields)}disabled="disabled"{/if}
                        >
                    </div>
                </div>
            </div>
            <input class="btn btn-primary mr-2" type="submit" name="save" value="{lang key='clientareasavechanges'}" />
            <input class="btn btn-default" type="reset" value="{lang key='cancel'}" />
        </form>

    </div>
</div>
