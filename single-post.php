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

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="margin:auto">
                <div class="post-heading">
                    <h1><?=$title?></h1>
                    <span class="meta"><?=__('Posted on')?> <?=date('F j, Y',strtotime($updated))?></span>
                </div>
                <?=$text?>
            </div>
        </div>
    </div>
</article>
