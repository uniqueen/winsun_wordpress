<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" />
    <link href="<?php echo get_template_directory_uri(); ?>/winsun.css" rel="stylesheet">

</head>

<body>
    <!--header start        -->
    <div class="header">
        <div class="other">
            <a href="#" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
            </a>
            <a href="#" class="ren">
                <img src="<?php echo get_template_directory_uri(); ?>/images/people.png">
            </a>

            <h3>客户专线</h3>

            <h2>021—33199889</h2>
            <div class="search" >
                <?php get_search_form(); ?>
             </div>
            <ul class="trap">
                <li><a href="">Chinese</a>
                </li>
                <li><a href="">English</a>
                </li>
            </ul>
        </div>
    </div>
    <!--header end-->
    <!--mainnav start-->
    <div class="mainnav">
        <ul>

            <li><a href="#">首页</a>
            </li>
            <li><a href="#">产品信息</a>
                <ul class="sub_nav">
                    <li><a href="#">数据保险箱</a>
                    </li>
                    <li><a href="#">NAS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">下载中心</a>
                <ul class="sub_nav">
                    <li><a href="#">数据保险箱</a>
                    </li>
                    <li><a href="#">NAS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">闻上论坛</a>
                <ul class="sub_nav">
                    <li><a href="#">数据保险箱</a>
                    </li>
                    <li><a href="#">NAS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">在线体验</a>
                <ul class="sub_nav">
                    <li><a href="#">数据保险箱</a>
                    </li>
                    <li><a href="#">NAS</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">走进闻上</a>

                <ul class="sub_nav">
                    <li><a href="#">公司简介</a>
                    </li>
                    <li><a href="#">招贤纳士</a>
                    </li>
                    <li><a href="#">团队介绍</a>
                    </li>
                    <li><a href="#">新闻中心</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
    <!--mainnav end-->
    <!--banner start-->
    <div class="banner">

    </div>
    <!--banner end-->
    <!--content start-->
    <div class="content">
        <ul>
            <li>
                <a href="#">
                    <img src="" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!--content end        -->
    <!--footer start        -->
    <div class="footer">
        <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_bottom.png">
        </a>

        <p>
            <a href="#">联系我们</a>
            <a href="#">招贤纳士</a>
            <a href="#">天猫店铺</a>
        </p>

        <p>Copyright © 2014 沪ICP备14031892号上海闻上信息科技有限公司 所有权利均予保留</p>
    </div>
    <!--footer end        -->
</body>
