/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*************************************************************!*\
  !*** ../demo1/src/js/pages/custom/contacts/list-columns.js ***!
  \*************************************************************/


// Class definition
var KTContactsListColumns = function () {

	// Private functions
	var initAside = function () {
		// Mobile offcanvas for mobile mode
		var offcanvas = new KTOffcanvas('kt_contact_aside', {
            overlay: true,  
            baseClass: 'kt-app__aside',
            closeBy: 'kt_contact_aside_close',
            toggleBy: 'kt_subheader_mobile_toggle'
        }); 
	}

	return {
		// public functions
		init: function() {
			initAside();
		}
	};
}();

KTUtil.ready(function() {	
	KTContactsListColumns.init();
});
/******/ })()
;
//# sourceMappingURL=list-columns.js.map