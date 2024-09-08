<div class="p-lg-5 p-md-5 p-3 bg-gray-light tt-rounded mb-4">
    <form role="form" method="post" action="{routePath('download-search')}">
        <div class="input-group kb-search tt-kb-search">
            <div class="tt-search-field">
                <i class="far fa-search text-primary"></i>
                <input type="text" name="search" id="inputDownloadsSearch" class="form-control font-weight-light" placeholder="{lang key='downloadssearch'}" />
            </div>
            <button type="submit" id="btnDownloadsSearch" class="btn btn-primary btn-input-padded-responsive">
                {lang key='search'}
            </button>
        </div>
    </form>
</div>

{if $dlcats}
    <div class="row">
        {foreach $dlcats as $category}
            <div class="col-xl-6">
                <div class="card kb-category mb-4">
                    <a href="{routePath('download-by-cat', {$category.id}, {$category.urlfriendlyname})}" class="card-body">
                        <span class="h6 m-0">
                            <i class="far fa-folder fa-fw"></i>
                            {$category.name}
                            <span class="badge bg-primary-light float-right">
                                {lang key="downloads.numDownload{if $kbcat.numarticles != 1}s{/if}" num=$category.numarticles}
                            </span>
                        </span>
                        <p class="m-0 text-muted">{$category.description}</p>
                    </a>
                </div>
            </div>
        {/foreach}
    </div>
{else}
    {include file="$template/includes/alert.tpl" type="info" msg="{lang key='downloadsnone'}" textcenter=true}
{/if}

{if $mostdownloads}
    <div class="card">
        <div class="card-body">
            <h3 class="card-title m-0">
                <i class="fal fa-star fa-fw"></i>
                {lang key='downloadspopular'}
            </h3>
        </div>
        <div class="list-group list-group-flush">
            {foreach $mostdownloads as $download}
                <a href="{$download.link}" class="list-group-item kb-article-item">
                    {$download.type|replace:'alt':' class="pr-1" alt'}
                    {$download.title}
                    {if $download.clientsonly}
                        <div class="float-md-right">
                            <span class="label label-danger">
                                <i class="fas fa-lock fa-fw"></i>
                                {lang key='restricted'}
                            </span>
                        </div>
                    {/if}
                    <small>
                        {$download.description}
                        <br>
                        <strong>{lang key='downloadsfilesize'}: {$download.filesize}</strong>
                    </small>
                </a>
            {/foreach}
        </div>
    </div>
{/if}
