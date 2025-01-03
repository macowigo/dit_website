<?php
/**
 * Class: WPGMP_Model_Group_Map
 * @author Flipper Code <hello@flippercode.com>
 * @version 3.0.0
 * @package Maps
 */

if ( ! class_exists( 'WPGMP_Model_Group_Map' ) ) {

	/**
	 * Category model for CRUD operation.
	 * @package Maps
	 * @author Flipper Code <hello@flippercode.com>
	 */
	class WPGMP_Model_Group_Map extends FlipperCode_Model_Base {
		/**
		 * Validations on category properies.
		 * @var array
		 */
		protected $validations = array(
		'group_map_title' 	=> array( 'req' => 'Please enter category title.' ),
		'group_marker' 		=> array( 'req' => 'Please upload marker image.' ),
		);
		/**
		 * Intialize location object.
		 */
		function __construct() {

			$this->table = TBL_GROUPMAP;
			$this->unique = 'group_map_id';
		}

		/**
		 * Admin menu for CRUD Operation
		 * @return array Admin menu navigation(s).
		 */
		function navigation() {
			return array(
			'wpgmp_form_group_map' => esc_html__( 'Add Marker Category', 'wpgmp_google_map' ),
			'wpgmp_manage_group_map' => esc_html__( 'Marker Categories', 'wpgmp_google_map' ),
			);

		}
		/**
		 * Install table associated with Location entity.
		 * @return string SQL query to install map_locations table.
		 */
		function install() {
			global $wpdb;
			$group_map = 'CREATE TABLE '.$wpdb->prefix.'group_map (
			group_map_id int(11) NOT NULL AUTO_INCREMENT,
			group_map_title varchar(255) DEFAULT NULL,
			group_marker text DEFAULT NULL,
			extensions_fields text DEFAULT NULL,
			group_parent int(11) DEFAULT 0,
			group_added timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			PRIMARY KEY  (group_map_id)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;';
			return $group_map;
		}
		/**
		 * Get Categories
		 * @param  array $where  Conditional statement.
		 * @return array         Array of Category object(s).
		 */
		public function fetch($where = array()) {

			$objects = $this->get( $this->table, $where );
			foreach ( $objects as $object ) {
				if ( strstr( $object->group_marker, 'google-map-pro/icons/' ) !== false ) {
					$object->group_marker = str_replace( 'icons', 'assets/images/icons', $object->group_marker ); }
					$object->extensions_fields = unserialize( $object->extensions_fields );

			}
			if ( isset( $objects ) ) {
				return $objects;
			}
		}

		/**
		 * Add or Edit Operation.
		 */
		function save() {
			
			global $_POST;
			$data = array();
			$entityID = '';
			
			//Permission Verification
			if ( ! current_user_can('administrator') )
			die( 'You are not allowed to save changes!' );
			
			//Nonce Verification
			if( !isset( $_REQUEST['_wpnonce'] ) || ( isset( $_REQUEST['_wpnonce'] ) && empty($_REQUEST['_wpnonce']) ) )
			die( 'You are not allowed to save changes!' );
			if ( isset( $_REQUEST['_wpnonce'] ) && ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'wpgmp-nonce' ) )
			die( 'You are not allowed to save changes!' );
			
			//Handle Validations
			$this->verify( $_POST );

			if ( isset( $_POST['entityID'] ) ) {
				$entityID = intval( wp_unslash( $_POST['entityID'] ) );
			}

			if ( is_array( $this->errors ) and ! empty( $this->errors ) ) {
				$this->throw_errors();
			}
			
			$data['group_map_title'] = sanitize_text_field( wp_unslash( $_POST['group_map_title'] ) );
			$data['group_marker'] = wp_unslash( $_POST['group_marker'] );
			$data['group_parent'] = intval( wp_unslash( $_POST['group_parent'] ) );
			if(isset($_POST['extensions_fields']))
			$data['extensions_fields'] = serialize( wp_unslash( $_POST['extensions_fields'] ) );

			if ( $entityID > 0 ) {
				$where[ $this->unique ] = $entityID;
			} else {
				$where = '';
			}

			$result = FlipperCode_Database::insert_or_update( $this->table, $data, $where );
			
			if ( false === $result ) {
				$response['error'] = esc_html__( 'Something went wrong. Please try again.','wpgmp_google_map' );
			} elseif ( $entityID > 0 ) {
				$response['success'] = esc_html__( 'Marker category updated successfully.','wpgmp_google_map' );
			} else {
				$response['success'] = esc_html__( 'Marker category added successfully.','wpgmp_google_map' );
      		}
      		return $response;
			
		}
		/**
		 * Delete location object by id.
		 */
		function delete() {
			if ( isset( $_GET['group_map_id'] ) ) {
				$id = intval( wp_unslash( $_GET['group_map_id'] ) );
				$connection = FlipperCode_Database::connect();
				$this->query = $connection->prepare( "DELETE FROM $this->table WHERE $this->unique='%d'", $id );
				return FlipperCode_Database::non_query( $this->query, $connection );
			}
		}

	}
}
