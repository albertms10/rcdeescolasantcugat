<?php

use RCDE\Model\Picture;

require_once ROOT . '/../src/Model/Picture.php';
?>

<h2 class="h1" id="history" data-heading>历史</h2>
<div class="row mt-lg-5">
    <div class="col-lg-8 order-lg-1 order-2 pr-lg-5">
        <h3 id="founded-by-young-catalan-students">由加泰罗尼亚大学生建立</h3>
        <hr class="divider my-4 ml-0">
        <p>巴塞罗那西班牙人体育俱乐部是西甲最古老的球队之一。
            <time datetime="1900-10-28">1900年10月28日，</time>
           在巴塞罗那大学的教室里，诞生了西班牙社会足球队（Sociedad Española de
           Fútbol)，这是西班牙人队的前身，创始人安赫尔-罗德里格斯（Ángel
           Rodríguez）亲自为球队命名，他也是球队第一任主席。俱乐部组建的初衷，是建造一个由全部由加泰罗尼亚球员或者西班牙其他地区的球员组成的球队，来对抗其他几乎全部由英国等外籍球员组成的球队。
        </p>

        <?php
        $picture = new Picture(
            src: '/assets/img/fotos/rcde-historia-1',
            alt: 'RCDE Escola',
            width: 960, height: 275,
        );
        include ROOT . '/../src/View/img-set.php' ?>

        <h3 id="yellow-clubs-original-colour" class="mt-5">黄色，俱乐部最初的代表颜色</h3>
        <hr class="divider my-4 ml-0">
        <p>
            虽然如今西班牙人队的主队球衣是蓝白色条纹衫，但是黄色却是俱乐部最初的球衣颜色，原因很简单，有一位俱乐部的会员赠送给俱乐部一批黄色的布料用来制作俱乐部的制服。之后，使用白色上衣，蓝色裤子，
            <time datetime="1909">1909年开始，</time>
            使用蓝白色条纹并一直保持至今，这一颜色正是当年加泰罗尼亚海军将军 Roger de Llúria 使用的盾徽颜色。
        </p>

        <h3 id="great-players" class="mt-5">荣誉球员</h3>
        <hr class="divider my-4 ml-0">
        <p>西班牙人出现过一些世界著名的球员，也为西班牙国家队输送过优秀球员。蓝白军团第一位著名的伟大球员是门将---里卡多-萨莫拉，在他之后，诸如阿尔弗雷多·迪斯蒂法诺，库巴拉，寇诺等都是世界瞩目的球星。</p>

        <h3 id="great-football-academy" class="mt-5">西班牙人青训队</h3>
        <hr class="divider my-4 ml-0">
        <p>俱乐部有一支西班牙B队，拥有12支青训队，女足和足球学校，西班牙B队的大本营是位于圣阿德里亚，于
            <time datetime="2001-09">2001年9月</time>
           揭幕的丹尼-雅克体育城。
        </p>

        <h3 id="from-sarria-to-the-olympic-stadium" class="mt-5">从萨莉亚-奥林匹克体育场</h3>
        <hr class="divider my-4 ml-0">
        <p>圣家族教堂附近的空地是西班牙人最初的比赛场地，从
            <time datetime="1923">1923年</time>
           起直到
            <time datetime="1996">1996–97赛季，</time>
           主场是被人们称为疯狂之家的萨莉亚球场。
        </p>
        <p>
            <time datetime="1997">1997年，</time>
            俱乐部不得已卖掉萨莉亚的球场，蒙锥特山上
            <time datetime="1992">1992年</time>
            巴塞罗那奥运会体育场变成了西班牙人的新主场。在12年间，俱乐部取得了两次国王杯，
            <time datetime="2007">2007年</time>
            欧洲联盟杯亚军。
        </p>
        <p>在蒙锥特主场的这几年间，球队也经历了很多令人兴奋的时刻，比如
            <time datetime="2003">2003年–2004年</time>
           赛季，在穆尔西亚的比赛中，塔穆多的一记决定性进球在最后时刻挽救了球队免于降级，在同皇家社会的加时赛中，克洛的进球帮助球队取得
            <time datetime="2006">2006年</time>
           赛季最佳排名，从此，球队开始了科内亚-普拉特新球场的建设，
            <time datetime="2009">于2009年</time>
           夏天正式启用。
        </p>

        <h3 id="four-cup-titles" class="mt-5">四次捧杯：
            <time datetime="1929">1929年，</time>
            <time datetime="1940">1940年，</time>
            <time datetime="2000">2000年和</time>
            <time datetime="2006">2006年</time>
        </h3>
        <hr class="divider my-4 ml-0">
        <p>西班牙人历史上的第一个荣誉是
            <time datetime="1902">1902–1903年</time>
           赛季的马卡亚杯（Copa Macaia）。
            <time datetime="1912">1912年，</time>
           国王阿方索十三世授予西班牙人“皇家”称号，球队正式使用皇家名称并在队徽上添加王冠徽记。
            <time datetime="1929">1929年，</time>
           国家冠军赛揭幕，西班牙人作为该赛事的创始俱乐部之一，打进了比赛的第一粒进球。同年，蓝白军团赢得西班牙国王杯，其后分别于
            <time datetime="1940">1940年</time>
           和
            <time datetime="2000">2000年</time>
           再次捧得国王杯，在
            <time datetime="2006">2006年</time>
           俱乐部成立百年纪念中，再次赢得奖杯。国际赛事上，
            <time datetime="1988">1988年</time>
           获得在德国勒沃库森举行的欧洲足联杯亚军。
            <time datetime="2007-05">2007年5月，</time>
           欧洲联盟杯决赛，最终点球阶段不敌塞维利亚队，获得亚军，却创造了90分钟不败的战绩。
        </p>

        <h3 id="twice-finalist-uefa-cup" class="mt-5">两次进入欧洲足球联盟杯决赛</h3>
        <hr class="divider my-4 ml-0">
        <p>
            <time datetime="1988">1988年，</time>
            在半决赛对阵拜仁-勒沃库森队，2007年半决赛的对手是塞维利亚队。蓝白军团创造了整个赛事不败的纪录。
        </p>

        <h3 id="new-stadium-defines-clubs-future" class="mt-5">新球场标志着俱乐部的未来</h3>
        <hr class="divider my-4 ml-0">
        <p>
            <time datetime="2002">在2002年初，</time>
            西班牙人俱乐部宣布将在巴塞罗那近郊科内亚-普拉特市建设新球场，经过漫长的行政审批后，
            <time datetime="2007">于2007年</time>
            动工。新球场标志着俱乐部迈进了一段崭新的时期，拥有了真正属于自己的家:科内亚-普拉特球场，能容纳四万观众，被欧足联评为四星级球场，也是西班牙最现代的球场。
        </p>

        <em class="text-muted float-right">来源:
            <a href="https://www.rcdespanyol.com/cn/history/"
               hreflang="zh-CN"
               rel="external noopener" target="_blank">
                rcdespanyol.com<i class="fas fa-external-link-square-alt ml-2"></i>
            </a>
        </em>
    </div>
    <div class="col-lg-4 order-lg-2 order-1 my-lg-0 mt-3 mb-5">
        <div data-nav-items="history"></div>
    </div>
</div>