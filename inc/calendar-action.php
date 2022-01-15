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
    $tax_query = array('relation' => 'AND',);

    $today = date("m.d.y");

    if ($dataFilterCat) {
		$bet = array(
	        'taxonomy' => 'events-category',
	        'field' => 'id',
	        'terms' => $dataFilterCat,
	    );
		array_push($tax_query, $bet);
	}

    if ($dataFilterTime) {
		$position = $dataFilterTime[0] + $dataFilterTime[1];
	}

    $arrayEvents = new WP_Query( array(
      'post_type' => 'events',
       'posts_per_page' => -1,
       'tax_query' =>$tax_query,
   ));

    $today = date("d.m.Y");
    $dateEvents = [];
    if ( $arrayEvents->have_posts() ) :
        while ( $arrayEvents->have_posts() ) : $arrayEvents->the_post();

            $id = get_the_ID();
            if ($dataFilterTime) {
                if ($position == 1) {
                    $date = get_field('date');
                    if (strtotime($today) < strtotime($date)) {
                        if (array_key_exists($date, $dateEvents)) {
                            $dateEvents[$date] .= ',' . strval($id) ;
                        } else {
                            $dateEvents[$date] = strval($id);
                        }
                    }
                } elseif ($position == -1) {
                    $date = get_field('date');
                    if (strtotime($today) > strtotime($date)) {
                        if (array_key_exists($date, $dateEvents)) {
                            $dateEvents[$date] .= ',' . strval($id) ;
                        } else {
                            $dateEvents[$date] = strval($id);
                        }
                    }
                } elseif ($position == 0) {
                    $date = get_field('date');
                    if (array_key_exists($date, $dateEvents)) {
                        $dateEvents[$date] .= ',' . strval($id) ;
                    } else {
                        $dateEvents[$date] = strval($id);
                    }
                }
            } else {
                $date = get_field('date');
                if (array_key_exists($date, $dateEvents)) {
                    $dateEvents[$date] .= ',' . strval($id) ;
                } else {
                    $dateEvents[$date] = strval($id);
                }
            }

        endwhile;
        wp_reset_postdata();
    endif;
    $startDate = date('n.Y', strtotime("last month"));
    echo Calendar::getInterval($startDate, date('n.Y', strtotime('+10 month')), $dateEvents);

	die();
}