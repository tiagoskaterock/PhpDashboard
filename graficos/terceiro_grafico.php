<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População'],
          <?php
            
            require('tiago_conecta.php');

            $sql = "SELECT * FROM cidades";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $cidade = utf8_encode($row['cidade']);
                $populacao = utf8_encode($row['populacao']); 
                ?>
                ["<?= $cidade ?>",  <?= $populacao ?>],
                <?php
              }
            } 
          ?> 
        ]);

        var options = {
          title: 'Populaçãoes das Cidades',
          legend: 'none',
          pieSliceText: 'label',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>