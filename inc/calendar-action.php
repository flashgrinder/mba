<?php
add_action('wp_ajax_get_event', 'get_event');
add_action('wp_ajax_nopriv_get_event', 'get_event');

function get_event() {
	$query_data = $_GET;
	$idPosts = explode(",", $query_data['idPosts']);

    $arrayEventsPopup = new WP_Query( array(
       'post_type' => 'events',
       'posts_per_page' => -1,
       'post__in' => $idPosts,
    ));

    if ( $arrayEventsPopup->have_posts() ) :
        ?>
        <span class="calendar__popup-cross">
            <svg class="calendar__popup-close" width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 30.7017L32 1.00003" stroke="white" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 1.29785L32 30.9995" stroke="white" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 1.29785L32 30.9995" stroke="white" stroke-opacity="0.75" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
        <div class="calendar__popup-list">
            <?php while ( $arrayEventsPopup->have_posts() ) : $arrayEventsPopup->the_post(); ?>
                <div class="calendar__popup-item">
                    <p class="calendar__popup-title text text--blue text--w-light center">
                        <?php the_field('date_text') ?>
                    </p>
                    <div class="calendar__popup-text text text--large text--white text--w-light">
                        <?php the_field('desc') ?>
                    </div>
                    <div class="calendar__popup-bot">
                        <p class="calendar__popup-location text text--small text--white-low-45 text--w-light">
                            <?php the_field('location') ?>
                        </p>
                        <span class="calendar__popup-time text text--small text--white-low-45 text--w-light">
                            <?php the_field('time') ?>
                        </span>
                    </div>
                    <div class="calendar__popup-link-wrapp">
                        <a href="<?php the_permalink() ?>" class="calendar__popup-link text text--small text--white-low-45 text--w-light">
                            Подробнее >
                        </a>
                    </div>

                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php endif;

	die();
};



add_action('wp_ajax_get_event_day', 'get_event_day');
add_action('wp_ajax_nopriv_get_event_day', 'get_event_day');

function get_event_day() {
	$query_data = $_GET;
    $dataFilterCat = ($query_data['dataFilterCat']) ? explode(',',$query_data['dataFilterCat']) : false;
    $dataFilterTime = ($query_data['dataFilterTime']) ? explode(',',$query_data['dataFilterTime']) : false;
	$year = ($query_data['year']) ? explode(',',$query_data['year']) : false;
    $tax_query = array('relation' => 'AND',);
    $meta_query = array('relation' => 'AND',);


	$dataTime_query = array('relation' => 'OR');
    $today = date("m.d.y");

	if ($year) {
		$start = $year[0] . '-01-01';
		$end =  $year[0] . '-12-31';
		$bet = array(
			'key' => 'date',
			'value' => array($start, $end),
			'compare' => 'BETWEEN',
			'type' => 'DATE'
		);
		array_push($meta_query, $bet);
	} else {
		if ($dataFilterTime) {
			foreach ($dataFilterTime as $key => $value) {
				$bet = array(
			        'key' => 'date',
					'value' => date("Y-m-d"),
					'compare' => $value,
					'type' => 'DATE'
			    );
				array_push($dataTime_query, $bet);
			}
			array_push($meta_query, $dataTime_query);
		}
	}

    if ($dataFilterCat) {
		$bet = array(
	        'taxonomy' => 'events-category',
	        'field' => 'id',
	        'terms' => $dataFilterCat,
	    );
		array_push($tax_query, $bet);
	}



    $arrayEvents = new WP_Query( array(
      'post_type' => 'events',
       'posts_per_page' => -1,
       'tax_query' =>$tax_query,
	   'meta_query' => $meta_query,
   ));

    $dateEvents = [];
    if ( $arrayEvents->have_posts() ) :
        while ( $arrayEvents->have_posts() ) : $arrayEvents->the_post();
			$date = get_field('date');
			$id = get_the_ID();
			if (array_key_exists($date, $dateEvents)) {
				$dateEvents[$date] .= ',' . strval($id) ;
			} else {
				$dateEvents[$date] = strval($id);
			}
        endwhile;
        wp_reset_postdata();
    endif;
	if ($year) {
		echo Calendar::getInterval('01.'.$year[0], '12.'.$year[0], $dateEvents);
	} else {
        $startDate = date('n.Y', strtotime("last month"));
        $endDate = date('n.Y', mktime(0, 0, 0, date("m") + 10, 15, date("Y")));
        echo Calendar::getInterval($startDate, $endDate, $dateEvents);
	}

    // $startDate = date('n.Y', strtotime("last month"));
    // echo Calendar::getInterval($startDate, date('n.Y', strtotime('+10 month')), $dateEvents);

	die();
}




add_action('wp_ajax_get_past_event', 'get_past_event');
add_action('wp_ajax_nopriv_get_past_event', 'get_past_event');

function get_past_event() {
	$query_data = $_GET;
    $dataFilterCat = ($query_data['dataFilterCat']) ? explode(',',$query_data['dataFilterCat']) : false;
	$paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;

    $tax_query = array('relation' => 'AND',);


    if ($dataFilterCat) {
		$bet = array(
	        'taxonomy' => 'events-category',
	        'field' => 'id',
	        'terms' => $dataFilterCat,
	    );
		array_push($tax_query, $bet);
	}

	$per_page = 10;
    $arrayEvents = new WP_Query( array(
		'post_type' 	   => 'events',
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'       	   => 'DESC',
		'suppress_filters' => true,
		'posts_per_page'   => $per_page,
		'paged' 		   => $paged,
		'meta_query'  	   => array(
			array(
				'key' => 'date',
				'value' => date("Y-m-d"),
				'compare' => '<=',
				'type' => 'DATE'
			)
		),
		'orderby'		   => 'meta_value',
		'order'   		   => 'ASC',
		'tax_query'		   => $tax_query,
   ));


    if ( $arrayEvents->have_posts() ) :
		?><div class="events__items"><?php
        while ( $arrayEvents->have_posts() ) : $arrayEvents->the_post();

            ?>
			<a href="" class="events__item">
				<div class="events__pic">
					<img src="<?php echo STANDART_DIR; ?>img/uploads/event-photo-1.jpg" alt="" class="events__thumb">
				</div>
				<div class="events__inner">
					<div class="events__heading">
						<h3 class="events__headline text text--large text--white text--w-light">
							<?php the_title() ?>
						</h3>
						<div class="events__date text text--normal text--dark-low text--w-light">
							<?php the_field('date_text') ?>
						</div>
					</div>
					<p class="events__excerpt text text--large text--white text--w-light">
						<?php the_field('desc') ?>
					</p>
				</div>
			</a>
			<?php


        endwhile;
        wp_reset_postdata();
		?></div>
	    <nav class="events__navigation pagination" role="navigation">
            <div class="nav-links text text--large text--white text--w-light">
            <?php echo paginate_links(
                $args = array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $arrayEvents->max_num_pages,
                    'current'      => max( 1, $paged ),
                    'format'       => '?paged=%#%',
                    'prev_next' => false
                )); ?>
            </div>
        </nav>
		<?php
    endif;

	die();
}




add_action('wp_ajax_get_future_event', 'get_future_event');
add_action('wp_ajax_nopriv_get_future_event', 'get_future_event');

function get_future_event() {
	$query_data = $_GET;
    $dataFilterCat = ($query_data['dataFilterCat']) ? explode(',',$query_data['dataFilterCat']) : false;
	$paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;

    $tax_query = array('relation' => 'AND',);


    if ($dataFilterCat) {
		$bet = array(
	        'taxonomy' => 'events-category',
	        'field' => 'id',
	        'terms' => $dataFilterCat,
	    );
		array_push($tax_query, $bet);
	}

	$per_page = 10;
    $arrayEvents = new WP_Query( array(
		'post_type' 	   => 'events',
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'       	   => 'DESC',
		'suppress_filters' => true,
		'posts_per_page'   => $per_page,
		'paged' 		   => $paged,
		'meta_query'  	   => array(
			array(
				'key' => 'date',
				'value' => date("Y-m-d"),
				'compare' => '>=',
				'type' => 'DATE'
			)
		),
		'orderby'		   => 'meta_value',
		'order'   		   => 'ASC',
		'tax_query'		   => $tax_query,
   ));


    if ( $arrayEvents->have_posts() ) :
		?><div class="events__items"><?php
        while ( $arrayEvents->have_posts() ) : $arrayEvents->the_post();

            ?>
			<a href="" class="events__item">
				<div class="events__pic">
					<img src="<?php echo STANDART_DIR; ?>img/uploads/event-photo-1.jpg" alt="" class="events__thumb">
				</div>
				<div class="events__inner">
					<div class="events__heading">
						<h3 class="events__headline text text--large text--white text--w-light">
							<?php the_title() ?>
						</h3>
						<div class="events__date text text--normal text--dark-low text--w-light">
							<?php the_field('date_text') ?>
						</div>
					</div>
					<p class="events__excerpt text text--large text--white text--w-light">
						<?php the_field('desc') ?>
					</p>
				</div>
			</a>
			<?php


        endwhile;
        wp_reset_postdata();
		?></div>
	    <nav class="events__navigation pagination" role="navigation">
            <div class="nav-links text text--large text--white text--w-light">
            <?php echo paginate_links(
                $args = array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $arrayEvents->max_num_pages,
                    'current'      => max( 1, $paged ),
                    'format'       => '?paged=%#%',
                    'prev_next' => false
                )); ?>
            </div>
        </nav>
		<?php
    endif;

	die();
}
