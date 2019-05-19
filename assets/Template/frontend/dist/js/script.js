 
    //deklarasi variabel
    var chart,chart_modal;
    var total=0;
    var waktu=[];
    var cari=document.getElementById('inp_src');
    var btn_src=document.getElementById('btn_src');


    //fungsi getdata grafik menu utama
    function getData(){
        $.ajax({
            url:'http://localhost/monitoring/front/getData',
            dataType:'json',
            success:function(result){
                if(result.length>total){
                    total=result.length;
                    var data=result.pop();
                    var konfersi=new Date(Date.parse(data.waktu));
                    var temp=konfersi.getHours()+" : "+konfersi.getMinutes()+" : "+konfersi.getSeconds();
                    waktu.push(temp);
                    var temperature=Number(data.sensor_gas);
                    var tinggi_air=Number(data.tinggi_air);
                    //grafik
                    chart.series[0].addPoint(temperature,true,false);
                    chart.series[1].addPoint(tinggi_air,true,false);
                    chart.xAxis[0].setCategories(waktu);
                    //box sensor
                    $('#temperature').text(temperature);
                    $('#tinggi_air').text(tinggi_air);
                }
                setTimeout(getData,1000);
            }
        });
    }
    //akhir fungsi getdata grafik menu utama

    //fungsi cari
    btn_src.addEventListener('click',function(){
        var input=cari.value;
        var grafik_modal=document.getElementById('grafik-modal');
        if(input.length==0){
            grafik_modal.innerHTML=`<div class='alert alert-danger'>Maaf,Sepertinya terjadi kesalahan...Silahkan Masukan Input Kembali dengan Benar</div>`;
        }else{
            $.ajax({
                url:'http://localhost/monitoring/front/get_where',
                dataType:'json',
                data:{tanggal:input},
                success:function(result){
                    if(result.length==0){
                        grafik_modal.innerHTML=`<div class='alert alert-danger'>
                                                    Data Tidak di temukan..Maaf yaa..
                                                </div>`;
                    }else{
                        var t_air=[];
                            suhu=[];
                            categories=[];
                        var data=result;
                        for(var i=0;i<data.length;i++){
                            t_air.push(Number(data[i].sensor_gas));
                            suhu.push(Number(data[i].tinggi_air));
                            categories.push(data[i].waktu);
                        }
                        tampil_chart_modal(suhu,t_air,categories); 
                    }
                }
            });
        }
    });
    //akhir fungsi cari


    //fungsi modal chart
    function tampil_chart_modal(suhu,t_air,categorie){
        chart_modal=Highcharts.chart('grafik-modal',{
                title:{
                    text:'Chart'
                },
                xAxis:{
                    type:'datetime',
                    categories:categorie
                },
                yAxis:{
                    title:{
                        text:'Data Sensor'
                    }
                },
                series:[{
                    name:'Sensor Suhu',
                    data:suhu
                },
                {
                    name:'Tinggi Air',
                    data:t_air
                }
                ]
            });
    }
    //akhir fungsi modal chart


    //fungsi chart menu utama
    document.addEventListener('DOMContentLoaded',function(){

        chart=Highcharts.chart('grafik',{
            chart:{
                events:{
                    load:getData
                }
            },
            title:{
                text:'Monitoring Ketinggian Air di Randusanga'
            },
            xAxis:{
                type:'datetime',
                title:{
                    text:'Waktu'
                }
            },
            yAxis:{
                title:{
                    text:'Data Sensor'
                }
            },
            series:[{
                name:'Temperature',
                data:[]
            },{
                name:'Tinggi Air',
                data:[]
            }]
        });
    });
    //akhir chart menu utama
