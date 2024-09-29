<?php
declare(strict_types=1);

namespace Tommmoe\PayPalWebhooks\Http\Controllers;

use Tommmoe\PayPalWebhooks\PayPalWebhookConfig;
use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookProcessor;

class PayPalWebhooksController
{
    public function __invoke(Request $request)
    {
        $webhookConfig = PayPalWebhookConfig::get();

        return (new WebhookProcessor($request, $webhookConfig))->process();
    }
}
