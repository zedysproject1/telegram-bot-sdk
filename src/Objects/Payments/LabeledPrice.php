<?php

namespace Telegram\Bot\Objects\Payments;

use Telegram\Bot\Objects\AbstractResponseObject;

/**
 * @link https://core.telegram.org/bots/api#labeledprice
 *
 * @property string $label               Portion label
 * @property int    $amount              Price of the product in the smallest units of the currency (integer, not float/double).
 */
class LabeledPrice extends AbstractResponseObject
{
}
