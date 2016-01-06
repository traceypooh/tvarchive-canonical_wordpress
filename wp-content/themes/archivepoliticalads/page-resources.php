<?php
/* Template Name: Resources
*/

?>
    <?php get_header(); ?>

        <div id="resources-header" class="row page-header-row">
            <div class="col-md-6">
                <h1 id="resources-header-title">Resources</h1>
                <p id="resources-header-description">Our partners and additional scholarly resources</p>
            </div>
        </div>

        <div id="partners-content" class="page-content">
            <div id="partner-logos" class="row page-content-row">
                <div class="col-xs-12 col-md-12">
                    <ul>
                        <?php 
					$partners = get_field('partners');
					if(sizeof($partners) == 0)
					{

					}
					else
					{
						foreach($partners as $partner)
						{
							?>
                            <li><img src='<?php echo($partner[' partner_logo ']['url ']);?>' class="logo" /></li>
                            <?php
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <div id="partner-description" class="row page-content-row">
                <div class="col-md-12">
                    <h2>OUR PARTNERS</h2>
                    <div>
                        <?php echo(get_field('partners_description')); ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="resources-subheader" class="row page-subheader-row">
            <div class="col-md-6">
                <h2>Resources</h2>
            </div>
        </div>
        <div id="resources-content" class="page-content row">
            <div coass="col-md-12">
                <?php 
			$resources = get_field('resources');
			if(sizeof($resources) > 0)
			{
				$resource = array_shift($resources);
				?>
                    <div id="featured-resource" class="row resource-row page-content-row">
                        <div class="col-md-12">
                            <div class="resource">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3 class="resource-name"><?php echo($resource['resource_name']); ?></h3>
                                        <div class="resource-description">
                                            <?php echo($resource['resource_description']); ?>
                                        </div>
                                        <div class="resource-link"><a href="<?php echo($resource['resource_link']); ?>" target="_blank">Visit</a></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src='<?php echo($resource[' resource_image ']['url ']);?>' class="resource-image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
			}

			while(sizeof($resources) > 0)
			{
				?>
                        <div class="row resource-row page-content-row">
                            <?php
					for($x = 0; $x < 3; $x++)
					{
						if(sizeof($resources) == 0)
							continue;
						$resource = array_shift($resources);
						?>
                                <div class="col-md-4">
                                    <div class="resource">
                                        <h3 class="resource-name"><?php echo($resource['resource_name']); ?></h3>
                                        <img src='<?php echo($resource[' resource_image ']['url ']);?>' class="resource-image" />
                                        <div class="resource-description">
                                            <?php echo($resource['resource_description']); ?>
                                        </div>
                                        <div class="resource-link"><a href="<?php echo($resource['resource_link']); ?>" target="_blank">Visit</a></div>
                                    </div>
                                </div>
                                <?php
					}
				?>
                        </div>
                        <?php
			}
		?>
            </div>
        </div>

        <?php get_footer(); ?>
