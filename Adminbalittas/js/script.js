//event pada link

$('.halaman').on('click', function(e){

	//ambil isi href atau link
	var tujuan = $(this).attr('href');
	//tangkap elemen yg bersangkutan
	var elemenTujuan = $(tujuan);
	//
	//console.log($('body').scrollTop());
	//console.log(elemenTujuan.offset().top);


	//pindah scroll
	$('html, body').animate({
		scrollTop: elemenTujuan.offset().top - 74 //jarak buat atas dari masing2 fitur
	}, 1200, "easeInOutExpo"); //satuan milisecond
	e.preventDefault();

});

//parallax
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

$('.jumbotron img').css({
	'transform' : 'translate(0px, '+ wScroll/4 +'%)'
});

$('.jumbotron h1').css({
	'transform' : 'translate(0px, '+ wScroll/2 +'%)'
});

$('.jumbotron p').css({
	'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
});

});


//js checkbook 1
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
