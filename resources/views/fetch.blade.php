<html>
    
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carlito:wght@400;700&display=swap" rel="stylesheet">
        <link rel='stylesheet' href="{{ asset('style/map.style.css') }}"/>

        <script src="https://kit.fontawesome.com/b6c762e6a8.js" crossorigin="anonymous"></script>

    </head>
    <body class='withbodybg'>
        <div class='flex-it'>
            <div class='left-div width-35'>
                <div class='logo-div mg-top'>
                    <img src="{{ asset('/minda_images/mdflogo_1.png') }}" id='mastlogo' style='width: 700px;'/>
                    <!-- <img src='minda_images/logo-masthead-large.png'/> -->
                </div>
                <div class='thedetailsdiv'>
                    <!-- <p class='thedocumenttitle'> List of Programs and Projects </p> -->
                    <div class='odanavs'>
                        <ul class='navigationul'>
                            <li data-oda='adb' class='theoda'> ADB </li>
                            <li data-oda='aus' class='theoda'> AUS </li>
                            <li data-oda='eu' class='theoda'> EU </li>
                            <li data-oda='giz' class='theoda'> GIZ </li>
                            <li data-oda='jica' class='theoda'> JICA </li>
                            <li data-oda='koica' class='theoda'> KOICA </li>
                            <!-- <li data-oda='neda' class='theoda'> NEDA </li> -->
                            <!-- <li data-oda='nedamespes' class='theoda'> NEDA - MES_PES </li> -->
                            <li data-oda='unfao' class='theoda'> UN FAO </li>
                            <li data-oda='undp' class='theoda'> UNDP </li>
                            <li data-oda='usaid' class='theoda'> USAID </li>
                            <li data-oda='worldbank' class='theoda'> WORLD BANK </li>
                            <li data-oda='nzaid' class='theoda'> NZ AID </li>
                        </ul>
                    </div>
                   <span id='thedetails'> 
                    <!-- <div id='chart'></div> -->
                        <!-- <div class='spinner-div'>                       
                            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                        </div> -->
                   </span>
                </div>
            </div>
            <div class='right-div'>
                <p class='bdashboard'> 
                    <a href="{{ url('mindanao/page1') }}"/> <i class="fa fa-chevron-left" aria-hidden="true"></i> To Dashboard </a> &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="{{route('allpartners')}}"/> <i class="fa fa-chevron-left" aria-hidden="true"></i> ODA Directory </a>
                </p>
                <div class='right-div-points'>
                    <div class='mindanao-point theregion' id='mindanao' data-region='mindanao' data-thename='Entire Mindanao'> </div>
                    <div class='map-point theregion' id='dinagatisland'data-region='dinagatisland' data-thename='Dinagat Island'> </div>
                    <div class='map-point theregion' id='surigaodelnorte' data-region='surigaodelnorte' data-thename='Surigao Del Norte'> </div>
                    <div class='map-point theregion' id='agusandelnorte' data-region='agusandelnorte' data-thename='Agusan Del Norte'> </div>
                    <div class='map-point theregion' id='butuan' data-region='butuan' data-thename='Butuan'> </div>
                    <div class='map-point theregion' id='agusandelsur' data-region='agusandelsur' data-thename='Agusan Del Sur'> </div>
                    <div class='map-point theregion' id='surigaodelsur' data-region='surigaodelsur' data-thename='Surigao Del Sur'> </div>
                    <div class='map-point theregion' id='davaodelnorte' data-region='davaodelnorte' data-thename='Davao Del Norte'> </div>
                    <div class='map-point theregion' id='davaodeoro' data-region='davaodeoro' data-thename='Davao De Oro'> </div>
                    <div class='map-point theregion' id='davaooriental' data-region='davaooriental' data-thename='Davao Oriental'> </div>
                    <div class='map-point theregion' id='davaocity' data-region='davaocity' data-thename='Davao City'> </div>
                    <div class='map-point theregion' id='davaodelsur' data-region='davaodelsur' data-thename='Davao Del Sur'> </div>
                    <div class='map-point theregion' id='davaooccidental' data-region='davaooccidental' data-thename='Davao Occidental'> </div>
                    <div class='map-point theregion' id='generalsantos' data-region='generalsantos' data-thename='General Santos'> </div>
                    <div class='map-point theregion' id='sarangani'  data-region='sarangani' data-thename='Sarangani'> </div>
                    <div class='map-point theregion' id='camiguin' data-region='camiguin' data-thename='Camiguin Island'> </div>
                    <div class='map-point theregion' id='misamisoriental'  data-region='misamisoriental' data-thename='Misamis Oriental'> </div>
                    <div class='map-point theregion' id='cagayandeoro' data-region='cagayandeoro' data-thename='Cagayan De Oro'> </div>
                    <div class='map-point theregion' id='iligan'  data-region='iligan' data-thename='Iligan City'> </div>
                    <div class='map-point theregion' id='bukidnon'  data-region='bukidnon' data-thename='Bukidnon'> </div>
                    <div class='map-point theregion' id='cotabato'  data-region='cotabato' data-thename='Cotabato'> </div>
                    <div class='map-point theregion' id='southcotabato'  data-region='southcotabato' data-thename='South Cotabato'> </div>
                    <div class='map-point theregion' id='lanaodelnorte'  data-region='lanaodelnorte' data-thename='Lanao Del Norte'> </div>
                    <div class='map-point theregion' id='lanaodelsur'  data-region='lanaodelsur' data-thename='Lanao Del Sur'> </div>
                    <div class='map-point theregion' id='cotabatocity'  data-region='cotabatocity' data-thename='Cotabato City'> </div>
                    <div class='map-point theregion' id='maguindanao'  data-region='maguindanao' data-thename='Maguindanao'> </div>
                    <div class='map-point theregion' id='sultankudarat'  data-region='sultankudarat' data-thename='Sultan Kudarat'> </div>
                    <div class='map-point theregion' id='misamisoccidental' data-region='misamisoccidental' data-thename='Misamis Occidental'> </div>
                    <div class='map-point theregion' id='zamboangadelsur'  data-region='zamboangadelsur' data-thename='Zamboanga Del Sur'> </div>
                    <div class='map-point theregion' id='zamboangadelnorte' data-region='zamboangadelnorte' data-thename='Zamboanga Del Norte'> </div>
                    <div class='map-point theregion' id='zamboangasibugay' data-region='zamboangasibugay' data-thename='Zamboanga Sibugay'> </div>
                    <div class='map-point theregion' id='zamboangacity' data-region='zamboangacity' data-thename='Zamaboanga City'> </div>
                    <div class='map-point theregion' id='basilan' data-region='basilan' data-thename='Basilan'> </div>
                    <div class='map-point theregion' id='sulu' data-region='sulu' data-thename='Jolo Sulu'> </div>
                    <div class='map-point theregion' id='tawitawi' data-region='tawitawi' data-thename='Tawi-tawi'> </div>

                    <!-- <img class='mindanaomap' src="minda_images/mindanao_map_minda_colors_withlabels_1.png" usemap="#image-map"> -->
                </div>
                
                <div class='change'> </div> -->
                <img class='mindanaomap' src="minda_images/mindanao_map_minda_colors_withlabels_1.png" usemap="#image-map">
                <!-- <map name="image-map">
                    <area class = 'theregion' data-region='surigao' alt="Surigao Region" title="Surigao Region" coords="1086,12,1081,21,1079,29,1071,26,1069,37,1070,48,1070,56,1062,67,1067,75,1078,71,1078,81,1086,92,1081,99,1079,111,1071,113,1059,109,1051,119,1049,137,1059,164,1065,182,1070,202,1070,222,1066,232,1055,236,1037,238,1026,226,1026,242,1029,259,1027,286,1029,321,1035,337,1047,350,1049,365,1050,381,1054,389,1074,389,1091,390,1120,388,1141,388,1153,396,1166,388,1188,388,1193,400,1203,389,1203,377,1207,360,1207,349,1193,356,1188,350,1197,342,1188,333,1197,327,1192,314,1200,311,1189,303,1176,302,1162,301,1154,290,1165,283,1176,278,1180,270,1186,265,1190,248,1181,236,1173,227,1164,216,1169,199,1172,187,1158,195,1148,196,1138,184,1126,168,1122,158,1133,150,1140,133,1149,128,1157,120,1168,112,1157,104,1157,91,1150,75,1144,85,1133,93,1133,104,1141,113,1138,124,1129,119,1129,128,1125,137,1124,144,1116,150,1104,143,1091,139,1081,129,1086,105,1097,102,1096,90,1090,82,1097,70,1090,58,1087,44,1090,31,1093,20" shape="poly">
                    <area class = 'theregion' data-region='davao' alt="Davao Region" title="Davao Region" coords="1055,389,1092,389,1119,387,1142,385,1154,395,1169,385,1190,387,1195,401,1201,411,1214,420,1228,427,1225,439,1229,452,1230,464,1225,471,1222,480,1232,488,1226,498,1217,510,1210,523,1210,532,1198,534,1187,540,1194,553,1191,562,1183,550,1174,540,1163,548,1173,562,1179,569,1174,582,1174,598,1173,611,1171,626,1169,637,1162,617,1155,601,1153,586,1157,571,1153,555,1142,550,1139,534,1134,523,1125,508,1119,491,1114,478,1101,486,1091,496,1091,507,1098,502,1105,507,1110,515,1107,526,1110,539,1107,547,1092,544,1099,536,1097,524,1087,518,1080,524,1071,526,1066,535,1066,547,1055,557,1050,567,1050,579,1052,593,1064,595,1080,610,1091,637,1098,662,1094,681,1087,700,1072,717,1062,730,1056,742,1067,761,1064,776,1051,777,1051,767,1058,755,1050,749,1043,742,1052,729,1062,712,1067,700,1067,686,1071,670,1067,653,1063,637,1056,629,1060,614,1048,605,1036,610,1027,614,1019,605,1020,590,1012,579,1012,563,1022,550,1032,540,1040,528,1039,514,1032,504,1031,487,1031,470,1034,452,1038,440,1055,443,1062,429,1059,412,1059,400" shape="poly">
                    <area alt="Maguindanao" title="Maguindanao" coords="1030,449,1030,465,1030,485,1034,506,1040,522,1039,532,1031,544,1023,553,1011,565,1014,581,1022,590,1023,604,1032,616,1046,604,1059,615,1056,629,1064,643,1068,657,1070,675,1064,689,1066,704,1056,716,1048,735,1039,743,1034,728,1023,719,1018,710,1024,699,1032,689,1034,673,1023,668,1014,679,1006,696,998,703,972,703,951,692,923,679,895,665,874,651,862,637,850,619,846,601,850,588,845,572,885,572,920,574,931,564,927,553,948,550,945,562,953,569,959,581,964,588,976,585,984,580,992,572,981,568,971,566,965,552,964,533,965,521,957,512,947,502,949,516,944,525,949,534,944,538,935,534,927,528,917,524,912,513,920,501,912,495,901,502,893,508,904,490,912,477,915,465,911,450,909,438,923,431,931,441,939,442,948,438,956,441,964,449,963,459,969,469,983,474,996,475,1010,469,1019,459" shape="poly">
                    <area alt="Cagayan Region" title="Cagayan Region" coords="1022,220,1027,240,1027,265,1029,299,1034,335,1050,351,1049,370,1055,401,1059,425,1057,438,1046,442,1035,438,1030,443,1022,450,1018,459,1014,470,1002,473,989,475,976,471,966,463,963,449,956,438,951,426,943,414,935,403,927,390,923,372,911,362,898,355,886,351,883,362,879,372,868,382,860,388,859,399,841,399,845,410,843,421,840,429,827,426,815,425,807,430,803,421,797,414,788,411,792,398,793,388,788,379,780,376,777,366,773,350,773,330,774,307,774,292,781,283,789,289,801,291,808,297,817,324,820,344,817,362,805,376,801,387,817,370,829,368,839,356,851,356,868,355,877,347,879,336,883,322,884,307,895,296,908,292,916,300,939,307,948,312,955,304,956,293,956,284,951,277,956,267,958,255,958,243,963,231,956,220,942,212,936,204,942,193,956,199,962,209,966,221,972,229,976,235,989,240,1002,255,1015,256,1018,246" shape="poly">
                    <area alt="Lanao Region" title="Lanao Region" coords="886,349,902,361,919,366,926,381,935,404,948,421,958,440,942,437,935,438,924,430,911,438,910,450,915,468,910,482,899,494,892,508,910,497,924,499,914,511,915,525,928,532,939,539,951,529,948,516,947,501,964,524,964,540,964,560,975,565,980,580,991,573,983,567,975,587,962,585,956,573,948,564,946,549,927,552,930,563,920,573,888,573,847,571,839,563,836,547,845,527,852,507,865,504,872,490,877,474,865,472,856,456,844,440,831,430,812,428,841,425,845,409,844,398,859,395,863,379,876,377,881,366" shape="poly">
                    <area alt="Zamboanga Region" title="Zamboanga Region" coords="773,294,773,318,771,354,777,377,790,385,791,397,784,409,773,409,757,415,759,426,763,437,752,446,741,456,749,466,757,473,755,484,744,477,733,466,727,456,719,462,709,458,716,443,707,429,699,441,692,451,692,466,677,454,672,468,669,477,681,473,685,484,674,488,664,493,656,478,661,465,664,453,658,437,664,425,650,421,629,426,612,441,604,456,616,451,610,462,594,466,594,477,601,484,586,488,581,501,581,517,572,525,572,533,585,536,576,546,567,544,563,552,550,572,547,580,549,596,537,596,531,589,535,580,535,569,551,561,555,549,543,544,533,538,527,522,529,502,546,494,550,485,550,466,561,451,558,430,561,411,574,395,586,383,608,375,636,369,641,362,652,366,662,368,686,358,692,349,684,333,692,322,696,310,708,305,722,306,734,307,744,297,749,285,750,274,762,279" shape="poly">
                    <area alt="Tawi Tawi" title="Tawi Tawi" coords="554,572,566,576,575,584,587,584,597,587,583,594,573,600,576,611,562,618,544,623,546,631,546,643,521,661,522,670,538,670,536,681,524,685,510,674,498,686,484,693,460,689,453,699,442,701,438,707,427,714,414,718,409,731,399,735,391,734,382,730,375,741,381,750,383,760,373,761,367,754,362,761,300,789,299,805,300,814,294,824,284,825,279,814,268,806,259,812,247,812,243,822,249,830,249,842,237,837,239,829,232,822,219,825,220,836,219,845,227,852,228,865,215,864,213,855,209,842,209,829,168,848,173,861,172,873,167,885,161,879,163,865,161,855,163,838,173,838,188,833,209,818,220,806,232,809,239,798,249,792,263,789,280,777,287,789,354,760,360,747,371,730,363,727,377,721,386,715,390,725,398,726,418,702,429,702,434,691,425,690,417,694,410,699,399,690,394,697,382,698,375,690,382,677,339,643,331,644,322,648,314,659,312,667,302,655,21,537,7,529,18,519,33,525,30,537,288,647,308,653,318,638,327,630,332,620,356,615,358,626,342,626,338,634,375,666,391,671,413,667,427,681,444,679,453,682,453,670,465,675,470,686,479,685,488,677,498,670,507,662,516,651,536,643,535,631,536,616,527,606,520,595,511,590,488,584,491,596,483,599,476,590,475,575,486,572,495,582,503,586,515,580,523,579,531,583,532,595,547,596,546,579" shape="poly">
                </map> -->
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script>
                // var options = {
                //   chart: {
                //     type: 'radialBar'
                //   },
                //   name : "Sales",
                //   dataLabels: {
                //       enabled: true
                //   },
                //   series: [23,26,37,12],
                // }

                // var chart = new ApexCharts(document.querySelector("#chart"), options);

                // chart.render();
        </script>
        <!-- jQuery Script -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
            var url = "{{ url('/') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let region = false;
            let oda    = false;

            $(document).on("click",".theregion", function(){
                let thename = $(this).data("thename");
       
                let id      = $(this).attr("id");
                
                $(document).find(".droppin").remove();
                $(document).find(".city-caption").remove();

                $("<p class='absolute-it city-caption' id='"+id+"'> "+thename+" </p>").appendTo(".right-div-points");
                $("<img src='minda_images/pindrop.png' class='absolute-it droppin' id='"+id+"'/>").appendTo(".right-div-points");

                region = $(this).data('region');
                
                // reset funder 
                    oda    = false;
                    $(document).find(".navigationul li").removeClass("selected");
                // end reset funder

                display("data");
            }).on("mouseover", ".theregion",function(){
                let thename = $(this).data("thename");
       
                let id      = $(this).attr("id");

                $("<p class='absolute-it city-caption hoverit' id='"+id+"'> "+thename+" </p>").appendTo(".right-div-points");
            }).on("mouseout",".theregion", function(){                
                $(document).find(".hoverit").remove();
            });

            $(document).on("click",".theoda", function(){
                oda = $(this).data("oda");

                display("data");
            });

            $(document).on("click",".navigationul li", function(){
                $(this).siblings().removeClass("selected");
                $(this).addClass("selected");
            });

            $(document).on("click",".closethis", function(){
                $(document).find("#thedivdetails").fadeOut(function(){
                    $(document).find("#thedivdetails").remove();
                });
            });

            $(document).on("click","#detlist li", function(e){
                var targetid = e.target.id; // thedivdetails
                var odaid    = $(this).data("odaid");
                var donorid  = $(this).data("agencyid");

                // if (targetid == "" || targetid.length == 0) {
                    let thenavli = $(this);

                    $(this).siblings().removeClass("selectedbig-li");
                    $(this).addClass("selectedbig-li");

                    $(document).find("#thedivdetails").remove();

                    $("<div>", { id : "thedivdetails"}).animate({
                        "width" : "57.6%"
                    }, function(){
                        $.ajax({
                            url        : url+"/fetchinformation",
                            type       : "get",
                            data       : { odaid : odaid , donorid : donorid },
                            dataType   : "html",
                            success    : function(data){
                                $(document).find("#thedivdetails").html(data);     
                            }, error   : function(){
                                alert("NO DATA FOUND");
                            }
                        });
                        // $(document).find("#thedivdetails").html("<p> Hello world </p>");
                        // $("<p> Hello world </p>").appendTo("#thedivdetails");    //
                    }).appendTo(document.body); //thenavli
                //} 
                
            }).on("mouseout","#detlist li", function(){
                // $(document).find("#thedivdetails").remove();
            });

            // map clicks 
            $(document).on("click",".tab-div ul li", function(){
                var divid = $(this).data("divid");

                $(this).siblings().removeClass("tab-div-selected");
                $(this).addClass("tab-div-selected");

                $(document).find(".divcommonname").hide();
                $(document).find("#"+divid).show();

            });
            // end map clicks

            // watch videos 
                // $(document).on("click","#watchvid", function(){
                //     let vidurl = $(this).data("vidurl");

                //     $("<div id='thevideourl'>  </div>").appendTo('body');
                // });
            // end watch videos

            function display(data) {
                var mgtop  = $(document).find(".mg-top");
                var logimg = $(document).find("#mastlogo"); 

                mgtop.animate({
                    "margin-top" : "0"
                }, 300);

                logimg.animate({
                    "width":"300px"
                });

                $(document).find("#thedetails").children().remove();

                $(document).find("#thedetails").html("<div class='spinner-div'>"+
                                                        "<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i>"+
                                                    "</div>");

                //fetchgraph
                // fetchdonors
                $.ajax({
                    url     : url+"/fetchdonors",
                    type    : "get",
                    data    : { locationid : region, donorid : oda },
                    dataType: "html",
                    success : function(data){
                        $(document).find("#thedetails").children().remove();
                        $(document).find("#thedetails").animate({
                            "height":"100%"
                        }).html(data);
                    }, error : function(){
                        alert('error')
                    }
                });

            }
        </script>
    </body>

</html>