<?php

/**
 * Test: Nette\Templating\DefaultHelpers::date()
 *
 * @author     David Grudl
 * @package    Nette\Templating
 * @subpackage UnitTests
 */

use Nette\Templating\DefaultHelpers;



require __DIR__ . '/../bootstrap.php';



Assert::null( DefaultHelpers::date(NULL), "TemplateHelpers::date(NULL)" );


Assert::same( "01/23/78", DefaultHelpers::date(254400000), "TemplateHelpers::date(timestamp)" );


Assert::same( "05/05/78", DefaultHelpers::date('1978-05-05'), "TemplateHelpers::date(string)" );


Assert::same( "05/05/78", DefaultHelpers::date(new DateTime('1978-05-05')), "TemplateHelpers::date(DateTime)" );


Assert::same( "1978-01-23", DefaultHelpers::date(254400000, 'Y-m-d'), "TemplateHelpers::date(timestamp, format)" );


Assert::same( "1212-09-26", DefaultHelpers::date('1212-09-26', 'Y-m-d'), "TemplateHelpers::date(string, format)" );


Assert::same( "1212-09-26", DefaultHelpers::date(new DateTime('1212-09-26'), 'Y-m-d'), "TemplateHelpers::date(DateTime, format)" );