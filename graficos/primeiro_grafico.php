  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População', {role: 'annotation' }],
          <?php
            
          require('tiago_conecta.php');

            $sql = "SELECT * FROM cidades";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $cidade = utf8_encode($row['cidade']);
                $populacao = utf8_encode($row['populacao']); 
                ?>
                ["<?= $cidade ?>",  <?= $populacao ?>, <?= $populacao ?>],
                <?php
              }
            } 
          ?> 
          
        ]);

        var options = {
          title: 'Populações nas diferentes cidades',
          //curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>



    <div>
      

       


    </div>


  </body>
</html>