//共用方法
var CACHE_ID = {};

//＊需統一格式
var G_TMP = {};
var IMG = {};
var RoundSerial = '';
var RoundID = '';
var f_w = {};
var DispDetail = {};
var GameEndTime = {};
//var OddInfo = {};
var LimitInfo = {};
//賠率時間
var CATCH_ODD = {};
//common method object
var f_com = {};
/**
 *  get object or array length
 *  return @int
 */
f_com.count = function(o){
    var num = 0;
    if(typeof(o)=='object'){
        for(var i in o)
            num++;

        return num;
    }else{
        return o.length;
    }
};

// post array
f_com.postArray = function(o){
    var option = [];
    for(var key in o){
        if(typeof o[key] == 'array'||typeof o[key] =='object'){
            for(var i=0 ; i<o[key].length ; i++){
                option.push({
                    name:key+'[]',
                    value:o[key][i]
                });
            }
        }else if(typeof o[key] == 'string'||typeof o[key] == 'number'){
            option.push({
                name:key,
                value:o[key]
            });
        }
    }
    return option;
};

// delete object last value
// example: pop({a:1,b:2})
// result : return b;
f_com.pop = function(o){
    var j = f_com.count(o);

    $.each(o,function(i,v){
        alert(k);
        if(j == k)delete v;

        k++;
    });
};

/* @example
 * $.timer(1000, function (timer) {
 * 	alert("hello");
 * 	timer.stop();
 * });
 * @desc Show an alert box after 1 second and stop
 *
 * @example
 * var second = false;
 *	$.timer(1000, function (timer) {
 *		if (!second) {
 *			alert('First time!');
 *			second = true;
 *			timer.reset(3000);
 *		}
 *		else {
 *			alert('Second time');
 *			timer.stop();
 *		}
 *	 });
 */
f_com.Ti = function(interval,callback){
    interval = interval || 1000;

    if (!callback)return false;

    var _timer = function (interval, callback) {
        var self = this;
        if(self.id != null) clearInterval(self.id);

        this.stop = function () {
            clearInterval(self.id);
        };
        this.internalCallback = function () {
            callback(self);
        };
        this.reset = function (val) {
            if (self.id) clearInterval(self.id);
            self.id = setInterval(this.internalCallback, val || 1000);
            self.interval = val;
        };
        this.interval = interval;
        this.id = setInterval(this.internalCallback, this.interval);
    };
    return new _timer(interval, callback);
};

// getElementById() cache
// return jquery object or jquery[0] == getElementById();
f_com.cache = function(id){

    if (CACHE_ID[id] === void 0) CACHE_ID[id] = $('#'+id);

    return CACHE_ID[id];
};

f_com.setCookie = function(theName,theValue,theDay){
    if((theName != "")&&(theValue !="")){
        expDay = "Web,01 Jan 2020 18:56:35 GMT";
        if(theDay != null){
            theDay = eval(theDay);
            setDay = new Date();
            setDay.setTime(setDay.getTime()+(theDay*1000*60*60*24));
            expDay = setDay.toGMTString();
        }
        //document.cookie = theName+"="+escape(theValue)+";expires="+expDay;
        document.cookie = theName+"="+escape(theValue)+";path=/;expires="+expDay+";";
        return true;
    }
    return false;
};
f_com.delCookie = function(theName){
    document.cookie = theName+ "=;expires=Thu,01-Jan-70 00:00:01 GMT";
    return true;
};
f_com.getCookie = function(theName){
    theName += "=";
    theCookie = document.cookie+";";
    start = theCookie.indexOf(theName);
    if(start != -1){
        end = theCookie.indexOf(";",start);
        return unescape(theCookie.substring(start+theName.length,end));
    }
    return false;
};

f_com.checkOs = function() {
    windows = (navigator.userAgent.indexOf("Windows",0) != -1)?1:0;
    mac = (navigator.userAgent.indexOf("Mac",0) != -1)?1:0;
    linux = (navigator.userAgent.indexOf("Linux",0) != -1)?1:0;
    unix = (navigator.userAgent.indexOf("X11",0) != -1)?1:0;

    if (windows) os_type = "windows";
    else if (mac) os_type = "mac";
    else if (linux) os_type = "lunix";
    else if (unix) os_type = "unix";

    return os_type;
}

f_com.bet = function(callback , errorCallback){
    o = (w_json.constructor == Object) ? JSON.stringify(w_json) : w_json;

    $.ajax({
        type:'POST',
        url :'?module=Bet&method=DoBet',
        processData:false,
        data:'result='+o,
        error:$.isFunction(errorCallback)?errorCallback:function(msg){
            return false;
        },
        success:callback
    });
};

// correct return true ,fail return false;
f_com.isGold = function(v){
    var RegExps = {};
    RegExps.isNumber = /^[-\+]?\d+$/;
    if (RegExps['isNumber'].test(v))
        return true;

    return false;
};

$.fn.btn = function( color , color2){
    var that = this;
    $.each(that.find('li > a') , function(){
        var Mid = this.parentNode.id;
        if(Mid.split('-')[1] != f_com.getCookie('selected_page')){
            document.getElementById(Mid).style.backgroundPosition = 'top';
            $('#'+Mid).find('a').css('color',color);
        }else{
            f_com.setCookie('selected_page',Mid.split('-')[1]);
            document.getElementById(Mid).style.backgroundPosition = 'bottom';
            $('#'+Mid).find('a').css('color',color2);
        }
    }).click(function(){
            var Mid = this.parentNode.id;
            that.find('li').each(function(){
                document.getElementById(this.id).style.backgroundPosition = 'top';
                $('#'+this.id).find('a').css('color',color);
            });
            document.getElementById(Mid).style.backgroundPosition = 'bottom';
            $('#'+Mid).find('a').css('color',color2);
            f_com.setCookie('selected_page',Mid.split('-')[1]);
        });
};

$.fn.accordion = function(){
    var self = this;
    $.each(self.find('div'),function(i){
        if(i==0){
            $(this).find('ul').show();
            $($(this).find('H3').attr('id')).show();
        }else{
            $($(this).find('H3').attr('id')).hide();
        }
        $(this).find('H3').click(function(){
            if(!$(this).next('ul').is(':visible')){
                $.each( self.find('div'),function(){
                    $(this).find('ul').hide();
                    $($(this).find('H3').attr('id')).hide();
                });
                $(this).next('ul').show();
                $(this.id).show();
            }
        });
    });

};
/**
 * <h3></h3>
 * <ul>
 *   <li></li>
 * </ul>
 */
$.fn.accordion2 = function(){
    var self = this;
    $.each(self.find('h3'),function(i){
        if(i==0){
            $(this).next('ul').show();
        }
        $(this).click(function(){
            $.each(self.find('h3'),function(){
                $(this).next('ul').hide();
            });
            $(this).next('ul').show();
        });
    });
};
/**
 *  簡易tab切換
 *  <div id="test">
 *  <ul><li>aa</li><li id="#bb">bb</li></ul>
 *  <div id="aa">xxx</div>
 *  </div>
 *  $('#test').mtab();
 */
$.fn.mtab = function(){
    var area = this;

    area.find('li[id^=#]').click(function(){
        var self = this;
        $.each(area.find('li[id^=#]'),function(i){
            if(self.id != this.id){
                area.find(this.id).hide('fast');
                $(this).removeClass('mtab');
            }else{
                area.find(this.id).show('fast');
                $(this).addClass('mtab');
            }
        });
    });
};
/**
 *  無動畫切換
 */
$.fn.mtab2 = function(){
    var area = this;
    $.each(area.find('li[id^=#]'),function(i){
        if(i!=0){
            area.find(this.id)[0].style.display = 'none';
        }
    });
    area.find('li[id^=#]').click(function(){
        var self = this;
        $.each(area.find('li[id^=#]'),function(i){
            if(self.id != this.id){
                area.find(this.id)[0].style.display = 'none';
                $(this)[0].style.backgroundPosition = 'top';
                $(this).removeClass('mtab');
            }else{
                area.find(this.id)[0].style.display = 'block';
                $(this)[0].style.backgroundPosition = 'bottom';
                $(this).addClass('mtab');
            }
        });
    });
};
/**
 *  無動畫切換、底圖位置不動
 */
$.fn.mtab3 = function(){
    var area = this;

    area.find('li[id^=#]').click(function(){
        var self = this;
        $.each(area.find('li[id^=#]'),function(i){
            if(self.id != this.id){
                area.find(this.id)[0].style.display = 'none';
                $(this).removeClass('mtab');
            }else{
                area.find(this.id)[0].style.display = 'block';
                $(this).addClass('mtab');
            }
        });
    });
};

/**
 * mtab4
 *
 * fix union hierarchy for fixed ancestor
 */
(function($) {
    $.fn.mtab4 = function() {
        //iterate the match elements
        return this.each(function() {
            var $this = $(this);
            //initialize, hide children div except first one
            var divs = $this.children('div');
            divs.not(':first').hide();

            //bind click to switch tabs
            var lis = $this.children('ul').children('li');
            lis.click(function(e){
                var element = $(this),
                    position = $.inArray(element[0], lis);

                //add & remove class for tabs
                lis.removeClass('mtab');
                element.addClass('mtab');

                //hide & show for container
                divs.not(':eq(' + position + ')').hide();
                divs.eq(position).show();

            });
        });
    };
})(jQuery);
$.fn.idTabs = function(){
    var s = {
        start:0,
        change:false,
        click:null,
        selected:".selected",
        event:"!click"
    };

    for(var i=0; i<arguments.length; ++i) {
        var a = arguments[i];
        switch(a.constructor){
            case Object:
                break;
            case Boolean:
                s.change = a;
                break;
            case Number:
                s.start = a;
                break;
            case Function:
                s.click = a;
                break;
            case String:
                if(a.charAt(0)=='.') s.selected = a;
                else if(a.charAt(0)=='!') s.event = a;
                else s.start = a;
                break;
        }
    }

    return this.each(function(){
        if(s.selected.charAt(0)=='.') s.selected=s.selected.substr(1);
        if(s.event.charAt(0)=='!') s.event=s.event.substr(1);
        if(s.start==null) s.start=-1; //no tab selected
        tabs = this;
        var showId = function(){
            if($(this).is('.'+s.selected)) return s.change;
            var id = "#"+this.href.split("#")[1];
            var aList = [];//save tabs
            var idList = [];//save possible elements
            $("a",tabs).each(function(){
                if(this.href.match(/#/)){
                    aList.push(this);
                    idList.push("#"+this.href.split("#")[1]);
                }
            });
            if(s.click && !s.click.apply(this,[id,idList,tabs,s])) return s.change;
            //Clear tabs, and hide all
            for(i in aList) $(aList[i]).removeClass(s.selected);
            for(i in idList) $(idList[i]).hide();
            //Select clicked tab and show content
            $(this).addClass(s.selected);
            $(id).show();
            return s.change; //Option for changing url
        };
        //Bind idTabs
        var list = $("a[href*='#']",tabs).unbind(s.event,showId).bind(s.event,showId);
        list.each(function(){
            $("#"+this.href.split('#')[1]).hide();
        });

        //Select default tab
        var test=false;
        if((test=list.filter('.'+s.selected)).length); //Select tab with selected class
        else if(typeof s.start == "number" &&(test=list.eq(s.start)).length); //Select num tab
        else if(typeof s.start == "string" //Select tab linking to id
            &&(test=list.filter("[href*='#"+s.start+"']")).length);
        if(test) {
            test.removeClass(s.selected);
            test.trigger(s.event);
        } //Select tab

        return s; //return current settings (be creative)
    });
};

$.winBox = function(data , option){
    var winbox = $('#windowBox');
    if(winbox.length == 0){
        $('body').after("<div id=\"windowBox\"></div>");
        winbox = $('#windowBox');
    }
    winbox.empty();
    var setting = {
        modal:true,
        resizable:false,
        width:700,
        height:'auto',
        minHeight:'auto',
        buttons:{
            "CLOSE":function(){
                $(this).dialog('close');
            }
        }
    };
    if(option != undefined){
        for(var k in option){
            setting[k] = option[k];
        }
    }
    winbox.dialog(setting);
    if(data == undefined || data==""){
        winbox.html('loading...');
        return;
    }
    if(winbox.dialog("isOpen") === true){
        winbox.html(data);
        return;
    }
    winbox.dialog("open").html(data);

};
 
/**
 *選單文字onMouseover切換效果
 *@param text mouseover 文字
 **/
$.fn.changetext = function(text){
    if(this[0] == undefined){
        return false;
    }
    if(this[0].tagName.toLowerCase() == 'a'){
        var self = this;
    }else{
        var self = this.find('a');
    }
    var currentText = self.html();

    this.hover(
        function () {
            self.html(text);
        },
        function () {
            self.html(currentText);
        }
    );

};
 
 
$.fn.stab = function(div){
    var area = this;
    var ul = $(this).children('li');

    ul.click(function(){
        var i = ul.index(this)||0;

        ul.children('a').removeClass('stab');
        $(div).hide();
        $(div).get(i).style.display = '';
        $(this).children('a').addClass('stab');
    });
};
/**
 * 文字閃爍
 * @param id   jquery selecor
 * @param arr  ['#FFFFFF','#FF0000']
 * @param s    milliseconds
 */
function toggleColor( id , arr , s ){
    var self = this;
    self._i = 0;
    self._timer = null;

    self.run = function(){
        if(arr[self._i]){
            $(id).css('color', arr[self._i]);
        }
        self._i == 0 ? self._i++ : self._i = 0;
        self._timer = setTimeout(function(){
            self.run( id , arr , s);
        }, s);
    }
    self.run();
}
/**
 * 文字閃爍2
 * @param id   jquery selecor
 * @param arr  ['#FFFFFF','#FF0000']
 * @param s    milliseconds
 * @param s object
 * ex : text-shadow(陰影 (垂直 水平 聚焦 顏色))、text-stroke(文字邊框 (邊框粗細 顏色))、transform(rotate蹺蹺板 scale縮放 skew歪斜 translate平移)
 */
function toggleColor2( id , arr , s , o){
    var self = this;
    self._i = 0;
    self._timer = null;
    self.css = '';

    self.run = function(){
        if(o != undefined){
            $.each(o, function(k, v){
                self.css = (self._i == 1) ? v : '';
                $(id).css(k, self.css);
            });
        }

        if(arr[self._i]){
            $(id).css('color', arr[self._i]);
        }
        self._i == 0 ? self._i++ : self._i = 0;
        self._timer = setTimeout(function(){
            self.run( id , arr , s);
        }, s);
    }
    self.run();
}
/*QQ連結 : 傳入QQ帳號*/
f_com.QQOnlineService = function(acc){
    window.open('http://wpa.qq.com/msgrd?v=3&uin='+acc+'&site=qq&menu=yes', 'QQOnlineService' ,'width=1024,height=800,status=no,scrollbars=no');
};

/**
 * 13/01/18 小球 投注教學 加上粗體
 */
$('#su-lottery').css('font-weight', 'bold');

/**
 * 自動將footer的qq號轉換成連結(文字從控端設定 ex : <qq>7588225</qq> )
 */
document.createElement('qq');

$(function(){
    var QQArray = document.getElementsByTagName('qq');
    if(QQArray.length){
        $.each(QQArray,function(){
            var QQ = $(this);
            var QQNumber = QQ.text().replace(/[\s\D]+/g,'');
            QQ.html('<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='+QQNumber+'&site=qq&menu=yes"><img src="http://wpa.qq.com/pa?p=2:'+QQNumber+':46" alt="点击这里联系客服'+QQNumber+'" title="点击这里联系客服'+QQNumber+'" style="vertical-align: text-bottom;"></a>');
        });
    }
});


    //設為首頁
    f_com.setHomepage = function (url) {
        if (document.all) {
            document.body.style.behavior = 'url(#default#homepage)';
            document.body.setHomePage(url);
        } else {
            alert("您的浏览器未支援此功能!");
        }
    };

    // 加入最愛
    f_com.bookmarksite = function (url, title) {
        if (window.sidebar || window.opera) {
            // for firfox
            window.sidebar.addPanel(title, url, "");
        } else if (document.all) {
            // for IE
            window.external.AddFavorite(url, title);
        } else {
            alert("您的浏览器未支援此功能!");
        }
    }; 