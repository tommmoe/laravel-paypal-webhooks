<?php
declare(strict_types=1);

namespace Tommmoe\PayPalWebhooks;

use Tommmoe\PayPalWebhooks\Jobs\ProcessPayPalWebhookJob;
use Spatie\WebhookClient\WebhookConfig;

class PayPalWebhookConfig
{
    public static function get(): WebhookConfig
    {
        return new WebhookConfig([
            'name' => 'paypal',
            'signature_validator' => PayPalSignatureValidator::class,
            'webhook_profile' => config('paypal-webhooks.profile'),
            'webhook_model' => config('paypal-webhooks.model'),
            'process_webhook_job' => ProcessPayPalWebhookJob::class,
        ]);
    }
}
