/* global tinymce, quicktags */

jQuery( function ( $ ) {
	'use strict';

	/**
	 * Update date picker element
	 * Used for static & dynamic added elements (when clone)
	 */
	function update() {
		var $this = $( this ),
			$wrapper = $this.closest( '.editor-wrap' ),
			id = $this.attr( 'id' );

		// Ignore existing editor.
		if ( tinyMCEPreInit.mceInit[id] ) {
			return;
		}

		// Get id of the original editor to get its tinyMCE and quick tags settings
		var originalId = getOriginalId( $this );
		if ( ! originalId ) {
			return;
		}

		// Update the DOM
		$this.show();
		updateDom( $wrapper, id );

		// TinyMCE
		if ( tinyMCEPreInit.mceInit.hasOwnProperty( originalId ) ) {
			var settings = tinyMCEPreInit.mceInit[originalId],
				editor = new tinymce.Editor(id, settings, tinymce.EditorManager);
			editor.render();
		}

		// Quick tags
		if ( typeof quicktags === 'function' && tinyMCEPreInit.qtInit.hasOwnProperty( originalId ) ) {
			var qtSettings = tinyMCEPreInit.qtInit[originalId];
			qtSettings.id = id;
			quicktags( qtSettings );
			QTags._buttonsInit();
		}
	}

	/**
	 * Get original ID of the textarea
	 * The ID will be used to reference to tinyMCE and quick tags settings
	 * @param $el Current cloned textarea
	 */
	function getOriginalId( $el ) {
		var $clone = $el.closest( '.rwmb-clone' ),
			currentId = $clone.find( '.rwmb-wysiwyg' ).attr( 'id' );

		if ( /_\d+$/.test( currentId ) ) {
			currentId = currentId.replace( /_\d+$/, '' );
		}
		if ( tinyMCEPreInit.mceInit.hasOwnProperty( currentId ) || tinyMCEPreInit.qtInit.hasOwnProperty( currentId ) ) {
			return currentId;
		}

		return '';
	}

	/**
	 * Update id, class, [data-] attributes, ... of the cloned editor.
	 * @param $wrapper Editor wrapper element
	 * @param id       Editor ID
	 */
	function updateDom( $wrapper, id ) {
		// Wrapper div and media buttons
		$wrapper.attr( 'id', '' + id + '-wrap' )
		        .removeClass( 'html-active' ).addClass( 'tmce-active' ) // Active the visual mode by default
		        .find( '.mce-container' ).remove().end()               // Remove rendered tinyMCE editor
		        .find( '.editor-tools' ).attr( 'id', '' + id + '-editor-tools' )
		        .find( '.media-buttons' ).attr( 'id', '' + id + '-media-buttons' )
		        .find( 'button' ).data( 'editor', id ).attr( 'data-editor', id );

		// Editor tabs
		$wrapper.find( '.switch-tmce' )
		        .attr( 'id', id + 'tmce' )
		        .data( 'editor-id', id ).attr( 'data-editor-id', id ).end()
		        .find( '.switch-html' )
		        .attr( 'id', id + 'html' )
		        .data( 'editor-id', id ).attr( 'data-editor-id', id );

		// Quick tags
		$wrapper.find( '.editor-container' ).attr( 'id', '' + id + '-editor-container' )
		        .find( '.quicktags-toolbar' ).attr( 'id', 'qt_' + id + '_toolbar' ).html( '' );
	}

	$( '.rwmb-wysiwyg' ).each( update );
	$( document ).on( 'clone', '.rwmb-wysiwyg', update );
} );
