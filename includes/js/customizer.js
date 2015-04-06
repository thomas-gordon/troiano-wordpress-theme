/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

jQuery( document ).ready( function( $ ) {
    // Site title and description.
    wp.customize( 'blogname', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).text( to );
        } );
    } );
    wp.customize( 'blogdescription', function( value ) {
        value.bind( function( to ) {
            $( '.lead' ).text( to );
        } );
    } );
    // Header text color.
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.site-title, .lead' ).css( {
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                } );
            } else {
                $( '.site-title, .lead' ).css( {
                    'clip': 'auto',
                    'color': to,
                    'position': 'relative'
                } );
            }
        } );
    } );

	/*
	 *
	 * Load the map with the center of australia in the middle!
	 *
	 * */
	this.map = new GMaps({
		div: '#js-location-map',
		lat: -37.823960,
		lng: 145.048803,
		zoom: 5,
		disableDefaultUI: true,
		height: '100%',
		width: '100%',
		zoomControl: true,
		minZoom: 4,
		scrollwheel: false
	});


} );
