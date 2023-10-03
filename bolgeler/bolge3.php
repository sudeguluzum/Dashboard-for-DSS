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
           $sql="SELECT il_ad, on_siparis from iller,bolge_il where iller.plaka=bolge_il.plaka and bolge_il.bolge_no=3 order by iller.il_ad asc";
           $fire=mysqli_query($con,$sql);
           while($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['il_ad']."',".$result['on_siparis']."],";
           }
          ?>
        ]);

        var options = {
        title: '3. Bölgedeki İllerin Ön Sipariş Sayısı',
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
          ['260-01', 39183,20232],
          ['260-02', 7422,20232],
          ['300-07', 89074,20232],
          ['300-08', 40054,20232],
          ['300-09', 14437,20232],
          ['300-10', 11657,20232],
          ['300-11', 27489,20232],
          ['300-12', 13770,20232],
          ['300-13', 24660,20232],
          ['300-14', 19592,20232],
          ['300-15', 19592,20232],
          ['330-11', 4477,20232],
          ['330-12', 55993,20232],
          ['330-13', 0,20232],
          ['330-14', 18757,20232],
          ['330-15', 22978,20232],
          ['330-16', 5946,20232],
          ['340-01', 3237,20232],
          ['340-02', 3653,20232],
          ['340-03', 645,20232],
          ['340-04', 1320,20232],
          ['340-05', 444,20232],
          ['350-06', 676,20232],
          ['350-07', 2002,20232],
          ['350-08', 20974,20232],
          ['350-09', 4652,20232],
          ['615-01', 8851,20232],
          ['650-07', 17127,20232],
          ['650-08', 12331,20232],
          ['650-09', 32156,20232],
          ['665-02', 13578,20232],
          ['675-02', 9164,20232],
          ['675-03', 6447,20232],
          ['687-01', 11409,20232],
          ['695-02', 4707,20232],
          ['695-03', 1752,20232],
          ['695-04', 2817,20232],
          ['695-05', 2014,20232],
          ['695-06', 8101,20232],
          ['695-07', 3293,20232],
          ['695-08', 7855,20232],
          ['695-09', 15786,20232],
          ['696-01', 21861,20232],
          ['705-01', 19715,20232],
          ['705-02', 4702,20232],
          ['715-01', 9325,20232],
          ['715-02', 5883,20232],
          ['715-03', 22688,20232],
          ['715-04', 9714,20232],
          ['715-05', 43128,20232],
          ['715-06', 22207,20232],
          ['715-07', 8619,20232],
          ['750-09', 3390,20232],
          ['750-10', 10188,20232],
          ['750-11', 23053,20232],
          ['750-12', 36328,20232]
        
        ]);

        var options = {
          title : '3.Bölgedeki Yıllık Ortalama Günlük Yoldan Geçen Otomobil Sayısı',
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
<div class="konum"> <a href="bolge3resim.html" target="_blank" rel="noopener noreferrer"><img src="bolgeler/b3.jpg" width="600px"; height="450px"; cursor:zoom-in;/></a></div>
<div id="siparis" class="siparis" style="width:300px; height:90px;padding-top:7px; text-align:center;"> <h5>3.Bölgedeki Ön Sipariş Toplamı </h5> <br>
  <?php 
  $sql="SELECT sum(iller.on_siparis) from iller,bolge_il where iller.plaka=bolge_il.plaka and bolge_il.bolge_no=3";
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
