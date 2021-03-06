<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta name="keywords" content="鸟布鲸">
    <meta name="description" content="我们的世界">
    <title>Neo</title>
    <!--分享-->
    <script src="{{asset('pic/push.js')}}"></script>
    <script src="{{asset('pic/hm.js')}}"></script>
    <script src="{{asset('pic/wb.js')}}" type="text/javascript" charset="utf-8"></script>
    <!--分享结束-->
    <script type="text/javascript" src="{{asset('pic/jquery.js')}}"></script>
    <script src="{{asset('pic/add.js')}}"></script>
    <link media="all" href="{{asset('pic/index.css')}}" type="text/css" rel="stylesheet">
</head>
<body style="overflow-x: hidden; background-color: rgb(250, 249, 245);"><iframe style="position: fixed; display: none; opacity: 0;" src="../pic/index_1.html" frameborder="0"></iframe><div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; top: 50%; left: 50%; overflow: auto;"></div><div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; overflow: auto;"></div><iframe style="display: none;" src="../pic/index_2.html" frameborder="0"></iframe>
    <script src="{{asset('pic/jquery-1.7.2.js')}}"></script>
    <script type="text/javascript" src="{{asset('pic/reg.js')}}"></script>
    <script type="text/javascript" src="{{asset('pic/lgandrg.js')}}"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?9a11dd5949cc7fabe8b1613247bce4ee";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            }
            else {
               url bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
<div id="full_navigation">
    <header>
        <div class="header_bar">
            <div class="logo"><a href="{{$route['jump']}}"><img src="{{asset('PcTpl/Public/images/logo_niao.png')}}"></a>
            </div>
            <div class="operation">
                <span>
                    <a href="{{$route['sale']}}">鸟布鲸上出售</a>
                </span>                
                <span><a id="register">注册</a></span>                <span><a class="loginBtn" id="login">登录</a></span>           
                <span class="car"><a href="http://niao.com"><img src="{{asset('pic/shopping@20cart.png')}}"></a></span>
            </div>
        </div>
    </header>
    <div class="nav">
        <ul class="navBar">
            <li>
                <a class="move" href="javascript:;"><p font-family='Microsoft Yahei', Helvetica, Arial, sans-serif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Niao&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></a>
            </li>
           @foreach ($category as $cates => $cate) 
           <li>
                <a class="move" href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$cates}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <ul class="nav-menu">
                    @foreach($cate as $k => $ca)
                    <li>
                        <div class="move">
                            <a class="changeA" href="{{$route['jump'].'module/'.$cates.'/'.$ca}}">{{$ca}}</a>
                            <a href="{{$route['jump'].'module/'.$cates.'/'.$ca}}">{{$ca}}</a>
                        </div>
                    </li> 
                    @endforeach     
                </ul>
            </li>
           @endforeach
        </ul>
    </div>
    <div class="mark_bg"></div>
    <div class="all_div">
        <div class="all_div_bj"></div>
        <div class="tabs">
            <ul class="ul1s">
                <li class="rg active">注册</li>
                <li class="lg">登录</li>
            </ul>
            <div class="boxs">
                <div style="width: 100%; height: auto; display: block;" class="rgs box1">
                    <form class="register sms-form" id="sms-form" method="post" name="form-sub" action="http://soulieren.com/index.php/Home/Index/pc.html">
                        <p>手机号码</p>
                        <input id="phone" name="username" class="phone" maxlength="11" placeholder="11位手机号码" value="" type="text">
                        <span class="phone_span"></span>
                        <p>验证码</p>
                        <input id="randCode" name="randCode" maxlength="4" placeholder="图片验证码" value="" type="text">
                        <div class="kd">
                            <img src="../pic/createcode" id="kd" onclick="this.src='/index.php/Home/Mobile/createCode/id/'+Math.random()">
                        </div>
                        <span class="randCode_span"></span>
                        <p>手机验证码</p>
                        <input id="mobilecode" name="mobilecode" class="input-sty padding-r" maxlength="6" placeholder="手机验证码" value="" type="text">
                        <button id="btnSendCode" class="phoneCode" type="submit">发送验证码</button>

                        <span class="mobilecode_span"></span>
                        <p>密码</p>
                        <input name="pwd" class="pwd" id="password" maxlength="16" placeholder="6-16位字符，须包含字母、数字" type="password">
                        <span class="password_span"></span>
                        <p>确认密码</p>
                        <input name="rpwd" class="rpwd" id="rpassword" maxlength="16" placeholder="确认密码" type="password">
                        <span class="rpassword_span"></span>
                        <hr>
                        <div>
                            <input class="checkbox" checked="checked" type="checkbox"><span class="input_text">请确认已阅读并同意鸟布鲸使用条款和隐私条款</span>
                        </div>
                        <button type="button" class=" button-login registerBtn">立即注册</button>
                    </form>
                </div>
                <div style="width: 100%; height: auto;" class="lgs box1">
                    <form class="login" action="http://soulieren.com/index.php/Home/Index/pc.html">
                        <div class="kuaijie">
                            <a href="https://open.weixin.qq.com/connect/qrconnect?appid=wx8d8646fc4b1dcca4&amp;redirect_uri=http%3A%2F%2Fwww.soulieren.com%2Findex.php%2Fhome%2FThirdLogin%2Fcallback&amp;response_type=code&amp;scope=snsapi_login&amp;state=state#wechat_redirect">微信快捷登录</a>
                        </div>
                        <hr style="margin-top: 5px; margin-bottom: 0px;">
                        <p>用户名</p>
                        <input id="phone1" name="phone" class="phone" maxlength="11" placeholder="用户名" value="" type="text">
                        <span class="phone1_span"></span>
                        <p>密码</p>
                        <input name="pwd" class="password" id="password1" maxlength="16" placeholder="密码" type="password">
                        <span class="password1_span"></span>
                        <p>验证码</p>
                        <input name="randCode" id="randCode1" class="randCode" maxlength="4" placeholder="图片验证码" value="" type="text">
                        <div class="kds">
                        <img src="../pic/createcode_001.dat" id="kds" onclick="this.src='/index.php/Home/customer/createCode/id/'+Math.random()">
                         </div>
                        <span class="randCode1_span"></span>
                        <hr>
                        <div>
                            <input class="checkbox" checked="checked" type="checkbox"><span class="input_text">请确认已阅读并同意鸟布鲸使用条款和隐私条款</span>
                        </div>
                        <button type="button" value="登录" class="submit-button" onclick="addAjax()">登录</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        var clickState = 0;//初始化点击状态
        $(document).ready(function() {
            $('#on_button').click(function(){
                var aa=$('#on_button').css("background-color","#dddddc");
                if( clickState == 1){
                    //如果状态为1就什么都不做
                }else{
                    clickState = 1;  //如果状态不是1  则添加状态 1
                    aa;
                    setTimeout(addAjax,2000);
                }
            });
        });
        function addAjax() {
            var bb=$('#on_button').css("background-color","#34a8c4");
            var user = {
                username: $("#phone1").val(),
                pwd: $("#password1").val(),
                code:$("#randCode1").val(),
            };
            $.ajax({
                type: "POST",
                url: "/upload/index",
                data: user,
                dataType: 'json',
                success: function (data) {
                    if (data.status == -1) {
                        alert(data.msg);
                        return false;
                    }
                    if (data.status == -2) {
                        alert(data.msg);
                        return false;
                    }
                    if (data.status == -3) {
                        alert(data.msg);
                        return false;
                    }
                    if(data.status==5){
                        window.location.href=data.url;
                    } else {
                        location.reload(true);
                        return true;
                    }
                }
            });
            clickState = 0;
            bb;
        }
    </script>
    <script>
        $('.boxs .box1 ').eq(0).show();
        $('.ul1s li').click(function () {
            var index = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            $('.boxs .box1 ').eq(index).show().siblings().hide();
        });
        $('#register').click(function () {
            $('.all_div').fadeIn();
        });
        $('.all_div_bj').click(function () {
            $('.all_div').fadeOut();
        });
        $('#login').click(function () {
            $('.all_div').fadeIn();
            $('.lg').addClass('active');
            $('.rg').removeClass('active');
            $('.rgs').hide();
            $('.lgs').show();
        });
        $('.nav-menu>li').mouseenter(function () {
            $(this).find('.move').stop().animate({top:0},400);
        }).mouseleave(function () {
            $(this).find('.move').stop().animate({top:-44+'px'},400);
        });
    </script>
    <!--注册ajax-->
    <script>
        var timeNum = 60;
        //验证码倒计时提示
        function topple(obj) {
            if(timeNum==0){
                obj.removeAttr('disabled');
                obj.html('发送验证码');
                obj.css('background','#ff873e');
                timeNum = 60;
                return;
            }else{
                obj.attr('disabled','true');
                obj.html('重新发送'+timeNum+'s');
                obj.css('background','#bbb7b7');
                timeNum--;
            }
            setTimeout(function () {
                topple(obj);
            },1000)
        }
        //发送短信验证码AJAX
        $(function(){
            $('#sms-form').submit(function(){
                var $this = $(this);
                if(!$this.hasClass('s-form')){
                    $this.addClass('s-form');//锁定表单
                    var formData = new FormData($this[0]);
                    $.ajax({
                        url:'../mobile/message',
                        type:'POST',
                        data:formData,
                        dataType:'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success:function(s){
                            if(s.status<0){
                                $this.removeClass('s-form');//解锁表单
                                var html = (s.code != 1 ? '错误提示：' : '')+s.msg;
                                alert(html);
                                return false;
                            }else{
                                var msg = (s.code != 1 ? '发送成功，请填写：' : '')+s.msg;
                                alert(msg);
                                topple($('#btnSendCode'));
                            }
                        }
                    });
                }
                return false;
            });
        });
    </script>

    <div style="position: relative;">
        <script language="JavaScript">
            var how_many_ads = 4
            var now = new Date()
            var sec = now.getSeconds()
            var ad = sec % how_many_ads;
            ad +=1;
            if (ad==1){
                url="/art";
                banner="{{asset('/pic/01.jpg')}}";
                width="1920";
                height="360";
                alr=""
            }

            if (ad==2) {
                url="/art";
                banner="{{asset('/pic/04.jpg')}}";
                width="1920";
                height="360";
                alr=""
            }

            if (ad==3) {
                url="/art";
                banner="{{asset('/pic/05.jpg')}}";
                width="1920";
                height="360";
                alr=""
            }

            if (ad==4) {
                url="/art";
                banner="{{asset('/pic/03.jpg')}}";
                width="1920";
                alr="";
                height="360";
            }
            document.write('<div class="banner">');
            // document.write('<a target=\"_blank\">');
            document.write('<img src=\"' + banner + '\" width=')
            document.write(width + ' max-height=' + height + ' / >');
            document.write(' <div class="banner_a"><a  href=\"'+url+'\" >'+alr+'</a></div><br>');
            document.write('</div>');
        </script>
        <div class="sousuo" style="max-width: 1330px; margin: 0px auto;">
        <div class="ALL">
            <div class="ALL_text">
            </div>
            <div class="Search" style="margin-left: 50px;">
                <form action="/module/鸟布鲸/查询结果" method="get">
                    <input name="name" class="Search_text" placeholder="阳光照耀的日子" value="" type="text">
                    <label> &nbsp;&nbsp;&nbsp;</label>
                    <input value="Neo" class="Search_submit" type="submit">
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid ">
        <div class="row ">
            <div class="accordion-body">
                <br><br>
                <div class="banner_text">
                    @foreach($content as $key => $value)
                    <div class=" col-lg-4  col-md-4  col-sm-4 col-xs-4">
                        <div class="text_1">
                            <strong>{{$key}}</strong>
                            <p>{{ $value[0] or '' }}</p>
                            <p>{{ $value[1] or '' }}</p>
                            <p>{{ $value[2] or '' }}</p>
                            <p>{{ $value[3] or '' }}</p>
                        </div>
                    </div>
                    @endforeach 
                </div>
                @foreach($recommend as $list)
                <div class="Title">
                    <p>&nbsp;</p>
                </div>
                @foreach($list as $li) 
                <div class="list">
                    <div class="col-lg-3  col-md-3  col-sm-4 col-xs-4" style="padding: 0px 10px;">
                        <div class="block-grid-item">
                            <a href="{{$li['href']}}">
                                    <div class="list_img">
                                        <img src="{{asset($li['src'])}}">
                                    </div>
                                    <div class="box-info">
                                        <p class="goods-name">{{$li['name']}}</p>
                                        <p><span class="business">{{$li['author']}}</span><span class="price">{{$li['price']}}</span></p>
                                    </div>
                                </a>
                            </div>
                        </div> 
                @endforeach
                @endforeach
                <div class="Title">
                        <p>&nbsp;</p>
                    </div>
                    <div class="good_a">
                    <a href="{{$route['jump']}}">More&gt;<span></span></a>
                </div>
            </div>
            <div class="accordion-body_a">
                <div class="accordion-body">
                    <div class="accordion-text accordion">
                        <!--<img  src="/PcTpl/Home/Public/images/index/ioc_img2.png" style="position: absolute"/>-->
                        <div class="vertical-center">
                            <div class="col-lg-12  col-md-12  col-sm-12 col-xs-12">
                                <p class="h1_p">果冻让你更安全</p>
                            </div>
                            <div class="col-lg-4  col-md-4  col-sm-4 col-xs-4 col-lg-4_text">
                                <p>值得信赖的卖家</p>
                                <p>您可以阅读评论和产品信息，有任何问题随时与卖家进行联系</p>
                            </div>
                            <div class="col-lg-4  col-md-4  col-sm-4 col-xs-4 col-lg-4_text">

                                <p>世界级的安全</p>
                                <p>维护您的信息是我们安全专家的首要任务</p>
                            </div>
                            <div class="col-lg-4  col-md-4  col-sm-4 col-xs-4 col-lg-4_text">
                                <p>购买保护</p>
                                <p>如果出现任何问题，专业保证团队是您坚实的后盾</p>
                            </div>
                        </div>
                        <!--<img  src="/PcTpl/Home/Public/images/index/ioc_img1.png" style="position: absolute;right: 0"/>-->
                    </div>
                </div>
            </div>
            <div class="accordion-body">
                <div class="Title">
                    <p>最新作品</p>
                </div>
                <div class="list" style="display: -webkit-box;">
                    @foreach($newWork as $list) 
                    <div class="col-lg-4  col-md-4  col-sm-4 col-xs-4" style="padding: 0px 10px;">
                            <div class="block-grid-item">
                                <a href="{{$list['href']}}">
                                    <div class="list_img">
                                        <img src="{{asset($list['src'])}}">
                                    </div>
                                    <div class="box-info">
                                        <p class="goods-name">{{$list['name']}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach               
                </div>
            </div>
            <div class="good_a">
                <a href="http://soulieren.com/index.php/Home/shop/shopList.html">查看更多&gt;<span></span></a>
            </div>
            <div class="accordion-body_a" style="margin: 60px 0px 0px; height: 236px !important; white-space: nowrap;">
                <div class="accordion-body">
                    <div class="accordion-text1">
                        <div class="vertical-center1">
                            <div class="" style="text-align: center; margin-top: 55px;">
                                <p class="h1_p">我们的世界上开始销售</p>
                                <p style="line-height: 30px;">数以百万计的用户等不及要欣赏您所拥有的。</p>
                                <p><a href="http://soulieren.com/index.php/Home/SellerCenter/index.html">打开你的商店&gt;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-body">
                <div class="Title">
                    <p>优秀画师</p>
                </div>
                <div class="list">
                    @foreach($artist as $list)
                    <div class="col-lg-4  col-md-4  col-sm-4 col-xs-4" style="padding: 0px 10px;">
                            <div class="block-grid-item">
                                <a href="{{$list['href']}}" target="_top">
                                    <div class="list_img">
                                        <img src="{{asset($list['src'])}}">
                                    </div>
                                    <div class="box-info">
                                        <p class="goods-name">{{$list['name']}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="accordion-body_a" style="margin: 60px 0px; height: 236px !important;">
                <div class="accordion-body">
                    <div class="accordion-text1">
                        <!--<div class="accordion_img">-->
                            <!--<img  src="/PcTpl/Home/Public/images/index/ioc_img5.png" />-->
                        <!--</div>-->

                        <div class="vertical-center1" style="margin-right: 0px; white-space: nowrap;">
                            <div class="" style="text-align: center; margin-top: 55px;">
                                <p class="h1_p">我们是什么</p>
                                <p style="line-height: 30px;">我们不仅仅是一个交易平台</p>
                                <p> <a href="http://soulieren.com/index.php/Home/index/read.html">阅读关于它的一切&gt;</a></p>
                            </div>
                        </div>
                        <!--<div class="accordion_img">-->
                            <!--<img  src="/PcTpl/Home/Public/images/index/ioc_img6.png" />-->
                        <!--</div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>








    
    

    <footer>
        <div class="footer_list">
            <ul>
                <li><a>把你的激情融入企业</a></li>
                <li><a class="open" href="http://soulieren.com/index.php/Home/goods/goodsList/uid/211316.html">打开一个商店</a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/company.html">在我们的世界上出售</a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/specifications.html">我们的规则</a></li>
                <!--<li><a href="javascript:return false;">使用条款</a></li>-->
                <!--<li><a href="javascript:return false;">隐私条款</a></li>-->
            </ul>
            <ul>
                <li><a>关于</a></li>
                <li><a href="http://soulieren.com/index.php/Home/index/read.html">关于我们</a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/pc.html">加入我们</a></li>
                <li><a href="http://soulieren.com/index.php/Home/index/read.html">联系我们</a></li>
            </ul>
            <ul>
                <li><a>更多</a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/pc.html">微信</a></li>
                <li><a href="http://weibo.com/soulieren?refer_flag=1001030102_">微博</a></li>
                <li><a href="https://shop129576228.taobao.com/?spm=a230r.7195193.1997079397.2.s5bniH">淘宝</a></li>
                <li><a href="http://v.qq.com/vplus/2f648c677c0dcb939fcf6a40cd1fae90">原创视频</a></li>
            </ul>
            <ul>
                <li><a>政策</a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/buyer_policy.html">买家政策 </a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/seller_policy.html">卖家政策 </a></li>
                <li><a href="http://soulieren.com/index.php/Home/Index/trademark_policy.html">商标政策 </a></li>
            </ul>
            <ul>
                <li><a>商务合作</a></li>
                <li><a href="http://soulieren.com/index.php/Home/BusinessCooperation/index.html#page2">线上渠道</a></li>
                <li><a href="http://soulieren.com/index.php/Home/BusinessCooperation/index.html#page3">线下渠道</a></li>
                <li><a href="http://soulieren.com/index.php/Home/BusinessCooperation/index.html#page4">视频定制</a></li>
            </ul>
            <ul class="last_list">
                <li><a href="javascript:;" style="margin: 12px 0px;">分享</a></li>
                <li class="jiathis_style_32x32"><a class="jiathis_button_weixin" title="分享到微信"><span class="jiathis_txt jtico jtico_weixin"></span></a></li>
                <li class="jiathis_style_32x32"><a class="jiathis_button_cqq" title="分享到QQ好友"><span class="jiathis_txt jtico jtico_cqq"></span></a></li>
                <li class="jiathis_style_32x32"><a class="jiathis_button_tsina" title="分享到微博"><span class="jiathis_txt jtico jtico_tsina"></span></a></li>
            </ul>
        </div>
        <div class="footer_info">
            <p>版权所有&nbsp;京ICP备15012603号—1</p>
            <p>Tel:010-59784840&nbsp;周日-周五10:00-19:00</p>
        </div>
    </footer>

    <script type="text/javascript">
        var jiathis_config = {
            summary: "",
            shortUrl: false,
            hideMore: false
        }
    </script>
    <script type="text/javascript" src="../pic/jia.js" charset="utf-8"></script><script type="text/javascript" src="../pic/plugin.client.js" charset="utf-8"></script>


<script type="text/javascript">
    $(document).ready(function(){
        var banner = $('.banner img').attr('src');
        console.log(banner);
        if(banner =='../pic/01.jpg'){
            $('.banner .banner_a a').css('color','#000');
        }
        else if(banner =='../pic/03.jpg'){
            $('.banner .banner_a a').css({'color':'#000','background-color':'#fff'});
        }
        else if(banner =='../pic/05.jpg'){
            $('.banner .banner_a a').css({'color':'#000','background-color':'#fff'});
        }
        else if(banner =='../pic/04.jpg'){
            $('.banner_a a').css({'color':'#000','background-color':'#fff'});
        }
        else{
        }
        
    });
</script>


</body>
</html>
