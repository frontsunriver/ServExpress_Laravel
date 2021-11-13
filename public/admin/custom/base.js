/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};
    /*!******************************************************************************!*\
      !*** ../demo1/src/js/pages/crud/datatables/data-sources/ajax-server-side.js ***!
      \******************************************************************************/

    var BaseTable = function() {

        var countryTable = function() {
            var table = $('#country');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'base/getCountry',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': _token,
                    },
                    data: {
                        // parameters for custom backend script demo
                        // columnsDef: [
                        //     'email', 'name',
                        //     'subscription', 'expire_date', 'total_revenue',
                        //     'credit', 'status', 'Actions'
                        // ],
                    },
                },
                columns: [
                    { data: 'name' },
                    {
                        data: null ,
                        render: function(data, type, full, meta) {
                            return '\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
                                <i class="la la-edit"></i>\
                            </a>\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                <i class="la la-trash"></i>\
                            </a>\
                        ';
                        }
                    },
                ],
                // columnDefs: [{
                //         targets: -1,
                //         title: 'Actions',
                //         orderable: false,
                //         render: function(data, type, full, meta) {
                //             return '\
				// 			<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
				// 				<i class="la la-edit"></i>\
				// 			</a>\
				// 			<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
				// 				<i class="la la-trash"></i>\
				// 			</a>\
				// 		';
                //         },
                //     },
                //     {
                //         width: '75px',
                //         targets: -2,
                //         orderable: false,
                //         textAlign: 'center',
                //         render: function(data, type, full, meta) {
                //             if (data == null && data == 0) {
                //                 return '<input type="checkbox" name="Checkboxes1">';
                //             } else {
                //                 return '' +
                //                     '<input type="checkbox" checked="checked" name="Checkboxes1">' +
                //                     '';
                //             }

                //         },
                //     },
                // ],
            });
        };

        var regionTable = function() {
            var table = $('#region');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'base/getRegion',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': _token,
                    },
                    data: {
                    },
                },
                columns: [
                    { data: 'name' },
                    {
                        data: null ,
                        render: function(data, type, full, meta) {
                            return '\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
                                <i class="la la-edit"></i>\
                            </a>\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                <i class="la la-trash"></i>\
                            </a>\
                        ';
                        }
                    },
                ],
            });
        };

        var searchEnginTable = function() {
            var table = $('#searchEngin');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'base/getSearchEngin',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': _token,
                    },
                    data: {
                    },
                },
                columns: [
                    { data: 'name' },
                    {
                        data: null ,
                        render: function(data, type, full, meta) {
                            return '\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
                                <i class="la la-edit"></i>\
                            </a>\
                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
                                <i class="la la-trash"></i>\
                            </a>\
                        ';
                        }
                    },
                ],
            });
        };

        return {
            //main function to initiate the module
            init: function() {
                countryTable();
                regionTable();
                searchEnginTable();
            },

        };

    }();

    jQuery(document).ready(function() {
        BaseTable.init();
    });

    /******/
})();
//# sourceMappingURL=ajax-server-side.js.map