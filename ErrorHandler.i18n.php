<?php
/**
 * Internationalisation file for the extension ErrorHandler.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author IAlex
 */
$messages['en'] = array(
	'errorhandler-desc'                  => 'Error handler for MediaWiki',
	'errorhandler-errors'                => 'Errors:',
	'errorhandler-error-fatal'           => 'Fatal error',
	'errorhandler-error-warning'         => 'Warning',
	'errorhandler-error-parse'           => 'Parser error',
	'errorhandler-error-notice'          => 'Notice',
	'errorhandler-error-deprecated'      => 'Deprecated',
	'errorhandler-error-core-error'      => 'Core error',
	'errorhandler-error-core-warning'    => 'Core warning',
	'errorhandler-error-compile-error'   => 'Compile error',
	'errorhandler-error-compile-warning' => 'Compile warning',
	'errorhandler-error-user-error'      => 'User error',
	'errorhandler-error-user-warning'    => 'User warning',
	'errorhandler-error-user-notice'     => 'User notice',
	'errorhandler-error-user-deprecated' => 'User deprecated',
	'errorhandler-error-strict'          => 'Strict standards',
	'errorhandler-error-recoverable'     => 'Catchable fatal error',
	'errorhandler-msg-text'              => '$1 : $2 in $3 (line $4)',
	'errorhandler-msg-html'              => '<b>$1</b> : <i>$2</i> in <b>$3</b> (line <b>$4</b>)',
	'errorhandler-trace'                 => 'trace:',
	'errorhandler-trace-line'            => '$1 (line $2): $3',
	'errorhandler-trace-line-internal'   => '[internal function]: $1',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author IAlex
 * @author Purodha
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'errorhandler-desc' => 'Extension description displayed on [[Special:Version]].',
	'errorhandler-errors' => 'This message is followed by list of the errors.
{{Identical|Error}}',
	'errorhandler-error-fatal' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-warning' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}
{{Identical|Warning}}',
	'errorhandler-error-parse' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-notice' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-deprecated' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}
{{Identical|Deprecated}}',
	'errorhandler-error-core-error' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-core-warning' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-compile-error' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-compile-warning' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-user-error' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-user-warning' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-user-notice' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-user-deprecated' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-strict' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-error-recoverable' => 'Used as error message in list of the error messages.

The label for the list is {{msg-mw|Errorhandler-errors}}.
{{Related|Errorhandler-error}}',
	'errorhandler-msg-text' => 'Used as error message. Parameters:
* $1 - error name
* $2 - error message
* $3 - filename
* $4 - line number
See also:
* {{msg-mw|Errorhandler-msg-html}}',
	'errorhandler-msg-html' => 'Used as error message. Parameters:
* $1 - error name
* $2 - error message
* $3 - filename
* $4 - line number
See also:
* {{msg-mw|Errorhandler-msg-text}}',
	'errorhandler-trace' => 'This message is followed by list of the traces (ordered list).
{{Identical|Trace}}',
	'errorhandler-trace-line' => 'Parameters:
* $1 - filename
* $2 - line number
* $3 - function name',
	'errorhandler-trace-line-internal' => 'Parameters:
* $1 - function name',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'errorhandler-errors' => 'Foute:',
	'errorhandler-error-warning' => 'Waarskuwing',
	'errorhandler-error-notice' => 'Kennisgewing',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'errorhandler-error-warning' => 'Aviso',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'errorhandler-desc' => 'معالج الخطأ لميدياويكي',
	'errorhandler-errors' => 'الأخطاء:',
	'errorhandler-error-fatal' => 'خطأ قاتل',
	'errorhandler-error-warning' => 'تحذير',
	'errorhandler-error-parse' => 'خطأ محلل',
	'errorhandler-error-notice' => 'ملاحظة',
	'errorhandler-error-deprecated' => 'تم الاستغناء عنه',
	'errorhandler-error-core-error' => 'خطأ قلب',
	'errorhandler-error-core-warning' => 'تحذير قلب',
	'errorhandler-error-compile-error' => 'خطأ تراكم',
	'errorhandler-error-compile-warning' => 'تحذير تراكم',
	'errorhandler-error-user-error' => 'خطأ مستخدم',
	'errorhandler-error-user-warning' => 'تحذير مستخدم',
	'errorhandler-error-user-notice' => 'ملاحظة مستخدم',
	'errorhandler-error-user-deprecated' => 'المستخدم تم الاستغناء عنه',
	'errorhandler-error-strict' => 'معايير صارمة',
	'errorhandler-error-recoverable' => 'خطأ قاتل يمكن إمساكه',
	'errorhandler-msg-text' => '$1 : $2 في $3 (سطر $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> في <b>$3</b> (سطر <b>$4</b>)',
	'errorhandler-trace' => 'الأثر:',
	'errorhandler-trace-line' => '$1 (سطر $2): $3',
	'errorhandler-trace-line-internal' => '[وظيفة داخلية]: $1',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'errorhandler-errors' => 'ܦܘܕ̈ܐ:',
	'errorhandler-error-user-error' => 'ܦܘܕܐ ܕܡܦܠܚܢܐ',
	'errorhandler-error-user-warning' => 'ܙܘܗܪܐ ܕܡܦܠܚܢܐ',
	'errorhandler-msg-text' => '$1 : $2 ܒ $3 (ܣܪܛܐ $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> ܒ <b>$3</b> (ܣܪܛܐ <b>$4</b>)',
	'errorhandler-trace-line' => '$1 (ܣܪܛܐ $2): $3',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'errorhandler-desc' => 'معالج الخطأ لميدياويكي',
	'errorhandler-errors' => 'الأخطاء:',
	'errorhandler-error-fatal' => 'خطأ قاتل',
	'errorhandler-error-warning' => 'تحذير',
	'errorhandler-error-parse' => 'خطأ محلل',
	'errorhandler-error-notice' => 'ملاحظة',
	'errorhandler-error-deprecated' => 'تم الاستغناء عنه',
	'errorhandler-error-core-error' => 'خطأ قلب',
	'errorhandler-error-core-warning' => 'تحذير قلب',
	'errorhandler-error-compile-error' => 'خطأ تراكم',
	'errorhandler-error-compile-warning' => 'تحذير تراكم',
	'errorhandler-error-user-error' => 'خطأ مستخدم',
	'errorhandler-error-user-warning' => 'تحذير مستخدم',
	'errorhandler-error-user-notice' => 'ملاحظة مستخدم',
	'errorhandler-error-user-deprecated' => 'المستخدم تم الاستغناء عنه',
	'errorhandler-error-strict' => 'معايير صارمة',
	'errorhandler-error-recoverable' => 'خطأ قاتل يمكن إمساكه',
	'errorhandler-msg-text' => '$1 : $2 فى $3 (سطر $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> فى <b>$3</b> (سطر <b>$4</b>)',
	'errorhandler-trace' => 'الأثر:',
	'errorhandler-trace-line' => '$1 (سطر $2): $3',
	'errorhandler-trace-line-internal' => '[وظيفة داخلية]: $1',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'errorhandler-desc' => "Xestor d'errores pa MediaWiki",
	'errorhandler-errors' => 'Errores:',
	'errorhandler-error-fatal' => 'Error fatal',
	'errorhandler-error-warning' => 'Avisu',
	'errorhandler-error-parse' => "Error d'analís",
	'errorhandler-error-notice' => 'Nota',
	'errorhandler-error-deprecated' => 'Desusao',
	'errorhandler-error-core-error' => 'Error del nucleu',
	'errorhandler-error-core-warning' => 'Avisu del nucleu',
	'errorhandler-error-compile-error' => 'Error de compilación',
	'errorhandler-error-compile-warning' => 'Avisu de compilación',
	'errorhandler-error-user-error' => "Error d'usuariu",
	'errorhandler-error-user-warning' => "Avisu d'usuariu",
	'errorhandler-error-user-notice' => "Nota d'usuariu",
	'errorhandler-error-user-deprecated' => 'Usuariu desusáu',
	'errorhandler-error-strict' => 'Estándares estrictos',
	'errorhandler-error-recoverable' => 'Error fatal recuperable',
	'errorhandler-msg-text' => '$1 : $2 en $3 (llinia $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> en <b>$3</b> (llinia <b>$4</b>)',
	'errorhandler-trace' => 'trazu:',
	'errorhandler-trace-line' => '$1 (llinia $2): $3',
	'errorhandler-trace-line-internal' => '[función interna]: $1',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'errorhandler-errors' => 'Xətalar:',
	'errorhandler-error-warning' => 'Xəbərdarlıq',
	'errorhandler-error-notice' => 'Qeyd',
	'errorhandler-error-user-error' => 'İstifadəçi xətası',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'errorhandler-desc' => 'Апрацоўшчык памылак для MediaWiki',
	'errorhandler-errors' => 'Памылкі:',
	'errorhandler-error-fatal' => 'Крытычная памылка',
	'errorhandler-error-warning' => 'Папярэджаньне',
	'errorhandler-error-parse' => 'Памылка парсэра',
	'errorhandler-error-notice' => 'Заўвага',
	'errorhandler-error-deprecated' => 'Паменшаная',
	'errorhandler-error-core-error' => 'Памылка ядра',
	'errorhandler-error-core-warning' => 'Папярэджаньне ядра',
	'errorhandler-error-compile-error' => 'Памылка кампіляцыі',
	'errorhandler-error-compile-warning' => 'Папярэджаньне кампілятара',
	'errorhandler-error-user-error' => 'Памылка ўдзельніка',
	'errorhandler-error-user-warning' => 'Папярэджаньне ўдзельніка',
	'errorhandler-error-user-notice' => 'Заўвага ўдзельніка',
	'errorhandler-error-user-deprecated' => 'Непрыняты ўдзельнік',
	'errorhandler-error-strict' => 'Жорсткія стандарты',
	'errorhandler-error-recoverable' => 'Фатальная памылка, якую можна адсачыць',
	'errorhandler-msg-text' => '$1 : $2 у $3 (радок $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> у <b>$3</b> (радок <b>$4</b>)',
	'errorhandler-trace' => 'сачэньне:',
	'errorhandler-trace-line' => '$1 (радок $2): $3',
	'errorhandler-trace-line-internal' => '[вонкавая функцыя]: $1',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'errorhandler-errors' => 'Грешки:',
	'errorhandler-error-fatal' => 'Фатална грешка',
	'errorhandler-error-warning' => 'Предупреждение',
	'errorhandler-error-parse' => 'Грешка в парсера',
	'errorhandler-error-notice' => 'Забележка',
	'errorhandler-error-user-error' => 'Потребителска грешка',
	'errorhandler-error-user-warning' => 'Потребителско предупреждение',
	'errorhandler-error-user-notice' => 'Потребителска забележка',
	'errorhandler-msg-text' => '$1 : $2 в $3 (ред $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> в <b>$3</b> (ред <b>$4</b>)',
	'errorhandler-trace-line' => '$1 (ред $2): $3',
	'errorhandler-trace-line-internal' => '[вътрешна функция]: $1',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'errorhandler-errors' => 'ত্রুটিসমূহ:',
	'errorhandler-error-fatal' => 'ফ্যাটাল ত্রুটি',
	'errorhandler-error-warning' => 'সতর্কীকরণ:',
	'errorhandler-error-parse' => 'পার্সার ত্রুটি',
	'errorhandler-error-notice' => 'নোটিশ',
	'errorhandler-error-deprecated' => 'বাতিল হয়েছে',
	'errorhandler-error-core-error' => 'কোড ত্রুটি',
	'errorhandler-error-core-warning' => 'কোড সতর্কীকরণ',
	'errorhandler-error-compile-error' => 'কম্পাইল ত্রুটি',
	'errorhandler-error-compile-warning' => 'কম্পাইল সতর্কীকরণ',
	'errorhandler-error-user-error' => 'ব্যবহারকারী ত্রুটি',
	'errorhandler-error-user-warning' => 'ব্যবহারকারী সতর্কীকরণ',
	'errorhandler-error-user-notice' => 'ব্যবহারকারী নোটিশ',
	'errorhandler-error-user-deprecated' => 'ব্যবহারকারী বাতিল হয়েছে',
	'errorhandler-error-strict' => 'কঠোর মান',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'errorhandler-desc' => 'Merer ar fazioù evit MediaWiki',
	'errorhandler-errors' => 'Fazioù :',
	'errorhandler-error-fatal' => 'Fazi diremed',
	'errorhandler-error-warning' => 'Diwallit',
	'errorhandler-error-parse' => 'Fazi parser',
	'errorhandler-error-notice' => 'Kemenn',
	'errorhandler-error-deprecated' => 'Dispredet',
	'errorhandler-error-core-error' => 'Fazi er graoñenn',
	'errorhandler-error-core-warning' => 'Kemenn diwall a-berzh ar graoñenn',
	'errorhandler-error-compile-error' => 'Fazi kempunañ',
	'errorhandler-error-compile-warning' => "Kemenn diwall evit ar c'hempunañ",
	'errorhandler-error-user-error' => 'Fazi implijer',
	'errorhandler-error-user-warning' => 'Kemenn implijer',
	'errorhandler-error-user-notice' => 'Kemenn implijer',
	'errorhandler-error-user-deprecated' => 'Implijer dispredet',
	'errorhandler-error-strict' => 'Standardoù strizh',
	'errorhandler-error-recoverable' => "Fazi grevus a c'hell bezañ adpaket",
	'errorhandler-msg-text' => '$1 : $2 e $3 (linenn $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> e <b>$3</b> (linenn <b>$4</b>)',
	'errorhandler-trace' => 'roud :',
	'errorhandler-trace-line' => '$1 (linenn $2) : $3',
	'errorhandler-trace-line-internal' => "[arc'hwel diabarzh] : $1",
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'errorhandler-desc' => 'Upravljač grešaka za MediaWiki',
	'errorhandler-errors' => 'Greške:',
	'errorhandler-error-fatal' => 'Fatalna greška',
	'errorhandler-error-warning' => 'Upozorenje',
	'errorhandler-error-parse' => 'Greška parsera',
	'errorhandler-error-notice' => 'Obavještenje',
	'errorhandler-error-deprecated' => 'Prevaziđeno',
	'errorhandler-error-core-error' => 'Greška jezgre',
	'errorhandler-error-core-warning' => 'Upozorenje jezgre',
	'errorhandler-error-compile-error' => 'Greška kompajlera',
	'errorhandler-error-compile-warning' => 'Upozorenje kompajlera',
	'errorhandler-error-user-error' => 'Korisnička greška',
	'errorhandler-error-user-warning' => 'Korisničko upozorenje',
	'errorhandler-error-user-notice' => 'Korisničko upozorenje',
	'errorhandler-error-user-deprecated' => 'Korisnik odbijen',
	'errorhandler-error-strict' => 'Strogi standardi',
	'errorhandler-error-recoverable' => 'Čitljiva fatalna greška',
	'errorhandler-msg-text' => '$1 : $2 u datoteci $3 (linija $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> u <b>$3</b> (linija <b>$4</b>)',
	'errorhandler-trace' => 'trag:',
	'errorhandler-trace-line' => '$1 (linija $2): $3',
	'errorhandler-trace-line-internal' => '[unutrašnja funkcija]: $1',
);

/** Catalan (català)
 * @author Aleator
 * @author Paucabot
 */
$messages['ca'] = array(
	'errorhandler-errors' => 'Errors:',
	'errorhandler-error-fatal' => 'Error fatal',
	'errorhandler-error-compile-error' => 'Error de compilació',
	'errorhandler-error-user-error' => "Error d'usuari",
);

/** Czech (čeština)
 * @author Jkjk
 * @author Matěj Grabovský
 */
$messages['cs'] = array(
	'errorhandler-desc' => 'Obsluha chyb MediaWiki',
	'errorhandler-errors' => 'Chyby:',
	'errorhandler-error-fatal' => 'Kritická chyba',
	'errorhandler-error-warning' => 'Upozornění',
	'errorhandler-error-parse' => 'Chyba syntaktické analýzy',
	'errorhandler-error-notice' => 'Oznámení',
	'errorhandler-error-deprecated' => 'Zastaralé',
	'errorhandler-error-core-error' => 'Chyba jádra',
	'errorhandler-error-core-warning' => 'Upozornění jádra',
	'errorhandler-error-compile-error' => 'Chyba kompilace',
	'errorhandler-error-compile-warning' => 'Upozornění kompilace',
	'errorhandler-error-user-error' => 'Chyba uživatele',
	'errorhandler-error-user-warning' => 'Upozornění uživatele',
	'errorhandler-error-user-notice' => 'Oznámení uživatele', # Fuzzy
	'errorhandler-error-user-deprecated' => 'Uživatel je zastaralý', # Fuzzy
	'errorhandler-error-strict' => 'Přísné standardy',
	'errorhandler-error-recoverable' => 'Zachytitelná kritická chyba',
	'errorhandler-trace' => 'trasování:',
	'errorhandler-trace-line-internal' => '[vnitřní funkce]: $1',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'errorhandler-errors' => 'блаꙁнꙑ :',
);

/** Danish (dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'errorhandler-errors' => 'Fejl:',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author Leithian
 * @author Revolus
 */
$messages['de'] = array(
	'errorhandler-desc' => 'Fehlerbehandlung für MediaWiki',
	'errorhandler-errors' => 'Fehler:',
	'errorhandler-error-fatal' => 'Fataler Fehler',
	'errorhandler-error-warning' => 'Warnung',
	'errorhandler-error-parse' => 'Verarbeitungsfehler',
	'errorhandler-error-notice' => 'Anmerkung',
	'errorhandler-error-deprecated' => 'Missbilligt',
	'errorhandler-error-core-error' => 'Kernfehler',
	'errorhandler-error-core-warning' => 'Kernwarnung',
	'errorhandler-error-compile-error' => 'Compilerfehler',
	'errorhandler-error-compile-warning' => 'Compilerwarnung',
	'errorhandler-error-user-error' => 'Benutzerfehler',
	'errorhandler-error-user-warning' => 'Benutzerwarnung',
	'errorhandler-error-user-notice' => 'Benutzerhinweis',
	'errorhandler-error-user-deprecated' => 'Benutzer abgelehnt',
	'errorhandler-error-strict' => 'Strenge Standards',
	'errorhandler-error-recoverable' => 'Auslesbarer fataler Fehler',
	'errorhandler-msg-text' => '$1: $2 in $3 (Zeile $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (Zeile <b>$4</b>)',
	'errorhandler-trace' => 'Ablaufverfolgung:',
	'errorhandler-trace-line' => '$1 (Zeile $2): $3',
	'errorhandler-trace-line-internal' => '[interne Funktion]: $1',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Gorizon
 * @author Marmase
 */
$messages['diq'] = array(
	'errorhandler-errors' => 'Xırabi:',
	'errorhandler-error-warning' => 'İğtar',
	'errorhandler-error-notice' => 'Mengene',
	'errorhandler-error-user-error' => 'Xirabiya karberi',
	'errorhandler-error-user-warning' => 'İkaziya karberi',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'errorhandler-desc' => 'Wobźěłanje zmólkow za MediaWiki',
	'errorhandler-errors' => 'Zmólki:',
	'errorhandler-error-fatal' => 'Fatalna zmólka',
	'errorhandler-error-warning' => 'Warnowanje',
	'errorhandler-error-parse' => 'Parserowa zmólka',
	'errorhandler-error-notice' => 'Pśipisk',
	'errorhandler-error-deprecated' => 'Zachyśony',
	'errorhandler-error-core-error' => 'Jědrowa zmólka',
	'errorhandler-error-core-warning' => 'Jědrowe warnowanje',
	'errorhandler-error-compile-error' => 'Kompilěrowańska zmólka',
	'errorhandler-error-compile-warning' => 'Kompilěrowańske warnowanje',
	'errorhandler-error-user-error' => 'Wužywarska zmólka',
	'errorhandler-error-user-warning' => 'Wužywarske warnowanje',
	'errorhandler-error-user-notice' => 'Wužywarske pśipomnjeśe',
	'errorhandler-error-user-deprecated' => 'Wužywaŕ wótpokazany',
	'errorhandler-error-strict' => 'Kšute standardy',
	'errorhandler-error-recoverable' => 'Zapópadujobna fatalna zmólka',
	'errorhandler-msg-text' => '$1 : $2 w $3 (smužka $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> w <b>$3</b> (smužka <b>$4</b>)',
	'errorhandler-trace' => 'Slědkslědowanje:',
	'errorhandler-trace-line' => '$1 (smužka $2): $3',
	'errorhandler-trace-line-internal' => '[interna funkcija]: $1',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'errorhandler-errors' => 'Σφάλματα:',
	'errorhandler-error-fatal' => 'Θανάσιμο σφάλμα',
	'errorhandler-error-warning' => 'Προειδοποίηση',
	'errorhandler-error-parse' => 'Σφάλμα λεξιαναλυτή',
	'errorhandler-error-notice' => 'Σημείωση',
	'errorhandler-error-deprecated' => 'Αποδοκιμασμένος',
	'errorhandler-error-core-error' => 'Σφάλμα κώδικα',
	'errorhandler-error-core-warning' => 'Προειδοποίηση πυρήνα',
	'errorhandler-error-compile-error' => 'Σφάλμα μεταγλώττισης',
	'errorhandler-error-compile-warning' => 'Προειδοποίηση μεταγλώττισης',
	'errorhandler-error-user-error' => 'Σφάλμα χρήστη',
	'errorhandler-error-user-warning' => 'Προειδοποίηση χρήστη',
	'errorhandler-error-user-notice' => 'Ειδοποίηση χρήστη',
	'errorhandler-error-strict' => 'Υψηλά στάνταρ',
	'errorhandler-msg-text' => '$1 : $2 στο $3 (γραμμή $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (γραμμή <b>$4</b>)',
	'errorhandler-trace' => 'ίχνος:',
	'errorhandler-trace-line' => '$1 (γραμμή $2): $3',
	'errorhandler-trace-line-internal' => '[εσωτερική συνάρτηση]: $1',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'errorhandler-desc' => 'Erara traktilo por MediaWiki',
	'errorhandler-errors' => 'Eraroj:',
	'errorhandler-error-fatal' => 'Neriparebla eraro',
	'errorhandler-error-warning' => 'Averto',
	'errorhandler-error-parse' => 'Eraro de sintaksa analizilo',
	'errorhandler-error-notice' => 'Noto',
	'errorhandler-error-deprecated' => 'Evitinda',
	'errorhandler-error-core-error' => 'Fundamenta eraro',
	'errorhandler-error-compile-error' => 'Tradukila eraro',
	'errorhandler-error-compile-warning' => 'Tradukila averto',
	'errorhandler-error-user-error' => 'Eraro de uzanto',
	'errorhandler-error-user-warning' => 'Averto de uzanto',
	'errorhandler-error-user-notice' => 'Uzula notico',
	'errorhandler-error-strict' => 'Striktaj normreguloj',
	'errorhandler-msg-text' => '$1 : $2 en $3 (linio $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> en <b>$3</b> (linio <b>$4</b>)',
	'errorhandler-trace' => 'spuro:',
	'errorhandler-trace-line' => '$1 (linio $2): $3',
	'errorhandler-trace-line-internal' => '[interna funkcio]: $1',
);

/** Spanish (español)
 * @author Antur
 * @author Sanbec
 */
$messages['es'] = array(
	'errorhandler-desc' => 'Error operativo de MediaWiki',
	'errorhandler-errors' => 'Errores:',
	'errorhandler-error-fatal' => 'Error grave',
	'errorhandler-error-warning' => 'Cuidado',
	'errorhandler-error-parse' => 'Error sintáctico',
	'errorhandler-error-notice' => 'Aviso',
	'errorhandler-error-deprecated' => 'En desuso',
	'errorhandler-error-core-error' => 'Error de núcleo',
	'errorhandler-error-core-warning' => 'Alerta de núcleo',
	'errorhandler-error-compile-error' => 'Error de compilación',
	'errorhandler-error-compile-warning' => 'Alerta de compilación',
	'errorhandler-error-user-error' => 'Error de usuario',
	'errorhandler-error-user-warning' => 'Alerta de usuario',
	'errorhandler-error-user-notice' => 'Aviso de usuario',
	'errorhandler-error-user-deprecated' => 'Usuario en desuso',
	'errorhandler-error-strict' => 'Estándar estricto',
	'errorhandler-error-recoverable' => 'Error grave recuperable',
	'errorhandler-msg-text' => '$1 : $2 en $3 (línea $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> en <b>$3</b> (línea <b>$4</b>)',
	'errorhandler-trace' => 'rastrear:',
	'errorhandler-trace-line' => '$1 (línea $2): $3',
	'errorhandler-trace-line-internal' => '[función interna]: $1',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'errorhandler-errors' => 'Vead:',
	'errorhandler-error-warning' => 'Hoiatus',
	'errorhandler-error-user-error' => 'Kasutaja viga',
);

/** Basque (euskara)
 * @author Kobazulo
 */
$messages['eu'] = array(
	'errorhandler-errors' => 'Erroreak:',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author پاناروما
 */
$messages['fa'] = array(
	'errorhandler-errors' => 'خطاها',
	'errorhandler-error-fatal' => 'خطای مخرب',
	'errorhandler-error-warning' => 'هشدار',
	'errorhandler-error-parse' => 'خطای تجزیه‌گر',
	'errorhandler-error-notice' => 'توجه',
	'errorhandler-error-deprecated' => 'توصیه',
	'errorhandler-error-core-error' => 'خطای هسته',
	'errorhandler-error-core-warning' => 'هشدار هسته',
	'errorhandler-error-compile-error' => 'خطای کامپایل',
	'errorhandler-error-compile-warning' => 'هشدار کامپایل',
	'errorhandler-error-user-error' => 'خطای کاربر',
	'errorhandler-error-user-warning' => 'هشدار کاربر',
	'errorhandler-error-user-notice' => 'اعلان کاربر',
	'errorhandler-trace-line-internal' => '[تابع داخلی]: $1',
);

/** Finnish (suomi)
 * @author Cimon Avaro
 * @author Crt
 * @author Mobe
 * @author Nike
 * @author Vililikku
 */
$messages['fi'] = array(
	'errorhandler-desc' => 'Virhekäsittelijä MediaWikille',
	'errorhandler-errors' => 'Virheet:',
	'errorhandler-error-fatal' => 'Vakava virhe',
	'errorhandler-error-warning' => 'Varoitus',
	'errorhandler-error-parse' => 'Jäsennysvirhe',
	'errorhandler-error-notice' => 'Huomautus',
	'errorhandler-error-deprecated' => 'Käytöstä poistuva',
	'errorhandler-error-core-error' => 'Ydinosan virhe',
	'errorhandler-error-core-warning' => 'Ydinosan varoitus',
	'errorhandler-error-compile-error' => 'Käännösvirhe',
	'errorhandler-error-compile-warning' => 'Käännösvaroitus',
	'errorhandler-error-user-error' => 'Koodissa määritelty virhe',
	'errorhandler-error-user-warning' => 'Koodissa määritelty varoitus',
	'errorhandler-error-user-notice' => 'Koodissa määritelty huomautus',
	'errorhandler-error-user-deprecated' => 'Koodissa määritelty käytöstä poistuva -varoitus',
	'errorhandler-error-strict' => 'Tiukat standardit',
	'errorhandler-error-recoverable' => 'Vakava virhe, joka kyetään korjaamaan',
	'errorhandler-msg-text' => '$1 : $2 kohteessa $3 (rivi $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> kohteessa <b>$3</b> (rivi <b>$4</b>)',
	'errorhandler-trace' => 'pinolistaus:',
	'errorhandler-trace-line' => '$1 (rivi $2): $3',
	'errorhandler-trace-line-internal' => '[sisäinen funktio]: $1',
);

/** French (français)
 * @author IAlex
 * @author McDutchie
 * @author PieRRoMaN
 * @author Urhixidur
 */
$messages['fr'] = array(
	'errorhandler-desc' => "Gestionnaire d'erreurs pour MediaWiki",
	'errorhandler-errors' => 'Erreurs :',
	'errorhandler-error-fatal' => 'Erreur fatale',
	'errorhandler-error-warning' => 'Avertissement',
	'errorhandler-error-parse' => 'Erreur d’analyse',
	'errorhandler-error-notice' => 'Notice',
	'errorhandler-error-deprecated' => 'Désuet',
	'errorhandler-error-core-error' => 'Erreur du noyau',
	'errorhandler-error-core-warning' => 'Avertissement du noyau',
	'errorhandler-error-compile-error' => 'Erreur de compilation',
	'errorhandler-error-compile-warning' => 'Avertissement de compilation',
	'errorhandler-error-user-error' => 'Erreur (utilisateur)',
	'errorhandler-error-user-warning' => 'Avertissement (utilisateur)',
	'errorhandler-error-user-notice' => 'Notice (utilisateur)',
	'errorhandler-error-user-deprecated' => 'Désuet (utilisateur)',
	'errorhandler-error-strict' => 'Standards stricts',
	'errorhandler-error-recoverable' => 'Erreur fatale qui peut être attrapée',
	'errorhandler-msg-text' => '$1 : $2 dans $3 (ligne $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> dans <b>$3</b> (ligne <b>$4</b>)',
	'errorhandler-trace' => 'trace :',
	'errorhandler-trace-line' => '$1 (ligne $2) : $3',
	'errorhandler-trace-line-internal' => '[fonction interne] : $1',
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'errorhandler-desc' => 'Administrator d’èrrors por MediaWiki',
	'errorhandler-errors' => 'Èrrors :',
	'errorhandler-error-fatal' => 'Èrror fatala',
	'errorhandler-error-warning' => 'Avèrtissement',
	'errorhandler-error-parse' => 'Èrror du parsor',
	'errorhandler-error-notice' => 'Nota',
	'errorhandler-error-deprecated' => 'Dèpassâ',
	'errorhandler-error-core-error' => 'Èrror du gremél',
	'errorhandler-error-core-warning' => 'Avèrtissement du gremél',
	'errorhandler-error-compile-error' => 'Èrror de compilacion',
	'errorhandler-error-compile-warning' => 'Avèrtissement de compilacion',
	'errorhandler-error-user-error' => 'Èrror a l’usanciér',
	'errorhandler-error-user-warning' => 'Avèrtissement a l’usanciér',
	'errorhandler-error-user-notice' => 'Nota a l’usanciér',
	'errorhandler-error-strict' => 'Estandârds rêdos',
	'errorhandler-error-recoverable' => 'Èrror fatala que pôt étre atrapâ',
	'errorhandler-msg-text' => '$1 : $2 dens $3 (legne $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> dens <b>$3</b> (legne <b>$4</b>)',
	'errorhandler-trace' => 'trace :',
	'errorhandler-trace-line' => '$1 (legne $2) : $3',
	'errorhandler-trace-line-internal' => '[fonccion de dedens] : $1',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'errorhandler-desc' => 'Erro do manipulador de MediaWiki',
	'errorhandler-errors' => 'Erros:',
	'errorhandler-error-fatal' => 'Erro fatal',
	'errorhandler-error-warning' => 'Aviso',
	'errorhandler-error-parse' => 'Erro de análise',
	'errorhandler-error-notice' => 'Nota',
	'errorhandler-error-deprecated' => 'Obsoleto',
	'errorhandler-error-core-error' => 'Erro central',
	'errorhandler-error-core-warning' => 'Aviso central',
	'errorhandler-error-compile-error' => 'Erro de recompilación',
	'errorhandler-error-compile-warning' => 'Aviso de recompilación',
	'errorhandler-error-user-error' => 'Erro de usuario',
	'errorhandler-error-user-warning' => 'Aviso de usuario',
	'errorhandler-error-user-notice' => 'Nota de usuario',
	'errorhandler-error-user-deprecated' => 'Usuario desaconsellado',
	'errorhandler-error-strict' => 'Estándares estritos',
	'errorhandler-error-recoverable' => 'Erro fatal recuperable',
	'errorhandler-msg-text' => '$1 : $2 en $3 (liña $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> en <b>$3</b> (liña <b>$4</b>)',
	'errorhandler-trace' => 'trazo:',
	'errorhandler-trace-line' => '$1 (liña $2): $3',
	'errorhandler-trace-line-internal' => '[función interna]: $1',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'errorhandler-errors' => 'Σφάλματα:',
	'errorhandler-error-warning' => 'Εἴδησις',
	'errorhandler-error-parse' => 'Σφάλμα λεξιαναλυτοῦ',
	'errorhandler-error-notice' => 'Σημείωμα',
	'errorhandler-error-strict' => 'Αὐστηρὰ πρότυπα',
	'errorhandler-msg-text' => '$1 : $2 ἐν $3 (γραμμή $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> ἐν <b>$3</b> (γραμμή <b>$4</b>)',
	'errorhandler-trace' => 'ἴχνος:',
	'errorhandler-trace-line' => '$1 (γραμμή $2): $3',
	'errorhandler-trace-line-internal' => '[ἐσωτέρα συνάρτησις]: $1',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'errorhandler-desc' => 'Fählerbehandlig fir MediaWiki',
	'errorhandler-errors' => 'Fähler:',
	'errorhandler-error-fatal' => 'Fatale Fähler',
	'errorhandler-error-warning' => 'Warnig',
	'errorhandler-error-parse' => 'Verarbeitigsfähler',
	'errorhandler-error-notice' => 'Aamerkig',
	'errorhandler-error-deprecated' => 'Abglähnt',
	'errorhandler-error-core-error' => 'Chärnfähler',
	'errorhandler-error-core-warning' => 'Chärnwarnig',
	'errorhandler-error-compile-error' => 'Compilerfähler',
	'errorhandler-error-compile-warning' => 'Compilerwarnig',
	'errorhandler-error-user-error' => 'Benutzerfähler',
	'errorhandler-error-user-warning' => 'Benutzerwarnig',
	'errorhandler-error-user-notice' => 'Benutzerhiiwyys',
	'errorhandler-error-user-deprecated' => 'Benutzer abglähnt',
	'errorhandler-error-strict' => 'Strängi Standard',
	'errorhandler-error-recoverable' => 'Uusläsbare fatale Fähler',
	'errorhandler-msg-text' => '$1: $2 in $3 (Zyyle $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (Zyyle <b>$4</b>)',
	'errorhandler-trace' => 'Ablauf verfolge:',
	'errorhandler-trace-line' => '$1 (Zyyle $2): $3',
	'errorhandler-trace-line-internal' => '[intärni Funktion]: $1',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'errorhandler-desc' => 'כלי לטיפול בשגיאות עבור מדיה־ויקי',
	'errorhandler-errors' => 'שגיאות:',
	'errorhandler-error-fatal' => 'שגיאה קריטית',
	'errorhandler-error-warning' => 'אזהרה',
	'errorhandler-error-parse' => 'שגיאת מפענח',
	'errorhandler-error-notice' => 'התראה',
	'errorhandler-error-deprecated' => 'מיושן',
	'errorhandler-error-core-error' => 'שגיאת ליבה',
	'errorhandler-error-core-warning' => 'אזהרת ליבה',
	'errorhandler-error-compile-error' => 'שגיאת הידור',
	'errorhandler-error-compile-warning' => 'אזהרת הידור',
	'errorhandler-error-user-error' => 'שגיאת משתמש',
	'errorhandler-error-user-warning' => 'אזהרת משתמש',
	'errorhandler-error-user-notice' => 'התראת משתמש',
	'errorhandler-error-user-deprecated' => 'נקבע כמיושן על ידי המשתמש',
	'errorhandler-error-strict' => 'תקנים מחמירים',
	'errorhandler-error-recoverable' => 'שגיאה קריטית הניתנת לטיפול',
	'errorhandler-msg-text' => '$1 : $2 ב־$3 (שורה $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> ב־<b>$3</b> (שורה <b>$4</b>)',
	'errorhandler-trace' => 'עקבות:',
	'errorhandler-trace-line' => '$1 (שורה $2): $3',
	'errorhandler-trace-line-internal' => '[פונקציה פנימית]: $1',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'errorhandler-desc' => 'Wobchadźenje ze zmylkami za MediaWiki',
	'errorhandler-errors' => 'Zmylki:',
	'errorhandler-error-fatal' => 'Fatalny zmylk',
	'errorhandler-error-warning' => 'Warnowanje',
	'errorhandler-error-parse' => 'Analyzowy zmylk',
	'errorhandler-error-notice' => 'Zdźělenka',
	'errorhandler-error-deprecated' => 'Njeschwaleny',
	'errorhandler-error-core-error' => 'Jadrowy zmylk',
	'errorhandler-error-core-warning' => 'Warnowanje jadra',
	'errorhandler-error-compile-error' => 'Kompilaciski zmylk',
	'errorhandler-error-compile-warning' => 'Kompilaciske warnowanje',
	'errorhandler-error-user-error' => 'Wužiwarski zmylk',
	'errorhandler-error-user-warning' => 'Wužiwarske warnowanje',
	'errorhandler-error-user-notice' => 'Wužiwarska zdźělenka',
	'errorhandler-error-user-deprecated' => 'Wužiwar njeschwaleny',
	'errorhandler-error-strict' => 'Striktne standardy',
	'errorhandler-error-recoverable' => 'Popadujomny fatalny zmylk',
	'errorhandler-msg-text' => '$1 : $2 w $3 (rjadka $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> w <b>$3</b> (rjadka <b>$4</b>)',
	'errorhandler-trace' => 'slědować:',
	'errorhandler-trace-line' => '$1 (rjadka $2): $3',
	'errorhandler-trace-line-internal' => '[interna funkcija]: $1',
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'errorhandler-desc' => 'Hibakezelő a MediaWikihez',
	'errorhandler-errors' => 'Hibák:',
	'errorhandler-error-fatal' => 'Végzetes hiba',
	'errorhandler-error-warning' => 'Figyelmeztetés',
	'errorhandler-error-parse' => 'Elemző hiba',
	'errorhandler-error-notice' => 'Megjegyzés',
	'errorhandler-error-deprecated' => 'Elavult',
	'errorhandler-error-core-error' => 'Központi hiba',
	'errorhandler-error-core-warning' => 'Központi figyelmeztetés',
	'errorhandler-error-compile-error' => 'Fordítási hiba',
	'errorhandler-error-compile-warning' => 'Fordítási figyelmeztetés',
	'errorhandler-error-user-error' => 'Felhasználói hiba',
	'errorhandler-error-user-warning' => 'Felhasználói figyelmeztetés',
	'errorhandler-error-user-notice' => 'Felhasználói megjegyzés',
	'errorhandler-error-user-deprecated' => 'Felhasználó által elavulttá tett',
	'errorhandler-error-strict' => 'Szigorú szabványok',
	'errorhandler-error-recoverable' => 'Elkapható végzetes hiba',
	'errorhandler-msg-text' => '$1: $2 a(z) $3 fájl $4. sorában',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> a(z) <b>$3</b> fájl <b>$4</b>. sorában',
	'errorhandler-trace' => 'nyomkövetés:',
	'errorhandler-trace-line' => '$1 ($2. sor): $3',
	'errorhandler-trace-line-internal' => '[belső függvény]: $1',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'errorhandler-desc' => 'Gestor de errores pro MediaWiki',
	'errorhandler-errors' => 'Errores:',
	'errorhandler-error-fatal' => 'Error fatal',
	'errorhandler-error-warning' => 'Advertimento',
	'errorhandler-error-parse' => 'Error del analysator syntactic',
	'errorhandler-error-notice' => 'Notitia',
	'errorhandler-error-deprecated' => 'Obsolete',
	'errorhandler-error-core-error' => 'Error de nucleo',
	'errorhandler-error-core-warning' => 'Advertimento de nucleo',
	'errorhandler-error-compile-error' => 'Error de compilation',
	'errorhandler-error-compile-warning' => 'Advertimento de compilation',
	'errorhandler-error-user-error' => 'Error de usator',
	'errorhandler-error-user-warning' => 'Advertimento de usator',
	'errorhandler-error-user-notice' => 'Notitia de usator',
	'errorhandler-error-user-deprecated' => 'Declarate obsolete per usator',
	'errorhandler-error-strict' => 'Standardes stricte',
	'errorhandler-error-recoverable' => 'Error fatal attrappabile',
	'errorhandler-msg-text' => '$1 : $2 in $3 (linea $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (linea <b>$4</b>)',
	'errorhandler-trace' => 'tracia:',
	'errorhandler-trace-line' => '$1 (linea $2): $3',
	'errorhandler-trace-line-internal' => '[function interne]: $1',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author IvanLanin
 * @author Kandar
 */
$messages['id'] = array(
	'errorhandler-desc' => 'Penangan kesalahan untuk MediaWiki',
	'errorhandler-errors' => 'Galat:',
	'errorhandler-error-fatal' => 'Kesalahan fatal',
	'errorhandler-error-warning' => 'Peringatan',
	'errorhandler-error-parse' => 'Kesalahan parser',
	'errorhandler-error-notice' => 'Pemberitahuan',
	'errorhandler-error-deprecated' => 'Tidak dipakai',
	'errorhandler-error-core-error' => 'Kesalahan dasar',
	'errorhandler-error-core-warning' => 'Peringatan dasar',
	'errorhandler-error-compile-error' => 'Kesalahan kompilasi',
	'errorhandler-error-compile-warning' => 'Peringatan kompilasi',
	'errorhandler-error-user-error' => 'Kesalahan pengguna',
	'errorhandler-error-user-warning' => 'Peringatan pengguna',
	'errorhandler-error-user-notice' => 'Pemberitahuaan pengguna',
	'errorhandler-error-user-deprecated' => 'Tidak dipakai pengguna',
	'errorhandler-error-strict' => 'Standar kaku',
	'errorhandler-error-recoverable' => 'Kesalahan fatal yang dapat ditangkap',
	'errorhandler-msg-text' => '$1 : $2 pada $3 (baris $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> pada <b>$3</b> (baris <b>$4</b>)',
	'errorhandler-trace' => 'lacak:',
	'errorhandler-trace-line' => '$1 (baris $2): $3',
	'errorhandler-trace-line-internal' => '[fungsi internal]: $1',
);

/** Italian (italiano)
 * @author Pietrodn
 */
$messages['it'] = array(
	'errorhandler-desc' => 'Gestore di errori per MediaWiki',
	'errorhandler-errors' => 'Errori:',
	'errorhandler-error-fatal' => 'Errore fatale',
	'errorhandler-error-warning' => 'Avvertenza',
	'errorhandler-error-parse' => 'Errore del parser',
	'errorhandler-error-notice' => 'Avviso',
	'errorhandler-error-deprecated' => 'Deprecato',
	'errorhandler-error-core-error' => 'Errore del nucleo',
	'errorhandler-error-core-warning' => 'Avvertimento del nucleo',
	'errorhandler-error-compile-error' => 'Errore di compilazione',
	'errorhandler-error-compile-warning' => 'Avvertimento di compilazione',
	'errorhandler-error-user-error' => 'Errore utente',
	'errorhandler-error-user-warning' => 'Avvertimento utente',
	'errorhandler-error-user-notice' => 'Avviso utente',
	'errorhandler-error-user-deprecated' => "Deprecato dall'utente",
	'errorhandler-error-strict' => 'Standard severi',
	'errorhandler-error-recoverable' => 'Errore fatale raccoglibile',
	'errorhandler-msg-text' => '$1: $2 in $3 (linea $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (linea <b>$4</b>)',
	'errorhandler-trace' => 'traccia:',
	'errorhandler-trace-line' => '$1 (linea $2): $3',
	'errorhandler-trace-line-internal' => '[funzione interna]: $1',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author Shirayuki
 */
$messages['ja'] = array(
	'errorhandler-desc' => 'MediaWiki 用のエラーハンドラー',
	'errorhandler-errors' => 'エラー:',
	'errorhandler-error-fatal' => '致命的エラー',
	'errorhandler-error-warning' => '警告',
	'errorhandler-error-parse' => 'パーサーエラー',
	'errorhandler-error-notice' => '注意',
	'errorhandler-error-deprecated' => '非推奨',
	'errorhandler-error-core-error' => 'コアエラー',
	'errorhandler-error-core-warning' => 'コア警告',
	'errorhandler-error-compile-error' => 'コンパイルエラー',
	'errorhandler-error-compile-warning' => 'コンパイル警告',
	'errorhandler-error-user-error' => 'ユーザーエラー',
	'errorhandler-error-user-warning' => 'ユーザー警告',
	'errorhandler-error-user-notice' => 'ユーザー注意',
	'errorhandler-error-user-deprecated' => 'ユーザー非推奨',
	'errorhandler-error-strict' => '厳格基準',
	'errorhandler-error-recoverable' => '捕捉可能な致命的エラー',
	'errorhandler-msg-text' => '$1 : $2 (ファイル $3、行 $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> (ファイル <b>$3</b>、行 <b>$4</b>)',
	'errorhandler-trace' => 'トレース:',
	'errorhandler-trace-line' => '$1 (行 $2): $3',
	'errorhandler-trace-line-internal' => '[内部関数]: $1',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'errorhandler-desc' => 'მედიავიკის დამამუშავებლის შეცდომა',
	'errorhandler-errors' => 'შეცდომები:',
	'errorhandler-error-fatal' => 'ფატალური შეცდომა',
	'errorhandler-error-warning' => 'გაფრთხილება',
	'errorhandler-error-parse' => 'პარსერის შეცდომა',
	'errorhandler-error-notice' => 'შეტყობინება',
	'errorhandler-error-deprecated' => 'აკრძალულია',
	'errorhandler-error-core-error' => 'ბირთვის შეცდომა',
	'errorhandler-error-core-warning' => 'ბირთვის გაფრთხილება',
	'errorhandler-error-compile-error' => 'კომპილაციის შეცდომა',
	'errorhandler-error-compile-warning' => 'კომპილაციის შეტყობინება',
	'errorhandler-error-user-error' => 'მომხმარებლის შეცდომა',
	'errorhandler-error-user-warning' => 'მომხმარებლის გაფრთხილება',
	'errorhandler-error-user-notice' => 'მომხმარებლის შეტყობინება',
	'errorhandler-error-user-deprecated' => 'მომხმარებლის აკრძალვა',
	'errorhandler-error-strict' => 'ზუსტი სტანდარტები',
	'errorhandler-error-recoverable' => 'Catchable-ის ფატალური შეცდომა',
	'errorhandler-msg-text' => '$1 : $2 $3-ში (ხაზი $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> <b>$3</b>-ში (ხაზი <b>$4</b>)',
	'errorhandler-trace' => 'კვალი:',
	'errorhandler-trace-line' => '$1 (ხაზი $2): $3',
	'errorhandler-trace-line-internal' => '[შიდა ფუნქცია]: $1',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 */
$messages['km'] = array(
	'errorhandler-errors' => 'កំហុស៖',
	'errorhandler-error-warning' => 'បម្រាម',
	'errorhandler-error-notice' => 'សម្គាល់',
	'errorhandler-trace-line' => '$1 (បន្ទាត់ទី$2): $3',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'errorhandler-error-warning' => 'ಎಚ್ಚರಿಕೆ',
);

/** Korean (한국어)
 * @author Hym411
 * @author Yjs5497
 */
$messages['ko'] = array(
	'errorhandler-desc' => '미디어위키 오류 처리기',
	'errorhandler-errors' => '오류:',
	'errorhandler-error-fatal' => '치명적인 오류',
	'errorhandler-error-warning' => '경고',
	'errorhandler-error-parse' => '파서 오류',
	'errorhandler-error-notice' => '알림',
	'errorhandler-error-deprecated' => '사용되지 않음',
	'errorhandler-error-core-error' => '코드 오류',
	'errorhandler-error-core-warning' => '코어 경고',
	'errorhandler-error-compile-error' => '컴파일 오류',
	'errorhandler-error-compile-warning' => '컴파일 경고',
	'errorhandler-error-user-error' => '사용자 오류',
	'errorhandler-error-user-warning' => '사용자 경고',
	'errorhandler-error-user-notice' => '사용자 알림',
	'errorhandler-error-strict' => '엄격한 기준',
	'errorhandler-trace' => '추적:',
	'errorhandler-trace-line' => '$1($2 열): $3',
	'errorhandler-trace-line-internal' => '[내부 기능]: $1',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'errorhandler-desc' => 'Met Fähler em MediaWiki ömjonn.',
	'errorhandler-errors' => 'De Fähler:',
	'errorhandler-error-fatal' => 'Ene fatale Fähler',
	'errorhandler-error-warning' => 'En Warnung',
	'errorhandler-error-parse' => 'Ene Fähler em Projrammtäx',
	'errorhandler-error-notice' => 'Bemerkung',
	'errorhandler-error-deprecated' => 'Meßjevällesch',
	'errorhandler-error-core-error' => 'Fähler em Jrundprojramm',
	'errorhandler-error-core-warning' => 'Warnung em Jrundprojramm',
	'errorhandler-error-compile-error' => 'Fähler em Projamm-Övvesäzer (<i lang="en">Compiler</i>)',
	'errorhandler-error-compile-warning' => 'Warnung em Projamm-Övvesäzer (<i lang="en">Compiler</i>)',
	'errorhandler-error-user-error' => 'Fum Projammaacher jemäldte Fähler',
	'errorhandler-error-user-warning' => 'Warnung fum Projammaacher',
	'errorhandler-error-user-notice' => 'Herwieß fum Projammaacher',
	'errorhandler-error-user-deprecated' => 'Fum Projammaacher nimmieh jewollt',
	'errorhandler-error-strict' => 'Verstüß jäje de janz akoraate Shtandat',
	'errorhandler-error-recoverable' => 'Ene schlemme Fähler, dä opjevange wäde kann',
	'errorhandler-msg-text' => '$1 : $2 en $3, op de Reih $4.',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> en <b>$3</b>, op de Reih <b>$4</b>.',
	'errorhandler-trace' => 'Zeröckverfolsch:',
	'errorhandler-trace-line' => '$1 op de Reih $2: $3',
	'errorhandler-trace-line-internal' => '[enner Funxjohn]: $1',
);

/** Latin (Latina)
 * @author Omnipaedista
 */
$messages['la'] = array(
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (linea <b>$4</b>)',
	'errorhandler-trace' => 'vestigium:',
	'errorhandler-trace-line' => '$1 (linea $2): $3',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'errorhandler-desc' => 'Feelerbehandlung fir MediaWiki',
	'errorhandler-errors' => 'Feeler:',
	'errorhandler-error-fatal' => 'Fatale Feeler',
	'errorhandler-error-warning' => 'Warnung',
	'errorhandler-error-parse' => 'Parser-Feeler',
	'errorhandler-error-notice' => 'Notiz',
	'errorhandler-error-deprecated' => 'Net méi aktuell',
	'errorhandler-error-core-error' => 'Déifgréifende Feeler',
	'errorhandler-error-core-warning' => 'Déifgréifend Warnung',
	'errorhandler-error-compile-error' => 'Feeler bäim compiléieren',
	'errorhandler-error-compile-warning' => 'Warnung bäim compiléieren',
	'errorhandler-error-user-error' => 'Feeler (vum Benotzer)',
	'errorhandler-error-user-warning' => 'Benotzerwarnung',
	'errorhandler-error-user-notice' => 'Benotzernotiz',
	'errorhandler-error-user-deprecated' => 'Benotzer refuséiert',
	'errorhandler-error-strict' => 'Strikte Standard',
	'errorhandler-error-recoverable' => 'Erfaassbare fatale Feeler',
	'errorhandler-msg-text' => '$1 : $2 a(n) $3 (Linn $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> a(n) <b>$3</b> (Linn <b>$4</b>)',
	'errorhandler-trace' => 'Spuer:',
	'errorhandler-trace-line' => '$1 (Linn $2): $3',
	'errorhandler-trace-line-internal' => '[intern Funktioun]: $1',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'errorhandler-errors' => 'Klaida:',
	'errorhandler-error-warning' => 'Įspėjimas',
	'errorhandler-error-notice' => 'Pranešimas',
	'errorhandler-error-core-error' => 'Branduolio klaida',
	'errorhandler-error-core-warning' => 'Branduolio perspėjimas',
	'errorhandler-error-user-error' => 'Vartotojo klaida',
	'errorhandler-error-user-warning' => 'Vartotojo perspėjimas',
	'errorhandler-error-user-notice' => 'Vartotojo pastaba',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'errorhandler-desc' => 'Обработувач на грешки за MediaWiki',
	'errorhandler-errors' => 'Грешки:',
	'errorhandler-error-fatal' => 'Фатална грешка',
	'errorhandler-error-warning' => 'Предупредување',
	'errorhandler-error-parse' => 'Грешка во парсерот',
	'errorhandler-error-notice' => 'Напомена',
	'errorhandler-error-deprecated' => 'Забрането',
	'errorhandler-error-core-error' => 'Јадрена грешка',
	'errorhandler-error-core-warning' => 'Јадрено предупредување',
	'errorhandler-error-compile-error' => 'Грешка во компилацијата',
	'errorhandler-error-compile-warning' => 'Предупредување од компилацијата',
	'errorhandler-error-user-error' => 'Корисничка грешка',
	'errorhandler-error-user-warning' => 'Корисничко предупредување',
	'errorhandler-error-user-notice' => 'Известување на корисник',
	'errorhandler-error-user-deprecated' => 'Корисникот е забранет',
	'errorhandler-error-strict' => 'Строги стандарди',
	'errorhandler-error-recoverable' => 'Фатална грешка во Catchable',
	'errorhandler-msg-text' => '$1 : $2 во $3 (ред $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> во <b>$3</b> (ред <b>$4</b>)',
	'errorhandler-trace' => 'трага:',
	'errorhandler-trace-line' => '$1 (ред $2): $3',
	'errorhandler-trace-line-internal' => '[внатрешна функција]: $1',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'errorhandler-desc' => 'Pengelola ralat untuk MediaWiki',
	'errorhandler-errors' => 'Ralat:',
	'errorhandler-error-fatal' => 'Ralat mati',
	'errorhandler-error-warning' => 'Amaran',
	'errorhandler-error-parse' => 'Ralat penghurai',
	'errorhandler-error-notice' => 'Pemberitahuan',
	'errorhandler-error-deprecated' => 'Lapuk',
	'errorhandler-error-core-error' => 'Ralat teras',
	'errorhandler-error-core-warning' => 'Amaran teras',
	'errorhandler-error-compile-error' => 'Ralat kompil',
	'errorhandler-error-compile-warning' => 'Amaran kompil',
	'errorhandler-error-user-error' => 'Ralat pengguna',
	'errorhandler-error-user-warning' => 'Amaran pengguna',
	'errorhandler-error-user-notice' => 'Pemberitahuaan pengguna',
	'errorhandler-error-user-deprecated' => 'Pengguna dibuang',
	'errorhandler-error-strict' => 'Piawaian ketat',
	'errorhandler-error-recoverable' => 'Ralat mati yang boleh ditangkap',
	'errorhandler-msg-text' => '$1 : $2 dalam $3 (baris $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> dalam <b>$3</b> (baris <b>$4</b>)',
	'errorhandler-trace' => 'jejak:',
	'errorhandler-trace-line' => '$1 (baris $2): $3',
	'errorhandler-trace-line-internal' => '[fungsi dalaman]: $1',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'errorhandler-errors' => 'Żbalji:',
	'errorhandler-error-fatal' => 'Żball fatali',
	'errorhandler-error-warning' => 'Twissija',
	'errorhandler-error-notice' => 'Avviż',
	'errorhandler-trace' => 'traċċa:',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'errorhandler-errors' => 'Манявоматне:',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> īpan <b>$3</b> (pāntli <b>$4</b>)',
	'errorhandler-trace-line' => '$1 (pāntli $2): $3',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'errorhandler-desc' => 'Feilhåndtering for MediaWiki',
	'errorhandler-errors' => 'Feil:',
	'errorhandler-error-fatal' => 'Alvorlig feil',
	'errorhandler-error-warning' => 'Advarsel',
	'errorhandler-error-parse' => 'Parserfeil',
	'errorhandler-error-notice' => 'Melding',
	'errorhandler-error-deprecated' => 'Nedgradert',
	'errorhandler-error-core-error' => 'Feil i kjernen',
	'errorhandler-error-core-warning' => 'Kjerne-advarsel',
	'errorhandler-error-compile-error' => 'Kompileringsfeil',
	'errorhandler-error-compile-warning' => 'Kompileringsadvarsel',
	'errorhandler-error-user-error' => 'Brukerfeil',
	'errorhandler-error-user-warning' => 'Brukeradvarsel',
	'errorhandler-error-user-notice' => 'Brukermelding',
	'errorhandler-error-user-deprecated' => 'Brukerdegradert',
	'errorhandler-error-strict' => 'Strenge standarder',
	'errorhandler-error-recoverable' => 'Håndterbar alvorlig feil',
	'errorhandler-msg-text' => '$1: $2 i $3 (rad $4)',
	'errorhandler-msg-html' => '<b>$1</b>: <i>$2</i> i <b>$3</b> (rad <b>$4</b>)',
	'errorhandler-trace' => 'spor:',
	'errorhandler-trace-line' => '$1 (rad $2): $3',
	'errorhandler-trace-line-internal' => '[intern funksjon]: $1',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'errorhandler-desc' => 'Foutafhandeling voor MediaWiki',
	'errorhandler-errors' => 'Fouten:',
	'errorhandler-error-fatal' => 'Fatale fout',
	'errorhandler-error-warning' => 'Waarschuwing',
	'errorhandler-error-parse' => 'Parserfout',
	'errorhandler-error-notice' => 'Mededeling',
	'errorhandler-error-deprecated' => "Gemarkeerd als 'deprecated'",
	'errorhandler-error-core-error' => 'Kernfout',
	'errorhandler-error-core-warning' => 'Kernwaarschuwing',
	'errorhandler-error-compile-error' => 'Compileerfout',
	'errorhandler-error-compile-warning' => 'Compileerwaarschuwing',
	'errorhandler-error-user-error' => 'Gebruikersfout',
	'errorhandler-error-user-warning' => 'Gebruikerswaarschuwing',
	'errorhandler-error-user-notice' => 'Gebruikersmededeling',
	'errorhandler-error-user-deprecated' => "Gemarkeerd als 'user deprecated'",
	'errorhandler-error-strict' => 'Strikte standaarden',
	'errorhandler-error-recoverable' => 'Op te vangen fatale fout',
	'errorhandler-msg-text' => '$1 : $2 in $3 (regel $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> in <b>$3</b> (regel <b>$4</b>)',
	'errorhandler-trace' => 'trace:',
	'errorhandler-trace-line' => '$1 (regel $2): $3',
	'errorhandler-trace-line-internal' => '[interne functie]: $1',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'errorhandler-desc' => 'Feilhandtering for MediaWiki',
	'errorhandler-errors' => 'Feil:',
	'errorhandler-error-fatal' => 'Alvorleg feil',
	'errorhandler-error-warning' => 'Åtvaring',
	'errorhandler-error-parse' => 'Parserfeil',
	'errorhandler-error-notice' => 'Melding',
	'errorhandler-error-deprecated' => 'Nedgradert',
	'errorhandler-error-core-error' => 'Kjernefeil',
	'errorhandler-error-core-warning' => 'Kjerneåtvaring',
	'errorhandler-error-compile-error' => 'Kompileringsfeil',
	'errorhandler-error-compile-warning' => 'Kompileringsåtvaring',
	'errorhandler-error-user-error' => 'Brukarfeil',
	'errorhandler-error-user-warning' => 'Brukaråtvaring',
	'errorhandler-error-user-notice' => 'Brukarmelding',
	'errorhandler-error-user-deprecated' => 'Brukardegradert',
	'errorhandler-error-strict' => 'Strenge standardar',
	'errorhandler-error-recoverable' => 'Handterbar alvorleg feil',
	'errorhandler-msg-text' => '$1: $2 i $3 (rad $4)',
	'errorhandler-msg-html' => '<b>$1</b>: <i>$2</i> i <b>$3</b> (rad <b>$4</b>)',
	'errorhandler-trace' => 'spor:',
	'errorhandler-trace-line' => '$1 (rad $2): $3',
	'errorhandler-trace-line-internal' => '[intern funksjon]: $1',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'errorhandler-desc' => "Gestionari d'errors per MediaWiki",
	'errorhandler-errors' => 'Errors :',
	'errorhandler-error-fatal' => 'Error fatala',
	'errorhandler-error-warning' => 'Avertiment',
	'errorhandler-error-parse' => 'Error de parser',
	'errorhandler-error-notice' => 'Notícia',
	'errorhandler-error-deprecated' => 'Obsolet',
	'errorhandler-error-core-error' => 'Error del còr',
	'errorhandler-error-core-warning' => 'Avertiment del còr',
	'errorhandler-error-compile-error' => 'Error de compilacion',
	'errorhandler-error-compile-warning' => 'Avertiment de compilacion',
	'errorhandler-error-user-error' => 'Error (utilizaire)',
	'errorhandler-error-user-warning' => 'Avertiment (utilizaire)',
	'errorhandler-error-user-notice' => 'Notícia (utilizaire)',
	'errorhandler-error-user-deprecated' => 'Obsolet (utilizaire)',
	'errorhandler-error-strict' => 'Estandards estricts',
	'errorhandler-error-recoverable' => 'Error fatala agantabla',
	'errorhandler-msg-text' => '$1 : $2 dins $3 (linha $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> dins <b>$3</b> (linha <b>$4</b>)',
	'errorhandler-trace' => 'traça :',
	'errorhandler-trace-line' => '$1 (linha $2): $3',
	'errorhandler-trace-line-internal' => '[foncion intèrna] : $1',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'errorhandler-errors' => 'ଅସୁବିଧାଗୁଡିକ:',
	'errorhandler-error-warning' => 'ସାବଧାନ',
	'errorhandler-error-notice' => 'ଘୋଷଣା',
	'errorhandler-error-user-warning' => 'ବ୍ୟବହାରକାରୀ ଚେତାବନୀ',
	'errorhandler-error-user-notice' => 'ବ୍ୟବହାରକାରୀ ଘୋଷଣା',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'errorhandler-error-warning' => 'Warning',
);

/** Polish (polski)
 * @author Maikking
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'errorhandler-desc' => 'Wyłapuje błędy w MediaWiki',
	'errorhandler-errors' => 'Błędy:',
	'errorhandler-error-fatal' => 'Błąd krytyczny',
	'errorhandler-error-warning' => 'Ostrzeżenie',
	'errorhandler-error-parse' => 'Błąd parsera',
	'errorhandler-error-notice' => 'Wiadomość',
	'errorhandler-error-deprecated' => 'Niezaakceptowane',
	'errorhandler-error-core-error' => 'Błąd rdzenia',
	'errorhandler-error-core-warning' => 'Ostrzeżenie dotyczące rdzenia',
	'errorhandler-error-compile-error' => 'Błąd kompilacji',
	'errorhandler-error-compile-warning' => 'Ostrzeżenie w trakcie kompilacji',
	'errorhandler-error-user-error' => 'Błąd użytkownika',
	'errorhandler-error-user-warning' => 'Ostrzeżenie użytkownika',
	'errorhandler-error-user-notice' => 'Wiadomość użytkownika',
	'errorhandler-error-user-deprecated' => 'Niezaakceptowany użytkownik',
	'errorhandler-error-strict' => 'Ścisłe normy',
	'errorhandler-error-recoverable' => 'Wychwytywalny błąd krytyczny',
	'errorhandler-msg-text' => '$1 : $2 w $3 (linia $4)',
	'errorhandler-msg-html' => '<b>$1</b> – <i>$2</i> w <b>$3</b> (linia <b>$4</b>)',
	'errorhandler-trace' => 'śledzenie:',
	'errorhandler-trace-line' => '$1 (linia $2): $3',
	'errorhandler-trace-line-internal' => '[funkcja wewnętrzna] – $1',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'errorhandler-desc' => "Gestor d'eror për MediaWiki",
	'errorhandler-errors' => 'Eror',
	'errorhandler-error-fatal' => 'Eror fataj',
	'errorhandler-error-warning' => 'Avis',
	'errorhandler-error-parse' => 'Eror dël parser',
	'errorhandler-error-notice' => 'Neuva',
	'errorhandler-error-deprecated' => 'Deprecà',
	'errorhandler-error-core-error' => 'Eror ëd la nos',
	'errorhandler-error-core-warning' => 'Avertiment ëd la nos',
	'errorhandler-error-compile-error' => 'Eror ëd compilassion',
	'errorhandler-error-compile-warning' => 'Avis ëd compilassion',
	'errorhandler-error-user-error' => "Eror ëd l'utent",
	'errorhandler-error-user-warning' => 'Avis utent',
	'errorhandler-error-user-notice' => 'Neuva utent',
	'errorhandler-error-user-deprecated' => "Deprecà da l'utent",
	'errorhandler-error-strict' => 'Standard strèit',
	'errorhandler-error-recoverable' => 'Eror fatal ciapàbil',
	'errorhandler-msg-text' => '$1: $2 an $3 (linia $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> an <b>$3</b> (linia <b>$4</b>)',
	'errorhandler-trace' => 'trassa:',
	'errorhandler-trace-line' => '$1 (linia $2): $3',
	'errorhandler-trace-line-internal' => '[funsion anterna]: $1',
);

/** Pontic (Ποντιακά)
 * @author Omnipaedista
 */
$messages['pnt'] = array(
	'errorhandler-trace-line' => '$1 (γραμμήν $2): $3',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'errorhandler-errors' => 'تېروتنې:',
	'errorhandler-error-warning' => 'گواښنه',
	'errorhandler-error-user-warning' => 'د کارن گواښنه',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Malafaya
 */
$messages['pt'] = array(
	'errorhandler-desc' => 'Tratador de erros do MediaWiki',
	'errorhandler-errors' => 'Erros:',
	'errorhandler-error-fatal' => 'Erro fatal',
	'errorhandler-error-warning' => 'Aviso',
	'errorhandler-error-parse' => 'Erro do analisador sintáctico',
	'errorhandler-error-notice' => 'Nota',
	'errorhandler-error-deprecated' => 'Obsoleto',
	'errorhandler-error-core-error' => 'Erro do núcleo',
	'errorhandler-error-core-warning' => 'Aviso do núcleo',
	'errorhandler-error-compile-error' => 'Erro de compilação',
	'errorhandler-error-compile-warning' => 'Aviso de compilação',
	'errorhandler-error-user-error' => 'Erro de utilizador',
	'errorhandler-error-user-warning' => 'Aviso de utilizador',
	'errorhandler-error-user-notice' => 'Nota de utilizador',
	'errorhandler-error-user-deprecated' => 'Obsoleto por utilizador',
	'errorhandler-error-strict' => 'Padrões estritos',
	'errorhandler-error-recoverable' => 'Erro fatal tratável',
	'errorhandler-msg-text' => '$1 : $2 em $3 (linha $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> em <b>$3</b> (linha <b>$4</b>)',
	'errorhandler-trace' => 'rastreio:',
	'errorhandler-trace-line' => '$1 (linha $2): $3',
	'errorhandler-trace-line-internal' => '[função interna]: $1',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Luckas
 */
$messages['pt-br'] = array(
	'errorhandler-desc' => 'Tratador de erros do MediaWiki',
	'errorhandler-errors' => 'Erros:',
	'errorhandler-error-fatal' => 'Erro fatal',
	'errorhandler-error-warning' => 'Aviso',
	'errorhandler-error-parse' => 'Erro do analisador (parser)',
	'errorhandler-error-notice' => 'Nota',
	'errorhandler-error-deprecated' => 'Obsoleto',
	'errorhandler-error-core-error' => 'Erro do núcleo',
	'errorhandler-error-core-warning' => 'Aviso do núcleo',
	'errorhandler-error-compile-error' => 'Erro de compilação',
	'errorhandler-error-compile-warning' => 'Aviso de compilação',
	'errorhandler-error-user-error' => 'Erro de usuário',
	'errorhandler-error-user-warning' => 'Aviso de usuário',
	'errorhandler-error-user-notice' => 'Nota de usuário',
	'errorhandler-error-user-deprecated' => 'Obsoleto por utilizador',
	'errorhandler-error-strict' => 'Padrões estritos',
	'errorhandler-error-recoverable' => 'Erro fatal tratável',
	'errorhandler-msg-text' => '$1 : $2 em $3 (linha $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> em <b>$3</b> (linha <b>$4</b>)',
	'errorhandler-trace' => 'rastreio:',
	'errorhandler-trace-line' => '$1 (linha $2): $3',
	'errorhandler-trace-line-internal' => '[função interna]: $1',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'errorhandler-errors' => 'Erori:',
	'errorhandler-error-fatal' => 'Eroare fatală',
	'errorhandler-error-warning' => 'Avertizare',
	'errorhandler-error-parse' => 'Eroare de parser',
	'errorhandler-error-notice' => 'Notificare',
	'errorhandler-error-deprecated' => 'Învechit',
	'errorhandler-error-core-error' => 'Eroare nucleu',
	'errorhandler-error-core-warning' => 'Avertisment nucleu',
	'errorhandler-error-compile-error' => 'Eroare de compilare',
	'errorhandler-error-compile-warning' => 'Avertizare de compilare',
	'errorhandler-error-user-error' => 'Eroare de utilizator',
	'errorhandler-error-user-warning' => 'Avertizare de utilizator',
	'errorhandler-error-user-notice' => 'Notificare utilizator',
	'errorhandler-error-strict' => 'Standarde stricte',
	'errorhandler-msg-text' => '$1 : $2 în $3 (linia $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> în <b>$3</b> (linia <b>$4</b>)',
	'errorhandler-trace-line' => '$1 (linia $2): $3',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'errorhandler-desc' => "Gestore de l'errore pe MediaUicchi",
	'errorhandler-errors' => 'Errore:',
	'errorhandler-error-fatal' => 'Errore putende',
	'errorhandler-error-warning' => 'Avvertimende',
	'errorhandler-error-parse' => "Analizzatore de l'errore",
	'errorhandler-error-notice' => 'Notizie',
	'errorhandler-error-deprecated' => 'Deprecate',
	'errorhandler-error-core-error' => "Core de l'errore",
	'errorhandler-error-core-warning' => "Core de l'avvertimende",
	'errorhandler-error-compile-error' => 'Errore de combilazione',
	'errorhandler-error-compile-warning' => 'Avvertimende de combilazione',
	'errorhandler-error-user-error' => "Errore de l'utende",
	'errorhandler-error-user-warning' => "Avvertimende de l'utende",
	'errorhandler-error-user-notice' => "Notizie de l'utende",
	'errorhandler-error-user-deprecated' => 'Utende deprecate',
	'errorhandler-error-strict' => 'Restriziune standàrd',
	'errorhandler-error-recoverable' => 'Errore fatale catturabbile',
	'errorhandler-msg-text' => "$1 : $2 jndr'à $3 (linèe $4)",
	'errorhandler-msg-html' => "<b>$1</b> : <i>$2</i> jndr'à <b>$3</b> (linèe <b>$4</b>)",
	'errorhandler-trace' => 'tracce:',
	'errorhandler-trace-line' => '$1 (linèe $2): $3',
	'errorhandler-trace-line-internal' => '[funzione inderne]: $1',
);

/** Russian (русский)
 * @author Ferrer
 * @author Innv
 * @author Rubin
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'errorhandler-desc' => 'Ошибка обработчика MediaWiki',
	'errorhandler-errors' => 'Ошибки:',
	'errorhandler-error-fatal' => 'Серьёзная ошибка',
	'errorhandler-error-warning' => 'Внимание',
	'errorhandler-error-parse' => 'Ошибка парсера',
	'errorhandler-error-notice' => 'Уведомление',
	'errorhandler-error-deprecated' => 'Запрещено',
	'errorhandler-error-core-error' => 'Ошибка ядра',
	'errorhandler-error-core-warning' => 'Предупреждение ядра',
	'errorhandler-error-compile-error' => 'Ошибка компиляции',
	'errorhandler-error-compile-warning' => 'Предупреждение компиляции',
	'errorhandler-error-user-error' => 'Ошибка участника',
	'errorhandler-error-user-warning' => 'Предупреждение участника',
	'errorhandler-error-user-notice' => 'Уведомление участника',
	'errorhandler-error-user-deprecated' => 'Запрет участника',
	'errorhandler-error-strict' => 'Точные стандарты',
	'errorhandler-error-recoverable' => 'Фатальная ошибка Catchable',
	'errorhandler-msg-text' => '$1 : $2 в $3 (линия $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> в <b>$3</b> (линия <b>$4</b>)',
	'errorhandler-trace' => 'след:',
	'errorhandler-trace-line' => '$1 (линия $2): $3',
	'errorhandler-trace-line-internal' => '[внутренняя функция]: $1',
);

/** Sicilian (sicilianu)
 * @author Aushulz
 */
$messages['scn'] = array(
	'errorhandler-error-warning' => 'Accura',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'errorhandler-desc' => 'මාධ්‍යවිකි සඳහා දෝෂ හසුරවනය',
	'errorhandler-errors' => 'දෝෂ:',
	'errorhandler-error-fatal' => 'මාරක දෝෂය',
	'errorhandler-error-warning' => 'අවවාදය',
	'errorhandler-error-parse' => 'ව්‍යාකරණ විග්‍රහ දෝෂය',
	'errorhandler-error-notice' => 'දැනුම්දීම',
	'errorhandler-error-deprecated' => 'විරුද්ධත්වය ප්‍රකාශ කර ඇත',
	'errorhandler-error-core-error' => 'මධ්‍ය දෝෂය',
	'errorhandler-error-core-warning' => 'මධ්‍ය අවවාදය',
	'errorhandler-error-compile-error' => 'සම්පාදන දෝෂය',
	'errorhandler-error-compile-warning' => 'සම්පාදන අවවාදය',
	'errorhandler-error-user-error' => 'පරිශීලක දෝෂය',
	'errorhandler-error-user-warning' => 'පරිශීලක අවවාදය',
	'errorhandler-error-user-notice' => 'පරිශීලක නිවේදනය',
	'errorhandler-error-user-deprecated' => 'පරිශීලක විරුද්ධත්වය ප්‍රකාශ කර ඇත',
	'errorhandler-error-strict' => 'යථාර්ථ ප්‍රමිති',
	'errorhandler-error-recoverable' => 'කෑෂිතමය මාරක දෝෂය',
	'errorhandler-msg-text' => '$1 : $2 හී $3 ($4 පේළිය)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> හී <b>$3</b> (පේළිය <b>$4</b>)',
	'errorhandler-trace' => 'අනුරේඛනය:',
	'errorhandler-trace-line' => '$1 ($2 පේළිය): $3',
	'errorhandler-trace-line-internal' => '[අභ්‍යන්තර කෘත්‍ය]: $1',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'errorhandler-desc' => 'Obsluha chýb MediaWiki',
	'errorhandler-errors' => 'Chyby:',
	'errorhandler-error-fatal' => 'Kritická chyba',
	'errorhandler-error-warning' => 'Upozornenie',
	'errorhandler-error-parse' => 'Chyba syntaktickej analýzy',
	'errorhandler-error-notice' => 'Oznam',
	'errorhandler-error-deprecated' => 'Zavrhované',
	'errorhandler-error-core-error' => 'Chyba jadra',
	'errorhandler-error-core-warning' => 'Upozornenie jadra',
	'errorhandler-error-compile-error' => 'Chyba kompilácie',
	'errorhandler-error-compile-warning' => 'Upozornenie kompilácie',
	'errorhandler-error-user-error' => 'Chyba používateľa',
	'errorhandler-error-user-warning' => 'Upozornenie používateľa',
	'errorhandler-error-user-notice' => 'Oznam používateľa',
	'errorhandler-error-user-deprecated' => 'Používateľ je zavrhovaný',
	'errorhandler-error-strict' => 'Prísne štandardy',
	'errorhandler-error-recoverable' => 'Osudová chyba, ktorú možno zachytiť',
	'errorhandler-msg-text' => '$1 : $2 v $3 (riadok $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> v <b>$3</b> (riadok <b>$4</b>)',
	'errorhandler-trace' => 'trasovanie:',
	'errorhandler-trace-line' => '$1 (riadok $2): $3',
	'errorhandler-trace-line-internal' => '[vnútorná funkcia]: $1',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'errorhandler-desc' => 'Прихватач грешака за МедијаВики',
	'errorhandler-errors' => 'Грешке:',
	'errorhandler-error-fatal' => 'Фатална грешка',
	'errorhandler-error-warning' => 'Упозорење',
	'errorhandler-error-parse' => 'Грешка парсера',
	'errorhandler-error-notice' => 'Напомена',
	'errorhandler-error-deprecated' => 'Застарело',
	'errorhandler-error-core-error' => 'Затвори грешку',
	'errorhandler-error-compile-error' => 'Грешка приликом компајлирања',
	'errorhandler-error-compile-warning' => 'Упозорење приликом компајлирања',
	'errorhandler-error-user-error' => 'Корисничка грешка',
	'errorhandler-error-user-warning' => 'Корисничко упозорење',
	'errorhandler-error-user-notice' => 'Корисничка напомена',
	'errorhandler-error-user-deprecated' => 'Застарели налог',
	'errorhandler-error-strict' => 'Строги стандарди',
	'errorhandler-msg-text' => '$1 : $2 у $3 (линија $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> у <b>$3</b> (линија <b>$4</b>)',
	'errorhandler-trace' => 'траг:',
	'errorhandler-trace-line' => '$1 (линија $2): $3',
	'errorhandler-trace-line-internal' => '[интерна функција]: $1',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 */
$messages['sr-el'] = array(
	'errorhandler-desc' => 'Prihvatač grešaka za MedijaViki',
	'errorhandler-errors' => 'Greške:',
	'errorhandler-error-fatal' => 'Fatalna greška',
	'errorhandler-error-warning' => 'Upozorenje',
	'errorhandler-error-parse' => 'Greška parsera',
	'errorhandler-error-notice' => 'Napomena',
	'errorhandler-error-deprecated' => 'Zastarelo',
	'errorhandler-error-core-error' => 'Zatvori grešku',
	'errorhandler-error-compile-error' => 'Greška prilikom kompajliranja',
	'errorhandler-error-compile-warning' => 'Upozorenje prilikom kompajliranja',
	'errorhandler-error-user-error' => 'Korisnička greška',
	'errorhandler-error-user-warning' => 'Korisničko upozorenje',
	'errorhandler-error-user-notice' => 'Korisnička napomena',
	'errorhandler-error-user-deprecated' => 'Zastareli nalog',
	'errorhandler-error-strict' => 'Strogi standardi',
	'errorhandler-msg-text' => '$1 : $2 u $3 (linija $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> u <b>$3</b> (linija <b>$4</b>)',
	'errorhandler-trace' => 'trag:',
	'errorhandler-trace-line' => '$1 (linija $2): $3',
	'errorhandler-trace-line-internal' => '[interna funkcija]: $1',
);

/** Swedish (svenska)
 * @author Boivie
 * @author Najami
 */
$messages['sv'] = array(
	'errorhandler-desc' => 'Felhanterare för MediaWiki',
	'errorhandler-errors' => 'Fel:',
	'errorhandler-error-fatal' => 'Allvarligt fel',
	'errorhandler-error-warning' => 'Varning',
	'errorhandler-error-parse' => 'Parser-fel',
	'errorhandler-error-notice' => 'Meddelande',
	'errorhandler-error-deprecated' => 'Nedgraderad',
	'errorhandler-error-core-error' => 'Fel i kärnan',
	'errorhandler-error-core-warning' => 'Kärn-varning',
	'errorhandler-error-compile-error' => 'Kompileringsfel',
	'errorhandler-error-compile-warning' => 'Kompileringsvarning',
	'errorhandler-error-user-error' => 'Användarfel',
	'errorhandler-error-user-warning' => 'Användarvarning',
	'errorhandler-error-user-notice' => 'Användarmeddelande',
	'errorhandler-error-user-deprecated' => 'Användare nedgraderad',
	'errorhandler-error-strict' => 'Strikta standarder',
	'errorhandler-error-recoverable' => 'Hanterbart allvarligt fel',
	'errorhandler-msg-text' => '$1 : $2 i $3 (rad $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> i <b>$3</b> (rad <b>$4</b>)',
	'errorhandler-trace' => 'spåra:',
	'errorhandler-trace-line' => '$1 (rad $2): $3',
	'errorhandler-trace-line-internal' => '[intern funktion]: $1',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 * @author TRYPPN
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'errorhandler-errors' => 'பிழைகள்:',
	'errorhandler-error-fatal' => 'மாபெரும் தவறு',
	'errorhandler-error-warning' => 'எச்சரிக்கை',
	'errorhandler-error-notice' => 'அறிவிப்பு',
	'errorhandler-error-user-error' => 'பயனர் பிழை',
	'errorhandler-error-user-warning' => 'பயனர் எச்சரிக்கை',
	'errorhandler-error-user-notice' => 'பயனர் அறிவிப்பு',
	'errorhandler-trace-line' => '$1 (வரி $2): $3',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Veeven
 */
$messages['te'] = array(
	'errorhandler-errors' => 'పొరపాట్లు:',
	'errorhandler-error-fatal' => 'ఫాటల్ లోపం',
	'errorhandler-error-warning' => 'హెచ్చరిక',
	'errorhandler-error-notice' => 'గమనిక',
	'errorhandler-error-core-error' => 'కోర్ లోపం',
	'errorhandler-error-core-warning' => 'కోర్ హెచ్చరిక',
	'errorhandler-error-compile-error' => 'కంపైలు లోపం',
	'errorhandler-error-compile-warning' => 'కంపైలు హెచ్చరిక',
	'errorhandler-error-user-error' => 'వాడుకరి పొరపాటు',
	'errorhandler-error-user-warning' => 'వాడుకరి హెచ్చరిక',
	'errorhandler-error-user-notice' => 'వాడుకరి గమనిక',
	'errorhandler-error-strict' => 'ఖచ్చితమైన ప్రమాణాలు',
	'errorhandler-msg-text' => '$1 : $2 $3 లో ($4వ పంక్తి)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> <b>$3</b>లో (<b>$4</b>వ పంక్తి)',
	'errorhandler-trace-line' => '$1 (లైను $2): $3',
	'errorhandler-trace-line-internal' => '[internal function]: $1',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'errorhandler-desc' => 'Kamalian ng tagahawak para sa MediaWiki',
	'errorhandler-errors' => 'Mga kamalian:',
	'errorhandler-error-fatal' => 'Malubhang kamalian',
	'errorhandler-error-warning' => 'Babala',
	'errorhandler-error-parse' => 'Kamalian ng banghay',
	'errorhandler-error-notice' => 'Pabatid',
	'errorhandler-error-deprecated' => 'Tinutulan',
	'errorhandler-error-core-error' => 'Kamalian ng kaibuturan',
	'errorhandler-error-core-warning' => 'Babala ng kaibuturan',
	'errorhandler-error-compile-error' => 'Kamalian sa pangangalap',
	'errorhandler-error-compile-warning' => 'Babala sa pangangalap',
	'errorhandler-error-user-error' => 'Kamalian ng tagagamit',
	'errorhandler-error-user-warning' => 'Babala sa tagagamit',
	'errorhandler-error-user-notice' => 'Pabatid sa tagagamit',
	'errorhandler-error-user-deprecated' => 'Pagtutol sa tagagamit',
	'errorhandler-error-strict' => 'Mahigpit na mga pamantayan',
	'errorhandler-error-recoverable' => 'Masusukol na malubhang kamalian',
	'errorhandler-msg-text' => '$1 : $2 nasa $3 (guhit na $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> nasa <b>$3</b> (guhit na <b>$4</b>)',
	'errorhandler-trace' => 'bakas:',
	'errorhandler-trace-line' => '$1 (guhit na $2): $3',
	'errorhandler-trace-line-internal' => '[panloob na tungkulin]: $1',
);

/** Turkish (Türkçe)
 * @author Homonihilis
 * @author Karduelis
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'errorhandler-errors' => 'Hatalar:',
	'errorhandler-error-fatal' => 'Önemli hata',
	'errorhandler-error-warning' => 'Uyarı',
	'errorhandler-error-parse' => 'Ayrıştırıcı hatası',
	'errorhandler-error-notice' => 'Bildirim',
	'errorhandler-error-core-error' => 'Temel hatası',
	'errorhandler-error-core-warning' => 'Temel uyarısı',
	'errorhandler-error-compile-error' => 'Hata derle',
	'errorhandler-error-compile-warning' => 'Uyarı derle',
	'errorhandler-error-user-error' => 'Kullanıcı hatası',
	'errorhandler-error-user-warning' => 'Kullanıcı uyarısı',
	'errorhandler-error-user-notice' => 'Kullanıcı bildirimi',
);

/** Ukrainian (українська)
 * @author NickK
 * @author Prima klasy4na
 * @author Тест
 */
$messages['uk'] = array(
	'errorhandler-desc' => 'Оброблювач помилок для MediaWiki',
	'errorhandler-errors' => 'Помилки:',
	'errorhandler-error-fatal' => 'Фатальна помилка',
	'errorhandler-error-warning' => 'Попередження',
	'errorhandler-error-parse' => 'Помилка парсеру',
	'errorhandler-error-notice' => 'Повідомлення',
	'errorhandler-error-deprecated' => 'Заборонені',
	'errorhandler-error-core-error' => 'Помилка ядра',
	'errorhandler-error-core-warning' => 'Попередження ядра',
	'errorhandler-error-compile-error' => 'Помилка компіляції',
	'errorhandler-error-compile-warning' => 'Попередження компіляції',
	'errorhandler-error-user-error' => 'Помилка користувача',
	'errorhandler-error-user-warning' => 'Попередження користувача',
	'errorhandler-error-user-notice' => 'Повідомлення користувача',
	'errorhandler-error-user-deprecated' => 'Користувач заборонений',
	'errorhandler-error-strict' => 'Жорсткі стандарти',
	'errorhandler-error-recoverable' => 'Виявлено фатальну помилку',
	'errorhandler-msg-text' => '$1 : $2 в $3 (рядок $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> у <b>$3</b> (рядок <b>$4</b>)',
	'errorhandler-trace' => 'відбиток:',
	'errorhandler-trace-line' => '$1 (рядок $2): $3',
	'errorhandler-trace-line-internal' => '[внутрішня функція]: $1',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'errorhandler-errors' => 'غلطیاں:',
	'errorhandler-error-fatal' => 'مہلک غلطی',
	'errorhandler-error-warning' => 'انتباہ',
	'errorhandler-error-parse' => 'تجزیہ کار غلطی',
	'errorhandler-error-notice' => 'نوٹس',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'errorhandler-errors' => 'Petused:',
	'errorhandler-error-fatal' => 'Luja petuz',
	'errorhandler-error-warning' => 'Varutuz',
	'errorhandler-error-parse' => 'Parseran petuz',
	'errorhandler-error-notice' => 'Homaičend',
	'errorhandler-error-user-error' => 'Kävutajan petuz',
	'errorhandler-error-user-warning' => 'Kävutajan varutuz',
	'errorhandler-error-user-notice' => 'Kävutajan homaičend',
	'errorhandler-error-strict' => 'Tarkad standartad',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'errorhandler-errors' => 'Lỗi:',
	'errorhandler-error-warning' => 'Cảnh báo',
	'errorhandler-error-user-error' => 'Lỗi tại người dùng',
	'errorhandler-error-user-warning' => 'Cảnh báo do người dùng',
	'errorhandler-msg-text' => '$1 : $2 trong $3 (dòng $4)',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> trong <b>$3</b> (dòng <b>$4</b>)',
	'errorhandler-trace-line' => '$1 (dòng $2): $3',
	'errorhandler-trace-line-internal' => '[hàm nội bộ]: $1',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'errorhandler-errors' => 'Pöls:',
	'errorhandler-error-warning' => 'Nuned',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'errorhandler-errors' => 'גרײַזן:',
	'errorhandler-error-warning' => 'ווארענונג',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Gaoxuewei
 * @author PhiLiP
 */
$messages['zh-hans'] = array(
	'errorhandler-desc' => 'MediaWiki的错误处理程序',
	'errorhandler-errors' => '错误：',
	'errorhandler-error-fatal' => '致命错误',
	'errorhandler-error-warning' => '警告',
	'errorhandler-error-parse' => '解析器错误',
	'errorhandler-error-notice' => '提示',
	'errorhandler-error-deprecated' => '不推荐使用',
	'errorhandler-error-core-error' => '核心错误',
	'errorhandler-error-core-warning' => '核心警告',
	'errorhandler-error-compile-error' => '编译错误',
	'errorhandler-error-compile-warning' => '编译警告',
	'errorhandler-error-user-error' => '用户错误',
	'errorhandler-error-user-warning' => '用户警告',
	'errorhandler-error-user-notice' => '用户提示',
	'errorhandler-error-user-deprecated' => '用户不推荐使用',
	'errorhandler-error-strict' => '严格的标准',
	'errorhandler-error-recoverable' => '可捕获的致命错误',
	'errorhandler-msg-text' => '$1 : $2 在 $3 中 （第$4行）',
	'errorhandler-msg-html' => '<b>$1</b> : <i>$2</i> 在 <b>$3</b> 中（第 <b>$4</b> 行）',
	'errorhandler-trace' => '跟踪：',
	'errorhandler-trace-line' => '$1 （第$2行）: $3',
	'errorhandler-trace-line-internal' => '[内部函数]: $1',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Liangent
 * @author Mark85296341
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'errorhandler-desc' => 'MediaWiki的錯誤處理程序',
	'errorhandler-errors' => '錯誤：',
	'errorhandler-error-fatal' => '致命錯誤',
	'errorhandler-error-warning' => '警告',
	'errorhandler-error-parse' => '解析器錯誤',
	'errorhandler-error-notice' => '提示',
	'errorhandler-error-deprecated' => '不推薦使用',
	'errorhandler-error-core-error' => '核心錯誤',
	'errorhandler-error-core-warning' => '核心警告',
	'errorhandler-error-compile-error' => '編譯錯誤',
	'errorhandler-error-compile-warning' => '編譯警告',
	'errorhandler-error-user-error' => '用戶錯誤',
	'errorhandler-error-user-warning' => '用戶警告',
	'errorhandler-error-user-notice' => '用戶提示',
	'errorhandler-error-user-deprecated' => '用戶不推薦使用',
	'errorhandler-error-strict' => '嚴格的標準',
	'errorhandler-error-recoverable' => '可捕獲的致命錯誤',
	'errorhandler-msg-text' => '$1：$2 在 $3 中（第 $4 行）',
	'errorhandler-msg-html' => '<b>$1</b>：<i>$2</i> 在 <b>$3</b> 中（第 <b>$4</b> 行）',
	'errorhandler-trace' => '追蹤：',
	'errorhandler-trace-line' => '$1（第$2行）：$3',
	'errorhandler-trace-line-internal' => '[內部函數]：$1',
);
