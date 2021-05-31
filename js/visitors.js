

$(document).ready(function(){
    $.ajax({
      url: "http://localhost/southcemetery/visitorsdata.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var month = [];
        var users = [];
        
  
        for(var i in data) {
        
            month.push(data[i].monthly);
            users.push(data[i].numusers);
      
        }
  
        var chartdata = {
          labels: month, 
        
          datasets : [
            {
              label: 'Visitors',
              
              backgroundColor: 'rgba(65,105,225)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(53, 167, 225)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: users
            }
  
            
          ]
        };
        
  
        var ctx = $("#visitors");
        
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata,
          
          
          options: {
            title: {
              display: true,
              text: ['MANILA SOUTH CEMETERY','Number of VISITORS per YEAR']
          },

          
            
            scales: {
            
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                         callback: function(value) {if (value % 1 === 0 ) {return value;}}
                        
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
  