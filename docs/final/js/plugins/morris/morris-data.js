// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            estacion: '2016-04-27 15:00:00',
            min: 5.0,
            pro: 0.7,
            max: 0.8
        }, {
            estacion: '2016-04-27 15:00:30',
            min: 5.5,
            pro: 0.4,
            max: 0.7
        }, {
            estacion: '2016-04-27 15:01:00',
            min: 5,
            pro: 0.5,
            max: 0.7
        }, {
            estacion: '2016-04-27 15:01:30',
            min: 4.4,
            pro: 0.7,
            max: 0.9
        }, {
            estacion: '2016-04-27 15:02:00',
            min: 3.6,
            pro: 0.7,
            max: 0.8
        }, {
            estacion: '2016-04-27 15:02:30',
            min: 2.8,
            pro: 0.6,
            max: 0.8
        }, {
            estacion: '2016-04-27 15:03:00',
            min: 2,
            pro: 0.8,
            max: 0.7
        }, {
            estacion: '2016-04-27 15:03:30',
            min: 1.4,
            pro: 0.6,
            max: 0.7
        }, {
            estacion: '2016-04-27 15:04:00',
            min: 1,
            pro: 0.5,
            max: 0.7
        }, {
            estacion: '2016-04-27 15:04:30',
            min: 0.8,
            pro: 0.7,
            max: 0.8
        }, {
            estacion: '2016-04-27 15:05:00',
            min: 0,
            pro: 0.5,
            max: 0.7
        }],
        xkey: 'estacion',
        ykeys: ['min', 'pro', 'max'],
        labels: ['Maximo', 'Promedio', 'Minimo'],
        pointSize: 3,
        hideHover: 'auto',
        resize: true
    });



    


});
