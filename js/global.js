$(document).ready(function(){


		$('.img-post a').lightBox({
			imageBtnPrev: '/images/lightbox-btn-prev.gif',
				imageBtnNext: '/images/lightbox-btn-next.gif',
		});
		
		$(".box_dentro:first").css('display', 'block');
			var altura_box;
			altura_box = $(".box_dentro:first").height();
			$("#editais").css("height", altura_box+"px");
		$(".box_principal h3").click(function(){
			var open_box;
			
			open_box = $(this).attr("data");
			altura_box = $("#"+open_box).height();
			$("h3.active").removeClass("active");
			$(this).addClass("active");
			$(".box_dentro").hide();
			$("#editais").css("height", altura_box+"px");
			$("#"+open_box).show();
		})
	
	
	$("#editar a").add("link-green");
	
	//BreadCrumb [START]
	$(".breadcrumb a:eq(0), .breadcrumb a:eq(1), .breadcrumb a:last, .breadcrumb span:eq(0), .breadcrumb span:eq(1), .breadcrumb span:last").css("display" , "none");
	var ponto = $(".breadcrumb a:eq(1)").text();
	if (ponto){
		$("#title h1").text(ponto);
	} else {
		ponto = $(".breadcrumb a:eq(0)").text();
		$("#title h1").text(ponto);
	}
	//BreadCrumb [END]
		
	//Divide colunas Banner principal [START]
	var menublock = [ ".menu-block-4" , ".menu-block-5", ".menu-block-6", ".menu-block-7", ".menu-block-12"];
	
	
	for (var j=0; j<5; j++){
		var $bigList = $(menublock[j]+' ul'),
		group = $bigList.find('li:lt(4)').remove();
		
		while(group.length){
			$('<ul/>').append(group).appendTo(menublock[j]);
			group = $bigList.find('li:lt(4)').remove();
		}
		$bigList.remove();
	}
	//Divide colunas Banner principal [END]
	
	
	//Banner Principal [START]
	$("#secundary-menu li:eq(0)").addClass('grey');
	$("#secundary-menu li:eq(1)").addClass('blue');
	$("#secundary-menu li:eq(2)").addClass('green');
	$("#secundary-menu li:eq(3)").addClass('yellow');
	$("#secundary-menu li:eq(4)").addClass('red');
	$("#secundary-menu li, #title h1").append("<span></span>");
	$("#submenu a, .link-gray").wrapInner("<span />");
	
	$("#secundary-menu a").click(function(){
		var rel = $(this).attr("rel");
		var display = $("#menu-top .menu-top."+rel).css("display");
		if(display == "none"){
			$("#menu-top .menu-top").slideUp("fast");
			$("#menu-top .menu-top."+rel).slideDown();	
	};
		
		$("#menu-top .menu-top h6").show("fast", function(){
			var t = $(this).parent().find("li:first a").text();
			$(this).text(t);
		});
				
		return false;
		
	});

	$("#menu-top .menu-top").hover(
		function (){ }, 
		function (){ $(this).slideUp("fast");}
	);		
	
	$("#menu-top .menu-top li a").hover(function () {
		var text = $(this).text();
		$(this).parent().parent().parent().parent().parent().find("h6").text(text);
	});
	//Banner Principal [END]
	
	//Accordeon [START]
	/*$("li.expanded > a:nth-child(1)").click(function(){
		var i = $(this).parent().attr("class");
		var display = $(this).parent().find("ul").css("display");
		
		if(display == "none"){
			if (i == "expanded"){
				$(".collapse ul").slideUp();
				$(".expanded").removeClass("collapse");
			} else {
				$(".expanded").removeClass("collapse");
				$(".expanded ul").slideUp();
				$(this).parent().find("ul").slideDown();
				$(this).parent().addClass("collapse");
			}
		}
		return false;
	});
	*/
	$(".expanded.active").find("ul").slideDown();
	$(".expanded li.active").parent().parent().find("ul").show();
	//Accordeon [END]
	
	//Player [START]
	$('a.audio').media({
		width: 300,
		height: 20,
		bgColor: 'none'
	});
	
	$('a.video').media({width:300, height:200});
	$('a.video-imprensa').media({width:300, height:121});
	//Player [END]
	
	//Banner Home [Start]
	$("#banner").cycle({ 
		timeout:	'7000',
	    pager:  '#banner-nav',
	    width:   '960px'
	});
	//Banner Home [END]
	
	//Histórico [Start]
	$("#historico-menu li:first a").addClass('active');
	$("dl.historico-content:first").slideDown();
	
	$("#historico-menu li a").click(function(){
		var year = $(this).attr("rel");
		var display = $("#ano-"+year).css("display");
		if(display == 'none'){
			$("dl.historico-content").slideUp();
			$("#historico-menu li a").removeClass();
			$("#ano-"+year).slideDown();
			$(this).addClass('active');
		}
		return false;
	});
	//Histórico [END]
	
	
	//Corrigir Z-index ie7 [START]
	$(function() {
		var zIndexNumber = 1300;
		$('#menu-top div').each(function() {
			$(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});
	});
	//Corrigir Z-index ie7 [END]
	
	//Opções
	$('#font-more').click(function(){
		$('.content-text p, .faq').animate({
			fontSize: "+=2px",
			lineHeight : "+=2px"
		})
	});
	
	$('#font-minus').click(function(){
		$('.content-text p, .faq').animate({
			fontSize: "-=2px",
			lineHeight : "-=2px"
		})
	});
	
	// Print
	$(".print").click(function(){
		window.print();
		return false;
	});
	
	// Links rotativos
	
	
	function runTimer() {
		var next = $('#footer-links table tr.active').next().length ? $('#footer-links table tr.active').next() : $('#footer-links table tr:first');
		$('#footer-links table tr.active').fadeOut('fast', function() {
   			$(this).removeClass('active');
   			$(next).fadeIn('fast', function() { $(this).addClass('active'); });
		});
		
		$(next).siblings().fadeOut('fast');
		var timeout =  window.setTimeout(runTimer,6000);
    }
	
	$('#footer-links table tr').first().addClass('active');
	var timeout =  window.setTimeout(runTimer,6000);
	
});