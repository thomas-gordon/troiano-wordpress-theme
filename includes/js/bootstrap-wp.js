jQuery( document ).ready( function( $ ) {

    $( 'input.search-field' ).addClass( 'form-control' );

    // here for each comment reply link of wordpress
    $( '.comment-reply-link' ).addClass( 'btn btn-primary' );

    // here for the submit button of the comment reply form
    $( '#commentsubmit' ).addClass( 'btn btn-primary' );

    // The WordPress Default Widgets
    // Now we'll add some classes for the wordpress default widgets - let's go

    // the search widget
    $( 'input.search-field' ).addClass( 'form-control' );
    $( 'input.search-submit' ).addClass( 'btn btn-default' );

    $( '.widget_rss ul' ).addClass( 'media-list' );

    $( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav' );

    $( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
    $( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');

    $( 'table#wp-calendar' ).addClass( 'table table-striped');

	/*
	 *
	 * Load the map with the center of australia in the middle!
	 *
	 * */


	if ($('#js-map').length > 0) {

		var _self = this;

	    this.map = new GMaps({
			div: '#js-map',
			lat: -37.823960,
			lng: 145.048803,
			zoom: 12,
			height: '100%',
			width: '100%',
			zoomControl: true,
			minZoom: 4,
			scrollwheel: false
		});

		_self.map_root = this.map.map;

		this.default_icon  = {
			url: window.location.protocol + "//" + window.location.host + "/" + 'wp-content/themes/_tk-master/includes/images/map-pin.png',
			size: new google.maps.Size(44, 44),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(22, 22),
			scaledSize: new google.maps.Size(44, 44)
		};

		this.marker = {
			lat: -37.823960,
			lng: 145.048803,
			icon: this.default_icon,
			infoWindow: {
				content: '<strong>TROIANO &amp; ASSOCIATES</strong><br>'+
				'SUITE 2.03/<br>' +
				'737 BURWOOD RD,<br>' +
				'HAWTHORN, 3122<br>' +

				'P.O. BOX 3090 AUBURN 3123 VIC<br><br>'+

				'<strong>P</strong>: +61 3 8862 6334<br>'+
				'<strong>F</strong>: +61 3 8676 4989<br>'+
				'<strong>E</strong>: <a href="mailto:reception@troianocpa.com.au">reception@troianocpa.com.au</a>'
			}
		};


		this.map.addMarker(this.marker);



		this.listen = google.maps.event.addListenerOnce(_self.map_root, "idle", function() {
			google.maps.event.trigger(_self.map.markers[0], 'click');
		});

	}
});
