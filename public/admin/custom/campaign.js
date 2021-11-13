/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};
    /*!******************************************************************************!*\
      !*** ../demo1/src/js/pages/crud/datatables/data-sources/ajax-server-side.js ***!
      \******************************************************************************/

    var CampaignTable = function() {

        var initTable1 = function() {
            var table = $('#kt_datatable');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'campaign/getList',
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
                    { data: 'Email' },
                    { 
                        data: 'campaign_name',
                    },
                    { 
                        data: 'url',
                    },
                    { data: 'country_name' },
                    { data: 'keywords' },
                    { 
                        data: 'status', 
                        render: function(data, type, row){
                            if (data == null && data == 0) {
                                return '<input type="checkbox" name="Checkboxes1">';
                            } else {
                                return '' +
                                    '<input type="checkbox" checked="checked" name="Checkboxes1">' +
                                    '';
                            }
                        }
                    },
                ],
            });
        };

        return {
            init: function() {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function() {
        CampaignTable.init();
    });
})();