<?php
declare(strict_types=1);

namespace Tommmoe\PayPalWebhooks;

use Tommmoe\PayPalWebhooks\Model\PayPalWebhookCall;
use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookProfile\WebhookProfile;

class PayPalWebhookProfile implements WebhookProfile
{
    public function shouldProcess(Request $request): bool
    {
        $config = PayPalWebhookConfig::get();

        return PayPalWebhookCall::query()
            ->where('name', $config->name)
            ->where('payload->id', $request->json('id'))
            ->doesntExist();
    }
}
