<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>
            广东医学院党校培训
        </TITLE>
        <META content="text/html; charset=utf-8" http-equiv=Content-Type>
        <META name=keywords content="广东医学院    党校    入党培训  ">
        <META name=description content=广东医学院党校培训>
        <LINK rel=stylesheet type=text/css href="statics/css/style.css">
        <SCRIPT type=text/javascript src="statics/js/js.js"></SCRIPT>
        <SCRIPT type=text/javascript src="statics/js/ads.js"></SCRIPT>
        <LINK rel=stylesheet type=text/css href="statics/css/type.css">
        <LINK rel=stylesheet type=text/css href="statics/css/font.css">
        <SCRIPT type=text/javascript src="statics/js/jquery.js"></SCRIPT>
        <SCRIPT type=text/javascript src="statics/js/easySlider1.5.js"></SCRIPT>
        <SCRIPT type=text/javascript src="statics/js/swfobject_modified.js"></SCRIPT>
        <!--[if IE 6]>
            <link href="css/ie6_fix.css" type="text/css" rel="stylesheet" />
        <![endif]-->
        <META name=GENERATOR content="MSHTML 9.00.8112.16672">
    </HEAD>
    
    <BODY>
        <DIV id=top>
            <H1>
                <A href="首页网站" target=_blank>
                    广东医学院党校培训
                </A>
            </H1>
        </DIV>
        <!--网站导航-->
        <DIV id=menu>
            <DIV id=navbar>
                <DIV class=l>
                </DIV>
                <DIV class=r>
                </DIV>
                <DIV class=m>
                    <A class=first href="<?php echo $index_url; ?>">
                        网站首页
                    </A>
					<?php
					 if ($dx_nav){
                	foreach ($dx_nav as $nav)
					{
					?>
					<A href="<?php echo $nav['url'];?>" target=_blank>
                        <?php echo $nav['section_name'];?>
                    </A>
					<?php
						}
					 }
					 ?>
					
                    <!--<A href="http://71party.csu.edu.cn/wzjj.asp" target=_blank>
                        网站简介
                    </A>
                    <A href="javascript:alert('正在建设中')">
                        办事流程
                    </A>
					<A href="javascript:alert('正在建设中')">
                       个人信息
                    </A>-->
                </DIV>
            </DIV>
        </DIV>
        <DIV>
        </DIV>
        <!--菜单导航结束-->
		
        <DIV id=main>
            <DIV id=content>
                <!--登陆及搜索-->
                <!--登陆及搜索-->
                <!--<FORM method=post action=bbs/login.aspx target=_blank>
                    <LABEL>
                        用户名
                    </LABEL>
                    <INPUT name=Mode type=hidden>
                    <INPUT name=inPath value=bbs/index.aspx type=hidden>
                    <INPUT class=name name=username>
                    <LABEL>
                        密码
                    </LABEL>
                    <INPUT class=name name=password type=password>
                    <INPUT name=CookieDate type=hidden>
                    <INPUT class=enter name=B1 type=submit>
                </FORM>
                <SPAN class=sign>
                    <A href="http://71party.csu.edu.cn/bbs/register.aspx" target=_blank>
                        注册
                    </A>
                </SPAN>-->
				<div style="width:435px;height:18px;float:left;margin:0px;"></div>
                <FORM class=none_f method=get action=./search.asp>
                    <LABEL>
                        站内搜索
                    </LABEL>
                    <INPUT onblur="if(this.value==''){this.value=this.defaultValue;}" id=q
                    class=s_txt onfocus="if(this.value==this.defaultValue){this.value='';}"
                    name=q maxLength=50 value=请输入查找关键字>
                    <INPUT class=s_bot title=点击搜索 onclick=this.form.submit(); type=button>
                </FORM>
                <!--登录及搜索结束-->
                <!--图片新闻-->
                <DIV class="news line_top">
                    <H1 class=pic_news>
                        图片新闻
                    </H1>
                    <DIV id=slider>
                        <UL>
                            <SCRIPT type=text/javascript>
                                var focus_width = 330;
                                var focus_height = 202;
                                var text_height = 18;
                                var swf_height = focus_height + text_height;
                                var pics = "/statics/images/20130313172105.jpg|/statics/images/20121214094322.jpg|/statics/images/20121204091307.jpg|/statics/images/20121123161818.jpg|/statics/images/news/%E7%85%A7%E7%89%87%20112.jpg";
                                var links = "./show.asp?id=3165|./show.asp?id=3162|./show.asp?id=3159|./show.asp?id=3094|./show.asp?id=2955";
                                var texts = "中橡集团曙光橡胶工业研究设计院59名中高层管理人员来校研修培训|徐建军常务副书记领千余名预备党员庄严宣誓|学校举办传达贯彻党的十八大精神暨2012年新任党支部书记岗位培训班|校党委书记高文兵传达党的十八大精神|我校16个申报课题获学校2012年党建研究重点课题立项资助";
                                payflash(focus_width, swf_height, pics, links, texts);
                            </SCRIPT>
                        </UL>
                    </DIV>
                </DIV>
                <!--图片新闻结束-->
                <!--党建新闻-->
                <DIV class="news line_f line_top more">
                    <H1 class=news_news>
                        党建新闻
                    </H1>
                    <SPAN>
                        <A href="javascript:void(0);" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
					<?php
					 if ($dx_DJXW_lists){
                	foreach ($dx_DJXW_lists as $DJXW_lists)
					{
					?>
						<LI>
							<A href="<?php echo $DJXW_lists['url'];?>" target=_blank>
								<?php echo $DJXW_lists['section_name'];?>
							</A>
						</LI>
					<?php
						}
					 }
					 ?>
                    </UL>
                </DIV>
                <!--党建新闻结束-->
                <!--Flash条-->
                <DIV class=flash>
                    <OBJECT id=FlashID classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000
                    width=718 height=120>
                        <PARAM NAME="movie" VALUE="flash/index_info.swf">
                        <PARAM NAME="quality" VALUE="high">
                        <PARAM NAME="wmode" VALUE="opaque">
                        <PARAM NAME="swfversion" VALUE="6.0.65.0">
                        <PARAM NAME="expressinstall" VALUE="Scripts/expressInstall.swf">
                        <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。
                        -->
                        <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
                        <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="flash/index_info.swf"
                            width="718" height="120">
                            <!--<![endif]-->
                            <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
                            <div>
                                <h4>
                                    此页面上的内容需要较新版本的 Adobe Flash Player。
                                </h4>
                                <p>
                                    <a href="http://www.adobe.com/go/getflashplayer">
                                        <img src="http://www.adobe.com/myimages/shared/download_buttons/get_flash_player.gif"
                                        alt="获取 Adobe Flash Player" width="112" height="33" />
                                    </a>
                                </p>
                            </div>
                            <!--[if !IE]>-->
                            </object>
                        <!--<![endif]-->
                        <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="flash/index_info.swf"
                            width="718" height="120">
                            <!--<![endif]-->
                            <!--[if !IE]>-->
                            </object>
                        <!--<![endif]-->
                    </OBJECT>
                </DIV>
                <!--Flash条结束-->
                <!--党校公告-->
                <DIV class="news more">
                    <H1 class=note_news>
                        党校公告
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=17" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3232">
                                国家自然科学二等奖获得者吴敏团队——因为热爱 所以执着
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3233">
                                我校国奖、励志奖学金学科竞赛类优秀学子：让优秀成为一种习
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3234">
                                “升华学者”欧阳震宇：天道酬勤
                            </A>
                        </LI>
                    </UL>
                </DIV>
                <!--党校公告结束-->
                <!--干部培训信息-->
                <DIV class="news line_f more">
                    <H1 class=px_news>
                        干部培训
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=7" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3245">
                                缅怀革命情，共筑中国梦---机电院院分党校学员参观青年毛泽东
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3174">
                                关于举办全校中层干部学习贯彻党的十八大精神专题集中轮训第
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3173">
                                关于调整“学习贯彻党的十八大精神专题集中轮训”第一期集中
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3171">
                                关于“学习贯彻党的十八大精神专题集中轮训”第一期集中培训
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3170">
                                关于“学习贯彻党的十八大精神专题集中轮训”第一期请假学员
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3169">
                                关于举办全校中层干部学习贯彻党的十八大精神专题集中轮训的
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2251">
                                中共广东医学院委员会干部教育培训学分制管理规定（试行）
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=667">
                                中共中央印发《2001年—2005年全国干部教育培训规划》（全文
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2954">
                                关于公布广东医学院2011年处级干部教育培训学分的通知
                            </A>
                        </LI>
                    </UL>
                </DIV>
                <!--干部培训信息结束-->
                <!--图片展示-->
                <DIV class="div_pic_m biankuang">
                    <DIV class="style_03_ht">
                        <DIV class="style_02_nr">
                            图片展示
                        </DIV>
                    </DIV>
                    <DIV class=imgList>
                        <MARQUEE width=712 scrollAmount=2>
                            <TABLE border=0 cellSpacing=0 cellPadding=0 align=left cellspace="0">
                                <TBODY>
                                    <TR>
                                        <TD id=demo1 vAlign=top>
                                            <TABLE border=0 cellSpacing=0 cellPadding=0>
                                                <TBODY>
                                                    <TR>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3165">
                                                                        <IMG alt=中橡集团曙光橡胶工业研究设计院59名中高层管理人员来校研修培训 src="statics/images/20130313172105.jpg"
                                                                        width=120 height=90>
                                                                        中橡集团曙光橡胶工业
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3162">
                                                                        <IMG alt=徐建军常务副书记领千余名预备党员庄严宣誓 src="statics/images/20121214094322.jpg"
                                                                        width=120 height=90>
                                                                        徐建军常务副书记领千
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3159">
                                                                        <IMG alt=学校举办传达贯彻党的十八大精神暨2012年新任党支部书记岗位培训班 src="statics/images/20121204091307.jpg"
                                                                        width=120 height=90>
                                                                        学校举办传达贯彻党的
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3094">
                                                                        <IMG alt=校党委书记高文兵传达党的十八大精神 src="statics/images/20121123161818.jpg" width=120
                                                                        height=90>
                                                                        校党委书记高文兵传达
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=2955">
                                                                        <IMG alt=我校16个申报课题获学校2012年党建研究重点课题立项资助 src="statics/images/照片%2520112.jpg"
                                                                        width=120 height=90>
                                                                        我校16个申报课题获学
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=2950">
                                                                        <IMG alt=关于举行广东医学院2012年党建研究重点课题招标答辩会的通知 src="statics/images/照片%2520097.jpg"
                                                                        width=120 height=90>
                                                                        关于举行广东医学院2012
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=2949">
                                                                        <IMG alt=广东医学院教学、科研管理改革研讨班结业 src="statics/images/20120815131708.jpg" width=120
                                                                        height=90>
                                                                        广东医学院教学、科研管
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                        <TD>
                                                            <UL>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=10">
                                                                        <IMG alt="第23期入党积极分子培训班开学 近3000人参训" src="statics/images/20110421092930797.jpg"
                                                                        width=120 height=90>
                                                                        第23期入党积极分子培
                                                                    </A>
                                                                </LI>
                                                            </UL>
                                                        </TD>
                                                    </TR>
                                                </TBODY>
                                            </TABLE>
                                        </TD>
                                        <TD style="POSITION: relative" id=demo2 vAlign=top>
                                            &nbsp;
                                        </TD>
                                    </TR>
                                </TBODY>
                            </TABLE>
                        </MARQUEE>
                    </DIV>
                </DIV>
                <!--图片展示结束-->
                <!--培训研究信息-->
                <DIV class="news more">
                    <H1 class=px_info>
                        培训研究
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=12" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3046">
                                坚持四个结合，整合资源，建立健全以党建为核心的学生思想政
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3045">
                                广东医学院实行干部教育培训学分制管理的几点做法和体会
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3038">
                                讲党性 讲真话 求真理 育真人
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3044">
                                我校举行学习型党组织建设研讨会
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2756">
                                党校校务委员会召开会议 研讨部署党校主要工作
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2707">
                                党校召开第22期入党积极分子培训班教师备课会
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2387">
                                部分高校党校教育的专家学者、校长专题研讨如何建立健全完备
                            </A>
                        </LI>
                    </UL>
                </DIV>
                <!--培训研究信息结束-->
                <!--学会工作-->
                <DIV class="news line_f more">
                    <H1 class=work_info>
                        学会工作
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=13" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3053">
                                关于做好推荐下一届中南片高校党校工作联络组领导小组成员候
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2961">
                                中南片高校党校工作联络组会员单位名单
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2960">
                                中南片高校党校工作联络组领导小组成员单位名单（2012年）
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2958">
                                中南地区高校党校工作研究联络组章程（2012年年会部分修改）
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3054">
                                中南片高校党校工作联络组2012年年会暨第六届研讨会会议纪要
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3052">
                                关于召开中南片高校党校工作联络组2012年年会暨第六次研讨会
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3064">
                                中国高等教育学会高校党校教育研究分会第二次全体会员大会会
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2823">
                                中国高等教育学会高校党校教育研究分会第二次全体会员大会在
                            </A>
                        </LI>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3063">
                                高校党校教学体系建设评估标准（总分100分）（讨论稿）
                            </A>
                        </LI>
                    </UL>
                </DIV>
                <!--学会工作结束-->
            </DIV>
            <!--侧边栏开始-->
            <DIV id=sidebar>
                <!--网站导航-->
                <DIV class="sidenav side_top">
                    <H1 class=subnav>
                        网站导航
                    </H1>
                    <UL>
                        <LI class=zc>
                            <A href="http://gxpx1.ceat.edu.cn/index.php" target=_blank>
                                中层干部在线学习
                            </A>
                        </LI>
                        <LI class=dy>
                            <A href="http://hpc.csu.edu.cn/dxStudy/" target=_blank>
                                党校教务管理系统
                            </A>
                        </LI>
                        <LI class=gj>
                            <A href="http://71party.csu.edu.cn/exam/" target=_blank>
                                入党积极分子（高级班）在线考试
                            </A>
                        </LI>
                    </UL>
                </DIV>
                <!--网站导航结束-->
                <!--专题栏目-->
                <DIV class="sidenav side_center">
                    <H1 class=sub_colu>
                        专题栏目
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=69" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=3239">
                                广东医学院青年教师党员培训班培训
                            </A>
                            <LI>
                                <A href="http://71party.csu.edu.cn/show.asp?id=3235">
                                    第28期入党积极分子培训班课堂教
                                </A>
                                <LI>
                                    <A href="http://71party.csu.edu.cn/show.asp?id=3230">
                                        第28期入党积极分子培训班课堂教
                                    </A>
                                    <LI>
                                        <A href="http://71party.csu.edu.cn/show.asp?id=3228">
                                            第28期入党积极分子培训班课堂教
                                        </A>
                                        <LI>
                                            <A href="http://71party.csu.edu.cn/show.asp?id=3226">
                                                第28期入党积极分子培训班课堂教
                                            </A>
                                            <LI>
                                                <A href="http://71party.csu.edu.cn/show.asp?id=3224">
                                                    关于举办“党在我心中”党的知识
                                                </A>
                                                <LI>
                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3223">
                                                        广东医学院党校第28期入党积极分子
                                                    </A>
                                                    <LI>
                                                        <A href="http://71party.csu.edu.cn/show.asp?id=3222">
                                                            第二期副处级以上干部学习贯彻习
                                                        </A>
                                                        <LI>
                                                            <A href="http://71party.csu.edu.cn/show.asp?id=3221">
                                                                第二期副处级以上干部学习贯彻习
                                                            </A>
                                                            <LI>
                                                                <A href="http://71party.csu.edu.cn/show.asp?id=3206">
                                                                    广东医学院干部学习贯彻习近平总书
                                                                </A>
                                                                <LI>
                                                                    <A href="http://71party.csu.edu.cn/show.asp?id=3205">
                                                                        关于举办广东医学院副处级以上干部
                                                                    </A>
                                                                </LI>
                    </UL>
                </DIV>
                <!--专题栏目结束-->
                <!--表格下载-->
                <DIV class="sidenav side_bottom">
                    <H1 class=sub_info>
                        表格下载
                    </H1>
                    <SPAN>
                        <A href="http://71party.csu.edu.cn/list.asp?id=53" target=_blank>
                            查看更多
                        </A>
                    </SPAN>
                    <UL>
                        <LI>
                            <A href="http://71party.csu.edu.cn/show.asp?id=2626">
                                中南片高校党校入党积极分子培训
                            </A>
                            <LI>
                                <A href="http://71party.csu.edu.cn/show.asp?id=2628">
                                    中南地区高校党校联络组会员单位
                                </A>
                                <LI>
                                    <A href="http://71party.csu.edu.cn/show.asp?id=2472">
                                        中南地区高校党校联络组会员单位
                                    </A>
                                    <LI>
                                        <A href="http://71party.csu.edu.cn/show.asp?id=2597">
                                            广东医学院二级党组织深入学习实践
                                        </A>
                                    </LI>
                    </UL>
                </DIV>
                <!--表格下载结束-->
            </DIV>
            <!--侧边栏结束-->
        </DIV>
        <!--友情链接-->
        <DIV id=link>
            <UL>
                <MARQUEE onmouseover=this.stop() onmouseout=this.start() scrollAmount=4>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://www.ccps.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共中央党校 src="statics/images/cgzydx.gif" width=135 height=55>
                    </A>
                    <A href="http://news.its.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院新闻网 src="statics/images/csu_news.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.zgdsw.com/" target=_blank>
                        <IMG border=0 alt=中共党史网 src="statics/images/party_history.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.hnswdx.gov.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南省委党校 src="statics/images/hun_party_his.gif" width=135
                        height=55>
                    </A>
                    <A href="http://www.csu.edu.cn/" target=_blank>
                        <IMG border=0 alt=广东医学院首页 src="statics/images/csu.gif" width=135 height=55>
                    </A>
                    <A href="http://www.malie.net/html/index/index.htm" target=_blank>
                        <IMG border=0 alt=马列网 src="statics/images/malie.gif" width=135 height=55>
                    </A>
                    <A href="http://partyschool.hnu.cn/" target=_blank>
                        <IMG border=0 alt=中共湖南大学委员会党校 src="statics/images/hun_unv_party.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dx.hunnu.edu.cn/" target=_blank>
                        <IMG border=0 alt=湖南师范大学党校 src="statics/images/hun_tea_unv_hist.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://zzb.csuft.edu.cn/index3.asp?" target=_blank>
                        <IMG border=0 alt=中南林业科技大学组织部党校 src="statics/images/central_south_liye-unv.gif"
                        width=135 height=55>
                    </A>
                    <A href="http://dep.hnust.cn/zzb/" target=_blank>
                        <IMG border=0 alt=湖南科技大学党委组织部党校 src="statics/images/hun_science_unv.gif"
                        width=135 height=55>
                    </A>
                </MARQUEE>
            </UL>
        </DIV>
        <!--友情链接结束-->
		
        <!--页脚开始-->
		<DIV id=bottom_info>
            <A href="http://71party.csu.edu.cn/about.asp?id=2">
                关于我们
            </A>
            |
            <A href="http://71party.csu.edu.cn/about.asp?id=3">
                联系方式
            </A>
            |
            <A href="http://71party.csu.edu.cn/user/index.asp">
                会员中心
            </A>
            |
            <A href="http://71party.csu.edu.cn/book.asp">
                留言交流
            </A>
            |
            <A href="http://71party.csu.edu.cn/admin/index.asp">
                后台管理
            </A>
            &nbsp;[ 总访问人数 ]
            <STRONG>
                <SCRIPT language=JavaScript src="statics/js/count.htm">
                </SCRIPT>
                人
            </STRONG>
        </DIV>
        <!--页脚-->
        <DIV id=footer>
            &nbsp;
            <BR>
            邮箱：d-dx@csu.edu.cn
            <BR>
            版权所有：广东医学院：2015-2018 http://www.gdmc.edu.cn/ &nbsp; &nbsp;&nbsp;by
            lurker
            <BR>
        </DIV>
    </BODY>

</HTML>