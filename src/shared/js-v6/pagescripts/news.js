$(function(){
	// start masonry on news
	news_container = $("ul.news-feed");
  news_container.removeClass("news-ng").addClass("news-masonry");

	/*msnry = new Masonry( news_container[0], {
		//  columnWidth: 200,
		itemSelector: 'li'
	});*/
	news_container.masonry({
		itemSelector: 'li'
	});
});

// EIN ALTES MASONRY zusammen mit der Ordered-Extension

/**
 * jQuery Masonry v2.0.110524
 * A dynamic layout plugin for jQuery
 * The flip-side of CSS Floats
 * http://masonry.desandro.com
 *
 * Licensed under the MIT license.
 * Copyright 2011 David DeSandro
 */
(function(a,b,c){var d=b.event,e;d.special.smartresize={setup:function(){b(this).bind("resize",d.special.smartresize.handler)},teardown:function(){b(this).unbind("resize",d.special.smartresize.handler)},handler:function(a,b){var c=this,d=arguments;a.type="smartresize",e&&clearTimeout(e),e=setTimeout(function(){jQuery.event.handle.apply(c,d)},b==="execAsap"?0:100)}},b.fn.smartresize=function(a){return a?this.bind("smartresize",a):this.trigger("smartresize",["execAsap"])},b.Mason=function(a,c){this.element=b(c),this._create(a),this._init()};var f=["position","height"];b.Mason.settings={isResizable:!0,isAnimated:!1,animationOptions:{queue:!1,duration:500},gutterWidth:0,isRTL:!1,isFitWidth:!1},b.Mason.prototype={_filterFindBricks:function(a){var b=this.options.itemSelector;return b?a.filter(b).add(a.find(b)):a},_getBricks:function(a){var b=this._filterFindBricks(a).css({position:"absolute"}).addClass("masonry-brick");return b},_create:function(c){this.options=b.extend(!0,{},b.Mason.settings,c),this.styleQueue=[],this.reloadItems();var d=this.element[0].style;this.originalStyle={};for(var e=0,g=f.length;e<g;e++){var h=f[e];this.originalStyle[h]=d[h]||null}this.element.css({position:"relative"}),this.horizontalDirection=this.options.isRTL?"right":"left",this.offset={};var i=b(document.createElement("div"));this.element.prepend(i),this.offset.y=Math.round(i.position().top),this.options.isRTL?(i.css({"float":"right",display:"inline-block"}),this.offset.x=Math.round(this.element.outerWidth()-i.position().left)):this.offset.x=Math.round(i.position().left),i.remove();var j=this;setTimeout(function(){j.element.addClass("masonry")},0),this.options.isResizable&&b(a).bind("smartresize.masonry",function(){j.resize()})},_init:function(a){this._getColumns("masonry"),this._reLayout(a)},option:function(a,c){b.isPlainObject(a)&&(this.options=b.extend(!0,this.options,a))},layout:function(a,c){var d,e,f,g,h,i;for(var j=0,k=a.length;j<k;j++){d=b(a[j]),e=Math.ceil(d.outerWidth(!0)/this.columnWidth),e=Math.min(e,this.cols);if(e===1)this._placeBrick(d,this.colYs);else{f=this.cols+1-e,g=[];for(i=0;i<f;i++)h=this.colYs.slice(i,i+e),g[i]=Math.max.apply(Math,h);this._placeBrick(d,g)}}var l={};l.height=Math.max.apply(Math,this.colYs)-this.offset.y,this.options.isFitWidth&&(l.width=this.cols*this.columnWidth-this.options.gutterWidth),this.styleQueue.push({$el:this.element,style:l});var m=this.isLaidOut?this.options.isAnimated?"animate":"css":"css",n=this.options.animationOptions,o;for(j=0,k=this.styleQueue.length;j<k;j++)o=this.styleQueue[j],o.$el[m](o.style,n);this.styleQueue=[],c&&c.call(a),this.isLaidOut=!0},_getColumns:function(){var a=this.options.isFitWidth?this.element.parent():this.element,b=a.width();this.columnWidth=this.options.columnWidth||this.$bricks.outerWidth(!0)||b,this.columnWidth+=this.options.gutterWidth,this.cols=Math.floor((b+this.options.gutterWidth)/this.columnWidth),this.cols=Math.max(this.cols,1)},_placeBrick:function(a,b){var c=Math.min.apply(Math,b),d=0;for(var e=0,f=b.length;e<f;e++)if(b[e]===c){d=e;break}var g={top:c};g[this.horizontalDirection]=this.columnWidth*d+this.offset.x,this.styleQueue.push({$el:a,style:g});var h=c+a.outerHeight(!0),i=this.cols+1-f;for(e=0;e<i;e++)this.colYs[d+e]=h},resize:function(){var a=this.cols;this._getColumns("masonry"),this.cols!==a&&this._reLayout()},_reLayout:function(a){var b=this.cols;this.colYs=[];while(b--)this.colYs.push(this.offset.y);this.layout(this.$bricks,a)},reloadItems:function(){this.$bricks=this._getBricks(this.element.children())},reload:function(a){this.reloadItems(),this._init(a)},appended:function(a,b,c){if(b){this._filterFindBricks(a).css({top:this.element.height()});var d=this;setTimeout(function(){d._appended(a,c)},1)}else this._appended(a,c)},_appended:function(a,b){var c=this._getBricks(a);this.$bricks=this.$bricks.add(c),this.layout(c,b)},remove:function(a){this.$bricks=this.$bricks.not(a),a.remove()},destroy:function(){this.$bricks.removeClass("masonry-brick").each(function(){this.style.position=null,this.style.top=null,this.style.left=null});var c=this.element[0].style;for(var d=0,e=f.length;d<e;d++){var g=f[d];c[g]=this.originalStyle[g]}this.element.unbind(".masonry").removeClass("masonry").removeData("masonry"),b(a).unbind(".masonry")}},b.fn.imagesLoaded=function(a){var b=this.find("img"),d=b.length,e="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",f=this;if(!d){a.call(this);return this}b.bind("load",function(){--d<=0&&this.src!==e&&a.call(f)}).each(function(){if(this.complete||this.complete===c){var a=this.src;this.src=e,this.src=a}});return this},b.fn.masonry=function(a){if(typeof a=="string"){var c=Array.prototype.slice.call(arguments,1);this.each(function(){var d=b.data(this,"masonry");if(!d)return b.error("cannot call methods on masonry prior to initialization; attempted to call method '"+a+"'");if(!b.isFunction(d[a])||a.charAt(0)==="_")return b.error("no such method '"+a+"' for masonry instance");d[a].apply(d,c)})}else this.each(function(){var c=b.data(this,"masonry");c?(c.option(a||{}),c._init()):b.data(this,"masonry",new b.Mason(a,this))});return this}})(window,jQuery);


/**
 * jQuery Masonry Ordered 2.1-beta2
 * http://masonry-ordered.tasuki.org/
 *
 * Enhanced layout strategy for jQuery Masonry:
 * http://masonry.desandro.com/
 *
 * Licensed under the MIT license.
 * Copyleft 2012 Vit 'tasuki' Brunner
 */

(function( window, $, undefined ) {

  $.extend(true, $.Mason.settings, {
    layoutPriorities: {
      // Masonry default: Try to occupy highest available position.
      // Weight: Pixels of vertical distance from most upper spot.
      upperPosition: 1,
      // Shelf order: Try to display bricks in original order.
      //   (increases ordered-ness, decreases space-efficiency)
      // Weight: Pixels of distance of current brick's top left corner
      //         from previous brick's top right corner.
      shelfOrder: 1
    }
  });

  // layout logic
  $.Mason.prototype._placeBrick = function( brick ) {
    var $brick = $(brick),
        dir = this.horizontalDirection,
        colSpan, groupCount, groupY, groupColY;

    //how many columns does this brick span
    colSpan = Math.ceil( $brick.outerWidth(true) /
      ( this.columnWidth + this.options.gutterWidth ) );
    colSpan = Math.min( colSpan, this.cols );

    if ( colSpan === 1 ) {
      // if brick spans only one column, just like singleMode
      groupY = this.colYs
    } else {
      // brick spans more than one column
      // how many different places could this brick fit horizontally
      groupCount = this.cols + 1 - colSpan;
      groupY = [];

      // for each group potential horizontal position
      for ( var j=0; j < groupCount; j++ ) {
        // make an array of colY values for that one group
        groupColY = this.colYs.slice( j, j+colSpan );
        // and get the max value of the array
        groupY[j] = Math.max.apply( Math, groupColY );
      }
    }

    // get the minimum Y value from the columns
    var minimumY = Math.min.apply( Math, groupY );

    // point near which the next brick should be
    var anchorPoint = { top: 0 }
    anchorPoint[ dir ] = 0;

    // get previous brick details
    var prevBrick = this.styleQueue.slice(-1)[0];
    if ( prevBrick != undefined ) {
      var width  = prevBrick.$el.outerWidth(true);
      // subtract container's horizontal offset to prevent overflow
      var offset = prevBrick.style[ dir ] - this.offset.x;

      // align anchor point with previous brick
      anchorPoint[ dir ] = offset + width;
      anchorPoint.top = prevBrick.style.top;

      // check if brick fits in row
      var spaceForBrick = anchorPoint[ dir ] + colSpan * this.columnWidth;
      var availableSpace = this.cols * this.columnWidth;
      if ( spaceForBrick > availableSpace ) {
        // brick doesn't fit in row - reset horizontal position
        anchorPoint[ dir ] = 0;
      }
    }

    // priorities weights for brick laying
    var priorities = this.options.layoutPriorities;
    // total penalty for given position
    var penalty = [];

    // calculate penalty of each position
    for ( var i=0, len = groupY.length; i < len; i++ ) {
      // distance of upper left corner from anchor point
      var horizontal = Math.abs( anchorPoint[ dir ] - this.columnWidth * i );
      var vertical   = Math.abs( anchorPoint.top  - groupY[i] );
      var sum_of_powers = Math.pow( horizontal, 2 ) + Math.pow( vertical, 2 );
      var distance      = Math.round( Math.sqrt( sum_of_powers ) );
      var shelfPenalty  = priorities.shelfOrder * distance;

      // vertical distance from the most top available spot
      var upperPenalty = priorities.upperPosition * ( groupY[i] - minimumY );

      // total penalty for column
      penalty[i] = upperPenalty + shelfPenalty;
    }

    // get minimum penalty
    var minPenalty = Math.min.apply( null, penalty );

    // find column with minimum penalty
    for ( i=0, len = penalty.length; i < len; i++ ) {
      if ( penalty[i] === minPenalty ) {
        shortCol = i;
        break;
      }
    }

    // position the brick
    var position = {
      top: groupY[shortCol] + this.offset.y
    };
    // position.left or position.right
    position[ dir ] = this.columnWidth * shortCol + this.offset.x;
    this.styleQueue.push({ $el: $brick, style: position });

    // apply setHeight to necessary columns
    var setHeight = groupY[ shortCol ] + $brick.outerHeight(true),
        setSpan = this.cols + 1 - len;
    for ( i=0; i < setSpan; i++ ) {
      this.colYs[ shortCol + i ] = setHeight;
    }
  }
})( window, jQuery );

/* vi: set ts=2 sw=2 expandtab: */

