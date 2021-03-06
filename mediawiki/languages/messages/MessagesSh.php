<?php
/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Kaganer
 * @author Kolega2357
 * @author Nemo bis
 * @author OC Ripper
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_sa_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_o_$1',
	NS_FILE             => 'Datoteka',
	NS_FILE_TALK        => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI_TALK   => 'Mediawiki_razgovor',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktivni_korisnici' ),
	'Allmessages'               => array( 'Sve_poruke' ),
	'Allpages'                  => array( 'Sve_stranice' ),
	'Ancientpages'              => array( 'Najstarije_stranice' ),
	'Blankpage'                 => array( 'Prazna_stranica' ),
	'Booksources'               => array( 'Traži_ISBN' ),
	'BrokenRedirects'           => array( 'Kriva_preusmjerenja' ),
	'Categories'                => array( 'Kategorije' ),
	'Confirmemail'              => array( 'E-mail_potvrda' ),
	'Contributions'             => array( 'Doprinosi' ),
	'CreateAccount'             => array( 'Stvori_račun' ),
	'Deadendpages'              => array( 'Mrtve_stranice' ),
	'DeletedContributions'      => array( 'Obrisani_doprinosi' ),
	'DoubleRedirects'           => array( 'Dvostruka_preusmjerenja' ),
	'Emailuser'                 => array( 'E-mail', 'Elektronska_pošta' ),
	'Export'                    => array( 'Izvezi' ),
	'Fewestrevisions'           => array( 'Najmanje_uređivane_stranice' ),
	'FileDuplicateSearch'       => array( 'Traži_kopije_datoteka' ),
	'Filepath'                  => array( 'Putanja_datoteke' ),
	'Import'                    => array( 'Uvezi' ),
	'LinkSearch'                => array( 'Traži_poveznice', 'Traži_linkove' ),
	'Listadmins'                => array( 'Popis_administratora' ),
	'Listbots'                  => array( 'Popis_botova' ),
	'Listgrouprights'           => array( 'Popis_korisničkih_prava' ),
	'Listredirects'             => array( 'Popis_preusmjerenja' ),
	'Listusers'                 => array( 'Popis_korisnika', 'Korisnički_popis' ),
	'Lockdb'                    => array( 'Zaključaj_bazu' ),
	'Log'                       => array( 'Evidencije', 'Registri' ),
	'Lonelypages'               => array( 'Usamljene_stranice', 'Siročad' ),
	'Longpages'                 => array( 'Duge_stranice' ),
	'MergeHistory'              => array( 'Spoji_historiju' ),
	'MIMEsearch'                => array( 'MIME_pretraga' ),
	'Mostcategories'            => array( 'Najviše_kategorija' ),
	'Mostimages'                => array( 'Najviše_povezane_datoteke', 'Najviše_povezane_slike' ),
	'Mostlinked'                => array( 'Najviše_povezane_stranice' ),
	'Mostlinkedcategories'      => array( 'Najviše_povezane_kategorije', 'Najviše_korištene_kategorije' ),
	'Mostlinkedtemplates'       => array( 'Najviše_povezani_šabloni', 'Najviše_korišteni_šabloni' ),
	'Mostrevisions'             => array( 'Najviše_uređivane_stranice' ),
	'Movepage'                  => array( 'Premjesti_stranicu' ),
	'Mycontributions'           => array( 'Moji_doprinosi' ),
	'Mypage'                    => array( 'Moja_stranica' ),
	'Mytalk'                    => array( 'Moj_razgovor' ),
	'Myuploads'                 => array( 'Moje_postavljene_datoteke' ),
	'Newimages'                 => array( 'Nove_datoteke', 'Nove_slike' ),
	'Newpages'                  => array( 'Nove_stranice' ),
	'Popularpages'              => array( 'Popularne_stranice' ),
	'Preferences'               => array( 'Postavke' ),
	'Prefixindex'               => array( 'Prefiks_indeks', 'Stranice_po_prefiksu' ),
	'Protectedpages'            => array( 'Zaštićene_stranice' ),
	'Protectedtitles'           => array( 'Zaštićeni_naslovi' ),
	'Randompage'                => array( 'Slučajna_stranica' ),
	'Randomredirect'            => array( 'Slučajno_preusmjerenje' ),
	'Recentchanges'             => array( 'Nedavne_izmjene' ),
	'Recentchangeslinked'       => array( 'Povezane_izmjene' ),
	'Revisiondelete'            => array( 'Brisanje_izmjene' ),
	'Search'                    => array( 'Traži' ),
	'Shortpages'                => array( 'Kratke_stranice' ),
	'Specialpages'              => array( 'Posebne_stranice' ),
	'Statistics'                => array( 'Statistike' ),
	'Unblock'                   => array( 'Odblokiraj' ),
	'Uncategorizedcategories'   => array( 'Nekategorizirane_kategorije' ),
	'Uncategorizedimages'       => array( 'Nekategorizirane_datoteke', 'Nekategorizirane_slike' ),
	'Uncategorizedpages'        => array( 'Nekategorizirane_stranice' ),
	'Uncategorizedtemplates'    => array( 'Nekategorizirani_šabloni' ),
	'Undelete'                  => array( 'Vrati' ),
	'Unlockdb'                  => array( 'Otključaj_bazu' ),
	'Unusedcategories'          => array( 'Nekorištene_kategorije' ),
	'Unusedimages'              => array( 'Nekorištene_datoteke', 'Nekorištene_slike' ),
	'Unusedtemplates'           => array( 'Nekorišteni_šabloni' ),
	'Unwatchedpages'            => array( 'Negledane_stranice' ),
	'Upload'                    => array( 'Postavi_datoteku' ),
	'Userrights'                => array( 'Korisnička_prava' ),
	'Version'                   => array( 'Verzija' ),
	'Wantedcategories'          => array( 'Tražene_kategorije' ),
	'Wantedfiles'               => array( 'Tražene_datoteke' ),
	'Wantedpages'               => array( 'Tražene_stranice' ),
	'Wantedtemplates'           => array( 'Traženi_šabloni' ),
	'Watchlist'                 => array( 'Spisak_praćenja' ),
	'Whatlinkshere'             => array( 'Što_vodi_ovdje' ),
	'Withoutinterwiki'          => array( 'Bez_interwikija' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#PREUSMJERI', '#PREUSMERI', '#REDIRECT' ),
	'notoc'                     => array( '0', '__BEZSADRŽAJA__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__BEZGALERIJE__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORSIRANISADRŽAJ__', '__UKLJUČISADRŽAJ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__SADRŽAJ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__BEZ_IZMJENA__', '__BEZIZMJENA__', '__BEZ_IZMENA__', '__BEZIZMENA__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'TRENUTNIMJESEC', 'TRENUTNIMESEC', 'TRENUTAČNIMJESEC', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'TRENUTNIMJESEC1', 'TRENUTNIMESEC1', 'TRENUTAČNIMJESEC1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'TRENUTNIMJESECIME', 'TRENUTNIMESECIME', 'TRENUTAČNIMJESECIME', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'TRENUTNIMJESECROD', 'TRENUTNIMESECROD', 'TRENUTAČNIMJESECROD', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'TRENUTNIMJESECSKR', 'TRENUTNIMESECSKR', 'TRENUTAČNIMJESECSKR', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'TRENUTNIDAN', 'TRENUTAČNIDAN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'TRENUTNIDAN2', 'TRENUTAČNIDAN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'TRENUTNIDANIME', 'TRENUTAČNIDANIME', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'TRENUTNAGODINA', 'TRENUTAČNAGODINA', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'TRENUTNOVRIJEME', 'TRENUTNOVREME', 'TRENUTAČNOVRIJEME', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'TRENUTNISAT', 'TRENUTAČNISAT', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'LOKALNIMJESEC', 'LOKALNIMESEC', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'LOKALNIMJESEC1', 'LOKALNIMESEC1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'LOKALNIMJESECIME', 'LOKALNIMESECIME', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'LOKALNIMJESECROD', 'LOKALNIMESECROD', 'LOKALNIMJESECGEN', 'LOKALNIMESECGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'LOKALNIMJESECSKR', 'LOKALNIMESECSKR', 'LOKALNIMJESECKRAT', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'LOKALNIDAN', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'LOKALNIDAN2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'LOKALNIDANIME', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'LOKALNAGODINA', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'LOKALNOVRIJEME', 'LOKALNOVREME', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'LOKALNISAT', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'BROJSTRANICA', 'BROJSTRANA', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'BROJČLANAKA', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'BROJDATOTEKA', 'BROJFAJLOVA', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'BROJKORISNIKA', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'BROJAKTIVNIHKORISNIKA', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'BROJIZMJENA', 'BROJIZMENA', 'BROJUREĐIVANJA', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'STRANICA', 'IMESTRANICE', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'STRANICE', 'IMESTRANICEE', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'IMENSKIPROSTOR', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'IMENSKIPROSTORI', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'PROSTORZARAZGOVOR', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'PROSTORIZARAZGOVOR', 'TALKSPACEE' ),
	'fullpagename'              => array( '1', 'PUNOIMESTRANE', 'PUNOIMESTRANICE', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'PUNOIMESTRANEE', 'PUNOIMESTRANICEE', 'FULLPAGENAMEE' ),
	'msg'                       => array( '0', 'POR:', 'MSG:' ),
	'subst'                     => array( '0', 'ZAMJENI:', 'ZAMENI:', 'ZAMJENA:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'NVPOR:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'minijatura', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'minijatura=$1', 'mini=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'desno', 'right' ),
	'img_left'                  => array( '1', 'lijevo', 'levo', 'left' ),
	'img_none'                  => array( '1', 'n', 'bez', 'ništa', 'none' ),
	'img_center'                => array( '1', 'centar', 'središte', 'c', 'center', 'centre' ),
	'img_framed'                => array( '1', 'okvir', 'ram', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'bez_okvira', 'bezokvira', 'frameless' ),
	'img_page'                  => array( '1', 'stranica=$1', 'stranica_$1', 'strana=$1', 'strana_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'na_gore', 'na_gore=$1', 'na_gore_$1', 'uspravno', 'uspravno=$1', 'uspravno_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'granica', 'obrub', 'border' ),
	'img_baseline'              => array( '1', 'osnovnacrta', 'pocetna_linija', 'baseline' ),
	'img_top'                   => array( '1', 'vrh', 'top' ),
	'img_text_top'              => array( '1', 'vrh_teksta', 'tekst_vrh', 'text-top' ),
	'img_middle'                => array( '1', 'sredina', 'middle' ),
	'img_bottom'                => array( '1', 'dno', 'bottom' ),
	'img_text_bottom'           => array( '1', 'tekst-dno', 'text-bottom' ),
	'localurl'                  => array( '0', 'LOKALNIURL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'LOKALNIURLE:', 'LOCALURLE:' ),
	'notitleconvert'            => array( '0', '__BEZTC__', '__BEZKN__', '__BPN__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__BEZCC__', '__BPS__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'TRENUTNASEDMICA', 'TRENUTAČNITJEDAN', 'TRENUTNANEDELJA', 'TRENUTNITJEDAN', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'TRENUTNIDANSEDMICE', 'TRENUTAČNIDANTJEDNA', 'TRENUTNIDANNEDELJE', 'TRENUTNIDANTJEDNA', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'LOKALNASEDMICA', 'LOKALNITJEDAN', 'LOKALNANEDELJA', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'LOKALNIDANSEDMICE', 'LOKALNIDANTJEDNA', 'LOKALNIDANNEDELJE', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDIZMJENE', 'IDIZMENE', 'REVISIONID' ),
	'revisionday'               => array( '1', 'IZMJENEDANA', 'IZMENEDANA', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'IZMJENEDANA2', 'IZMENEDANA2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MJESECIZMJENE', 'MESECIZMENE', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'MJESECIZMJENE1', 'MESECIZMENE1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'GODINAIZMJENE', 'GODINAIZMENE', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'OZNAKAVREMENAIZMJENE', 'OZNAKAVREMENAIZMENE', 'REVISIONTIMESTAMP' ),
	'plural'                    => array( '0', 'MNOŽINA:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'PUNIURL:', 'PUNURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'PUNIURLE:', 'PUNURLE:', 'FULLURLE:' ),
	'currenttimestamp'          => array( '1', 'TRENUTNAOZNAKAVREMENA', 'TRENUTAČNAOZNAKAVREMENA', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'LOKALNAOZNAKAVREMENA', 'LOCALTIMESTAMP' ),
	'special'                   => array( '0', 'posebno', 'special' ),
	'hiddencat'                 => array( '1', '__SAKRIVENAKATEGORIJA__', 'SKRIVENAKAT', '__SAKRIVENAKAT__', '__HIDDENCAT__' ),
	'pagesize'                  => array( '1', 'VELICINASTRANICE', 'VELIČINASTRANICE', 'VELIČINASTRANE', 'VELICINASTRANE', 'PAGESIZE' ),
	'formatdate'                => array( '0', 'formatdatuma', 'formatdate', 'dateformat' ),
);

$linkTrail = '/^([a-zčćđžš]+)(.*)$/sDu';

