<?php
$con=mysqli_connect('localhost','root','','proje');

?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href=haritastyle.css>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style> @import
url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
.sidebar{ position:absolute; top:0px; left:0px; height: 1005px; width: 220px;
background: #fbd0d9; transition: all 0.1s ease;
}
.sidebar .logo-details{ height: 55px; display: flex;
align-items: center;
}
.sidebar .logo-details i{ font-size: 55px;
font-weight: 500; color: #dc143c; min-width: 60px;
text-align: center;
}
.sidebar .logo-details .logo_name{ color: #dc143c;
font-size: 22px;
font-weight: 450;
text-align: center;
padding-left:25px;
}
.sidebar .nav-links li{ position: relative; list-style: none; height: 50px;
}
.sidebar .nav-links li a{ height: 100%;
width: 100%; display: flex; align-items: center;
text-decoration: none; transition: all 0.4s ease;
}

.sidebar .info{ display:flex; width:100%;
}
.avatar{ width: 40px; height: 40px;
border-radius: 20px; margin:5px;

}
.sidebar .info .infoName{ padding-top:40px; color:#FFFFFF;
align-items:center; padding-left:20px;
}
.sidebar .nav-links li a.active{ background: #white;
}
.sidebar .nav-links li a:hover{ background: #dc143c; 
}
.sidebar .nav-links li a .links_name:hover{ color:white;
}
.sidebar .nav-links li i{ min-width: 60px;
text-align: center; font-size: 18px;
color: rgb(153, 146, 152);
}
.sidebar .nav-links li a .links_name{ color:#dc143c;
font-size: 20px; font-weight: 400; white-space: nowrap;
}
.konum{
  position:absolute;
  left: 300px;
  top:10px;
}
.barchart{
position:absolute;
left:0px;
top:1005px;
}
.chart_div{
position:absolute;
left:300px;
top:500px;

}
.siparis{
position:absolute;
left:1000px;
top:200px;
background-color:#fbd0d9;
}

</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
     google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {
        var data = google.visualization.arrayToDataTable([
        ['İl adı', 'Ön Sipariş Sayısı'],
          <?php 
           $sql="SELECT il_ad, on_siparis from iller,bolge_il where iller.plaka=bolge_il.plaka and bolge_il.bolge_no=2 order by iller.il_ad asc";
           $fire=mysqli_query($con,$sql);
           while($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['il_ad']."',".$result['on_siparis']."],";
           }
          ?>
        ]);

        var options = {
        title: '2. Bölgedeki İllerin Ön Sipariş Sayısı',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Ön Sipariş Sayısı',
          minValue: 0
        },
        vAxis: {
          title: 'İl adı'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
  
        var data = google.visualization.arrayToDataTable([
          ['Yollar', '2021' ,'Ortalama'],
          ['240-01', 41072,20232],
          ['240-02', 40142,20232],
          ['250-02', 9539,20232],
          ['250-03', 27300,20232],
          ['250-04', 12064,20232],
          ['300-01', 54242,20232],
          ['300-02', 163753,20232],
          ['300-03', 125311,20232],
          ['300-04', 43592,20232],
          ['300-05', 18304,20232],
          ['300-06', 75660,20232],
          ['310-01', 41860,20232],
          ['310-02', 11059,20232],
          ['310-03', 1851,20232],
          ['320-01', 70266,20232],
          ['320-02', 37292,20232],
          ['320-03', 68308,20232],
          ['320-04', 79243,20232],
          ['330-01', 105491,20232],
          ['330-02', 31911,20232],
          ['330-03', 10421,20232],
          ['330-04', 20534,20232],
          ['330-05', 2630,20232],
          ['400-01', 3355,20232],
          ['400-02', 16951,20232],
          ['400-03', 66022,20232],
          ['505-01', 21790,20232],
          ['515-01', 21790,20232],
          ['515-02', 56792,20232],
          ['525-01', 96512,20232],
          ['525-02', 30517,20232],
          ['550-07', 70889,20232],
          ['550-08', 34248,20232],
          ['550-09', 108727,20232],
          ['550-10', 92598,20232],
          ['550-11', 26091,20232],
          ['550-12', 54476,20232],
          ['550-13', 55708,20232],
          ['550-14', 85729,20232],
          ['555-10', 18456,20232],
          ['565-08', 46175,20232],
          ['565-09', 37922,20232],
          ['565-10', 67013,20232],
          ['565-11', 31770,20232],
          ['585-02', 2815,20232],
          ['585-03', 9942,20232],
          ['585-04', 13931,20232],
          ['585-05', 26475,20232],
          ['585-06', 16883,20232],
          ['585-07', 5638,20232],
          ['585-08', 3786,20232],
          ['585-09', 36039,20232],
          ['585-10', 26302,20232],
          ['595-10', 4670,20232],
          ['595-11', 16278,20232],
          ['595-12', 7376,20232],
          ['595-13', 13956,20232],
          ['625-01', 3857,20232]
        
        ]);

        var options = {
          title : '2.Bölgedeki Yıllık Ortalama Günlük Yoldan Geçen Otomobil Sayısı',
          vAxis: {title: 'Otomobil Sayısı'},
          hAxis: {title: 'Yollar'},
          seriesType: 'bars',
          series: {1: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('barchart'));
        chart.draw(data, options);
      }
    </script>
</head>

<body>
<div class="konteynir">
<div class="sidebar">
<div class="logo-details">
<span class="logo_name">TOGG</span>
</div>

<ul class="nav-links">
<li>
<a href="dashboard.php" class="active">
<i class='bx bx-grid-alt' ></i>
<span class="links_name">Anasayfa</span>
</a>
</li>
<li>
<a href="bolge1icin.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">1.Bölge</span>
</a>
</li>
<li>
<a href="bolge2.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">2.Bölge</span>
</a>
</li>
<li>
<a href="bolge3.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">3.Bölge</span>
</a>
</li>
<li>
<a href="bolge4.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">4.Bölge</span>
</a>
</li>
<li>
<a href="bolge5.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">5.Bölge</span>
</a>
</li><li>
<a href="bolge6.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">6.Bölge</span>
</a>
</li><li>
<a href="bolge7.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">7.Bölge</span>
</a>
</li><li>
<a href="bolge8.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">8.Bölge</span>
</a>
</li><li>
<a href="bolge9.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">9.Bölge</span>
</a>
</li><li>
<a href="bolge10.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">10.Bölge</span>
</a>
</li><li>
<a href="bolge11.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">11.Bölge</span>
</a>
</li><li>
<a href="bolge12.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">12.Bölge</span>
</a>
</li><li>
<a href="bolge13.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">13.Bölge</span>
</a>
</li><li>
<a href="bolge14.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">14.Bölge</span>
</a>
</li><li>
<a href="bolge15.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">15.Bölge</span>
</a>
</li><li>
<a href="bolge16.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">16.Bölge</span>
</a>
</li><li>
<a href="bolge18.php">
<i class='bx bx-book-alt' ></i>
<span class="links_name">18.Bölge</span>
</a>
</li>
<li class="log_out">
<a href="cikis.php">
<i class='bx bx-log-out'></i>
<span class="links_name">Çıkış</span>
</a>
</li>
</ul>
</div>
<div class="konum"> <a href="bolge2resim.html" target="_blank" rel="noopener noreferrer"><img src="bolgeler/b2.jpg" width="600px"; height="450px"; cursor:zoom-in;/></a></div>
<div id="siparis" class="siparis" style="width:300px; height:90px;padding-top:7px; text-align:center;"> <h5>2.Bölgedeki Ön Sipariş Toplamı </h5> <br>
  <?php 
  $sql="SELECT sum(iller.on_siparis) from iller,bolge_il where iller.plaka=bolge_il.plaka and bolge_il.bolge_no=2";
  $fire=mysqli_query($con,$sql);
  while($result = mysqli_fetch_assoc($fire)) {
   echo"[".$result['sum(iller.on_siparis)']."]";
  }
 ?>
 </div>
 <div id="barchart" class="barchart" style="width: 1340px; height: 500px;"></div>
<div id="chart_div" class="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>
