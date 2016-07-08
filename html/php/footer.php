<footer>
	<a onclick="scrollToAnchor('top');" class="scrolling-box">></a>
	<div class="container">
		<div class="footer__phone-block">
			<div class="city">Телефоны: <a class="phone" href="tel:84952307755">8-495-230-77-55</a>, <a class="phone" href="tel:88007756959">8-800-775-69-59</a> </div>
		</div>
		<div class="footer__copyrights"><span>© 2016 Торгмаш - официальный дилер УАЗ, Geely, Chevrolet</span></div>

		<div class="footer__address"><span>Адреса автосалонов: 1. МКАД 88км (внешняя сторона) 2. ул. Иловайская 2Б, стр. 1 </div>
		<div class="footer__offer"><span>Вся представленная на сайте информация носит информационный характер и ни при каких условиях не является публичной офертой</span></div>
	</div>
</footer>

<div class="modal" id="popup-service" style="display: none">

  <?php
	include $_SERVER['DOCUMENT_ROOT'].'/html/php/forms/form-service.php'
	?>

</div>

<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script type="text/javascript" src="/js/jquery.als-1.7.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/additional-script.js"></script>
<script src="/js/jquery.colorbox-min.js"></script>

<!--noindex-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter7291771 = new Ya.Metrika({
					id:7291771,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					trackHash:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/7291771" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!--livetext-->
<script type='text/javascript'> /* build:::7 */
	var liveTex = true,
		liveTexID = 27714,
		liveTex_object = true;
	(function() {
		var lt = document.createElement('script');
		lt.type ='text/javascript';
		lt.async = true;
		lt.src = 'http://cs15.livetex.ru/js/client.js';
		var sc = document.getElementsByTagName('script')[0];
		if ( sc ) sc.parentNode.insertBefore(lt, sc);
		else  document.documentElement.firstChild.appendChild(lt);
	})();
</script>
<!--livetext-->


<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-32870279-1']);
	_gaq.push(['_setDomainName', 'torgmash-avto.ru']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>


<script type='text/javascript'>
	setTimeout("_gaq.push(['_trackEvent', '16 seconds', 'read'])",16000);
</script>
<!--/noindex-->