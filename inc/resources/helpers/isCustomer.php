<?php

/**
 * View Helper
 *
 * @package     DuckSell
 * @author      Milos Stojanovic <info@interactive32.com>
 * @copyright   Copyright 2008-2016 Interactive32.com
 */
function isCustomer() {
    return (Auth::check() && Auth::user()->role == 0);
}
