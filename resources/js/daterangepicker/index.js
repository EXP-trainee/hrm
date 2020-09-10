import * as $ from 'jquery';
import moment from "moment";
import 'daterangepicker/daterangepicker.js';
import 'daterangepicker/daterangepicker.css';

export default (function () {
  $('.dates').daterangepicker({
      ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      alwaysShowCalendars: true,
      timepicker:false,
      format:'d/m/Y'
  }).attr('autocomplete', "off");

  $('.dates-time').daterangepicker({
      ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      alwaysShowCalendars: true,
      timepicker:false,
      format:'d/m/Y H:i:s'
  }).attr('autocomplete', "off");
}())
