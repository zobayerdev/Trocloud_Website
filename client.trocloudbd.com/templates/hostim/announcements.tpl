<h2 class="card-title">{lang key="announcementstitle"}</h2>

<div class="announcements tt-news-wrap bg-white rounded mb-3">
    {foreach $announcements as $announcement}
        <div class="announcement tt-news-single p-4">
            <h2 class="h6">
                <a href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}">
                    {$announcement.title}
                </a>
                {if $announcement.editLink}
                    <a href="{$announcement.editLink}" class="tt-read-more text-muted">
                        <i class="fad fa-pencil-alt fa-fw"></i>
                        {lang key='edit'}
                    </a>
                {/if}
            </h2>

            <ul class="list-inline">
                <li class="list-inline-item text-muted pr-3">
                    <i class="fad fa-calendar-alt fa-fw"></i>
                    {$carbon->createFromTimestamp($announcement.timestamp)->format('jS F Y')}
                </li>
            </ul>

            <article>
                {if $announcement.text|strip_tags|strlen < 350}
                    {$announcement.text}
                {else}
                    {$announcement.summary}
                {/if}
            </article>

            <a href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" class="tt-read-more">
                {lang key="announcementscontinue"}
                <i class="fad fa-arrow-right"></i>
            </a>
        </div>
        {foreachelse}
        {include file="$template/includes/alert.tpl" type="info" msg="{lang key='noannouncements'}" textcenter=false}
    {/foreach}
</div>

{if $prevpage || $nextpage}
    <nav aria-label="Announcements navigation">
        <ul class="pagination">
            {foreach $pagination as $item}
                <li class="page-item{if $item.disabled} disabled{/if}{if $item.active} active{/if}">
                    <a class="page-link" href="{$item.link}">{$item.text}</a>
                </li>
            {/foreach}
        </ul>
    </nav>
{/if}

{if $announcementsFbRecommend}
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/{lang key='locale'}/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
{/if}
