var isSelectmenu = '';

jQuery(document).ready(function(){
/* Верхнее меню */

/* По кнопке Escape скрываем выпадающие меню */
	jQuery(window).keydown(function(event){ 
		if(event.keyCode == 27) hideSubMenu(); 
	});
	
/* Клик по меню */
	jQuery('.topMenu > div[class!="static_menu2"][class!="static_menu"]').click(function(){
		isSelectmenu = jQuery(this).attr('class').indexOf('select');
		hideSubMenu();
		jQuery(this).addClass('select').find('> div').css('display', 'block');
		if(isSelectmenu === -1) jQuery(this).addClass('select').find('> div').css('display', 'block');
		else jQuery(this).removeClass('select').find('> div').css('display', 'none');
	});
	
/* click по любой части экрана*/
	jQuery(window).click(function(e){
		jQuery(e.target).parent().find('.topMenu, .topSubMenu, .topSubMenuRight').html() == null ? hideSubMenu() : ''; 
		jQuery(e.target).parents().find('.level3, .level4').html() == null ? hideLeftSubMenu(this) : ''; 
	});
	
	

	
/* Левое меню */

	var href = location.href.substr(location.href.indexOf('/ua'));
	jQuery('.leftMenu a[href="'+href+'"]').parents('.level2').slideToggle("slow").parent().addClass('active');
	
	var isActiv = true;

	jQuery('.leftMenu ul li').click(function(e){
		
		var isLevel1 = jQuery(this).parent().attr('class') == 'level1' ? true : false;

		var isActiveLi = jQuery(this).hasClass('active') ? true : false;

		if(isLevel1 && isActiv) jQuery(this).removeClass('active').find('ul').slideUp("slow");
		
		if(isActiv && !isActiveLi) jQuery(this).addClass('active').find(' > ul').slideToggle('slow');
		
		isActiv = (isLevel1 && isActiv) ? true : false;
	});

	jQuery('.leftMenu ul li > a').click(function(e){
		var isParent = jQuery(this).parent('li').hasClass('menu-item-has-children') ? true : false;

		if (isParent) e.preventDefault();

	});
	
/* Затемняем экран когда мышка на 3 или 4 уровне меню*/
	jQuery('.leftMenu .level3, .leftMenu .level4').hover(function(){
		hideSubMenu();
		jQuery('.bgMenu').css({'width': '100%','height':'100%; position: fixed;'}).animate({ opacity: 0.5 }, 300);
	},
	function(){
		jQuery('.bgMenu').animate({ opacity: 0 },300, function(){jQuery('.bgMenu').css({'width':'0px','height':'0px'})});
	});
	
/* Во 2 и 3 уровне меню показываем подменю */
	jQuery('.leftMenu .level2 > li, .leftMenu .level3 > li').hover(function(){
			jQuery(this).find('> ul').addClass('active');
	},function(){
			hideLeftSubMenu(this);
	});
	
	function hideLeftSubMenu(obj){ jQuery(obj).parent().find('> li > ul').removeClass('active'); }
});

/* Скрываем верхнее суб меню */
function hideSubMenu()
{
	jQuery('.topMenu > div').removeClass('select').find('> div').css('display', 'none');
}