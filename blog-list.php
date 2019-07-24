<!-- Page Header -->
<style>
.intro-header{
height:120px;
margin-bottom:40px;
background-color:#333;
background-image: url('<?=gila::option('theme.header-image')?>');
opacity:0.8;
}
</style>
<header class="intro-header">
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="margin:auto">
            <?php foreach ($c->posts as $r) { ?>
            <div class="post-preview">
                <a href="<?=$r['id']?>">
                    <h2 class="post-title"><?=$r['title']?></h2>
                </a>
                <h3 class="post-subtitle"><?=nl2br(strip_tags($r['post']))?></h3>
                <p class="post-meta">Posted by <a href="/author/<?=$r['author_id']?>"><?=$r['author']?></a> on September 24, 2014</p>
            </div>
            <hr>
            <?php } ?>
            <?php if(blog::totalpages()>$page) { ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="?page=<?=($page+1)?>"><?=__('Older Posts')?> &rarr;</a>
                </li>
            </ul>
            <?php } ?>
            <?php if($page>1) { ?>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="?page=<?=($page-1)?>">&larr; <?=__('Newest Posts')?></a>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</div>
