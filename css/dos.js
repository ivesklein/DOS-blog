$(function(){

	if("mozId" in navigator){//i hate firefox ¬¬
		alert("cucu");

		var xs = {
			"0":0,
			"1":-18,
			"2":-36,
			"3":-54,
			"4":-72,
			"5":-90,
			"6":-108,
			"7":-126,
			"8":-144,
			"9":-162,
			"A":-180,
			"B":-198,
			"C":-216,
			"D":-234,
			"E":-252,
			"F":-270
			};

		var ys = {
			"0":0,
			"1":-16,
			"2":-32,
			"3":-48,
			"4":-64,
			"5":-80,
			"6":-96,
			"7":-112,
			"8":-128,
			"9":-144,
			"A":-160,
			"B":-176,
			"C":-192,
			"D":-208,
			"E":-224,
			"F":-240
			};

		$.each($("i"),function(a,el){
			var clase = $(el).attr("class");
			//alert(el);
			var x = clase[2];
			var y = clase[1];
			//alert(x);

			$(el).css("backgroundPosition",xs[x]+"px "+ys[y]+"px");

		});

	}

})