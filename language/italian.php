<?php
//----------------------------------------------------------------------
//  CrawlProtect 3.2.4
//----------------------------------------------------------------------
// Protect your website from hackers
//----------------------------------------------------------------------
// Author: Jean-Denis Brun
//----------------------------------------------------------------------
// Website: www.crawlprotect.com
//----------------------------------------------------------------------
// This script is distributed under GNU GPL license
//----------------------------------------------------------------------
// file: italiano.php (italian.php)
// Translated by Giuseppe Velardo
// giuseppe.velardo@gmail.com
// Last langfile update: november 17, 2012
//----------------------------------------------------------------------
//  Last update: 28/09/2013
//----------------------------------------------------------------------
$language= array();
$language['user_setup']="Hai solo bisogno di inserire login e password qui sotto per impostare CrawlProtect.";
$language['login']="Login";
$language['password']="Password";
$language['valid_password']="Inserisci nuovamente la password.";
$language['login_no_ok']="Informazione mancante oppure le due password non corrispondono, controlla e ritenta.";
$language['Installation_OK']="Installazione OK";
$language['Continue']="Continua";
$language['chmod_no_ok']="CrawlProtect non riesce a creare un file nella cartella crawlprotect";
$language['chmod_no_ok2']="Tenta con CHMOD per questa cartella, CHMOD 0755 dovrebbe andare OK";
$language['restrited_access']="Accesso riservato.";
$language['enter_login']="Inserisci login e password qui sotto.";
$language['CrawlProtect_has_blocked']="CrawlProtect bloccato in quanto ";
$language['sqlinjection']="Tentativi di iniezione SQL";
$language['codeinjection']="Tentativi di iniezione di codice";
$language['xss']="Tentativi di script Cross-site (xss)";
$language['badbots']="Visite Badbots e copia site";
$language['shell']="Tentativi di hacking tipo Shell";
$language['spam']="Tentativi di spam referer";
$language['spammer']="Tentativi di spam";
$language['hotlinking']="Hotlinking delle tue immagini";
$language['coming_from']="Gli hackers provengono da";
$language['maxmind']="Tracking effettuato usando il database GeoLite, creato da Maxmind, disponibile al seguente indirizzo:";
$language['no_attack']="Il tuo sito risulta non ancora attaccato.";
$language['admin']="Amministrazione";
$language['confirm_zero']="Sicuro di voler resettare il contatore a ZERO?<br>Una volta che avrai dato OK, &egrave; impossibile tornare indietro.";
$language['reset_zero']="Setta countatori a ZERO";
$language['file_modification']="Controllo files";
$language['file_modification2']="Le cartelle e files in rosso sono stati modificati negli ultimi 7 giorni.";
$language['ad']="Qui la tua pubblicit&agrave; ?";
$language['change_language']="Scelta lingua";
$language['suppress']="Setta contatori a ZERO";
$language['keep']="No, voglio conservare i miei dati";
$language['logout']="Logout";
$language['file']="Files";
$language['chmod']="CHMOD";
$language['datemod']="Ultime modifiche";
$language['chmod_ok']="Il CHMOD di questa cartella o file &egrave; corretto";
$language['chmod_nook']="Il CHMOD di questa cartella o file &egrave; pericoloso per la sicurezza del tuo sito web";
$language['main_file']="Fai attenzione perch&egrave; CrawlProtect non guarda tutte le cartelle e file; ci sono le seguenti limitazioni:";
$language['folder_modification']="Controllo cartelle";
$language['folder']="Cartelle";
$language['chmod_advices']="Livello CHMOD raccomandato";
$language['chmod_safe']="Livello di alta sicurezza";
$language['chmod_mini']="Livello di sicurezza standard";
$language['nota']="* che il livello CHMOD pu&ograve; essere che in alcuni casi non sia compatibile con alcuni dei tuoi script (per verificare bisognerebbe essere sul tuo sito), si dovr&agrave; anche modificare quel livello CHMOD prima di ogni transferimentot ftp. Un alto livello di sicurezza non pu&ograve; essere raggiunto senza alcun vincolo ... CrawlProtect <br>, per ragioni di sicurezza si applica automaticamente quel livello al tuo htaccess;. In modo che dovrai modificarlo prima di qualsiasi aggiornamento."; 
$language['chmod_super']="Il CHMOD di questa cartella o file &egrave; perfetto per la tua sicurezza";
$language['changechmod']="Cambia il CHMOD";
$language['chmod_change_menu']="Mostra il men&ugrave; di modifica CHMOD";
$language['datedisplay']="Mostra le ultime date di modifica";
$language['change_all_folders']="Tutte le cartelle della lista";
$language['change_all_files']="Tutti i files della lista";
$language['change-chmod-to-safe']="<b>Ben fatto, hai fatto la scelta migliore per la sicurezza del tuo sito.</b><br><br> Ti devo informare che in qualche caso questo livello di CHMOD blocca qualche script.<br>Controlla la funzionalit&agrave; del tuo sito prima di confermare questo livello di CHMOD.<br><br> Dovrai tornare al livello normale di CHMOD per essere in grado di modificare o cambiare quel file o cartella, ma &egrave; cos&igrave; facile con CrawlProtect! <br> E' un vincolo, ma in realt&agrave; non un grande fastidio a confronto di un possibile hacking del tuo sito.";
$language['yes']="Si, confermo: voglio questo livello di CHMOD";
$language['no']="No, preferisco tenere l&#39;attuale livello CHMOD";
$language['help_crawlprotect']="CrawlProtect protegge il tuo sito, puoi partecipare allo sviluppo ed ai costi hosting di CrawlProtect facendo una donazione.";
$language['thanks']="Grazie per il tuo aiuto.<br>Jean-Denis";
$language['nochmod']="La funzione di modifica di CHMOD &egrave; impossibile sul tuo server, dovrai usare il tuo client FTP per apportare la modifica";
$language['htaccess']="Crea o aggiorna il file htaccess";
$language['scripts_used']="Se stai usando uno di questi scripts spunta il box";
$language['noip']="Applica il ruolo di protezione a qualsiasi IP usato";
$language['badip']="Vorrei bloccare sempre i seguenti IP:";
$language['badiplist']="Inserisci qui sotto la lista degli IP da bloccare, separati da una virgola (,)";
$language['badip2']="Fai attenzione, qualche IP che vuoi bloccare non &egrave; corretto e quindi non ne terr&ograve; conto";
$language['checkhtaccess']="Questo &egrave; il file htaccess proposto da CrawlProtect, se sei d'accordo clicca su OK qui sotto per iniziare la sua creazione";
$language['newhtaccessok']="Il nuovo file htaccess file &egrave; al suo posto, il tuo sito ora &egrave; protetto da CrawlProtect";
$language['newhtaccessnook']="CrawlProtect non pu&ograve; creare il file htaccess, puoi:<br><br>-controllare il CHMOD del file htaccess e modificarlo a 0644 col tuo client FTP e poi ritentare<br><br>-creare da te il file htaccess copiando il file sotto e trasferirlo col tuo client FTP nella root del tuo spazio web.";
$language['verifok']="Il file htaccess di CrawlProtect &egrave; al suo posto";
$language['verifnook']="Hai bisogno di creare il tuo file htaccess per essere protetto. Clicca su 'Crea o aggiorna il file htaccess'";
$language['verifnotpossible']="CrawlProtect non riesce a controllare la presenza del file htaccess, usa il tuo client FTP per farlo";
$language['backtotheform']="Torna al modulo";
$language['allfiles']="Tutti i files";
$language['selectfiles']="Solo .htaccess, index, header, footer e config";
$language['message']="Messaggi CrawlProtect";
$language['crawlprotectcheck']="CrawlProtect controlla ";
$language['crawlprotectcheck2']=" cartelle e ";
$language['crawlprotectcheck3']=" files.";
$language['badreferer']="Vorrei bloccare sempre gli spammers referer da questi hosts";
$language['badrefererlist']="Inserisci qui sotto la lista degli hosts da bloccare (tipo questo: esempio.com senza www o http) separati da una virgola (,)";
$language['ip_used']="Lista di IP usati";
$language['attempts']="tentativi";
$language['blockip']="Aggiungi gli IP selezionati al file htaccess per negare l'accesso al tuo sito";
$language['badipadd']="I seguenti IP sono stati aggiunti alla lista:";
$language['ipblocked']="Lista di IP bloccati da htaccess";
$language['refererblocked']="Lista di referers bloccati da htaccess";
//modified in 3.2.3
$language['fileandfolders']="Controllo cartelle e files / CHMOD cambia";
$language['home']="Home";
$language['folderlevelrestricted']="Limita a 2 livelli di percorsi cartella (se ottieni un timeout su 'Controllo cartelle e files' pagina)";
$language['justbaddisplay']="Mostra solo cartelle e files che non hanno un alto livello chmod o che sono stati recentemente modificati";
$language['alldisplay']="Mostra tutte le cartelle e files";
$language['log-recording']="Log attacchi";
$language['date']="Data e ora";
$language['why']="Tentativo di hacking";
$language['country']="Paese";
$language['totalprotection']="Tutte le cartelle e files sono mostrati qui.";
$language['nocache']="Non tenere conto della cache delle cartelle";
$language['nostats']="Non tenere conto delle statistiche sulle cartelle";
$language['nologs']="Non tenere conto dei logs delle cartelle";
$language['sponsorship']="Questi supportano CrawlProtect:";
$language['filename']="Ordina per nome";
$language['filedate']="Ordina per data";
$language['forbiddenurl']="Vorrei bloccare sempre tutti i tentativi di accesso a files e cartelle contenenti nel nome la seguente parola";
$language['forbidden']="Tentativi di accesso ad url vietati";
$language['urlforbidden']="Files e cartelle vietati da htaccess";
$language['forbiddenparameter']="Vorrei bloccare qualsiasi tentativo di accesso all&#39;url passato con parametri vari";
$language['parameterforbidden']="Parametri vietati da htaccess";
$language['not-all-log']="Mostra le ultime 500 linee.";
$language['sitesecurity']="La sicurezza del tuo sito";
$language['install']="Istallazione";
$language['welcome_install'] ="Benvenuto su CrawlProtect, istallazione in tre semplici passi.";
$language['menu_install_1']="1) Inserisci le informazioni sulla connessione al database.";
$language['menu_install_2']="2) Imposta il sito web.";
$language['menu_install_3']="3) Imposta l&#39;Account Amministratore.";
$language['go_install']="Istalla";
$language['step1_install'] ="Inserisci le informazioni della connessione al database. Una volta validato il modulo, saranno create le opportune tabelle.";
$language['step1_install_login_mysql']="User MySQL";
$language['step1_install_password_mysql']="Password MySQL";
$language['step1_install_host_mysql']="Host MySQL";
$language['step1_install_database_mysql']="Database MySQL";
$language['step1_install_ok'] ="Files di connessione OK.";
$language['step1_install_ok2'] ="Creazione tabelle OK.";
$language['step1_install_no_ok'] ="Informazione mancante per creare le tabelle e files, controlla e riprova.";
$language['step1_install_no_ok2'] ="Creazione automatica di file fallita, devi farlo manualmente.";
$language['step1_install_no_ok4'] ="Crea un file col nome <b>connection.php</b> col seguente contenuto e poi mettilo nella cartella include di CrawlProtect.";
$language['step1_install_no_ok5'] ="Crea un file col nome <b>cppf.php</b> col seguente contenuto e mettilo nalla cartella include di CrawlProtect.";
$language['step1_install_no_ok6']="Una volta fatto ci&ograve; clicca sul bottone Continua.";
$language['step1_install_no_ok3'] ="Errore occorso durante la creazione della tabella, riprova.";
$language['back_to_form'] ="Torna al modulo";
$language['retry'] ="Ritenta";
$language['step2_install_no_ok']="Connessione al database impossibile, controlla i parametri di connessione.";
$language['step3_install_no_ok']="Selezione database fallita, controlla i parametri di connessione.";
$language['step4_install']="Vai";
$language['set_up_site']="Inserisci il nome del sito web (per identificarlo in WebCrawler) e il dominio (es, www.miodominio.com) qui sotto."; 
$language['site_name']="Nome Sito Web:";
$language['site_no_ok']="Devi inserire un sito web e il dominio.";
$language['site_ok']="Il sito web &egrave; stato inserito nel database.";
$language['bookmark']="Usa questo indirizzo per questa pagina nei tuoi Preferiti";
$language['site_url']="URL Sito:";
$language['admin_creation']="Impostazione account Amministratore";
$language['admin_setup']="Inserisci qui sotto login e password dell&#39;amministratore.";
$language['login_ok']="L&#39;Account &egrave; stato impostato.";
//modified in 3.2.0
$language['login_finish']="Istallazione terminata. Non dimenticare di creare il tuo file htaccess e di inserire il tag nelle tue pagine per proteggere il tuo sito web (vedi pagina Amministrazione).";
//---------
$language['wrench']="Vai alla pagina di Amministrazione CrawlProtect";
$language['printer']="Stampa la pagina attuale";
$language['information']="Documentazione su www.crawltrack.net/crawlprotect";
$language['help']="Circa CrawlProtect";
$language['cross']="Logout";
$language['home']="Torna alla home page";
$language['paramhtaccess']="Impostazione del tuo .htaccess";
$language['paramhtaccesstext1']="Completa il seguente modulo per scegliere i parametri del tuo .htaccess e poi clicca sul bottone Crea per generare il tuo file htaccess personalizzato.<br><br> Se non sai cosa scegliere, quelli proposti sono per il massimo grado di sicurezza. Modificali solo se incontri problemi di false intercettazioni di hacking sul tuo sito.";
$language['protectantihacking']="Protezione Anti-Hacking ";
$language['paramhtaccesstext2']="Questi parametri ti aiuteranno ad incrementare la protezione del tuo sito contro tentativi di hacking.";
$language['yesip']="Gradirei che CrawlProtect non blocchi mai questo (o questi) IP";
$language['yesip2']="Puoi inserire qui uno o pi&ugrave; indirizzi IP (separati da virgola) per i quali non saranno attivate protezioni. Questo ti permetterà, per esempio, di limitare l&#39;accesso all&#39;amministrazione del tuo sito solo a questo IP (vedi sotto la sezione delle url vietate). E' il tuo indirizzo IP che &egrave; visualizzato di default.";
$language['trustip']="IP consentiti:";
$language['nocodeinjection']="Protezione Code-injection";
$language['blockurl']="CrawlProtect bloccherà tutte le URL tipo:<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>http://www.tuosito.com?variable-esempio=http://www.esempio.com</b>";
$language['paramhtaccesstext3']="Se stai usando questo tipo di URL hai due possibilit&agrave;:<br><br>1) se conosci la lista di domini che chiamerai nell&#39;URL (al posto di www.esempio.com nell&#39;esempio mostrato prima); devi solo mettere la lista dei domini qui (separati da una virgola). In caso di un bloccaggio inaspettato sul tuo sito, la prima cosa da tentare &egrave; mettere il tuo dominio personale in questa lista.";
$language['paramhtaccesstext4']="2) se non hai una lista di domini (nel caso ad esempio di una directory del sito), metti qui sotto la lista di variabili usate (separate da una virgola) per scongiurare il bloccaggio in questo caso.";
$language['nosqlinjection']="Protezione SQL-injection";
$language['blockvariable']="CrawlProtect bloccher&agrave; tutte le URL con una delle seguenti parole usate in una variabile:";
$language['paramhtaccesstext5']="Se usi una URL con una di queste parole contenuta in una variabile, devi togliere la relativa spunta per prevenire il blocco in questo caso.";
$language['noshell']="Protezione comando Shell";
$language['paramhtaccesstext6']="Se usi una URL con una di queste parole contenuta in una variabile, devi togliere la relativa spunta per prevenire il blocco in questo caso.";
$language['ipblock']="IP che vuoi bloccare";
$language['ipblacklist']="Qui puoi mettere uno o pi&ugrave; IP (o un blocco IP) separati da una virgola per dire a CrawlProtect di vietare qualsiasi accesso da questi IP.";
$language['forbiddenurllist']="Inserisci qui sotto il nome di files e/o cartelle da vietare separate da una virgola (<b>admin</b> bloccher&agrave; tutte le URL tipo <b>www.esempio.com/admin.php</b> o <b>www.esempio.com/administration/index.php</b>, ecc...). Solo gli IP verificati avranno accesso (vedi sopra).";
$language['forbiddenparameterlist']="Inserisci qui sotto il nome dei parametri da vietare separati da una virgola (<b>admin</b> bloccher&agrave;tutte le URL tipo <b>www.esempio.com/index.php?s=admin</b> o <b>www.esempio.com/index.php?s=administration</b>, ecc...). Solo gli IP verificati avranno accesso (vedi sopra).";
$language['paramhtaccesstext7']="<b>Nota:</b> CrawlProtect usa alcuni altri metodi di blocco che non potranno essere modificati. Se per una qualsiasi ragione avrai una falsa intercettazione, please annota questo inconveniente sul forum di www.crawltrack.net forum per ricercare una soluzione.";
$language['nocontentstolen']="Protezione contro il furto dei contenuti del tuo sito";
$language['paramhtaccesstext8']="Questi parametri ti aiuteranno a potenziare la protezione del tuo sito contro i furti di contenuti del tuo sito.";
$language['nobadbot']="Blocca badbots e site copier";
$language['paramhtaccesstext9']="Questa &egrave; la lista di user-agents intercettati da CrawlProtect come badbots e/o site copiers";
$language['paramhtaccesstext10']="Voglio bloccare l&#39;accesso al mio sito se l&#39;user-agent usato &egrave; nella lista";
$language['paramhtaccesstext11']="Non voglio bloccare l&#39;accesso al mio sito se l&#39;user-agent usato &egrave; nella lista";
$language['paramhtaccesstext12']="<b>Nota:</b> Alcuni User-agent sono linkati a software che possono essere usati come 'site copier' ma anche per altri motivi. E' possibile che gli utenti di questi softwares, involontariamente, saranno bloccati da CrawlProtect. Se pensi che questi softwares non debbano essere bloccati, togli la spunta nella lista precedente.";
$language['nohotlinking']="Hotlinking vietati di immagini sul mio sito";
$language['paramhtaccesstext13']="Voglio vietare gli hotlinking di immagini sul mio sito (senza bloccare i principali crawlers di indicizzazione)";
$language['paramhtaccesstext14']="Non voglio vietare gli hotlinking di immagini sul mio sito";
$language['nospammer']="Blocca spammer";
$language['paramhtaccesstext15']="Puoi scegliere di bloccare il crawler cercando di ottenere facilmente un backlink usando webanalytic.";
$language['blockreferer']="Gli spammers referer che voglio bloccare";
$language['paramhtaccesstext16']="Qui puoi aggiungere uno o pi&ugrave; domini (separati da virgola) perpermettere a CrawlProtect di vietare qualsiasi accesso al tuo sito con questi domini come referer.";
$language['actualhtaccess']="Integra il tuo file corrente";
$language['paramhtaccesstext17']="Qui di seguito troverai il contenuto del file htaccess vero e proprio che verr&agrave; integrato al momento della creazione da parte di CrawlProtect.";
$language['validhtaccess']="Crea il mio file";
$language['trustip2']="IP accettati";
$language['paramhtaccesstext18']="Puoi scegliere di vietare alcune parole all&#39;interno dei messaggi post sul tuo sito per prevenire spamming del tuo forum, del tuo blog o della tua directory (la parola viagra, per esempio).";
$language['blockword']="Parole vietate";
$language['paramhtaccesstext19']="Qui puoi aggiungere una o pi&ugrave; parole (separate da virgola) per dire a CrawlProtect di vietare l&#39;uso di queste parole.";
$language['scripts_used']="Se stai usando uno o pi&ugrave; di questi scripts, metti la spunta al box corrispondente";
$language['paramhtaccesstext20']="Per prevenire incompatibilit&agrave; o falsi rilevamenti, metti la spunta ai box corrispondenti agli scripts usati sul tuo sito.";
$language['htaccessnotreadible']="Il contenuto del tuo htaccess corrente non pu&ograve; essere raccolto dallo script, devi copiarlo/incollarlo manualmente qui";
$language['yourownhtaccess']="Il tuo htaccess";
//modified in 3.2.0
$language['paramhtaccesstext21']="Il filtro Spam & SQL-injection user&agrave; la direttiva auto prepend in htaccess";
$language['paramhtaccesstext22']="Il filtro Spam & SQL-injection user&agrave; un tag php nei miei files";
//-------------
$language['paramhtaccesstext23']="Auto prepend non disponibile sul tuo server.";
//modified in 3.2.0
$language['paramhtaccesstext24']="Per una completa protezione (contro iniezioni SQL e spam) devi usare il tag php mostrato qui sotto, devi inserirlo nella tua pagina php (come il tag CrawlTrack, vedi la documentazione su www.crawltrack.net). Deve stare tra i tags &#60;?php e ?&#62, se non ci sono tags sulla tua pagina, devi aggiungerli prima e dopo il tag.";
//-------------
$language['installhtaccess']="Metti htaccess al suo posto";
$language['notapplicable']="n/a";
$language['errortrustip']="Errore nella lista di IP accettati";
$language['errorforbiddenip']="Errore nella lista di IP bloccati";
$language['returntoform']="Torna al modulo";
$language['others']="Altri";
$language['sql']="Sql injection";
$language['code']="Code injection";
$language['xss2']="Xss";
$language['shell2']="Shell";
$language['url']="Url";
$language['badbot']="Badbot";
$language['referer']="Referer";
$language['spammer2']="Spam";
$language['hotlinking2']="Hotlinking";
$language['trustip2']="IP accettati";
$language['scripts_used2']="Scripts usati";
$language['trustsite']="Sites accettati";
$language['trustvariable']="Variabili accettate";
$language['wordforbidden']="Parole vietate";
$language['hotlinkingok']="Protezioni Hotlinking attivate";
$language['hotlinkingnook']="Protezioni Hotlinking non attivate";
$language['actualhtaccess2']="Contenuto del tuo htaccess originario";
$language['change_password']="Modifica la tua password";
$language['old_password']="Password corrente";
$language['new_password']="Nuova password";
$language['valid_new_password']="Reinserisci la nuova password.";
$language['update']="Modifica effettuata";
$language['change_htaccess']="Sopprimi il file htaccess CrawlProtect";
$language['confirm_remove_htaccess']="Sicuro di voler sopprimere htaccess di CrawlProtect?<br>Il tuo htaccess originario ne prender&agrave; il posto.";
$language['suppress2']="Sopprimi il file htaccess CrawlProtect";
$language['keep2']="No, voglio tenere il file htaccess di CrawlProtect";
$language['removehtaccessok']="Il file htaccess di CrawlProtect &egrave; stato rimosso e rimpiazzato da quello precedente";
$language['removehtaccessnook']="CrawlProtect non riesce a rimettere a posto il file htaccess precedente, -controlla il CHMOD del file htaccess corrente e cambialo a 0644 col tuo client FTP e poi riprova.<br><br>-crea il file htaccess copiando il file qui sotto e trasferiscilo col tuo FTP nella root del tuo sito.";
$language['hackattempts']="Tentativi di hack o spam";
$language['parametersused']="Parametri usati dal tuo htaccess";
$language['tagforspam']="Tag per il filtro anti-spam";
$language['refresh']="Aggiorna";
$language['paramhtaccesstext25']="<span class='alert2'>Stai usando una versione precedente di CrawlProtect, non dimenticare di rimuovere la parte CrawlProtect del file htaccess esistente,<br>esso inizia con: <b># CrawlProtect-2-0-0</b><br> e termina con: <b>..../noaccess/noaccess3.php  [L]</b>  o  <b>/noaccess/noaccess30.php  [L]</b></span>";
//3.0.1
$language['expertise']="Usa l&#39;esperienza degli sviluppatori di CrawlTrack e di CrawlProtect";
$language['phpscript']="<h2>PHP scripting</h2><p>Posso aiutarti in tutte le fasi della installazione, customizazzione o creazione di script php.</p>";
$language['hackcleaning']="<h2>Cleaning after hacking</h2><p>Posso aiutarti per ripulire il tuo sito web e sistemare eventuali problemi di sicurezza.</p>";
$language['askaquote']="<a href='http://www.crawltrack.net/support.php'>Altre informazioni</a>";
$language['update_crawlprotect_ok']="Aggiiornamento CrawlProtect terminato, stai usando ora la versione:";
$language['update_crawlprotect_no_ok']="Problema durante l&#39;aggiornamento di CrawlProtect.";
$language['no_cookie']="Devi settare il tuo browser per fargli accettare i cookies";
//3.1.0
$language['paramhtaccesstext26']="Se vuoi autorizzare domini specifici ad effettuare hotlinking sulle tue immagini, devi aggiungerli qui (invece che example.com separati da una virgola).";
//3.2.3
$language['chmod-sample-ok']="Files in high security level CHMOD (0444)*";
$language['chmod-sample2-ok']="Folder in high security level CHMOD (0555)*.";
$language['message-security']="Be carefull!!! There is at least one red cross, you haven't done the maximum with CrawlProtect to protect your site";
$language['message-security2']="Bravo!!! It look like that you have done the maximum with CrawlProtect to protect your site*";
$language['notachmod']="Be carefull,these checks are done on one file and one folder only. It's only an indication which canot garanty the CHMOD level of all your files and folders. To do a complete check you have to go on 'Folders and files audit / CHMOD change' page'";
$language['quickchangechmod']="Quick CHMOD change";
$language['infolist']="*files and folders included in the list are dependant of parameters used on the administration page of your CrawlProtect and also of the eventual exclusions (lock) that you have set-up.";
$language['changechmodforupdate']="If you want to update your CMS (Wordpress, Joomla, etc…) don't forget to switch back to standard security level CHMOD (0755 et 0644) for the time of the upgrade otherwise it will be blocked."; 
$language['otherhost']="You cannot have information regarding htaccess,  CHMOD and tag of that site here, for that you need to go on the CrawlProtect of that site.";
$language['changehost']="Go on that site CrawlProtect";
$language['change_all_folders_high_security']="Switch your folders to high security level CHMOD";
$language['change_all_files_high_security']="Switch your files to high security level CHMOD";
$language['change_all_folders_std_security']="Switch your folders to 0755 CHMOD to make an update";
$language['change_all_files_std_security']="Switch your files to 0644 CHMOD to make an update";
$language['check-set-up']="Check of your security level";
$language['check-htaccess-crawlprotect']="CrawlProtect Htaccess in place";
$language['check-tag-crawlprotect']="CrawlProtect Tag in place";
$language['others']="Others parameters";
$language['listindex']="Folders without index file";
$language['listindexnook']="Block content display of folders without index file";
$language['listindexok']="Don't block content display of folders without index file";
$language['badfileaccess']="Access to special type files";
$language['listbadfile']="Allow access to the following type of files:";
//3.2.4
$language['alternatimage']="If you want to force the display of an other image in case of hotlinking. Just enter below the url of the image to use (without http://)";
//country code
$country = array(
    "ad" => "Andorra",
    "ae" => "United Arab Emirates",
    "af" => "Afghanistan",
    "ag" => "Antigua and Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Armenia",
    "an" => "Netherlands Antilles",
    "ao" => "Angola",
    "ap" => "Asia/Pacific Region",    
    "aq" => "Antarctica",
    "ar" => "Argentina",
    "as" => "American Samoa",
    "at" => "Austria",
    "au" => "Australia",
    "aw" => "Aruba",
	"ax" => "Äland island",    
    "az" => "Azerbaijan",
    "ba" => "Bosnia and Herzegovina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "Belgium",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivia",
    "br" => "Brazil",
    "bs" => "Bahamas",
    "bt" => "Bhutan",
    "bw" => "Botswana",
    "by" => "Belarus",
    "bz" => "Belize",
    "ca" => "Canada",
    "cd" => "The Democratic Republic of the Congo",
    "cf" => "Central African Republic",
    "cg" => "Congo",
    "ch" => "Switzerland",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Islands",
    "cl" => "Chile",
    "cm" => "Cameroon",
    "cn" => "China",
    "co" => "Colombia",
    "cr" => "Costa Rica",
    "cs" => "Serbia and Montenegro",
    "cu" => "Cuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Island",
    "cy" => "Cyprus",
    "cz" => "Czech Republic",
    "de" => "Germany",
    "dj" => "Djibouti",
    "dk" => "Denmark",
    "dm" => "Dominica",
    "do" => "Dominican Republic",
    "dz" => "Algeria",
    "ec" => "Ecuador",
    "ee" => "Estonia",
    "eg" => "Egypt",
    "er" => "Eritrea",
    "es" => "Spain",
    "et" => "Ethiopia",
    "fi" => "Finland",
    "fj" => "Fiji",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Federated States of Micronesia ",
    "fo" => "Faroe Islands",
    "fr" => "France",
    "ga" => "Gabon",
    "gb" => "Great Britain",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "French Guyana",
    "gg" => "Guernesey",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Greenland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Greece",
    "gs" => "South Georgia and the South Sandwich Islands",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hn" => "Honduras",
    "hr" => "Croatia",
    "ht" => "Haiti",
    "hu" => "Hungary",
    "id" => "Indonesia",
    "ie" => "Ireland",
    "il" => "Israel",
    "im" => "Isle of Man",
    "in" => "India",
    "io" => "British Indian Ocean Territory",
    "iq" => "Iraq",
    "ir" => "Iran",
    "is" => "Iceland",
    "it" => "Italia",
    "je" => "Jersey",
    "jm" => "Jamaica",
    "jo" => "Jordan",
    "jp" => "Japan",
    "ke" => "Kenya",
    "kg" => "Kyrgyzstan",
    "kh" => "Cambodia",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts and Nevis",
    "kr" => "South Korea",
    "kp" => "North Korea", 
    "kw" => "Kuwait",
    "ky" => "Cayman Islands",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Lebanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Lithuania",
    "lu" => "Luxembourg",
    "lv" => "Latvia",
    "ly" => "Libya",
    "ma" => "Morocco",
    "mc" => "Monaco",
    "md" => "Moldova",
    "me" => "Montenegro",
    "mf" => "Saint Martin",
    "mg" => "Madagascar",
    "mh" => "Marshall Islands",
    "mk" => "Macedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolia",
    "mo" => "Macau",
    "mp" => "Northern Mariana Islands",
    "mq" => "Martinique",
    "mr" => "Mauritania",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldives",
    "mw" => "Malawi",
    "mx" => "Mexico",
    "my" => "Malaysia",
    "mz" => "Mozambique",
    "na" => "Namibia",
    "nc" => "New Caledonia",
    "ne" => "Niger",
    "nf" => "Norfolk Island",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Netherlands",
    "no" => "Norway",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "New Zealand",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "French Polynesia",
    "pg" => "Papua New Guinea",
    "ph" => "Philippines",
    "pk" => "Pakistan",
    "pl" => "Poland",
    "pm" => "Saint Pierre et Miquelon",
    "pr" => "Puerto Rico",
    "ps" => "Palestinian territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Romania",
    "ru" => "Russian Federation",
    "rs" => "Russia",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabia",
    "sb" => "Solomon Islands",
    "sc" => "Seychelles",
    "sd" => "Sudan",
    "se" => "Sweden",
    "sg" => "Singapore",
    "sh" => "Saint Helena",
    "si" => "Slovenia",
    "sj" => "Svalbard",
    "sk" => "Slovakia",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalia",
    "sr" => "Suriname",
    "st" => "Sao Tome and Principe",
    "sv" => "El Salvador",
    "sy" => "Syrian Arab Republic",
    "sz" => "Switzerland",
    "tc" => "Turks and Caicos Islands",
    "td" => "Chad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tl" => "Timor Leste",
    "tm" => "Turkmenistan",
    "tn" => "Tunisia",
    "to" => "Tonga",
    "tr" => "Turkey",
    "tt" => "Trinidad and Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan",
    "tz" => "Tanzania",
    "ua" => "Ukraine",
    "ug" => "Uganda",
    "us" => "United States",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vatican City",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "Venezuela",
    "vg" => "Virgin Islands, British",
    "vi" => "Virgin Islands, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
	"wf" => "Wallis et Futuna",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "za" => "South Africa",
    "zm" => "Zambia",
    "zw" => "Zimbabwe",
    "xx" => "Unknown",
    "a2" => "Unknown",
    "eu" => "Unione Europea",    
);
?>
