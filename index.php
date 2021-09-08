<?php
require_once 'vendor/autoload.php';


if(isset($_SERVER['REMOTE_ADDR'])){
    $ip = $_SERVER['REMOTE_ADDR'];
    $connect = mysqli_connect('localhost', '', '', 'lugle');
    $fetch = mysqli_query($connect, "INSERT INTO users (ip) VALUES ('$ip')");
    $sites = mysqli_fetch_all($fetch);
}
?>

<!DOCTYPE HTML>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta content="origin" name="referrer">
    <meta content="/images/googleg_standard_color_128dp.png" itemprop="image">
    <title>Google</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.gapi.en.7RphtNcGHDQ.O/m=gapi_iframes,googleapis_client/rt=j/sv=1/d=1/ed=1/rs=AHpOoo_-zmYhp_Ir7_CCxM3l-AckMvaI9A/cb=gapi.loaded_0"
            nonce="5GttHyw+Za99gGImmIw1qg==" async=""></script>

    <link type="text/css" rel="stylesheet" href="style.css">
    <script async="" type="text/javascript" charset="UTF-8"
            src="https://www.gstatic.com/og/_/js/k=og.qtm.en_US.eyZtLN7gU00.O/rt=j/m=qabr,qgl,q_dnp,qdid,qcwid,qbg,qbd,qapid,qald/exm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/rs=AA2YrTvbnfZ7vgSllYOF3f_IHBGeFFy7Mg"
            nonce="5GttHyw+Za99gGImmIw1qg=="></script>
    <link type="text/css" rel="stylesheet"
          href="https://www.gstatic.com/og/_/ss/k=og.qtm.nPcbsUYOAq8.L.W.O/m=qdid,qcwid/excm=qaaw,qadd,qaid,qein,qhaw,qhbr,qhch,qhga,qhid,qhin,qhpr/d=1/ed=1/ct=zgms/rs=AA2YrTvLFQTd9rUB9amODovfQRc7a3U40A">
    <script type="text/javascript" charset="UTF-8"
            src="//www.google.com/js/bg/6gKGIMOXYYAaEt2loOPE_y5Y_PepjaUwyzoGEOWjQQI.js"
            nonce="5GttHyw+Za99gGImmIw1qg=="></script>
</head>
<body jsmodel="TvHxbe"
      jsaction="YUC7He:.CLIENT;IVKTfe:.CLIENT;HiCeld:.CLIENT;KsNBn:.CLIENT;sbTXNb:.CLIENT;xjhTIf:.CLIENT;O2vyse:.CLIENT;Ez7VMc:.CLIENT;qqf0n:.CLIENT;me3ike:.CLIENT;IrNywb:.CLIENT;Z94jBf:.CLIENT;A8708b:.CLIENT;YcfJ:.CLIENT;A6SDQe:.CLIENT;LjVEJd:.CLIENT;VM8bg:.CLIENT;hWT9Jb:.CLIENT;WCulWe:.CLIENT;NTJodf:.CLIENT;szjOR:.CLIENT;PY1zjf:.CLIENT;wnJTPd:.CLIENT;JL9QDc:.CLIENT;kWlxhc:.CLIENT;qGMTIf:.CLIENT;vPBs3b:.CLIENT">
<style data-iml="1630447797605">.L3eUgb {
        display: flex;
        flex-direction: column;
        height: 100%
    }

    .o3j99 {
        flex-shrink: 0;
        box-sizing: border-box
    }

    .n1xJcf {
        height: 60px
    }

    .LLD4me {
        min-height: 150px;
        max-height: 290px;
        height: calc(100% - 560px)
    }

    .yr19Zb {
        min-height: 92px
    }

    .ikrT4e {
        max-height: 160px
    }

    .qarstb {
        flex-grow: 1
    }</style>
<div class="L3eUgb" data-hveid="1">
    <div class="o3j99 n1xJcf Ne6nSd">
        <style data-iml="1630447797605">.Ne6nSd {
                display: flex;
                align-items: center;
                padding: 6px
            }

            .LX3sZb {
                display: inline-block;
                flex-grow: 1
            }</style>

    </div>
    <div class="o3j99 LLD4me LS8OJ">
        <style data-iml="1630447797610">.LS8OJ {
                display: flex;
                flex-direction: column;
                align-items: center
            }

            .k1zIA {
                height: 100%;
                margin-top: auto
            }</style>
        <div class="k1zIA kKvsb">
            <style data-iml="1630447797610">.kKvsb {
                    max-height: 230px;
                    position: relative;
                    text-align: center;
                    margin-left: 40px;
                    margin-right: 40px
                }

                .lnXdpd {
                    max-height: 100%;
                    max-width: 100%;
                    object-fit: contain;
                    object-position: center bottom;
                    width: auto;
                    vertical-align: bottom
                }

                .SuUcIb {
                    height: 24px;
                    width: 24px;
                    position: absolute;
                    right: -32px;
                    bottom: 12px
                }

                @media (pointer: coarse) {
                    .SuUcIb {
                        height: 40px;
                        width: 40px
                    }
                }</style>
            <div style="height:calc(100% - 200px)"></div>
            <a href="#">

                    <img class="lnXdpd" height="200"
                         src="images/logo.png"
                        >
            </a>
            <div class="SuUcIb">
                <style data-iml="1630447797610">.kmjBcc {
                        cursor: pointer;
                        height: 100%;
                        width: 100%;
                        padding: 2px;
                        position: relative
                    }

                    .TZ7Mtd {
                        border-radius: 4px;
                        bottom: 0;
                        left: 0;
                        position: absolute;
                        right: 0;
                        top: 0;
                        z-index: -1
                    }

                    .GVqCqe {
                        height: 100%;
                        opacity: 0.64;
                        width: auto;
                        vertical-align: bottom
                    }

                    .kmjBcc:hover .GVqCqe {
                        opacity: 1
                    }</style>
                <button class="kmjBcc" data-async-trigger="ddlshare" title="Поделиться" jsaction="trigger.szjOR"
                        data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ4zgIAw">
                    <div class="TZ7Mtd" style="background-color:#ffffff;opacity:0"></div>
                    <img class="GVqCqe"
                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAoklEQVR42mNgSPvPQAZ2AOKZQPwAimdCxRBqyDT0DBD/R8NnUAwnw+CZWAyF4ZmUGPwAj8EPBp3BzkB8mdSgwBfTMkC8EsmAW8RGHq6YPgu14DOUD6IrgNiF2OSGL6ZheDUQyxEdbEREyCcgdiU5kkmKaTIMxhcUlylxMa7Iu0VpGONKbqDYL6ckVRDCZKdjmua84VkI0bQ8plkNQrM6jygMAH2nSPYgx5jtAAAAAElFTkSuQmCC"
                         alt="Поделиться" data-iml="1630447797610" data-atf="1" data-frt="0"></button>
                <input value="//g.co/doodle/pgbmm6k" class="ddl-shortlink" type="hidden"><input
                        value="//g.co/doodle/8fm3f6a" class="ddl-facebooklink" type="hidden"><input
                        value="//g.co/doodle/9g6ts9u" class="ddl-twitterlink" type="hidden"><input
                        value="//g.co/doodle/zk9eetu" class="ddl-emaillink" type="hidden"><input
                        value="//g.co/doodle/84y7ma2" class="ddl-copylink" type="hidden">
                <div jscontroller="VsqSCc" style="display:none" data-jiis="up" data-async-type="ddlshare" id="ddlshare"
                     class="yp" jsaction="wUVKEf:FL9aIe"></div>
            </div>
        </div>
    </div>
    <div class="o3j99 ikrT4e om7nvf">
        <style data-iml="1630447797610">.om7nvf {
                padding: 20px
            }</style>
        <dialog class="spch-dlg" id="spch-dlg">
            <div class="spch s2fp-h" style="display:none" id="spch">
                <style>.spch-dlg {
                        background: transparent;
                        border: none
                    }

                    .spch {
                        background: #fff;
                        height: 100%;
                        left: 0;
                        opacity: 0;
                        overflow: hidden;
                        position: fixed;
                        text-align: left;
                        top: 0;
                        visibility: hidden;
                        width: 100%;
                        z-index: 10000;
                        transition: visibility 0s linear 0.218s, background-color 0.218s
                    }

                    .close-button {
                        background: none;
                        border: none;
                        color: #70757a;
                        cursor: pointer;
                        font-size: 26px;
                        right: 0;
                        line-height: 15px;
                        opacity: .6;
                        margin: -1px -1px 0 0;
                        padding: 0 0 2px 0;
                        height: 48px;
                        width: 48px;
                        position: absolute;
                        top: 0;
                        z-index: 10
                    }

                    .close-button:hover {
                        opacity: .8
                    }

                    .close-button:active {
                        opacity: 1
                    }

                    .spchc {
                        display: block;
                        height: 42px;
                        position: absolute;
                        pointer-events: none
                    }

                    .inner-container {
                        height: 100%;
                        opacity: .1;
                        pointer-events: none;
                        width: 100%;
                        transition: opacity .318s ease-in
                    }

                    .s2ml .inner-container, .s2ra .inner-container, .s2er .inner-container {
                        opacity: 1;
                        transition: opacity 0s
                    }

                    .s2fp.spch {
                        opacity: 1;
                        visibility: visible;
                        transition-delay: 0s
                    }

                    .s2tb-h.spch {
                        background: rgba(255, 255, 255, 0);
                        opacity: 0;
                        visibility: hidden
                    }

                    .s2tb.spch {
                        background: rgba(255, 255, 255, 0);
                        opacity: 1;
                        visibility: visible;
                        transition-delay: 0s
                    }

                    .google-logo {
                        background: url(data:image/png;base64,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) no-repeat center;
                        background-size: 94px 32px;
                        height: 32px;
                        width: 94px;
                        top: 8px;
                        opacity: 0;
                        float: right;
                        left: 255px;
                        pointer-events: none;
                        position: relative;
                        transition: opacity .5s ease-in, left .5s ease-in
                    }

                    .s2tb .google-logo {
                        opacity: 0.54;
                        left: 270px;
                        transition: opacity .5s ease-out, left .5s ease-out
                    }

                    .s2fp .spchc, .s2fp-h .spchc {
                        margin: auto;
                        margin-top: 312px;
                        max-width: 572px;
                        min-width: 534px;
                        padding: 0 223px;
                        position: relative;
                        top: 0
                    }

                    .s2tb .spchc, .s2tb-h .spchc {
                        background: #fff;
                        box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
                        margin: 0;
                        min-width: 100%;
                        overflow: hidden;
                        padding: 51px 0 50px 126px;
                        position: absolute
                    }

                    .s2tb-h .inner-container, .s2tb .inner-container {
                        height: 100%;
                        width: 572px;
                        transition: opacity .318s ease-in
                    }</style>
                <style>.spch.s2tb.mVRQbc {
                        background: rgba(255, 255, 255, 0.9)
                    }</style>
                <button class="close-button" id="spchx" aria-label="закрыть">×</button>
                <div class="spchc" id="spchc">
                    <div class="inner-container">
                        <div class="button-container">
                            <style>.button {
                                    background-color: #fff;
                                    border: 1px solid #eee;
                                    border-radius: 100%;
                                    bottom: 0;
                                    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
                                    cursor: pointer;
                                    display: inline-block;
                                    left: 0;
                                    opacity: 0;
                                    pointer-events: none;
                                    position: absolute;
                                    right: 0;
                                    top: 0;
                                    transition: background-color 0.218s, border 0.218s, box-shadow 0.218s
                                }

                                .s2tb-h .button {
                                    left: -83px;
                                    opacity: 0;
                                    pointer-events: none;
                                    position: absolute;
                                    top: -83px;
                                    transition-delay: 0
                                }

                                .s2fp-h .button, .s2fpm-h .button {
                                    opacity: 0;
                                    pointer-events: none;
                                    position: absolute;
                                    transition-delay: 0
                                }

                                .s2fp .button, .s2tb .button, .s2fpm .button {
                                    opacity: 1;
                                    pointer-events: auto;
                                    position: absolute;
                                    transform: scale(1);
                                    transition-delay: 0
                                }

                                .s2ra .button {
                                    background-color: #f44;
                                    border: 0;
                                    box-shadow: none
                                }

                                .r8s4j {
                                    background-color: #dbdbdb;
                                    border-radius: 100%;
                                    display: inline-block;
                                    height: 301px;
                                    left: -69px;
                                    opacity: 1;
                                    pointer-events: none;
                                    position: absolute;
                                    top: -69px;
                                    width: 301px;
                                    transform: scale(.01);
                                    transition: opacity 0.218s
                                }

                                .s2tb-h .r8s4j, .s2tb .r8s4j {
                                    height: 151px;
                                    left: -28px;
                                    top: -28px;
                                    width: 151px
                                }

                                .button-container {
                                    pointer-events: none;
                                    position: relative;
                                    transition: transform 0.218s, opacity 0.218s ease-in
                                }

                                .s2fp-h .button-container, .s2fp .button-container {
                                    height: 165px;
                                    right: -70px;
                                    top: -70px;
                                    width: 165px;
                                    float: right
                                }

                                .s2fpm-h .button-container, .s2fpm .button-container {
                                    height: 165px;
                                    margin: 0 auto;
                                    top: 150px;
                                    width: 165px
                                }

                                .s2fp-h .button-container, .s2tb-h .button-container, .s2fpm-h .button-container {
                                    transform: scale(.1)
                                }

                                .s2fp .button-container, .s2fpm-h .button-container, .s2tb .button-container {
                                    transform: scale(1)
                                }

                                .s2tb-h .button-container, .s2tb .button-container {
                                    height: 95px;
                                    right: -31px;
                                    top: -27px;
                                    width: 95px;
                                    float: right
                                }

                                .s2ra .button:active {
                                    background-color: #cd0000
                                }

                                .button:active {
                                    background-color: #eee
                                }</style>
                            <span class="r8s4j" id="spchl"></span><span class="button" id="spchb"><div
                                        class="microphone"><style>.microphone {
                                            height: 87px;
                                            left: 43px;
                                            pointer-events: none;
                                            position: absolute;
                                            top: 47px;
                                            width: 42px;
                                            transform: scale(1)
                                        }

                                        .s2tb-h .microphone, .s2tb .microphone {
                                            left: 17px;
                                            top: 7px;
                                            transform: scale(.53)
                                        }

                                        .receiver {
                                            background-color: #999;
                                            border-radius: 30px;
                                            height: 46px;
                                            left: 25px;
                                            pointer-events: none;
                                            position: absolute;
                                            width: 24px
                                        }

                                        .wrapper {
                                            bottom: 0;
                                            height: 53px;
                                            left: 11px;
                                            overflow: hidden;
                                            pointer-events: none;
                                            position: absolute;
                                            width: 52px
                                        }

                                        .stem {
                                            background-color: #999;
                                            bottom: 14px;
                                            height: 14px;
                                            left: 22px;
                                            pointer-events: none;
                                            position: absolute;
                                            width: 9px;
                                            z-index: 1
                                        }

                                        .shell {
                                            border: 7px solid #999;
                                            border-radius: 28px;
                                            bottom: 27px;
                                            height: 57px;
                                            pointer-events: none;
                                            position: absolute;
                                            width: 38px;
                                            z-index: 0;
                                            left: 0px
                                        }

                                        .s2ml .receiver, .s2ml .stem {
                                            background-color: #f44
                                        }

                                        .s2ml .shell {
                                            border-color: #f44
                                        }

                                        .s2ra .receiver, .s2ra .stem {
                                            background-color: #fff
                                        }

                                        .s2ra .shell {
                                            border-color: #fff
                                        }</style><span class="receiver"></span><div class="wrapper"><span
                                                class="stem"></span><span class="shell"></span></div></div></span></div>
                        <div class="text-container">
                            <style>.text-container {
                                    pointer-events: none
                                }

                                .s2fp-h .text-container, .s2fp .text-container, .s2fpm-h .text-container, .s2fpm .text-container {
                                    position: absolute
                                }

                                .s2tb-h .text-container, .s2tb .text-container {
                                    position: relative
                                }

                                .spcht {
                                    font-weight: normal;
                                    line-height: 1.2;
                                    opacity: 0;
                                    pointer-events: none;
                                    position: absolute;
                                    text-align: left;
                                    -webkit-font-smoothing: antialiased;
                                    transition: opacity .1s ease-in, margin-left .5s ease-in, top 0s linear 0.218s
                                }

                                .s2fp-h .spcht, .s2fpm-h .spcht {
                                    margin-left: 44px
                                }

                                .s2tb-h .spcht {
                                    margin-left: 32px
                                }

                                .s2fp-h .spcht, .s2fp .spcht, .s2fpm-h .spcht, .s2fpm .spcht {
                                    left: -44px;
                                    top: -.2em
                                }

                                .s2fp-h .spcht, .s2fp .spcht {
                                    font-size: 32px;
                                    width: 460px
                                }

                                .s2fpm-h .spcht, .s2fpm .spcht {
                                    font-size: 28px;
                                    width: 300px
                                }

                                .s2tb-h .spcht, .s2tb .spcht {
                                    font-size: 27px;
                                    left: 7px;
                                    top: .2em;
                                    width: 490px
                                }

                                .s2fp .spcht, .s2fpm .spcht, .s2tb .spcht {
                                    margin-left: 0;
                                    opacity: 1;
                                    transition: opacity .5s ease-out, margin-left .5s ease-out
                                }

                                .spchta {
                                    color: #15c;
                                    cursor: pointer;
                                    font-size: 18px;
                                    font-weight: 500;
                                    pointer-events: auto;
                                    text-decoration: underline
                                }

                                .spch-2l.spcht, .spch-3l.spcht, .spch-4l.spcht {
                                    transition: top 0.218s ease-out
                                }

                                .spch-2l.spcht {
                                    top: -.6em
                                }

                                .spch-3l.spcht {
                                    top: -1.3em
                                }

                                .spch-4l.spcht {
                                    top: -1.7em
                                }

                                .s2fp .spch-5l.spcht {
                                    top: -2.5em
                                }

                                .s2tb .spch-5l.spcht {
                                    font-size: 24px;
                                    top: -1.7em;
                                    transition: font-size 0.218s ease-out
                                }</style>
                            <span class="spcht" style="color:#70757a" id="spchi"></span><span class="spcht"
                                                                                              style="color:#000"
                                                                                              id="spchf"></span></div>
                        <div class="google-logo"></div>
                    </div>
                    <div class="permission-bar">
                        <style>.permission-bar {
                                margin-top: -100px;
                                opacity: 0;
                                pointer-events: none;
                                position: absolute;
                                width: 500px;
                                transition: opacity 0.218s ease-in, margin-top .4s ease-in
                            }

                            .s2wfp .permission-bar {
                                margin-top: -300px;
                                opacity: 1;
                                transition: opacity .5s ease-out 0.218s, margin-top 0.218s ease-out 0.218s
                            }

                            .permission-bar-gradient {
                                box-shadow: 0 1px 0px #4285f4;
                                height: 80px;
                                left: 0;
                                margin: 0;
                                opacity: 0;
                                pointer-events: none;
                                position: fixed;
                                right: 0;
                                top: -80px;
                                transition: opacity 0.218s, box-shadow 0.218s
                            }

                            .s2wfp .permission-bar-gradient {
                                box-shadow: 0 1px 80px #4285f4;
                                opacity: 1;
                                pointer-events: none;
                                animation: allow-alert .75s 0 infinite;
                                animation-direction: alternate;
                                animation-timing-function: ease-out;
                                transition: opacity 0.218s, box-shadow 0.218s
                            }

                            @-webkit-keyframes allow-alert {
                                from {
                                    opacity: 1
                                }
                                to {
                                    opacity: .35
                                }
                            }</style>
                        <div class="permission-bar-gradient"></div>
                    </div>
                </div>
            </div>
        </dialog>
        <form action="/search.php" method="GET" role="search">
            <div jsmodel="vWNDde" jsdata="MuIEvd;_;Acel5k">
                <div jscontroller="W5mjOc" jsmodel="QubRsd OjLGdd" class="A8SBwf" jsdata="LVplcb;_;"
                     jsaction="lX6RWd:w3Wsmc;DkpM0b:d3sQLd;IQOavd:dFyQEf;XzZZPe:jI3wzf;Aghsf:AVsnlb;iHd9U:Q7Cnrc;f5hEHe:G0jgYd;vmxUb:j3bJnb;R2c5O:LuRugf;qiCkJd:ANdidc;NOg9L:HLgh3;uGoIkd:epUokb;zLdLw:eaGBS;rcuQ6b:npT2md">
                    <style data-iml="1630447797610">.A8SBwf {
                            position: relative;
                            margin: 0 auto;
                            padding-top: 6px;
                            width: 484px;
                            width: auto;
                            max-width: 484px;
                        }

                        #searchform.big .A8SBwf {
                            width: 584px;
                            width: auto;
                            max-width: 584px
                        }

                        .A8SBwf {
                            width: auto;
                            max-width: 584px
                        }

                        .RNNXgb {
                            background: #fff;
                            display: flex;
                            border: 1px solid #dfe1e5;
                            box-shadow: none;
                            border-radius: 24px;
                            z-index: 3;
                            height: 44px;
                            margin: 0 auto;
                            width: 482px;
                            width: auto;
                        }

                        .minidiv .RNNXgb {
                            background: #fff;
                            height: 32px;
                            border-radius: 16px;
                            margin: 10px 0 0
                        }

                        .emcav .RNNXgb {
                            border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0;
                            border-color: rgba(223, 225, 229, 0);
                            box-shadow: 0 1px 6px rgba(32, 33, 36, .28)
                        }

                        .minidiv .emcav .RNNXgb {
                            border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0
                        }

                        .emcav.emcat .RNNXgb {
                            border-bottom-left-radius: 24px;
                            border-bottom-right-radius: 24px
                        }

                        .minidiv .emcav.emcat .RNNXgb {
                            border-bottom-left-radius: 16px;
                            border-bottom-right-radius: 16px
                        }

                        .RNNXgb:hover, .sbfc .RNNXgb {
                            background-color: #fff;
                            box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
                            border-color: rgba(223, 225, 229, 0)
                        }

                        .UUbT9 {
                            width: auto
                        }

                        #searchform.big .RNNXgb {
                            width: 582px;
                            width: auto
                        }

                        .RNNXgb {
                            width: auto;
                            max-width: 584px
                        }

                        .SDkEP {
                            flex: 1;
                            display: flex;
                            padding: 5px 8px 0 16px;
                            padding-left: 14px
                        }

                        .minidiv .SDkEP {
                            padding-top: 0
                        }

                        .FPdoLc {
                            padding-top: 18px;
                            top: 53px;
                            z-index: 0;
                        }

                        #searchform.big .FPdoLc {
                        }

                        .iblpc {
                            display: flex;
                            align-items: center;
                            padding-right: 13px;
                            margin-top: -5px
                        }

                        .minidiv .iblpc {
                            margin-top: 0
                        }</style>
                    <div class="RNNXgb" jsname="RNNXgb">
                        <div class="SDkEP">
                            <div class="iblpc" jsname="uFMOof">
                                <style data-iml="1630447797610">.CcAdNb {
                                        margin: auto
                                    }

                                    .QCzoEc {
                                        margin-top: 3px;
                                        color: #9aa0a6;
                                        height: 20px;
                                        width: 20px
                                    }</style>
                                <div class="CcAdNb"><span class="QCzoEc z1asCe MZy1Rb"><svg focusable="false"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 24 24"><path
                                                    d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></span>
                                </div>
                            </div>
                            <div jscontroller="JGHKP" class="a4bIc" jsname="gLFyf"
                                 jsaction="h5M12e;input:d3sQLd;blur:jI3wzf">
                                <style data-iml="1630447797610">.gLFyf {
                                        background-color: transparent;
                                        border: none;
                                        margin: 0;
                                        padding: 0;
                                        color: rgba(0, 0, 0, .87);
                                        word-wrap: break-word;
                                        outline: none;
                                        display: flex;
                                        flex: 100%;
                                        -webkit-tap-highlight-color: transparent;
                                        margin-top: -37px;
                                        height: 34px;
                                        font-size: 16px;
                                    }

                                    .minidiv .gLFyf {
                                        margin-top: -35px;
                                    }

                                    .a4bIc {
                                        display: flex;
                                        flex: 1;
                                        flex-wrap: wrap
                                    }

                                    .pR49Ae {
                                        color: transparent;
                                        flex: 100%;
                                        white-space: pre;
                                        height: 34px
                                    }

                                    .pR49Ae span {
                                        background: url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;
                                        padding: 0 0 10px 0;
                                    }</style>
                                <div class="pR49Ae gsfi" jsname="vdLsw"></div>
                                <input class="gLFyf gsfi" maxlength="2048" name="q" type="text"></div>
                            <div class="dRYYxd">
                                <style data-iml="1630447797610">.dRYYxd {
                                        display: flex;
                                        flex: 0 0 auto;
                                        margin-top: -5px;
                                        align-items: stretch;
                                        flex-direction: row
                                    }

                                    .minidiv .dRYYxd {
                                        margin-top: 0
                                    }</style>
                                <style data-iml="1630447797611">.BKRPef {
                                        flex: 1 0 auto;
                                        display: none;
                                        cursor: pointer;
                                        align-items: center;
                                        border: 0;
                                        background: transparent;
                                        outline: none;
                                        padding: 0 8px;
                                        line-height: 44px
                                    }

                                    .M2vV3 {
                                        display: flex
                                    }

                                    .ExCKkf {
                                        height: 100%;
                                        color: #70757a;
                                        vertical-align: middle;
                                        outline: none
                                    }

                                    .minidiv .BKRPef {
                                        line-height: 32px
                                    }

                                    .minidiv .ExCKkf {
                                        width: 20px
                                    }</style>
                                <style data-iml="1630447797611">.BKRPef {
                                        padding-right: 4px
                                    }

                                    .ExCKkf {
                                        margin-right: 12px
                                    }

                                    .ACRAdd {
                                        border-left: 1px solid #dfe1e5;
                                        height: 65%
                                    }</style>
                                <div jscontroller="PymCCe" class="BKRPef" jsname="RP0xob" aria-label="Очистить"
                                     role="button" jsaction="AVsnlb;rcuQ6b:npT2md"
                                     data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ05YFCAY"><span
                                            class="ExCKkf z1asCe rzyADb" jsname="itVqKe" role="button" tabindex="0"
                                            aria-label="Очистить"><svg focusable="false"
                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                       viewBox="0 0 24 24"><path
                                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span>
                                    <span class="ACRAdd"></span></div>
                                <style data-iml="1630447797611">.Umvnrc {
                                        flex: 1 0 auto;
                                        display: flex;
                                        cursor: pointer;
                                        align-items: center;
                                        border: 0;
                                        background: transparent;
                                        outline: none;
                                        padding: 0 8px;
                                        width: 24px;
                                        line-height: 44px
                                    }

                                    .ly0Ckb {
                                        background: url('//www.gstatic.com/inputtools/images/tia.png') no-repeat center;
                                        height: 24px;
                                        width: 24px;
                                        vertical-align: middle
                                    }

                                    .yAnw3c {
                                        visibility: hidden
                                    }</style>
                                <div jscontroller="Y9t9Sc" class="Umvnrc" aria-label="Экранная клавиатура" role="button"
                                     tabindex="0" jsaction="h5M12e;rcuQ6b:npT2md"><span class="ly0Ckb"><img
                                                class="yAnw3c" src="/tia/tia.png" tia_disable_swap="true"
                                                tia_field_name="q" jsname="JyIpdf" data-iml="1630447797611" data-atf="0"
                                                data-frt="0" tia_property="web"></span></div>
                                <style data-iml="1630447797611">.XDyW0e {
                                        flex: 1 0 auto;
                                        display: flex;
                                        cursor: pointer;
                                        align-items: center;
                                        border: 0;
                                        background: transparent;
                                        outline: none;
                                        padding: 0 8px;
                                        width: 24px;
                                        line-height: 44px
                                    }

                                    .goxjub {
                                        height: 24px;
                                        width: 24px;
                                        vertical-align: middle
                                    }

                                    .minidiv .XDyW0e {
                                        line-height: 32px
                                    }

                                    .minidiv .goxjub {
                                        width: 20px;
                                        height: 20px
                                    }</style>
                                <div jscontroller="unV4T" class="XDyW0e" aria-label="Голосовой поиск" role="button"
                                     tabindex="0" jsaction="h5M12e;rcuQ6b:npT2md"
                                     data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQvs8DCAc">
                                    <svg class="goxjub" focusable="false" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#4285f4"
                                              d="m12 15c1.66 0 3-1.31 3-2.97v-7.02c0-1.66-1.34-3.01-3-3.01s-3 1.34-3 3.01v7.02c0 1.66 1.34 2.97 3 2.97z"></path>
                                        <path fill="#34a853" d="m11 18.08h2v3.92h-2z"></path>
                                        <path fill="#fbbc05"
                                              d="m7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45 0.56 2.42 1.47 3.38v0.32l-1.15 1.18z"></path>
                                        <path fill="#ea4335"
                                              d="m12 16.93a4.97 5.25 0 0 1 -3.54 -1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div jscontroller="J7ZZy" class="UUbT9" style="display:none" jsname="UUbT9"
                         jsaction="mouseout:ItzDCd;mouseleave:MWfikb;hBEIVb:nUZ9le;YMFC3:VKssTb">
                        <style data-iml="1630447797611">.UUbT9 {
                                position: absolute;
                                width: 100%;
                                text-align: left;
                                margin-top: -1px;
                                z-index: 3;
                                cursor: default;
                                -webkit-user-select: none
                            }

                            .aajZCb {
                                background: #fff;
                                box-shadow: 0 4px 6px rgba(32, 33, 36, .28);
                                display: flex;
                                flex-direction: column;
                                list-style-type: none;
                                margin: 0;
                                padding: 0;
                                border: 0;
                                border-radius: 0 0 24px 24px;
                                padding-bottom: 4px;
                                overflow: hidden
                            }

                            .minidiv .aajZCb {
                                border-bottom-left-radius: 16px;
                                border-bottom-right-radius: 16px
                            }

                            .erkvQe {
                                flex: auto;
                                padding-bottom: 8px;
                            }

                            .RjPuVb {
                                height: 1px;
                                margin: 0 26px 0 0
                            }

                            .S3nFnd {
                                display: flex
                            }

                            .S3nFnd .RjPuVb, .S3nFnd .aajZCb {
                                flex: 0 0 auto
                            }

                            .lh87ke:link, .lh87ke:visited {
                                color: #1a0dab;
                                cursor: pointer;
                                font: 11px arial, sans-serif;
                                padding: 0 5px;
                                margin-top: -10px;
                                text-decoration: none;
                                flex: auto;
                                align-self: flex-end;
                                margin: 0 16px 5px 0
                            }

                            .lh87ke:hover {
                                text-decoration: underline
                            }

                            .xtSCL {
                                border-top: 1px solid #e8eaed;
                                margin: 0 20px 0 14px;
                                padding-bottom: 4px
                            }

                            .sb7 {
                                background: url() no-repeat;
                                min-height: 0px;
                                min-width: 0px;
                                height: 0px;
                                width: 0px
                            }

                            .sb27 {
                                background: url(/images/searchbox/desktop_searchbox_sprites318_hr.webp) no-repeat 0 -21px;
                                background-size: 20px;
                                min-height: 20px;
                                min-width: 20px;
                                height: 20px;
                                width: 20px
                            }

                            .sb43 {
                                background: url(/images/searchbox/desktop_searchbox_sprites318_hr.webp) no-repeat 0 0;
                                background-size: 20px;
                                min-height: 20px;
                                min-width: 20px;
                                height: 20px;
                                width: 20px
                            }

                            .sb53.sb53 {
                                padding: 0 4px;
                                margin: 0
                            }</style>
                        <div class="RjPuVb" jsname="RjPuVb"></div>
                        <div class="aajZCb" jsname="aajZCb">
                            <div class="xtSCL"></div>
                            <ul class="erkvQe" jsname="erkvQe" role="listbox"></ul>
                            <style data-iml="1630447797611">#ynRric {
                                    display: none
                                }

                                .ynRric {
                                    list-style-type: none;
                                    flex-direction: column;
                                    color: #70757a;
                                    font-family: Google Sans, arial, sans-serif-medium, sans-serif;
                                    font-size: 14px;
                                    margin: 0 20px 0 16px;
                                    padding: 8px 0 8px 0;
                                    line-height: 16px;
                                    width: 100%
                                }</style>
                            <li class="ynRric" id="ynRric" role="presentation"></li>
                            <style data-iml="1630447797611">#YMXe {
                                    display: none
                                }

                                .sbct {
                                    display: flex;
                                    align-items: center;
                                    min-width: 0;
                                    padding: 0
                                }

                                .eIPGRd {
                                    flex: auto;
                                    display: flex;
                                    align-items: center;
                                    margin: 0 20px 0 14px
                                }

                                .pcTkSc {
                                    display: flex;
                                    flex: auto;
                                    flex-direction: column;
                                    min-width: 0;
                                    padding: 6px 0
                                }

                                .sbic {
                                    display: flex;
                                    align-items: center;
                                    margin: 0 13px 0 1px;
                                }

                                .sbic.vYOkbe {
                                    margin: 4px 7px 4px -5px;
                                    border-radius: 4px;
                                    min-height: 32px;
                                    min-width: 32px;
                                    background: center/contain no-repeat
                                }

                                .sbre .wM6W7d {
                                    line-height: 18px
                                }

                                .ClJ9Yb {
                                    line-height: 12px;
                                    font-size: 13px;
                                    color: #80868b;
                                    margin-top: 2px
                                }

                                .wM6W7d {
                                    display: flex;
                                    font-size: 16px;
                                    color: #212121;
                                    flex: auto;
                                    align-items: center;
                                    word-break: break-word;
                                    padding-right: 8px
                                }

                                .minidiv .wM6W7d {
                                    font-size: 14px
                                }

                                .WggQGd {
                                    color: #52188c
                                }

                                .wM6W7d span {
                                    flex: auto
                                }

                                .AQZ9Vd {
                                    display: flex;
                                    align-self: stretch
                                }

                                .JCHpcb:hover {
                                    color: #1a73e8;
                                    text-decoration: underline;
                                }

                                .JCHpcb {
                                    color: #80868b;
                                    font: 13px arial, sans-serif;
                                    cursor: pointer;
                                    align-self: center
                                }

                                .sbhl {
                                    background: #eee
                                }

                                .mus_pc {
                                    display: block;
                                    margin: 6px 0
                                }

                                .mus_il {
                                    font-family: Arial, HelveticaNeue-Light, HelveticaNeue, Helvetica;
                                    padding-top: 7px;
                                    position: relative
                                }

                                .mus_il:first-child {
                                    padding-top: 0
                                }

                                .mus_il_at {
                                    margin-left: 10px
                                }

                                .mus_il_st {
                                    right: 52px;
                                    position: absolute
                                }

                                .mus_il_i {
                                    align: left;
                                    margin-right: 10px
                                }

                                .mus_it3 {
                                    margin-bottom: 3px;
                                    max-height: 24px;
                                    vertical-align: bottom
                                }

                                .mus_it5 {
                                    height: 24px;
                                    width: 24px;
                                    vertical-align: bottom;
                                    margin-left: 10px;
                                    margin-right: 10px;
                                    transform: rotate(90deg)
                                }

                                .mus_tt3 {
                                    color: #767676;
                                    font-size: 12px;
                                    vertical-align: top
                                }

                                .mus_tt5 {
                                    color: #dd4b39;
                                    font-size: 14px
                                }

                                .mus_tt6 {
                                    color: #3d9400;
                                    font-size: 14px
                                }

                                .mus_tt8 {
                                    font-size: 16px;
                                    font-family: Arial, sans-serif
                                }

                                .mus_tt17 {
                                    color: #212121;
                                    font-size: 20px
                                }

                                .mus_tt18 {
                                    color: #212121;
                                    font-size: 24px
                                }

                                .mus_tt19 {
                                    color: #767676;
                                    font-size: 12px
                                }

                                .mus_tt20 {
                                    color: #767676;
                                    font-size: 14px
                                }

                                .mus_tt23 {
                                    color: #767676;
                                    font-size: 18px
                                }</style>
                            <li data-view-type="1" class="sbct" id="YMXe" role="presentation">
                                <div class="eIPGRd">
                                    <div class="sbic"></div>
                                    <div class="pcTkSc" role="option">
                                        <div class="wM6W7d"><span></span></div>
                                        <div class="ClJ9Yb"><span></span></div>
                                    </div>
                                    <div class="AQZ9Vd">
                                        <div class="sbai">Удалить</div>
                                    </div>
                                </div>
                            </li>
                            <div jsname="VlcLAe" class="lJ9FBc">
                                <style data-iml="1630447797611">.lJ9FBc {
                                        height: 70px
                                    }

                                    .lJ9FBc input[type="submit"], .gbqfba {
                                        background-color: #f8f9fa;
                                        border: 1px solid #f8f9fa;
                                        border-radius: 4px;
                                        color: #3c4043;
                                        font-family: arial, sans-serif;
                                        font-size: 14px;
                                        margin: 11px 4px;
                                        padding: 0 16px;
                                        line-height: 27px;
                                        height: 36px;
                                        min-width: 54px;
                                        text-align: center;
                                        cursor: pointer;
                                        user-select: none
                                    }

                                    .lJ9FBc input[type="submit"]:hover {
                                        box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
                                        background-color: #f8f9fa;
                                        border: 1px solid #dadce0;
                                        color: #202124
                                    }

                                    .lJ9FBc input[type="submit"]:focus {
                                        border: 1px solid #4285f4;
                                        outline: none
                                    }</style>
                                <center><input class="gNO89b" value="Поиск в Google" aria-label="Поиск в Google"
                                               name="btnK" type="submit"
                                               data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ4dUDCAg"> <input
                                            class="RNmpXc" value="Мне повезёт!" aria-label="Мне повезёт!" name="btnI"
                                            type="submit" jsaction="trigger.kWlxhc"
                                            data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ19QECAk"></center>
                            </div>
                        </div>
                        <style data-iml="1630447797611">.MG7lrf {
                                font-size: 8pt;
                                margin-top: -16px;
                                position: absolute;
                                right: 16px
                            }</style>
                        <div jsname="JUypV" jscontroller="OqGDve" class="MG7lrf"
                             data-async-context="async_id:duf3-46;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;is_jobs_spam_form:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:46">
                            <style data-iml="1630447797611">a.oBa0Fe {
                                    color: #70757a;
                                    float: right;
                                    font-style: italic;
                                    -webkit-tap-highlight-color: rgba(0, 0, 0, .00);
                                    tap-highlight-color: rgba(0, 0, 0, .00)
                                }

                                a.aciXEb {
                                    padding: 0 5px;
                                }

                                .RTZ84b {
                                    color: #70757a;
                                    cursor: pointer;
                                    padding-right: 8px
                                }

                                .XEKxtf {
                                    color: #70757a;
                                    float: right;
                                    font-size: 12px;
                                    line-height: 1.34;
                                    padding-bottom: 4px
                                }</style>
                            <div jscontroller="EkevXb" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                            <div id="duf3-46" data-jiis="up" data-async-type="duffy3"
                                 data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index,is_jobs_spam_form"
                                 class="yp" data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ-0EICg"></div>
                            <a class="oBa0Fe wrSo4 aciXEb" href="#" id="sbfblt" data-async-trigger="duf3-46"
                               role="button" jsaction="trigger.szjOR"
                               data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQtw8ICw">Пожаловаться на неприемлемые
                                подсказки</a></div>
                    </div>
                    <div class="FPdoLc lJ9FBc">
                        <center><input class="gNO89b" value="Поиск в Google" aria-label="Поиск в Google" name="btnK"
                                       type="submit" data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ4dUDCAw"> <input
                                    class="RNmpXc" value="Мне повезёт!" aria-label="Мне повезёт!" name="btnI"
                                    type="submit" jsaction="trigger.kWlxhc"
                                    data-ved="0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ19QECA0"></center>
                    </div>
                </div>
                <div style="background:url(/images/searchbox/desktop_searchbox_sprites318_hr.webp)"></div>
            </div>
            <div id="tophf"></div>
        </form>
    </div>
    <div class="o3j99 qarstb">
        <style data-iml="1630447797611">.vcVZ7d {
                text-align: center
            }</style>
        <div class="vcVZ7d" id="gws-output-pages-elements-homepage_additional_languages__als">
            <style data-iml="1630447797611">#gws-output-pages-elements-homepage_additional_languages__als {
                    font-size: small;
                    margin-bottom: 24px
                }

                #SIvCob {
                    color: #3c4043;
                    display: inline-block;
                    line-height: 28px;
                }

                #SIvCob a {
                    padding: 0 3px;
                }

                .H6sW5 {
                    display: inline-block;
                    margin: 0 2px;
                    white-space: nowrap
                }

                .z4hgWe {
                    display: inline-block;
                    margin: 0 2px
                }</style>
            <div id="SIvCob">Сервисы Google доступны на разных языках: <a
                        href="https://www.google.com/setprefs?sig=0_oDF-OhjhfVHNnCtlDXvuu-SrEnQ%3D&amp;hl=en&amp;source=homepage&amp;sa=X&amp;ved=0ahUKEwiZrJquo9zyAhU9zjgGHftOBGUQ2ZgBCA8">English</a>
            </div>
        </div>
    </div>
    <div class="o3j99 c93Gbe">
        <style data-iml="1630447797611">.c93Gbe {
                background: #f2f2f2
            }

            .uU7dJb {
                padding: 15px 30px;
                border-bottom: 1px solid #dadce0;
                font-size: 15px;
                color: rgba(0, 0, 0, .54)
            }

            .SSwjIe {
                padding: 0 20px
            }

            .KxwPGc {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between
            }

            @media only screen and (max-width: 1200px) {
                .KxwPGc {
                    justify-content: space-evenly
                }
            }

            .pHiOh {
                display: block;
                padding: 15px;
                white-space: nowrap
            }

            a.pHiOh {
                color: #70757a
            }

            .ktLKi {
                white-space: nowrap;
                vertical-align: top
            }

            .Pb9hCb {
                height: 14px;
                margin-right: 6px
            }

            .ssOUyb {
                order: 2
            }

            @media only screen and (max-width: 1380px) {
                .ssOUyb {
                    order: 0;
                    width: 100%;
                    justify-content: center
                }
            }

            .waLeGd .ssOUyb {
                order: 0;
                width: 100%;
                justify-content: center
            }

            .AghGtd {
                justify-content: flex-start;
                min-width: 30%;
                order: 1
            }

            .iTjxkf {
                justify-content: flex-end;
                min-width: 30%;
                order: 3
            }</style>
        <div class="uU7dJb">Россия</div>
    </div>
</div>
<div class="Fgvgjc">
    <style data-iml="1630447797611">.Fgvgjc {
            height: 0;
            overflow: hidden
        }</style>
    <div class="gTMtLb fp-nh" id="lb">
        <style data-iml="1630447797611">.gTMtLb {
                z-index: 1001;
                position: absolute;
                top: -1000px
            }</style>
    </div>
    <div jscontroller="fKZehd" style="display:none" data-u="0" jsdata="C4mkuf;_;Acel5o" jsaction="rcuQ6b:npT2md"></div>
    <span style="display:none"><span jscontroller="DhPYme" style="display:none" jsaction="rcuQ6b:npT2md"
                                     data-ei="taguYdn9Cr2c4-EP-52RqAY"></span></span>
    <script nonce="5GttHyw+Za99gGImmIw1qg==">this.gbar_ = this.gbar_ || {};
        (function (_) {
            var window = this;
            try {
                _.Qd = function (a, b, c) {
                    if (!a.o) if (c instanceof Array) {
                        c = _.ua(c);
                        for (var d = c.next(); !d.done; d = c.next()) _.Qd(a, b, d.value)
                    } else {
                        d = (0, _.u)(a.D, a, b);
                        var e = a.B + c;
                        a.B++;
                        b.setAttribute("data-eqid", e);
                        a.F[e] = d;
                        b && b.addEventListener ? b.addEventListener(c, d, !1) : b && b.attachEvent ? b.attachEvent("on" + c, d) : a.A.log(Error("p`" + b))
                    }
                };

            } catch (e) {
                _._DumpException(e)
            }
            try {
                /*

                 Copyright The Closure Library Authors.
                 SPDX-License-Identifier: Apache-2.0
                */
                _.Rd = function () {
                    if (!_.t.addEventListener || !Object.defineProperty) return !1;
                    var a = !1, b = Object.defineProperty({}, "passive", {
                        get: function () {
                            a = !0
                        }
                    });
                    try {
                        _.t.addEventListener("test", _.Ha, b), _.t.removeEventListener("test", _.Ha, b)
                    } catch (c) {
                    }
                    return a
                }();
                _.Sd = _.Vb ? "webkitTransitionEnd" : "transitionend";

            } catch (e) {
                _._DumpException(e)
            }
            try {
                var Td = document.querySelector(".gb_B .gb_C"), Ud = document.querySelector("#gb.gb_Dc");
                Td && !Ud && _.Qd(_.Gd, Td, "click");

            } catch (e) {
                _._DumpException(e)
            }
            try {
                var Gh = function (a) {
                    _.J.call(this);
                    this.C = a;
                    this.A = null;
                    this.o = {};
                    this.F = {};
                    this.j = {};
                    this.B = null
                };
                _.q(Gh, _.J);
                _.Hh = function (a) {
                    if (a.A) return a.A;
                    for (var b in a.j) if (a.j[b].jf() && a.j[b].Qb()) return a.j[b];
                    return null
                };
                _.h = Gh.prototype;
                _.h.Df = function (a) {
                    a && _.Hh(this) && a != _.Hh(this) && _.Hh(this).ae(!1);
                    this.A = a
                };
                _.h.Kg = function (a) {
                    a = this.j[a] || a;
                    return _.Hh(this) == a
                };
                _.h.Te = function (a, b) {
                    b = b.Vc();
                    if (this.o[a] && this.o[a][b]) for (var c = 0; c < this.o[a][b].length; c++) try {
                        this.o[a][b][c]()
                    } catch (d) {
                        this.C.log(d)
                    }
                };
                _.h.$h = function (a) {
                    return !this.F[a.Vc()]
                };
                _.h.fh = function (a) {
                    this.j[a] && (_.Hh(this) && _.Hh(this).Vc() == a || this.j[a].ae(!0))
                };
                _.h.Za = function (a) {
                    this.B = a;
                    for (var b in this.j) this.j[b].jf() && this.j[b].Za(a)
                };
                _.h.zf = function (a) {
                    this.j[a.Vc()] = a
                };
                _.h.Ke = function (a) {
                    return a in this.j ? this.j[a] : null
                };
                var Ih = new Gh(_.Ed);
                _.fd("dd", Ih);

            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.kj = function (a, b) {
                    a = a.split(".");
                    b = b || _.t;
                    for (var c = 0; c < a.length; c++) if (b = b[a[c]], null == b) return null;
                    return b
                };

            } catch (e) {
                _._DumpException(e)
            }
            try {
                var lj = document.querySelector(".gb_Na .gb_C"), mj = document.querySelector("#gb.gb_Dc");
                lj && !mj && _.Qd(_.Gd, lj, "click");

            } catch (e) {
                _._DumpException(e)
            }
        })(this.gbar_);
        // Google Inc.
        this.gbar_ = this.gbar_ || {};
        (function (_) {
            var window = this;
            try {
                /*

                 Copyright The Closure Library Authors.
                 SPDX-License-Identifier: Apache-2.0
                */
                _.Vd = function (a) {
                    var b = a.length;
                    if (0 < b) {
                        for (var c = Array(b), d = 0; d < b; d++) c[d] = a[d];
                        return c
                    }
                    return []
                };
                _.Wd = function (a, b) {
                    var c = Array.prototype.slice.call(arguments, 1);
                    return function () {
                        var d = c.slice();
                        d.push.apply(d, arguments);
                        return a.apply(this, d)
                    }
                };
                _.Xd = function (a) {
                    var b = typeof a;
                    return "object" != b ? b : a ? Array.isArray(a) ? "array" : b : "null"
                };
                _.Yd = function (a) {
                    var b = _.Xd(a);
                    return "array" == b || "object" == b && "number" == typeof a.length
                };
                _.Zd = function (a, b) {
                    return 0 == a.lastIndexOf(b, 0)
                };
                try {
                    (new self.OffscreenCanvas(0, 0)).getContext("2d")
                } catch (a) {
                }
                _.$d = _.B || _.Vb;
                _.ae = function (a, b) {
                    this.width = a;
                    this.height = b
                };
                _.h = _.ae.prototype;
                _.h.aspectRatio = function () {
                    return this.width / this.height
                };
                _.h.Ub = function () {
                    return !(this.width * this.height)
                };
                _.h.ceil = function () {
                    this.width = Math.ceil(this.width);
                    this.height = Math.ceil(this.height);
                    return this
                };
                _.h.floor = function () {
                    this.width = Math.floor(this.width);
                    this.height = Math.floor(this.height);
                    return this
                };
                _.h.round = function () {
                    this.width = Math.round(this.width);
                    this.height = Math.round(this.height);
                    return this
                };
                var de;
                _.be = function (a, b) {
                    return (b || document).getElementsByTagName(String(a))
                };
                _.L = function (a, b) {
                    var c = b || document;
                    if (c.getElementsByClassName) a = c.getElementsByClassName(a)[0]; else {
                        c = document;
                        var d = b || c;
                        a = d.querySelectorAll && d.querySelector && a ? d.querySelector(a ? "." + a : "") : _.ce(c, "*", a, b)[0] || null
                    }
                    return a || null
                };
                _.ce = function (a, b, c, d) {
                    a = d || a;
                    b = b && "*" != b ? String(b).toUpperCase() : "";
                    if (a.querySelectorAll && a.querySelector && (b || c)) return a.querySelectorAll(b + (c ? "." + c : ""));
                    if (c && a.getElementsByClassName) {
                        a = a.getElementsByClassName(c);
                        if (b) {
                            d = {};
                            for (var e = 0, f = 0, g; g = a[f]; f++) b == g.nodeName && (d[e++] = g);
                            d.length = e;
                            return d
                        }
                        return a
                    }
                    a = a.getElementsByTagName(b || "*");
                    if (c) {
                        d = {};
                        for (f = e = 0; g = a[f]; f++) b = g.className, "function" == typeof b.split && _.ca(b.split(/\s+/), c) && (d[e++] = g);
                        d.length = e;
                        return d
                    }
                    return a
                };
                _.ee = function (a, b) {
                    _.da(b, function (c, d) {
                        c && "object" == typeof c && c.Tb && (c = c.Db());
                        "style" == d ? a.style.cssText = c : "class" == d ? a.className = c : "for" == d ? a.htmlFor = c : de.hasOwnProperty(d) ? a.setAttribute(de[d], c) : _.Zd(d, "aria-") || _.Zd(d, "data-") ? a.setAttribute(d, c) : a[d] = c
                    })
                };
                de = {
                    cellpadding: "cellPadding",
                    cellspacing: "cellSpacing",
                    colspan: "colSpan",
                    frameborder: "frameBorder",
                    height: "height",
                    maxlength: "maxLength",
                    nonce: "nonce",
                    role: "role",
                    rowspan: "rowSpan",
                    type: "type",
                    usemap: "useMap",
                    valign: "vAlign",
                    width: "width"
                };
                _.he = function (a, b) {
                    var c = b[1], d = _.fe(a, String(b[0]));
                    c && ("string" === typeof c ? d.className = c : Array.isArray(c) ? d.className = c.join(" ") : _.ee(d, c));
                    2 < b.length && _.ge(a, d, b, 2);
                    return d
                };
                _.ge = function (a, b, c, d) {
                    function e(k) {
                        k && b.appendChild("string" === typeof k ? a.createTextNode(k) : k)
                    }

                    for (; d < c.length; d++) {
                        var f = c[d];
                        if (!_.Yd(f) || _.Ia(f) && 0 < f.nodeType) e(f); else {
                            a:{
                                if (f && "number" == typeof f.length) {
                                    if (_.Ia(f)) {
                                        var g = "function" == typeof f.item || "string" == typeof f.item;
                                        break a
                                    }
                                    if ("function" === typeof f) {
                                        g = "function" == typeof f.item;
                                        break a
                                    }
                                }
                                g = !1
                            }
                            _.Ta(g ? _.Vd(f) : f, e)
                        }
                    }
                };
                _.ie = function (a) {
                    return _.fe(document, a)
                };
                _.fe = function (a, b) {
                    b = String(b);
                    "application/xhtml+xml" === a.contentType && (b = b.toLowerCase());
                    return a.createElement(b)
                };
                _.je = function (a) {
                    for (var b; b = a.firstChild;) a.removeChild(b)
                };
                _.ke = function (a) {
                    return a && a.parentNode ? a.parentNode.removeChild(a) : null
                };
                _.le = function (a) {
                    return _.Ia(a) && 1 == a.nodeType
                };
                _.me = function (a) {
                    return 9 == a.nodeType ? a : a.ownerDocument || a.document
                };
                _.ne = function (a, b, c) {
                    for (var d = 0; a && (null == c || d <= c);) {
                        if (b(a)) return a;
                        a = a.parentNode;
                        d++
                    }
                    return null
                };

            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.qj = function (a) {
                    _.C.call(this, a)
                };
                _.q(_.qj, _.C);

            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.rj = function (a, b, c) {
                    a.rel = c;
                    -1 != c.toLowerCase().indexOf("stylesheet") ? (a.href = _.cb(b), (b = _.Lb(a.ownerDocument && a.ownerDocument.defaultView)) && a.setAttribute("nonce", b)) : a.href = b instanceof _.ab ? _.cb(b) : b instanceof _.gb ? _.hb(b) : _.hb(_.nb(b))
                };

            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.sj = function () {
                    var a = "undefined" !== typeof window ? window.trustedTypes : void 0;
                    return null !== a && void 0 !== a ? a : null
                };
                _.tj = function (a) {
                    var b, c = (a.ownerDocument && a.ownerDocument.defaultView || window).document,
                        d = null === (b = c.querySelector) || void 0 === b ? void 0 : b.call(c, "script[nonce]");
                    (b = d ? d.nonce || d.getAttribute("nonce") || "" : "") && a.setAttribute("nonce", b)
                };
                _.wj = function (a, b) {
                    if ("undefined" != typeof _.uj && b instanceof _.uj) {
                        var c;
                        if (null === (c = _.sj()) || void 0 === c || !c.isScriptURL(b)) if ("undefined" != typeof _.vj && b instanceof _.vj) b = b.o; else throw Error("S");
                    } else b = _.bb(b);
                    a.src = b;
                    _.tj(a)
                };

            } catch (e) {
                _._DumpException(e)
            }
            try {
                var xj = function (a, b, c) {
                    _.Fd.log(46, {att: a, max: b, url: c})
                }, zj = function (a, b, c) {
                    _.Fd.log(47, {att: a, max: b, url: c});
                    a < b ? yj(a + 1, b) : _.Ed.log(Error("T`" + a + "`" + b), {url: c})
                }, yj = function (a, b) {
                    if (Aj) {
                        var c = _.ie("SCRIPT");
                        c.async = !0;
                        c.type = "text/javascript";
                        c.charset = "UTF-8";
                        _.wj(c, Aj);
                        c.onload = _.Wd(xj, a, b, c.src);
                        c.onerror = _.Wd(zj, a, b, c.src);
                        _.Fd.log(45, {att: a, max: b, url: c.src});
                        _.be("HEAD")[0].appendChild(c)
                    }
                }, Bj = function (a) {
                    _.C.call(this, a)
                };
                _.q(Bj, _.C);
                var Cj = _.H(_.Ad, Bj, 17) || new Bj, Dj, Aj = (Dj = _.H(Cj, _.qj, 1)) ? _.db(_.E(Dj, 4) || "") : null,
                    Ej, Fj = (Ej = _.H(Cj, _.qj, 2)) ? _.db(_.E(Ej, 4) || "") : null, Gj = function () {
                        yj(1, 2);
                        if (Fj) {
                            var a = _.ie("LINK");
                            a.setAttribute("type", "text/css");
                            _.rj(a, Fj, "stylesheet");
                            var b = _.Lb();
                            b && a.setAttribute("nonce", b);
                            _.be("HEAD")[0].appendChild(a)
                        }
                    };
                (function () {
                    var a = _.Bd();
                    if (_.F(a, 18)) Gj(); else {
                        var b = _.E(a, 19) || 0;
                        window.addEventListener("load", function () {
                            window.setTimeout(Gj, b)
                        })
                    }
                })();

            } catch (e) {
                _._DumpException(e)
            }
        })(this.gbar_);
        // Google Inc.
    </script>
    <div>
        <div></div>
    </div>
</div>
<textarea class="csi" name="csi" style="display:none"></textarea>
<script nonce="5GttHyw+Za99gGImmIw1qg==">(function () {
        (function () {
            var c = Date.now();
            if (google.timers && google.timers.load.t) {
                for (var a = document.getElementsByTagName("img"), d = 0, b = void 0; b = a[d++];) google.c.setup(b, !1, void 0);
                google.c.frt = !1;
                "hidden" === document.visibilityState && google.c.e("load", "hddn", "1");
                google.c.e("load", "imn", String(a.length));
                google.c.ubr(!0, c);
                google.c.glu && google.c.glu();
                google.rll(window, !1, function () {
                    google.tick("load", "ol");
                    google.c.u("pr")
                })
            }
        })();
    }).call(this);
    (function () {
        google.jl = {
            attn: false,
            blt: 'none',
            chnk: 0,
            dw: false,
            emtn: 0,
            end: 0,
            ine: false,
            lls: 'default',
            pdt: 0,
            rep: 0,
            sif: true,
            snet: true,
            strt: 0,
            ubm: false,
            uwp: true
        };
    })();
    (function () {
        var pmc = '{\x22aa\x22:{},\x22abd\x22:{\x22abd\x22:false,\x22deb\x22:false,\x22det\x22:false},\x22async\x22:{},\x22cdos\x22:{\x22bih\x22:886,\x22biw\x22:1706,\x22cdobsel\x22:false,\x22dpr\x22:\x222.25\x22},\x22csi\x22:{},\x22d\x22:{},\x22dpf\x22:{},\x22dvl\x22:{\x22cookie_secure\x22:true,\x22cookie_timeout\x22:21600,\x22jsc\x22:\x22[null,null,null,30000,null,null,null,2,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[\\\x2286400000\\\x22,\\\x22604800000\\\x22,2],null,1,21600000,1,null,1]\x22,\x22msg_err\x22:\x22Местоположение недоступно\x22,\x22msg_gps\x22:\x22Используется GPS\x22,\x22msg_unk\x22:\x22Неизвестно\x22,\x22msg_upd\x22:\x22Обновить\x22,\x22msg_use\x22:\x22Учитывать мое местоположение\x22,\x22use_local_storage_fallback\x22:false},\x22gf\x22:{\x22pid\x22:196,\x22si\x22:true},\x22hsm\x22:{},\x22jsa\x22:{\x22csi\x22:true,\x22csir\x22:100},\x22mu\x22:{\x22murl\x22:\x22https://adservice.google.com/adsid/google/ui\x22},\x22pHXghd\x22:{},\x22sb_wiz\x22:{\x22onf\x22:\x22EAE\x22,\x22scq\x22:\x22\x22,\x22stok\x22:\x22KgocUL6jWTz48ApVmjO6hMXa19U\x22,\x22ueh\x22:\x2238839972_f20e2275_99e4595b_467c16f4_dbbbc798\x22},\x22sf\x22:{},\x22sonic\x22:{},\x22spch\x22:{\x22ae\x22:\x22Проверьте микрофон. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003EПодробнее…\\u003C/a\\u003E\x22,\x22hl\x22:\x22ru-RU\x22,\x22im\x22:\x22Нажмите \\u003Cb\\u003EРазрешить\\u003C/b\\u003E, чтобы начать голосовой поиск\x22,\x22iw\x22:\x22Минуточку…\x22,\x22lm\x22:\x22Обработка…\x22,\x22lu\x22:\x22Голосовой поиск недоступен для этого языка (%1$s)\x22,\x22mb\x22:false,\x22ne\x22:\x22Нет подключения к Интернету\x22,\x22nt\x22:\x22Неразборчиво. \\u003Cspan\\u003EЕщё раз\\u003C/span\\u003E\x22,\x22nv\x22:\x22Проверьте микрофон и уровень громкости. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003EПодробнее…\\u003C/a\\u003E\x22,\x22pe\x22:\x22Голосовой поиск был выключен. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003EПодробнее…\\u003C/a\\u003E\x22,\x22rm\x22:\x22Говорите\x22}}';
        google.pmc = JSON.parse(pmc);
    })();
    (function () {
        var r = ['sb_wiz', 'aa', 'abd', 'async', 'dvl', 'mu', 'pHXghd', 'sf', 'sonic', 'spch'];
        google.plm(r);
    })();
    (function () {
        var m = ['Acel5k', '[\x22gws-wiz\x22,\x22\x22,\x22\x22,\x22\x22,null,1,0,0,11,\x22ru\x22,\x22KgocUL6jWTz48ApVmjO6hMXa19U\x22,\x2238839972f20e227599e4595b467c16f4dbbbc798\x22,\x22taguYdn9Cr2c4-EP-52RqAY\x22,0,\x22ru\x22,null,null,null,3,5,null,8,null,\x22\x22,-1,0,0,null,1,0,null,0,0,0,1,0,0,8,-1,null,0,null,null,1,0,0,0,0,0.1,null,0,100,0,null,1.15,1,null,null,null,0,null,0,0,0,6,0,null,null,null,null,null,0,0,0,0,null,null,0,null,null,0,0,1,null,null,null,null,null,null,null,0,null,0,0,0]', 'Acel5o', '[null,null,1,30000,null,null,null,2,null,null,3,null,null,null,null,null,1,null,null,null,null,null,null,[60.0518329,30.3696946],null,null,null,null,0,null,null,null,null,null,null,null,0,\x221630447797\x22,null,null,null,null,null,1,null,null,[\x2286400000\x22,\x22604800000\x22,2],null,1,21600000,1,null,1]'];
        var a = m;
        window.W_jd = window.W_jd || {};
        for (var b = 0; b < a.length; b += 2) window.W_jd[a[b]] = JSON.parse(a[b + 1]);
    })();
    (function () {
        window.WIZ_global_data = {
            "LVIXXb": "1",
            "GWsdKe": "ru-RU",
            "SNlM0e": "AD7QlO6C_rDd3monOxP5O7UNSNao:1630447797240",
            "w2btAe": "%.@.\"101423996707009034618\",\"101423996707009034618\",\"0\",null,null,null,1]",
            "S06Grb": "101423996707009034618",
            "eptZe": "/wizrpcui/_/WizRpcUi/",
            "zChJod": "%.@.]",
            "QrtxK": "0",
            "Yllh3e": "%.@.1630447797179929,104386109,1694781179]"
        };
        window.IJ_values = [false, true, false, "none", true, false, "#000", "rgba(0,0,0,.54)", "rgba(0,0,0,.26)", "#fbbc04", "#4285f4", "#1a73e8", "#34a853", "#f8f9fa", "#70757a", "#1e8e3e", "#fff", "rgba(255,255,255,.30)", "#3c4043", "#d93025", "#f29900", false, "invert(1) hue-rotate(180deg)", "#b8bbbe", false, false, true, true, false, "#aecbfa", "#1a73e8", "0 1px 6px rgba(32, 33, 36, 0.28)", true, false, 36, 24, 28, 6, false, false, false, true, false, false, "#f5f5f5", "rgba(0,0,0,.87)", false, "#fff", "0px 5px 26px 0px rgba(0, 0, 0, 0.22), 0px 20px 28px 0px rgba(0, 0, 0, 0.30)", "#4285f4", false, false, false, false, "#4285f4", true, true, 11, 16, 13, 2, false, false, "#1a73e8", "#188038", "#fff", "#dadce0", "#70757a", "#202124", "none", "18px", false, "#f1f3f4", "#202124", "#202124", "#f1f3f4", 14, "#202124", 40, "#202124", false, "#70757a", "#202124", "#ea4335", "#000", "", "arial,sans-serif-medium,sans-serif", "arial,sans-serif", "#dadce0", "#000", "#dadce0", "#000", "#1a73e8", false, false, false, false, false, false, true, false, false, false, false, false, "rgba(0,0,0,.12)", "rgba(0,0,0,.26)", "rgba(0,0,0,.54)", "rgba(0,0,0,.87)", "rgba(204,204,204,.15)", "rgba(204,204,204,.25)", "rgba(112,117,122,.20)", "rgba(112,117,122,.40)", "#4285f4", "#1558d6", "#34a853", "#ea4335", "#fbbc04", "#f8f9fa", "#f8f9fa", "#f8f9fa", "#70757a", "#202124", "#34a853", "rgba(0,0,0,.12)", "#323232", "#fff", "#fff", "rgba(255,255,255,.30)", "#fff", "rgba(0,0,0,.87)", "#fff", "Roboto,RobotoDraft,Helvetica,Arial,sans-serif", "14px", "500", "500", "pointer", "0 1px 1px rgba(0,0,0,.16)", true, "#000", "0 4px 16px rgba(0,0,0,0.2)", "#666", true, true, false, false, true, true, false, true, 14, "#fff", "#FFF", false, "1px solid #dfe1e5", "none", "arial,sans-serif-medium,sans-serif", "Google Sans,arial,sans-serif-medium,sans-serif", "#ebebeb", "1px solid #dfe1e5", "rgba(0, 0, 0, 0.1)", "#dadce0", "#fff", "#1a0dab", "#ebebeb", "#222", "#70757a", true, true, false, false, false, false, false, true, false, false, true, false, false, false, false, false, true, false, true, "8px", "#ebebeb", false, true, false, "%.@.\"101423996707009034618\",\"101423996707009034618\",\"0\",null,null,null,1]", "0", "%.@.null,1,2.25,null,[null,886,1706]]", "5GttHyw+Za99gGImmIw1qg\u003d\u003d", "%.@.\"#b8bbbe\"]", "%.@.0]", "%.@.0]", "%.@.\"0px 5px 26px 0px rgba(0,0,0,0.22),0px 20px 28px 0px rgba(0,0,0,0.3)\",\"#fff\"]", "%.@.1,\"0 1px 6px rgba(32, 33, 36, 0.28)\",null,36,28,6,0.3,null,12,null,null,null,null,null,\"#202124\",\"#70757a\",null,\"#202124\",null,null,null,null,null,null,\"#1a73e8\",\"#fabb05\",\"#fff\",\"#1a73e8\",\"#d1d1d1\",\"#fff\",null,1,null,14,500,\"#1967d2\",\"4px\",\"#1a73e8\",\"#eeeeee\"]", null, "%.@.[null,null,1],0,null,0,0]", "ru-RU", "%.@.\"13px\",\"16px\",\"11px\"]", "%.@.\"10px\",10,\"16px\",16]", "%.@.\"14px\",14]", "%.@.40]", null, "%.@.\"0 2px 10px 0 rgba(0,0,0,0.2)\"]", "%.@.0,\"14px\",\"500\",\"500\",\"0 1px 1px rgba(0,0,0,.16)\",\"pointer\",\"#000\",\"rgba(0,0,0,.26)\",\"rgba(0,0,0,.54)\",\"rgba(0,0,0,.87)\",\"rgba(204,204,204,.15)\",\"rgba(204,204,204,.25)\",\"rgba(112,117,122,.20)\",\"rgba(112,117,122,.40)\",\"#34a853\",\"#4285f4\",\"#1558d6\",\"#ea4335\",\"#fbbc04\",\"#f8f9fa\",\"#f8f9fa\",\"#202124\",\"#34a853\",\"rgba(0,0,0,.12)\",null,\"#fff\",\"rgba(255,255,255,.30)\",\"#fff\",\"rgba(0,0,0,.87)\",\"#fff\",0,0]", "%.@.\"20px\",\"500\",\"400\",\"13px\",\"15px\",\"15px\",\"Roboto,RobotoDraft,Helvetica,Arial,sans-serif\",\"24px\",\"400\",\"32px\",\"24px\"]", false, "", "%.@.\"#202124\",\"#3c4043\",\"#1a73e8\",null,\"#70757a\",\"#1a0dab\",\"#609\",null,null,\"#fff\",\"#1a73e8\",\"#fff\",\"#e8f0fe\",\"#1558d6\",\"#f1f3f4\",\"#202124\",\"#fff\",\"#3c4043\",\"#202124\",\"#fff\",\"#fff\",\"#fff\",\"#188038\",\"#d93025\",\"#e37400\",\"#ebebeb\"]", "%.@.null,\"none\",null,\"0px 1px 3px rgba(60,64,67,0.08)\",null,\"0px 2px 6px rgba(60,64,67,0.16)\",null,\"0px 4px 12px rgba(60,64,67,0.24)\",null,null,\"1px solid  #dadce0\",\"none\",\"none\",\"none\"]", "%.@.\"Google Sans,arial,sans-serif\",\"Google Sans,arial,sans-serif-medium,sans-serif\",\"arial,sans-serif\",\"arial,sans-serif-medium,sans-serif\",\"arial,sans-serif-light,sans-serif\"]", "%.@.\"16px\",\"12px\",\"0px\",\"8px\",\"4px\",\"2px\",\"20px\",\"24px\"]", "%.@.\"#202124\",\"#1a0dab\"]", "%.@.null,null,null,null,null,null,null,\"12px\",\"8px\",\"4px\",\"16px\",\"2px\",\"999rem\",\"0px\"]", "%.@.\"700\",\"400\",\"underline\",\"none\",\"capitalize\",\"none\",\"uppercase\",\"initial\",\"500\",\"lowercase\"]", "%.@.\"20px\",\"26px\",\"400\",\"Google Sans,arial,sans-serif\",null,\"arial,sans-serif\",\"14px\",\"400\",\"22px\",null,\"16px\",\"24px\",\"400\",\"Google Sans,arial,sans-serif\",null,\"Google Sans,arial,sans-serif\",\"60px\",\"48px\",\"-1px\",null,\"400\",\"Google Sans,arial,sans-serif\",\"36px\",\"400\",\"48px\",null,\"Google Sans,arial,sans-serif\",\"36px\",\"28px\",null,\"400\",null,\"arial,sans-serif\",\"24px\",\"18px\",null,\"400\",\"arial,sans-serif\",\"16px\",\"12px\",null,\"400\",\"arial,sans-serif\",\"22px\",\"16px\",null,\"400\",\"arial,sans-serif\",\"26px\",\"20px\",null,\"400\",\"arial,sans-serif\",\"20px\",\"16px\",null,\"400\",\"arial,sans-serif\",\"18px\",\"14px\",null,\"400\",\"Google Sans,arial,sans-serif\",\"32px\",\"24px\",null,\"500\"]", "%.@.4]", "%.@.\"14px\",14,\"16px\",16,\"0\",0,\"none\",632,\"1px solid #dfe1e5\",\"normal\",\"normal\",\"#70757a\",\"12px\",\"1.34\",\"1px solid #dfe1e5\",\"none\",\"0\",\"none\",\"none\",\"none\",\"none\",\"6px\"]", "%.@.\"0\"]", "%.@.\"rgba(0,0,0,0.0)\",\"rgba(0,0,0,0.54)\",\"rgba(0,0,0,0.8)\",\"rgba(248, 249, 250, 0.85)\",\"#202124\",\"#dadce0\",\"rgba(218, 220, 224, 0.0)\",\"rgba(218, 220, 224, 0.7)\",\"#dadce0\",\"#f8f9fa\",\"#000\",\"#1a73e8\",\"#dadce0\",\"#fff\"]", "%.@.\"#202124\",\"#70757a\",\"#4d5156\",\"#5f6368\",\"#fff\",\"rgba(255,255,255,.70)\",28,24,26,20,16,-2,0,-4,2,0,0,24,20,20,14,12]", "%.@.\"20px\",20,\"14px\",14,\"\\\"rgba(0, 0, 0, .87)\\\"\"]", "dmitryfedorovrelax@gmail.com", true, "101423996707009034618", "%.@.1]"];
    })();
    (function () {
        google.llirm = '400px';
        google.ldi = {};
        google.pim = {};
    })();
    google.x(null, function () {
        (function () {
            (function () {
                google.csct = {};
                google.csct.ps = 'AOvVaw1-3ENHbbufUlz5DRNsR_65\x26ust\x3d1630534197232794';
            })();
        })();
        (function () {
            (function () {
                google.csct.pi = true;
            })();
        })();
        (function () {
            window.jsl = window.jsl || {};
            window.jsl.dh = window.jsl.dh || function (i, c, d) {
                try {
                    var e = document.getElementById(i);
                    if (e) {
                        e.innerHTML = c;
                        if (d) {
                            d();
                        }
                    } else {
                        if (window.jsl.el) {
                            window.jsl.el(new Error('Missing ID.'), {'id': i});
                        }
                    }
                } catch (e) {
                    if (window.jsl.el) {
                        window.jsl.el(new Error('jsl.dh'));
                    }
                }
            };
        })();
        (function () {
            window.jsl.dh('spch', '\x3cstyle\x3e.spch-dlg{background:transparent;border:none}.spch{background:#fff;height:100%;left:0;opacity:0;overflow:hidden;position:fixed;text-align:left;top:0;visibility:hidden;width:100%;z-index:10000;transition:visibility 0s linear 0.218s,background-color 0.218s}.close-button{background:none;border:none;color:#70757a;cursor:pointer;font-size:26px;right:0;line-height:15px;opacity:.6;margin:-1px -1px 0 0;padding:0 0 2px 0;height:48px;width:48px;position:absolute;top:0;z-index:10}.close-button:hover{opacity:.8}.close-button:active{opacity:1}.spchc{display:block;height:42px;position:absolute;pointer-events:none}.inner-container{height:100%;opacity:.1;pointer-events:none;width:100%;transition:opacity .318s ease-in}.s2ml .inner-container,.s2ra .inner-container,.s2er .inner-container{opacity:1;transition:opacity 0s}.s2fp.spch{opacity:1;visibility:visible;transition-delay:0s}.s2tb-h.spch{background:rgba(255,255,255,0);opacity:0;visibility:hidden}.s2tb.spch{background:rgba(255,255,255,0);opacity:1;visibility:visible;transition-delay:0s}.google-logo{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALwAAABACAQAAAAKENVCAAAI/ElEQVR4Ae3ae3BU5RnH8e/ZTbIhhIRbRIJyCZcEk4ZyE4RBAiRBxRahEZBLQYUZAjIgoLUWB6wjKIK2MtAqOLVUKSqWQW0ZaOQq0IFAIZVrgFQhXAOShITEbHY7407mnPfc8u6ya2f0fN6/9rzvc87Z39nbed/l/8OhIKMDQ+hHKp1JJB6FKq5QQhH72MZ1IsDRhvkU4bds9WxlLNE4wqg9q6jBL9G+4knc/HB9qXmuG4goD89TjT+IVkimE/zt6sYh/EG3WmaiOMGHbgQ38YfY3ibKCV6GMabHWY0bo+Ps5jjnuYlCczrSk8Hcgd5U1rONoDnG48Ova2W8RGeMXAxiHfWakT4mOx81oRiG1/C5vYh47KSx5fZid4JvxxVd7MdIp3EK06kNNXYneIWtutgLaIasQUwkJE7wE3SxbycWR8SD93BOiL2YRBwRDN5FwOPchaqecZQTQQ4XAApz0FrFQSLPwQD8mlZNEt8L5841D62/cJVIi2cgPelEAlBOCYfYSxXymjKAXqSQAFRwloPspRp5dzOMHiTThEqK2c1OvGHIsg/30YUWKHzDKfZwEB+2xBn3gUSSwmA+MpluruYDySMPYD23TOrX0V/q+CPZYai+yHw8wKscbmhMD+IVfyevcMlkuvxXxGOphTD4Gi4iJ40C/DZtM12wk8Lfbes/oSN27mGPZW0RnVmvebxIMng3z1Bluddz5Mh9wm8icqZIzPHfZDxW8qhotL6cUVh5zP74XOBg0MEnsgW/bfMxzyIOYdgSIuV5/JJtPmZmSlb7mI6ZGTLVQQafSKHUvp7BxFxhSD6N8UsH4An5aT+J3mNB1T+K3hj8YQ/ezRbpvY3CYKEwYFLYgvfTkQZ9qTN8nS3lIdJJZwTLDdNztfwUrTTDp+hllmnqrxo+sLqi1dWwuFPKYnK5h0we5c/UhhT8fF1FHWsZTis8dGAyB4S+67RF5wVhwC/DGHxvAqI4Imyv50Vi0YpjsW4l4AAuGii63yE+lhCHVlOW6o79TxRN/ee64y/SHb8TO4MOvq3uYh6iO1oufiP0r0VnjtA9K4zBDzSdgKtjJGbyqBfG5dFguC62sZiZoLt0Qy3qvYzCKIZNQQYvXupdxGO0Rni5dLebl1wexuD7A4DuC+gprMwTxu2hwT+E7c9iZYEw7lMaiBPeczAXT3EQwcdwTbP1Eq3RiyaPvcIe/4igj9C5NYzBpwOQKmzbh4IVF4dMviOShHfCEdxYieKY8M5qCUCy8E4oxIWVnwcRfK4wdhqitiyk1JBHJc3UU4UT+HDRYADR1GEnB2s9WYrqssn41/BjxcdrrEOVzRogS4hqOfVY8fI6qzWXYTAbgRwUVMvwYeUzzpKCnMGobvIeDRTuZyajiMLoMG2oRONfwnV5kNDNFH5ZKAD8SbPtFrHYaSr8+nkLgCXC53sCdloJz+RlAFYJv5bisPOG9Cv+U+F+O6AZM4Sx2iz+QKZxWrgArSmEbiAIpwvQGdV/qMFOFUdRdTbUn6QCO9c4bajvJhy/GjuFyOqEqhhIZyUXWEk6esd4imTyKTIG/1e08kghNNEMR7WfgERUpTTmPKrmIdSXGupbiHu3dQFZCagy2MGXzCAekZcPySKDlVSYTwsf5QB9aeBiCWMJxcO0RPU5AW5UPuyJI9xhr/diz4ssF6ohGJXyFmu42Fj5MrTGMILgKTyHqpoCAipR3YE9cURFWOorUCVhrzWyKrFWwGg68hIXG79uGziG1rt0IFhPcC+qj6gioARVJm7sRPMTVCWG+u54sBNHqm19Ji7sZCDrv5gp53ekkcNGvHJvGB+zdVd+M60JRi/eREt9VIQqgfuxM5Q4VEcM9R5ysfMAUaA78iFUzRmIfb2sw+j9m6m042lOEqS1hv+R3Y2svpSJCxJCn9hjR5ztywSgg7BtGwpWFHYLY+8CIB2/5Jppj5BvoE7Qz/a8bCVSrIv+quQrYCLVQl0NXVEpnBF6f4aVX+guvELAPmH7GMk/ZX1BgKJb2szBnEJBEMFHUyY841SsjGcr7bGVabLC8z6dsJPC3ww1sxE9LfTeoAdmeumOPkNzYcUb776Y6aebOh5Hg6m6l1MaZhYGOUn2sjD6MAmYyeIWfiqYhoKNLJNlaC/ryCUGvRhyWUedYfx7KIiack4XfZ5ujMI4XewlxIpzMEL04w31k3STtEW4NWd6Uugr4yFEHt4Ielo4iRvC+P20R6QwTZPnFtpjI4dKi5veAlbwLPnM4NesZDs3Tcd9RgxGIw3jdjCeO1FQSGYiuw39D6A1CJ+u/wsm0pZA/STDEnY9A9DKMtRvZjStAIVOzOJMSAsh+YaMltGXGEChHVPYr+s/igsbPTmHP8T2IR7MvW46voZa0+2voLfAor7GdPtz6C0yHVfNt4S+9KewwXTJ8xtumWyv5T6w14pNIYTu40VcWHHzvvSe3sWFnsIq6foVKCb1qyOw2N2EnZJ7+5aRSFAYS2lQp3maLOy5WS61pyW4MKOwCJ/E5X8BBTMuXsW+tpITQQYPcXws8Zyuk420eOZyQSqqy8zDg4yH+cp2T2cYjp1sim3rTzEEO4/YPKNL9AvpD00K+ZTbnZXwc1KSh9FspNrmDbSZicQirwmzLMI7Qb7EnjxM57hp/TGmEUNjEljAZUNtHW/TGvhA+J6QCx4gicVcNT2r7TyIgoEiGf+99CeVLiTSDKimjK85QSH7qCJ4Cr0YRi9SaI6fG5zlIAUcwS9d34Nsen9Xz3f1hRRQJF0fzVCyyaQdcZRzil18zCUAPtHc3s3mTYIRzWCGkEEH4vFSxmn2s5kSJDgOGP/l4Ii8aOHetzeOsIhiNAX0wVq28O3lwXHbklnIeQJ/PHJhQbh72YXjts3Eq4n0t5h7BL+mzcVx29Kpxy9E70IvV5h7qiEJRxiswC+0feTgJkAhg3d098S/J8IUfhziOUAaouscoYJmpNIO0WXSuYYjLLpxFb9U85KNI4wyKJWKfQKOMEtmm33sXCCbCHC4mMxZIWpx/aglEeNwM4J3KNb8jvmaDTxBIt8jhR8vD22IpYYr1PBD5HA4HP8DxVcxdwELEFUAAAAASUVORK5CYII\x3d) no-repeat center;background-size:94px 32px;height:32px;width:94px;top:8px;opacity:0;float:right;left:255px;pointer-events:none;position:relative;transition:opacity .5s ease-in,left .5s ease-in}.s2tb .google-logo{opacity:0.54;left:270px;transition:opacity .5s ease-out,left .5s ease-out}.s2fp .spchc,.s2fp-h .spchc{margin:auto;margin-top:312px;max-width:572px;min-width:534px;padding:0 223px;position:relative;top:0}.s2tb .spchc,.s2tb-h .spchc{background:#fff;box-shadow:0 2px 6px rgba(0,0,0,.2);margin:0;min-width:100%;overflow:hidden;padding:51px 0 50px 126px;position:absolute}.s2tb-h .inner-container,.s2tb .inner-container{height:100%;width:572px;transition:opacity .318s ease-in}\x3c/style\x3e\x3cstyle\x3e.spch.s2tb.mVRQbc{background:rgba(255,255,255,0.9)}\x3c/style\x3e\x3cbutton class\x3d\x22close-button\x22 id\x3d\x22spchx\x22 aria-label\x3d\x22\u0437\u0430\u043a\u0440\u044b\u0442\u044c\x22\x3e\x26times;\x3c/button\x3e\x3cdiv class\x3d\x22spchc\x22 id\x3d\x22spchc\x22\x3e\x3cdiv class\x3d\x22inner-container\x22\x3e\x3cdiv class\x3d\x22button-container\x22\x3e\x3cstyle\x3e.button{background-color:#fff;border:1px solid #eee;border-radius:100%;bottom:0;box-shadow:0 2px 5px rgba(0,0,0,.1);cursor:pointer;display:inline-block;left:0;opacity:0;pointer-events:none;position:absolute;right:0;top:0;transition:background-color 0.218s,border 0.218s,box-shadow 0.218s}.s2tb-h .button{left:-83px;opacity:0;pointer-events:none;position:absolute;top:-83px;transition-delay:0}.s2fp-h .button,.s2fpm-h .button{opacity:0;pointer-events:none;position:absolute;transition-delay:0}.s2fp .button,.s2tb .button,.s2fpm .button{opacity:1;pointer-events:auto;position:absolute;transform:scale(1);transition-delay:0}.s2ra .button{background-color:#f44;border:0;box-shadow:none}.r8s4j{background-color:#dbdbdb;border-radius:100%;display:inline-block;height:301px;left:-69px;opacity:1;pointer-events:none;position:absolute;top:-69px;width:301px;transform:scale(.01);transition:opacity 0.218s}.s2tb-h .r8s4j,.s2tb .r8s4j{height:151px;left:-28px;top:-28px;width:151px}.button-container{pointer-events:none;position:relative;transition:transform 0.218s,opacity 0.218s ease-in}.s2fp-h .button-container,.s2fp .button-container{height:165px;right:-70px;top:-70px;width:165px;float:right}.s2fpm-h .button-container,.s2fpm .button-container{height:165px;margin:0 auto;top:150px;width:165px}.s2fp-h .button-container,.s2tb-h .button-container,.s2fpm-h .button-container{transform:scale(.1)}.s2fp .button-container,.s2fpm-h .button-container,.s2tb .button-container{transform:scale(1)}.s2tb-h .button-container,.s2tb .button-container{height:95px;right:-31px;top:-27px;width:95px;float:right}.s2ra .button:active{background-color:#cd0000}.button:active{background-color:#eee}\x3c/style\x3e\x3cspan class\x3d\x22r8s4j\x22 id\x3d\x22spchl\x22\x3e\x3c/span\x3e\x3cspan class\x3d\x22button\x22 id\x3d\x22spchb\x22\x3e\x3cdiv class\x3d\x22microphone\x22\x3e\x3cstyle\x3e.microphone{height:87px;left:43px;pointer-events:none;position:absolute;top:47px;width:42px;transform:scale(1)}.s2tb-h .microphone,.s2tb .microphone{left:17px;top:7px;transform:scale(.53)}.receiver{background-color:#999;border-radius:30px;height:46px;left:25px;pointer-events:none;position:absolute;width:24px}.wrapper{bottom:0;height:53px;left:11px;overflow:hidden;pointer-events:none;position:absolute;width:52px}.stem{background-color:#999;bottom:14px;height:14px;left:22px;pointer-events:none;position:absolute;width:9px;z-index:1}.shell{border:7px solid #999;border-radius:28px;bottom:27px;height:57px;pointer-events:none;position:absolute;width:38px;z-index:0;left:0px}.s2ml .receiver,.s2ml .stem{background-color:#f44}.s2ml .shell{border-color:#f44}.s2ra .receiver,.s2ra .stem{background-color:#fff}.s2ra .shell{border-color:#fff}\x3c/style\x3e\x3cspan class\x3d\x22receiver\x22\x3e\x3c/span\x3e\x3cdiv class\x3d\x22wrapper\x22\x3e\x3cspan class\x3d\x22stem\x22\x3e\x3c/span\x3e\x3cspan class\x3d\x22shell\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3c/div\x3e\x3c/span\x3e\x3c/div\x3e\x3cdiv class\x3d\x22text-container\x22\x3e\x3cstyle\x3e.text-container{pointer-events:none}.s2fp-h .text-container,.s2fp .text-container,.s2fpm-h .text-container,.s2fpm .text-container{position:absolute}.s2tb-h .text-container,.s2tb .text-container{position:relative}.spcht{font-weight:normal;line-height:1.2;opacity:0;pointer-events:none;position:absolute;text-align:left;-webkit-font-smoothing:antialiased;transition:opacity .1s ease-in,margin-left .5s ease-in,top 0s linear 0.218s}.s2fp-h .spcht,.s2fpm-h .spcht{margin-left:44px}.s2tb-h .spcht{margin-left:32px}.s2fp-h .spcht,.s2fp .spcht,.s2fpm-h .spcht,.s2fpm .spcht{left:-44px;top:-.2em}.s2fp-h .spcht,.s2fp .spcht{font-size:32px;width:460px}.s2fpm-h .spcht,.s2fpm .spcht{font-size:28px;width:300px}.s2tb-h .spcht,.s2tb .spcht{font-size:27px;left:7px;top:.2em;width:490px}.s2fp .spcht,.s2fpm .spcht,.s2tb .spcht{margin-left:0;opacity:1;transition:opacity .5s ease-out,margin-left .5s ease-out}.spchta{color:#15c;cursor:pointer;font-size:18px;font-weight:500;pointer-events:auto;text-decoration:underline}.spch-2l.spcht,.spch-3l.spcht,.spch-4l.spcht{transition:top 0.218s ease-out}.spch-2l.spcht{top:-.6em}.spch-3l.spcht{top:-1.3em}.spch-4l.spcht{top:-1.7em}.s2fp .spch-5l.spcht{top:-2.5em}.s2tb .spch-5l.spcht{font-size:24px;top:-1.7em;transition:font-size 0.218s ease-out}\x3c/style\x3e\x3cspan class\x3d\x22spcht\x22 style\x3d\x22color:#70757a\x22 id\x3d\x22spchi\x22\x3e\x3c/span\x3e\x3cspan class\x3d\x22spcht\x22 style\x3d\x22color:#000\x22 id\x3d\x22spchf\x22\x3e\x3c/span\x3e\x3c/div\x3e\x3cdiv class\x3d\x22google-logo\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3cdiv class\x3d\x22permission-bar\x22\x3e\x3cstyle\x3e.permission-bar{margin-top:-100px;opacity:0;pointer-events:none;position:absolute;width:500px;transition:opacity 0.218s ease-in,margin-top .4s ease-in}.s2wfp .permission-bar{margin-top:-300px;opacity:1;transition:opacity .5s ease-out 0.218s,margin-top 0.218s ease-out 0.218s}.permission-bar-gradient{box-shadow:0 1px 0px #4285f4;height:80px;left:0;margin:0;opacity:0;pointer-events:none;position:fixed;right:0;top:-80px;transition:opacity 0.218s,box-shadow 0.218s}.s2wfp .permission-bar-gradient{box-shadow:0 1px 80px #4285f4;opacity:1;pointer-events:none;animation:allow-alert .75s 0 infinite;animation-direction:alternate;animation-timing-function:ease-out;transition:opacity 0.218s,box-shadow 0.218s}@-webkit-keyframes allow-alert {from{opacity:1}to{opacity:.35}}\x3c/style\x3e\x3cdiv class\x3d\x22permission-bar-gradient\x22\x3e\x3c/div\x3e\x3c/div\x3e\x3c/div\x3e');
        })();
        (function () {
            google.drty && google.drty();
        })();
    });
    google.drty && google.drty();</script>

<div class="gb_Fd">Приложения Google</div>
<script src="/xjs/_/js/k=xjs.s.ru.SSwUFOaYhHI.O/ck=xjs.s.PhxogI6aDsQ.L.W.O/am=ABEBAAEAAAAAAAAAAAAFALkgEAAAAGAMAAAAAAAAAiAAQEDiYEICAAAIYIPMSwEDAAAgAAIAYI6AAjCgACAsAAEAAACOwBcI-BsAeASbsAAAAAAAAEAAXIIZaiBREAABAAAAQKxW1wAAQgAIBA/d=1/exm=cdos,csi,d,dpf,hsm,jsa/ed=1/dg=2/br=1/rs=ACT90oEi5WPfwxgUHLhLE3ze6JqwTT-ADQ/m=DhPYme,EkevXb,NzU6V,Tia57b,aa,abd,async,dvl,fKZehd,mu,pHXghd,sb_wiz,sf,sonic,spch?xjs=s1"
        nonce="5GttHyw+Za99gGImmIw1qg==" async="" gapi_processed="true"></script>
<script src="/xjs/_/js/k=xjs.s.ru.SSwUFOaYhHI.O/ck=xjs.s.PhxogI6aDsQ.L.W.O/am=ABEBAAEAAAAAAAAAAAAFALkgEAAAAGAMAAAAAAAAAiAAQEDiYEICAAAIYIPMSwEDAAAgAAIAYI6AAjCgACAsAAEAAACOwBcI-BsAeASbsAAAAAAAAEAAXIIZaiBREAABAAAAQKxW1wAAQgAIBA/d=1/exm=DhPYme,EkevXb,NzU6V,Tia57b,aa,abd,async,cdos,csi,d,dpf,dvl,fKZehd,hsm,jsa,mu,pHXghd,sb_wiz,sf,sonic,spch/ed=1/dg=2/br=1/rs=ACT90oEi5WPfwxgUHLhLE3ze6JqwTT-ADQ/m=LtQuz,VsqSCc?xjs=s2"
        nonce="5GttHyw+Za99gGImmIw1qg==" async=""></script>
<script src="/xjs/_/js/k=xjs.s.ru.SSwUFOaYhHI.O/ck=xjs.s.PhxogI6aDsQ.L.W.O/am=ABEBAAEAAAAAAAAAAAAFALkgEAAAAGAMAAAAAAAAAiAAQEDiYEICAAAIYIPMSwEDAAAgAAIAYI6AAjCgACAsAAEAAACOwBcI-BsAeASbsAAAAAAAAEAAXIIZaiBREAABAAAAQKxW1wAAQgAIBA/d=1/exm=DhPYme,EkevXb,LtQuz,NzU6V,Tia57b,VsqSCc,aa,abd,async,cdos,csi,d,dpf,dvl,fKZehd,hsm,jsa,mu,pHXghd,sb_wiz,sf,sonic,spch/ed=1/dg=2/br=1/rs=ACT90oEi5WPfwxgUHLhLE3ze6JqwTT-ADQ/m=aLUfP?xjs=s2"
        nonce="5GttHyw+Za99gGImmIw1qg==" async=""></script>
</body>
</html>