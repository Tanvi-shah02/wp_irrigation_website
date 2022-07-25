<?php
/**
 * Template Name: valuable_award
 */
?>
<?php get_header(); ?>

<?php
//$month = (isset($_GET['month']) && ($_GET['month'] > 0 && $_GET['month'] <= 12)) ? $_GET['month'] : 0;
$year = (isset($_GET['y']) && $_GET['y'] > 0) ? $_GET['y'] : 0;

$args = array(
    's' => (!empty($_REQUEST["search"])?$_REQUEST["search"]:''),
    'post_type'  => 'value_able_award' ,
    'orderby' => array(
        'date' =>'DESC',
    ),
    'posts_per_page'      => -1,

);

if($year > 0) {
    $args['date_query'] = array(
        array(
            'year'  => $year,
            //'month' => $month,
        )
    );
}

$employee = new WP_Query( $args );
//echo "<pre>"; print_r($employee); die;
?>

<div class="pageheaing-wrapper py-2 py-md-5">

    <?php $banner = get_cfc_field('tagline', 'banner'); ?>
    <div class="pageheading-image <?php echo empty($banner) ? 'no-image' : ''; ?>" >
        <?php
        if(!empty($banner)){ ?>
            <img class="pagehead_img" src="<?php the_cfc_field('tagline', 'banner'); ?>" alt="pageheader">
        <?php } ?>
    </div>

    <div class="container-xl">
        <div class="page-heading">
            <h2 class="text-dark m-0">
                <?php wp_title(''); ?>
            </h2>
        </div>
    </div>
</div>


<div class="news-inner-wrap pt-4">
    <div class="container-xl">
        <div class="entry-content service-content">
        <form name="form" action="" method="get">
            <div class="row mb-4">
                <!--<div class="col-md-4">
                    <label for="month">Month:</label>
                    <select class="form-control" name="month" id="month">
                        <option value="">Select Month</option>
                        <?php /*$month_names = array("January","February","March","April","May","June","July","August","September","October","November","December"); */?>
                        <?php /*foreach ($month_names as $key => $month_name) { */?>
                            <option <?php /*echo ($month == ($key + 1)) ? 'selected' : ''; */?> value="<?php /*echo ($key + 1); */?>"><?php /*echo $month_name; */?></option>
                        <?php /*} */?>
                    </select>
                </div>-->

                <div class="col-md-4">
                    <!--<label for="year">Year:</label>-->
                    <select class="form-control form-control-lg custom-select" name="y" id='date-dropdown'>
                        <option value="">Select Year</option>
                        <?php for($i = date('Y'); $i >= 2000; $i--){ ?>
                            <option <?php echo ($year == $i) ? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Submit" class="btn btn-outline-primary btn-custom-sm">
                </div>
            </div>

        </form>
        </div>
    </div>
</div>
        <?php $mypage = get_query_var("image");
        echo $mypage; ?>

<div class="news-inner-wrap pt-4"> 
    <div class="container-xl">
        <div class="row">

                <?php
                    
                if ($employee->have_posts()) {
                    while($employee->have_posts()){
                        $employee->the_post();
                        //echo $post->ID;
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="news-item wow fadeInUp h-100">
                                <div class="card border-0 shadow h-100 mb-3">
                                        <div class="news-image">
                                            <a  href="<?php echo get_the_post_thumbnail_url();?>" target="_blank">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'medium' ,array( 'class' => 'card-img-top' )); ?>
                                            </a>
                                        </div>
                                    <?php
                                    $categories = get_the_terms($post->ID, 'valueable_award');
                                    //echo $categories; 
                                     if ( ! empty( $categories ) ) {
                                         ?>
                                     	<h5 align="center"><?php echo $categories[0]->name; ?></h5>
                                     <?php } ?>
                                     <?php $postImage = get_the_post_thumbnail_url();
                                        
                                          //echo basename($postImage)
                                         //echo $postImage . "\n";   
                                     ?>
                                     
                                     <a align="center" href="<?php echo $postImage?>" download="<?php echo basename($postImage) ?>">Download</a>
                                </div>
                            </div>
                      </div>      
                    <?php }}else{ ?>
                    <h4> No data found.</h4>
                    <?php   } ?>
                
            
    
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
    jQuery( window ).on( "load", function() {
        console.log('test');
        //jQuery("#month").val(jQuery("#month option:first").val());
        //jQuery("#date-dropdown").val(jQuery("#date-dropdown option:first").val());
    });
</script>
