// JQuery scripts
$(document).ready(function(){
	// Tooltips
	$('[data-toggle="tooltip"]').tooltip({
		container:'body',
		trigger: 'hover',
		placement: 'left'
	});

	// Buttons
	$('#btn-home').click(function(event) {
    event.preventDefault();
    parent.history.back();
    return false;
  });

	$('#btn-jprro-cpanel').click(function(){
		window.open('https://serv4.dsserverjhb3.com:2083/','_blank');
	});

	$('#btn-bootstrap').click(function(){
		window.open('https://getbootstrap.com/','_blank');
	});

	$('#btn-ccna').click(function(){
		window.open('/home/ccna/index.html','_self');
	});
	$('#btn-ccnp').click(function(){
		//window.open('#','_blank');
		alert("WARNING: Not Active Yet");
	});
	$('#btn-ccie').click(function(){
		//window.open('#','_blank');
		alert("WARNING: Not Active Yet");
	});

	$('#btn-coreyms').click(function(){
		window.open('https://coreyms.com/','_blank');
	});
	$('#btn-regex').click(function(){
		window.open('https://docs.python.org/3/howto/regex.html','_blank');
	});
	$('#btn-python-sample-code').click(function(){
		window.open('https://developer.cisco.com/site/python/','_blank');
	});
	$('#btn-skulpt').click(function(){
		window.open('http://skulpt.org/','_blank');
	});
	$('#btn-program-creek').click(function(){
		window.open('https://www.programcreek.com/','_blank');
	});

	/* Tutoral Information Related to Harvard Course */
	$('#btn-django').click(function(){
		window.open('https://www.djangoproject.com/','_blank');
	});
	$('#btn-course-ware').click(function(){
		window.open('https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home','_blank');
	});
	$('#btn-edx-profile').click(function(){
		window.open('https://profile.edx.org/u/johnpo1f67','_blank');
	});
	$('#btn-github-docs').click(function(){
		window.open('https://docs.github.com/en/github/writing-on-github/basic-writing-and-formatting-syntax/','_blank');
	});
	$('#btn-github-login').click(function(){
		window.open('https://github.com/login','_blank');
	});

	/* Harvard Buttons for Different Options */
	$('#btn-harv').click(function(){
		window.open('/projects/index.html','_self');
	});
	$('#btn-proj-0').click(function(){
		window.open('/projects/project0/index.html','_blank');
	});
	$('#btn-proj-1').click(function(){
		window.open('http://127.0.0.1:8000','_blank');
	});
	$('#btn-submit-cs50').click(function(){
		window.open('https://submit.cs50.io','_blank');
	});

	/* JPRRO Button */
	$('#btn-jprro').click(function(){
		window.open('/home/jprro/index.html','_blank');
	});

	/* PHP MyAdmin and other local Buttons */
	$('#btn-myad').click(function(){
		window.open('/srv/www/htdocs/phpMyAdmin/','_blank');
	});
	$('#btn-dashb').click(function(){
		window.open('/srv/www/htdocs/bitnami/dashboard/','_blank');
	});

	$('#btn-pyth').click(function(){
		window.open('http://localhost:81/test.py','_blank');
	});
	$('#btn-scrpt-1').click(function(){
		window.open('http://localhost:81/readfile.py','_blank');
	});
	$('#btn-tst').click(function(){
		window.open('/home/test/index.html','_self');
	});
	$('#btn-wdev').click(function(){
		window.open('#','_blank');
	});

	/* Cisco CCNA Buttons for Different Lessons */
	$('#btn-lesson-1').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-1").offset().top},600);
	});
	$('#btn-lesson-2').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-2").offset().top},600);
	});
	$('#btn-lesson-3').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-3").offset().top},600);
	});
	$('#btn-lesson-4').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-4").offset().top},600);
	});
	$('#btn-lesson-5').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-5").offset().top},600);
	});
	$('#btn-lesson-6').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-6").offset().top},600);
	});
	$('#btn-lesson-7').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-7").offset().top},600);
	});
	$('#btn-lesson-8').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-8").offset().top},600);
	});
	$('#btn-lesson-9').click(function(){
		$('html, body').animate({scrollTop : $("#lesson-9").offset().top},600);
	});
	$('#btn-examp-collection-top').click(function(){
		$('html, body').animate({scrollTop : $("#exam-collection").offset().top},600);
	});
});
