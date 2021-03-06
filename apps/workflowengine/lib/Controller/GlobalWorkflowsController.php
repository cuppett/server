<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2019 Arthur Schiwon <blizzz@arthur-schiwon.de>
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OCA\WorkflowEngine\Controller;

use OCA\WorkflowEngine\Helper\ScopeContext;
use OCP\WorkflowEngine\IManager;

class GlobalWorkflowsController extends AWorkflowController {

	/** @var ScopeContext */
	private $scopeContext;

	protected function getScopeContext(): ScopeContext {
		if ($this->scopeContext === null) {
			$this->scopeContext = new ScopeContext(IManager::SCOPE_ADMIN);
		}
		return $this->scopeContext;
	}
}
