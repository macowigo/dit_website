<?php
/**
 * Template for displaying course rate.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/course-review/course-rate.php.
 *
 * @author  ThimPress
 * @package LearnPress/Course-Review/Templates
 * version  3.0.1
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

$course_id       = get_the_ID();
$course_rate_res = learn_press_get_course_rate( $course_id, false );
$course_rate     = $course_rate_res['rated'];
$total           = $course_rate_res['total'];
?>

<div class="course-rate">
    <div class="course-rate__summary">
        <div class="course-rate__summary-value"><?php echo number_format( $course_rate, 1 ); ?></div>
        <div class="course-rate__summary-stars">
			<?php
			learn_press_course_review_template( 'rating-stars.php', array( 'rated' => $course_rate ) );
			?>
        </div>
        <div class="course-rate__summary-text">
			<?php printf( __( '<span>%d</span> total', 'learnpress-course-review' ), $total ); ?>
        </div>

    </div>

    <div class="course-rate__details">
		<?php
		foreach ( $course_rate_res['items'] as $item ):
			?>
            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    <?php esc_html_e( $item['rated'] ); ?>
                    <i class="fas fa-star"></i>
                </span>
                <div class="course-rate__details-row-value">
                    <div class="rating-gray"></div>
                    <div class="rating" style="width:<?php echo $item['percent']; ?>%;"
                         title="<?php echo esc_attr( $item['percent'] ); ?>%">
                    </div>
                    <span class="rating-count"><?php echo $item['total']; ?></span>
                </div>
            </div>
		<?php
		endforeach;
		?>
    </div>

</div>
