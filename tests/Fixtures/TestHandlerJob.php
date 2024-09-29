<?php
declare(strict_types=1);

namespace Tommmoe\PayPalWebhooks\Tests\Fixtures;

use Spatie\WebhookClient\Models\WebhookCall;

class TestHandlerJob
{
    public function __construct(public WebhookCall $webhookCall)
    {
        //
    }

    public function handle()
    {
        //
    }
}
