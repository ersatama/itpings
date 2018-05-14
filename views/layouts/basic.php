<?php
use app\assets\MainAsset;
use yii\helpers\html;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<div class="menu-header">
		<div class="menu-header-top-in">
			<div class="menu-header-top-in-list">
				<div class="menu-header-top-in-list-btn">YouTube</div>
				<div class="menu-header-top-in-list-btn">Facebook</div>
				<div class="menu-header-top-in-list-btn">Twitter</div>
				<div class="menu-header-top-in-list-btn">LinkedIn</div>
				<div class="menu-header-top-in-list-btn">LiveJournal</div>
				<div class="menu-header-top-in-list-btn">Instagram</div>
				<div class="menu-header-top-in-list-btn">VK</div>
				<div class="menu-header-top-in-list-btn">Google+</div>
			</div>
		</div>
		<div class="menu-header-in">
			<a class="menu-header-in-left">
				<div class="menu-header-in-left-icon"></div>
				<div class="menu-header-in-left-title"><span class="menu-header-in-left-title-in">it</span>pings</div>
			</a>
			<div class="menu-header-in-right">
				
				<div class="menu-header-in-right-search">
					<div class="menu-header-in-right-search-icon"></div>
					<input type="text" class="menu-header-in-right-search-in" placeholder="search">
				</div>
				<div class="menu-header-in-right-list">
					<button class="menu-header-in-right-list-btn">Sign In</button>
					<button class="menu-header-in-right-list-btn sign-up-btn">Sign Up</button>
				</div>
			</div>
			<div class="menu-header-in-center">
				<div class="menu-header-in-center-list">
					
					<button class="menu-header-in-center-list-btn">Articles<div class="menu-header-in-center-list-btn-icon"></div>
						<div class="menu-list">
							<div class="menu-list-in">
								<div class="menu-list-in-main">
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">OS</div>
										<div class="menu-list-in-main-item-option">Linux</div>
										<div class="menu-list-in-main-item-option">BSD</div>
										<div class="menu-list-in-main-item-option">Unix</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Programming</div>
										<div class="menu-list-in-main-item-option">Python</div>
										<div class="menu-list-in-main-item-option">PHP</div>
										<div class="menu-list-in-main-item-option">MySQL</div>
										<div class="menu-list-in-main-item-option">Tools</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Networking</div>
										<div class="menu-list-in-main-item-option">Cisco</div>
										<div class="menu-list-in-main-item-option">IDS</div>
										<div class="menu-list-in-main-item-option">LAN</div>
										<div class="menu-list-in-main-item-option">VPN</div>
										<div class="menu-list-in-main-item-option">WAN</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Hardware</div>
										<div class="menu-list-in-main-item-option">Configuration</div>
										<div class="menu-list-in-main-item-option">Development</div>
										<div class="menu-list-in-main-item-option">Secuirty</div>
										<div class="menu-list-in-main-item-option">Troubleshooting</div>
										<div class="menu-list-in-main-item-option">Usage</div>
									</div>
									<div class="menu-list-in-main-item">
										<div class="menu-list-in-main-item-title">Other</div>
										<div class="menu-list-in-main-item-option">Gaming</div>
										<div class="menu-list-in-main-item-option">Multimedia</div>	
									</div>
								</div>
							</div>
						</div>
					</button>
					<button class="menu-header-in-center-list-btn">Online cources<div class="menu-header-in-center-list-btn-icon"></div>
						<div class="menu-list">
							<div class="menu-list-in menu-list-in-last">
								<div class="menu-list-in-main">
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Linux</div>
										<div class="menu-list-in-main-item-option">Linux Zero To Hero Project</div>
										<div class="menu-list-in-main-item-option">Secuirty</div>
										<div class="menu-list-in-main-item-option">Web</div>
									</div>
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Troubleshooting</div>
										<div class="menu-list-in-main-item-option">Linux Troubleshooting</div>
										<div class="menu-list-in-main-item-option">Protocols</div>
										<div class="menu-list-in-main-item-option">Switch</div>
										<div class="menu-list-in-main-item-option">Vlans</div>
									</div>
									<div class="menu-list-in-main-item menu-list-in-main-item-last">
										<div class="menu-list-in-main-item-title">Router</div>
										<div class="menu-list-in-main-item-option">Routing</div>
										<div class="menu-list-in-main-item-option">SCCP</div>
										<div class="menu-list-in-main-item-option">SIP</div>
										<div class="menu-list-in-main-item-option">STP</div>
									</div>
								</div>
							</div>
						</div>
					</button>
					<button class="menu-header-in-center-list-btn">Videos<div class="menu-header-in-center-list-btn-icon"></div></button>
					<button class="menu-header-in-center-list-btn">Users<div class="menu-header-in-center-list-btn-icon"></div></button>
					<button class="menu-header-in-center-list-btn">About</button>
				</div>
			</div>
			
		</div>
	</div>

	<div class="fixed-body">


		<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>
<div>Què és Lorem Ipsum?
Lorem Ipsum és un text de farciment usat per la indústria de la tipografia i la impremta. Lorem Ipsum ha estat el text estàndard de la indústria des de l'any 1500, quan un impressor desconegut va fer servir una galerada de text i la va mesclar per crear un llibre de mostres tipogràfiques. No només ha sobreviscut cinc segles, sinó que ha fet el salt cap a la creació de tipus de lletra electrònics, romanent essencialment sense canvis. Es va popularitzar l'any 1960 amb el llançament de fulls Letraset que contenien passatges de Lorem Ipsum, i més recentment amb programari d'autoedició com Aldus Pagemaker que inclou versions de Lorem Ipsum.

Per què el fem servir?
És un fet establert de forma evident que un lector es distraurà amb el contingut llegible d'una pàgina quan miri a la seva composició. El fet de fer servir Lorem Ipsum és perquè conté una distribució més o menys normal de lletres, de forma oposada a quan es fa servir "Contingut aquí, contingut aquí", aconseguint així que sembli català llegible. Molts paquets d'autoedició fan servir Lorem Ipsum com el seu model de text, i una cerca per "Lorem Ipsum" descobrirà molts llocs web encara a les baceroles. Diverses versions han anat evolucionant al llarg dels anys, a vegades per acident, a vegades a propòsit (inserint humor i coses per l'estil).


D'on ve?
Contràriament a la creença popular, Lorem Ipsum no és només text aleatori. Té les seves arrels en una peça clàssica de la literatura llatina del 45 aC, és a dir, de fa 2000 anys. Richard McClintock, un professor de llatí al Hampden-Sydney College a Virgínia, va buscar una de les paraules més estranyes del llatí, "consectetur", procedent d'un dels paràgrafs de Lorem Ipsum, i anant de citació en citació d'aquesta paraula a la literatura clàssica, en va descobrir l'orígen veritable. Lorem ipsum procedeix de les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" (Sobre el Bé i el Mal) de Ciceró, escrit l'any 45 aC. Aquest llibre és un tractat sobre la teoria de l'ètica, molt popular durant el Renaixement. La primera línia de Lorem Ipsum, "Lorem ipsum dolor sit amet..", prové d'una línia a la secció 1.10.32.

El fragment estàndard de Lorem Ipsum fet servir des del 1500 es reprodueix a continuació per tots aquells interessats. Les seccions 1.10.32 i 1.10.33 de "De Finibus Bonorum et Malorum" de Ciceró es reprodueixen en la seva forma original, acompanyades de les versions angleses de la traducció de 1914 feta per H. Rackham.

On puc aconseguir-ne una mica?
Hi ha moltes variacions dels passatges de Lorem Ipsum disponibles, però la majoria han sofert alteracions d'alguna manera, ja sigui per humor infiltrat, ja sigui per paraules aleatòries que no semblen gaire creïbles. Si vols fer servir un passatge de Lorem Ipsum, has d'estar segur que no hi haurà res comprometedor amagat en el text. Tots els generadors de Lorem ipsum a Internet tendeixen a repetir un tros determinat tantes vegades com calgui, i això fa que aquest sigui el primer generador real a Internet. Fa servir un diccionari d'unes 200 paraules llatines, combinades amb un grapat de models de frases per generar un Lorem Ipsum que sembli raonable. Així doncs, el Lorem Ipsum generat està lliure de repeticions, humor injectat, o paraules no característiques.</div>

		<div class="container-fluid">
			<button class="btn btn-primary">Success</button>
			<div class="row">
				<div></div>
			
				<div class="col-sm-3 col-md-4 display">SM 3</div><div class="col-sm-6 col-md-4 display">SM 6</div><div class="col-sm-3 col-md-4 display">SM 3</div>
			</div>
	
		</div>
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>