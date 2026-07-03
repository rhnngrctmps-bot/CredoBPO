/**
 * VA Cost Calculator — pure client-side estimate using rate config
 * localized from PHP via credobpoCalcData (see inc/calculator-data.php).
 */
( function () {
	'use strict';

	if ( typeof credobpoCalcData === 'undefined' ) {
		return;
	}

	var config = credobpoCalcData;

	function formatCurrency( amount ) {
		var rounded = Math.round( amount );
		return config.currencySymbol + rounded.toLocaleString( 'en-US' );
	}

	function getRate( category, experience ) {
		var cat = config.categories[ category ];
		if ( ! cat ) {
			return 0;
		}
		if ( experience === 'expert' ) {
			return parseFloat( cat.rate_expert );
		}
		if ( experience === 'mid' ) {
			return parseFloat( cat.rate_mid );
		}
		return parseFloat( cat.rate_entry );
	}

	function getInhouseSalary( category ) {
		var cat = config.categories[ category ];
		return cat ? parseFloat( cat.inhouse_salary ) : 0;
	}

	function calculate() {
		var form = document.getElementById( 'va-calculator-form' );
		if ( ! form ) {
			return;
		}

		var category   = form.querySelector( '#calc-category' ).value;
		var experience = form.querySelector( 'input[name="experience"]:checked' ).value;
		var engagement = form.querySelector( 'input[name="engagement"]:checked' ).value;
		var vas        = parseInt( form.querySelector( '#calc-vas' ).value, 10 ) || 1;

		var hoursPerWeek = engagement === 'full' ? config.fullTimeHours : config.partTimeHours;
		var rate         = getRate( category, experience );

		var monthlyCost = rate * hoursPerWeek * config.weeksPerMonth * vas;
		var annualCost  = monthlyCost * 12;

		var fullTimeSalary   = getInhouseSalary( category ) * config.inhouseOverhead;
		var engagementFactor = hoursPerWeek / config.fullTimeHours;
		var inhouseAnnual    = fullTimeSalary * engagementFactor * vas;

		var savingsAmount  = Math.max( inhouseAnnual - annualCost, 0 );
		var savingsPercent = inhouseAnnual > 0 ? Math.round( ( savingsAmount / inhouseAnnual ) * 100 ) : 0;

		document.getElementById( 'calc-monthly-cost' ).textContent   = formatCurrency( monthlyCost );
		document.getElementById( 'calc-annual-cost' ).textContent    = formatCurrency( annualCost );
		document.getElementById( 'calc-inhouse-cost' ).textContent   = formatCurrency( inhouseAnnual );
		document.getElementById( 'calc-savings-amount' ).textContent = formatCurrency( savingsAmount );
		document.getElementById( 'calc-savings-percent' ).textContent = savingsPercent + '%';
	}

	function initStepper() {
		var count  = document.getElementById( 'calc-vas-count' );
		var hidden = document.getElementById( 'calc-vas' );
		var minus  = document.getElementById( 'calc-vas-minus' );
		var plus   = document.getElementById( 'calc-vas-plus' );

		if ( ! count || ! hidden || ! minus || ! plus ) {
			return;
		}

		var value = parseInt( hidden.value, 10 ) || 1;

		function render() {
			count.textContent = value;
			hidden.value = value;
			calculate();
		}

		minus.addEventListener( 'click', function () {
			value = Math.max( 1, value - 1 );
			render();
		} );

		plus.addEventListener( 'click', function () {
			value = Math.min( 20, value + 1 );
			render();
		} );
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		var form = document.getElementById( 'va-calculator-form' );
		if ( ! form ) {
			return;
		}

		form.addEventListener( 'change', calculate );
		initStepper();
		calculate();
	} );
} )();
