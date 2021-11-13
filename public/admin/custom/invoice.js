/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};

    var InvoiceTable = function() {

        var initTable1 = function() {
            var table = $('#kt_datatable');

            // begin first table
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'invoice/getList',
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
                    { data: 'invoice_number' },
                    { 
                        data: 'datetime',
                    },
                    { 
                        data: 'customer',
                    },
                    { data: 'amount' },
                    { data: 'payment_method' },
                    { data: 'subscrition_plan' },
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
            init: function() {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function() {
        InvoiceTable.init();
    });

})();