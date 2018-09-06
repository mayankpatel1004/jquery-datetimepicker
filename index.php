<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-timepicker-addon.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-timepicker-addon-1.4.1.js"></script>
</head>

<body>

<input maxlength="10" readonly="readonly" tabindex="1" class="span12 tt_focus_top" title="This is the date when the event starts." id="EventCalendar_start_date" name="EventCalendar[start_date]" type="text" />


<input class="span12 tt_focus_top" tabindex="3" readonly="readonly" title="This is the time when the event commences." id="EventCalendar_event_time" name="EventCalendar[event_time]" type="text" />                                    									       
</body>
<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {

jQuery('#EventCalendar_start_date').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['en_us'], {'dateFormat':'mm/dd/yy','showAnim':'fold','changeYear':true,'changeMonth':true}));
jQuery('#EventCalendar_event_time').timepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['en_us'], {'timeFormat':'hh:mm tt','ampm':true,'defaultValue':'12:00 am'}));
});
/*]]>*/
</script>
</html>
