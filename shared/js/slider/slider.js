/*
 * technikum29.de | javscripts: slider
 * 
 * This is a lightweight slider implementation originally from
 * http://www.arantius.com/article/lightweight+javascript+slider+control
 * (2006 Anthony Lieuallen).
 * It has been improved a lot to fully implement the requirements of
 * technikum29.
 * 
 * FEATURES of the slider + player extension:
 *
 * * basic features: Can be used as simple slider in a user defined
 *   range and with an user defined call back function.
 * * There can be as much sliders on your page as you want.
 * * player features: The player imitates some kind of media player
 *   where the slider is the actual position in the played file.
 *   Principally, it's a highly configurable extension that simply
 *   increases/decreases your slider value on a regular basis.
 *
 * This script uses advanced DOM technologies like they are typical
 * for huge javascript libraries like prototype. Anyway, it's very
 * small for it's features.
 * 
 * This script is used for the Telefunken T40W page.
 *
 * (c) 2009 Sven Koeppel
 * Released under the public domain.
 */

// add event function from http://www.dynarch.com/projects/calendar/
function addAnEvent(el, evname, func) {
    if (el.attachEvent) { // IE
        el.attachEvent("on" + evname, func);
    } else if (el.addEventListener) { // Gecko / W3C
        el.addEventListener(evname, func, true);
    } else {
        el["on" + evname] = func;
    }
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function drawSliderByVal(slider) {
	var knob=slider.getElementsByTagName('img')[0];
	var p=(slider.val-slider.min)/(slider.max-slider.min);
	var x=(slider.scrollWidth-30)*p;
	knob.style.left=x+"px";
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function setSliderByClientX(slider, clientX) {
	var p=(clientX-slider.offsetLeft-15)/(slider.scrollWidth-30);
	slider.val=(slider.max-slider.min)*p + slider.min;
	if (slider.val>slider.max) slider.val=slider.max;
	if (slider.val<slider.min) slider.val=slider.min;

	drawSliderByVal(slider);
	slider.onchange(slider.val, slider.num);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function sliderClick(e) {
	var el=sliderFromEvent(e);
	if (!el) return;

	setSliderByClientX(el, e.clientX);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function sliderMouseMove(e) {
	var el=sliderFromEvent(e);
	if (!el) return;
	if (activeSlider<0) return;

	setSliderByClientX(el, e.clientX);
	stopEvent(e);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function sliderFromEvent(e) {
	if (!e && window.event) e=window.event;
	if (!e) return false;

	var el;
	if (e.target) el=e.target;
	if (e.srcElement) el=e.srcElement;

	if (!el.id || !el.id.match(/slider\d+/)) el=el.parentNode;
	if (!el) return false;
	if (!el.id || !el.id.match(/slider\d+/)) return false;

	return el;
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/**
 * function attachSliderEvents: Called at window onload, parses
 * DOM tree to get slider widgets and setup events for mouse
 * capturing. This will also setup the player button/extension.
 **/
function attachSliderEvents() {
	var divs=document.getElementsByTagName('div');
	var divNum, playerButton;
	for(var i=0; i<divs.length; i++) {
		if (divNum=divs[i].id.match(/\bslider(\d+)\b/)) {
			divNum=parseInt(divNum[1]);
			// copy initial properties
			for(var key in slider[divNum]) {
				divs[i][key] = slider[divNum][key];
			}
			divs[i].num = divNum;

			// and make sure the display matches
			drawSliderByVal(divs[i]);
			divs[i].onchange(divs[i].val, divNum);

			if(playerButton=document.getElementById('slider-button'+divNum)) {
				divs[i].isPlayable = true;
				// announce them to each other
				divs[i].playerButton = playerButton;
				playerButton.slider = divs[i];
				// setup button
				setPlayerLabel(divs[i]);
				addAnEvent(playerButton, 'click', function(e){
					togglePlayer(this.slider);
				});
				// auto start support
				if(divs[i].playerAutoStart)
					startPlayer(divs[i]);
			} else {
				divs[i].isPlayable = false;
			}

			addAnEvent(divs[i], 'mousedown', function(e){
				sliderClick(e);
				var el=sliderFromEvent(e);
				if (!el) return;
				activeSlider=el.num;
				stopEvent(e);
			});
			addAnEvent(divs[i], 'mouseup', function(e){
				activeSlider=-1;
				stopEvent(e);
			});
		}
	}
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/**
 * startPlayer(slider): This will start the player extension (moving the
 * slider automatically).
 **/
function startPlayer(slider) {
	if(slider.isPlaying) stopPlayer(slider);
	if(slider.isPlayerPreparingRepeatFromMin) {
		// we are now starting from minimum.
		slider.isPlayerPreparingRepeatFromMin = false;
		// rewind rapidly back to minimum
		/*while(slider.val > slider.min) {
			slider.val -= slider.playerStepDistance * 100;
			drawSliderByVal(slider);
			slider.onchange(slider.val, slider.num);
		}*/
		slider.val = slider.min;
	}
	slider.isPlaying = true;
	setPlayerLabel(slider);
	slider.playerInterval = window.setInterval(function(slider){
		slider.val += slider.playerStepDistance;
		if(slider.val > slider.max) {
			slider.val = slider.max;
			if(slider.playerAutoReverse)
				slider.playerStepDistance *= -1;
			else
				stopPlayer(slider);
			if(slider.playerRepeatFromMin) {
				slider.isPlayerPreparingRepeatFromMin = true
				setPlayerLabel(slider);
			}
		} else if(slider.val < slider.min) {
			slider.val = slider.min;
			if(slider.playerAutoReverse)
				slider.playerStepDistance *= -1;
			else
				stopPlayer(slider);
		}
		drawSliderByVal(slider);
		slider.onchange(slider.val, slider.num);
	}, slider.playerStepTimeout, slider);
}

/**
 * stopPlayer(slider): This function does exactly what you think it
 * will do (see startPlayer).
 **/
function stopPlayer(slider) {
	slider.isPlaying = false;
	setPlayerLabel(slider);
	window.clearInterval(slider.playerInterval);
}

/**
 * setPlayerLabel(slider): Set the player button label according to
 * the current state (whether the slider is currently playing or not)
 **/
function setPlayerLabel(slider) {
	if(!slider.isPlayable) return false;
	if(slider.isPlaying) {
		slider.playerButton.value = slider.playerStopLabel?slider.playerStopLabel:'|_| Stop';
	} else if(slider.isPlayerPreparingRepeatFromMin) {
		slider.playerButton.value = slider.playerRepeatLabel?slider.playerRepeatLabel:'|<< Repeat';
	} else {
		slider.playerButton.value = slider.playerStartLabel?slider.playerStartLabel:'> Start';
	}
}

/**
 * togglePlayer(slider): Start/Stop the slider player according to
 * the current state (wheter the slider is currently playing or not)
 **/
function togglePlayer(slider) {
	if(slider.isPlaying) {
		stopPlayer(slider);
	} else {
		startPlayer(slider);
	}
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
//borrowed from prototype: http://prototype.conio.net/
function stopEvent(event) {
	if (event.preventDefault) {
		event.preventDefault();
		event.stopPropagation();
	} else {
		event.returnValue=false;
		event.cancelBubble=true;
	}
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
addAnEvent(window, 'load', attachSliderEvents);
addAnEvent(document, 'mousemove', sliderMouseMove);
var activeSlider=-1;
