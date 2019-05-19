        <div class="container">
            <div id="grafik2"></div>
        </div>    
        
        
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/exporting.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts-3d.js')?>"></script>
        <script>
            var chart;
            var total=0,waktu=[];
            function tampil(){
                    $.ajax({
                        url:'<?php echo base_url('sensor_gas/get_data_sensor')?>',
                        dataType:'json',
                        success:function(result){                            
                            if (result.length>total){
                                total=result.length;
                                var d_akhir=result.pop();
                                var d_sensor=Number(d_akhir.sensor_gas);
                                var konfersi=new Date(Date.parse(d_akhir.waktu));
                                var waktu2=konfersi.getHours() +":"+konfersi.getMinutes()+":"+konfersi.getSeconds();
                                waktu.push(waktu2);
                                chart.series[0].addPoint([d_akhir.waktu,d_sensor],true,false);
                                chart.xAxis[0].setCategories(waktu);
                            }
                            setTimeout(tampil, 1000);
                        }
                    });
            }
            document.addEventListener('DOMContentLoaded',function(){

                chart=Highcharts.chart('grafik2',{
                    chart:{
                        events:{
                            load:tampil
                        }
                    },
                    title:{
                        text:'Grafik2'
                    },
                    xAxis:{
                        title:{
                            text:'Waktu'
                        },
                        type:'datetime'
                    },
                    yAxis:{
                        title:{
                            text:'Sensor Gas'
                        }
                    },
                    series:[{
                        name:"Sensor Gas",
                        data:[]
                    }]
                });
            });    
        </script>