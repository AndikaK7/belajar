<!DOCTYPE html>
<html>
<head>
	<title>Belajar JS</title>
	
	<script type="text/javascript" src="TypeWriting.js-master/src/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="TypeWriting.js-master/src/typed.js"></script>
	<link rel="stylesheet" type="text/css" href="TypeWriting.js-master/src/main.css">
	<script type="text/javascript">
	$(document).ready(function(){
		$('#da').click(function(){
			$(this).animate({"top":"+=20px"}, "slow");
		});
        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

	</script>

    <style >
        div{
        	height: 100px;
        	width:100px;
        	background: red;
        }
    </style>
</head>
	
		<body>
			<div id="da" style="position:absolute;">
				

			</div>
			<button id="klik">Klik</button>
		</body>

</html>