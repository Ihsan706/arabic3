<?php
$sources = [
	"المديرية العامة لمكافحة المخدرات (ويكيبيديا)" => "https://ar.wikipedia.org/wiki/%D8%A7%D9%84%D9%85%D8%AF%D9%8A%D8%B1%D9%8A%D8%A9_%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9_%D9%84%D9%85%D9%83%D8%A7%D9%81%D8%AD%D8%A9_%D8%A7%D9%84%D9%85%D8%AE%D8%AF%D8%B1%D8%A7%D8%AA_(%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9)",
	"خبر من صحيفة الرياض" => "https://www.alriyadh.com/2131476",
	"جهود المملكة العربية السعودية في مكافحة المخدرات" => "https://mhtwyat.com/%d8%ac%d9%87%d9%88%d8%af-%d8%a7%d9%84%d9%85%d9%85%d9%84%d9%83%d8%a9-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a%d8%a9-%d8%a7%d9%84%d8%b3%d8%b9%d9%88%d8%af%d9%8a%d8%a9-%d9%81%d9%8a-%d9%85%d9%83%d8%a7%d9%81/",
	"وزارة الداخلية - مكافحة المخدرات" => "https://www.moi.gov.sa/wps/portal/Home/sectors/narcoticscontrol/contents/!ut/p/z1/pVNLT8JAEL77K3rhSGbaLu1yXAnSAsZULLR7MdsHuoY-KA2Vf-9CNNEYWpQ5bGY333zz-hb4jabdKINAOcr9flx4AZ6LvXwRtSxysYEAQm49o0uIoxNjNhn4t8g8b7YcGmMdrQGsToDRhDnEniPS-WSALnP8x6FnmshM4JfE4xlj2BW_BA68jGUCoUVwmFJEkpAoMtZEGIm1tqM0sWNBTYuekLvmCOX2WU5mHXFxXpf1K4S5qOKilvFOi4u8ropND389aaLqYZmqcdUy3X11dL5k3t7wtLVl14aFqFQS_hOGjN4hY-bScWzPeKD6J6BtM12V8K5KwtZJ3hNY7WXagJ8XVabEtPjDrhzsYtevYO-gtq-gnnYpVn0p-bbdcqZUpgSUvtcQ_ENmZeb7GTWzfnAYS7cfTvdN87TORhE9NB-pjN5i/dz/d5/L2dBISEvZ0FBIS9nQSEh/"
];
?>
<html lang="EN">
<header>
<meta charset="UTF-8">
<style>
.img{
	object-fit: cover;
    height: auto;
}

.listitem{
	/*
	width: fit-content;
    height: 9vh;
    display: flex;
    font-size: 8vh;
    overflow: clip;
    margin-bottom: 1vh;
	*/
	width: auto;
    height: 9vh;
    display: grid;
    font-size: 5vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, #67ffc7, #28bdbd94);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
.listitem:hover{
	background: linear-gradient(45deg, #67ffc7, #00ffff94);
}
@keyframes url{
	0%{opacity:0;}
	100%{opacity:1;}
}
#back{
	width: fit-content;
    height: 5vh;
    display: flex;
    font-size: 3vh;
    overflow: clip;
    margin-bottom: 1vh;
	
	
	background: linear-gradient(45deg, red, white);
    padding: 0.5vh;
    border: 0px;
    border-radius: 1vh;
	
	transition-duration: 1s;
    transition-timing-function: ease-in-out;
	
	animation-timing-function: ease-in-out;
    animation-name: url;
    animation-duration: 3s;
}
#back:hover{
	background: linear-gradient(45deg, red , #ababab);
}
</style>
</header>
<body>
<button type="button" onclick="back();" id="back">&#8592 ارجع</button>
<div id="list">
<ul>
<?php
$i = 1;
foreach($sources as $sourceindex => $source){
	?>
	<li>
	<button class="listitem" onclick="openSource<?= $i ?>();" >
	<img class="img" src='http://www.google.com/s2/favicons?domain=<?= $source ?>' />
	<?= $sourceindex; ?>
	</button>
	</li>
<?php
$i++;
}
?>
</ul>
</div>
<script>
function back(){
	window.open("2.html","_self")
}
//this is how to creat an element in js
/*
const para = document.createElement("p");
para.innerText = "This is a paragraph";
document.body.appendChild(para);
*/
<?php
$i = 1;

foreach ($sources as $sourceindex => $source) {
?>
function openSource<?= $i ?>() {
    window.open("<?= htmlspecialchars($source, ENT_QUOTES, 'UTF-8'); ?>", "_self");
}
<?php
    $i++;
}
?>
function back(){
	window.open("2.html","_self");
}
</script>
</body>
</html>