$(document).ready(function(){
    $.ajax({
      url: "http://localhost/msc/chartdata.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var month = [];
        var amount = [];
  
        for(var i in data) {
            month.push(data[i].monthly);
            amount.push(data[i].totalsales);
        }
  
        var chartdata = {
          labels: month,
        
          datasets : [
            {
              label: 'Monthly Sales',
              
              backgroundColor: 'rgba(65,105,225)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(53, 167, 225)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: amount
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata,

          options: {
            title: {
              display: true,
              text: 'MONTHLY SALES OF GCASH RENTAL PAYMENTS'
          },
            
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                         callback: function(value) {if (value % 1 === 0) {return value;}}
                    }
                }]
           
             }   
        }
  

          

        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });