(function(){function k(){this.c="3144200";this.ca="z";this.Z="pic1";this.W="";this.Y="";this.C="1521533605";this.aa="hzs22.cnzz.com";this.X="";this.G="CNZZDATA"+this.c;this.F="_CNZZDbridge_"+this.c;this.P="_cnzz_CV"+this.c;this.R="CZ_UUID"+this.c;this.L="UM_distinctid";this.H="0";this.K={};this.a={};this.Aa()}function g(a,
b){try{var c=[];c.push("siteid=3144200");c.push("name="+f(a.name));c.push("msg="+f(a.message));c.push("r="+f(h.referrer));c.push("page="+f(e.location.href));c.push("agent="+f(e.navigator.userAgent));c.push("ex="+f(b));c.push("rnd="+Math.floor(2147483648*Math.random()));(new Image).src="http://jserr.cnzz.com/log.php?"+c.join("&")}catch(d){}}var h=document,e=window,f=encodeURIComponent,m=decodeURIComponent,r=unescape;k.prototype={Aa:function(){try{this.ja(),this.V(),this.wa(),this.T(),this.za(),
this.w(),this.ua(),this.ta(),this.xa(),this.o(),this.sa(),this.va(),this.ya(),this.qa(),this.oa(),this.ra(),this.Ea(),e[this.F]=e[this.F]||{},this.pa("_cnzz_CV")}catch(a){g(a,"i failed")}},Ca:function(){try{var a=this;e._czc={push:function(){return a.M.apply(a,arguments)}}}catch(b){g(b,"oP failed")}},oa:function(){try{var a=e._czc;if("[object Array]"==={}.toString.call(a))for(var b=0;b<a.length;b++){var c=a[b];switch(c[0]){case "_setAccount":e._cz_account="[object String]"==={}.toString.call(c[1])?
c[1]:String(c[1]);break;case "_setAutoPageview":"boolean"===typeof c[1]&&(e._cz_autoPageview=c[1])}}}catch(d){g(d,"cS failed")}},Ea:function(){try{if("undefined"===typeof e._cz_account||e._cz_account===this.c){e._cz_account=this.c;if("[object Array]"==={}.toString.call(e._czc))for(var a=e._czc,b=0,c=a.length;b<c;b++)this.M(a[b]);this.Ca()}}catch(d){g(d,"pP failed")}},M:function(a){try{if("[object Array]"==={}.toString.call(a))switch(a[0]){case "_trackPageview":if(a[1]){this.a.f="http://"+
e.location.host;"/"!==a[1].charAt(0)&&(this.a.f+="/");this.a.f+=a[1];if(""===a[2])this.a.g="";else if(a[2]){var b=a[2];"http"!==b.substr(0,4)&&(b="http://"+e.location.host,"/"!==a[2].charAt(0)&&(b+="/"),b+=a[2]);this.a.g=b}this.s();"undefined"!==typeof this.a.g&&delete this.a.g;"undefined"!==typeof this.a.f&&delete this.a.f}break;case "_trackEvent":var c=[];a[1]&&a[2]&&(c.push(f(a[1])),c.push(f(a[2])),c.push(a[3]?f(a[3]):""),a[4]=parseFloat(a[4]),c.push(isNaN(a[4])?0:a[4]),c.push(a[5]?
f(a[5]):""),this.v=c.join("|"),this.s(),delete this.v);break;case "_setCustomVar":if(3<=a.length){if(!a[1]||!a[2])return!1;var d=a[1],l=a[2],n=a[3]||0;a=0;for(var h in this.a.b)a++;if(5<=a)return!1;var p;0==n?p="p":-1==n||-2==n?p=n:p=(new Date).getTime()+1E3*n;this.a.b[d]={};this.a.b[d].da=l;this.a.b[d].h=p;this.I()}break;case "_deleteCustomVar":2<=a.length&&(d=a[1],this.a.b[d]&&(delete this.a.b[d],this.I()));break;case "_trackPageContent":a[1]&&(this.D=a[1],this.s(),delete this.D);case "_trackPageAction":c=
[];a[1]&&a[2]&&(c.push(f(a[1])),c.push(f(a[2])),this.u=c.join("|"),this.s(),delete this.u);break;case "_setUUid":var m=a[1];if(128<m.length)return!1;var k=new Date;k.setTime(k.getTime()+157248E5);this.ba(this.R,m,k)}}catch(u){g(u,"aC failed")}},ra:function(){try{var a=this.m(this.P),b,c;this.a.b={};if(a)for(var d=a.split("&"),a=0;a<d.length;a++)c=m(d[a]),b=c.split("|"),this.a.b[m(b[0])]={},this.a.b[m(b[0])].da=m(b[1]),this.a.b[m(b[0])].h=m(b[2])}catch(l){g(l,"gCV failed")}},ka:function(){try{var a=
(new Date).getTime(),b;for(b in this.a.b)"p"===this.a.b[b].h?this.a.b[b].h=0:"-1"!==this.a.b[b].h&&a>this.a.b[b].h&&delete this.a.b[b];this.I()}catch(c){g(c,"cCV failed")}},I:function(){try{var a=[],b,c,d;for(d in this.a.b){var l=[];l.push(d);l.push(this.a.b[d].da);l.push(this.a.b[d].h);b=l.join("|");a.push(b)}if(!a.length)return!0;var e=new Date;e.setTime(e.getTime()+157248E5);c=this.P+"=";this.b=f(a.join("&"));c+=this.b;c+="; expires="+e.toUTCString();h.cookie=c+"; path=/"}catch(t){g(t,"sCV failed")}},
qa:function(){try{if(""!==e.location.hash)return this.O=e.location.href}catch(a){g(a,"gCP failed")}},o:function(){try{return this.a.Fa=h.referrer||""}catch(a){g(a,"gR failed")}},sa:function(){try{return this.a.A=e.navigator.systemLanguage||e.navigator.language,this.a.A=this.a.A.toLowerCase(),this.a.A}catch(a){g(a,"gL failed")}},va:function(){try{return e.screen.width&&e.screen.height?this.a.J=e.screen.width+"x"+e.screen.height:this.a.J="0x0",this.a.J}catch(a){g(a,"gS failed")}},w:function(){try{return this.a.Ba=
this.i("ntime")||"none"}catch(a){g(a,"gLVST failed")}},U:function(){try{return this.a.ea=this.i("ltime")||(new Date).getTime()}catch(a){g(a,"gFVBT failed")}},ua:function(){try{var a=this.i("cnzz_a");if(null===a)a=0;else{var b=1E3*this.w(),c=new Date;c.setTime(b);(new Date).getDate()===c.getDate()?a++:a=0}return this.a.Ja=a}catch(d){g(d,"gRT failed")}},ta:function(){try{return this.a.B=this.i("rtime"),null===this.a.B&&(this.a.B=0),0<this.U()&&432E5<(new Date).getTime()-this.U()&&(this.a.B++,this.a.ea=
(new Date).getTime()),this.a.B}catch(a){g(a,"gRVT failed")}},xa:function(){try{return"none"===this.w()?this.a.Ia=0:this.a.Ia=parseInt(((new Date).getTime()-1E3*this.w())/1E3)}catch(a){g(a,"gST failed")}},wa:function(){try{var a=this.i("sin")||"none";if(!h.domain)return this.a.Ha="none";this.o().split("/")[2]!==h.domain&&(a=this.o());return this.a.Ha=a}catch(b){g(b,"gS failed")}},T:function(){try{return this.a.l=this.i("cnzz_eid")||"none"}catch(a){g(a,"gC failed")}},Ga:function(){try{var a="http://c.cnzz.com/core.php?",
b=[];b.push("web_id="+f(this.c));this.Z&&b.push("show="+f(this.Z));this.Y&&b.push("online="+f(this.Y));this.W&&b.push("l="+f(this.W));this.ca&&b.push("t="+this.ca);a+=b.join("&");this.na(a,"utf-8")}catch(c){g(c,"rN failed")}},ja:function(){try{return!1===e.navigator.cookieEnabled?this.a.ma=!1:this.a.ma=!0}catch(a){g(a,"cCE failed")}},ba:function(a,b,c,d,e,g){a=f(a)+"="+f(b);c instanceof Date&&(a+="; expires="+c.toGMTString());d&&(a+="; path="+d);e&&(a+="; domain="+e);g&&(a+="; secure");h.cookie=a},
m:function(a){try{a+="=";var b=h.cookie,c=b.indexOf(a),d="";if(-1<c){var e=b.indexOf(";",c);-1===e&&(e=b.length);d=m(b.substring(c+a.length,e))}return d?d:""}catch(n){g(n,"gAC failed")}},pa:function(a){try{h.cookie=a+"=; expires="+(new Date(0)).toUTCString()+"; path=/"}catch(b){g(b,"dAC failed")}},ya:function(){try{var a=h.title;40<a.length&&(a=a.substr(0,40),a+="...");this.a.Da=a}catch(b){g(b,"gT failed")}},N:function(a){try{return"http"!==a.substr(0,4)?"":/http:\/\/.*?\//i.exec(a)}catch(b){g(b,
"cH failed")}},V:function(){try{var a=this.G,b={},c=this.m(this.G);if(0<c.length)if(1E8<this.c){var d=c.split("|");b.cnzz_eid=m(d[0]);b.ntime=m(d[1])}else for(var d=c.split("&"),e=0,f=d.length;e<f;e++){var h=d[e].split("=");b[m(h[0])]=m(h[1])}this.K=b}catch(p){g(p,"iC failed:"+a+":"+c)}},$:function(){try{var a=this.G+"=",b=[],c=new Date;c.setTime(c.getTime()+157248E5);if(1E8<this.c){if("none"!==this.a.l)b.push(f(this.a.l));else{var d=Math.floor(2147483648*Math.random())+"-"+this.C+"-"+this.N(this.o());
b.push(f(d))}b.push(this.C);0<b.length?(a+=f(b.join("|")),a+="; expires="+c.toUTCString(),a+="; path=/"):a+="; expires="+(new Date(0)).toUTCString()}else"none"!==this.a.l?b.push("cnzz_eid="+f(this.a.l)):(d=Math.floor(2147483648*Math.random())+"-"+this.C+"-"+this.N(this.o()),b.push("cnzz_eid="+f(d))),b.push("ntime="+this.C),0<b.length?(a+=f(b.join("&")),a+="; expires="+c.toUTCString(),a+="; path=/"):a+="; expires="+(new Date(0)).toUTCString();h.cookie=a}catch(l){g(l,"sS failed")}},i:function(a){try{return"undefined"!==
typeof this.K[a]?this.K[a]:null}catch(b){g(b,"gCPa failed")}},na:function(a,b){try{if(b=b||"utf-8","1"===this.H){var c=h.createElement("script");c.type="text/javascript";c.async=!0;c.charset=b;c.src=a;var d=h.getElementsByTagName("script")[0];d.parentNode&&d.parentNode.insertBefore(c,d)}else h.write(r("%3Cscript src='"+a+"' charset='"+b+"' type='text/javascript'%3E%3C/script%3E"))}catch(l){g(l,"cAS failed")}},ha:function(a,b){try{var c=h.getElementById("cnzz_stat_icon_"+this.c);if(c){var d=h.createElement("script");
d.type="text/javascript";d.async=!0;d.charset=b;d.src=a;c.appendChild(d)}else"0"===this.H&&h.write(r("%3Cscript src='"+a+"' charset='"+b+"' type='text/javascript'%3E%3C/script%3E"))}catch(l){g(l,"cSI failed")}},ga:function(a){try{for(var b=a.length,c="",d=0;d<b;d++)a[d]&&(c+=r(a[d]));var e=h.getElementById("cnzz_stat_icon_"+this.c);e?e.innerHTML=c:"0"===this.H&&h.write(c)}catch(n){g(n,"cI failed")}},s:function(){try{this.$();this.V();this.T();this.ka();var a=this.m(this.R),b=[];b.push("id="+f(this.c));
this.a.g||""===this.a.g?b.push("r="+f(this.a.g)):b.push("r="+f(this.a.Fa));b.push("lg="+f(this.a.A));b.push("ntime="+f(this.a.Ba));b.push("cnzz_eid="+f(this.a.l));b.push("showp="+f(this.a.J));this.a.f?b.push("p="+f(this.a.f)):"[object String]"==={}.toString.call(this.O)&&b.push("p="+f(this.O));"[object String]"==={}.toString.call(this.v)&&b.push("ei="+f(this.v));"[object String]"==={}.toString.call(this.b)&&b.push("cv="+this.b);"[object String]"==={}.toString.call(this.D)&&b.push("pc="+f(this.D));
"[object String]"==={}.toString.call(this.u)&&b.push("ai="+this.u);a&&b.push("uuid="+f(a));b.push("t="+f(this.a.Da));b.push("umuuid="+f(this.a.S));b.push("h=1");var c=b.join("&");"[object String]"==={}.toString.call(this.v)?this.j(["http://ei.cnzz.com/stat.htm?"+c]):this.D||this.u?this.j(["http://ca.cnzz.com/stat.htm?"+c]):(this.X&&this.j(["http://"+this.X+"/stat.htm?"+c]),this.aa&&this.j(["http://"+this.aa+"/stat.htm?"+c]))}catch(d){g(d,
"sD failed")}},fa:function(){function a(){function a(a,b){var c,d=0;for(c=0;c<b.length;c++)d|=h[c]<<8*c;return a^d}var b=e.navigator.userAgent,f,g,h=[],k=0;for(f=0;f<b.length;f++)g=b.charCodeAt(f),h.unshift(g&255),4<=h.length&&(k=a(k,h),h=[]);0<h.length&&(k=a(k,h));return k.toString(16)}function b(){for(var a=1*new Date,b=0;a==1*new Date;)b++;return a.toString(16)+b.toString(16)}return function(){var c=(e.screen.height*e.screen.width).toString(16);return b()+"-"+Math.random().toString(16).replace(".",
"")+"-"+a()+"-"+c+"-"+b()}}(),za:function(){try{var a=this.a,b;if(!(b=this.m(this.L))){var c=this.fa(),d=new Date;d.setTime(d.getTime()+157248E5);var e=document.location.hostname.match(/[a-z0-9][a-z0-9\-]+\.[a-z\.]{2,6}$/i);this.ba(this.L,c,d,"/",e?e[0]:"");b=c}a.S=b;return this.a.S}catch(n){g(n,"gC failed")}},j:function(a){try{for(var b=a.length,c=null,d=0;d<b;d++)a[d]&&(c="cnzz_image_"+Math.floor(2147483648*Math.random()),e[c]=new Image,e[c].la=c,e[c].onload=e[c].onerror=e[c].onabort=function(){try{this.onload=
this.onerror=this.onabort=null,e[this.la]=null}catch(l){}},e[c].src=a[d]+"&rnd="+Math.floor(2147483648*Math.random()))}catch(l){g(l,"cR failed")}},ia:function(){for(var a=e.navigator.userAgent.toLowerCase(),b=0;12>b;b++)if(-1<a.indexOf("#mobileconf#"[b]))return"mobile";return"pc"}};try{var q=new k;e[q.F].bobject=q;!1!==e._cz_autoPageview?q.s():q.$();k.prototype.getACookie=k.prototype.m;k.prototype.callRequest=k.prototype.j;k.prototype.createScriptIcon=k.prototype.ha;k.prototype.createIcon=k.prototype.ga;
q.Ga();q.ia()}catch(a){g(a,"main failed")}})();
