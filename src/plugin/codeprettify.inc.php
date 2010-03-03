<?php
/**
 * codeprettify.inc.php - Syntax highlighting by using google-code-prettify
 *
 * @author      makoto_kw
 * @licence     http://www.gnu.org/licenses/gpl.html  GPLv2
 * @link        http://pukiwiki.sourceforge.jp/?%E8%87%AA%E4%BD%9C%E3%83%97%E3%83%A9%E3%82%B0%E3%82%A4%E3%83%B3/codeprettify.inc.php
 * @link        http://github.com/makotokw/pukiwiki.codeprettify
 * @link        http://code.google.com/p/google-code-prettify/
 * @version     1.0
 */
function plugin_codeprettify_convert() {
    $args   = func_get_args(); 
    $src = htmlspecialchars(rtrim(end($args)));
    return '<pre class="prettyprint">'.$src.'</pre>';
}
function plugin_codeprettify_inline() {
    $args   = func_get_args();
    $src = array_pop($args); 
    return '<pre class="prettyprint">'.$src.'</pre>';
}
?>