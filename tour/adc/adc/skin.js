// Garden Gnome Software - Skin
// Pano2VR pro 4.5.3/10717
// Filename: adc.ggsk
// Generated Пн 30. ноя 10:12:32 2015

function pano2vrSkin(player,base) {
	var me=this;
	var flag=false;
	var nodeMarker=new Array();
	var activeNodeMarker=new Array();
	this.player=player;
	this.player.skinObj=this;
	this.divSkin=player.divSkin;
	var basePath="";
	// auto detect base path
	if (base=='?') {
		var scripts = document.getElementsByTagName('script');
		for(var i=0;i<scripts.length;i++) {
			var src=scripts[i].src;
			if (src.indexOf('skin.js')>=0) {
				var p=src.lastIndexOf('/');
				if (p>=0) {
					basePath=src.substr(0,p+1);
				}
			}
		}
	} else
	if (base) {
		basePath=base;
	}
	this.elementMouseDown=new Array();
	this.elementMouseOver=new Array();
	var cssPrefix='';
	var domTransition='transition';
	var domTransform='transform';
	var prefixes='Webkit,Moz,O,ms,Ms'.split(',');
	var i;
	for(i=0;i<prefixes.length;i++) {
		if (typeof document.body.style[prefixes[i] + 'Transform'] !== 'undefined') {
			cssPrefix='-' + prefixes[i].toLowerCase() + '-';
			domTransition=prefixes[i] + 'Transition';
			domTransform=prefixes[i] + 'Transform';
		}
	}
	
	this.player.setMargins(0,0,0,0);
	
	this.updateSize=function(startElement) {
		var stack=new Array();
		stack.push(startElement);
		while(stack.length>0) {
			e=stack.pop();
			if (e.ggUpdatePosition) {
				e.ggUpdatePosition();
			}
			if (e.hasChildNodes()) {
				for(i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
	}
	
	parameterToTransform=function(p) {
		var hs='translate(' + p.rx + 'px,' + p.ry + 'px) rotate(' + p.a + 'deg) scale(' + p.sx + ',' + p.sy + ')';
		return hs;
	}
	
	this.findElements=function(id,regex) {
		var r=new Array();
		var stack=new Array();
		var pat=new RegExp(id,'');
		stack.push(me.divSkin);
		while(stack.length>0) {
			e=stack.pop();
			if (regex) {
				if (pat.test(e.ggId)) r.push(e);
			} else {
				if (e.ggId==id) r.push(e);
			}
			if (e.hasChildNodes()) {
				for(i=0;i<e.childNodes.length;i++) {
					stack.push(e.childNodes[i]);
				}
			}
		}
		return r;
	}
	
	this.addSkin=function() {
		this._controller=document.createElement('div');
		this._controller.ggId="controller";
		this._controller.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._controller.ggVisible=true;
		this._controller.className='ggskin ggskin_container';
		this._controller.ggType='container';
		this._controller.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-171 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-78 + h) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: -171px;';
		hs+='top:  -78px;';
		hs+='width: 357px;';
		hs+='height: 65px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._controller.setAttribute('style',hs);
		this._up=document.createElement('div');
		this._up.ggId="up";
		this._up.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._up.ggVisible=true;
		this._up.className='ggskin ggskin_svg';
		this._up.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 25px;';
		hs+='top:  -5px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._up.setAttribute('style',hs);
		this._up__img=document.createElement('img');
		this._up__img.className='ggskin ggskin_svg';
		this._up__img.setAttribute('src',basePath + 'images/up.svg');
		this._up__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._up__img['ondragstart']=function() { return false; };
		this._up.appendChild(this._up__img);
		this._up.onmouseover=function () {
			me._up__img.src=basePath + 'images/up__o.svg';
		}
		this._up.onmouseout=function () {
			me._up__img.src=basePath + 'images/up.svg';
			me.elementMouseDown['up']=false;
		}
		this._up.onmousedown=function () {
			me.elementMouseDown['up']=true;
		}
		this._up.onmouseup=function () {
			me.elementMouseDown['up']=false;
		}
		this._up.ontouchend=function () {
			me.elementMouseDown['up']=false;
		}
		this._controller.appendChild(this._up);
		this._down=document.createElement('div');
		this._down.ggId="down";
		this._down.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._down.ggVisible=true;
		this._down.className='ggskin ggskin_svg';
		this._down.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 25px;';
		hs+='top:  25px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._down.setAttribute('style',hs);
		this._down__img=document.createElement('img');
		this._down__img.className='ggskin ggskin_svg';
		this._down__img.setAttribute('src',basePath + 'images/down.svg');
		this._down__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._down__img['ondragstart']=function() { return false; };
		this._down.appendChild(this._down__img);
		this._down.onmouseover=function () {
			me._down__img.src=basePath + 'images/down__o.svg';
		}
		this._down.onmouseout=function () {
			me._down__img.src=basePath + 'images/down.svg';
			me.elementMouseDown['down']=false;
		}
		this._down.onmousedown=function () {
			me.elementMouseDown['down']=true;
		}
		this._down.onmouseup=function () {
			me.elementMouseDown['down']=false;
		}
		this._down.ontouchend=function () {
			me.elementMouseDown['down']=false;
		}
		this._controller.appendChild(this._down);
		this._left=document.createElement('div');
		this._left.ggId="left";
		this._left.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._left.ggVisible=true;
		this._left.className='ggskin ggskin_svg';
		this._left.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._left.setAttribute('style',hs);
		this._left__img=document.createElement('img');
		this._left__img.className='ggskin ggskin_svg';
		this._left__img.setAttribute('src',basePath + 'images/left.svg');
		this._left__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._left__img['ondragstart']=function() { return false; };
		this._left.appendChild(this._left__img);
		this._left.onmouseover=function () {
			me._left__img.src=basePath + 'images/left__o.svg';
		}
		this._left.onmouseout=function () {
			me._left__img.src=basePath + 'images/left.svg';
			me.elementMouseDown['left']=false;
		}
		this._left.onmousedown=function () {
			me.elementMouseDown['left']=true;
		}
		this._left.onmouseup=function () {
			me.elementMouseDown['left']=false;
		}
		this._left.ontouchend=function () {
			me.elementMouseDown['left']=false;
		}
		this._controller.appendChild(this._left);
		this._right=document.createElement('div');
		this._right.ggId="right";
		this._right.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._right.ggVisible=true;
		this._right.className='ggskin ggskin_svg';
		this._right.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 50px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._right.setAttribute('style',hs);
		this._right__img=document.createElement('img');
		this._right__img.className='ggskin ggskin_svg';
		this._right__img.setAttribute('src',basePath + 'images/right.svg');
		this._right__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._right__img['ondragstart']=function() { return false; };
		this._right.appendChild(this._right__img);
		this._right.onmouseover=function () {
			me._right__img.src=basePath + 'images/right__o.svg';
		}
		this._right.onmouseout=function () {
			me._right__img.src=basePath + 'images/right.svg';
			me.elementMouseDown['right']=false;
		}
		this._right.onmousedown=function () {
			me.elementMouseDown['right']=true;
		}
		this._right.onmouseup=function () {
			me.elementMouseDown['right']=false;
		}
		this._right.ontouchend=function () {
			me.elementMouseDown['right']=false;
		}
		this._controller.appendChild(this._right);
		this._zoomin=document.createElement('div');
		this._zoomin.ggId="zoomin";
		this._zoomin.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._zoomin.ggVisible=true;
		this._zoomin.className='ggskin ggskin_svg';
		this._zoomin.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 90px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._zoomin.setAttribute('style',hs);
		this._zoomin__img=document.createElement('img');
		this._zoomin__img.className='ggskin ggskin_svg';
		this._zoomin__img.setAttribute('src',basePath + 'images/zoomin.svg');
		this._zoomin__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._zoomin__img['ondragstart']=function() { return false; };
		this._zoomin.appendChild(this._zoomin__img);
		this._zoomin.onmouseover=function () {
			me._tt_zoomin.style[domTransition]='none';
			me._tt_zoomin.style.visibility='inherit';
			me._tt_zoomin.ggVisible=true;
			me._zoomin__img.src=basePath + 'images/zoomin__o.svg';
		}
		this._zoomin.onmouseout=function () {
			me._tt_zoomin.style[domTransition]='none';
			me._tt_zoomin.style.visibility='hidden';
			me._tt_zoomin.ggVisible=false;
			me._zoomin__img.src=basePath + 'images/zoomin.svg';
			me.elementMouseDown['zoomin']=false;
		}
		this._zoomin.onmousedown=function () {
			me.elementMouseDown['zoomin']=true;
		}
		this._zoomin.onmouseup=function () {
			me.elementMouseDown['zoomin']=false;
		}
		this._zoomin.ontouchend=function () {
			me.elementMouseDown['zoomin']=false;
		}
		this._tt_zoomin=document.createElement('div');
		this._tt_zoomin__text=document.createElement('div');
		this._tt_zoomin.className='ggskin ggskin_textdiv';
		this._tt_zoomin.ggTextDiv=this._tt_zoomin__text;
		this._tt_zoomin.ggId="tt_zoomin";
		this._tt_zoomin.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomin.ggVisible=false;
		this._tt_zoomin.className='ggskin ggskin_text';
		this._tt_zoomin.ggType='text';
		hs ='position:absolute;';
		hs+='left: -55px;';
		hs+='top:  36px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_zoomin.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomin__text.setAttribute('style',hs);
		this._tt_zoomin.ggTextDiv.innerHTML="Zoom In";
		this._tt_zoomin.appendChild(this._tt_zoomin__text);
		this._tt_zoomin_white=document.createElement('div');
		this._tt_zoomin_white__text=document.createElement('div');
		this._tt_zoomin_white.className='ggskin ggskin_textdiv';
		this._tt_zoomin_white.ggTextDiv=this._tt_zoomin_white__text;
		this._tt_zoomin_white.ggId="tt_zoomin_white";
		this._tt_zoomin_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomin_white.ggVisible=true;
		this._tt_zoomin_white.className='ggskin ggskin_text';
		this._tt_zoomin_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_zoomin_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomin_white__text.setAttribute('style',hs);
		this._tt_zoomin_white.ggTextDiv.innerHTML="Zoom In";
		this._tt_zoomin_white.appendChild(this._tt_zoomin_white__text);
		this._tt_zoomin.appendChild(this._tt_zoomin_white);
		this._zoomin.appendChild(this._tt_zoomin);
		this._controller.appendChild(this._zoomin);
		this._zoomout=document.createElement('div');
		this._zoomout.ggId="zoomout";
		this._zoomout.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._zoomout.ggVisible=true;
		this._zoomout.className='ggskin ggskin_svg';
		this._zoomout.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 120px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._zoomout.setAttribute('style',hs);
		this._zoomout__img=document.createElement('img');
		this._zoomout__img.className='ggskin ggskin_svg';
		this._zoomout__img.setAttribute('src',basePath + 'images/zoomout.svg');
		this._zoomout__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._zoomout__img['ondragstart']=function() { return false; };
		this._zoomout.appendChild(this._zoomout__img);
		this._zoomout.onmouseover=function () {
			me._tt_zoomout.style[domTransition]='none';
			me._tt_zoomout.style.visibility='inherit';
			me._tt_zoomout.ggVisible=true;
			me._zoomout__img.src=basePath + 'images/zoomout__o.svg';
		}
		this._zoomout.onmouseout=function () {
			me._tt_zoomout.style[domTransition]='none';
			me._tt_zoomout.style.visibility='hidden';
			me._tt_zoomout.ggVisible=false;
			me._zoomout__img.src=basePath + 'images/zoomout.svg';
			me.elementMouseDown['zoomout']=false;
		}
		this._zoomout.onmousedown=function () {
			me.elementMouseDown['zoomout']=true;
		}
		this._zoomout.onmouseup=function () {
			me.elementMouseDown['zoomout']=false;
		}
		this._zoomout.ontouchend=function () {
			me.elementMouseDown['zoomout']=false;
		}
		this._tt_zoomout=document.createElement('div');
		this._tt_zoomout__text=document.createElement('div');
		this._tt_zoomout.className='ggskin ggskin_textdiv';
		this._tt_zoomout.ggTextDiv=this._tt_zoomout__text;
		this._tt_zoomout.ggId="tt_zoomout";
		this._tt_zoomout.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomout.ggVisible=false;
		this._tt_zoomout.className='ggskin ggskin_text';
		this._tt_zoomout.ggType='text';
		hs ='position:absolute;';
		hs+='left: -55px;';
		hs+='top:  36px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_zoomout.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomout__text.setAttribute('style',hs);
		this._tt_zoomout.ggTextDiv.innerHTML="Zoom Out";
		this._tt_zoomout.appendChild(this._tt_zoomout__text);
		this._tt_zoomout_white=document.createElement('div');
		this._tt_zoomout_white__text=document.createElement('div');
		this._tt_zoomout_white.className='ggskin ggskin_textdiv';
		this._tt_zoomout_white.ggTextDiv=this._tt_zoomout_white__text;
		this._tt_zoomout_white.ggId="tt_zoomout_white";
		this._tt_zoomout_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_zoomout_white.ggVisible=true;
		this._tt_zoomout_white.className='ggskin ggskin_text';
		this._tt_zoomout_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_zoomout_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_zoomout_white__text.setAttribute('style',hs);
		this._tt_zoomout_white.ggTextDiv.innerHTML="Zoom Out";
		this._tt_zoomout_white.appendChild(this._tt_zoomout_white__text);
		this._tt_zoomout.appendChild(this._tt_zoomout_white);
		this._zoomout.appendChild(this._tt_zoomout);
		this._controller.appendChild(this._zoomout);
		this._autorotate=document.createElement('div');
		this._autorotate.ggId="autorotate";
		this._autorotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._autorotate.ggVisible=true;
		this._autorotate.className='ggskin ggskin_svg';
		this._autorotate.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 160px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._autorotate.setAttribute('style',hs);
		this._autorotate__img=document.createElement('img');
		this._autorotate__img.className='ggskin ggskin_svg';
		this._autorotate__img.setAttribute('src',basePath + 'images/autorotate.svg');
		this._autorotate__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._autorotate__img['ondragstart']=function() { return false; };
		this._autorotate.appendChild(this._autorotate__img);
		this._autorotate.onclick=function () {
			me.player.toggleAutorotate();
		}
		this._autorotate.onmouseover=function () {
			me._tt_autorotate.style[domTransition]='none';
			me._tt_autorotate.style.visibility='inherit';
			me._tt_autorotate.ggVisible=true;
			me._autorotate__img.src=basePath + 'images/autorotate__o.svg';
		}
		this._autorotate.onmouseout=function () {
			me._tt_autorotate.style[domTransition]='none';
			me._tt_autorotate.style.visibility='hidden';
			me._tt_autorotate.ggVisible=false;
			me._autorotate__img.src=basePath + 'images/autorotate.svg';
		}
		this._tt_autorotate=document.createElement('div');
		this._tt_autorotate__text=document.createElement('div');
		this._tt_autorotate.className='ggskin ggskin_textdiv';
		this._tt_autorotate.ggTextDiv=this._tt_autorotate__text;
		this._tt_autorotate.ggId="tt_autorotate";
		this._tt_autorotate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_autorotate.ggVisible=false;
		this._tt_autorotate.className='ggskin ggskin_text';
		this._tt_autorotate.ggType='text';
		hs ='position:absolute;';
		hs+='left: -65px;';
		hs+='top:  36px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_autorotate.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_autorotate__text.setAttribute('style',hs);
		this._tt_autorotate.ggTextDiv.innerHTML="Start\/Stop Autorotation";
		this._tt_autorotate.appendChild(this._tt_autorotate__text);
		this._tt_autorotate_white=document.createElement('div');
		this._tt_autorotate_white__text=document.createElement('div');
		this._tt_autorotate_white.className='ggskin ggskin_textdiv';
		this._tt_autorotate_white.ggTextDiv=this._tt_autorotate_white__text;
		this._tt_autorotate_white.ggId="tt_autorotate_white";
		this._tt_autorotate_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_autorotate_white.ggVisible=true;
		this._tt_autorotate_white.className='ggskin ggskin_text';
		this._tt_autorotate_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_autorotate_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_autorotate_white__text.setAttribute('style',hs);
		this._tt_autorotate_white.ggTextDiv.innerHTML="Start\/Stop Autorotation";
		this._tt_autorotate_white.appendChild(this._tt_autorotate_white__text);
		this._tt_autorotate.appendChild(this._tt_autorotate_white);
		this._autorotate.appendChild(this._tt_autorotate);
		this._controller.appendChild(this._autorotate);
		this._info=document.createElement('div');
		this._info.ggId="info";
		this._info.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._info.ggVisible=true;
		this._info.className='ggskin ggskin_svg';
		this._info.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 190px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._info.setAttribute('style',hs);
		this._info__img=document.createElement('img');
		this._info__img.className='ggskin ggskin_svg';
		this._info__img.setAttribute('src',basePath + 'images/info.svg');
		this._info__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._info__img['ondragstart']=function() { return false; };
		this._info.appendChild(this._info__img);
		this._info.onclick=function () {
			flag=(me._userdata.style.visibility=='hidden');
			me._userdata.style[domTransition]='none';
			me._userdata.style.visibility=flag?'inherit':'hidden';
			me._userdata.ggVisible=flag;
		}
		this._info.onmouseover=function () {
			me._tt_info.style[domTransition]='none';
			me._tt_info.style.visibility='inherit';
			me._tt_info.ggVisible=true;
			me._info__img.src=basePath + 'images/info__o.svg';
		}
		this._info.onmouseout=function () {
			me._tt_info.style[domTransition]='none';
			me._tt_info.style.visibility='hidden';
			me._tt_info.ggVisible=false;
			me._info__img.src=basePath + 'images/info.svg';
		}
		this._tt_info=document.createElement('div');
		this._tt_info__text=document.createElement('div');
		this._tt_info.className='ggskin ggskin_textdiv';
		this._tt_info.ggTextDiv=this._tt_info__text;
		this._tt_info.ggId="tt_info";
		this._tt_info.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_info.ggVisible=false;
		this._tt_info.className='ggskin ggskin_text';
		this._tt_info.ggType='text';
		hs ='position:absolute;';
		hs+='left: -55px;';
		hs+='top:  36px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_info.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_info__text.setAttribute('style',hs);
		this._tt_info.ggTextDiv.innerHTML="Show Information";
		this._tt_info.appendChild(this._tt_info__text);
		this._tt_info_white=document.createElement('div');
		this._tt_info_white__text=document.createElement('div');
		this._tt_info_white.className='ggskin ggskin_textdiv';
		this._tt_info_white.ggTextDiv=this._tt_info_white__text;
		this._tt_info_white.ggId="tt_info_white";
		this._tt_info_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_info_white.ggVisible=true;
		this._tt_info_white.className='ggskin ggskin_text';
		this._tt_info_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_info_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_info_white__text.setAttribute('style',hs);
		this._tt_info_white.ggTextDiv.innerHTML="Show Information";
		this._tt_info_white.appendChild(this._tt_info_white__text);
		this._tt_info.appendChild(this._tt_info_white);
		this._info.appendChild(this._tt_info);
		this._controller.appendChild(this._info);
		this._movemode=document.createElement('div');
		this._movemode.ggId="movemode";
		this._movemode.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._movemode.ggVisible=true;
		this._movemode.className='ggskin ggskin_svg';
		this._movemode.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 220px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._movemode.setAttribute('style',hs);
		this._movemode__img=document.createElement('img');
		this._movemode__img.className='ggskin ggskin_svg';
		this._movemode__img.setAttribute('src',basePath + 'images/movemode.svg');
		this._movemode__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._movemode__img['ondragstart']=function() { return false; };
		this._movemode.appendChild(this._movemode__img);
		this._movemode.onclick=function () {
			me.player.changeViewMode(2);
		}
		this._movemode.onmouseover=function () {
			me._tt_movemode.style[domTransition]='none';
			me._tt_movemode.style.visibility='inherit';
			me._tt_movemode.ggVisible=true;
			me._movemode__img.src=basePath + 'images/movemode__o.svg';
		}
		this._movemode.onmouseout=function () {
			me._tt_movemode.style[domTransition]='none';
			me._tt_movemode.style.visibility='hidden';
			me._tt_movemode.ggVisible=false;
			me._movemode__img.src=basePath + 'images/movemode.svg';
		}
		this._tt_movemode=document.createElement('div');
		this._tt_movemode__text=document.createElement('div');
		this._tt_movemode.className='ggskin ggskin_textdiv';
		this._tt_movemode.ggTextDiv=this._tt_movemode__text;
		this._tt_movemode.ggId="tt_movemode";
		this._tt_movemode.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_movemode.ggVisible=false;
		this._tt_movemode.className='ggskin ggskin_text';
		this._tt_movemode.ggType='text';
		hs ='position:absolute;';
		hs+='left: -65px;';
		hs+='top:  36px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_movemode.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_movemode__text.setAttribute('style',hs);
		this._tt_movemode.ggTextDiv.innerHTML="Change Control Mode";
		this._tt_movemode.appendChild(this._tt_movemode__text);
		this._tt_movemode_white=document.createElement('div');
		this._tt_movemode_white__text=document.createElement('div');
		this._tt_movemode_white.className='ggskin ggskin_textdiv';
		this._tt_movemode_white.ggTextDiv=this._tt_movemode_white__text;
		this._tt_movemode_white.ggId="tt_movemode_white";
		this._tt_movemode_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_movemode_white.ggVisible=true;
		this._tt_movemode_white.className='ggskin ggskin_text';
		this._tt_movemode_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_movemode_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 168px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_movemode_white__text.setAttribute('style',hs);
		this._tt_movemode_white.ggTextDiv.innerHTML="Change Control Mode";
		this._tt_movemode_white.appendChild(this._tt_movemode_white__text);
		this._tt_movemode.appendChild(this._tt_movemode_white);
		this._movemode.appendChild(this._tt_movemode);
		this._controller.appendChild(this._movemode);
		this._fullscreen=document.createElement('div');
		this._fullscreen.ggId="fullscreen";
		this._fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._fullscreen.ggVisible=true;
		this._fullscreen.className='ggskin ggskin_svg';
		this._fullscreen.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 250px;';
		hs+='top:  10px;';
		hs+='width: 32px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._fullscreen.setAttribute('style',hs);
		this._fullscreen__img=document.createElement('img');
		this._fullscreen__img.className='ggskin ggskin_svg';
		this._fullscreen__img.setAttribute('src',basePath + 'images/fullscreen.svg');
		this._fullscreen__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
		this._fullscreen__img['ondragstart']=function() { return false; };
		this._fullscreen.appendChild(this._fullscreen__img);
		this._fullscreen.onclick=function () {
			me.player.toggleFullscreen();
		}
		this._fullscreen.onmouseover=function () {
			me._tt_fullscreen.style[domTransition]='none';
			me._tt_fullscreen.style.visibility='inherit';
			me._tt_fullscreen.ggVisible=true;
			me._fullscreen__img.src=basePath + 'images/fullscreen__o.svg';
		}
		this._fullscreen.onmouseout=function () {
			me._tt_fullscreen.style[domTransition]='none';
			me._tt_fullscreen.style.visibility='hidden';
			me._tt_fullscreen.ggVisible=false;
			me._fullscreen__img.src=basePath + 'images/fullscreen.svg';
		}
		this._tt_fullscreen=document.createElement('div');
		this._tt_fullscreen__text=document.createElement('div');
		this._tt_fullscreen.className='ggskin ggskin_textdiv';
		this._tt_fullscreen.ggTextDiv=this._tt_fullscreen__text;
		this._tt_fullscreen.ggId="tt_fullscreen";
		this._tt_fullscreen.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_fullscreen.ggVisible=false;
		this._tt_fullscreen.className='ggskin ggskin_text';
		this._tt_fullscreen.ggType='text';
		hs ='position:absolute;';
		hs+='left: -55px;';
		hs+='top:  36px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._tt_fullscreen.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_fullscreen__text.setAttribute('style',hs);
		this._tt_fullscreen.ggTextDiv.innerHTML="Fullscreen";
		this._tt_fullscreen.appendChild(this._tt_fullscreen__text);
		this._tt_fullscreen_white=document.createElement('div');
		this._tt_fullscreen_white__text=document.createElement('div');
		this._tt_fullscreen_white.className='ggskin ggskin_textdiv';
		this._tt_fullscreen_white.ggTextDiv=this._tt_fullscreen_white__text;
		this._tt_fullscreen_white.ggId="tt_fullscreen_white";
		this._tt_fullscreen_white.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._tt_fullscreen_white.ggVisible=true;
		this._tt_fullscreen_white.className='ggskin ggskin_text';
		this._tt_fullscreen_white.ggType='text';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._tt_fullscreen_white.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 148px;';
		hs+='height: 18px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._tt_fullscreen_white__text.setAttribute('style',hs);
		this._tt_fullscreen_white.ggTextDiv.innerHTML="Fullscreen";
		this._tt_fullscreen_white.appendChild(this._tt_fullscreen_white__text);
		this._tt_fullscreen.appendChild(this._tt_fullscreen_white);
		this._fullscreen.appendChild(this._tt_fullscreen);
		this._controller.appendChild(this._fullscreen);
		this._image_1=document.createElement('div');
		this._image_1.ggId="Image 1";
		this._image_1.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_1.ggVisible=true;
		this._image_1.className='ggskin ggskin_image';
		this._image_1.ggType='image';
		hs ='position:absolute;';
		hs+='left: 286px;';
		hs+='top:  12px;';
		hs+='width: 28px;';
		hs+='height: 26px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_1.setAttribute('style',hs);
		this._image_1__img=document.createElement('img');
		this._image_1__img.className='ggskin ggskin_image';
		this._image_1__img.setAttribute('src',basePath + 'images/image_1.png');
		this._image_1__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_1__img.className='ggskin ggskin_image';
		this._image_1__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_1__img);
		this._image_1.appendChild(this._image_1__img);
		this._image_1.onclick=function () {
			flag=(me._container_1.style.visibility=='hidden');
			me._container_1.style[domTransition]='none';
			me._container_1.style.visibility=flag?'inherit':'hidden';
			me._container_1.ggVisible=flag;
		}
		this._controller.appendChild(this._image_1);
		this._image_20=document.createElement('div');
		this._image_20.ggId="Image 20";
		this._image_20.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_20.ggVisible=true;
		this._image_20.className='ggskin ggskin_image';
		this._image_20.ggType='image';
		hs ='position:absolute;';
		hs+='left: 324px;';
		hs+='top:  12px;';
		hs+='width: 17px;';
		hs+='height: 25px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_20.setAttribute('style',hs);
		this._image_20__img=document.createElement('img');
		this._image_20__img.className='ggskin ggskin_image';
		this._image_20__img.setAttribute('src',basePath + 'images/image_20.png');
		this._image_20__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_20__img.className='ggskin ggskin_image';
		this._image_20__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_20__img);
		this._image_20.appendChild(this._image_20__img);
		this._image_20.onclick=function () {
			flag=(me._image_21.style.visibility=='hidden');
			me._image_21.style[domTransition]='none';
			me._image_21.style.visibility=flag?'inherit':'hidden';
			me._image_21.ggVisible=flag;
		}
		this._controller.appendChild(this._image_20);
		this.divSkin.appendChild(this._controller);
		this._loading=document.createElement('div');
		this._loading.ggId="loading";
		this._loading.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loading.ggVisible=true;
		this._loading.className='ggskin ggskin_container';
		this._loading.ggType='container';
		this._loading.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-105 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-30 + h/2) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: -105px;';
		hs+='top:  -30px;';
		hs+='width: 210px;';
		hs+='height: 60px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._loading.setAttribute('style',hs);
		this._loading.onclick=function () {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility='hidden';
			me._loading.ggVisible=false;
		}
		this._loadingbg=document.createElement('div');
		this._loadingbg.ggId="loadingbg";
		this._loadingbg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingbg.ggVisible=true;
		this._loadingbg.className='ggskin ggskin_rectangle';
		this._loadingbg.ggType='rectangle';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 210px;';
		hs+='height: 60px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='opacity: 0.5;';
		hs+='visibility: inherit;';
		hs+='background: #000000;';
		hs+='border: 0px solid #000000;';
		hs+='border-radius: 10px;';
		hs+=cssPrefix + 'border-radius: 10px;';
		this._loadingbg.setAttribute('style',hs);
		this._loading.appendChild(this._loadingbg);
		this._loadingbrd=document.createElement('div');
		this._loadingbrd.ggId="loadingbrd";
		this._loadingbrd.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingbrd.ggVisible=true;
		this._loadingbrd.className='ggskin ggskin_rectangle';
		this._loadingbrd.ggType='rectangle';
		hs ='position:absolute;';
		hs+='left: -1px;';
		hs+='top:  -1px;';
		hs+='width: 208px;';
		hs+='height: 58px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='opacity: 0.5;';
		hs+='visibility: inherit;';
		hs+='border: 2px solid #ffffff;';
		hs+='border-radius: 10px;';
		hs+=cssPrefix + 'border-radius: 10px;';
		this._loadingbrd.setAttribute('style',hs);
		this._loading.appendChild(this._loadingbrd);
		this._loadingtext=document.createElement('div');
		this._loadingtext__text=document.createElement('div');
		this._loadingtext.className='ggskin ggskin_textdiv';
		this._loadingtext.ggTextDiv=this._loadingtext__text;
		this._loadingtext.ggId="loadingtext";
		this._loadingtext.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingtext.ggVisible=true;
		this._loadingtext.className='ggskin ggskin_text';
		this._loadingtext.ggType='text';
		this._loadingtext.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			this.ggTextDiv.style.left=Math.floor(0 + (176-this.ggTextDiv.offsetWidth)*0) + 'px';
		}
		hs ='position:absolute;';
		hs+='left: 16px;';
		hs+='top:  12px;';
		hs+='width: 176px;';
		hs+='height: 23px;';
		hs+=cssPrefix + 'transform-origin: 0% 50%;';
		hs+='visibility: inherit;';
		this._loadingtext.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._loadingtext__text.setAttribute('style',hs);
		this._loadingtext.ggUpdateText=function() {
			var hs="Loading... "+(me.player.getPercentLoaded()*100.0).toFixed(0)+"%";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		this.ggUpdatePosition();
		}
		this._loadingtext.ggUpdateText();
		this._loadingtext.appendChild(this._loadingtext__text);
		this._loading.appendChild(this._loadingtext);
		this._loadingbar=document.createElement('div');
		this._loadingbar.ggId="loadingbar";
		this._loadingbar.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._loadingbar.ggVisible=true;
		this._loadingbar.className='ggskin ggskin_rectangle';
		this._loadingbar.ggType='rectangle';
		hs ='position:absolute;';
		hs+='left: 15px;';
		hs+='top:  35px;';
		hs+='width: 181px;';
		hs+='height: 12px;';
		hs+=cssPrefix + 'transform-origin: 0% 50%;';
		hs+='visibility: inherit;';
		hs+='background: #ffffff;';
		hs+='border: 1px solid #808080;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		this._loadingbar.setAttribute('style',hs);
		this._loading.appendChild(this._loadingbar);
		this.divSkin.appendChild(this._loading);
		this._userdata=document.createElement('div');
		this._userdata.ggId="userdata";
		this._userdata.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdata.ggVisible=false;
		this._userdata.className='ggskin ggskin_container';
		this._userdata.ggType='container';
		this._userdata.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-153 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-119 + h/2) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: -153px;';
		hs+='top:  -119px;';
		hs+='width: 300px;';
		hs+='height: 300px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._userdata.setAttribute('style',hs);
		this._userdata.onclick=function () {
			me._userdata.style[domTransition]='none';
			me._userdata.style.visibility='hidden';
			me._userdata.ggVisible=false;
		}
		this._userdatabg=document.createElement('div');
		this._userdatabg.ggId="userdatabg";
		this._userdatabg.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdatabg.ggVisible=true;
		this._userdatabg.className='ggskin ggskin_rectangle';
		this._userdatabg.ggType='rectangle';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 300px;';
		hs+='height: 300px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='opacity: 0.5;';
		hs+='visibility: inherit;';
		hs+='background: #000000;';
		hs+='border: 0px solid #000000;';
		hs+='border-radius: 10px;';
		hs+=cssPrefix + 'border-radius: 10px;';
		this._userdatabg.setAttribute('style',hs);
		this._userdata.appendChild(this._userdatabg);
		this._userdatabrd=document.createElement('div');
		this._userdatabrd.ggId="userdatabrd";
		this._userdatabrd.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._userdatabrd.ggVisible=true;
		this._userdatabrd.className='ggskin ggskin_rectangle';
		this._userdatabrd.ggType='rectangle';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  1px;';
		hs+='width: 298px;';
		hs+='height: 298px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='opacity: 0.5;';
		hs+='visibility: inherit;';
		hs+='border: 2px solid #ffffff;';
		hs+='border-radius: 10px;';
		hs+=cssPrefix + 'border-radius: 10px;';
		this._userdatabrd.setAttribute('style',hs);
		this._userdata.appendChild(this._userdatabrd);
		this._title=document.createElement('div');
		this._title__text=document.createElement('div');
		this._title.className='ggskin ggskin_textdiv';
		this._title.ggTextDiv=this._title__text;
		this._title.ggId="title";
		this._title.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._title.ggVisible=true;
		this._title.className='ggskin ggskin_text';
		this._title.ggType='text';
		hs ='position:absolute;';
		hs+='left: 8px;';
		hs+='top:  10px;';
		hs+='width: 278px;';
		hs+='height: 20px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._title.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 278px;';
		hs+='height: 20px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._title__text.setAttribute('style',hs);
		this._title.ggUpdateText=function() {
			var hs="<b>"+me.player.userdata.title+"<\/b>";
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		}
		this._title.ggUpdateText();
		this._title.appendChild(this._title__text);
		this._userdata.appendChild(this._title);
		this._description=document.createElement('div');
		this._description__text=document.createElement('div');
		this._description.className='ggskin ggskin_textdiv';
		this._description.ggTextDiv=this._description__text;
		this._description.ggId="description";
		this._description.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._description.ggVisible=true;
		this._description.className='ggskin ggskin_text';
		this._description.ggType='text';
		hs ='position:absolute;';
		hs+='left: 9px;';
		hs+='top:  40px;';
		hs+='width: 278px;';
		hs+='height: 170px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._description.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 278px;';
		hs+='height: 170px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: left;';
		hs+='white-space: pre-wrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		hs+='overflow-y: auto;';
		this._description__text.setAttribute('style',hs);
		this._description.ggUpdateText=function() {
			var hs=me.player.userdata.description;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		}
		this._description.ggUpdateText();
		this._description.appendChild(this._description__text);
		this._userdata.appendChild(this._description);
		this._author=document.createElement('div');
		this._author__text=document.createElement('div');
		this._author.className='ggskin ggskin_textdiv';
		this._author.ggTextDiv=this._author__text;
		this._author.ggId="author";
		this._author.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._author.ggVisible=true;
		this._author.className='ggskin ggskin_text';
		this._author.ggType='text';
		hs ='position:absolute;';
		hs+='left: 6px;';
		hs+='top:  214px;';
		hs+='width: 278px;';
		hs+='height: 20px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._author.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 278px;';
		hs+='height: 20px;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._author__text.setAttribute('style',hs);
		this._author.ggUpdateText=function() {
			var hs=me.player.userdata.author;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		}
		this._author.ggUpdateText();
		this._author.appendChild(this._author__text);
		this._userdata.appendChild(this._author);
		this._datetime=document.createElement('div');
		this._datetime__text=document.createElement('div');
		this._datetime.className='ggskin ggskin_textdiv';
		this._datetime.ggTextDiv=this._datetime__text;
		this._datetime.ggId="datetime";
		this._datetime.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._datetime.ggVisible=true;
		this._datetime.className='ggskin ggskin_text';
		this._datetime.ggType='text';
		this._datetime.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			this.ggTextDiv.style.left=Math.floor(0 + (278-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		hs ='position:absolute;';
		hs+='left: 8px;';
		hs+='top:  242px;';
		hs+='width: 278px;';
		hs+='height: 23px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._datetime.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._datetime__text.setAttribute('style',hs);
		this._datetime.ggUpdateText=function() {
			var hs=me.player.userdata.datetime;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		this.ggUpdatePosition();
		}
		this._datetime.ggUpdateText();
		this._datetime.appendChild(this._datetime__text);
		this._userdata.appendChild(this._datetime);
		this._copyright=document.createElement('div');
		this._copyright__text=document.createElement('div');
		this._copyright.className='ggskin ggskin_textdiv';
		this._copyright.ggTextDiv=this._copyright__text;
		this._copyright.ggId="copyright";
		this._copyright.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._copyright.ggVisible=true;
		this._copyright.className='ggskin ggskin_text';
		this._copyright.ggType='text';
		this._copyright.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-141 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-30 + h) + 'px';
			}
			this.ggTextDiv.style.left=Math.floor(0 + (281-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		hs ='position:absolute;';
		hs+='left: -141px;';
		hs+='top:  -30px;';
		hs+='width: 281px;';
		hs+='height: 23px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._copyright.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='border: 0px solid #000000;';
		hs+='color: #ffffff;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 0px 1px 0px 1px;';
		hs+='overflow: hidden;';
		this._copyright__text.setAttribute('style',hs);
		this._copyright.ggUpdateText=function() {
			var hs="&#169; "+me.player.userdata.copyright;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		this.ggUpdatePosition();
		}
		this._copyright.ggUpdateText();
		this._copyright.appendChild(this._copyright__text);
		this._userdata.appendChild(this._copyright);
		this.divSkin.appendChild(this._userdata);
		this._image_2=document.createElement('div');
		this._image_2.ggId="Image 2";
		this._image_2.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_2.ggVisible=true;
		this._image_2.className='ggskin ggskin_image';
		this._image_2.ggType='image';
		this._image_2.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(181 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-68 + h) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: 181px;';
		hs+='top:  -68px;';
		hs+='width: 255px;';
		hs+='height: 40px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_2.setAttribute('style',hs);
		this._image_2__img=document.createElement('img');
		this._image_2__img.className='ggskin ggskin_image';
		this._image_2__img.setAttribute('src',basePath + 'images/image_2.png');
		this._image_2__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_2__img.className='ggskin ggskin_image';
		this._image_2__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_2__img);
		this._image_2.appendChild(this._image_2__img);
		this._image_2.onclick=function () {
			me.player.openUrl("\/virtualnyy-tur\/?tour=adc","_parent");
		}
		this.divSkin.appendChild(this._image_2);
		this._container_1=document.createElement('div');
		this._container_1.ggId="Container 1";
		this._container_1.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._container_1.ggVisible=false;
		this._container_1.className='ggskin ggskin_container';
		this._container_1.ggType='container';
		hs ='position:absolute;';
		hs+='left: 2px;';
		hs+='top:  4px;';
		hs+='width: 626px;';
		hs+='height: 300px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._container_1.setAttribute('style',hs);
		this._hide_template=document.createElement('div');
		this._hide_template.ggId="hide_template";
		this._hide_template.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._hide_template.ggVisible=false;
		this._hide_template.className='ggskin ggskin_container';
		this._hide_template.ggType='container';
		hs ='position:absolute;';
		hs+='left: 8px;';
		hs+='top:  6px;';
		hs+='width: 187px;';
		hs+='height: 45px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		hs+='overflow: hidden;';
		this._hide_template.setAttribute('style',hs);
		this._markertemplate=document.createElement('div');
		this._markertemplate.ggId="markertemplate";
		this._markertemplate.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._markertemplate.ggVisible=true;
		this._markertemplate.className='ggskin ggskin_mark';
		this._markertemplate.ggType='mark';
		hs ='position:absolute;';
		hs+='left: 60px;';
		hs+='top:  0px;';
		hs+='width: 5px;';
		hs+='height: 5px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._markertemplate.setAttribute('style',hs);
		this._markertemplate.ggMarkerNodeId='';
		nodeMarker.push(this._markertemplate);
		this._markertemplate.onmouseover=function () {
			me._marker_title.style[domTransition]='none';
			me._marker_title.style.visibility='inherit';
			me._marker_title.ggVisible=true;
		}
		this._markertemplate.onmouseout=function () {
			me._marker_title.style[domTransition]='none';
			me._marker_title.style.visibility='hidden';
			me._marker_title.ggVisible=false;
		}
		this._marker_title=document.createElement('div');
		this._marker_title__text=document.createElement('div');
		this._marker_title.className='ggskin ggskin_textdiv';
		this._marker_title.ggTextDiv=this._marker_title__text;
		this._marker_title.ggId="marker_title";
		this._marker_title.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._marker_title.ggVisible=false;
		this._marker_title.className='ggskin ggskin_text';
		this._marker_title.ggType='text';
		this._marker_title.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			this.ggTextDiv.style.left=Math.floor(0 + (149-this.ggTextDiv.offsetWidth)/2) + 'px';
		}
		hs ='position:absolute;';
		hs+='left: -60px;';
		hs+='top:  35px;';
		hs+='width: 145px;';
		hs+='height: 17px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._marker_title.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: auto;';
		hs+='height: auto;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.705882);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._marker_title__text.setAttribute('style',hs);
		this._marker_title.ggUpdateText=function() {
			var hs=me.player.userdata.title;
			if (hs!=this.ggText) {
				this.ggText=hs;
				this.ggTextDiv.innerHTML=hs;
			}
		this.ggUpdatePosition();
		}
		this._marker_title.ggUpdateText();
		this._marker_title.appendChild(this._marker_title__text);
		this._markertemplate.appendChild(this._marker_title);
		this._hide_template.appendChild(this._markertemplate);
		this._marker_active=document.createElement('div');
		this._marker_active.ggId="marker_active";
		this._marker_active.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._marker_active.ggVisible=true;
		this._marker_active.className='ggskin ggskin_svg';
		this._marker_active.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 105px;';
		hs+='top:  0px;';
		hs+='width: 31px;';
		hs+='height: 31px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._marker_active.setAttribute('style',hs);
		this._marker_active__img=document.createElement('img');
		this._marker_active__img.className='ggskin ggskin_svg';
		this._marker_active__img.setAttribute('src',basePath + 'images/marker_active.svg');
		this._marker_active__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 31px;height: 31px;-webkit-user-drag:none;');
		this._marker_active__img['ondragstart']=function() { return false; };
		this._marker_active.appendChild(this._marker_active__img);
		this._hide_template.appendChild(this._marker_active);
		this._marker_normal=document.createElement('div');
		this._marker_normal.ggId="marker_normal";
		this._marker_normal.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._marker_normal.ggVisible=true;
		this._marker_normal.className='ggskin ggskin_svg';
		this._marker_normal.ggType='svg';
		hs ='position:absolute;';
		hs+='left: 140px;';
		hs+='top:  0px;';
		hs+='width: 31px;';
		hs+='height: 32px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._marker_normal.setAttribute('style',hs);
		this._marker_normal__img=document.createElement('img');
		this._marker_normal__img.className='ggskin ggskin_svg';
		this._marker_normal__img.setAttribute('src',basePath + 'images/marker_normal.svg');
		this._marker_normal__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 31px;height: 32px;-webkit-user-drag:none;');
		this._marker_normal__img['ondragstart']=function() { return false; };
		this._marker_normal.appendChild(this._marker_normal__img);
		this._hide_template.appendChild(this._marker_normal);
		this._container_1.appendChild(this._hide_template);
		this._image_4=document.createElement('div');
		this._image_4.ggId="Image 4";
		this._image_4.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_4.ggVisible=true;
		this._image_4.className='ggskin ggskin_image';
		this._image_4.ggType='image';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 626px;';
		hs+='height: 250px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		this._image_4.setAttribute('style',hs);
		this._image_4__img=document.createElement('img');
		this._image_4__img.className='ggskin ggskin_image';
		this._image_4__img.setAttribute('src',basePath + 'images/image_4.png');
		this._image_4__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_4__img.className='ggskin ggskin_image';
		this._image_4__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_4__img);
		this._image_4.appendChild(this._image_4__img);
		this._container_1.appendChild(this._image_4);
		this._image_5=document.createElement('div');
		this._image_5.ggId="Image 5";
		this._image_5.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_5.ggVisible=true;
		this._image_5.className='ggskin ggskin_image';
		this._image_5.ggType='image';
		hs ='position:absolute;';
		hs+='left: 508px;';
		hs+='top:  226px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_5.setAttribute('style',hs);
		this._image_5__img=document.createElement('img');
		this._image_5__img.className='ggskin ggskin_image';
		this._image_5__img.setAttribute('src',basePath + 'images/image_5.png');
		this._image_5__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_5__img.className='ggskin ggskin_image';
		this._image_5__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_5__img);
		this._image_5.appendChild(this._image_5__img);
		this._image_5.onclick=function () {
			me.player.openNext("{node8}","");
		}
		this._image_5.onmouseover=function () {
			me.elementMouseOver['image_5']=true;
		}
		this._image_5.onmouseout=function () {
			me._text_1.style[domTransition]='none';
			me._text_1.style.visibility='hidden';
			me._text_1.ggVisible=false;
			me.elementMouseOver['image_5']=false;
		}
		this._image_5.ontouchend=function () {
			me.elementMouseOver['image_5']=false;
		}
		this._container_1.appendChild(this._image_5);
		this._text_1=document.createElement('div');
		this._text_1__text=document.createElement('div');
		this._text_1.className='ggskin ggskin_textdiv';
		this._text_1.ggTextDiv=this._text_1__text;
		this._text_1.ggId="Text 1";
		this._text_1.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_1.ggVisible=false;
		this._text_1.className='ggskin ggskin_text';
		this._text_1.ggType='text';
		hs ='position:absolute;';
		hs+='left: 463px;';
		hs+='top:  252px;';
		hs+='width: 126px;';
		hs+='height: 39px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_1.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 126px;';
		hs+='height: 39px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_1__text.setAttribute('style',hs);
		this._text_1.ggTextDiv.innerHTML="\u041f\u0430\u043d\u043e\u0440\u0430\u043c\u0430 \u043f\u0435\u0440\u0435\u0434 <br\/>\u0437\u0434\u0430\u043d\u0438\u0435\u043c";
		this._text_1.appendChild(this._text_1__text);
		this._container_1.appendChild(this._text_1);
		this._image_6=document.createElement('div');
		this._image_6.ggId="Image 6";
		this._image_6.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_6.ggVisible=true;
		this._image_6.className='ggskin ggskin_image';
		this._image_6.ggType='image';
		hs ='position:absolute;';
		hs+='left: 424px;';
		hs+='top:  218px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_6.setAttribute('style',hs);
		this._image_6__img=document.createElement('img');
		this._image_6__img.className='ggskin ggskin_image';
		this._image_6__img.setAttribute('src',basePath + 'images/image_6.png');
		this._image_6__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_6__img.className='ggskin ggskin_image';
		this._image_6__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_6__img);
		this._image_6.appendChild(this._image_6__img);
		this._image_6.onclick=function () {
			me.player.openNext("{node7}","");
		}
		this._image_6.onmouseover=function () {
			me.elementMouseOver['image_6']=true;
		}
		this._image_6.onmouseout=function () {
			me._text_2.style[domTransition]='none';
			me._text_2.style.visibility='hidden';
			me._text_2.ggVisible=false;
			me.elementMouseOver['image_6']=false;
		}
		this._image_6.ontouchend=function () {
			me.elementMouseOver['image_6']=false;
		}
		this._container_1.appendChild(this._image_6);
		this._text_2=document.createElement('div');
		this._text_2__text=document.createElement('div');
		this._text_2.className='ggskin ggskin_textdiv';
		this._text_2.ggTextDiv=this._text_2__text;
		this._text_2.ggId="Text 2";
		this._text_2.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_2.ggVisible=false;
		this._text_2.className='ggskin ggskin_text';
		this._text_2.ggType='text';
		hs ='position:absolute;';
		hs+='left: 385px;';
		hs+='top:  245px;';
		hs+='width: 115px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_2.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 115px;';
		hs+='height: 21px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: left;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_2__text.setAttribute('style',hs);
		this._text_2.ggTextDiv.innerHTML="1-\u0439 \u044d\u0442\u0430\u0436 \u0410\u0414\u0426-2";
		this._text_2.appendChild(this._text_2__text);
		this._container_1.appendChild(this._text_2);
		this._image_7=document.createElement('div');
		this._image_7.ggId="Image 7";
		this._image_7.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_7.ggVisible=true;
		this._image_7.className='ggskin ggskin_image';
		this._image_7.ggType='image';
		hs ='position:absolute;';
		hs+='left: 466px;';
		hs+='top:  218px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_7.setAttribute('style',hs);
		this._image_7__img=document.createElement('img');
		this._image_7__img.className='ggskin ggskin_image';
		this._image_7__img.setAttribute('src',basePath + 'images/image_7.png');
		this._image_7__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_7__img.className='ggskin ggskin_image';
		this._image_7__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_7__img);
		this._image_7.appendChild(this._image_7__img);
		this._image_7.onclick=function () {
			me.player.openNext("{node9}","");
		}
		this._image_7.onmouseover=function () {
			me.elementMouseOver['image_7']=true;
		}
		this._image_7.onmouseout=function () {
			me._text_3.style[domTransition]='none';
			me._text_3.style.visibility='hidden';
			me._text_3.ggVisible=false;
			me.elementMouseOver['image_7']=false;
		}
		this._image_7.ontouchend=function () {
			me.elementMouseOver['image_7']=false;
		}
		this._container_1.appendChild(this._image_7);
		this._text_3=document.createElement('div');
		this._text_3__text=document.createElement('div');
		this._text_3.className='ggskin ggskin_textdiv';
		this._text_3.ggTextDiv=this._text_3__text;
		this._text_3.ggId="Text 3";
		this._text_3.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_3.ggVisible=false;
		this._text_3.className='ggskin ggskin_text';
		this._text_3.ggType='text';
		hs ='position:absolute;';
		hs+='left: 421px;';
		hs+='top:  246px;';
		hs+='width: 107px;';
		hs+='height: 37px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_3.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 107px;';
		hs+='height: 37px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_3__text.setAttribute('style',hs);
		this._text_3.ggTextDiv.innerHTML="\u041a\u043e\u043d\u0444\u0435\u0440\u0435\u043d\u0446-\u0437\u0430\u043b <br\/>\u043d\u0430 190 \u0447\u0435\u043b";
		this._text_3.appendChild(this._text_3__text);
		this._container_1.appendChild(this._text_3);
		this._image_8=document.createElement('div');
		this._image_8.ggId="Image 8";
		this._image_8.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_8.ggVisible=true;
		this._image_8.className='ggskin ggskin_image';
		this._image_8.ggType='image';
		hs ='position:absolute;';
		hs+='left: 465px;';
		hs+='top:  181px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_8.setAttribute('style',hs);
		this._image_8__img=document.createElement('img');
		this._image_8__img.className='ggskin ggskin_image';
		this._image_8__img.setAttribute('src',basePath + 'images/image_8.png');
		this._image_8__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_8__img.className='ggskin ggskin_image';
		this._image_8__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_8__img);
		this._image_8.appendChild(this._image_8__img);
		this._image_8.onclick=function () {
			me.player.openNext("{node10}","");
		}
		this._image_8.onmouseover=function () {
			me.elementMouseOver['image_8']=true;
		}
		this._image_8.onmouseout=function () {
			me._text_4.style[domTransition]='none';
			me._text_4.style.visibility='hidden';
			me._text_4.ggVisible=false;
			me.elementMouseOver['image_8']=false;
		}
		this._image_8.ontouchend=function () {
			me.elementMouseOver['image_8']=false;
		}
		this._container_1.appendChild(this._image_8);
		this._text_4=document.createElement('div');
		this._text_4__text=document.createElement('div');
		this._text_4.className='ggskin ggskin_textdiv';
		this._text_4.ggTextDiv=this._text_4__text;
		this._text_4.ggId="Text 4";
		this._text_4.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_4.ggVisible=false;
		this._text_4.className='ggskin ggskin_text';
		this._text_4.ggType='text';
		hs ='position:absolute;';
		hs+='left: 424px;';
		hs+='top:  211px;';
		hs+='width: 94px;';
		hs+='height: 36px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_4.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 94px;';
		hs+='height: 36px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_4__text.setAttribute('style',hs);
		this._text_4.ggTextDiv.innerHTML="2-\u043e\u0439 \u044d\u0442\u0430\u0436 <br\/>\u0410\u0414\u0426-2";
		this._text_4.appendChild(this._text_4__text);
		this._container_1.appendChild(this._text_4);
		this._image_9=document.createElement('div');
		this._image_9.ggId="Image 9";
		this._image_9.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_9.ggVisible=true;
		this._image_9.className='ggskin ggskin_image';
		this._image_9.ggType='image';
		hs ='position:absolute;';
		hs+='left: 430px;';
		hs+='top:  181px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_9.setAttribute('style',hs);
		this._image_9__img=document.createElement('img');
		this._image_9__img.className='ggskin ggskin_image';
		this._image_9__img.setAttribute('src',basePath + 'images/image_9.png');
		this._image_9__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_9__img.className='ggskin ggskin_image';
		this._image_9__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_9__img);
		this._image_9.appendChild(this._image_9__img);
		this._image_9.onclick=function () {
			me.player.openNext("{node11}","");
		}
		this._image_9.onmouseover=function () {
			me.elementMouseOver['image_9']=true;
		}
		this._image_9.onmouseout=function () {
			me._text_5.style[domTransition]='none';
			me._text_5.style.visibility='hidden';
			me._text_5.ggVisible=false;
			me.elementMouseOver['image_9']=false;
		}
		this._image_9.ontouchend=function () {
			me.elementMouseOver['image_9']=false;
		}
		this._container_1.appendChild(this._image_9);
		this._text_5=document.createElement('div');
		this._text_5__text=document.createElement('div');
		this._text_5.className='ggskin ggskin_textdiv';
		this._text_5.ggTextDiv=this._text_5__text;
		this._text_5.ggId="Text 5";
		this._text_5.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_5.ggVisible=false;
		this._text_5.className='ggskin ggskin_text';
		this._text_5.ggType='text';
		hs ='position:absolute;';
		hs+='left: 404px;';
		hs+='top:  208px;';
		hs+='width: 67px;';
		hs+='height: 19px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_5.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 67px;';
		hs+='height: 19px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_5__text.setAttribute('style',hs);
		this._text_5.ggTextDiv.innerHTML="\u0421\u0442\u0435\u043d\u0434";
		this._text_5.appendChild(this._text_5__text);
		this._container_1.appendChild(this._text_5);
		this._image_10=document.createElement('div');
		this._image_10.ggId="Image 10";
		this._image_10.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_10.ggVisible=true;
		this._image_10.className='ggskin ggskin_image';
		this._image_10.ggType='image';
		hs ='position:absolute;';
		hs+='left: 465px;';
		hs+='top:  149px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_10.setAttribute('style',hs);
		this._image_10__img=document.createElement('img');
		this._image_10__img.className='ggskin ggskin_image';
		this._image_10__img.setAttribute('src',basePath + 'images/image_10.png');
		this._image_10__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_10__img.className='ggskin ggskin_image';
		this._image_10__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_10__img);
		this._image_10.appendChild(this._image_10__img);
		this._image_10.onclick=function () {
			me.player.openNext("{node12}","");
		}
		this._image_10.onmouseover=function () {
			me.elementMouseOver['image_10']=true;
		}
		this._image_10.onmouseout=function () {
			me._text_6.style[domTransition]='none';
			me._text_6.style.visibility='hidden';
			me._text_6.ggVisible=false;
			me.elementMouseOver['image_10']=false;
		}
		this._image_10.ontouchend=function () {
			me.elementMouseOver['image_10']=false;
		}
		this._container_1.appendChild(this._image_10);
		this._text_6=document.createElement('div');
		this._text_6__text=document.createElement('div');
		this._text_6.className='ggskin ggskin_textdiv';
		this._text_6.ggTextDiv=this._text_6__text;
		this._text_6.ggId="Text 6";
		this._text_6.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_6.ggVisible=false;
		this._text_6.className='ggskin ggskin_text';
		this._text_6.ggType='text';
		hs ='position:absolute;';
		hs+='left: 431px;';
		hs+='top:  176px;';
		hs+='width: 95px;';
		hs+='height: 36px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_6.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 95px;';
		hs+='height: 36px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_6__text.setAttribute('style',hs);
		this._text_6.ggTextDiv.innerHTML="3-\u0439 \u044d\u0442\u0430\u0436<br\/> \u0410\u0414\u0426-2";
		this._text_6.appendChild(this._text_6__text);
		this._container_1.appendChild(this._text_6);
		this._image_11=document.createElement('div');
		this._image_11.ggId="Image 11";
		this._image_11.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_11.ggVisible=true;
		this._image_11.className='ggskin ggskin_image';
		this._image_11.ggType='image';
		hs ='position:absolute;';
		hs+='left: 431px;';
		hs+='top:  149px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_11.setAttribute('style',hs);
		this._image_11__img=document.createElement('img');
		this._image_11__img.className='ggskin ggskin_image';
		this._image_11__img.setAttribute('src',basePath + 'images/image_11.png');
		this._image_11__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_11__img.className='ggskin ggskin_image';
		this._image_11__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_11__img);
		this._image_11.appendChild(this._image_11__img);
		this._image_11.onclick=function () {
			me.player.openNext("{node13}","");
		}
		this._image_11.onmouseover=function () {
			me.elementMouseOver['image_11']=true;
		}
		this._image_11.onmouseout=function () {
			me._text_7.style[domTransition]='none';
			me._text_7.style.visibility='hidden';
			me._text_7.ggVisible=false;
			me.elementMouseOver['image_11']=false;
		}
		this._image_11.ontouchend=function () {
			me.elementMouseOver['image_11']=false;
		}
		this._container_1.appendChild(this._image_11);
		this._text_7=document.createElement('div');
		this._text_7__text=document.createElement('div');
		this._text_7.className='ggskin ggskin_textdiv';
		this._text_7.ggTextDiv=this._text_7__text;
		this._text_7.ggId="Text 7";
		this._text_7.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_7.ggVisible=false;
		this._text_7.className='ggskin ggskin_text';
		this._text_7.ggType='text';
		hs ='position:absolute;';
		hs+='left: 401px;';
		hs+='top:  176px;';
		hs+='width: 62px;';
		hs+='height: 19px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_7.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 62px;';
		hs+='height: 19px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_7__text.setAttribute('style',hs);
		this._text_7.ggTextDiv.innerHTML="\u0426\u041e\u0414";
		this._text_7.appendChild(this._text_7__text);
		this._container_1.appendChild(this._text_7);
		this._image_12=document.createElement('div');
		this._image_12.ggId="Image 12";
		this._image_12.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_12.ggVisible=true;
		this._image_12.className='ggskin ggskin_image';
		this._image_12.ggType='image';
		hs ='position:absolute;';
		hs+='left: 430px;';
		hs+='top:  81px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_12.setAttribute('style',hs);
		this._image_12__img=document.createElement('img');
		this._image_12__img.className='ggskin ggskin_image';
		this._image_12__img.setAttribute('src',basePath + 'images/image_12.png');
		this._image_12__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_12__img.className='ggskin ggskin_image';
		this._image_12__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_12__img);
		this._image_12.appendChild(this._image_12__img);
		this._image_12.onclick=function () {
			me.player.openNext("{node14}","");
		}
		this._image_12.onmouseover=function () {
			me.elementMouseOver['image_12']=true;
		}
		this._image_12.onmouseout=function () {
			me._text_8.style[domTransition]='none';
			me._text_8.style.visibility='hidden';
			me._text_8.ggVisible=false;
			me.elementMouseOver['image_12']=false;
		}
		this._image_12.ontouchend=function () {
			me.elementMouseOver['image_12']=false;
		}
		this._container_1.appendChild(this._image_12);
		this._text_8=document.createElement('div');
		this._text_8__text=document.createElement('div');
		this._text_8.className='ggskin ggskin_textdiv';
		this._text_8.ggTextDiv=this._text_8__text;
		this._text_8.ggId="Text 8";
		this._text_8.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_8.ggVisible=false;
		this._text_8.className='ggskin ggskin_text';
		this._text_8.ggType='text';
		hs ='position:absolute;';
		hs+='left: 423px;';
		hs+='top:  107px;';
		hs+='width: 106px;';
		hs+='height: 35px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_8.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 106px;';
		hs+='height: 35px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_8__text.setAttribute('style',hs);
		this._text_8.ggTextDiv.innerHTML="\u0417\u0430\u043b \u0441\u043e\u0432\u0435\u0449\u0430\u043d\u0438\u0439<br\/> \u043a\u0430\u0431. 605";
		this._text_8.appendChild(this._text_8__text);
		this._container_1.appendChild(this._text_8);
		this._image_13=document.createElement('div');
		this._image_13.ggId="Image 13";
		this._image_13.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_13.ggVisible=true;
		this._image_13.className='ggskin ggskin_image';
		this._image_13.ggType='image';
		hs ='position:absolute;';
		hs+='left: 465px;';
		hs+='top:  52px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_13.setAttribute('style',hs);
		this._image_13__img=document.createElement('img');
		this._image_13__img.className='ggskin ggskin_image';
		this._image_13__img.setAttribute('src',basePath + 'images/image_13.png');
		this._image_13__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_13__img.className='ggskin ggskin_image';
		this._image_13__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_13__img);
		this._image_13.appendChild(this._image_13__img);
		this._image_13.onclick=function () {
			me.player.openNext("{node15}","");
		}
		this._image_13.onmouseover=function () {
			me.elementMouseOver['image_13']=true;
		}
		this._image_13.onmouseout=function () {
			me._text_9.style[domTransition]='none';
			me._text_9.style.visibility='hidden';
			me._text_9.ggVisible=false;
			me.elementMouseOver['image_13']=false;
		}
		this._image_13.ontouchend=function () {
			me.elementMouseOver['image_13']=false;
		}
		this._container_1.appendChild(this._image_13);
		this._text_9=document.createElement('div');
		this._text_9__text=document.createElement('div');
		this._text_9.className='ggskin ggskin_textdiv';
		this._text_9.ggTextDiv=this._text_9__text;
		this._text_9.ggId="Text 9";
		this._text_9.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_9.ggVisible=false;
		this._text_9.className='ggskin ggskin_text';
		this._text_9.ggType='text';
		hs ='position:absolute;';
		hs+='left: 424px;';
		hs+='top:  75px;';
		hs+='width: 102px;';
		hs+='height: 20px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_9.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 102px;';
		hs+='height: 20px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_9__text.setAttribute('style',hs);
		this._text_9.ggTextDiv.innerHTML="7-\u043e\u0439 \u044d\u0442\u0430\u0436";
		this._text_9.appendChild(this._text_9__text);
		this._container_1.appendChild(this._text_9);
		this._image_14=document.createElement('div');
		this._image_14.ggId="Image 14";
		this._image_14.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_14.ggVisible=true;
		this._image_14.className='ggskin ggskin_image';
		this._image_14.ggType='image';
		hs ='position:absolute;';
		hs+='left: 430px;';
		hs+='top:  51px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_14.setAttribute('style',hs);
		this._image_14__img=document.createElement('img');
		this._image_14__img.className='ggskin ggskin_image';
		this._image_14__img.setAttribute('src',basePath + 'images/image_14.png');
		this._image_14__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_14__img.className='ggskin ggskin_image';
		this._image_14__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_14__img);
		this._image_14.appendChild(this._image_14__img);
		this._image_14.onclick=function () {
			me.player.openNext("{node16}","");
		}
		this._image_14.onmouseover=function () {
			me.elementMouseOver['image_14']=true;
		}
		this._image_14.onmouseout=function () {
			me._text_10.style[domTransition]='none';
			me._text_10.style.visibility='hidden';
			me._text_10.ggVisible=false;
			me.elementMouseOver['image_14']=false;
		}
		this._image_14.ontouchend=function () {
			me.elementMouseOver['image_14']=false;
		}
		this._container_1.appendChild(this._image_14);
		this._text_10=document.createElement('div');
		this._text_10__text=document.createElement('div');
		this._text_10.className='ggskin ggskin_textdiv';
		this._text_10.ggTextDiv=this._text_10__text;
		this._text_10.ggId="Text 10";
		this._text_10.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_10.ggVisible=false;
		this._text_10.className='ggskin ggskin_text';
		this._text_10.ggType='text';
		hs ='position:absolute;';
		hs+='left: 382px;';
		hs+='top:  74px;';
		hs+='width: 113px;';
		hs+='height: 40px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_10.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 113px;';
		hs+='height: 40px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_10__text.setAttribute('style',hs);
		this._text_10.ggTextDiv.innerHTML="\u041f\u0440\u0438\u0451\u043c\u043d\u0430\u044f <br\/>\u0433\u0435\u043d. \u0434\u0438\u0440\u0435\u043a\u0442\u043e\u0440\u0430";
		this._text_10.appendChild(this._text_10__text);
		this._container_1.appendChild(this._text_10);
		this._image_15=document.createElement('div');
		this._image_15.ggId="Image 15";
		this._image_15.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_15.ggVisible=true;
		this._image_15.className='ggskin ggskin_image';
		this._image_15.ggType='image';
		hs ='position:absolute;';
		hs+='left: 240px;';
		hs+='top:  179px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_15.setAttribute('style',hs);
		this._image_15__img=document.createElement('img');
		this._image_15__img.className='ggskin ggskin_image';
		this._image_15__img.setAttribute('src',basePath + 'images/image_15.png');
		this._image_15__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_15__img.className='ggskin ggskin_image';
		this._image_15__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_15__img);
		this._image_15.appendChild(this._image_15__img);
		this._image_15.onclick=function () {
			me.player.openNext("{node19}","");
		}
		this._image_15.onmouseover=function () {
			me.elementMouseOver['image_15']=true;
		}
		this._image_15.onmouseout=function () {
			me._text_11.style[domTransition]='none';
			me._text_11.style.visibility='hidden';
			me._text_11.ggVisible=false;
			me.elementMouseOver['image_15']=false;
		}
		this._image_15.ontouchend=function () {
			me.elementMouseOver['image_15']=false;
		}
		this._container_1.appendChild(this._image_15);
		this._text_11=document.createElement('div');
		this._text_11__text=document.createElement('div');
		this._text_11.className='ggskin ggskin_textdiv';
		this._text_11.ggTextDiv=this._text_11__text;
		this._text_11.ggId="Text 11";
		this._text_11.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_11.ggVisible=false;
		this._text_11.className='ggskin ggskin_text';
		this._text_11.ggType='text';
		hs ='position:absolute;';
		hs+='left: 175px;';
		hs+='top:  201px;';
		hs+='width: 159px;';
		hs+='height: 36px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_11.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 159px;';
		hs+='height: 36px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_11__text.setAttribute('style',hs);
		this._text_11.ggTextDiv.innerHTML="\u041c\u0430\u043b\u044b\u0439 \u0437\u0430\u043b \u0441\u043e\u0432\u0435\u0449\u0430\u043d\u0438\u0439 <br\/>\u043a\u0430\u0431. 202";
		this._text_11.appendChild(this._text_11__text);
		this._container_1.appendChild(this._text_11);
		this._image_16=document.createElement('div');
		this._image_16.ggId="Image 16";
		this._image_16.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_16.ggVisible=true;
		this._image_16.className='ggskin ggskin_image';
		this._image_16.ggType='image';
		hs ='position:absolute;';
		hs+='left: 187px;';
		hs+='top:  178px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_16.setAttribute('style',hs);
		this._image_16__img=document.createElement('img');
		this._image_16__img.className='ggskin ggskin_image';
		this._image_16__img.setAttribute('src',basePath + 'images/image_16.png');
		this._image_16__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_16__img.className='ggskin ggskin_image';
		this._image_16__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_16__img);
		this._image_16.appendChild(this._image_16__img);
		this._image_16.onclick=function () {
			me.player.openNext("{node18}","");
		}
		this._image_16.onmouseover=function () {
			me.elementMouseOver['image_16']=true;
		}
		this._image_16.onmouseout=function () {
			me._text_12.style[domTransition]='none';
			me._text_12.style.visibility='hidden';
			me._text_12.ggVisible=false;
			me.elementMouseOver['image_16']=false;
		}
		this._image_16.ontouchend=function () {
			me.elementMouseOver['image_16']=false;
		}
		this._container_1.appendChild(this._image_16);
		this._image_17=document.createElement('div');
		this._image_17.ggId="Image 17";
		this._image_17.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_17.ggVisible=true;
		this._image_17.className='ggskin ggskin_image';
		this._image_17.ggType='image';
		hs ='position:absolute;';
		hs+='left: 154px;';
		hs+='top:  217px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_17.setAttribute('style',hs);
		this._image_17__img=document.createElement('img');
		this._image_17__img.className='ggskin ggskin_image';
		this._image_17__img.setAttribute('src',basePath + 'images/image_17.png');
		this._image_17__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_17__img.className='ggskin ggskin_image';
		this._image_17__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_17__img);
		this._image_17.appendChild(this._image_17__img);
		this._image_17.onclick=function () {
			me.player.openNext("{node17}","");
		}
		this._image_17.onmouseover=function () {
			me.elementMouseOver['image_17']=true;
		}
		this._image_17.onmouseout=function () {
			me._text_13.style[domTransition]='none';
			me._text_13.style.visibility='hidden';
			me._text_13.ggVisible=false;
			me.elementMouseOver['image_17']=false;
		}
		this._image_17.ontouchend=function () {
			me.elementMouseOver['image_17']=false;
		}
		this._container_1.appendChild(this._image_17);
		this._text_13=document.createElement('div');
		this._text_13__text=document.createElement('div');
		this._text_13.className='ggskin ggskin_textdiv';
		this._text_13.ggTextDiv=this._text_13__text;
		this._text_13.ggId="Text 13";
		this._text_13.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_13.ggVisible=false;
		this._text_13.className='ggskin ggskin_text';
		this._text_13.ggType='text';
		hs ='position:absolute;';
		hs+='left: 102px;';
		hs+='top:  237px;';
		hs+='width: 117px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_13.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 117px;';
		hs+='height: 21px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_13__text.setAttribute('style',hs);
		this._text_13.ggTextDiv.innerHTML="1-\u0439 \u044d\u0442\u0430\u0436 \u0410\u0414\u0426-1";
		this._text_13.appendChild(this._text_13__text);
		this._container_1.appendChild(this._text_13);
		this._text_14=document.createElement('div');
		this._text_14__text=document.createElement('div');
		this._text_14.className='ggskin ggskin_textdiv';
		this._text_14.ggTextDiv=this._text_14__text;
		this._text_14.ggId="Text 14";
		this._text_14.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_14.ggVisible=false;
		this._text_14.className='ggskin ggskin_text';
		this._text_14.ggType='text';
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  241px;';
		hs+='width: 74px;';
		hs+='height: 20px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_14.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 74px;';
		hs+='height: 20px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_14__text.setAttribute('style',hs);
		this._text_14.ggTextDiv.innerHTML="\u0421\u0442\u043e\u043b\u043e\u0432\u0430\u044f";
		this._text_14.appendChild(this._text_14__text);
		this._container_1.appendChild(this._text_14);
		this._image_19=document.createElement('div');
		this._image_19.ggId="Image 19";
		this._image_19.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_19.ggVisible=true;
		this._image_19.className='ggskin ggskin_image';
		this._image_19.ggType='image';
		hs ='position:absolute;';
		hs+='left: 75px;';
		hs+='top:  217px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_19.setAttribute('style',hs);
		this._image_19__img=document.createElement('img');
		this._image_19__img.className='ggskin ggskin_image';
		this._image_19__img.setAttribute('src',basePath + 'images/image_19.png');
		this._image_19__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_19__img.className='ggskin ggskin_image';
		this._image_19__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_19__img);
		this._image_19.appendChild(this._image_19__img);
		this._image_19.onclick=function () {
			me.player.openNext("{node20}","");
		}
		this._image_19.onmouseover=function () {
			me.elementMouseOver['image_19']=true;
		}
		this._image_19.onmouseout=function () {
			me._text_15.style[domTransition]='none';
			me._text_15.style.visibility='hidden';
			me._text_15.ggVisible=false;
			me.elementMouseOver['image_19']=false;
		}
		this._image_19.ontouchend=function () {
			me.elementMouseOver['image_19']=false;
		}
		this._container_1.appendChild(this._image_19);
		this._text_15=document.createElement('div');
		this._text_15__text=document.createElement('div');
		this._text_15.className='ggskin ggskin_textdiv';
		this._text_15.ggTextDiv=this._text_15__text;
		this._text_15.ggId="Text 15";
		this._text_15.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_15.ggVisible=false;
		this._text_15.className='ggskin ggskin_text';
		this._text_15.ggType='text';
		hs ='position:absolute;';
		hs+='left: 50px;';
		hs+='top:  239px;';
		hs+='width: 74px;';
		hs+='height: 37px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_15.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 74px;';
		hs+='height: 37px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_15__text.setAttribute('style',hs);
		this._text_15.ggTextDiv.innerHTML="VIP \u0437\u0430\u043b <br\/>\u043a\u0430\u0431. 106";
		this._text_15.appendChild(this._text_15__text);
		this._container_1.appendChild(this._text_15);
		this._image_18=document.createElement('div');
		this._image_18.ggId="Image 18";
		this._image_18.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_18.ggVisible=true;
		this._image_18.className='ggskin ggskin_image';
		this._image_18.ggType='image';
		hs ='position:absolute;';
		hs+='left: 25px;';
		hs+='top:  217px;';
		hs+='width: 21px;';
		hs+='height: 21px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_18.setAttribute('style',hs);
		this._image_18__img=document.createElement('img');
		this._image_18__img.className='ggskin ggskin_image';
		this._image_18__img.setAttribute('src',basePath + 'images/image_18.png');
		this._image_18__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_18__img.className='ggskin ggskin_image';
		this._image_18__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_18__img);
		this._image_18.appendChild(this._image_18__img);
		this._image_18.onclick=function () {
			me.player.openNext("{node21}","");
		}
		this._image_18.onmouseover=function () {
			me.elementMouseOver['image_18']=true;
		}
		this._image_18.onmouseout=function () {
			me._text_14.style[domTransition]='none';
			me._text_14.style.visibility='hidden';
			me._text_14.ggVisible=false;
			me.elementMouseOver['image_18']=false;
		}
		this._image_18.ontouchend=function () {
			me.elementMouseOver['image_18']=false;
		}
		this._container_1.appendChild(this._image_18);
		this._text_12=document.createElement('div');
		this._text_12__text=document.createElement('div');
		this._text_12.className='ggskin ggskin_textdiv';
		this._text_12.ggTextDiv=this._text_12__text;
		this._text_12.ggId="Text 12";
		this._text_12.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._text_12.ggVisible=false;
		this._text_12.className='ggskin ggskin_text';
		this._text_12.ggType='text';
		hs ='position:absolute;';
		hs+='left: 153px;';
		hs+='top:  206px;';
		hs+='width: 90px;';
		hs+='height: 35px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._text_12.setAttribute('style',hs);
		hs ='position:absolute;';
		hs+='left: 0px;';
		hs+='top:  0px;';
		hs+='width: 90px;';
		hs+='height: 35px;';
		hs+='background: #ffffff;';
		hs+='background: rgba(255,255,255,0.745098);';
		hs+='border: 1px solid #000000;';
		hs+='border-radius: 5px;';
		hs+=cssPrefix + 'border-radius: 5px;';
		hs+='color: #000000;';
		hs+='text-align: center;';
		hs+='white-space: nowrap;';
		hs+='padding: 1px 2px 1px 2px;';
		hs+='overflow: hidden;';
		this._text_12__text.setAttribute('style',hs);
		this._text_12.ggTextDiv.innerHTML="2-\u043e\u0439 \u044d\u0442\u0430\u0436 <br\/>\u0410\u0414\u0426-1";
		this._text_12.appendChild(this._text_12__text);
		this._container_1.appendChild(this._text_12);
		this.divSkin.appendChild(this._container_1);
		this._image_21=document.createElement('div');
		this._image_21.ggId="Image 21";
		this._image_21.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_21.ggVisible=false;
		this._image_21.className='ggskin ggskin_image';
		this._image_21.ggType='image';
		this._image_21.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-443 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-188 + h/2) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: -443px;';
		hs+='top:  -188px;';
		hs+='width: 900px;';
		hs+='height: 362px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: hidden;';
		this._image_21.setAttribute('style',hs);
		this._image_21__img=document.createElement('img');
		this._image_21__img.className='ggskin ggskin_image';
		this._image_21__img.setAttribute('src',basePath + 'images/image_21.png');
		this._image_21__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_21__img.className='ggskin ggskin_image';
		this._image_21__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_21__img);
		this._image_21.appendChild(this._image_21__img);
		this.divSkin.appendChild(this._image_21);
		this._image_3=document.createElement('div');
		this._image_3.ggId="Image 3";
		this._image_3.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
		this._image_3.ggVisible=true;
		this._image_3.className='ggskin ggskin_image';
		this._image_3.ggType='image';
		this._image_3.ggUpdatePosition=function() {
			this.style[domTransition]='none';
			if (this.parentNode) {
				w=this.parentNode.offsetWidth;
				this.style.left=Math.floor(-434 + w/2) + 'px';
				h=this.parentNode.offsetHeight;
				this.style.top=Math.floor(-72 + h) + 'px';
			}
		}
		hs ='position:absolute;';
		hs+='left: -434px;';
		hs+='top:  -72px;';
		hs+='width: 255px;';
		hs+='height: 40px;';
		hs+=cssPrefix + 'transform-origin: 50% 50%;';
		hs+='visibility: inherit;';
		hs+='cursor: pointer;';
		this._image_3.setAttribute('style',hs);
		this._image_3__img=document.createElement('img');
		this._image_3__img.className='ggskin ggskin_image';
		this._image_3__img.setAttribute('src',basePath + 'images/image_3.png');
		this._image_3__img.setAttribute('style','position: absolute;top: 0px;left: 0px;-webkit-user-drag:none;');
		this._image_3__img.className='ggskin ggskin_image';
		this._image_3__img['ondragstart']=function() { return false; };
		me.player.checkLoaded.push(this._image_3__img);
		this._image_3.appendChild(this._image_3__img);
		this._image_3.onclick=function () {
			me.player.openUrl("\/virtualnyy-tur\/","_parent");
		}
		this.divSkin.appendChild(this._image_3);
		this._markertemplate__normal=this._marker_normal.cloneNode(true);
		this._markertemplate__normal.style.visibility='inherit';
		this._markertemplate__normal.style.left=0;
		this._markertemplate__normal.style.top=0;
		this._markertemplate.ggMarkerNormal=this._markertemplate__normal;
		this._markertemplate__active=this._marker_active.cloneNode(true);
		this._markertemplate__active.style.visibility='hidden';
		this._markertemplate__active.style.left=0;
		this._markertemplate__active.style.top=0;
		this._markertemplate.ggMarkerActive=this._markertemplate__active;
		if (this._markertemplate.firstChild) {
			this._markertemplate.insertBefore(this._markertemplate__active,this._markertemplate.firstChild);
		} else {
			this._markertemplate.appendChild(this._markertemplate__active);
		}
		if (this._markertemplate.firstChild) {
			this._markertemplate.insertBefore(this._markertemplate__normal,this._markertemplate.firstChild);
		} else {
			this._markertemplate.appendChild(this._markertemplate__normal);
		}
		this.divSkin.ggUpdateSize=function(w,h) {
			me.updateSize(me.divSkin);
		}
		this.divSkin.ggViewerInit=function() {
		}
		this.divSkin.ggLoaded=function() {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility='hidden';
			me._loading.ggVisible=false;
		}
		this.divSkin.ggReLoaded=function() {
			me._loading.style[domTransition]='none';
			me._loading.style.visibility='inherit';
			me._loading.ggVisible=true;
		}
		this.divSkin.ggLoadedLevels=function() {
		}
		this.divSkin.ggReLoadedLevels=function() {
		}
		this.divSkin.ggEnterFullscreen=function() {
		}
		this.divSkin.ggExitFullscreen=function() {
		}
		this.skinTimerEvent();
	};
	this.hotspotProxyClick=function(id) {
	}
	this.hotspotProxyOver=function(id) {
	}
	this.hotspotProxyOut=function(id) {
	}
	this.changeActiveNode=function(id) {
		var newMarker=new Array();
		var i,j;
		var tags=me.player.userdata.tags;
		for (i=0;i<nodeMarker.length;i++) {
			var match=false;
			if ((nodeMarker[i].ggMarkerNodeId==id) && (id!='')) match=true;
			for(j=0;j<tags.length;j++) {
				if (nodeMarker[i].ggMarkerNodeId==tags[j]) match=true;
			}
			if (match) {
				newMarker.push(nodeMarker[i]);
			}
		}
		for(i=0;i<activeNodeMarker.length;i++) {
			if (newMarker.indexOf(activeNodeMarker[i])<0) {
				if (activeNodeMarker[i].ggMarkerNormal) {
					activeNodeMarker[i].ggMarkerNormal.style.visibility='inherit';
				}
				if (activeNodeMarker[i].ggMarkerActive) {
					activeNodeMarker[i].ggMarkerActive.style.visibility='hidden';
				}
				if (activeNodeMarker[i].ggDeactivate) {
					activeNodeMarker[i].ggDeactivate();
				}
			}
		}
		for(i=0;i<newMarker.length;i++) {
			if (activeNodeMarker.indexOf(newMarker[i])<0) {
				if (newMarker[i].ggMarkerNormal) {
					newMarker[i].ggMarkerNormal.style.visibility='hidden';
				}
				if (newMarker[i].ggMarkerActive) {
					newMarker[i].ggMarkerActive.style.visibility='inherit';
				}
				if (newMarker[i].ggActivate) {
					newMarker[i].ggActivate();
				}
			}
		}
		activeNodeMarker=newMarker;
	}
	this.skinTimerEvent=function() {
		setTimeout(function() { me.skinTimerEvent(); }, 10);
		if (me.elementMouseDown['up']) {
			me.player.changeTiltLog(1,true);
		}
		if (me.elementMouseDown['down']) {
			me.player.changeTiltLog(-1,true);
		}
		if (me.elementMouseDown['left']) {
			me.player.changePanLog(1,true);
		}
		if (me.elementMouseDown['right']) {
			me.player.changePanLog(-1,true);
		}
		if (me.elementMouseDown['zoomin']) {
			me.player.changeFovLog(-1,true);
		}
		if (me.elementMouseDown['zoomout']) {
			me.player.changeFovLog(1,true);
		}
		this._loadingtext.ggUpdateText();
		var hs='';
		if (me._loadingbar.ggParameter) {
			hs+=parameterToTransform(me._loadingbar.ggParameter) + ' ';
		}
		hs+='scale(' + (1 * me.player.getPercentLoaded() + 0) + ',1.0) ';
		me._loadingbar.style[domTransform]=hs;
		this._title.ggUpdateText();
		this._description.ggUpdateText();
		this._author.ggUpdateText();
		this._datetime.ggUpdateText();
		this._copyright.ggUpdateText();
		this._marker_title.ggUpdateText();
		if (me.elementMouseOver['image_5']) {
			me._text_1.style[domTransition]='none';
			me._text_1.style.visibility='inherit';
			me._text_1.ggVisible=true;
		}
		if (me.elementMouseOver['image_6']) {
			me._text_2.style[domTransition]='none';
			me._text_2.style.visibility='inherit';
			me._text_2.ggVisible=true;
		}
		if (me.elementMouseOver['image_7']) {
			me._text_3.style[domTransition]='none';
			me._text_3.style.visibility='inherit';
			me._text_3.ggVisible=true;
		}
		if (me.elementMouseOver['image_8']) {
			me._text_4.style[domTransition]='none';
			me._text_4.style.visibility='inherit';
			me._text_4.ggVisible=true;
		}
		if (me.elementMouseOver['image_9']) {
			me._text_5.style[domTransition]='none';
			me._text_5.style.visibility='inherit';
			me._text_5.ggVisible=true;
		}
		if (me.elementMouseOver['image_10']) {
			me._text_6.style[domTransition]='none';
			me._text_6.style.visibility='inherit';
			me._text_6.ggVisible=true;
		}
		if (me.elementMouseOver['image_11']) {
			me._text_7.style[domTransition]='none';
			me._text_7.style.visibility='inherit';
			me._text_7.ggVisible=true;
		}
		if (me.elementMouseOver['image_12']) {
			me._text_8.style[domTransition]='none';
			me._text_8.style.visibility='inherit';
			me._text_8.ggVisible=true;
		}
		if (me.elementMouseOver['image_13']) {
			me._text_9.style[domTransition]='none';
			me._text_9.style.visibility='inherit';
			me._text_9.ggVisible=true;
		}
		if (me.elementMouseOver['image_14']) {
			me._text_10.style[domTransition]='none';
			me._text_10.style.visibility='inherit';
			me._text_10.ggVisible=true;
		}
		if (me.elementMouseOver['image_15']) {
			me._text_11.style[domTransition]='none';
			me._text_11.style.visibility='inherit';
			me._text_11.ggVisible=true;
		}
		if (me.elementMouseOver['image_16']) {
			me._text_12.style[domTransition]='none';
			me._text_12.style.visibility='inherit';
			me._text_12.ggVisible=true;
		}
		if (me.elementMouseOver['image_17']) {
			me._text_13.style[domTransition]='none';
			me._text_13.style.visibility='inherit';
			me._text_13.ggVisible=true;
		}
		if (me.elementMouseOver['image_19']) {
			me._text_15.style[domTransition]='none';
			me._text_15.style.visibility='inherit';
			me._text_15.ggVisible=true;
		}
		if (me.elementMouseOver['image_18']) {
			me._text_14.style[domTransition]='none';
			me._text_14.style.visibility='inherit';
			me._text_14.ggVisible=true;
		}
	};
	function SkinHotspotClass(skinObj,hotspot) {
		var me=this;
		var flag=false;
		this.player=skinObj.player;
		this.skin=skinObj;
		this.hotspot=hotspot;
		this.elementMouseDown=new Array();
		this.elementMouseOver=new Array();
		this.__div=document.createElement('div');
		this.__div.setAttribute('style','position:absolute; left:0px;top:0px;visibility: inherit;');
		
		this.findElements=function(id,regex) {
			return me.skin.findElements(id,regex);
		}
		
		{
			this.__div=document.createElement('div');
			this.__div.ggId="hotspot";
			this.__div.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this.__div.ggVisible=true;
			this.__div.className='ggskin ggskin_hotspot';
			this.__div.ggType='hotspot';
			hs ='position:absolute;';
			hs+='left: 350px;';
			hs+='top:  20px;';
			hs+='width: 5px;';
			hs+='height: 5px;';
			hs+=cssPrefix + 'transform-origin: 50% 50%;';
			hs+='visibility: inherit;';
			this.__div.setAttribute('style',hs);
			this.__div.onclick=function () {
				me.player.openUrl(me.hotspot.url,me.hotspot.target);
				me.skin.hotspotProxyClick(me.hotspot.id);
			}
			this.__div.onmouseover=function () {
				me.player.hotspot=me.hotspot;
				me._hstext.style[domTransition]='none';
				me._hstext.style.visibility='inherit';
				me._hstext.ggVisible=true;
				me.skin.hotspotProxyOver(me.hotspot.id);
			}
			this.__div.onmouseout=function () {
				me.player.hotspot=me.player.emptyHotspot;
				me._hstext.style[domTransition]='none';
				me._hstext.style.visibility='hidden';
				me._hstext.ggVisible=false;
				me.skin.hotspotProxyOut(me.hotspot.id);
			}
			this._hsimage=document.createElement('div');
			this._hsimage.ggId="hsimage";
			this._hsimage.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hsimage.ggVisible=true;
			this._hsimage.className='ggskin ggskin_svg';
			this._hsimage.ggType='svg';
			hs ='position:absolute;';
			hs+='left: -16px;';
			hs+='top:  -16px;';
			hs+='width: 32px;';
			hs+='height: 32px;';
			hs+=cssPrefix + 'transform-origin: 50% 50%;';
			hs+='visibility: inherit;';
			hs+='cursor: pointer;';
			this._hsimage.setAttribute('style',hs);
			this._hsimage__img=document.createElement('img');
			this._hsimage__img.className='ggskin ggskin_svg';
			this._hsimage__img.setAttribute('src',basePath + 'images/hsimage.svg');
			this._hsimage__img.setAttribute('style','position: absolute;top: 0px;left: 0px;width: 32px;height: 32px;-webkit-user-drag:none;');
			this._hsimage__img['ondragstart']=function() { return false; };
			this._hsimage.appendChild(this._hsimage__img);
			this.__div.appendChild(this._hsimage);
			this._hstext=document.createElement('div');
			this._hstext__text=document.createElement('div');
			this._hstext.className='ggskin ggskin_textdiv';
			this._hstext.ggTextDiv=this._hstext__text;
			this._hstext.ggId="hstext";
			this._hstext.ggParameter={ rx:0,ry:0,a:0,sx:1,sy:1 };
			this._hstext.ggVisible=false;
			this._hstext.className='ggskin ggskin_text';
			this._hstext.ggType='text';
			this._hstext.ggUpdatePosition=function() {
				this.style[domTransition]='none';
				this.ggTextDiv.style.left=Math.floor(0 + (99-this.ggTextDiv.offsetWidth)/2) + 'px';
			}
			hs ='position:absolute;';
			hs+='left: -50px;';
			hs+='top:  20px;';
			hs+='width: 95px;';
			hs+='height: 17px;';
			hs+=cssPrefix + 'transform-origin: 50% 50%;';
			hs+='visibility: hidden;';
			this._hstext.setAttribute('style',hs);
			hs ='position:absolute;';
			hs+='left: 0px;';
			hs+='top:  0px;';
			hs+='width: auto;';
			hs+='height: auto;';
			hs+='background: #ffffff;';
			hs+='background: rgba(255,255,255,0.705882);';
			hs+='border: 1px solid #000000;';
			hs+='border-radius: 5px;';
			hs+=cssPrefix + 'border-radius: 5px;';
			hs+='color: #000000;';
			hs+='text-align: center;';
			hs+='white-space: nowrap;';
			hs+='padding: 1px 2px 1px 2px;';
			hs+='overflow: hidden;';
			this._hstext__text.setAttribute('style',hs);
			this._hstext.ggTextDiv.innerHTML=me.hotspot.title;
			this._hstext.appendChild(this._hstext__text);
			this.__div.appendChild(this._hstext);
		}
	};
	this.addSkinHotspot=function(hotspot) {
		return new SkinHotspotClass(me,hotspot);
	}
	this.addSkin();
};