<!DOCTYPE html>
<html>
    <head>
		<meta charset="<?php $this->options->charset(); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta http-equiv="Cache-Control" content="no-transform"/>
		<meta http-equiv="Cache-Control" content="no-siteapp"/><?php if($this->options->favicon): ?>
        <link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?><?php if($this->options->iosicon): ?>
        <link rel="apple-touch-icon" href="<?php $this->options->iosicon();?>"><?php endif; ?>
        <title>Nothing here - <?php $this->options->title() ?></title>
        <style>
        body{
            margin:0;padding:0;
            font-family: PingFang SC,Microsoft YaHei,WenQuanYi Micro Hei,sans-serif;
        }
        a, button.submit {
            color:#6E7173;
            text-decoration:none;
            -webkit-transition:all .1s ease-in;
            -moz-transition:all .1s ease-in;
            -o-transition:all .1s ease-in;
            transition:all .1s ease-in;
        }
        a:hover, a:active {
            color:#6E7173;
        }
        .body404{
            position: absolute;
            height: 100%;
            width: 100%;
            background:#fff;
            background-size: auto 100%;
        }
        .body-about .body404{
            background:#fff;
        }
        .site-name404 {
            margin: 0 auto;
            text-align: center;
            letter-spacing: 2px;
            font-size: 150px;
            line-height: 1;
            font-weight: 100;
            color: #f35626;
            background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: hue 60s infinite linear;
        }
        .site-name404 h1{
            margin: 0 0 10px;
            font-size:50px;
            line-height:1.2;
        }
        .title404 span{
            font-size: 15px;
            width: 2px;
        }
        .title404 p{
            font-size: 20px;
            line-height:1.5;
            margin:0;
            color:#7b8993;
        }
        .info404{
            position: absolute;
            top: 50%;
            text-align: center;
            width: 100%;
            margin-top: -160px;
        }
        .body-about .info404{
            margin-top: -180px;
        }
        #footer404{
            margin-top:30px;
            font-size:10px;
        }
        .index404 {
            margin-top: 24px;
            display: inline-block;
            white-space: nowrap;
            cursor: pointer;
            letter-spacing: 1px;
            font-size: 14px;
            -moz-user-select: -moz-none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            text-shadow: none;
            border: 2px solid #7b8993;
            line-height: 36px;
            text-align: center;
            height: 36px;
            padding: 0 25px;
            border-radius: 25px;
            background-color: #fff;
            color: #7b8993;
        }
        .icon-about{
            padding: 10px 0 25px;
        }
        .icon-about a{
            font-size: 20px;
            margin: 5px;
            color: #fff;
            background-color: #000;
            border-radius: 100%;
            padding: 6px;
        }
        @-webkit-keyframes hue {
          from {
            -webkit-filter: hue-rotate(0deg);
          }

          to {
            -webkit-filter: hue-rotate(-360deg);
          }
        }
        </style>
    </head>
    <body>
        <div class="body404">
            <div class="info404">
                <header id="header404" class="clearfix">
                    <div class="site-name404">404</div>
                </header>
                <section>
                    <div class="title404">
                        <p>I have no secret of success but hard work.</p>
                    </div><a href="<?php $this->options->siteUrl(); ?>" class="index404">Back Home</a>
                </section>
            </div>
        </div>
    </body>
</html>