<?php

/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on Shaz3e S3 Framework             ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

// restricted access
defined('_JEXEC') or die;

?>


<!--[if lt IE 9]>
    <div class="dc-broswer-alert">
    <p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> or <a href="http://www.google.com/chromeframe/?redirect=true"><strong>activate Google Chrome Frame</strong></a> to improve your experience.</p>
    </div>
<![endif]-->


<?php if($this->countModules('top-left-panel')) :?>
    <div class="top-left-panel">
        <div id="top-left-panel">
            <jdoc:include type="modules" name="top-left-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($this->countModules('top-right-panel')) :?>
    <div class="top-right-panel">
        <div id="top-right-panel">
            <jdoc:include type="modules" name="top-right-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($this->countModules('right-panel')) :?>
    <div class="right-panel">
        <div id="right-panel">
            <jdoc:include type="modules" name="right-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($this->countModules('bottom-right-panel')) :?>
    <div class="bottom-right-panel">
        <div id="bottom-right-panel">
            <jdoc:include type="modules" name="bottom-right-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($this->countModules('bottom-left-panel')) :?>
    <div class="bottom-left-panel">
        <div id="bottom-left-panel">
            <jdoc:include type="modules" name="bottom-left-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($this->countModules('left-panel')) :?>
    <div class="left-panel">
        <div id="left-panel">
            <jdoc:include type="modules" name="left-panel" style="shaz3e" />
        </div>
    </div>
<?php endif; ?>

<?php if($topModules || $gridTopModules): ?>
<section class="dc-top dc-clear" id="dc-top">
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="top" style="shaz3e" />
    
    <div class="row">
    
    	<?php 
			// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/top.php");
        	
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-top.php");
		?>
    </div>
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="top-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<div class="dc-fixed-header">
    <section class="dc-header dc-clear" id="dc-header">
        <div class="row">
        	
            <div class="dc-logo"><a href="<?php echo $this->baseurl; ?>"><?php echo $logo; ?></a></div>
            
			<?php
				// column
            	include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/header.php");
				
				// grid
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-header.php");
			?>
            
        </div>
    </section>


    <?php if($menuModules || $gridMenuModules):?>
    <section class="dc-menu dc-clear">
    	
        <?php // full width module ?>
        <jdoc:include type="modules" name="menu" style="shaz3e" />
        
        <div class="row" id="dc-menu">
        	<?php
				// column
            	include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/menu.php"); 
				
				// grid
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-menu.php");
			?>
        </div>
        
        <?php // full width module ?>
        <jdoc:include type="modules" name="menu-bottom" style="shaz3e" />
        
    </section>
    <?php endif; ?>
    
</div> <?php // header fixed ?>

<?php if($breadcrumbModules || $gridBreadcrumbModules): ?>
<section class="dc-breadcrumb dc-clear" id="dc-breadcrumb">

	<?php // full width module ?>
    <jdoc:include type="modules" name="breadcrumb" style="shaz3e" />

    <div class="row">
    <?php
    	// column
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/breadcrumb.php");
		
		// grid
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-breadcrumb.php");
	?>

    </div>
	
    <?php // full width module ?>
    <jdoc:include type="modules" name="breadcrumb-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>


<?php if($slideshowModules || $gridSlideshowModules): ?>
<section class="dc-slideshow dc-clear" id="dc-slideshows">
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="slideshow" style="shaz3e" />
    
    <div class="row">
	
    	<?php
        	// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/slideshow.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-slideshow.php");
		?>
        
    </div>
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="slideshow-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<?php if($showcaseModules || $gridShowcaseModules): ?>
<section class="dc-showcase dc-clear" id="dc-showcase">

	<?php // full width module ?>
    <jdoc:include type="modules" name="showcase" style="shaz3e" />
    
    <div class="row">
    	<?php
        	// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/showcase.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-showcase.php");
		?>
    </div>

	<?php // full width module ?>
    <jdoc:include type="modules" name="showcase-bottom" style="shaz3e" />

</section>
<?php endif; ?>

<?php if($featureModules || $gridFeatureModules || $bottomFeatureModules || $gridBottomFeatureModules): ?>
<section class="dc-feature dc-clear" id="dc-feature">
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="feature" style="shaz3e" />
    
    
    <div class="row">
    
		<?php
        	if($featureModules || $gridFeatureModules):
			
				// column
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/feature.php");
				
				// grid
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-feature.php");
			
				echo '<div class="dc-clear"></div>';
			endif;
			
			if($bottomFeatureModules || $gridBottomFeatureModules):
			
				// column
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom-feature.php");

				// grid
				include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-bottom-feature.php");
				
			endif;
		?>
    </div>

	<?php // ful width module ?>
    <jdoc:include type="modules" name="feature-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<?php 

    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    $lang = JFactory::getLanguage();
    if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
        if($this->params->get('showMainBody')){
            include_once(JPATH_ROOT . "/templates/" . $this->template . "/layout/layout.php"); 
        }
    }else{
        include_once(JPATH_ROOT . "/templates/" . $this->template . "/layout/layout.php"); 
    }

?>

<?php if($utilityModules || $gridUtilityModules): ?>
<section class="dc-utility dc-clear" id="dc-utility">
	
    <?php // full width module ?>
    <jdoc:include type="modules" name="utility" style="shaz3e" />
    
    <div class="row">
    	<?php
        	// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/utility.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-utility.php");
		?>
    </div>
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="utility-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<?php if($scrollerModules || $gridScrollerModules): ?>
<section class="dc-scroller dc-clear" id="dc-scroller">

	<?php // full width module ?>
    <jdoc:include type="modules" name="scroller" style="shaz3e" />
    <div class="row">
    	<?php
			// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/scroller.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-scroller.php");
		?>
    </div>
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="scroller-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<?php if($extensionModules || $gridExtensionModules): ?>
<section class="dc-extension dc-clear" id="dc-extension">

	<?php // full width module ?>
    <jdoc:include type="modules" name="extension" style="shaz3e" />
    
    <div class="row">
    <?php
    
		// column
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/extension.php");
		
		// grid
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-extension.php");
	?>

    </div>
    
	<?php // full width module ?>
    <jdoc:include type="modules" name="extension-bottom" style="shaz3e" />
    
</section>
<?php endif; ?>

<?php if($bottomModules || $gridBottomModules): ?>
<section class="dc-bottom dc-clear" id="dc-bottom">

	<?php // full width module ?>
    <jdoc:include type="modules" name="bottom" style="shaz3e" />
    <div class="row">
    <?php
    	// column
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom.php");
		
		// grid
		include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-bottom.php");
	?>
    </div>
    
    <?php // full width module ?>
    <jdoc:include type="modules" name="bottom-bottom" style="shaz3e" />
	
</section>
<?php endif; ?>

<?php if($footerModules || $gridFooterModules || $bottomFooterModules || $gridBottomFooterModules): ?>
<footer class="dc-footer dc-clear" id="dc-footer">

	<?php // full width module ?>
    <jdoc:include type="modules" name="footer" style="shaz3e" />
    
    <div class="row">
    
	<?php
    	if($footerModules || $gridFooterModules):
		
			// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/footer.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-footer.php");
		
			echo '<div class="dc-clear"></div>';
		
		endif;
		
		if($bottomFooterModules || $gridBottomFooterModules):
		
			// column
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/bottom-footer.php");
			
			// grid
			include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/grid-bottom-footer.php");
		endif;
	?>

    </div>
    
	<?php // full width module ?>
    <jdoc:include type="modules" name="footer-bottom" style="shaz3e" />
    
</footer>
<?php endif; ?>

<?php 
	// copyright / credit / framework logo / style switch
	include_once(JPATH_ROOT . "/templates/" . $this->template . "/blocks/credit.php"); 
?>

<?php if($this->params->get('fixedHeader')): ?>
	<style type="text/css">
	@media (min-width: 980px) {
		.dc-fixed{position:fixed;}
		.dc-fixed-header{
			margin:0 !important;
			top:0;
			display:block;
			width:100%;
			z-index:9999;
		}
	}
	</style>
	<script>
		var dcHeader = $(window);
		var dcHeaderPosition = dcHeader.scrollTop();
		var up = false;
		var newscroll;
		dcHeader.scroll(function () {
			newscroll = dcHeader.scrollTop();
			if (newscroll > dcHeaderPosition && !up && newscroll > <?php if($this->params->get('fixedHeaderSize')){echo $this->params->get('fixedHeaderSize');}else{echo 100;} ?>) {
				$('.dc-fixed-header').stop().slideUp();
				up = !up;
				console.log(up);				
			} else if(newscroll < dcHeaderPosition && up) {
				$('.dc-fixed-header').stop().slideDown();
				up = !up;
			}
			dcHeaderPosition = newscroll;
		});
		
		var  dcFixedHeader = $('.dc-fixed-header');
			dcFixed = "dc-fixed";

		$(window).scroll(function() {
			if( $(this).scrollTop()) {
				dcFixedHeader.addClass(dcFixed);
			}else{
				dcFixedHeader.removeClass(dcFixed);
			}
		});

	</script>
<?php endif; ?>