<html>
    
    <head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carlito:wght@400;700&display=swap" rel="stylesheet">
		<link rel='stylesheet' href="{{ asset('style/dashboard.style.css') }}"/>

        <script src="https://kit.fontawesome.com/b6c762e6a8.js" crossorigin="anonymous"></script>
    </head>
    <body class='' style='padding: 0px; overflow: auto; background-image: none;'>
    	<div style='padding:0px 0px 0px 0px;'>
    		<ul class='nav-li'>
    			<li> <a href="{{ url('mindanao/page1') }}"> To Dashboard </a> </li>
    			<li> <a href="{{ route('fetch') }}"> Graphical Map of the List of ODA Projects in Mindanao </a> </li>
    		</ul>
	    	<h1 class='center-it' style='font-size:40px;'> DIRECTORY OF OFFICIAL DEVELOPMENT ASSISTANCE (ODA) SOURCES/PARTNERS </h1>
	    	<div style='margin-top: 50px;'>
	    		<ul class='others-circles-it'>
	    			<li class='adb_logo'> 
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Asian Development Bank (ADB) </p>
	    					<p> website: <a href='https://www.adb.org' target="_blank">www.adb.org </a> </p>
	    					<p> Database: <a href='https://www.adb.org/projects' target="_blank"/> https://www.adb.org/projects </a> </p>
	    				</div>
	    			</li>
	    			<li class='aus_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> DFAT Australia </p>
	    					<p> website: <a href='https://www.philippines.embassy.gov.au' target="_blank">www.philippines.embassy.gov.au </a> </p>
	    					<p> Database: <a href='https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines' target="_blank"/> https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines </a> </p>
	    				</div>
	    			</li>
	    			<li class='eu_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> European Union (EU) </p>
	    					<p> website: <a href='https://eeas.europa.eu/delegations/philippines_en' target="_blank"> https://eeas.europa.eu/delegations/philippines_en </a> </p>
	    					<p> Portal Project: <a href='https://www.eeas.europa.eu/eeas/projects_en?s=176' target="_blank"/> httpshttps://www.eeas.europa.eu/eeas/projects_en?s=176 </a> </p>
	    					<!-- <p> Technical Cooperation Projects: <a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> </p> -->
	    				</div>
	    			</li>
	    			<li class='fao_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Food and Agriculture Organization (FAO) </p>
	    					<p> website: <a href='https://www.fao.org/philippines/' target="_blank"> www.fao.org/philippines/ </a> </p>
	    					<p> Database: 
	    						<a href='https://www.fao.org/philippines/our-programmes-projects/our-projects/en/' target="_blank"/> https://www.fao.org/philippines/our-programmes-projects/our-projects/en/ </a> 
	    					</p>
	    					<!--<p> Technical Cooperation Projects: 
	    						<a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> 
	    					</p> -->
	    				</div>
	    			</li>
	    			<li class='giz_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> German Agency for International Cooperation (GIZ) </p>
	    					<p> website: <a href='https://www.giz.de/en/html/index.html' target="_blank"> https://www.giz.de/en/html/index.html </a> </p>
	    					<p> Ongoing Projects: 
	    						<a href='http://www.giz.de/philippines' target="_blank"/> www.giz.de/philippines </a> 
	    					</p>
	    					<p> Project database:
	    						<a href='https://www.giz.de/projektdaten/region/2/countries/PH'/> https://www.giz.de/projektdaten/region/2/countries/PH </a> 
	    					</p>
	    				</div>
	    			</li>
	    			<li class='jica_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Japan International Cooperation Agency (JICA) </p>
	    					<p> website: <a href='https://www.jica.go.jp/english/' target="_blank"> www.jica.go.jp/english/ </a> </p>
	    					<p> ODA Loan Project Data: <a href='https://www2.jica.go.jp/en/yen_loan/index.php' target="_blank"/> https://www2.jica.go.jp/en/yen_loan/index.php </a> </p>
	    					<p> Technical Cooperation Projects: <a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> </p>
	    				</div>
	    			</li>
	    			<li class='koica_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Korea International Cooperation Agency (KOICA) </p>
	    					<p> website: <a href='https://www.koica.go.kr/english' target="_blank"> www.koica.go.kr/english </a> </p>
	    					<p> Ongoing Projects: 
	    						<a href='http://koica.go.kr/phl_en/5389/subview.do' target="_blank"/> http://koica.go.kr/phl_en/5389/subview.do </a> 
	    					</p>
	    					<p> Completed Projects: 
	    						<a href='http://koica.go.kr/phl_en/5390/subview.do'/> http://koica.go.kr/phl_en/5390/subview.do </a> 
	    					</p>
	    				</div>
	    			</li>
	    			<li class='nzaid_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> NEW ZEALAND </p>
	    					<p> website: <a href='https://www.mfat.govt.nz/en/' target="_blank"> www.mfat.govt.nz/en/ </a> </p>
	    					<!-- <p> ODA Loan Project Data: 
	    						<a href='https://www2.jica.go.jp/en/yen_loan/index.php' target="_blank"/> https://www2.jica.go.jp/en/yen_loan/index.php </a> 
	    					</p>
	    					<p> Technical Cooperation Projects: 
	    						<a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> 
	    					</p> -->
	    				</div>
	    			</li>
	    			<li class='undp_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Development Programme (UNDP) </p>
	    					<p> website: <a href='www.ph.undp.org' target="_blank"> www.ph.undp.org </a> </p>
	    					<p> UNDP Portal:
	    						<a href='https://open.undp.org/profile/PH/recipientprofile' target="_blank"/> https://open.undp.org/profile/PH/recipientprofile </a> 
	    					</p>
	    					<!-- <p> Completed Projects: 
	    						<a href='http://koica.go.kr/phl_en/5390/subview.do'/> http://koica.go.kr/phl_en/5390/subview.do </a> 
	    					</p> -->
	    				</div>
	    			</li>
	    			<li class='usaid_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United States Agency for International Development (USAID) </p>
	    					<p> website: <a href='www.usaid.gov/philippines' target="_blank"> www.usaid.gov/philippines </a> </p>
	    					<!-- <p> ODA Loan Project Data: 
	    						<a href='https://www2.jica.go.jp/en/yen_loan/index.php' target="_blank"/> https://www2.jica.go.jp/en/yen_loan/index.php </a> 
	    					</p>
	    					<p> Technical Cooperation Projects: 
	    						<a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> 
	    					</p> -->
	    				</div>
	    			</li>
	    			<li class='wb_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> World Bank (WB) </p>
	    					<p> website: <a href='https://www.worldbank.org/en/country/philippines' target="_blank"> https://www.worldbank.org/en/country/philippines </a> </p>
	    					<p> Projects: 
	    						<a href='https://projects.worldbank.org/en/projects-operations/projects-summary?os=0' target="_blank"/> https://projects.worldbank.org/en/projects-operations/projects-summary?os=0 </a> 
	    					</p>
	    					<!--<p> Technical Cooperation Projects: 
	    						<a href='https://www.jica.go.jp/project/english/area/asia/012_1.html#hd'/> https://www.jica.go.jp/project/english/area/asia/012_1.html#hd </a> 
	    					</p> -->
	    				</div>
	    			</li>
	    		</ul>
	    	</div>
    	</div>
    		<!-- <h2 class='center-it'> DIRECTORY OF OFFICIAL DEVELOPMENT ASSISTANCE (ODA) SOURCES/PARTNERS </h2> -->
    	<div style='margin-top: 30px;'>
    		<div style='width:100%;'>
	    		<ul class='others-circles-it'>
	    			<li class='aecid_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'>Agencia Española de Cooperacion Internacional para el Desarollo (AECID) Office of Technical Cooperation </p>
	    					<p> website: <a href='https://www.aecid.es/ES/la-aecid' target="_blank">https://www.aecid.es/ES/la-aecid</a> </p>
	    					<p> Philippine Profile: <a href='https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1' target="_blank">https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1</a> </p>
	    				</div>
	    			</li>
	    			<li class='afd_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> France AFD – French Development Agency Philippines Country Office </p>
	    					<p> website: <a href='https://www.afd.fr/en/' target="_blank">https://www.afd.fr/en/</a> </p>
	    					<p> website: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p> 
	    				</div>
	    			</li>
	    			<li class='aiib_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Asian Infrastructure Investment Bank (AIIB) </p>
	    					<p> website: <a href='https://www.aiib.org/en/index.html' target="_blank">https://www.aiib.org/en/index.html</a> </p>
	    					<p> Project Status Portal: <a href='https://www.aiib.org/en/projects/list/index.html' target="_blank">https://www.aiib.org/en/projects/list/index.html</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='australianembassy_logo'> 
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Department of Foreign Affairs and Trade – Development Cooperation Section </p>
	    					<p> website: <a href='https://philippines.embassy.gov.au/mnla/australianaid.html' target="_blank">https://philippines.embassy.gov.au/mnla/australianaid.html </a> </p>
	    					<p> Database: <a href='https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines' target="_blank"/> https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines </a> </p>
	    				</div>
	    			</li>
	    			<li class='austriandevelopmentagency_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Austrian Development Agency </p>
	    					<p> website: <a href='https://www.entwicklung.at/' target="_blank">https://www.entwicklung.at/</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='austrianembassy_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> AUSTRIA </p>
	    					<p> website: <a href='https://www.bmeia.gv.at/en/embassy/manila.html' target="_blank">https://www.bmeia.gv.at/en/embassy/manila.html</a> </p>
	    					<p> website: <a href='https://www.bmeia.gv.at/en/' target="_blank">https://www.bmeia.gv.at/en/</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='belgiumphilippines_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> BELGIUM </p>
	    					<p> website: <a href='https://www.entwicklung.at/' target="_blank">http://philippines.diplomatie.belgium.be/en</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='chechrepublic_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> CZECH Republic </p>
	    					<p> Website: <a href='https://www.mfa.cz/manila' target="_blank"> www.mfa.cz/manila </a> </p>
	    					<!-- <p> website: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank"> http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng </a> </p>
	    					<p> Project browser: <a href='https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre' target="_blank" /> https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='china_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> China </p>
	    					<p> website: <a href='https://ph.china-embassy.org' target="_blank">https://ph.china-embassy.org </a> </p>
	    					<!-- <p> Database: <a href='https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines' target="_blank"/> https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines </a> </p> -->
	    				</div>
	    			</li>
	    			<li class='denmark_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> DENMARK Danish International Development Agency (DANIDA) </p>
	    					<p> Website: <a href='https://filippinerne.um.dk/en' target="_blank"> https://filippinerne.um.dk/en </a> </p>
	    					<p> Website: <a href='https://um.dk/en/danida' target="_blank"> https://um.dk/en/danida </a> </p>
	    					<!-- <p> website: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank"> http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng </a> </p>
	    					<p> Project browser: <a href='https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre' target="_blank" /> https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='edcfkorea_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Korea Eximbank Resident Mission/ Economic Development Cooperation Fund (EDCF) </p>
	    					<p> website: <a href='https://www.edcfkorea.go.kr/site/main/index005' target="_blank"> https://www.edcfkorea.go.kr/site/main/index005 </a> </p>
	    					<!-- <p> Database: <a href='https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines' target="_blank"/> https://www.dfat.gov.au/geo/philippines/development-assistance/development-assistance-in-philippines </a> </p> -->
	    				</div>
	    			</li>
	    			<li class='embassyofhungary_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> HUNGARY </p>
	    					<p> website: <a href='https://manila.mfa.gov.hu/eng' target="_blank">https://manila.mfa.gov.hu/eng</a> </p>
	    					<!-- <p> Project database: <a href='https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1' target="_blank">https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='embassyofisrael_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> ISRAEL </p>
	    					<p> website: <a href='https://embassies.gov.il/manila/AboutTheEmbassy/Pages/About-the-embassy.aspx' target="_blank">https://embassies.gov.il/manila/AboutTheEmbassy/Pages/About-the-embassy.aspx</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='embassyofitaly_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> ITALY </p>
	    					<p> website: <a href='https://www.ambmanila.esteri.it' target="_blank">www.ambmanila.esteri.it</a> </p>
	    					<!-- <p> Project database: <a href='https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1' target="_blank">https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='europeaninvestmentbank_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> European Investment Bank (EIB) </p>
	    					<p> website: <a href='https://www.eib.org/en/' target="_blank">https://www.eib.org/en/</a> </p>
	    					<p> All Projects: <a href='https://www.eib.org/en/projects/all/index.htm' target="_blank">https://www.eib.org/en/projects/all/index.htm</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='federalministryforeconomiccooperationanddevelopment_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Federal Ministry for Economic Cooperation and Development (BMZ) </p>
	    					<p> website: <a href='https://www.bmz.de/en/' target="_blank">https://www.bmz.de/en/</a> </p>
	    					<!-- <p> Project database: <a href='https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1' target="_blank">https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='finland_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> FINLAND </p>
	    					<p> website: <a href='https://finlandabroad.fi/web/phl/mission' target="_blank">https://finlandabroad.fi/web/phl/mission</a> </p>
	    					<!-- <p> website: <a href='https://www.bmeia.gv.at/en/' target="_blank">https://www.bmeia.gv.at/en/</a> </p> -->
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='frenchembassy_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> FRANCE </p>
	    					<p> website: <a href='https://ph.ambafrance.org/-English-' target="_blank">https://ph.ambafrance.org/-English-</a> </p>
	    					<!-- <p> website: <a href='https://www.bmeia.gv.at/en/' target="_blank">https://www.bmeia.gv.at/en/</a> </p> -->
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='germany_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> GERMANY </p>
	    					<p> website: <a href='http://www.manila.diplo.de/' target="_blank">http://www.manila.diplo.de/</a> </p>
	    					<!-- <p> website: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='iaea_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> International Atomic Energy Agency (IAEA) </p>
	    					<p> website: <a href='https://www.iaea.org/' target="_blank"> https://www.iaea.org/ </a> </p>
	    					<p> Technical Cooperation Projects Database: <a href='https://www.iaea.org/projects/technical-cooperation-projects/3445?topics=All&status=All&combine=Philippines' target="_blank"> https://www.iaea.org/projects/technical-cooperation-projects/3445?topics=All&status=All&combine=Philippines </a> </p>
	    					<!-- <p> Philippines profile: <a href='https://www.ifad.org/en/web/operations/w/country/philippines' target="_blank" /> https://www.ifad.org/en/web/operations/w/country/philippines </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='govtofcanada_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> CANADA </p>
	    					<p> website: <a href='https://www.canada.ca/en.html' target="_blank"> https://www.canada.ca/en.html </a> </p>
	    					<p> website: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank"> http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng </a> </p>
	    					<p> Project browser: <a href='https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre' target="_blank" /> https://w05.international.gc.ca/projectbrowser-banqueprojets/filter-filtre </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p>
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='ifad_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> International Fund for Agricultural Development (IFAD) </p>
	    					<p> website: <a href='www.ifad.org/' target="_blank"> www.ifad.org/ </a> </p>
	    					<p> Projects and Programme portal: <a href='https://www.ifad.org/en/web/operations/projects-and-programmes' target="_blank"> https://www.ifad.org/en/web/operations/projects-and-programmes </a> </p>
	    					<p> Philippines profile: <a href='https://www.ifad.org/en/web/operations/w/country/philippines' target="_blank" /> https://www.ifad.org/en/web/operations/w/country/philippines </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p>
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='internationlabourorganization_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> International Labor Organization (ILO) </p>
	    					<p> website: <a href='https://www.ilo.org/global/lang--en/index.htm' target="_blank"> https://www.ilo.org/global/lang--en/index.htm </a> </p>
	    					<p> Programs and Projects Database: <a href='https://www.ilo.org/manila/projects/lang--en/index.htm' target="_blank"> https://www.ilo.org/manila/projects/lang--en/index.htm </a> </p>
	    					<!-- <p> Philippines profile: <a href='https://www.ifad.org/en/web/operations/w/country/philippines' target="_blank" /> https://www.ifad.org/en/web/operations/w/country/philippines </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='japan_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Japan </p>
	    					<p> website: <a href='https://www.ph.emb-japan.go.jp' target="_blank"/>www.ph.emb-japan.go.jp</a> </p>
	    					<p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank"/> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </a> </p>
	    				</div>
	    			</li>
	    			<li class='kfw_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> German Development Bank (KfW) </p>
	    					<p> website: <a href='www.kfw-entwicklungsbank.de' target="_blank"/>www.kfw-entwicklungsbank.de</a> </p>
	    					<p> Project database: <a href='https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1' target="_blank">https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='kingdomofnetherlands_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> NETHERLANDS </p>
	    					<p> website: <a href='www.netherlandsandyou.nl/yo ur-country-and-the- netherlands/philippines' target="_blank">www.netherlandsandyou.nl/yo ur-country-and-the- netherlands/philippines</a> </p>
	    					<!-- <p> Project database: <a href='https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1' target="_blank">https://www.kfw-entwicklungsbank.de/Internationale-Finanzierung/KfW-Entwicklungsbank/Projekte/Projektdatenbank/index.jsp?query=*%3A*&page=1&rows=10&sortBy=relevance&sortOrder=desc&facet.filter.language=de&dymFailover=true&groups=1</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='korea_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Korea </p>
	    					<p> website: <a href='https://embassy-philippines.mofa.go.kr' target="_blank">embassy-philippines.mofa.go.kr</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='nordicinvestmentbank_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Nordic Investment Bank (NIB) </p>
	    					<p> website: <a href='www.nib.int' target="_blank">www.nib.int</a> </p>
	    					<p> Search Engine: <a href='https://www.nib.int/?s_q=' target="_blank">https://www.nib.int/?s_q=</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='norway_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> NORWAY </p>
	    					<p> website: <a href='www.norway.no/en/philippines' target="_blank">www.norway.no/en/philippines</a> </p>
	    					<!-- <p> Search Engine: <a href='https://www.nib.int/?s_q=' target="_blank">https://www.nib.int/?s_q=</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='opec_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> OPEC Fund for International Development (OFID) </p>
	    					<p> website: <a href='www.ofid.org/' target="_blank">www.ofid.org/</a> </p>
	    					<p> Operation Database: <a href='https://opecfund.org/operations/search-operations' target="_blank">https://opecfund.org/operations/search-operations</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='poland_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> POLAND </p>
	    					<p> website: <a href='https://www.gov.pl/web/philippines/' target="_blank">https://www.gov.pl/web/philippines/</a> </p>
	    					<!-- <p> Search Engine: <a href='https://www.nib.int/?s_q=' target="_blank">https://www.nib.int/?s_q=</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='saudiarabia_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> SAUDI ARABIA </p>
	    					<p> website: <a href='https://embassies.mofa.gov.sa/sites/philippines/EN' target="_blank">embassies.mofa.gov.sa/sites/philippines/EN</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='saudifundfordevelopment_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> Saudi Fund for Development </p>
	    					<p> website: <a href='https://www.sfd.gov.sa/en' target="_blank">https://www.sfd.gov.sa/en</a> </p>
	    					<!-- <p> ODA Project search: <a href='https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php' target="_blank" /> https://www3.mofa.go.jp/mofaj/gaiko/oda/search.php </a> </p>
							<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='sida_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'>SWEDEN Swedish International Development Cooperation Agency (SIDA) </p>
	    					<p> website: <a href='https://www.sida.se/en' target="_blank">https://www.sida.se/en</a> </p>
	    					<p> Swedish Open Aid Portal: <a href='https://openaid.se/en' target="_blank">https://openaid.se/en</a> </p>
	    					<!-- <p> Philippine Profile: <a href='https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1' target="_blank">https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1</a> </p> -->
	    				</div>
	    			</li>
	    			<li class='spain_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> SPAIN </p>
	    					<p> website: <a href='https://www.exteriores.gob.es/es/Paginas/index.aspx' target="_blank">https://www.exteriores.gob.es/es/Paginas/index.aspx</a> </p>
	    					<!-- <p> Search Engine: <a href='https://www.nib.int/?s_q=' target="_blank">https://www.nib.int/?s_q=</a> </p> -->
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='switzerland_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> SWITZERLAND </p>
	    					<p> website: <a href='https://www.eda.admin.ch/countries/philippines/en/home/representations/embassy.html' target="_blank">https://www.eda.admin.ch/countries/philippines/en/home/representations/embassy.html</a> </p>
	    					<!-- <p> Philippine Profile: <a href='https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1' target="_blank">https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1</a> </p> -->
	    				</div>
	    			</li>
	    			<li class='UK_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> UNITED KINGDOM (UK) </p>
	    					<p> website: <a href='https://www.gov.uk/world/organisations/british-embassy-manila' target="_blank">https://www.gov.uk/world/organisations/british-embassy-manila</a> </p>
	    					<!-- <p> Philippine Profile: <a href='https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1' target="_blank">https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1</a> </p> -->
	    				</div>
	    			</li>
	    			<li class='UN_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Resident Coordinator’s Office (UNRCO) </p>
	    					<p> website: <a href='https://philippines.un.org/en/about/about-the-resident-coordinator-office' target="_blank">https://philippines.un.org/en/about/about-the-resident-coordinator-office</a> </p>
	    					<p> Where we work: The UN’s key activities: <a href='https://philippines.un.org/en/sdgs' target="_blank">https://philippines.un.org/en/sdgs</a> </p>
	    				</div>
	    			</li>
	    			<li class='unfpa_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Population Fund (UNFPA) </p>
	    					<p> Website: <a href="https://philippines.unfpa.org/"/> philippines.unfpa.org/ </a> </p>
	    					<p> Data Transparency Portal: <a href='https://www.unfpa.org/data/transparency-portal' target="_blank">https://www.unfpa.org/data/transparency-portal</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='unido_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Industrial Development Organization (UNIDO) </p>
	    					<p> email: office.philippines@unido.org </p>
	    					<p> Open data platform:: <a href='https://open.unido.org/projects/PH/projects/210124' target="_blank">https://open.unido.org/projects/PH/projects/210124</a> </p>
	    					<!-- <p> Philippines map of projects: <a href='https://www.afd.fr/fr/page-region-pays/philippines' target="_blank">https://www.afd.fr/fr/page-region-pays/philippines</a> </p>
	    					<p> Maps of all projects: <a href='https://www.afd.fr/fr/carte-des-projets' target="_blank" /> https://www.afd.fr/fr/carte-des-projets </a> </p>
							<p> Open data portal: <a href='https://opendata.afd.fr/page/accueil/' target="_blank" /> https://opendata.afd.fr/page/accueil/ </p>  -->
	    				</div>
	    			</li>
	    			<li class='unops_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Office for Project Services (UNOPS) </p>
	    					<p> website: <a href='www.unops.org/philippines' target="_blank"> www.unops.org/philippines </a> </p>
	    					<p> Active Projects in the Region (satellite maps): <a href='https://www.unops.org/philippines' target="_blank"> https://www.unops.org/philippines </a> </p>
	    					<!-- <p> Philippines profile: <a href='https://www.ifad.org/en/web/operations/w/country/philippines' target="_blank" /> https://www.ifad.org/en/web/operations/w/country/philippines </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='unicef_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> United Nations Children’s Fund (UNICEF) </p>
	    					<p> website: <a href='www.unicef.org/philippines/' target="_blank"> www.unicef.org/philippines/ </a> </p>
	    					<p> Datasets and Statistics: <a href='https://data.unicef.org/resources/resource-type/datasets/' target="_blank"> https://data.unicef.org/resources/resource-type/datasets/ </a> </p>
	    					<!-- <p> Philippines profile: <a href='https://www.ifad.org/en/web/operations/w/country/philippines' target="_blank" /> https://www.ifad.org/en/web/operations/w/country/philippines </a> </p>
	    					<p> Global Affairs Canada: <a href='http://www.canadainternation al.gc.ca/philippines/index.aspx?lang=eng' target="_blank" /> Global Affairs Canada </a> </p> -->
							<!--<p> ODA to the Philippines portal: <a href='https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html' target="_blank" /> https://www.mofa.go.jp/mofaj/gaiko/oda/region/e_asia/philippines/index.html </p> -->
	    				</div>
	    			</li>
	    			<li class='USembassy_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> UNITED STATES+B43 </p>
	    					<p> website: <a href='https://ph.usembassy.gov/' target="_blank">https://ph.usembassy.gov/</a> </p>
	    					<!-- <p> Philippine Profile: <a href='https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1' target="_blank">https://www.aecid.es/ES/Paginas/D%C3%B3nde%20Cooperamos/Asia/Filipinas.aspx?start=1</a> </p> -->
	    				</div>
	    			</li>
	    			<li class='wfp_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> World Food Programme (WFP) </p>
	    					<p> email: wfp.philippines@wfp.org </p>
	    					<p> Database: <a href='https://docs.wfp.org/api/documents/WFP-0000148527/download/?_ga=2.119572168.1109282655.1683786560-747078275.1683786558' target="_blank">https://docs.wfp.org/api/documents/WFP-0000148527/download/?_ga=2.119572168.1109282655.1683786560-747078275.1683786558</a> </p>
	    				</div>
	    			</li>
	    			<li class='who_logo'>
	    				<div class='details-div-others'> 
	    					<p class='bold-it'> World Health Organization (WHO) </p>
	    					<p> Website: <a href='www.who.int/en/' target="_blank"/> www.who.int/en/ </a> </p>
	    					<p> Data Collections: <a href='https://www.who.int/data/collections' target="_blank">https://www.who.int/data/collections</a> </p>
	    				</div>
	    			</li>
	    		</ul>
    		</div>
    	</div>
    </body>
</html>