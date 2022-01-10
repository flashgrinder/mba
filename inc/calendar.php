<?php


    class Calendar
{
	/**
	 * Вывод календаря на один месяц.
	 */
	public static function  getMonth($month, $year, $events = array() )
	{

		$months = array(
			1  => 'Январь',
			2  => 'Февраль',
			3  => 'Март',
			4  => 'Апрель',
			5  => 'Май',
			6  => 'Июнь',
			7  => 'Июль',
			8  => 'Август',
			9  => 'Сентябрь',
			10 => 'Октябрь',
			11 => 'Ноябрь',
			12 => 'Декабрь'
		);

		$month = intval($month);
		$out = '
        <div class="swiper-slide" data-title="'.$months[$month].'">
    		<div class="calendar__item calendar-item">
    			<div class="calendar__head text text--white text--w-light">' . $months[$month] . '</div>
    			<table>
                    <thead>
                        <tr class="calendar__day-week">
                            <th><span class="calendar__cell text text--white text--w-light">Пн</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Вт</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Ср</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Чт</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Пт</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Сб</span></th>
                            <th><span class="calendar__cell text text--white text--w-light">Вс</span></th>
                        </tr>
                    </thead>';

		$day_week = date('N', mktime(0, 0, 0, $month, 1, $year));
        $nextMonthDay = 1;
		$day_week--;

		$out.= '<tr>';
        $emptyFields = $day_week - 1;
		for ($x = 0; $x < $day_week; $x++) {
            $lastMonth = $month - 1;
            if ($lastMonth == 0) {
                $lastMonth = 12;
            }
            $number = cal_days_in_month(CAL_GREGORIAN, $lastMonth, $year);
            if ( $emptyField !== 0) {
                $lastNumber = $number - $emptyFields;
                $out.= '<td class="calendar__day lastMonth"><span class="calendar__cell text text--white text--w-light">'.$lastNumber.'</span></td>';

            }
            $emptyFields -= 1;
		}

		$days_counter = 0;
		$days_month = date('t', mktime(0, 0, 0, $month, 1, $year));
		// for ($day = 1; $day <= $days_month; $day++) {
        $d = 42 - $day_week;

		for ($day = 1; $day <= $d; $day++) {
			if (date('j.n.Y') == $day . '.' . $month . '.' . $year) {
				$class = 'calendar__day today';
			} elseif (time() > strtotime($day . '.' . $month . '.' . $year)) {
				$class = 'calendar__day last';
			} else {
				$class = '';
			}

			$event_show = false;
			$event_text = array();
			if (!empty($events)) {
				foreach ($events as $date => $text) {
					$date = explode('.', $date);
					if (count($date) == 3) {
						$y = explode(' ', $date[2]);
						if (count($y) == 2) {
							$date[2] = $y[0];
						}

						if ($day == intval($date[0]) && $month == intval($date[1]) && $year == $date[2]) {
							$event_show = true;
							$event_text[] = $text;
						}
					} elseif (count($date) == 2) {
						if ($day == intval($date[0]) && $month == intval($date[1])) {
							$event_show = true;
							$event_text[] = $text;
						}
					} elseif ($day == intval($date[0])) {
						$event_show = true;
						$event_text[] = $text;
					}
				}
			}

            if ($event_show) {
                if ($day>$days_month) {
                    $out.= '<td class="calendar__day nextMonth' . $class . '"><span class="calendar__cell text text--white text--w-light">' . $nextMonthDay . '</span></td>';
                    $nextMonthDay += 1;
                } else {
    				if (!empty($event_text)) {
    					$out.= '<td class="calendar__day ' . $class . ' event"><span class="calendar__cell text text--white text--w-light" data-id ="'.$event_text[0].'">' . $day;
    				}
    				$out.= '</span></td>';
                }

			} else {
                if ($day>$days_month) {
                    $out.= '<td class="calendar__day nextMonth"><span class="calendar__cell text text--white text--w-light">' . $nextMonthDay . '</span></td>';
                    $nextMonthDay += 1;
                } else {
                    $out.= '<td class="calendar__day ' . $class . '"><span class="calendar__cell text text--white text--w-light">' . $day . '</span></td>';
                }
			}
			if ($day_week == 6) {
				$out.= '</tr>';
				if (($days_counter + 1) != $days_month) {
					$out.= '<tr>';
				}
				$day_week = -1;
			}
			$day_week++;
			$days_counter++;
		}
		$out .= '</tr></table></div></div>';
		return $out;
	}
	/**
	 * Вывод календаря на несколько месяцев.
	 */
	public static function  getInterval($start, $end, $events = array())
	{
		$curent = explode('.', $start);
		$curent[0] = intval($curent[0]);

		$end = explode('.', $end);
		$end[0] = intval($end[0]);

		$begin = true;
		$out = '<div class="pagination"></div>
                <div class="calendar__slider">
                <div class="swiper swiper-calculator">
              <div class="swiper-wrapper">';
		do {
			$out .= self::getMonth($curent[0], $curent[1], $events);

			if ($curent[0] == $end[0] && $curent[1] == $end[1]) {
				$begin = false;
			}

			$curent[0]++;
			if ($curent[0] == 13) {
				$curent[0] = 1;
				$curent[1]++;
			}
		} while ($begin == true);
		$out .= '</div>
       </div>
       <div class="calendar__btn-next calendar__btn"><svg class="calendar__btn-svg" width="15" height="32" viewBox="0 0 15 32" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M1 31L12.4645 19.5355C14.4171 17.5829 14.4171 14.4171 12.4645 12.4645L0.999999 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
       </svg></div>
       <div class="calendar__btn-prev calendar__btn"><svg class="calendar__btn-svg" width="15" height="32" viewBox="0 0 15 32" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M14 1L2.53553 12.4645C0.582912 14.4171 0.582911 17.5829 2.53553 19.5355L14 31" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
       </svg>
       </div></div>';
		return $out;
	}
}
 ?>
