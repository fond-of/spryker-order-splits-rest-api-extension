<?php

namespace FondOfSpryker\Zed\OrderSplitsRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QuoteCollectionTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\RestOrderRequestAttributesTransfer;


interface QuoteMapperPluginInterface
{
    /**
     * Specification:
     *  - Maps rest order request data to the splitted quote transfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\RestOrderRequestAttributesTransfer $restOrderRequestAttributesTransfer
     * @param \Generated\Shared\Transfer\QuoteCollectionTransfer $quoteCollectionTransfer
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransferSplit
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function map(
        RestOrderRequestAttributesTransfer $restOrderRequestAttributesTransfer,
        QuoteCollectionTransfer $quoteCollectionTransfer,
        QuoteTransfer $quoteTransferSplit,
        QuoteTransfer $quoteTransfer
    ): QuoteTransfer;
}
