<!-- footer content -->
<footer>
    <div class="pull-right">Copyright 2017 &copy; Telkom Property</div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->

</div>
<!-- /page content -->
</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
</ul>
<div class="clearfix"></div>
<div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="<?php echo base_url(); ?>../assets/js/bootstrap.min.js"></script>

<!-- bootstrap progress js -->
<script src="<?php echo base_url(); ?>../assets/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url(); ?>../assets/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo base_url(); ?>../assets/js/icheck/icheck.min.js"></script>

<script src="<?php echo base_url(); ?>../assets/js/custom.js"></script>

<!-- image cropping -->
<script src="<?php echo base_url(); ?>../assets/js/cropping/cropper.min.js"></script>
<script src="<?php echo base_url(); ?>../assets/js/cropping/main.js"></script>

<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo base_url(); ?>../assets/js/moment/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>../assets/js/datepicker/daterangepicker.js"></script>

<!-- chart js -->
<script src="<?php echo base_url(); ?>../assets/js/chartjs/chart.min.js"></script>

<!-- moris js -->
<script src="<?php echo base_url(); ?>../assets/js/moris/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>../assets/js/moris/morris.min.js"></script>

<!-- pace -->
<script src="<?php echo base_url(); ?>../assets/js/pace/pace.min.js"></script>

<!--ajax_daerah -->
<script src="<?php echo base_url(); ?>../assets/js/ajax_daerah.js"></script>

<?php if (isset($js)):
    foreach ($js as $key) {?>
        <script src="<?php echo base_url(); ?>../assets/js/<?php echo $key;?>"></script>
    <?php }
endif; ?>

<?php if (isset($ijs)) {
    foreach ($ijs as $key) {?>
        <script src="<?php echo base_url(); ?>../assets/ijs/<?php echo $key;?>"></script>
    <?php }
} ?>

<script src="<?php echo base_url(); ?>../assets/ijs/daftar.js"></script>

<script>
$(function() {
var day_data = [{
"period": "Jan",
"Hours worked": 80
}, {
"period": "Feb",
"Hours worked": 125
}, {
"period": "Mar",
"Hours worked": 176
}, {
"period": "Apr",
"Hours worked": 224
}, {
"period": "May",
"Hours worked": 265
}, {
"period": "Jun",
"Hours worked": 314
}, {
"period": "Jul",
"Hours worked": 347
}, {
"period": "Aug",
"Hours worked": 287
}, {
"period": "Sep",
"Hours worked": 240
}, {
"period": "Oct",
"Hours worked": 211
}];
Morris.Bar({
element: 'graph_bar',
data: day_data,
xkey: 'period',
hideHover: 'auto',
barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
ykeys: ['Hours worked', 'sorned'],
labels: ['Hours worked', 'SORN'],
xLabelAngle: 60
});
});
</script>
<!-- datepicker -->
<script type="text/javascript">
$(document).ready(function() {

var cb = function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);
$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
//alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
}

var optionSet1 = {
startDate: moment().subtract(29, 'days'),
endDate: moment(),
minDate: '01/01/2012',
maxDate: '12/31/2015',
dateLimit: {
  days: 60
},
showDropdowns: true,
showWeekNumbers: true,
timePicker: false,
timePickerIncrement: 1,
timePicker12Hour: true,
ranges: {
  'Today': [moment(), moment()],
  'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
  'This Month': [moment().startOf('month'), moment().endOf('month')],
  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
},
opens: 'left',
buttonClasses: ['btn btn-default'],
applyClass: 'btn-small btn-primary',
cancelClass: 'btn-small',
format: 'MM/DD/YYYY',
separator: ' to ',
locale: {
  applyLabel: 'Submit',
  cancelLabel: 'Clear',
  fromLabel: 'From',
  toLabel: 'To',
  customRangeLabel: 'Custom',
  daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
  monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
  firstDay: 1
}
};
$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
$('#reportrange').daterangepicker(optionSet1, cb);
$('#reportrange').on('show.daterangepicker', function() {
console.log("show event fired");
});
$('#reportrange').on('hide.daterangepicker', function() {
console.log("hide event fired");
});
$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
});
$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
console.log("cancel event fired");
});
$('#options1').click(function() {
$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
});
$('#options2').click(function() {
$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
});
$('#destroy').click(function() {
$('#reportrange').data('daterangepicker').remove();
});
});
</script>

<!-- PNotify -->
<script type="text/javascript" src="<?php echo base_url(); ?>../assets/js/notify/pnotify.core.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>../assets/js/notify/pnotify.buttons.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>../assets/js/notify/pnotify.nonblock.js"></script>
<script type="text/javascript">
var permanotice, tooltip, _alert;
$(function() {
new PNotify({
title: "PNotify",
type: "dark",
text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
nonblock: {
  nonblock: true
},
before_close: function(PNotify) {
  // You can access the notice's options with this. It is read only.
  //PNotify.options.text;

  // You can change the notice's options after the timer like this:
  PNotify.update({
    title: PNotify.options.title + " - Enjoy your Stay",
    before_close: null
  });
  PNotify.queueRemove();
  return false;
}
});

});
</script>
<!-- /datepicker -->
</body>

</html>
