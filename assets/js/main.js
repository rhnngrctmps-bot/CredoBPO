/**
 * Mobile nav toggle + VA calculator modal open/close.
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {
		// Mobile menu toggle.
		var menuToggle = document.getElementById( 'menu-toggle' );
		var nav        = document.getElementById( 'primary-navigation' );

		if ( menuToggle && nav ) {
			menuToggle.addEventListener( 'click', function () {
				var isOpen = nav.classList.toggle( 'is-open' );
				menuToggle.classList.toggle( 'is-active', isOpen );
				menuToggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			} );
		}

		// Calculator modal.
		var overlay     = document.getElementById( 'va-calculator-overlay' );
		var closeButton = document.getElementById( 'calc-modal-close' );
		var openTriggers = document.querySelectorAll( '.js-open-calculator' );

		if ( ! overlay ) {
			return;
		}

		function openModal( event ) {
			if ( event ) {
				event.preventDefault();
			}
			overlay.classList.add( 'is-open' );
			document.body.classList.add( 'calc-modal-open' );
		}

		function closeModal() {
			overlay.classList.remove( 'is-open' );
			document.body.classList.remove( 'calc-modal-open' );
		}

		openTriggers.forEach( function ( trigger ) {
			trigger.addEventListener( 'click', openModal );
		} );

		if ( closeButton ) {
			closeButton.addEventListener( 'click', closeModal );
		}

		overlay.addEventListener( 'click', function ( event ) {
			if ( event.target === overlay ) {
				closeModal();
			}
		} );

		document.addEventListener( 'keydown', function ( event ) {
			if ( event.key === 'Escape' && overlay.classList.contains( 'is-open' ) ) {
				closeModal();
			}
		} );
	} );
} )();
