    <div class="container">
        <div class="grafik" style="width:100%; height:400px;"></div>
        <div class="areachart" style="width: 100%;height:400px;"></div>
    </div>
         <!-- Highchart-->
    <script type="text/javascript" src="<?php echo base_url('assets/highchart/jquery-1.11.3.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/highchart/exporting.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts-3d.js')?>"></script>
    <script type="text/javascript">
        $('.grafik').highcharts({
          title:{
            text:<?php echo $title?>
          },
          subtitle:{
            text:'Website'
          },
          xAxis:{
            //type:'datetime'
            categories:<?php echo $waktu?>
          },
          yAxis:{
            title:{
              text:"nilai Sensor MQ_2"
            }
          },
          legend:{
            layout:'Vertikal',
            align:'right',
            vertikalAlign:'middle'
          },
          // plotOptions:{
          //   series:{
          //     label:{
          //       connectorAllowed:false
          //     },
          //   }
          // },
          series:[{
            name:'Sensor Gas',
            data:<?php echo $data?>
          }]
          });
</script>