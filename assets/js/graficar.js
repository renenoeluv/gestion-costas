  $.ajax({
          url: "Graficas/ajax",
          type: "POST",
          dataType: "JSON",
          success: function(data){
            console.log((JSON.stringify(data)));
           
            config = {
                data: data,
                xkey: 'hora',
                ykeys: ['min', 'max', 'ultima'],
                labels: ['Maxima', 'Minima', 'Ultima Medicion'],
                fillOpacity: 0.6,
                hideHover: 'auto',
                behaveLikeLine: true,
                resize: true,
                pointFillColors:['#ffffff'],
                pointStrokeColors: ['black'],
                lineColors:['green','red', 'gray']
            };
        
            config.element = 'area-chart';
            Morris.Area(config);
                  ;
         }
});

    