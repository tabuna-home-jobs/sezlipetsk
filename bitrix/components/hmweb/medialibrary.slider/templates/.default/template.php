<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(count($arResult["ITEMS"]) > 0):?>
<div class="medialibslider-wrapper">
	<div class="medialibslider"<?=($arParams["CAROUSEL_RTL"])?' dir="rtl"':''?>>
		<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if($arParams["USE_THUMB_IMG"] && ($arItem["FULL_IMG"]["WIDTH"] > $arParams["THUMB_IMG_WIDTH"] || $arItem["FULL_IMG"]["HEIGHT"] > $arParams["THUMB_IMG_HEIGHT"])):?>
			<li><img src="<?=$arItem["THUMB_IMG"]["SRC"]?>" width="<?=$arItem["THUMB_IMG"]["WIDTH"]?>" height="<?=$arItem["THUMB_IMG"]["HEIGHT"]?>" /></li>
		<?else:?>
			<li><img src="<?=$arItem["FULL_IMG"]["SRC"]?>" width="<?=$arItem["FULL_IMG"]["WIDTH"]?>" height="<?=$arItem["FULL_IMG"]["HEIGHT"]?>" /></li>
		<?endif?>
		<?endforeach?>
		</ul>
	</div>
	<a href="#" class="medialibslider-control-prev">&lsaquo;</a>
	<a href="#" class="medialibslider-control-next">&rsaquo;</a>
<?if($arParams["USE_PAGINATION"]):?>
	<p class="medialibslider-pagination"></p>
<?endif?>
</div>
<script type="text/javascript">
(function($){
	$(function(){
		var jcarousel = $('.medialibslider');

		jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 600) {
                    width = width / <?=$arResult["COUNT_ELEMENT_DEFAULT"]?>;
                } else if (width >= 350) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: '<?=$arResult["CAROUSEL_WRAP"]?>',
            })
            .jcarouselAutoscroll({
	            interval: <?=($arResult["AUTOSCROLL_INTERVAL"])?$arResult["AUTOSCROLL_INTERVAL"]:'3000'?>,
	            target: '+=1',
	            autostart: <?=($arParams["USE_AUTOSCROLL"])?'true':'false'?>
	        });

        $('.medialibslider-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.medialibslider-control-next')
            .jcarouselControl({
                target: '+=1'
            });

    <?if($arParams["USE_PAGINATION"]):?>
    	$('.medialibslider-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    <?endif?>

	});
})(jQuery);
</script>
<?endif?>