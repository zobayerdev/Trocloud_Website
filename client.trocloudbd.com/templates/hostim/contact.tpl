<div class="row align-items-center">
    <div class="col-lg-6">
        <div class="tt-contact-form ptb-60">
            {if $sent}
                {include file="$template/includes/alert.tpl" type="success" msg="{lang key='contactsent'}" textcenter=true}
            {/if}

            {if $errormessage}
                {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
            {/if}

            {if !$sent}
                <form method="post" action="contact.php" role="form">
                    <input type="hidden" name="action" value="send" />

                    <div class="form-group row">
                        <div class="col-12 col-md-6">
                            <label for="inputName" class="">{lang key='supportticketsclientname'}</label>
                            <input type="text" name="name" value="{$name}" class="form-control" id="inputName" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="inputEmail" class="">{lang key='supportticketsclientemail'}</label>
                            <input type="email" name="email" value="{$email}" class="form-control" id="inputEmail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject" class="">{lang key='supportticketsticketsubject'}</label>
                        <input type="text" name="subject" value="{$subject}" class="form-control" id="inputSubject" />
                    </div>
                    <div class="form-group">
                        <label for="inputMessage" class="">{lang key='contactmessage'}</label>
                        <textarea name="message" rows="7" class="form-control" id="inputMessage">{$message}</textarea>
                    </div>

                    {if $captcha}
                        <div class="margin-bottom">
                            {include file="$template/includes/tt/hostim/tt-captcha.tpl"}
                        </div>
                    {/if}

                    <button type="submit" class="btn btn-primary{$captcha->getButtonClass($captchaForm)}">{lang key='contactsend'}</button>
                </form>

            {/if}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="tt-contact-info">
            <img src="{$WEB_ROOT}/templates/{$template}/img/tt-contact-us.svg" class="img-fluid" alt="support image">
        </div>
    </div>
</div>
