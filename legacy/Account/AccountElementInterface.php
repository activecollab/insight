<?php

/*
 * This file is part of the Active Collab Insight.
 *
 * (c) A51 doo <info@activecollab.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ActiveCollab\Insight\Account;

use ActiveCollab\Insight\AccountInterface;
use ActiveCollab\Insight\ElementInterface;

/**
 * @package ActiveCollab\Insight\Account
 */
interface AccountElementInterface extends ElementInterface
{
    /**
     * @return AccountInterface
     */
    public function getAccount();

    /**
     * @param  AccountInterface $account
     * @return $this
     */
    public function &setAccount(AccountInterface $account);
}