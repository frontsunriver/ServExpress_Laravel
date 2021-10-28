/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!*************************************************************!*\
  !*** ../demo1/src/js/pages/crud/forms/widgets/clipboard.js ***!
  \*************************************************************/

// Class definition

var KTClipboardDemo = function () {

    // Private functions
    var demos = function () {
        // basic example
        new ClipboardJS('[data-clipboard=true]').on('success', function(e) {
            e.clearSelection();
            alert('Copied!');
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    KTClipboardDemo.init();
});

/******/ })()
;
//# sourceMappingURL=clipboard.js.map