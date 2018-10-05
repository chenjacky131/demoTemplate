var siteCommon = {
    timeNow: function (id) {// 当前时间
        if ($('#' + id).length == 0) {
            return;
        }
        setInterval(function () {
            var date = new Date();
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            month < 10 ? month = '0' + month : null;
            var day = date.getDate();
            day < 10 ? day = '0' + day : null;
            var week = date.getDay();
            switch (week) {
                case 0: week = '星期日'; break;
                case 1: week = '星期一'; break;
                case 2: week = '星期二'; break;
                case 3: week = '星期三'; break;
                case 4: week = '星期四'; break;
                case 5: week = '星期五'; break;
                case 6: week = '星期六'; break;
            }
            var hour = date.getHours();
            hour < 10 ? hour = '0' + hour : null;
            var min = date.getMinutes();
            min < 10 ? min = '0' + min : null;
            var sec = date.getSeconds();
            sec < 10 ? sec = '0' + sec : null;
            $("#" + id).html('美东时间 - ' + year + '/' + month + '/' + day + ' (' + week + ') ' + hour + ':' + min + ':' + sec);
        }, 1000);
    },
    tBlink: function (ele, cls1, cls2, times) {// 文字跳动
        $(ele).each(function () { 
            var $this = $(this);
            var i = 0, c = "";
            setInterval(function () { 
                i++; 
                c = i % 2 ? cls1 : cls2; 
                $this.css("color", c); 
                $this.find("a").css("color", c) 
            }, times) });
    },
    AddFavorite:function(){
        if (document.all) try {
            window.external.addFavorite(window.location.href, document.title)
        } catch (n) {
            alert("加入收藏失败，请使用Ctrl+D进行添加")
        } else if (window.sidebar) try {
            window.sidebar.addPanel(document.title, window.location.href, "")
        } catch (n) {
            alert("加入收藏失败，请使用Ctrl+D进行添加")
        } else alert("加入收藏失败，请使用Ctrl+D进行添加")
    },
    noticeMarquee:function(el,speed){// 公告滚动
        if($(el).length==0){
            return;
        }        
        var noticeWidth = 0;
        var noticeTimer = 0;
        var noticeUlLeft = 0;
        var noticeUl = $(el+'>ul');
        noticeUl.append($(el+'>ul>li').clone());
        noticeWidth=$(el+'>ul')[0].offsetWidth;
        noticeUl.css("width",noticeWidth+'px');
        noticeTimer = setInterval(function(){
            if(Math.abs(noticeUlLeft)>=noticeWidth/2){
                noticeUlLeft=0;
            }else{
                noticeUlLeft--;
            }
            noticeUl.css("left",noticeUlLeft+'px');
        },speed?speed:15);
        noticeUl.on('mouseover','li',function(){
            clearInterval(noticeTimer);
        });
        noticeUl.on('mouseout','li',function(){
            noticeTimer = setInterval(function(){
                if(Math.abs(noticeUlLeft)>=noticeWidth/2){
                    noticeUlLeft=0;
                }else{
                    noticeUlLeft--;
                }
                noticeUl.css("left",noticeUlLeft+'px');
            },speed?speed:15);
        });
    },
    upMarquee:function(el,speed){// 彩金滚动(非无缝))
        if($(el).length==0){
            return;
        }        
        var marqueeHeigth = 0;
        var marqueeTimer = 0;
        var marqueeTop = 0;
        var marqueeLiHeight = 0;        
        var marqueeUl = $(el+'>ul');
        marqueeLiHeight = $(el+'>ul>li:eq(0)')[0].offsetHeight;
        marqueeUl.append($(el+'>ul>li').clone());
        marqueeHeigth=$(el+'>ul')[0].offsetHeight;
        marqueeUl.css("height",marqueeHeigth+'px');
        marqueeTimer = setInterval(function(){
            if(Math.abs(marqueeTop)>=(marqueeHeigth/2-marqueeLiHeight)){// 非无缝需要减去一个li的高度
                marqueeTop=0;
            }else{
                marqueeTop-=marqueeLiHeight;
            }
            marqueeUl.css("top",marqueeTop+'px');
        },speed?speed:1500);
        marqueeUl.on('mouseover','li',function(){
            clearInterval(marqueeTimer);
        });
        marqueeUl.on('mouseout','li',function(){
            marqueeTimer = setInterval(function(){
                if(Math.abs(marqueeTop)>=(marqueeHeigth/2-marqueeLiHeight)){// 非无缝需要减去一个li的高度
                    marqueeTop=0;
                }else{
                    marqueeTop-=marqueeLiHeight;
                }
                marqueeUl.css("top",marqueeTop+'px');
            },speed?speed:1500);
        });
    },
    upMarqueeSeamless:function(el,speed){// 彩金滚动(无缝))
        if($(el).length==0){
            return;
        }        
        var marqueeHeigth = 0;
        var marqueeTimer = 0;
        var marqueeTop = 0;
        var marqueeLiHeight = 0;        
        var marqueeUl = $(el+'>ul');
        marqueeLiHeight = $(el+'>ul>li:eq(0)')[0].offsetHeight;
        marqueeUl.append($(el+'>ul>li').clone());
        marqueeHeigth=$(el+'>ul')[0].offsetHeight;
        marqueeUl.css("height",marqueeHeigth+'px');
        marqueeTimer = setInterval(function(){
            if(Math.abs(marqueeTop)>=(marqueeHeigth/2)){
                marqueeTop=0;
            }else{
                marqueeTop--;
            }
            marqueeUl.css("top",marqueeTop+'px');
        },speed?speed:1500);
        marqueeUl.on('mouseover','li',function(){
            clearInterval(marqueeTimer);
        });
        marqueeUl.on('mouseout','li',function(){
            marqueeTimer = setInterval(function(){
                if(Math.abs(marqueeTop)>=(marqueeHeigth/2)){
                    marqueeTop=0;
                }else{
                    marqueeTop--;
                }
                marqueeUl.css("top",marqueeTop+'px');
            },speed?speed:1500);
        });
    },
    jackpotNum:function(el,sessionIndex,initNum){// 彩金跳动
        // 13882305819
        if($(el).length==0){
            return;
        }
        $(el).html('---');
        var n = 0;
        var numArr = [];
        var numString = '';
        if(!sessionStorage.getItem('jackpotNum'+sessionIndex)){
            sessionStorage.setItem('jackpotNum'+sessionIndex,initNum);
            n = initNum;
        }else{
            n = sessionStorage.getItem('jackpotNum'+sessionIndex);
        }
        setInterval(function(){
            numString = '';
            var randN = Math.floor(Math.random()*10000);
            n+=randN;
            if(n>99999999999){
                n = initNum;
            }
            sessionStorage.setItem('jackpotNum'+sessionIndex,n);
            numArr = String(n).split('');
            numArr.map(function(val,index){
                if(index==1||index==4){
                    val+=',';
                }else if(index==7){
                    val+='.';
                }             
                numString+=val;
            });
            $(el).html(numString);
        },2000);
        
    }
};
 /*!
 ========== placeholder IE9-���� ==========
 */
+function($){$.fn.extend({"placeholder":function(options){options=$.extend({placeholderColor:"#999"},options);$(this).each(function(){var defaultValue=$(this).attr("placeholder");var defaultColor=$(this).css("color");$(this).focus(function(){var pattern=new RegExp("^"+defaultValue+"$|^$");pattern.test($(this).val())&&$(this).val("").css("color",defaultColor)}).blur(function(){if($(this).val()==defaultValue){$(this).css("color",defaultColor)}else{if($(this).val().length==0){$(this).val(defaultValue).css("color",options.placeholderColor)}}}).trigger("blur")});return this}})}(jQuery);
$(document).ready(function() {
    // placeholder����
    if (!('placeholder' in document.createElement('input'))) {
        $("input").placeholder({
        placeholderColor: "#999"
        });
        $("textarea").placeholder({
        placeholderColor: "#999"
        });
    }
});