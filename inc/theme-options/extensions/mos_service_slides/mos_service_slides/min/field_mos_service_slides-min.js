!function($){"use strict";redux.field_objects=redux.field_objects||{},redux.field_objects.mos_service_slides=redux.field_objects.mos_service_slides||{},$(document).ready(function(){}),redux.field_objects.mos_service_slides.init=function(e){e||(e=$(document).find(".redux-group-tab:visible").find(".redux-container-mos_service_slides")),$(e).each(function(){var e=$(this);redux.field_objects.media.init(e);var i=e;e.hasClass("redux-field-container")||(i=e.parents(".redux-field-container:first")),i.hasClass("redux-container-mos_service_slides")&&i.addClass("redux-field-init"),i.hasClass("redux-field-init")&&(i.removeClass("redux-field-init"),e.find(".redux-slides-remove").live("click",function(){redux_change($(this)),$(this).parent().siblings().find('input[type="text"]').val(""),$(this).parent().siblings().find("textarea").val(""),$(this).parent().siblings().find('input[type="hidden"]').val("");var e=$(this).parents(".redux-container-mos_service_slides:first").find(".redux-slides-accordion-group").length;if(e>1)$(this).parents(".redux-slides-accordion-group:first").slideUp("medium",function(){$(this).remove()});else{var i=$(this).parent(".redux-slides-accordion").data("new-content-title");$(this).parents(".redux-slides-accordion-group:first").find(".remove-image").click(),$(this).parents(".redux-container-mos_service_slides:first").find(".redux-slides-accordion-group:last").find(".redux-slides-header").text(i)}}),e.find(".mos_redux-slides-add").click(function(){var e=$(this).prev().find(".redux-slides-accordion-group:last").clone(!0),i=$(e).find(".slide-title").attr("name").match(/[0-9]+(?!.*[0-9])/),t=1*i+1;$(e).find('input[type="text"], input[type="hidden"], textarea').each(function(){$(this).attr("name",jQuery(this).attr("name").replace(/[0-9]+(?!.*[0-9])/,t)).attr("id",$(this).attr("id").replace(/[0-9]+(?!.*[0-9])/,t)),$(this).val(""),$(this).hasClass("slide-sort")&&$(this).val(t)});var d=$(this).prev().data("new-content-title");$(e).find(".screenshot").removeAttr("style"),$(e).find(".screenshot").addClass("hide"),$(e).find(".screenshot a").attr("href",""),$(e).find(".remove-image").addClass("hide"),$(e).find(".redux-slides-image").attr("src","").removeAttr("id"),$(e).find("h3").text("").append('<span class="redux-slides-header">'+d+'</span><span class="ui-accordion-header-icon ui-icon ui-icon-plus"></span>'),$(this).prev().append(e)}),e.find(".slide-title").keyup(function(e){var i=e.target.value;$(this).parents().eq(3).find(".redux-slides-header").text(i)}),e.find(".redux-slides-accordion").accordion({header:"> div > fieldset > h3",collapsible:!0,active:!1,heightStyle:"content",icons:{header:"ui-icon-plus",activeHeader:"ui-icon-minus"}}).sortable({axis:"y",handle:"h3",connectWith:".redux-slides-accordion",start:function(e,i){i.placeholder.height(i.item.height()),i.placeholder.width(i.item.width())},placeholder:"ui-state-highlight",stop:function(e,i){i.item.children("h3").triggerHandler("focusout");var t=$("input.slide-sort");t.each(function(e){$(this).val(e)})}}))})}}(jQuery);