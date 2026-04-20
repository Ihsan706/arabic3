<button id="a" onclick="back();">&#8592; الرجوع</button>
<?php
chdir("data");

$subjects = [];
$raw_data = [];

$data = json_decode(file_get_contents("files.json"), true);

foreach($data as $main => $FileName){
	$FileData = file_get_contents($FileName);
	$subjects[$main] = $FileData;
}

$raw_data_json = json_decode(file_get_contents("lists.json"), true);

foreach($raw_data_json as $main => $FileName){
	$FileData = file_get_contents($FileName);
	$raw_data[$main] = $FileData;
}



foreach($subjects as $main_subject => $data){
	//$data = $side_texts[$main_subject];
	
	?><section class="section" id="<?= $main_subject; ?>">
	<h1 class="main_subject"><?= $main_subject; ?></h1>
	<h3 class="side_text" >
		<?php
		$side_text_array = explode(" ",$data);
		foreach($side_text_array as $side_text_word){
			?>
			<div class="text_anm" style="animation-range-end: <?= rand(0,45); ?>vh;">
				<?= " ".$side_text_word; ?>
			</div>
			<?php
		}
		echo $raw_data[$main_subject];
		?>
	</h3>
	</section>
<?php
}


/* */
?>
<h6>تم برمجة الموقع من احسان سميح الشريف</h6>
<style>
@media (prefers-color-scheme: light) {
:root{
	--background: #f8fafc;      /* very light gray */
	--MainColor: #b91c1c;      /* deep elegant red */
	--SecondaryColor: #0ea5e9; /* vibrant but clean blue */
}
}

@media (prefers-color-scheme: dark) {
:root{
	--background: #020617;     /* rich dark (almost black, but better) */
	--MainColor: #f87171;      /* soft glowing red */
	--SecondaryColor: #38bdf8; /* bright readable blue */
}
}

*{
	text-align: center;
}
.main_subject{
	animation-name: main;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
	
	font-size: 5vh;
    color: var(--MainColor);
}
html,body{
	background: var(--background);
    color: white;
	direction: rtl;
}
.text_anm{
	display: inline-grid;
}
/*now the side text animation */
.text_anm{
	animation-name: side;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
}
@keyframes side{
	from{
		opacity: 0;
		filter: blur(25px);
		transform: perspective(10px);
		scale: 3;
		color: white;
	}
	to{
		opacity: 1;
		transform: translateY(0vh) rotate(0deg);
		scale: 1;
		color: var(--SecondaryColor);
		filter: blur(0px);
	}
}
.side_text{
	font-size:3vh;
	color:var(--SecondaryColor);
}
h3{
	margin-bottom:1vh;
}
/*now the big text animation */
.main_subject{
	display: inline-grid;
	animation-name: main;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 50vh;
}
@keyframes main{
    from{opacity:0.5;color:var(--background)}
	to{opacity:1; color:var(--MainColor);}
}
/* done with the animation */
h6{
	margin-top: 50vh;
	font-size:5vw;
}
#a{
    position: unset;
    display: flex;
    direction: ltr;
	
	color: var(--MainColor);
	/*background: var(--SecondaryColor);*/
	z-index:2;
}

/* the css might look missy becose i add some stuff in a huury */
/* new */
li{
	margin-bottom:2vh;
	animation-name: side;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
}

.section:target{
	background: #0e40ff24;  /* #6e8cff69 */
	animation-name: target;
    animation-timing-function: ease-in-out;
    animation-duration: 5s;
}
@keyframes target{
	from{
		background: #00ffa3bf;
		opacity:1;
	}
	to{
		background: #0e40ff24;
	}
}
html , body{
	overflow-x: clip;
}

</style>
<script>
function back(){
	window.open("2.html","_self");
}
</script>