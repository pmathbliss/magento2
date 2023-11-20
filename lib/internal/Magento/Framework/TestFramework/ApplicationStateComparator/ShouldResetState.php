<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\Framework\TestFramework\ApplicationStateComparator;

enum ShouldResetState
{
    case DoResetState;
    case DoNotResetState;
}
