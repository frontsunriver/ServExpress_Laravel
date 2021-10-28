/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!******************************************************!*\
  !*** ../demo1/src/js/pages/custom/user/edit-user.js ***!
  \******************************************************/


// Class definition
var KTUserEdit = function () {
	// Base elements
	var avatar;

	var initUserForm = function() {
		avatar = new KTImageInput('kt_user_edit_avatar');
	}

	return {
		// public functions
		init: function() {
			initUserForm();
		}
	};
}();

jQuery(document).ready(function() {
	KTUserEdit.init();
});

/******/ })()
;
//# sourceMappingURL=edit-user.js.map