<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
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
          chart: {
            title: 'Populações das Cidades',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>