<?php

$search = $_GET['q'];


$connect = mysqli_connect('localhost', '', '', 'lugle');
$fetch = mysqli_query($connect, "SELECT * FROM sites WHERE address LIKE '%$search%' or title LIKE '%$search%' or description LIKE '%$search%' or 
link LIKE '%$search%'
");
$sites = mysqli_fetch_all($fetch);

//echo "<pre>";
//print_r($sites);
//echo "</pre>";
?>

<html itemscope="" itemtype="http://schema.org/SearchResultsPage" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="origin" name="referrer">
    <meta content="Anb2GUnhMjfTIX0D2a4a6NPAqPI5GaxxRAiF81XTjHJ2qK4E3Hw3VFM4eaJBgRzz45CNPt624audv+wHOJwfAAEAAABieyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IlRydXN0VG9rZW5zIiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZX0="
          http-equiv="origin-trial">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <title><?php echo "$search"?></title>
    <script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.gapi.en.7RphtNcGHDQ.O/m=gapi_iframes,googleapis_client/rt=j/sv=1/d=1/ed=1/rs=AHpOoo_-zmYhp_Ir7_CCxM3l-AckMvaI9A/cb=gapi.loaded_0"
            nonce="PCXE7eZwiDCiQOLEqBgJBw==" async=""></script>
    <link type="text/css" rel="stylesheet"
           href="searchstyle.css">
    <script async="" type="text/javascript" charset="UTF-8"
            src="https://www.gstatic.com/og/_/js/k=og.qtm.en_US.eyZtLN7gU00.O/rt=j/m=qabr,qgl,q_dnp,qdid,qcwid,qapid/exm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/rs=AA2YrTvbnfZ7vgSllYOF3f_IHBGeFFy7Mg"
            nonce="PCXE7eZwiDCiQOLEqBgJBw=="></script>
    <link type="text/css" rel="stylesheet"
          href="https://www.gstatic.com/og/_/ss/k=og.qtm.nPcbsUYOAq8.L.W.O/m=qdid,qcwid/excm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/ct=zgms/rs=AA2YrTvLFQTd9rUB9amODovfQRc7a3U40A">
    <link rel="preconnect" href="https://www.googleadservices.com/">
</head>
<body jsmodel="TvHxbe" class="srp" jscontroller="Eox39d" marginheight="3" topmargin="3"
      jsaction="rcuQ6b:npT2md;YUC7He:.CLIENT;IVKTfe:.CLIENT;HiCeld:.CLIENT;KsNBn:.CLIENT;sbTXNb:.CLIENT;xjhTIf:.CLIENT;O2vyse:.CLIENT;Ez7VMc:.CLIENT;qqf0n:.CLIENT;me3ike:.CLIENT;IrNywb:.CLIENT;Z94jBf:.CLIENT;A8708b:.CLIENT;YcfJ:.CLIENT;A6SDQe:.CLIENT;LjVEJd:.CLIENT;NTJodf:.CLIENT;szjOR:.CLIENT;PY1zjf:.CLIENT;wnJTPd:.CLIENT;VM8bg:.CLIENT;hWT9Jb:.CLIENT;WCulWe:.CLIENT;JL9QDc:.CLIENT;kWlxhc:.CLIENT;qGMTIf:.CLIENT;aeBrn:.CLIENT;vPBs3b:.CLIENT"
      id="gsr">
<div class="Q3DXx yIbDgf">
    <form class="tsf" action="search.php" id="tsf" data-submitfalse="q" method="GET" name="f" role="search">
        <div jsmodel="vWNDde" jsdata="MuIEvd;_;BWTqdE">
            <div jscontroller="W5mjOc" jsmodel="QubRsd OjLGdd" class="A8SBwf" jsdata="LVplcb;_;" jsaction="lX6RWd:w3Wsmc;DkpM0b:d3sQLd;IQOavd:dFyQEf;XzZZPe:jI3wzf;Aghsf:AVsnlb;iHd9U:Q7Cnrc;f5hEHe:G0jgYd;vmxUb:j3bJnb;R2c5O:LuRugf;qiCkJd:ANdidc;NOg9L:HLgh3;uGoIkd:epUokb;zLdLw:eaGBS;rcuQ6b:npT2md">
                <div class="logo doodle"><a href="https://lugle.ru" data-hveid="9">
                        <img  height="33" src="images/logo.png" title="Первый учебный день&nbsp;– 2021" width="92" border="0" data-atf="1" data-frt="0"></a></div>
                <div class="RNNXgb" jsname="RNNXgb">
                    <div class="SDkEP">
                        <div class="iblpc" jsname="uFMOof">
                            <div class="CcAdNb"><span class="QCzoEc z1asCe MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span>
                            </div>
                        </div>
                        <div jscontroller="JGHKP" class="a4bIc" jsname="gLFyf" jsaction="h5M12e;input:d3sQLd;blur:jI3wzf">
                            <div class="pR49Ae gsfi" jsname="vdLsw"></div>
                            <div jsname="aJyGR" jscontroller="xMclgd" class="gLFyf i4ySpb gsfi" data-promo-open-duration="2000" jsaction="rcuQ6b:npT2md">
                                <g-snackbar jsname="nH91he" jscontroller="OZLguc" style="display:none" data-dismiss="" jsshadow="" jsaction="rcuQ6b:npT2md" id="ow12" __is_owner="true">
                                    <div jsname="Ng57nc" class="CIKhFd v0rrvd" data-ved="0ahUKEwiy3L_wp9zyAhW9RvEDHfvqBesQ4G8ICw" jsowner="ow12">
                                        <div class="EA3l1b">
                                            <div class="Xb004" jsslot=""><span class="awHmMb xy0YY Sxjlmb">Чтобы перейти к окну поиска, нажмите <span class="qfY0Jf">/</span>.</span></div>
                                        </div>
                                    </div>
                                </g-snackbar>
                            </div>



                            <input class="gLFyf gsfi" jsaction="paste:puy29d; mouseenter:MJEKMe; mouseleave:iFHZnf;" maxlength="2048" name="q" type="text" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" role="combobox" spellcheck="false" value="<?php echo "$search" ?>" aria-label="Найти" data-ved="0ahUKEwiy3L_wp9zyAhW9RvEDHfvqBesQ39UDCAw"></div>


                    </div>
                    <button class="Tg7LZd" jsname="Tg7LZd" aria-label="Поиск в Google" type="submit" data-ved="0ahUKEwiy3L_wp9zyAhW9RvEDHfvqBesQ4dUDCA8">
                        <div class="zgAlFc"><span class="z1asCe MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span>
                        </div>

                    </button>
                </div>
                <?php

                foreach ($sites as $site){
                  echo '
                  <div style="margin-top: 50px;">
                    <p style="font-size: 16px;">'.$site[4].'</p>
                    <a href="'.$site[4].'" style="font-size: 21px;" target="_blank">'.$site[2].'</a>
                    <p style="font-size: 18px;">'.$site[3].'</p>
                </div>
                  ';
                }

                ?>

            </div>
            <div style="background:url(/images/searchbox/desktop_searchbox_sprites318_hr.webp)"></div>
        </div>


    </form>

</div>


</body>
</html>