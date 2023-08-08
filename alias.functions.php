<?php
/**
 * Alias for _ngettext.
 */
function _p($singular, $plural, $number) {
    return _ngettext($singular, $plural, $number);
}

/**
 * Alias for _dgettext.
 */
function _d($domain, $msgid) {
    return dgettext($domain, $msgid);
}