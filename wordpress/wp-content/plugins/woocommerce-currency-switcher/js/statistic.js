var woocs_stat_chart_type = 'bar';//pie, bar
var woocs_stat_canvas = null;
var woocs_stat_scenario = 1;
var woocs_stat_label = '';
var woocs_stat_labels = [];
var woocs_stat_data = [];

//***

jQuery(function () {
    woocs_stat_init_calendars();

    google.charts.load('current', {'packages': ['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(woocs_draw_stat_chart);
    //***

    woocs_stat_chart_type = woocs_get_cookie('woocs_stat_chart_type');
    if (!woocs_stat_chart_type) {
        woocs_stat_chart_type = 'bar';
    }
    jQuery('#woocs-stat-chart-type').val(woocs_stat_chart_type);

    //***

    jQuery('#woocs-stat-type').on('change', function () {
        switch (jQuery(this).val()) {
            case 'order':
                woocs_stat_init_calendars(false);

                woocs_stat_redraw(woocs_stat_scenario);
                break;
            default:
                woocs_stat_init_calendars(true);
                woocs_stat_redraw(woocs_stat_scenario);
                break;
        }

        return true;
    });

    //***

    jQuery('#woocs-stat-chart-type').on('change', function () {
        woocs_stat_chart_type = jQuery(this).val();
        woocs_set_cookie('woocs_stat_chart_type', woocs_stat_chart_type);
        woocs_draw_stat_chart();
        return true;
    });
});

function woocs_stat_activate_graph() {
    if (woocs_stat_canvas === null) {
        woocs_stat_redraw(woocs_stat_scenario);
    }

    return true;
}

//https://developers.google.com/chart/interactive/docs
function woocs_draw_stat_chart() {

    var ChartsData = [];
    ChartsData.push(["Currency", "Count", {role: "style"}])

    jQuery.each(woocs_stat_labels, function (index, value) {
        //console.log(woocs_stat_data[index]);
        if (woocs_stat_data[index]) {
            ChartsData.push([value, woocs_stat_data[index], woof_getRandomColor()]);
        }
    });

    var data = google.visualization.arrayToDataTable(ChartsData);

    var options = {'title': woocs_stat_label};
    if (woocs_stat_chart_type == 'bar') {
        var chart = new google.visualization.ColumnChart(document.getElementById('woocs-stat-chart'));
    } else {
        var chart = new google.visualization.PieChart(document.getElementById('woocs-stat-chart'));
    }

    chart.draw(data, options);



}


function woocs_stat_redraw(scenario) {
    woocs_stat_scenario = scenario;

    jQuery('.woocs_stat_redraw_btn').removeClass('woocs_stat_redraw_btn_a');
    jQuery('#woocs_stat_redraw_' + scenario).addClass('woocs_stat_redraw_btn_a');

    var data = {
        action: 'woocs_stat_redraw',
        time_from: jQuery('#woocs-stat-from').val(),
        time_to: jQuery('#woocs-stat-to').val(),
        type: jQuery('#woocs-stat-type').val(),
        scenario: scenario
    };
    jQuery.post(ajaxurl, data, function (responce) {
        responce = JSON.parse(responce);

        woocs_stat_label = responce.stat_label;
        woocs_stat_labels = responce.stat_labels;
        woocs_stat_data = responce.stat_data;
//jQuery('#woocs-stat-chart').show();
        woocs_draw_stat_chart();
    });
}
//https://stackoverflow.com/questions/1484506/random-color-generator
function woof_getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function woocs_stat_init_calendars(for_currency = true) {
    jQuery(".woocs_stat_calendar").datepicker('destroy').datepicker(
            {
                showWeek: true,
                firstDay: 1,
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                maxDate: 'today',
                onSelect: function (selectedDate, self) {
                    var date = new Date(parseInt(self.currentYear, 10), parseInt(self.currentMonth, 10), parseInt(self.currentDay, 10), 23, 59, 59);
                    var mktime = (date.getTime() / 1000);
                    var css_class = 'woocs_stat_calendar_from';
                    if (jQuery(this).hasClass('woocs_stat_calendar_from')) {
                        css_class = 'woocs_stat_calendar_to';
                        jQuery(this).parent().find('.' + css_class).datepicker("option", "minDate", selectedDate);
                    } else {
                        jQuery(this).parent().find('.' + css_class).datepicker("option", "maxDate", selectedDate);
                    }
                    jQuery(this).prev('input[type=hidden]').val(mktime);
                }
            }
    );

    if (for_currency) {
        jQuery(".woocs_stat_calendar").datepicker("option", "minDate", new Date(jQuery('#woocs-stat-calendar-min-y').val(), jQuery('#woocs-stat-calendar-min-m').val(), jQuery('#woocs-stat-calendar-min-d').val()));
    }

    jQuery(".woocs_stat_calendar").datepicker("option", "dateFormat", jQuery('#woocs-stat-calendar-format').val());
    jQuery(".woocs_stat_calendar").datepicker("option", "showAnim", 'fadeIn');

    //+++

    jQuery(".woocs_stat_calendar").on('keyup', function (e) {
        if (e.keyCode == 8 || e.keyCode == 46) {
            jQuery.datepicker._clearDate(this);
            jQuery(this).prev('input[type=hidden]').val("");
        }
    });

    jQuery(".woocs_stat_calendar").each(function () {
        var mktime = parseInt(jQuery(this).prev('input[type=hidden]').val(), 10);
        if (mktime > 0) {
            var date = new Date(mktime * 1000);
            jQuery(this).datepicker('setDate', new Date(date));
        }
    });

}

