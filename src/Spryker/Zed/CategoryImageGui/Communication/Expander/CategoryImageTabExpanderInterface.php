<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CategoryImageGui\Communication\Expander;

use Generated\Shared\Transfer\TabsViewTransfer;

interface CategoryImageTabExpanderInterface
{
    public function expandWithImageTab(TabsViewTransfer $tabsViewTransfer): TabsViewTransfer;
}
