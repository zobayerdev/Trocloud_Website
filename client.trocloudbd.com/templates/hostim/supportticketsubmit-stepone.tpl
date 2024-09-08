<h3 class="card-title mb-2">{lang key="createNewSupportRequest"}</h3>
<p class="text-muted">{lang key='supportticketsheader'}</p>
{foreach $departments as $num => $department}
    <div class="card tt-custom-card bg-gray-light tts-support-department mb-3">
        <div class="card-body">
            <h6>
                <a href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$department.id}">
                    <i class="fad fa-ticket"></i>
                    &nbsp;{$department.name}
                </a>
            </h6>
            {if $department.description}
                <p class="text-muted">{$department.description}</p>
            {/if}
            <a href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$department.id}" class="tt-read-more">
                Open Ticket <i class="fad fa-angle-right ml-2"></i>
            </a>
        </div>
    </div>
    {foreachelse}
    {include file="$template/includes/alert.tpl" type="info" msg="{lang key='nosupportdepartments'}" textcenter=true}
{/foreach}