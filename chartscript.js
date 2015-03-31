window.onload = function chart23(a,b) {
    c = a + b;
    console.log(c);
    var chart = new CanvasJS.Chart("chartContainer", {

      title:{
        text: "Energy Summary"              
      },
      data: [//array of dataSeries              
        { //dataSeries object

         /*** Change type "column" to "bar", "area", "line" or "pie"***/
         type: "column",
         dataPoints: [
         { label: "January", y: 18 },
         { label: "February", y: 29 },
         { label: "March", y: 40 },                                    
         { label: "April", y: 34 },
         { label: "May", y: 24 },
         { label: "June", y: 44 },
         { label: "July", y: 14 },
         { label: "August", y: 64 },
         { label: "September", y: 164 },
         { label: "October", y: 264 },
         { label: "November", y: 364 },
         { label: "December", y: 664 },
         ]
       }
       ]
     });

    chart.render();
  }