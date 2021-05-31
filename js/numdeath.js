$(document).ready(function(){
    $.ajax({
      url: "http://localhost/southcemetery/deathchart.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var year = [];
        var numdeath = [];
  
        for(var i in data) {
            year.push(data[i].date);
            numdeath.push(data[i].numofdeath);
        }
  
        var chartdata = {
          labels: year,
        
          datasets : [
            {
              label: 'Number of Death/s',
  
              backgroundColor: 'rgba(65,105,225)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(53, 167, 225)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: numdeath
            }
          ]
        };
  
        var ctx = $("#death");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata,
          options: {
            
            title: {
              display: true,
              text: ['MANILA SOUTH CEMETERY','Number of DEATHS per YEAR']
          },
        }

          

        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });