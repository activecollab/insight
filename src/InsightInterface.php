<?php

/*
 * This file is part of the Active Collab Insight.
 *
 * (c) A51 doo <info@activecollab.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare (strict_types = 1);

namespace ActiveCollab\Insight;

use ActiveCollab\Insight\AccountInsight\AccountInsightInterface;

/**
 * @package ActiveCollab\Insight
 */
interface InsightInterface
{
    /**
     * Return account insight instance for the given account.
     *
     * @param  int                     $account_id
     * @return AccountInsightInterface
     */
    public function account(int $account_id);
}
