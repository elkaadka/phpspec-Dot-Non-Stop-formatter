<?php

namespace Kanel\PhpSpec;
use Kanel\PhpSpec\Formatters\DotNonStopFormatter;
use PhpSpec\ServiceContainer;

/**
 * Extensions
 */
class Extension implements \PhpSpec\Extension {
	public function load(ServiceContainer $container, array $params) {
		$container->define('formatter.formatters.dotnonstop', function ($c) {
			return new DotNonStopFormatter(
				$c->get('formatter.presenter'),
				$c->get('console.io'),
				$c->get('event_dispatcher.listeners.stats')
			);
		});
	}
}