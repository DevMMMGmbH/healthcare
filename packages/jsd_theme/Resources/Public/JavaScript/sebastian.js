// /**
// *  Ajax Autocomplete for jQuery, version %version%
// *  (c) 2017 Tomas Kirda
// *
// *  Ajax Autocomplete for jQuery is freely distributable under the terms of an MIT-style license.
// *  For details, see the web site: https://github.com/devbridge/jQuery-Autocomplete
// */

// /*jslint  browser: true, white: true, single: true, this: true, multivar: true */
// /*global define, window, document, jQuery, exports, require */

// // Expose plugin as an AMD module if AMD loader is present:
// (function (factory) {
//     "use strict";
//     if (typeof define === 'function' && define.amd) {
//         // AMD. Register as an anonymous module.
//         define(['jquery'], factory);
//     } else if (typeof exports === 'object' && typeof require === 'function') {
//         // Browserify
//         factory(require('jquery'));
//     } else {
//         // Browser globals
//         factory(jQuery);
//     }
// }(function ($) {
//     'use strict';

//     var
//         utils = (function () {
//             return {
//                 escapeRegExChars: function (value) {
//                     return value.replace(/[|\\{}()[\]^$+*?.]/g, "\\$&");
//                 },
//                 createNode: function (containerClass) {
//                     var div = document.createElement('div');
//                     div.className = containerClass;
//                     div.style.position = 'absolute';
//                     div.style.display = 'none';
//                     return div;
//                 }
//             };
//         }()),

//         keys = {
//             ESC: 27,
//             TAB: 9,
//             RETURN: 13,
//             LEFT: 37,
//             UP: 38,
//             RIGHT: 39,
//             DOWN: 40
//         },

//         noop = $.noop;

//     function Autocomplete(el, options) {
//         var that = this;

//         // Shared variables:
//         that.element = el;
//         that.el = $(el);
//         that.suggestions = [];
//         that.badQueries = [];
//         that.selectedIndex = -1;
//         that.currentValue = that.element.value;
//         that.timeoutId = null;
//         that.cachedResponse = {};
//         that.onChangeTimeout = null;
//         that.onChange = null;
//         that.isLocal = false;
//         that.suggestionsContainer = null;
//         that.noSuggestionsContainer = null;
//         that.options = $.extend(true, {}, Autocomplete.defaults, options);
//         that.classes = {
//             selected: 'autocomplete-selected',
//             suggestion: 'autocomplete-suggestion'
//         };
//         that.hint = null;
//         that.hintValue = '';
//         that.selection = null;

//         // Initialize and set options:
//         that.initialize();
//         that.setOptions(options);
//     }

//     Autocomplete.utils = utils;

//     $.Autocomplete = Autocomplete;

//     Autocomplete.defaults = {
//             ajaxSettings: {},
//             autoSelectFirst: false,
//             appendTo: 'body',
//             serviceUrl: null,
//             lookup: null,
//             onSelect: null,
//             width: 'auto',
//             minChars: 1,
//             maxHeight: 300,
//             deferRequestBy: 0,
//             params: {},
//             formatResult: _formatResult,
//             formatGroup: _formatGroup,
//             delimiter: null,
//             zIndex: 9999,
//             type: 'GET',
//             noCache: false,
//             onSearchStart: noop,
//             onSearchComplete: noop,
//             onSearchError: noop,
//             preserveInput: false,
//             containerClass: 'autocomplete-suggestions',
//             tabDisabled: false,
//             dataType: 'text',
//             currentRequest: null,
//             triggerSelectOnValidInput: true,
//             preventBadQueries: true,
//             lookupFilter: _lookupFilter,
//             paramName: 'query',
//             transformResult: _transformResult,
//             showNoSuggestionNotice: false,
//             noSuggestionNotice: 'No results',
//             orientation: 'bottom',
//             forceFixPosition: false
//     };

//     function _lookupFilter(suggestion, originalQuery, queryLowerCase) {
//         return suggestion.value.toLowerCase().indexOf(queryLowerCase) !== -1;
//     };

//     function _transformResult(response) {
//         return typeof response === 'string' ? $.parseJSON(response) : response;
//     };

//     function _formatResult(suggestion, currentValue) {
//         // Do not replace anything if the current value is empty
//         if (!currentValue) {
//             return suggestion.value;
//         }

//         var pattern = '(' + utils.escapeRegExChars(currentValue) + ')';

//         return suggestion.value
//             .replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>')
//             .replace(/&/g, '&amp;')
//             .replace(/</g, '&lt;')
//             .replace(/>/g, '&gt;')
//             .replace(/"/g, '&quot;')
//             .replace(/&lt;(\/?strong)&gt;/g, '<$1>');
//     };

//     function _formatGroup(suggestion, category) {
//         return '<div class="autocomplete-group">' + category + '</div>';
//     };

//     Autocomplete.prototype = {

//         initialize: function () {
//             var that = this,
//                 suggestionSelector = '.' + that.classes.suggestion,
//                 selected = that.classes.selected,
//                 options = that.options,
//                 container;

//             that.element.setAttribute('autocomplete', 'off');

//             // html() deals with many types: htmlString or Element or Array or jQuery
//             that.noSuggestionsContainer = $('<div class="autocomplete-no-suggestion"></div>')
//                                           .html(this.options.noSuggestionNotice).get(0);

//             that.suggestionsContainer = Autocomplete.utils.createNode(options.containerClass);

//             container = $(that.suggestionsContainer);

//             container.appendTo(options.appendTo || 'body');

//             // Only set width if it was provided:
//             if (options.width !== 'auto') {
//                 container.css('width', options.width);
//             }

//             // Listen for mouse over event on suggestions list:
//             container.on('mouseover.autocomplete', suggestionSelector, function () {
//                 that.activate($(this).data('index'));
//             });

//             // Deselect active element when mouse leaves suggestions container:
//             container.on('mouseout.autocomplete', function () {
//                 that.selectedIndex = -1;
//                 container.children('.' + selected).removeClass(selected);
//             });

//             // Listen for click event on suggestions list:
//             container.on('click.autocomplete', suggestionSelector, function () {
//                 that.select($(this).data('index'));
//             });

//             container.on('click.autocomplete', function () {
//                 clearTimeout(that.blurTimeoutId);
//             })

//             that.fixPositionCapture = function () {
//                 if (that.visible) {
//                     that.fixPosition();
//                 }
//             };

//             $(window).on('resize.autocomplete', that.fixPositionCapture);

//             that.el.on('keydown.autocomplete', function (e) { that.onKeyPress(e); });
//             that.el.on('keyup.autocomplete', function (e) { that.onKeyUp(e); });
//             that.el.on('blur.autocomplete', function () { that.onBlur(); });
//             that.el.on('focus.autocomplete', function () { that.onFocus(); });
//             that.el.on('change.autocomplete', function (e) { that.onKeyUp(e); });
//             that.el.on('input.autocomplete', function (e) { that.onKeyUp(e); });
//         },

//         onFocus: function () {
//             var that = this;

//             if (that.disabled) {
//                 return;
//             }

//             that.fixPosition();

//             if (that.el.val().length >= that.options.minChars) {
//                 that.onValueChange();
//             }
//         },

//         onBlur: function () {
//             var that = this,
//                 options = that.options,
//                 value = that.el.val(),
//                 query = that.getQuery(value);

//             // If user clicked on a suggestion, hide() will
//             // be canceled, otherwise close suggestions
//             that.blurTimeoutId = setTimeout(function () {
//                 that.hide();

//                 if (that.selection && that.currentValue !== query) {
//                     (options.onInvalidateSelection || $.noop).call(that.element);
//                 }
//             }, 200);
//         },

//         abortAjax: function () {
//             var that = this;
//             if (that.currentRequest) {
//                 that.currentRequest.abort();
//                 that.currentRequest = null;
//             }
//         },

//         setOptions: function (suppliedOptions) {
//             var that = this,
//                 options = $.extend({}, that.options, suppliedOptions);

//             that.isLocal = Array.isArray(options.lookup);

//             if (that.isLocal) {
//                 options.lookup = that.verifySuggestionsFormat(options.lookup);
//             }

//             options.orientation = that.validateOrientation(options.orientation, 'bottom');

//             // Adjust height, width and z-index:
//             $(that.suggestionsContainer).css({
//                 'max-height': options.maxHeight + 'px',
//                 'width': options.width + 'px',
//                 'z-index': options.zIndex
//             });

//             this.options = options;
//         },


//         clearCache: function () {
//             this.cachedResponse = {};
//             this.badQueries = [];
//         },

//         clear: function () {
//             this.clearCache();
//             this.currentValue = '';
//             this.suggestions = [];
//         },

//         disable: function () {
//             var that = this;
//             that.disabled = true;
//             clearTimeout(that.onChangeTimeout);
//             that.abortAjax();
//         },

//         enable: function () {
//             this.disabled = false;
//         },

//         fixPosition: function () {
//             // Use only when container has already its content

//             var that = this,
//                 $container = $(that.suggestionsContainer),
//                 containerParent = $container.parent().get(0);
//             // Fix position automatically when appended to body.
//             // In other cases force parameter must be given.
//             if (containerParent !== document.body && !that.options.forceFixPosition) {
//                 return;
//             }

//             // Choose orientation
//             var orientation = that.options.orientation,
//                 containerHeight = $container.outerHeight(),
//                 height = that.el.outerHeight(),
//                 offset = that.el.offset(),
//                 styles = { 'top': offset.top, 'left': offset.left };

//             if (orientation === 'auto') {
//                 var viewPortHeight = $(window).height(),
//                     scrollTop = $(window).scrollTop(),
//                     topOverflow = -scrollTop + offset.top - containerHeight,
//                     bottomOverflow = scrollTop + viewPortHeight - (offset.top + height + containerHeight);

//                 orientation = (Math.max(topOverflow, bottomOverflow) === topOverflow) ? 'top' : 'bottom';
//             }

//             if (orientation === 'top') {
//                 styles.top += -containerHeight;
//             } else {
//                 styles.top += height;
//             }

//             // If container is not positioned to body,
//             // correct its position using offset parent offset
//             if(containerParent !== document.body) {
//                 var opacity = $container.css('opacity'),
//                     parentOffsetDiff;

//                     if (!that.visible){
//                         $container.css('opacity', 0).show();
//                     }

//                 parentOffsetDiff = $container.offsetParent().offset();
//                 styles.top -= parentOffsetDiff.top;
//                 styles.top += containerParent.scrollTop;
//                 styles.left -= parentOffsetDiff.left;

//                 if (!that.visible){
//                     $container.css('opacity', opacity).hide();
//                 }
//             }

//             if (that.options.width === 'auto') {
//                 styles.width = that.el.outerWidth() + 'px';
//             }

//             $container.css(styles);
//         },

//         isCursorAtEnd: function () {
//             var that = this,
//                 valLength = that.el.val().length,
//                 selectionStart = that.element.selectionStart,
//                 range;

//             if (typeof selectionStart === 'number') {
//                 return selectionStart === valLength;
//             }
//             if (document.selection) {
//                 range = document.selection.createRange();
//                 range.moveStart('character', -valLength);
//                 return valLength === range.text.length;
//             }
//             return true;
//         },

//         onKeyPress: function (e) {
//             var that = this;

//             // If suggestions are hidden and user presses arrow down, display suggestions:
//             if (!that.disabled && !that.visible && e.which === keys.DOWN && that.currentValue) {
//                 that.suggest();
//                 return;
//             }

//             if (that.disabled || !that.visible) {
//                 return;
//             }

//             switch (e.which) {
//                 case keys.ESC:
//                     that.el.val(that.currentValue);
//                     that.hide();
//                     break;
//                 case keys.RIGHT:
//                     if (that.hint && that.options.onHint && that.isCursorAtEnd()) {
//                         that.selectHint();
//                         break;
//                     }
//                     return;
//                 case keys.TAB:
//                     if (that.hint && that.options.onHint) {
//                         that.selectHint();
//                         return;
//                     }
//                     if (that.selectedIndex === -1) {
//                         that.hide();
//                         return;
//                     }
//                     that.select(that.selectedIndex);
//                     if (that.options.tabDisabled === false) {
//                         return;
//                     }
//                     break;
//                 case keys.RETURN:
//                     if (that.selectedIndex === -1) {
//                         that.hide();
//                         return;
//                     }
//                     that.select(that.selectedIndex);
//                     break;
//                 case keys.UP:
//                     that.moveUp();
//                     break;
//                 case keys.DOWN:
//                     that.moveDown();
//                     break;
//                 default:
//                     return;
//             }

//             // Cancel event if function did not return:
//             e.stopImmediatePropagation();
//             e.preventDefault();
//         },

//         onKeyUp: function (e) {
//             var that = this;

//             if (that.disabled) {
//                 return;
//             }

//             switch (e.which) {
//                 case keys.UP:
//                 case keys.DOWN:
//                     return;
//             }

//             clearTimeout(that.onChangeTimeout);

//             if (that.currentValue !== that.el.val()) {
//                 that.findBestHint();
//                 if (that.options.deferRequestBy > 0) {
//                     // Defer lookup in case when value changes very quickly:
//                     that.onChangeTimeout = setTimeout(function () {
//                         that.onValueChange();
//                     }, that.options.deferRequestBy);
//                 } else {
//                     that.onValueChange();
//                 }
//             }
//         },

//         onValueChange: function () {
//             if (this.ignoreValueChange) {
//                 this.ignoreValueChange = false;
//                 return;
//             }

//             var that = this,
//                 options = that.options,
//                 value = that.el.val(),
//                 query = that.getQuery(value);

//             if (that.selection && that.currentValue !== query) {
//                 that.selection = null;
//                 (options.onInvalidateSelection || $.noop).call(that.element);
//             }

//             clearTimeout(that.onChangeTimeout);
//             that.currentValue = value;
//             that.selectedIndex = -1;

//             // Check existing suggestion for the match before proceeding:
//             if (options.triggerSelectOnValidInput && that.isExactMatch(query)) {
//                 that.select(0);
//                 return;
//             }

//             if (query.length < options.minChars) {
//                 that.hide();
//             } else {
//                 that.getSuggestions(query);
//             }
//         },

//         isExactMatch: function (query) {
//             var suggestions = this.suggestions;

//             return (suggestions.length === 1 && suggestions[0].value.toLowerCase() === query.toLowerCase());
//         },

//         getQuery: function (value) {
//             var delimiter = this.options.delimiter,
//                 parts;

//             if (!delimiter) {
//                 return value;
//             }
//             parts = value.split(delimiter);
//             return $.trim(parts[parts.length - 1]);
//         },

//         getSuggestionsLocal: function (query) {
//             var that = this,
//                 options = that.options,
//                 queryLowerCase = query.toLowerCase(),
//                 filter = options.lookupFilter,
//                 limit = parseInt(options.lookupLimit, 10),
//                 data;

//             data = {
//                 suggestions: $.grep(options.lookup, function (suggestion) {
//                     return filter(suggestion, query, queryLowerCase);
//                 })
//             };

//             if (limit && data.suggestions.length > limit) {
//                 data.suggestions = data.suggestions.slice(0, limit);
//             }

//             return data;
//         },

//         getSuggestions: function (q) {
//             var response,
//                 that = this,
//                 options = that.options,
//                 serviceUrl = options.serviceUrl,
//                 params,
//                 cacheKey,
//                 ajaxSettings;

//             options.params[options.paramName] = q;

//             if (options.onSearchStart.call(that.element, options.params) === false) {
//                 return;
//             }

//             params = options.ignoreParams ? null : options.params;

//             if ($.isFunction(options.lookup)){
//                 options.lookup(q, function (data) {
//                     that.suggestions = data.suggestions;
//                     that.suggest();
//                     options.onSearchComplete.call(that.element, q, data.suggestions);
//                 });
//                 return;
//             }

//             if (that.isLocal) {
//                 response = that.getSuggestionsLocal(q);
//             } else {
//                 if ($.isFunction(serviceUrl)) {
//                     serviceUrl = serviceUrl.call(that.element, q);
//                 }
//                 cacheKey = serviceUrl + '?' + $.param(params || {});
//                 response = that.cachedResponse[cacheKey];
//             }

//             if (response && Array.isArray(response.suggestions)) {
//                 that.suggestions = response.suggestions;
//                 that.suggest();
//                 options.onSearchComplete.call(that.element, q, response.suggestions);
//             } else if (!that.isBadQuery(q)) {
//                 that.abortAjax();

//                 ajaxSettings = {
//                     url: serviceUrl,
//                     data: params,
//                     type: options.type,
//                     dataType: options.dataType
//                 };

//                 $.extend(ajaxSettings, options.ajaxSettings);

//                 that.currentRequest = $.ajax(ajaxSettings).done(function (data) {
//                     var result;
//                     that.currentRequest = null;
//                     result = options.transformResult(data, q);
//                     that.processResponse(result, q, cacheKey);
//                     options.onSearchComplete.call(that.element, q, result.suggestions);
//                 }).fail(function (jqXHR, textStatus, errorThrown) {
//                     options.onSearchError.call(that.element, q, jqXHR, textStatus, errorThrown);
//                 });
//             } else {
//                 options.onSearchComplete.call(that.element, q, []);
//             }
//         },

//         isBadQuery: function (q) {
//             if (!this.options.preventBadQueries){
//                 return false;
//             }

//             var badQueries = this.badQueries,
//                 i = badQueries.length;

//             while (i--) {
//                 if (q.indexOf(badQueries[i]) === 0) {
//                     return true;
//                 }
//             }

//             return false;
//         },

//         hide: function () {
//             var that = this,
//                 container = $(that.suggestionsContainer);

//             if ($.isFunction(that.options.onHide) && that.visible) {
//                 that.options.onHide.call(that.element, container);
//             }

//             that.visible = false;
//             that.selectedIndex = -1;
//             clearTimeout(that.onChangeTimeout);
//             $(that.suggestionsContainer).hide();
//             that.signalHint(null);
//         },

//         suggest: function () {
//             if (!this.suggestions.length) {
//                 if (this.options.showNoSuggestionNotice) {
//                     this.noSuggestions();
//                 } else {
//                     this.hide();
//                 }
//                 return;
//             }

//             var that = this,
//                 options = that.options,
//                 groupBy = options.groupBy,
//                 formatResult = options.formatResult,
//                 value = that.getQuery(that.currentValue),
//                 className = that.classes.suggestion,
//                 classSelected = that.classes.selected,
//                 container = $(that.suggestionsContainer),
//                 noSuggestionsContainer = $(that.noSuggestionsContainer),
//                 beforeRender = options.beforeRender,
//                 html = '',
//                 category,
//                 formatGroup = function (suggestion, index) {
//                         var currentCategory = suggestion.data[groupBy];

//                         if (category === currentCategory){
//                             return '';
//                         }

//                         category = currentCategory;

//                         return options.formatGroup(suggestion, category);
//                     };

//             if (options.triggerSelectOnValidInput && that.isExactMatch(value)) {
//                 that.select(0);
//                 return;
//             }

//             // Build suggestions inner HTML:
//             $.each(that.suggestions, function (i, suggestion) {
//                 if (groupBy){
//                     html += formatGroup(suggestion, value, i);
//                 }

//                 html += '<div class="' + className + '" data-index="' + i + '">' + formatResult(suggestion, value, i) + '</div>';
//             });

//             this.adjustContainerWidth();

//             noSuggestionsContainer.detach();
//             container.html(html);

//             if ($.isFunction(beforeRender)) {
//                 beforeRender.call(that.element, container, that.suggestions);
//             }

//             that.fixPosition();
//             container.show();

//             // Select first value by default:
//             if (options.autoSelectFirst) {
//                 that.selectedIndex = 0;
//                 container.scrollTop(0);
//                 container.children('.' + className).first().addClass(classSelected);
//             }

//             that.visible = true;
//             that.findBestHint();
//         },

//         noSuggestions: function() {
//              var that = this,
//                  beforeRender = that.options.beforeRender,
//                  container = $(that.suggestionsContainer),
//                  noSuggestionsContainer = $(that.noSuggestionsContainer);

//             this.adjustContainerWidth();

//             // Some explicit steps. Be careful here as it easy to get
//             // noSuggestionsContainer removed from DOM if not detached properly.
//             noSuggestionsContainer.detach();

//             // clean suggestions if any
//             container.empty();
//             container.append(noSuggestionsContainer);

//             if ($.isFunction(beforeRender)) {
//                 beforeRender.call(that.element, container, that.suggestions);
//             }

//             that.fixPosition();

//             container.show();
//             that.visible = true;
//         },

//         adjustContainerWidth: function() {
//             var that = this,
//                 options = that.options,
//                 width,
//                 container = $(that.suggestionsContainer);

//             // If width is auto, adjust width before displaying suggestions,
//             // because if instance was created before input had width, it will be zero.
//             // Also it adjusts if input width has changed.
//             if (options.width === 'auto') {
//                 width = that.el.outerWidth();
//                 container.css('width', width > 0 ? width : 300);
//             } else if(options.width === 'flex') {
//                 // Trust the source! Unset the width property so it will be the max length
//                 // the containing elements.
//                 container.css('width', '');
//             }
//         },

//         findBestHint: function () {
//             var that = this,
//                 value = that.el.val().toLowerCase(),
//                 bestMatch = null;

//             if (!value) {
//                 return;
//             }

//             $.each(that.suggestions, function (i, suggestion) {
//                 var foundMatch = suggestion.value.toLowerCase().indexOf(value) === 0;
//                 if (foundMatch) {
//                     bestMatch = suggestion;
//                 }
//                 return !foundMatch;
//             });

//             that.signalHint(bestMatch);
//         },

//         signalHint: function (suggestion) {
//             var hintValue = '',
//                 that = this;
//             if (suggestion) {
//                 hintValue = that.currentValue + suggestion.value.substr(that.currentValue.length);
//             }
//             if (that.hintValue !== hintValue) {
//                 that.hintValue = hintValue;
//                 that.hint = suggestion;
//                 (this.options.onHint || $.noop)(hintValue);
//             }
//         },

//         verifySuggestionsFormat: function (suggestions) {
//             // If suggestions is string array, convert them to supported format:
//             if (suggestions.length && typeof suggestions[0] === 'string') {
//                 return $.map(suggestions, function (value) {
//                     return { value: value, data: null };
//                 });
//             }

//             return suggestions;
//         },

//         validateOrientation: function(orientation, fallback) {
//             orientation = $.trim(orientation || '').toLowerCase();

//             if($.inArray(orientation, ['auto', 'bottom', 'top']) === -1){
//                 orientation = fallback;
//             }

//             return orientation;
//         },

//         processResponse: function (result, originalQuery, cacheKey) {
//             var that = this,
//                 options = that.options;

//             result.suggestions = that.verifySuggestionsFormat(result.suggestions);

//             // Cache results if cache is not disabled:
//             if (!options.noCache) {
//                 that.cachedResponse[cacheKey] = result;
//                 if (options.preventBadQueries && !result.suggestions.length) {
//                     that.badQueries.push(originalQuery);
//                 }
//             }

//             // Return if originalQuery is not matching current query:
//             if (originalQuery !== that.getQuery(that.currentValue)) {
//                 return;
//             }

//             that.suggestions = result.suggestions;
//             that.suggest();
//         },

//         activate: function (index) {
//             var that = this,
//                 activeItem,
//                 selected = that.classes.selected,
//                 container = $(that.suggestionsContainer),
//                 children = container.find('.' + that.classes.suggestion);

//             container.find('.' + selected).removeClass(selected);

//             that.selectedIndex = index;

//             if (that.selectedIndex !== -1 && children.length > that.selectedIndex) {
//                 activeItem = children.get(that.selectedIndex);
//                 $(activeItem).addClass(selected);
//                 return activeItem;
//             }

//             return null;
//         },

//         selectHint: function () {
//             var that = this,
//                 i = $.inArray(that.hint, that.suggestions);

//             that.select(i);
//         },

//         select: function (i) {
//             var that = this;
//             that.hide();
//             that.onSelect(i);
//         },

//         moveUp: function () {
//             var that = this;

//             if (that.selectedIndex === -1) {
//                 return;
//             }

//             if (that.selectedIndex === 0) {
//                 $(that.suggestionsContainer).children('.' + that.classes.suggestion).first().removeClass(that.classes.selected);
//                 that.selectedIndex = -1;
//                 that.ignoreValueChange = false;
//                 that.el.val(that.currentValue);
//                 that.findBestHint();
//                 return;
//             }

//             that.adjustScroll(that.selectedIndex - 1);
//         },

//         moveDown: function () {
//             var that = this;

//             if (that.selectedIndex === (that.suggestions.length - 1)) {
//                 return;
//             }

//             that.adjustScroll(that.selectedIndex + 1);
//         },

//         adjustScroll: function (index) {
//             var that = this,
//                 activeItem = that.activate(index);

//             if (!activeItem) {
//                 return;
//             }

//             var offsetTop,
//                 upperBound,
//                 lowerBound,
//                 heightDelta = $(activeItem).outerHeight();

//             offsetTop = activeItem.offsetTop;
//             upperBound = $(that.suggestionsContainer).scrollTop();
//             lowerBound = upperBound + that.options.maxHeight - heightDelta;

//             if (offsetTop < upperBound) {
//                 $(that.suggestionsContainer).scrollTop(offsetTop);
//             } else if (offsetTop > lowerBound) {
//                 $(that.suggestionsContainer).scrollTop(offsetTop - that.options.maxHeight + heightDelta);
//             }

//             if (!that.options.preserveInput) {
//                 // During onBlur event, browser will trigger "change" event,
//                 // because value has changed, to avoid side effect ignore,
//                 // that event, so that correct suggestion can be selected
//                 // when clicking on suggestion with a mouse
//                 that.ignoreValueChange = true;
//                 that.el.val(that.getValue(that.suggestions[index].value));
//             }

//             that.signalHint(null);
//         },

//         onSelect: function (index) {
//             var that = this,
//                 onSelectCallback = that.options.onSelect,
//                 suggestion = that.suggestions[index];

//             that.currentValue = that.getValue(suggestion.value);

//             if (that.currentValue !== that.el.val() && !that.options.preserveInput) {
//                 that.el.val(that.currentValue);
//             }

//             that.signalHint(null);
//             that.suggestions = [];
//             that.selection = suggestion;

//             if ($.isFunction(onSelectCallback)) {
//                 onSelectCallback.call(that.element, suggestion);
//             }
//         },

//         getValue: function (value) {
//             var that = this,
//                 delimiter = that.options.delimiter,
//                 currentValue,
//                 parts;

//             if (!delimiter) {
//                 return value;
//             }

//             currentValue = that.currentValue;
//             parts = currentValue.split(delimiter);

//             if (parts.length === 1) {
//                 return value;
//             }

//             return currentValue.substr(0, currentValue.length - parts[parts.length - 1].length) + value;
//         },

//         dispose: function () {
//             var that = this;
//             that.el.off('.autocomplete').removeData('autocomplete');
//             $(window).off('resize.autocomplete', that.fixPositionCapture);
//             $(that.suggestionsContainer).remove();
//         }
//     };

//     // Create chainable jQuery plugin:
//     $.fn.devbridgeAutocomplete = function (options, args) {
//         var dataKey = 'autocomplete';
//         // If function invoked without argument return
//         // instance of the first matched element:
//         if (!arguments.length) {
//             return this.first().data(dataKey);
//         }

//         return this.each(function () {
//             var inputElement = $(this),
//                 instance = inputElement.data(dataKey);

//             if (typeof options === 'string') {
//                 if (instance && typeof instance[options] === 'function') {
//                     instance[options](args);
//                 }
//             } else {
//                 // If instance already exists, destroy it:
//                 if (instance && instance.dispose) {
//                     instance.dispose();
//                 }
//                 instance = new Autocomplete(this, options);
//                 inputElement.data(dataKey, instance);
//             }
//         });
//     };

//     // Don't overwrite if it already exists
//     if (!$.fn.autocomplete) {
//         $.fn.autocomplete = $.fn.devbridgeAutocomplete;
//     }
// }));
// /*! URI.js v1.19.1 http://medialize.github.io/URI.js/ */
// /* build contains: jquery.URI.js */
// // (function(d,e){"object"===typeof module&&module.exports?module.exports=e(require("jquery"),require("./URI")):"function"===typeof define&&define.amd?define(["jquery","./URI"],e):e(d.jQuery,d.URI)})(this,function(d,e){function h(a){return a.replace(/([.*+?^=!:${}()|[\]\/\\])/g,"\\$1")}function k(a){var b=a.nodeName.toLowerCase();if("input"!==b||"image"===a.type)return e.domAttributes[b]}function n(a){return{get:function(b){return d(b).uri()[a]()},set:function(b,c){d(b).uri()[a](c);return c}}}function l(a,
// // b){if(!k(a)||!b)return!1;var c=b.match(p);if(!c||!c[5]&&":"!==c[2]&&!g[c[2]])return!1;var e=d(a).uri();if(c[5])return e.is(c[5]);if(":"===c[2]){var f=c[1].toLowerCase()+":";return g[f]?g[f](e,c[4]):!1}f=c[1].toLowerCase();return m[f]?g[c[2]](e[f](),c[4],f):!1}var m={},g={"=":function(a,b){return a===b},"^=":function(a,b){return!!(a+"").match(new RegExp("^"+h(b),"i"))},"$=":function(a,b){return!!(a+"").match(new RegExp(h(b)+"$","i"))},"*=":function(a,b,c){"directory"===c&&(a+="/");return!!(a+"").match(new RegExp(h(b),
// // "i"))},"equals:":function(a,b){return a.equals(b)},"is:":function(a,b){return a.is(b)}};d.each("origin authority directory domain filename fragment hash host hostname href password path pathname port protocol query resource scheme search subdomain suffix tld username".split(" "),function(a,b){m[b]=!0;d.attrHooks["uri:"+b]=n(b)});var q=function(a,b){return d(a).uri().href(b).toString()};d.each(["src","href","action","uri","cite"],function(a,b){d.attrHooks[b]={set:q}});d.attrHooks.uri.get=function(a){return d(a).uri()};
// // d.fn.uri=function(a){var b=this.first(),c=b.get(0),d=k(c);if(!d)throw Error('Element "'+c.nodeName+'" does not have either property: href, src, action, cite');if(void 0!==a){var f=b.data("uri");if(f)return f.href(a);a instanceof e||(a=e(a||""))}else{if(a=b.data("uri"))return a;a=e(b.attr(d)||"")}a._dom_element=c;a._dom_attribute=d;a.normalize();b.data("uri",a);return a};e.prototype.build=function(a){if(this._dom_element)this._string=e.build(this._parts),this._deferred_build=!1,this._dom_element.setAttribute(this._dom_attribute,
// // this._string),this._dom_element[this._dom_attribute]=this._string;else if(!0===a)this._deferred_build=!0;else if(void 0===a||this._deferred_build)this._string=e.build(this._parts),this._deferred_build=!1;return this};var p=/^([a-zA-Z]+)\s*([\^\$*]?=|:)\s*(['"]?)(.+)\3|^\s*([a-zA-Z0-9]+)\s*$/;var r=d.expr.createPseudo?d.expr.createPseudo(function(a){return function(b){return l(b,a)}}):function(a,b,c){return l(a,c[3])};d.expr[":"].uri=r;return d});


// /*SMD DROPDOWN IN SEARCHPOPUP*/
// // function inputsToDropdown(container, defaultValue, inputType, controlContainer, hideContainer){
// //     /**
// //      * @param {string}       [container='.parent']              - A parent node of a group with inputs
// //      * @param {string}       [defaultValue='Select please']     - A deafault name of your dropdown button
// //      * @param {string}       [inputType='checkbox or radio']    - A type of a group with inputs
// //      * @param {string}       [controlContainer='.parent']       - A node where you put your new dropdown
// //      * @param {string}       [hideContainer='.parent > table']  - A group with inputs that you want to hide (Can be empty)
// //      *
// //      * Usage:
// //      *
// //      * Example #1 (input[type='checkbox']):
// //         <div class="checkbox-group">
// //             <table>
// //                 <tr>
// //                     <td><input id="value1" type="checkbox"><label for="value1">Value 1</label></td>
// //                     <td><input id="value2" type="checkbox"><label for="value2">Value 2</label></td>
// //                     <td><input id="value3" type="checkbox"><label for="value3">Value 3</label></td>
// //                     <td><input id="value4" type="checkbox"><label for="value4">Value 4</label></td>
// //                 </tr>
// //             </table>
// //         </div>
// //         <script>inputsToDropdown('.checkbox-group', 'Select please', 'checkbox', '.checkbox-group', '.checkbox-group > table');</script>
// //       *
// //       *  
// //       * Example #2 (input[type='radio']):
// //         <div class="radio-group">
// //             <div><label><input name="radio1" type="radio">Value 1</label></div>
// //             <div><label><input name="radio1" type="radio">Value 2</label></div>
// //             <div><label><input name="radio1" checked="radio" type="radio"> Value 3</label></div>
// //             <div><label><input name="radio1" type="radio">Value 4</label></div>
// //         </div>
// //         <script>inputsToDropdown('.radio-group', 'Select please', 'radio', '.radio-group', '');</script>
// //      */
// //     if ($(container).length > 0 && ($(container).find('input[type="checkbox"]').length > 0 || $(container).find('input[type="radio"]').length > 0)) {
// //         var btnGroup 			= 	$('<div>', {class: 'btn-group btn-group__multiple btn-group__multiple-' + inputType}),
// //             btn 				= 	$('<button>', {
// //                 'class': 			'btn btn-default dropdown-toggle btn-action btn-type__' + inputType,
// //                 'data-toggle': 		'dropdown',
// //                 'aria-haspopup':    'true',
// //                 'aria-expanded':    'true',
// //                 'html': 			'<span class="value">' + defaultValue + '</span><span class="num"></span><span class="btn-placeholder"></span> <span class="caret"></span>'
// //             }),
// //             control 			= 	$(container).find('input[type="' + inputType + '"]').parent(),
// //             controlContainer	= 	$(controlContainer),
// //             hideContainer		= 	$(hideContainer), 
// //             list 				= 	$('<ul>', {'class': 'dropdown-menu'}),
// //             placeholder 		= 	btn.find('.value'),
// //             btnAction 			=	btn.find('.btn-action'),
// //             placeholderHtml		=	btn.find('.btn-placeholder'),
// //             num					=	btn.find('.num').hide();


// //        function getSelected(elements) {
// //        		if (inputType == 'checkbox') {
// //            		var widthInner = 0,
// //            			widthOuter = btn.width();
// //            		$.each(elements, function() {
// //         	 		widthInner += $(this).find('label').width() + 20;
// //         		});
// //         		num.text('Selected ' + elements.length);
// //         		if (widthInner + 20 > widthOuter) {
// //         			num.show();
// //         			placeholderHtml.hide();
// //         		} else {
// //         			num.hide();
// //         			placeholderHtml.show();
// //         		}
// //         		markLastChild($(placeholderHtml));
// //         		return elements.length;
// //     		}
// //        } 

// //        function renderButton() {
// //        		if (inputType == 'checkbox') {
// //        			btnGroup.find('li.list-item.active').length != 0 ? placeholder.addClass('hide') : placeholder.removeClass('hide');
// //        		}
// //        }

// //         function markLastChild(parent){
// //         	$(parent).find('span[data-value]').removeClass('last-visible');
// //         	$(parent).find('span[data-value]:visible:last').addClass('last-visible');
// //         }    

// //         function markAll(list) {
// //         	var li 			= 	$('<li>', {'html': '<a><input type="checkbox"><label>Select all</label></a>', 'class': 'select-all'}),
// //         		selectedAll = false;
// //         	list.prepend(li);   
// //         	li.on('click', function(){
// //         		selectedAll ? selectedAll = false : selectedAll = true; 
// //         		$(this).find('input').prop("checked", !$(this).find('input').prop("checked"));
// //         		$(list).find('li.active').length == $(list).find('li').length ? selectedAll = false : selectedAll = true;

// //         		if (selectedAll) {
// //         			$(this).closest('ul').find('li').addClass('active');
// //             		$(list).find('input').prop('checked', true);
// //             		$.each($(this).closest('.btn-group').find('span[data-value]'), function() {
// //                     	$(this).removeClass('hide');
// //                     });	       
// //         		} else {     
// //             		$(this).closest('ul').find('li').removeClass('active');
// //             		$(list).find('input').prop('checked', false);
// //             		$.each($(this).closest('.btn-group').find('span[data-value]'), function() {
// //                     	$(this).addClass('hide');
// //                     });
// //         		} 
// //         		getSelected($(this).closest('.btn-group').find('li.list-item.active'));
// //         		renderButton();
// //         		return false;           		
// //         	});
// //         }

// //         function renderDropdown(inputType){
// //             btnGroup.append(btn);
// //             controlContainer.append(btnGroup);
// //             $.each(control, function(){
// //                 var li 		= 	$('<li>', {'title': '' || $(this).attr('title'), 'class': 'list-item'}),
// //                     input 	= 	$(this).find('input'),
// //                     label 	= 	$(this).find('label').length > 0 ? $(this).find('label') : $(this).parent().find('label'),
// //                     text	=	label.text(),
// //                     span 	=	$('<span>', { 'html': text, 'data-value': text.replace(/\s/g, ''), 'class': 'placeholder-item hide' });
// //                 if (input.prop('checked') == true) li.addClass('active');
// //                 var a = $('<a>').append(input,label);
// //                 li.append(a);
// //                 list.append(li);
// //                 btnGroup.append(list);
// //                 handleClick(li, list);
// //                 if (inputType == 'checkbox') placeholderHtml.append(span);
// //                 if (inputType == 'checkbox' && input.prop('checked')) span.removeClass('hide');                  
// //                 if (inputType == 'radio' && input.prop('checked')) placeholder.text(label.text());                   
// //             });
// //             if ($(hideContainer).length > 0) $(hideContainer).hide();
// //             if (inputType == 'checkbox') markAll($(list));
// //             markLastChild(placeholderHtml);
// //             btnAction.append(placeholderHtml);
// //             list.removeClass('dropdown-menu');  
// //             getSelected(btnGroup.find('li.list-item.active'));
// //             list.addClass('dropdown-menu');  
// //             renderButton();
// //         }
// //         renderDropdown(inputType);

// //         function handleClick(element, parentList){
// //             element.on('click', 'a', function(){
// //                 var input 	= 	element.find('input'),
// //                     prop 	= 	input.prop('checked'),
// //                     link	=	$(this);
// //                 	list 	= 	parentList,
// //                 	grpLoc  =	$(this).closest('.btn-group');
// //                 if (inputType == 'checkbox') {
// //                     if (prop == true){
// //                         prop = false;
// //                         link.parent('li').removeClass('active');
// //                         $(this).closest('ul').find('.select-all').removeClass('active');
// //                         $(this).closest('ul').find('.select-all input').prop('checked', false);
// //                         $.each($(this).closest('.btn-group').find('span'), function() {
// //                         	if (link.find('label').text().replace(/\s/g, "") === $(this).data('value')) $(this).addClass('hide');
// //                         });
// //                     } else {
// //                         prop = true;
// //                         link.parent('li').addClass('active');
// //                         $.each($(this).closest('.btn-group').find('span'), function() {
// //                         	if (link.find('label').text().replace(/\s/g, "") === $(this).data('value')) $(this).removeClass('hide');
// //                         })
// //                     }
// //                     input.prop('checked', prop);
// //                     markLastChild($(this).closest('.btn-group'));
// //                     $(this).closest('.btn-group').find('.placeholder-item:visible').length != 0 ? placeholder.addClass('hide') : placeholder.removeClass('hide');
// //                     getSelected($(this).closest('.btn-group').find('li.list-item.active'))
// //                 }
// //                 if (inputType == 'radio') {
// //                     list.find('input').prop('checked', false);
// //                     list.find('li').removeClass('active');
// //                     link.parent('li').addClass('active');
// //                     link.find(input).prop('checked', true);
// //                     list.parent('.btn-group').removeClass('open');
// //                     placeholder.text($(this).find('label').text())
// //                 }
// //                 renderButton();
// //                 return false;
// //             });
// //         }
// //     }
// // }

// // jQuery(document).ready(function () {
// //   inputsToDropdown('.filter', 'Suchen in...', 'radio', '.filter', '');
// // });
// jQuery( document ).ajaxComplete(function() {

//     // hide breadcrumb links between
//  jQuery('nav.jsdBreadcrumb').each(function (index, element) {
//     var breadcrumb_el_first = jQuery(this).find("ol > li:nth(2)");
//     var breadcrumb_items = jQuery(this).find("ol > li").length;

//     if(breadcrumb_items > 3) {
//         jQuery(breadcrumb_el_first).before("<li class='list-inline-item'><span class='breadcrumb_dots bold'>···</span><span class='raquo'>›</span></li>");
//         jQuery(breadcrumb_el_first).nextUntil('li.current').addBack().wrapAll("<li class='list-inline-item wrap'><ol class='list-unstyled list-inline breadcrumb_hide'></ol></li>");
//     }
//   });
//   jQuery('.breadcrumb_dots').on('click', function (e) {
//         e.preventDefault();
//         jQuery(this).parent('li').hide();
//         jQuery(this).parent().next('li').find('.breadcrumb_hide').fadeToggle(150, "linear").css("display", "inline");
//   });



// //  jQuery('.facet.panel-group').each(function (index, element) {
// //     //console.log('div' + index + ':' + $(this).attr('id'));
// //     //console.log(jQuery(this).find('.facet.active').length);
// //     if((jQuery(this).find('.facet.active').length) == 1){
// //       jQuery(this).find('a.dropdown-toggle').text(jQuery(this).find('.facet.active').first().text());
// //       jQuery(this).addClass('active');
// //     }
// //     if((jQuery(this).find('.facet.active').length) > 1){
// //       jQuery(this).find('a.dropdown-toggle').html(jQuery(this).find('.facet.active').first().text() + '<span> +' + (jQuery(this).find('.facet.active').length) + '</span>');
// //       jQuery(this).addClass('active');
// //     }
// //   });
// //     //hide Stellensuche-Facets
// //   //jQuery('#facet-accordion-fullparttime').addClass('unseen');
// //   jQuery('#facet-accordion-institiution').addClass('showhidden');
// //   jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   //jQuery('#facet-accordion-einrichtungstyp').removeClass('showhidden');
// //   //jQuery('#facet-accordion-fachbereich').addClass('showhidden');
// //   jQuery('#facet-accordion-institiution').addClass('showhidden');
  
// //   if (jQuery('#facet-accordion-einrichtungstyp a.facet input').is(':checked')){
// //     jQuery('#facet-accordion-fachbereich').addClass('showhidden');
// //   }
// //   if (jQuery('#facet-accordion-bundesland a.facet input').not('#bundesland-Berlin').is(':checked')){
// //     jQuery('#facet-accordion-bezirk').addClass('showhidden');
// //   }
// //   if (jQuery('#bundesland-Berlin').is(':checked')) {
// //      jQuery('#facet-accordion-bezirk').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Stellenangebote').is(':checked')) {
// //      //jQuery('#facet-accordion-fullparttime').addClass('showhidden');
// //      jQuery('#facet-accordion-activity').addClass('showhidden');
// //      jQuery('#facet-accordion-arbeitsverhaeltnis').addClass('showhidden');
// //      jQuery('#facet-accordion-einrichtungstyp').removeClass('showhidden');
// //      jQuery('#facet-accordion-fachbereich').removeClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Einrichtungen').is(':checked')) {
// //       jQuery('#facet-accordion-institiution').removeClass('showhidden');
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
      
// //   }
// //   if (jQuery('#inhaltstyp-Presse').is(':checked')) {
// //       jQuery('#facet-accordion-fachbereich').removeClass('showhidden');
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Ansprechpartner').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
  
// //   if (jQuery('#inhaltstyp-Veranstaltungen').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //       jQuery('#facet-accordion-eventcats').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Seiten').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
// //   //end ShowHide
  
// // });

// // jQuery(function() {
// //   jQuery('.powermail_fieldset .row div:first-child').click(function() {
// //     //console.log("helllo");
// //     jQuery(this).next().toggleClass("off");
// //   });
// //   jQuery('button[type="reset"].powermail_reset').click(function() {
// //     //console.log('resetttt');
// //     //jQuery('.powermail_form').trigger("reset");
// //     jQuery(window).scrollTop(0);
// //     location.reload();
// //   });
// // });


// jQuery( document ).ready(function() {
// //remove ajax reloading from certain pages
// // if (
// //    (jQuery('.container').hasClass('uid-84')) ||
// //    (jQuery('.container').hasClass('uid-79')) ||
// //    (jQuery('.container').hasClass('uid-9'))  ||
// //    (jQuery('.container').hasClass('uid-91')) ||
// //    (jQuery('.container').hasClass('uid-96'))
// //    )
// // {
// //   jQuery('.solr-ajaxified').removeClass('solr-ajaxified');
// // }

// //remove escaped br-Tags
// jQuery('.frame-type-menu_sitemap_pages ul li a span').each(function(i){
//   var newValue = jQuery(this).text().replace('<br>', ' ');
//   jQuery(this).text( newValue );
//   //console.log(jQuery(this).text());
// });
// // jQuery('.facet-type .dropdown-menu a.facet').each(function(i){
// //   var newValues = jQuery(this).text().replace(/\+/g,' ')
// //   jQuery(this).text( newValues );
// //   //console.log(jQuery(this).text());
// // });

// // jQuery('a.remove-facet-option').each(function(i){
// //   var newValuess = jQuery(this).html().replace(/\+/g,' ')
// //   jQuery(this).html( newValuess );
// //   //console.log(jQuery(this).text());
// // });
// //fix duplicate ids in accordion bug
// jQuery("div[id^='akkord-content-']").each(function(i){
//     jQuery(this).attr('id', jQuery(this).attr('id') + '-' + i);
//     jQuery(this).prev().find('button').attr('data-target', '#' + jQuery(this).attr('id'));
// });
// jQuery(".mod_bildergalerie a.lightbox").each(function(i){
//     jQuery(this).attr('data-featherlight', '');
// });
//     // hide breadcrumb links between
//  jQuery('nav.jsdBreadcrumb').each(function (index, element) {
//     var breadcrumb_el_first = jQuery(this).find("ol > li:nth(2)");
//     var breadcrumb_items = jQuery(this).find("ol > li").length;

//     if(breadcrumb_items > 3) {
//         jQuery(breadcrumb_el_first).before("<li class='list-inline-item'><span class='breadcrumb_dots bold'>···</span><span class='raquo'>›</span></li>");
//         jQuery(breadcrumb_el_first).nextUntil('li.current').addBack().wrapAll("<li class='list-inline-item wrap'><ol class='list-unstyled list-inline breadcrumb_hide'></ol></li>");
//     }
//   });
//   jQuery('.breadcrumb_dots').on('click', function (e) {
//         e.preventDefault();
//         jQuery(this).parent('li').hide();
//         jQuery(this).parent().next('li').find('.breadcrumb_hide').fadeToggle(150, "linear").css("display", "inline");
//   });


// //  if (jQuery(".tx-solr-q").val().length === 0 ){
// //    jQuery(".tx-solr-q").attr("placeholder", "Suchbegriff eingeben").val("").focus().blur();
// //  }
// //  jQuery('.facet.panel-group').each(function (index, element) {
// //     //console.log('div' + index + ':' + $(this).attr('id'));
// //     //console.log(jQuery(this).find('.facet.active').length);
// //     if((jQuery(this).find('.facet.active').length) == 1){
// //       jQuery(this).find('a.dropdown-toggle').text(jQuery(this).find('.facet.active').first().text());
// //     }
// //     if((jQuery(this).find('.facet.active').length) > 1){
// //       jQuery(this).find('a.dropdown-toggle').html(jQuery(this).find('.facet.active').first().text() + '<span> +' + (jQuery(this).find('.facet.active').length) + '</span>');
// //     }
// //   });
//     //hide Stellensuche-Facets
//   //jQuery('#facet-accordion-fullparttime').addClass('unseen');
// //   jQuery('#facet-accordion-institiution').addClass('showhidden');
// //   jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   //jQuery('#facet-accordion-einrichtungstyp').removeClass('showhidden');
// //   //jQuery('#facet-accordion-fachbereich').addClass('showhidden');
// //   jQuery('#facet-accordion-institiution').addClass('showhidden');
// //   if (jQuery('#facet-accordion-einrichtungstyp a.facet input').is(':checked')){
// //     jQuery('#facet-accordion-fachbereich').addClass('showhidden');
// //   }
// //   if (jQuery('#facet-accordion-bundesland a.facet input').not('#bundesland-Berlin').is(':checked')){
// //     jQuery('#facet-accordion-bezirk').addClass('showhidden');
// //   }
// //   if (jQuery('#bundesland-Berlin').is(':checked')) {
// //      jQuery('#facet-accordion-bezirk').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Stellenangebote').is(':checked')) {
// //      //jQuery('#facet-accordion-fullparttime').addClass('showhidden');
// //      jQuery('#facet-accordion-activity').addClass('showhidden');
// //      jQuery('#facet-accordion-arbeitsverhaeltnis').addClass('showhidden');
// //      jQuery('#facet-accordion-einrichtungstyp').removeClass('showhidden');
// //      jQuery('#facet-accordion-fachbereich').removeClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Einrichtungen').is(':checked')) {
// //       jQuery('#facet-accordion-institiution').removeClass('showhidden');
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
      
// //   }
// //   if (jQuery('#inhaltstyp-Presse').is(':checked')) {
// //       jQuery('#facet-accordion-fachbereich').removeClass('showhidden');
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Ansprechpartner').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
  
// //   if (jQuery('#inhaltstyp-Veranstaltungen').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //       jQuery('#facet-accordion-eventcats').addClass('showhidden');
// //   }
// //   if (jQuery('#inhaltstyp-Seiten').is(':checked')) {
// //       jQuery('#facet-accordion-einrichtungstyp').addClass('showhidden');
// //   }
//   //end ShowHide
  
//   //replace select for uniform mobile usage
// });
