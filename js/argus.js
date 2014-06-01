Argus = {
	getFormattedDate: function(date) {
		var year = date.getFullYear();
		var month = (1 + date.getMonth()).toString();
		month = month.length > 1 ? month : '0' + month;
		var day = date.getDate().toString();
		day = day.length > 1 ? day : '0' + day;
		month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"][month-1]
		return month + ' ' + day + ', ' + year;
	}
}
$(".header h1").fitText(1.2);
$("nav li").fitText();
$('.date').html(Argus.getFormattedDate(new Date()));

$('#search i').click(function() {
	var input = $('#search input');
	if(input.width() < 100) {
		input.focus();
	} else {
		window.location = '/?s=' + input.val();
	}
});

$("#search input").keydown(function(e) {
  if (e.keyCode == 13) {
    window.location = '/?s=' + $('#search input').val();
  }
});